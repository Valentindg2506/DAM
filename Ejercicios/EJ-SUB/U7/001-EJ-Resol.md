En este ejercicio vamos a trabajar la herencia de clases y la composición en Python. Crearemos una estructura donde una superclase llamada Persona comparte sus atributos con clases más específicas como Profesor y Alumno.

---

Primero debemos definir la superclase `Persona` con sus atributos básicos y los métodos para jugar al rugby y con el móvil:
```
	class Persona():
			def __init__(self, nombre, apellidos, email, direccion):
				self.nombre = nombre
				self.apellidos = apellidos
				self.email = email
				self.direccion = direccion

			def dameDatos(self):
				return self.nombre + " " + self.apellidos

			def jugarRugby(self):
				print("Estoy jugando al rugby")

			def jugarConMovil(self):
				print("Estoy jugando con el móvil")			
```
Luego creamos la clase Profesor que hereda de `Persona` utilizando la función `super()` para inicializar los datos:
```
	class Profesor(Persona):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)
```
Después definimos la jerarquía de alumnos. Primero la clase `Alumno` y luego sus subclases `AlumnoOnline` y `AlumnoPresencial`:
```
	class Alumno(Persona):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)

		class AlumnoOnline(Alumno):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)

		class AlumnoPresencial(Alumno):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)
```
Por último, creamos las instancias de los objetos y probamos sus métodos:
```
	profesor1 = Profesor("Juan", "Garcia", "juan@jocarsa.com", "Calle Mayor, 1")
		print(profesor1.dameDatos())

		alumnoPresencial1 = AlumnoPresencial("Jose Vicente", "Carratala", "info@jocarsa.com", "Avenida del Mar, 123")
		alumnoPresencial1.jugarRugby()
		alumnoPresencial1.jugarConMovil()
```

---

A continuación el código completo:
```
	'''
			Herencia de personas, profesores y alumnos
			v0.1 Valentín Antonio De Gennaro
			Muestra el uso de herencia y composición de clases.
		'''

		## DEFINIMOS LA SUPERCLASE PERSONA ##
		class Persona():
			def __init__(self, nombre, apellidos, email, direccion):
				self.nombre = nombre
				self.apellidos = apellidos
				self.email = email
				self.direccion = direccion

			## MÉTODO PARA CONCATENAR NOMBRE Y APELLIDOS ##
			def dameDatos(self):
				return self.nombre + " " + self.apellidos

			## MÉTODO PARA JUGAR AL RUGBY ##
			def jugarRugby(self):
				print("Estoy jugando al rugby")

			## MÉTODO PARA JUGAR CON EL MÓVIL ##
			def jugarConMovil(self):
				print("Estoy jugando con el móvil")

		## DEFINIMOS LA SUBCLASE PROFESOR ##
		class Profesor(Persona):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)

		## DEFINIMOS LA SUBCLASE ALUMNO ##
		class Alumno(Persona):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)

		## DEFINIMOS LAS SUBCLASES ESPECÍFICAS DE ALUMNO ##
		class AlumnoOnline(Alumno):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)

		class AlumnoPresencial(Alumno):
			def __init__(self, nombre, apellidos, email, direccion):
				super().__init__(nombre, apellidos, email, direccion)


		## CREAMOS INSTANCIAS Y PROBAMOS MÉTODOS ##

		## Instancia de Profesor ##
		profesor1 = Profesor("Juan", "Garcia", "juan@jocarsa.com", "Calle Mayor, 1")
		print("Datos del profesor:", profesor1.dameDatos())

		## Instancia de AlumnoPresencial ##
		alumnoPresencial1 = AlumnoPresencial("Jose Vicente", "Carratala", "info@jocarsa.com", "Avenida del Mar, 123")
		print("Datos del alumno:", alumnoPresencial1.dameDatos())

		## Llamada a los métodos de hobbies ##
		alumnoPresencial1.jugarRugby()
		alumnoPresencial1.jugarConMovil()
```

---

**NOTAS:**
- El uso de `super().__init__` permite heredar los atributos de la clase madre sin tener que volver a escribirlos.
- La herencia es muy útil para evitar repetir código cuando varias clases comparten características comunes.
