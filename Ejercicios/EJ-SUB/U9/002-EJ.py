'''
	Gestión de Puntuación Rugby (Python)
	v0.1 Valentin Antonio De Gennaro
	Guarda los puntos de un partido en MySQL.
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
