################### Pedir edad #####################

edad_mago = input("Introduce la edad del mago: ")
clasificacion_mago = 0
poder_base = 0
print("La edad del mago es: ", edad_mago)

##################Convertir a entero#################

try:
    edad_mago = int(edad_mago)
    print("He convertido la edad correctamente")
    
except:
    edad_mago = 100
    print("No he convertido la edad correctamente")
    
################### Clasificacion por edad ############

if edad_mago < 30:
    clasificacion_mago = "Aprendiz"
    
elif edad_mago >= 30 and edad_mago <= 99:
    clasificacion_mago = "Hechicero"
    
elif edad_mago >= 100:
    clasificacion_mago = "Archimago"
    
print("El mago es: ", clasificacion_mago)

############ poder ###################
def poderBase(clasificacion_mago):
    '''
        poderBase
        entradas: edad_mago
        salidas: poder_base
    '''
    if clasificacion_mago == "Aprendiz":
        poder_base = 5
        
    elif clasificacion_mago == "Hechicero":
        poder_base = 8
        
    elif clasificacion_mago == "Archimago":
        poder_base = 10
    print("El poder base de tu: ", clasificacion_mago, "es: ", poder_base)

print(poderBase(clasificacion_mago))

# empezamos bucle

# escudo empieza con 15pts

# recorre dos turnos con for

# turno 1 fuego daño = poderbase // 2

# turno 2 hechizo rayo = daño = poderbase // 3

# resta el daño al escudo


#tras cada daño, print de daño y mayor que cero

#tras ajuste de energia, print y energia es mayor que cero

# salida : edad, rango, poderbase, energia del escudo

# energia es 0

# energia es mayor que 0, escudo resiste duelo
