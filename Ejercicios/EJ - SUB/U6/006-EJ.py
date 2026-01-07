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
