'''
	Registro de personas
	v0.1 Valentín Antonio De Gennaro
	Almacena datos de personas

'''

## DEFINIMOS LA CLASE ##
class Persona():
	def __init__(self):
		self.nombre = ""
		self.apellido = ""
		self.edad = 0
		self.ocupacion = ""

## DEFINO SETTERS Y GETTERS ##
	def setNombre(self, nuevonombre):
		self.nombre = nuevonombre
	def setApellido(self, nuevoapellido):
		self.apellido = nuevoapellido
	def setEdad(self, nuevaedad):
		self.edad = nuevaedad
	def setOcupacion(self, nuevaocupacion):
		self.ocupacion = nuevaocupacion
	def getNombre(self):
		return self.nombre
	def getApellido(self):
		return self.apellido
	def getEdad(self):
		return self.edad
	def getOcupacion(self):
		return self.ocupacion
		
	
personas = [] # CREO UNA LISTA VACIA #

print("Programa de registro de personas v0.1 Valentín Antonio De Gennaro")

## MUESTRO OPCIONES AL USUARIO ##

while True:
	print("Selecciona una opción: ")
	print("1.-Insertar una persona")
	print("2.-Mostrar la lista de personas")
	
## LE PERMITO ESCOGER UNA OPCION ##

	opcion = int(input("Escoge una opción: "))
	
	if opcion == 1:
		print("Vamos a insertar una persona")
## INGRESO DE INFORMACION ##
		nuevapersona = Persona()
		
		nombrepersona = input("Introduce el nombre de la persona: ")
		nuevapersona.setNombre(nombrepersona)
		
		apellidopersona = input("Introduce el apellido de la persona: ")
		nuevapersona.setApellido(apellidopersona)
		
		edadpersona = int(input("Introduce la edad de la persona: "))
		nuevapersona.setEdad(edadpersona)
		
		ocupacion = input("Introduce la ocupación de la persona: ")
		nuevapersona.setOcupacion(ocupacion)
		
## AÑADIMOS EL CLIENTE A LA LISTA ##
		personas.append(nuevapersona)

	elif opcion == 2:
		print("Vamos a ver la lista de personas")
		for Persona in personas:
			print("-------------------------------------------------")
			print("Nombre: ", Persona.getNombre())
			print("Apellido: ", Persona.getApellido())
			print("Edad: ", Persona.getEdad())
			print("Ocupación: ", Persona.getOcupacion())
			print("-------------------------------------------------")
