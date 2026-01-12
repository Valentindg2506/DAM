En este ejercicio vamos a crear la clase `RugbyScore` en Python para gestionar la puntuación de un partido y guardarla en una base de datos MySQL.

---

Para realizar este ejercicio primero debemos importar la librería para conectar con la base de datos:
```
	6import mysql.connector
```
Luego definimos la clase `RugbyScore` y su constructor para inicializar las propiedades:
```
	class RugbyScore():
		def __init__(self, puntosEquipoA, puntosEquipoB, fechaPartido):
			self.puntosEquipoA = puntosEquipoA
			self.puntosEquipoB = puntosEquipoB
			self.fechaPartido = fechaPartido
```
Después creamos el método `guardarPuntos` dentro de la clase. Este método se conectará a la base de datos e insertará los valores del propio objeto (`self`):
```
	def guardarPuntos(self):
			try:
				conexion = mysql.connector.connect(
					host="localhost",
					user="admin",
					password="Portafolio2526@",
					database="rugby"
				)
				cursor = conexion.cursor()
				
				consulta = "INSERT INTO puntuaciones VALUES (NULL, %s, %s, %s)"
				valores = (self.puntosEquipoA, self.puntosEquipoB, self.fechaPartido)
				
				cursor.execute(consulta, valores)
				conexion.commit()
				
				print("Puntos guardados correctamente en la base de datos.")
				
				cursor.close()
				conexion.close()
			except:
				print("Error al conectar con la base de datos.")
```
Y por último, fuera de la clase, instanciamos el objeto y llamamos al método:
```
	partido = RugbyScore(24, 17, "2026-01-12")
	partido.guardarPuntos()
```

---

A continuación el codigo completo:
```
	'''
		Gestión de Puntuación Rugby
		v0.1 Valentin Antonio De Gennaro
		Guarda los puntos de un partido en MySQL usando POO.
	'''

	## IMPORTAMOS EL CONECTOR ##
	import mysql.connector

	## DEFINIMOS LA CLASE ##
	class RugbyScore():
		def __init__(self, puntosEquipoA, puntosEquipoB, fechaPartido):
			self.puntosEquipoA = puntosEquipoA
			self.puntosEquipoB = puntosEquipoB
			self.fechaPartido = fechaPartido

	## METODO PARA GUARDAR EN BBDD ##
		def guardarPuntos(self):
			try:
				## ESTABLECEMOS CONEXION ##
				conexion = mysql.connector.connect(
					host="localhost",
					user="admin",
					password="Portafolio2526@",
					database="rugby"
				)
				cursor = conexion.cursor()
				
				## PREPARAMOS LA CONSULTA ##
				consulta = "INSERT INTO puntuaciones (puntos_a, puntos_b, fecha) VALUES (%s, %s, %s)"
				valores = (self.puntosEquipoA, self.puntosEquipoB, self.fechaPartido)
				
				## EJECUTAMOS ##
				cursor.execute(consulta, valores)
				conexion.commit()
				
				print("#####################################")
				print("Puntos guardados correctamente.")
				print("#####################################")
				
				## CERRAMOS ##
				cursor.close()
				conexion.close()
				
			except Exception as e:
				print("#####################################")
				print("Error en la conexión:", e)
				print("#####################################")

	## BLOQUE PRINCIPAL ##

	## CREAMOS UN OBJETO DE TIPO RUGBYSCORE ##
	partido = RugbyScore(24, 17, "2026-01-12")

	## USAMOS EL METODO DEL OBJETO PARA GUARDARLO ##
	partido.guardarPuntos()
```

---

**NOTAS:**
- Es necesario tener instalado el conector con `pip install mysql-connector-python`.
- He reutilizado las credenciales de base de datos vistas en el ejercicio `011-EJ`.
- En Python no hace falta declarar los tipos de las variables (`int`, `String`) explícitamente como en Java, Python lo infiere dinámicamente.
