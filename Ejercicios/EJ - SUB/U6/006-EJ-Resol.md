En este ejercicio vamos a crear una app con python que pueda almacenar información de una persona usando un diccionario, mostrar toda la información guardada o datos especificos y luego pedirle al usuario su edad, duplicarla, y mostrarla por pantalla.

---

Para realizar este ejericicio primero debemos crear el diccionario y asiganrle datos para poder mostrarlos luego:
```
	persona = {
		"nombre": "Alejandro",
		"apellidos": "López",
		"correo_electronico": "alex.dev@ejemplo.com",
		"edad": 22,
		"telefonos": [
		    # Lista de diccionarios para los teléfonos
		    {"tipo": "fijo", "numero": "963123456"},
		    {"tipo": "movil", "numero": "600987654"}
		]
	}
```
Luego mostramos toda la información al usuario, se la vomitamos:
```
	print("Información de la persona: ")
	print(persona)
```
Y despues le mostramos al usuario datos especificos, como el nombre y el correo:
```
	print("Datos Específicos: ")
	print("Nombre: {persona['nombre']}")
	print("Correo: {persona['correo_electronico']}")
```
Luego vamos a solicitarle al usuario que nos indique su edad con un `input`:
```
entrada_edad = input("Por favor, introduce tu edad: ")
```
Seguido de eso debemos convertir ese número a entero con un `int` para poder hacer calculos:
```
	edad_entero = int(entrada_edad)
```
Y por ultimo calculamos el doble de la edad y se la mostramos al usuario:
```
	resultado = edad_entero * 2
	print("El doble de la edad introducida es: {resultado}")
```

---

A continuación el codigo completo:
```
	'''
		Uso de diccionario y lista.
		V0.1 Valentin de Gennaro
	'''


	## Creamos el diccionario persona y le asignamos datos ##
	persona = {
		"nombre": "Alejandro",
		"apellidos": "López",
		"correo_electronico": "alex.dev@ejemplo.com",
		"edad": 22,
		"telefonos": [
		    # Lista de diccionarios para los teléfonos
		    {"tipo": "fijo", "numero": "963123456"},
		    {"tipo": "movil", "numero": "600987654"}
		]
	}

	## Mostramos la información completa ##
	print("Información de la persona: ")
	print(persona)

	## Acceder a detalles específicos ##
	print("Datos Específicos: ")
	print("Nombre: {persona['nombre']}")
	print("Correo: {persona['correo_electronico']}")

	## Accedemos a la clave 'telefonos', índice 0 (el fijo), y su clave 'numero' ##
	print("Primer teléfono fijo: {persona['telefonos'][0]['numero']}")

	## Pedimos el dato al usuario ##
	entrada_edad = input("Por favor, introduce tu edad: ")

	## Convertimos a entero ##
	edad_entero = int(entrada_edad)

	## Calculamos y mostramos ##
	resultado = edad_entero * 2
	print("El doble de la edad introducida es: {resultado}")
```

---

**NOTAS:**
- Los diccionarios almacenan datos en pares clave-valor.
- Se pueden combinar listas y diccionarios para crear estructuras de datos más complejas.

