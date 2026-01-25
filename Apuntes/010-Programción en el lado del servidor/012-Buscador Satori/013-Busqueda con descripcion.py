import requests
from lxml import html
import mysql.connector
import time
from urllib.parse import urljoin, urlparse

# --- CONFIGURACIÓN ---
# Cambia ESPN por Wikipedia para probar (es más fácil de leer para el bot)
URLS = ["https://jocarsismo.vercel.app/"]

DB_HOST = "localhost"
DB_USER = "Satori"
DB_PASSWORD = "Satori123$"
DB_NAME = "Satori"

VISITADAS = set()

def sanitize_links(base_url, links):
    urls_validas = []
    for link in links:
        if not link: continue
        link = link.strip()
        if link.startswith(("#", "javascript:", "mailto:", "tel:")): continue
        
        try:
            full_url = urljoin(base_url, link)
            parsed = urlparse(full_url)
            if parsed.scheme not in ("http", "https"): continue
            # Filtramos archivos que no sean web
            if full_url.endswith(('.jpg', '.png', '.pdf', '.css', '.js')): continue
            urls_validas.append(full_url)
        except:
            continue
    return list(set(urls_validas))

def get_description(tree):
    desc = None
    
    # --- NIVEL 1: Meta Tags (Lo más limpio) ---
    # Buscamos variaciones comunes de nombre
    xpaths_meta = [
        '//meta[@name="description"]/@content',
        '//meta[@name="Description"]/@content',
        '//meta[@property="og:description"]/@content', # Facebook/OpenGraph
        '//meta[@name="twitter:description"]/@content' # Twitter Cards
    ]
    
    for xpath in xpaths_meta:
        resultados = tree.xpath(xpath)
        if resultados:
            desc = resultados[0].strip()
            if len(desc) > 0: # Aseguramos que no esté vacío
                break

    # --- NIVEL 2: Párrafos <p> (Si fallan los metadatos) ---
    if not desc:
        parrafos = tree.xpath('//p')
        for p in parrafos:
            # text_content() saca todo el texto, ignorando negritas o enlaces internos
            texto = p.text_content().strip()
            # Filtramos menús cortos, fechas o coordenadas
            if len(texto) > 50: 
                desc = texto
                break 

    # --- NIVEL 3: OPCIÓN NUCLEAR (Si todo falla) ---
    # Busca texto dentro de divs de contenido típicos o simplemente en el body
    if not desc:
        # Intenta buscar en el contenedor principal de Wikipedia/CMS
        contenedores = tree.xpath('//div[@id="mw-content-text"] | //div[@class="entry-content"] | //body')
        if contenedores:
            # Cogemos TODO el texto, quitamos saltos de línea múltiples y espacios extra
            texto_bruto = contenedores[0].text_content()
            texto_limpio = " ".join(texto_bruto.split()) # Convierte "  hola   \n mundo " en "hola mundo"
            
            # Si encontramos un bloque de texto decente
            if len(texto_limpio) > 50:
                desc = texto_limpio

    # --- LIMPIEZA FINAL Y CORTE ---
    if desc:
        # Cortamos a 250 caracteres para que quepa bien en la DB
        return (desc[:250] + '...') if len(desc) > 250 else desc
        
    return "--- NO ENCONTRADA (Página sin texto legible) ---"

def busca(URLS):
    for URL in URLS:
        if URL in VISITADAS: continue
        VISITADAS.add(URL)
        
        # Dormimos poco para probar rápido, subelo a 2 o 3 si te bloquean
        time.sleep(1) 

        try:
            print(f"--> Crawling: {URL}")
            
            # Headers para parecer un navegador real
            headers = {
                "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
            }
            
            response = requests.get(URL, timeout=10, headers=headers)
            
            # Si la web no devuelve un 200 OK, saltamos
            if response.status_code != 200:
                print(f"    Saltando {URL} (Status: {response.status_code})")
                continue

            tree = html.fromstring(response.content)

            # --- EXTRACCIÓN ---
            title_list = tree.xpath("//title/text()")
            web_title = title_list[0].strip() if title_list else "Sin título"
            
            # Usamos la nueva función robusta
            web_desc = get_description(tree)
            
            # Guardamos un trozo del HTML (opcional)
            html_content = response.text[:200]

            print(f"    TÍTULO: {web_title}")
            print(f"    DESC:   {web_desc if web_desc else '--- NO ENCONTRADA ---'}")

            # --- BASE DE DATOS ---
            conn = mysql.connector.connect(
                host=DB_HOST, user=DB_USER, password=DB_PASSWORD, database=DB_NAME,
                charset="utf8mb4"
            )
            cur = conn.cursor()
            
            # Usamos INSERT IGNORE o comprobamos si existe para evitar duplicados si reinicias el script
            sql = """
                INSERT INTO paginas (titulo, url, contenido, descripcion)
                VALUES (%s, %s, %s, %s)
            """
            # Importante: Si web_desc es None, enviamos None a la BD
            cur.execute(sql, (web_title, URL, html_content, web_desc))
            conn.commit()
            
            cur.close()
            conn.close()

            # --- SIGUIENTE NIVEL ---
            enlaces = tree.xpath("//a/@href")
            enlaces_limpios = sanitize_links(URL, enlaces)
            
            # Limitamos la recursividad para la prueba (solo los primeros 5 enlaces)
            busca(enlaces_limpios[:5])

        except Exception as e:
            print(f"    Error en {URL}: {e}")

# Ejecutamos
busca(URLS)
