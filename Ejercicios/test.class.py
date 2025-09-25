'''
    Testeando class
    v0.1
'''

############# DEFINIMOS LA CLASE ################

class familia: 
    def __init__(self, nombre, apellido, edad, ocupacion):
        self.nombre = nombre
        self.apellido = apellido
        self.edad = edad
        self.ocupacion = ocupacion  
        
    def mostrar_info(self):
        print(f"Nombre: {self.nombre}")
        print(f"Apellido: {self.apellido}")
        print(f"Edad: {self.edad}")
        print(f"Ocupación: {self.ocupacion}")
        
########### CREAMOS LAS INSTANCIAS #############################         
    
familia1 = familia("Lautaro", "Coria", 14, "Estudiante")
familia2 = familia("Claudia", "Suarez", 51, "Agente Inmobiliario")
familia3 = familia("Mariano", "Coria", 40, "Vendedor")
familia4 = familia("Valentín", "De Gennaro", 21, "Estudiante")
familia5 = familia("Angel", "De Gennaro", 55, "Vendedor")
familia6 = familia("Victoria", "Badias", 40, "Vendedora")


########### GUARDAMOS TODAS LAS FAMILIAS EN UNA LISTA #############

lista_familia = [familia1, familia2, familia3, familia4, familia5, familia6]
    
################# SOLICITAMOS EL NOMBRE #####################

nombre_buscado = input("Dime el nombre del familiar que quieres consultar: ")

################# BUSCAMOS COINCIDENCIAS ###############

encontrado = False
for persona in lista_familia:
    if persona.nombre.lower() == nombre_buscado.lower():
        print("\nFamiliar encontrado:")
        persona.mostrar_info()
        encontrado = True
        break

if not encontrado:
    print("No se encontró a ningún familiar con ese nombre.")
