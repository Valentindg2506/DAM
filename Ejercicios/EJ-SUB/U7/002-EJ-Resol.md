En este ejercicio vamos a ampliar las clases base para añadir atributos específicos y usar polimorfismo para mostrar los datos de forma detallada.

---

Para realizar este ejercicio primero añadimos el atributo edad a la clase `Persona` y modificamos el método `dameDatos`:
```
	def dameDatos(self):
		return self.nombre + " " + self.apellidos + " tiene " + str(self.edad) + " años"
```
Luego en la clase `Profesor` añadimos el atributo asignatura y sobrescribimos el método para incluirlo:
```
	def dameDatos(self):
		return super().dameDatos() + " y enseña " + self.asignatura
```
Después en la clase `Alumno` añadimos el atributo curso y también sobrescribimos el método:
```
	def dameDatos(self):
		return super().dameDatos() + " y estudia " + self.curso
```
Por último mostramos la información por pantalla:
```
print(profesor1.dameDatos())
print(alumno1.dameDatos())
```

---

A continuación el codigo completo:
```
	'''
		Herencia y sobrescritura
		v0.1 Valentin Antonio De Gennaro
		Modifica atributos y metodos de clases heredadas.
	'''

	## DEFINIMOS LA CLASE BASE ##
	class Persona():
		def __init__(self, nombre, apellidos, email, direccion, edad):
			self.nombre = nombre
			self.apellidos = apellidos
			self.email = email
			self.direccion = direccion
			self.edad = edad

		def dameDatos(self):
			return self.nombre + " " + self.apellidos + " tiene " + str(self.edad) + " años"

	## DEFINIMOS LA CLASE PROFESOR ##
	class Profesor(Persona):
		def __init__(self, nombre, apellidos, email, direccion, edad, asignatura):
			super().__init__(nombre, apellidos, email, direccion, edad)
			self.asignatura = asignatura

		def dameDatos(self):
			return super().dameDatos() + " y enseña " + self.asignatura

	## DEFINIMOS LA CLASE ALUMNO ##
	class Alumno(Persona):
		def __init__(self, nombre, apellidos, email, direccion, edad, curso):
			super().__init__(nombre, apellidos, email, direccion, edad)
			self.curso = curso

		def dameDatos(self):
			return super().dameDatos() + " y estudia " + self.curso

	## CREAMOS LAS INSTANCIAS ##
	profesor1 = Profesor("Juan", "Garcia", "juan@jocarsa.com", "Calle Mayor, 1", 45, "Física")
	alumno1 = Alumno("Jose Vicente", "Carratala", "info@jocarsa.com", "Avenida del Mar, 123", 20, "Informática")

	## MOSTRAMOS LA INFORMACIÓN ##
	print(profesor1.dameDatos())
	print(alumno1.dameDatos())
```

---

**NOTAS:**
- Al sobrescribir un método podemos usar `super()` para aprovechar lo que ya hacía la clase padre.
- Es necesario convertir la edad a string con `str()` para evitar errores en la concatenación.

