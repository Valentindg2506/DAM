import pygame
import random
import math
from pygame import gfxdraw

# -----------------------
# Configuración general (campo más chico)
# -----------------------
WIDTH, HEIGHT = 600, 420   # antes 900x600 -> más difícil por menos espacio
CELL = 24
GRID_W, GRID_H = WIDTH // CELL, HEIGHT // CELL
FPS = 60

# Velocidad base y crecimiento por manzana (más desafiante)
BASE_SPEED = 11.0
SPEED_GROWTH = 0.35  # incremento por comida

# Colores y estilo
SNAKE_GREEN = (0, 200, 90)
SNAKE_OUTLINE = (255, 255, 255)
APPLE_RED = (220, 40, 40)
APPLE_STEM = (120, 70, 50)
APPLE_LEAF = (40, 170, 70)
UI_TEXT = (230, 230, 240)

# Grosor del cuerpo (tubería)
BODY_THICK = CELL - 6
HEAD_RADIUS = BODY_THICK // 2 + 2
TAIL_RADIUS = BODY_THICK // 2

def lerp(a, b, t):
    return a + (b - a) * t

def cell_center(x, y):
    return (int(x * CELL + CELL // 2), int(y * CELL + CELL // 2))

def draw_aa_filled_circle(surf, x, y, r, color):
    gfxdraw.aacircle(surf, x, y, r, color)
    gfxdraw.filled_circle(surf, x, y, r, color)

def draw_rounded_segment(surf, p1, p2, color, width):
    pygame.draw.line(surf, color, p1, p2, width)
    r = max(1, width // 2)
    draw_aa_filled_circle(surf, p1[0], p1[1], r, color)
    draw_aa_filled_circle(surf, p2[0], p2[1], r, color)

def draw_apple(surf, grid_pos):
    gx, gy = grid_pos
    cx, cy = cell_center(gx, gy)
    radius = CELL // 2 - 4

    # Manzana
    draw_aa_filled_circle(surf, cx, cy, radius, APPLE_RED)

    # Tallo
    stem_w, stem_h = 3, 8
    stem_rect = pygame.Rect(cx - stem_w // 2, cy - radius - 6, stem_w, stem_h)
    pygame.draw.rect(surf, APPLE_STEM, stem_rect, border_radius=2)

    # Hoja
    leaf = [
        (cx + 5, cy - radius - 2),
        (cx + 12, cy - radius - 6),
        (cx + 8, cy - radius - 12),
        (cx + 2, cy - radius - 6),
    ]
    pygame.draw.polygon(surf, APPLE_LEAF, leaf)

    # Brillo
    draw_aa_filled_circle(surf, cx - radius // 3, cy - radius // 3, max(1, radius // 5), (255, 255, 255))

class SnakeGame:
    def __init__(self):
        pygame.init()
        self.screen = pygame.display.set_mode((WIDTH, HEIGHT))
        pygame.display.set_caption("Snake Verde - campo chico")
        self.clock = pygame.time.Clock()
        self.font = pygame.font.SysFont(None, 28)
        self.big_font = pygame.font.SysFont(None, 64)
        self.reset()

    def reset(self):
        cx, cy = GRID_W // 2, GRID_H // 2
        self.snake = [(cx - 3, cy), (cx - 2, cy), (cx - 1, cy), (cx, cy)]
        self.dir = (1, 0)
        self.dir_next = (1, 0)
        self.spawn_food()
        self.time_acc = 0.0
        self.speed = BASE_SPEED
        self.score = 0
        self.best = getattr(self, "best", 0)
        self.game_over = False
        self.paused = False
        self.bg_phase = 0.0

    def spawn_food(self):
        empty = {(x, y) for x in range(GRID_W) for y in range(GRID_H)} - set(self.snake)
        self.food = random.choice(list(empty)) if empty else (0, 0)

    def handle_input(self, event):
        if event.type == pygame.KEYDOWN:
            if event.key in (pygame.K_UP, pygame.K_w) and self.dir != (0, 1):
                self.dir_next = (0, -1)
            elif event.key in (pygame.K_DOWN, pygame.K_s) and self.dir != (0, -1):
                self.dir_next = (0, 1)
            elif event.key in (pygame.K_LEFT, pygame.K_a) and self.dir != (1, 0):
                self.dir_next = (-1, 0)
            elif event.key in (pygame.K_RIGHT, pygame.K_d) and self.dir != (-1, 0):
                self.dir_next = (1, 0)
            elif event.key == pygame.K_p:
                self.paused = not self.paused
            elif event.key == pygame.K_r and self.game_over:
                self.reset()

    def step_snake(self):
        self.dir = self.dir_next
        hx, hy = self.snake[-1]
        nx, ny = hx + self.dir[0], hy + self.dir[1]

        # Colisiones con bordes
        if not (0 <= nx < GRID_W and 0 <= ny < GRID_H):
            self.game_over = True
            return

        # Colisión con sí misma
        if (nx, ny) in self.snake:
            self.game_over = True
            return

        self.snake.append((nx, ny))

        if (nx, ny) == self.food:
            # Crece y acelera
            self.score += 1
            self.best = max(self.best, self.score)
            self.speed += SPEED_GROWTH
            self.spawn_food()
        else:
            # Movimiento normal (no reduce si acaba de comer)
            self.snake.pop(0)

    def update(self, dt):
        if self.game_over or self.paused:
            self.bg_phase = (self.bg_phase + dt) % 1000.0
            return

        self.time_acc += dt
        step_time = 1.0 / self.speed
        while self.time_acc >= step_time and not self.game_over:
            self.time_acc -= step_time
            self.step_snake()

        self.bg_phase = (self.bg_phase + dt) % 1000.0

    def draw_background(self, surf):
        # Degradado sutil animado + cuadrícula
        t = (math.sin(pygame.time.get_ticks() * 0.0015) + 1) * 0.5
        c1 = (15, 18, 28)
        c2 = (28, 25, 45)
        bg = (
            int(lerp(c1[0], c2[0], t)),
            int(lerp(c1[1], c2[1], t)),
            int(lerp(c1[2], c2[2], t)),
        )
        surf.fill(bg)

        grid_color = (55, 60, 78)
        for x in range(0, WIDTH, CELL):
            pygame.draw.line(surf, grid_color, (x, 0), (x, HEIGHT), 1)
        for y in range(0, HEIGHT, CELL):
            pygame.draw.line(surf, grid_color, (0, y), (WIDTH, y), 1)

    def draw_snake_continuous(self, surf):
        pts = [cell_center(x, y) for (x, y) in self.snake]
        if len(pts) == 1:
            draw_aa_filled_circle(surf, pts[0][0], pts[0][1], HEAD_RADIUS, SNAKE_GREEN)
            return

        for a, b in zip(pts[:-1], pts[1:]):
            draw_rounded_segment(surf, a, b, SNAKE_GREEN, BODY_THICK)

        tx, ty = pts[0]
        draw_aa_filled_circle(surf, tx, ty, TAIL_RADIUS, SNAKE_GREEN)

        hx, hy = pts[-1]
        draw_aa_filled_circle(surf, hx, hy, HEAD_RADIUS, SNAKE_GREEN)
        pygame.draw.circle(surf, SNAKE_OUTLINE, (hx, hy), HEAD_RADIUS, 2)

    def draw_ui(self, surf):
        info = f"Puntuación: {self.score}   Récord: {self.best}   Vel: {self.speed:.1f}"
        text = self.font.render(info, True, UI_TEXT)
        surf.blit(text, (14, 10))

        if self.paused and not self.game_over:
            t = self.big_font.render("Pausa (P para reanudar)", True, UI_TEXT)
            surf.blit(t, (WIDTH // 2 - t.get_width() // 2, HEIGHT // 2 - 40))

        if self.game_over:
            t1 = self.big_font.render("Game Over", True, (255, 200, 200))
            t2 = self.font.render("Pulsa R para reiniciar", True, UI_TEXT)
            surf.blit(t1, (WIDTH // 2 - t1.get_width() // 2, HEIGHT // 2 - 60))
            surf.blit(t2, (WIDTH // 2 - t2.get_width() // 2, HEIGHT // 2 + 10))

    def run(self):
        running = True
        while running:
            dt = self.clock.tick(FPS) / 1000.0  # limita FPS y proporciona delta time
            for event in pygame.event.get():
                if event.type == pygame.QUIT:
                    running = False
                else:
                    self.handle_input(event)

            self.update(dt)

            self.draw_background(self.screen)
            draw_apple(self.screen, self.food)
            self.draw_snake_continuous(self.screen)
            self.draw_ui(self.screen)

            pygame.display.flip()

        pygame.quit()

if __name__ == "__main__":
    SnakeGame().run()

