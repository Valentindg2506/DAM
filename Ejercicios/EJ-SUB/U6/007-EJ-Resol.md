En este ejercicio vamos a crear un programa que genera un Sudoku válido utilizando una estructura bidimensional y posteriormente elimina un número de cada fila manteniendo la validez.

---

Primero definimos el tablero como una matriz de 9x9 inicializada con ceros. Esta estructura representará el Sudoku completo.
```

	tablero = [[0 for _ in range(9)] for _ in range(9)]
	
```
A continuación, creamos una función que comprueba si un número se puede colocar en una posición concreta del tablero sin romper las reglas del Sudoku.
```

	def es_valido(tablero, fila, columna, numero):
		for c in range(9):
		    if tablero[fila][c] == numero:
		        return False

		for f in range(9):
		    if tablero[f][columna] == numero:
		        return False

		inicio_fila = (fila // 3) * 3
		inicio_columna = (columna // 3) * 3

		for f in range(inicio_fila, inicio_fila + 3):
		    for c in range(inicio_columna, inicio_columna + 3):
		        if tablero[f][c] == numero:
		            return False

		return True

```
A continuación generamos el Sudoku completo:
```

	def generar_sudoku(tablero):
		for fila in range(9):
		    for columna in range(9):
		        if tablero[fila][columna] == 0:
		            for numero in range(1, 10):
		                if es_valido(tablero, fila, columna, numero):
		                    tablero[fila][columna] = numero
		                    if generar_sudoku(tablero):
		                        return True
		                    tablero[fila][columna] = 0
		            return False
		return True


```
Una vez generado el Sudoku completo, eliminamos un número por fila, asegurándonos de que la posición elegida contiene un valor distinto de cero.
```

	import random

	def eliminar_numeros(tablero):
		for fila in range(9):
		    columna = random.randint(0, 8)
		    tablero[fila][columna] = 0

```
Ejecutamos primero la generación y solo después la eliminación.
```

	generar_sudoku(tablero)
	eliminar_numeros(tablero)

```
Mostramos el tablero final por pantalla.
```

	for fila in tablero:
		print(fila)


```

---

A continuación el codigo completo:
```

	'''
		Sudoku
		v0.1 Valentin De Gennaro
		Genera un tablero de sudoku jugable.
	'''

	import random

	tablero = [[0 for _ in range(9)] for _ in range(9)]

	def es_valido(tablero, fila, columna, numero):
		for c in range(9):
		    if tablero[fila][c] == numero:
		        return False

		for f in range(9):
		    if tablero[f][columna] == numero:
		        return False

		inicio_fila = (fila // 3) * 3
		inicio_columna = (columna // 3) * 3

		for f in range(inicio_fila, inicio_fila + 3):
		    for c in range(inicio_columna, inicio_columna + 3):
		        if tablero[f][c] == numero:
		            return False

		return True

	def generar_sudoku(tablero):
		for fila in range(9):
		    for columna in range(9):
		        if tablero[fila][columna] == 0:
		            for numero in range(1, 10):
		                if es_valido(tablero, fila, columna, numero):
		                    tablero[fila][columna] = numero
		                    if generar_sudoku(tablero):
		                        return True
		                    tablero[fila][columna] = 0
		            return False
		return True

	def eliminar_numeros(tablero):
		for fila in range(9):
		    columna = random.randint(0, 8)
		    tablero[fila][columna] = 0

	generar_sudoku(tablero)
	eliminar_numeros(tablero)

	for fila in tablero:
		print(fila)


```

---

**NOTAS:**
- El Sudoku se genera completamente antes de eliminar números.
- Las celdas eliminadas se representan con un `0`.


