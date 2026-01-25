# Reporte de proyecto

## Estructura del proyecto

```
/var/www/html/GitHub/Programacion-DAM-25-26
├── 000-Plantillas
│   ├── 001-Crear usuario.sql
│   ├── 002-Plantilla de conexion PY-MySql.py
│   ├── 003-Flask.py
│   ├── 004-Plantilla de conexion PHP-MySql.php
│   └── 005-Estructura basica.html
├── APP
│   ├── 001- Calculador de cuadras.py
│   ├── 002- Registro de personas.py
│   ├── 003- Gestión de clientes.py
│   ├── 004- productos.py
│   ├── 005- Listado clientes.py
│   ├── 006- Generador de tickets.py
│   ├── 007- Generador de facturas con IVA.py
│   ├── 008- Agenda.py
│   ├── 009- Cuenta bancaria.py
│   ├── 010- Calculadora de impuestos.py
│   ├── 011- Banco.py
│   ├── 012- Lista de la compra.py
│   ├── 013- Agenda deportiva.py
│   └── Periodico
├── Apuntes
│   ├── 001-  Identificaciòn de elementos
│   │   ├── 001-Holamundo.py
│   │   ├── 002-variables.py
│   │   ├── 003-salidas.py
│   │   └── 004-ejercicio1-calculadroa de impuestos.py
│   ├── 002- Utilizaciòn de objetos
│   │   ├── 001-objeto math.py
│   │   ├── 002-namespace.py
│   │   ├── 003-llamada a metodos.py
│   │   ├── 005-propiedadess.py
│   │   ├── 006-fechas en python.py
│   │   ├── 007-propiedades de la fecha.py
│   │   ├── 008-destruccion de objetos.py
│   │   ├── 009-caballos en la cuadra.py
│   │   ├── 010-Gato.py
│   │   ├── 011-Matematicas.py
│   │   ├── 012-Metodo pseudoestatico.py
│   │   └── 013-Metodo estatico.py
│   ├── 003- Uso de estructuras de control
│   │   ├── 001-error.py
│   │   ├── 001-simulacro actividad subunidad rta.py
│   │   ├── 002-error con try step.py
│   │   ├── 002-simulacro actividad subunidad rta.py
│   │   ├── 003-pseudocodigo.py
│   │   ├── 004-chivato.py
│   │   ├── 005-elchivatosalta.py
│   │   ├── 005-ud3.py
│   │   ├── 006-ejemplo no tan traumatico.py
│   │   ├── 006-ud3-no-hay-que-hacer.py
│   │   ├── 007-combinacion.py
│   │   ├── 007-ud3.py
│   │   ├── 008-funcion de division.py
│   │   ├── 008-ud3anida.py
│   │   ├── 009-mejora-funcion de division.py
│   │   ├── 009-ud3saltos.py
│   │   ├── 010-nuevo fallo.py
│   │   ├── 010-ud3-while.py
│   │   ├── 011-mejora cadenas.py
│   │   ├── 011-ud3-actividad-consigna.py
│   │   ├── 012-depuracion-mejora cadenas.py
│   │   ├── 012-ud3-actividad-codigo.py
│   │   ├── 013-actividad-ud3.py
│   │   ├── 013-extraaccion de funcion.py
│   │   ├── 014-ud3-actividad-consigna.txt
│   │   ├── 020-ud3-funciones.py
│   │   ├── 021-ud3-funciones.py
│   │   ├── 022-ud3-funciones.py
│   │   ├── 023-ud3-funcion-sumar.py
│   │   ├── 025-llamada a la funcion.py
│   │   ├── Ejemplo de resolucion de ejercicio.txt
│   │   ├── funciondivision.py
│   │   └── funcionsuma.py
│   ├── 004- Desarrollo de clases
│   │   ├── 001-Conceptos de clase
│   │   │   ├── 001-clase gato.py
│   │   │   ├── 002-instanciamos gato.py
│   │   │   ├── 003-creamos otro  gato.py
│   │   │   ├── 004-elementos principales.md
│   │   │   ├── 005-propiedades y metodos.py
│   │   │   ├── 006-propiedades.py
│   │   │   ├── 007-intro-metodos.py
│   │   │   ├── 008-objeto.cliente.py
│   │   │   └── 009-clase.cliente.py
│   │   ├── 002-Estructuras y miembros de una clase
│   │   │   ├── 010-listas.py
│   │   │   ├── 011-operaciones-listas.py
│   │   │   ├── 012-CLASE-CLIENTE.py
│   │   │   ├── 013-preguntamos al usuario.py
│   │   │   ├── 014-crud.py
│   │   │   ├── 015-crud insertar y listar.py
│   │   │   └── 016-clasecliente.py
│   │   ├── 003-Creacion de propiedades
│   │   │   ├── 017-propiedades.py
│   │   │   ├── 018-propiedades pueden ser arrays.py
│   │   │   ├── 019-escribir las propiedades de una clase.py
│   │   │   ├── 020-leemos propiedad.py
│   │   │   ├── 021-los telefonos deben ser una lista.py
│   │   │   ├── 022-Aplicacion de productos.py
│   │   │   └── 023-pseudocodigo-Aplicacion de productos.py
│   │   ├── 004-Creación de metodos
│   │   │   ├── 024-Repaso de metodos.py
│   │   │   ├── 025-metodo set.py
│   │   │   ├── 026-metodo getter.py
│   │   │   ├── 027-defino propiedad privada.py
│   │   │   ├── 028-clase cuenta bancaria.py
│   │   │   ├── 029-clase cuenta bancaria.convertir a privadas.py
│   │   │   ├── 030-validaciones.py
│   │   │   ├── 031-variable global.py
│   │   │   ├── 032-ejemplo practico.py
│   │   │   ├── 033-ejemplo practico(stters y getters).py
│   │   │   └── 034-pequeño programa.py
│   │   ├── 005-Creación de constructores
│   │   │   ├── 035-repaso gato.py
│   │   │   ├── 036-al constructor se le pueden pasar parametros.py
│   │   │   ├── 037-constructor con parametros.py
│   │   │   ├── 038-mas parametros.py
│   │   │   ├── 039-tercera propiedad.py
│   │   │   ├── 040-ejemplo con cliente.py
│   │   │   └── 041-Listado de clientes.py
│   │   ├── 006-Utilización de clases y objetos
│   │   │   ├── 042-Mi propia clase.py
│   │   │   ├── 043-Redondeo alta y  baja.py
│   │   │   └── 044-Ahora uso libreria estandar.py
│   │   └── 007-Utiulización de clases heredadas
│   │       ├── 045-Gatos y perros.py
│   │       ├── 046-Clase madre animal.py
│   │       ├── 047-Clase roca.py
│   │       └── 048-Herencia multiple o multinivel.py
│   ├── 005- Lectura y escritura de información
│   │   ├── 001-Escribir texto a archivo.py
│   │   ├── 002-Ahora leemos.py
│   │   ├── 003-Creador Agenda.py
│   │   ├── 004-Leer txt.py
│   │   ├── 005-Leer json.py
│   │   ├── 006-Ahora accedemos a las parejas.py
│   │   ├── 007-articulo.html
│   │   ├── 008-Instalar servidor.md
│   │   ├── 009-Arranco flask.py
│   │   ├── 010-Escribir.py
│   │   ├── 011-apendizar.py
│   │   ├── 012-Añadir salto de linea.py
│   │   ├── 013-Leer una linea.py
│   │   ├── 014-Leer lineas.py
│   │   ├── 015-Pickle escribir.py
│   │   ├── 016-Leer pickle.py
│   │   ├── 017-Crear cliente.py
│   │   ├── 018-Guardo con pickle a binario.py
│   │   ├── 019-Recupero los datos.py
│   │   ├── 020-Listar contenid de carpeta.py.py
│   │   ├── 021-atributos.py
│   │   ├── 022-Formateo el resultado.py
│   │   ├── 023-suma del tamaño.py
│   │   ├── 024-Recorrer.py
│   │   ├── 025-Tamaño recursivo.py
│   │   ├── 026-Condicion.py
│   │   ├── 027-escribir en archivo el contenido de la carpeta.py
│   │   ├── 028-minibuscador.py
│   │   ├── 029-Busca en mapa.py
│   │   ├── 030-crear carpeta.py
│   │   ├── 031-eliminar carpeta.py
│   │   ├── 032-No se puede creae una carpeta dos veces.py
│   │   ├── 033-Solucion al problema.py
│   │   ├── 034-Crear un archivo.py
│   │   ├── 035-Eliminar archivo.py
│   │   ├── 036-Nuevo archivo con texto.py
│   │   ├── 037-Comprimir.py
│   │   ├── 038-Algoritmo de compresion.py
│   │   ├── 039-Comprimir todos los archivos de una carpeta.py
│   │   ├── 040-Comprimir carpeta.py
│   │   ├── 041- EJ FINAL SUB UNIDAD.py
│   │   ├── 042-AMPLIACION.py
│   │   ├── 043-Tkinter.py
│   │   ├── 044-command en el boton.py
│   │   ├── 045-Salida en pantalla.py
│   │   ├── 046-Microcalculadora.py
│   │   ├── 047-Calcular.py
│   │   ├── 048-Recordamos.py
│   │   ├── 049-Creo un marco.py
│   │   ├── 050-Creo un entry.py
│   │   ├── 051-Creo un boton.py
│   │   ├── 052-Funcion insertar.py
│   │   ├── 053-Mysql.py
│   │   ├── 054-Crear usuario.sql
│   │   ├── 055-Insertar en base de datos.py
│   │   ├── 056-Leer base de datos.py
│   │   ├── 057-Pintamos tablas.py
│   │   ├── 058- Frankenstein.py
│   │   └── 059-Unir con IA.py
│   ├── 006- Aplicaciòn de las estructuras de almacenamiento
│   │   ├── 001-Estructuras estaticas y dinamicas
│   │   │   ├── 001- Estructuras estaticas.py
│   │   │   ├── 002- Append a tupla.py
│   │   │   ├── 003- Escribir datos.py
│   │   │   ├── 004- Leer datos.py
│   │   │   ├── 005- Estructuras dinamicas.py
│   │   │   ├── 006- Acceso a un solo elemento.py
│   │   │   ├── 007- Sobreescribir.py
│   │   │   ├── 008- Elimnar elementos de la lista.py
│   │   │   ├── 009- Quitar un elemento en concreto.py
│   │   │   ├── 010- Tupla de nuevo.py
│   │   │   ├── 011- Diccionario.py
│   │   │   ├── 012- Acceso a un elemento.py
│   │   │   ├── 013- Repaso.md
│   │   │   ├── 014- Creamos una lista de la compra.py
│   │   │   ├── 015- Lista con diccionario.py
│   │   │   ├── 016- Un segundo elemento.py
│   │   │   ├── 017- Carga inicial.py
│   │   │   ├── 018- El usuario se crea su lista.py
│   │   │   ├── 019- Estructura if.py
│   │   │   ├── 020- Creamos la lista.py
│   │   │   ├── 021- Añado un elemento a la lista.py
│   │   │   ├── 022- Vomito la lista.py
│   │   │   ├── 023- Recorrer lista.py
│   │   │   ├── 024- Recorro la lista.py
│   │   │   └── 025- Guardo en json.py
│   │   ├── 002-Creacion de matrices (arrays)
│   │   │   ├── 026- comidas.py
│   │   │   ├── 027- Bucle infinito.py
│   │   │   ├── 028- Añado a la lista.py
│   │   │   ├── 029- Recorrer la lista.py
│   │   │   ├── 030- Acciones del menu.py
│   │   │   ├── 031- Tomamos las opciones.py
│   │   │   ├── 032- Intentamos guardar.py
│   │   │   ├── 033- Abro el archivo en modo estructura binaria.py
│   │   │   ├── 034- Print con exito.py
│   │   │   ├── 035- Cargar archivo.py
│   │   │   └── restaurante.bin
│   │   ├── 003-Matrices (arrays) multidimesionales
│   │   │   ├── 001- Variable.py
│   │   │   ├── 002- Lista.py
│   │   │   ├── 003- Matriz multidimensional.py
│   │   │   ├── 004- Otra formulacion.py
│   │   │   ├── 005- Acceso a un elemento de la primera dimension.py
│   │   │   ├── 006- Puedo acceder a la segunda dimension.py
│   │   │   ├── 007- Tambien podemos escribit.py
│   │   │   ├── 008- Ejemplo palet.py
│   │   │   ├── 009- Linea de palets.py
│   │   │   ├── 010- Estanteria de palets.py
│   │   │   ├── 011- Estanterias.py
│   │   │   ├── 012- Naves industriales.py
│   │   │   ├── 013- Agenda.py
│   │   │   ├── 014- Pickle para guardar.py
│   │   │   ├── 015- Conversiones de datos a conocidas.py
│   │   │   ├── 016- Conversiones no posibles.py
│   │   │   ├── 017- Tipo.py
│   │   │   ├── 018- Cambio de tipo de datos.py
│   │   │   └── 019- Parto.py
│   │   ├── 004-Genericidad
│   │   │   ├── 001-Genericidad en python.py
│   │   │   ├── 002-Funcion doble.py
│   │   │   ├── 003-Arreglo de genericidad.py
│   │   │   ├── 004-Meto un poco de presion.py
│   │   │   ├── 005-Try except.py
│   │   │   ├── 006-Estructura de datos.py
│   │   │   ├── 007-La volvemos a fastidiar.py
│   │   │   └── 008-Atrapamos el caso cerveza.py
│   │   ├── 005-Cadenas de caracteres. Expresiones regulares
│   │   │   ├── 001-las strings realmente son colecciones.py
│   │   │   ├── 002-Recorrer una cadena.py
│   │   │   ├── 003-Longitud de la cadena.py
│   │   │   ├── 004-Explotar.py
│   │   │   ├── 005-Ejemplo csv.py
│   │   │   ├── 006-Unir.py
│   │   │   ├── 007-Leer archivo csv.py
│   │   │   ├── 008- Convierto a matriz multidimensional.py
│   │   │   ├── 009-Remplazar.py
│   │   │   ├── 010-Quiar saltos de linea.py
│   │   │   ├── 011-Expresiones regulares.py
│   │   │   ├── 012-Regex direccion postal.py
│   │   │   ├── 013-Validar telefono.py
│   │   │   ├── 014-ollama.md
│   │   │   ├── 015-Instalar un modelo.md
│   │   │   ├── 016-Ejecutar ollama.md
│   │   │   ├── 017-Lista de modelos de ejemplo.md
│   │   │   ├── 018-Ejecutar ollama desde python.py
│   │   │   └── clientes.csv
│   │   ├── 006-Colecciones, listas, conjuntos y diccionarios
│   │   │   ├── 001-Diccionarios.py
│   │   │   ├── 002-Diccionarios ahora si.py
│   │   │   ├── 003-Lista en diccionario.py
│   │   │   ├── 004-Lista de diccionarios en diccionario.py
│   │   │   ├── 005-No argumentos.py
│   │   │   ├── 006-Ahora con argumentos.py
│   │   │   ├── 007-Doble edad con argumentos.py
│   │   │   ├── 008-Ejemplo con dos argumentos.py
│   │   │   ├── 009-Argumentos con nombre.py
│   │   │   ├── 010-Instalar y usar ffmpeg.md
│   │   │   └── 011-Acceder a diccionario.py
│   │   └── 007-Operaciones agregadas
│   │       ├── 001- Conjuntos.py
│   │       ├── 002-No repeticiones.py
│   │       ├── 003-Dos conjuntos.py
│   │       ├── 004-Comprobacion numeros.py
│   │       ├── 005-Aleatorio.py
│   │       ├── 006-Fueza bruta.py
│   │       ├── 007-Elimino un numero.py
│   │       ├── 008-Elimino X numeros.py
│   │       ├── 009-Repito 9 veces.py
│   │       ├── 010-Matriz bidimensional.py
│   │       ├── 011-flask.py
│   │       ├── 012-falsk con contador.py
│   │       ├── 013-Calculo completo.py
│   │       ├── 014-Mas eficiente.py
│   │       └── templates
│   │           ├── index.html
│   │           └── index2.html
│   ├── 007-Utilizacion avanzada de clases
│   │   ├── 000-Repaso
│   │   │   ├── 001-Npc.py
│   │   │   ├── 002-Lista de Npc.py
│   │   │   ├── 003-Ahora muchos personajes.py
│   │   │   ├── 004-Posicion aleatoria.py
│   │   │   ├── 005-Imprimo como json.py
│   │   │   ├── 006-Flask.py
│   │   │   ├── 007-Nuevo parametro.py
│   │   │   ├── 008-Muevo personajes.py
│   │   │   ├── 009-Muevo personajes pero con trigonometria.py
│   │   │   ├── 010-Creamos velocidad.py
│   │   │   ├── 011-Angulo cambia random.py
│   │   │   ├── 012-Colicion.py
│   │   │   └── templates
│   │   │       └── juego.html
│   │   ├── 001-Composición de clases
│   │   │   ├── 001-Una primera clase.py
│   │   │   ├── 002-Una segunda clase.py
│   │   │   ├── 003-Polimorfismo clasico.py
│   │   │   ├── 004-Superclase.py
│   │   │   ├── 005-Sublases.py
│   │   │   ├── 006-Diagrama.json
│   │   │   └── 006-Diagrama.svg
│   │   ├── 002-Herencia y polimorfismo
│   │   │   ├── 001-Herencia simple.py
│   │   │   └── 002-Polimorfismo clasico.py
│   │   ├── 003-Jerarquia de clase. Superclases y subclases
│   │   │   ├── 001-Preparamos.html
│   │   │   ├── 002-Script de movimiento.html
│   │   │   ├── 003-Keycodes.html
│   │   │   ├── 004-Clase nave.html
│   │   │   ├── 005-Rocas.html
│   │   │   ├── 006-variaciones en las rocas.html
│   │   │   ├── 007-Clase bala.html
│   │   │   ├── 008-Superclase.html
│   │   │   ├── 009-Ancho y alto del navegador.html
│   │   │   ├── 010-Quiero que la nave empiece en cualquier punto.html
│   │   │   ├── 011-Descansamos con un fondo.html
│   │   │   ├── 012-Crear balas.html
│   │   │   ├── 013-Creo bala nueva al disparar.html
│   │   │   ├── bala.png
│   │   │   ├── estrellas.jpeg
│   │   │   ├── nave2.png
│   │   │   └── roca2.png
│   │   ├── 004-Clases y metodos abstractos y finales
│   │   │   ├── 001-Clase abstracta.html
│   │   │   ├── 002-Transformaciones css.html
│   │   │   ├── 003-Transformaciones independientes.html
│   │   │   ├── 004-Rotaciones.html
│   │   │   ├── 005-Transformación de escala.html
│   │   │   ├── 006-Multiples transformaciónes.html
│   │   │   ├── 007-Evento tecla.html
│   │   │   ├── 008-Eventos de raton.html
│   │   │   ├── 009-Juntamos lo de antes.html
│   │   │   ├── 010-Trigonometria basica.html
│   │   │   ├── 011-Dibujar con canvas.html
│   │   │   ├── 012-Linea con angulo.html
│   │   │   ├── 013-Varias lineas.html
│   │   │   ├── 014-Temporizador.html
│   │   │   ├── 015-Bucle.html
│   │   │   ├── 016-Fecha actual.html
│   │   │   ├── 017-Reloj.html
│   │   │   ├── 018-Estilo.html
│   │   │   └── 019-Desface de 90 grados.html
│   │   └── 005-Interfaces
│   │       ├── 001-Resquests.py
│   │       ├── 002-Primera petición.py
│   │       ├── 003-Encontramos elementos html .py
│   │       ├── 004-Lista  de webs.py
│   │       ├── 005-Libreria pillow.py
│   │       ├── 006-Tamaño de imagen.py
│   │       ├── 007-Leer todos los pixeles de la img.py
│   │       ├── 008-Aclarar la imagen.py
│   │       ├── 009-Negativo.py
│   │       ├── 010-Repaso recorrer arrays.php
│   │       ├── 011-Foreach en array.php
│   │       ├── 012-Repasamos cliente.php
│   │       ├── 013-Construyo formulario.php
│   │       ├── 014-Array nombrado.php
│   │       ├── 015-Foreach en objeto.php
│   │       ├── 016-Formulario con  objeto.php
│   │       ├── jocarsa.png
│   │       ├── modificado.png
│   │       └── modificado1.png
│   ├── 010-Programción en el lado del servidor
│   │   ├── 001-Fundamentos
│   │   │   ├── 000-Diagrama.svg
│   │   │   ├── 001-Preparatoria.md
│   │   │   ├── 002-Cuota de mercado.md
│   │   │   ├── 003-Html en PHP.php
│   │   │   ├── 004-Probamos PHP.php
│   │   │   ├── 005-Que pasa con el repositorio.md
│   │   │   ├── 006-Comentarios en PHP.php
│   │   │   ├── 007-Operadores.php
│   │   │   ├── 008-Romper linea.php
│   │   │   ├── 009-Operadores de comparación.php
│   │   │   ├── 010-Operadores booleanos.php
│   │   │   ├── 011-Variables.php
│   │   │   ├── 012-Estructura for y calendario.php
│   │   │   ├── 013-if.php
│   │   │   ├── 014-else.php
│   │   │   ├── 015-else if.php
│   │   │   ├── 016-Switch.php
│   │   │   ├── 017-Arrays.php
│   │   │   ├── 018-Arrays multidimensionales.php
│   │   │   ├── 019-Declarar una función.php
│   │   │   ├── 020-Usar la funcion.php
│   │   │   ├── 021-Funciones con parametros.php
│   │   │   ├── 022-Varios parametros.php
│   │   │   ├── 023-Return en la función.php
│   │   │   └── 024-Vamos con los gatos.php
│   │   ├── 002-Get y post
│   │   │   ├── 001-Repaso de los verbos.md
│   │   │   ├── 002-Get PHP.php
│   │   │   ├── 003-Formulación de url.md
│   │   │   ├── 004-Dos parametros get.php
│   │   │   ├── 005-Formulario.html
│   │   │   ├── 006-Post.php
│   │   │   ├── 007-Autoprocesamiento.php
│   │   │   ├── 008-php.ini.md
│   │   │   ├── 009-Comprobación.php
│   │   │   ├── 010-Retomamos.php
│   │   │   ├── 011-Comprobación de existencia.php
│   │   │   ├── 012-Preguntas y respuestas.php
│   │   │   ├── 013-Atrapamos la información.php
│   │   │   └── 014-Isset.php
│   │   ├── 003-Persistencia
│   │   │   ├── 002-Voy a hacer una barbaridad.md
│   │   │   ├── 003-Leer php.php
│   │   │   ├── 004-Array nombrado en php.php
│   │   │   ├── 005-Saco el array como json.php
│   │   │   ├── 006-Isset.php
│   │   │   ├── 007-Y lo guardamos en el disco.php
│   │   │   ├── Archivo sin título
│   │   │   └── archivo.txt
│   │   ├── 004-Proyecto ANA
│   │   │   ├── 001-Analisis de tecnologias.md
│   │   │   ├── 002-Front.html
│   │   │   ├── 003-Estilizamos un poco.html
│   │   │   ├── 004-JS.html
│   │   │   ├── 005-flask.py
│   │   │   ├── 006-Nuevo endpoint.py
│   │   │   ├── 007-Estamos obligados a metodo.py
│   │   │   ├── 008-Soporte multilinea.py
│   │   │   ├── 009-Ampliaciones.py
│   │   │   └── templates
│   │   │       ├── frente.html
│   │   │       └── frenteampliado.html
│   │   ├── 005-Includes
│   │   │   ├── bloques
│   │   │   │   ├── cabecera.php
│   │   │   │   └── pie.php
│   │   │   ├── contacto.php
│   │   │   ├── index.php
│   │   │   ├── microweb
│   │   │   │   ├── contacto.html
│   │   │   │   ├── inicio.html
│   │   │   │   └── sobremi.html
│   │   │   └── sobremi.php
│   │   ├── 006-Repsito de cosas de GitHub
│   │   │   └── 001-Problemas comunes en GitHub.md
│   │   ├── 007-Bloques
│   │   │   ├── bloques
│   │   │   │   ├── navegacion.php
│   │   │   │   └── tabla.php
│   │   │   └── paneldecontrol.php
│   │   ├── 008-Sesiones en php
│   │   │   ├── 001-Variables en el mismo archivo.php
│   │   │   ├── 002-Incluso en diferentes bloques.php
│   │   │   ├── 003-Origen .php
│   │   │   ├── 004-Destino.php
│   │   │   ├── 005-Origen y uso de sesiones.php
│   │   │   └── 006-Destino con sesiones.php
│   │   ├── 009-Implantaciones CRUD
│   │   │   ├── admin
│   │   │   │   ├── css
│   │   │   │   │   └── estilo.css
│   │   │   │   ├── escritorio.php
│   │   │   │   ├── inc
│   │   │   │   │   ├── create
│   │   │   │   │   │   ├── formulario.php
│   │   │   │   │   │   └── procesaformulario.php
│   │   │   │   │   ├── delete
│   │   │   │   │   │   └── eliminar.php
│   │   │   │   │   ├── read
│   │   │   │   │   │   └── Leer.php
│   │   │   │   │   └── update
│   │   │   │   │       ├── formulario_actualizar.php
│   │   │   │   │       └── procesa_formulario.php
│   │   │   │   ├── index.php
│   │   │   │   └── procesalogin.php
│   │   │   ├── css
│   │   │   │   └── estilo.css
│   │   │   ├── inc
│   │   │   │   └── listar_articulos.php
│   │   │   └── index.php
│   │   ├── 010-Tienda online
│   │   │   ├── V0.1-Inicio
│   │   │   │   ├── back
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.2-Contenido
│   │   │   │   ├── back
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.3-BBDD
│   │   │   │   ├── Creamos BD.sql
│   │   │   │   ├── back
│   │   │   │   ├── datosdemuestra.sql
│   │   │   │   ├── diagrama de flujo.html
│   │   │   │   ├── diagrama de flujo.json
│   │   │   │   ├── diagrama de flujo.svg
│   │   │   │   ├── diagrama entidad relacion.json
│   │   │   │   ├── diagrama entidad relacion.sql
│   │   │   │   ├── diagrama entidad relacion.svg
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.4-Pasamos articulo
│   │   │   │   ├── Creamos BD.sql
│   │   │   │   ├── alter descripciones largas.sql
│   │   │   │   ├── back
│   │   │   │   ├── datosdemuestra.sql
│   │   │   │   ├── diagrama de flujo.html
│   │   │   │   ├── diagrama de flujo.json
│   │   │   │   ├── diagrama de flujo.svg
│   │   │   │   ├── diagrama entidad relacion.json
│   │   │   │   ├── diagrama entidad relacion.sql
│   │   │   │   ├── diagrama entidad relacion.svg
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.5-Vamos al carrito
│   │   │   │   ├── Creamos BD.sql
│   │   │   │   ├── alter descripciones largas.sql
│   │   │   │   ├── back
│   │   │   │   ├── datosdemuestra.sql
│   │   │   │   ├── diagrama de flujo.html
│   │   │   │   ├── diagrama de flujo.json
│   │   │   │   ├── diagrama de flujo.svg
│   │   │   │   ├── diagrama entidad relacion.json
│   │   │   │   ├── diagrama entidad relacion.sql
│   │   │   │   ├── diagrama entidad relacion.svg
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.6-Vamos a finzalizar
│   │   │   │   ├── Creamos BD.sql
│   │   │   │   ├── alter descripciones largas.sql
│   │   │   │   ├── alterar ids.sql
│   │   │   │   ├── back
│   │   │   │   ├── datosdemuestra.sql
│   │   │   │   ├── diagrama de flujo.html
│   │   │   │   ├── diagrama de flujo.json
│   │   │   │   ├── diagrama de flujo.svg
│   │   │   │   ├── diagrama entidad relacion.json
│   │   │   │   ├── diagrama entidad relacion.sql
│   │   │   │   ├── diagrama entidad relacion.svg
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   └── V0.7-Ajustes esteticos
│   │   │       ├── Creamos BD.sql
│   │   │       ├── alter descripciones largas.sql
│   │   │       ├── alterar ids.sql
│   │   │       ├── back
│   │   │       ├── datosdemuestra.sql
│   │   │       ├── diagrama de flujo.html
│   │   │       ├── diagrama de flujo.json
│   │   │       ├── diagrama de flujo.svg
│   │   │       ├── diagrama entidad relacion.json
│   │   │       ├── diagrama entidad relacion.sql
│   │   │       ├── diagrama entidad relacion.svg
│   │   │       └── front
│   │   │           ├── carrito.php
│   │   │           ├── catalogo.php
│   │   │           ├── css
│   │   │           │   └── estilo.css
│   │   │           ├── finalizacion.php
│   │   │           ├── img
│   │   │           │   ├── producto.jpg
│   │   │           │   └── samsung.jpg
│   │   │           ├── inc
│   │   │           │   ├── cabecera.php
│   │   │           │   └── piedepagina.php
│   │   │           ├── index.php
│   │   │           └── producto.php
│   │   ├── 011-Supercontrolador
│   │   │   ├── V0.1-Panel de control
│   │   │   │   ├── 001-Ayuda.md
│   │   │   │   ├── back
│   │   │   │   │   └── index.php
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.2-Explotamos
│   │   │   │   ├── 001-Ayuda.md
│   │   │   │   ├── back
│   │   │   │   │   ├── controladores
│   │   │   │   │   │   ├── poblar_menu.php
│   │   │   │   │   │   └── read.php
│   │   │   │   │   ├── css
│   │   │   │   │   │   └── estilo.css
│   │   │   │   │   ├── inc
│   │   │   │   │   │   └── conexion_bd.php
│   │   │   │   │   └── index.php
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.3-Controlador insert
│   │   │   │   ├── back
│   │   │   │   │   ├── controladores
│   │   │   │   │   │   ├── insert.php
│   │   │   │   │   │   ├── poblar_menu.php
│   │   │   │   │   │   └── read.php
│   │   │   │   │   ├── css
│   │   │   │   │   │   └── estilo.css
│   │   │   │   │   ├── inc
│   │   │   │   │   │   └── conexion_bd.php
│   │   │   │   │   └── index.php
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.4-Capricho usabilidad
│   │   │   │   ├── back
│   │   │   │   │   ├── controladores
│   │   │   │   │   │   ├── insert.php
│   │   │   │   │   │   ├── poblar_menu.php
│   │   │   │   │   │   └── read.php
│   │   │   │   │   ├── css
│   │   │   │   │   │   └── estilo.css
│   │   │   │   │   ├── inc
│   │   │   │   │   │   └── conexion_bd.php
│   │   │   │   │   └── index.php
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   ├── V0.5-Procesar insert
│   │   │   │   ├── back
│   │   │   │   │   ├── controladores
│   │   │   │   │   │   ├── insertar.php
│   │   │   │   │   │   ├── poblar_menu.php
│   │   │   │   │   │   ├── procesa_insertar.php
│   │   │   │   │   │   └── read.php
│   │   │   │   │   ├── css
│   │   │   │   │   │   └── estilo.css
│   │   │   │   │   ├── inc
│   │   │   │   │   │   └── conexion_bd.php
│   │   │   │   │   └── index.php
│   │   │   │   └── front
│   │   │   │       ├── carrito.php
│   │   │   │       ├── catalogo.php
│   │   │   │       ├── css
│   │   │   │       │   └── estilo.css
│   │   │   │       ├── finalizacion.php
│   │   │   │       ├── img
│   │   │   │       │   ├── producto.jpg
│   │   │   │       │   └── samsung.jpg
│   │   │   │       ├── inc
│   │   │   │       │   ├── cabecera.php
│   │   │   │       │   └── piedepagina.php
│   │   │   │       ├── index.php
│   │   │   │       └── producto.php
│   │   │   └── V0.6-Mejoras esteticas
│   │   │       ├── back
│   │   │       │   ├── controladores
│   │   │       │   │   ├── insertar.php
│   │   │       │   │   ├── poblar_menu.php
│   │   │       │   │   ├── procesa_insertar.php
│   │   │       │   │   └── read.php
│   │   │       │   ├── css
│   │   │       │   │   └── estilo.css
│   │   │       │   ├── inc
│   │   │       │   │   └── conexion_bd.php
│   │   │       │   └── index.php
│   │   │       └── front
│   │   │           ├── carrito.php
│   │   │           ├── catalogo.php
│   │   │           ├── css
│   │   │           │   └── estilo.css
│   │   │           ├── finalizacion.php
│   │   │           ├── img
│   │   │           │   ├── producto.jpg
│   │   │           │   └── samsung.jpg
│   │   │           ├── inc
│   │   │           │   ├── cabecera.php
│   │   │           │   └── piedepagina.php
│   │   │           ├── index.php
│   │   │           └── producto.php
│   │   └── 012-Buscador Satori
│   │       ├── 001-Crawler.py
│   │       ├── 002-Titulo enlaces.py
│   │       ├── 003-BD.sql
│   │       ├── 004-Satori guarda.py
│   │       ├── 005-Recursividad.py
│   │       ├── 006-La liamos.py
│   │       ├── 007-Saneamos.py
│   │       ├── 008-Mockup buscador.html
│   │       ├── 009-Semidinamico y estilo.php
│   │       ├── 010-Atrapamos criterio de busqueda.php
│   │       ├── 011-Resultados Mysql.php
│   │       ├── 012-Mejora con IA.php
│   │       ├── 013-Busqueda con descripcion.py
│   │       └── satorilogo.png
│   └── 011-Repaso examen 2da Eval
│       └── 001-Miercoles 7
│           ├── 000-Flujo de información.svg
│           ├── 000-Formato examen.svg
│           ├── 001-Votación examen.md
│           ├── 002-Tipos de examen propuestos.md
│           ├── 003-Examen seleccionado en clase.md
│           ├── 004-uso de lightgoldenrodyellow.md
│           ├── 005-planteamiento del examen de base de datos.md
│           ├── 006-Planteamiento del examen de lenguajes de marcas.md
│           ├── 007-Planteamiento examen programación.md
│           └── 008-Planteamiento exame PI.md
├── Ejercicios
│   ├── EJ - CLASE
│   │   ├── 0100-EJ-codigo.py
│   │   ├── 0110-EJ-codigo-dragones.py
│   │   └── 0111-EJ-codigo-Magia.py
│   ├── EJ - SUB
│   │   ├── U1
│   │   │   ├── 001-EJ-Resol.md
│   │   │   ├── 001-EJ.py
│   │   │   ├── 002-EJ-Resol.md
│   │   │   ├── 002-EJ.py
│   │   │   ├── 003-EJ-Resol.md
│   │   │   ├── 003-EJ.py
│   │   │   ├── 004-EJ-Resol.md
│   │   │   ├── 004-EJ.py
│   │   │   ├── 005-EJ-Resol.md
│   │   │   ├── 005-EJ.py
│   │   │   ├── 006-EJ-Resol.md
│   │   │   └── 006-EJ.py
│   │   ├── U2
│   │   │   ├── 001-EJ-Resol.md
│   │   │   ├── 001-EJ.py
│   │   │   ├── 002-EJ-Resol.md
│   │   │   ├── 002-EJ.py
│   │   │   ├── 003-EJ-Resol.md
│   │   │   ├── 003-EJ.py
│   │   │   ├── 004-EJ-Resol.md
│   │   │   ├── 004-EJ.py
│   │   │   ├── 005-EJ-Resol.md
│   │   │   ├── 005-EJ.py
│   │   │   ├── 006-EJ-Resol.md
│   │   │   ├── 006-EJ.py
│   │   │   ├── 007-EJ-Resol.md
│   │   │   └── 007-EJ.py
│   │   ├── U3
│   │   │   ├── 001-EJ-Resol.md
│   │   │   ├── 001-EJ.py
│   │   │   ├── 002-EJ-Resol.md
│   │   │   ├── 003-EJ-Resol.md
│   │   │   ├── 004-EJ-Resol.md
│   │   │   ├── 004-EJ.py
│   │   │   ├── 005-EJ-Resol.md
│   │   │   ├── 005-EJ.py
│   │   │   ├── 006-EJ-Resol.md
│   │   │   ├── 006-EJ.py
│   │   │   ├── 007-EJ-Resol.md
│   │   │   └── 007-EJ.py
│   │   ├── U4
│   │   │   ├── 001-EJ.md
│   │   │   ├── 001-EJ.py
│   │   │   ├── 002-EJ.md
│   │   │   ├── 002-EJ.py
│   │   │   ├── 003-EJ.md
│   │   │   ├── 003-Ej.py
│   │   │   ├── 004-EJ.md
│   │   │   ├── 004-EJ.py
│   │   │   ├── 005-EJ.md
│   │   │   ├── 005-EJ.py
│   │   │   ├── 006-EJ.md
│   │   │   ├── 006-EJ.py
│   │   │   └── 007-EJ.py
│   │   ├── U5
│   │   │   ├── 001-EJ-Resol.MD
│   │   │   ├── 001-EJ.py
│   │   │   ├── 003-EJ-Resol.md
│   │   │   ├── 003-EJ.py
│   │   │   ├── 004-EJ-Resol.md
│   │   │   ├── 004-EJ.py
│   │   │   ├── 005-EJ-Resol.md
│   │   │   ├── 005-EJ.py
│   │   │   ├── 006-EJ-Resol.md
│   │   │   ├── 006-EJ.py
│   │   │   ├── 011-EJ-Resol.md
│   │   │   └── 011-EJ.py
│   │   ├── U6
│   │   │   ├── 001-EJ-Resol.md
│   │   │   ├── 001-EJ.py
│   │   │   ├── 002-EJ-Resol.md
│   │   │   ├── 002-EJ.py
│   │   │   ├── 003-EJ-Resol.md
│   │   │   ├── 003-EJ.py
│   │   │   ├── 004-EJ-Resol.md
│   │   │   ├── 004-EJ.py
│   │   │   ├── 005-EJ-Resol.md
│   │   │   ├── 005-EJ.py
│   │   │   ├── 006-EJ-Resol.md
│   │   │   ├── 006-EJ.py
│   │   │   ├── 007-EJ-Resol.md
│   │   │   └── 007-EJ.py
│   │   └── U7
│   │       ├── 001-EJ-Resol.md
│   │       ├── 001-EJ.py
│   │       └── 001-juego.html
│   ├── EJ - UD
│   │   ├── U1
│   │   │   ├── 001-SIM-EJ-FINAL-UD1.py
│   │   │   ├── 002-EJ-FINAL-UD1-RESOL.md
│   │   │   ├── 002-EJ-FINAL-UD1.py
│   │   │   └── UD1.md
│   │   ├── U2
│   │   │   ├── 001-Eval.md
│   │   │   └── 001-planificador_cuadras.py
│   │   ├── U3
│   │   │   ├── 001-Adivina.py
│   │   │   └── 001-Eval.md
│   │   ├── U4
│   │   │   ├── 001-Eval.md
│   │   │   └── 001-Eval.py
│   │   └── U5
│   │       ├── 001-Eval.md
│   │       ├── 001-Eval.py
│   │       └── clientes.bin
│   ├── Trimestral
│   │   ├── 001-EVAL.md
│   │   ├── 001-EVAL.py
│   │   ├── SIM-PROFE
│   │   │   ├── 001-Examen de final de trimestre.md
│   │   │   ├── 002-Creamos una clase.py
│   │   │   ├── 003-Creamos un constructor.py
│   │   │   ├── 004-El constructor tiene oarametros.py
│   │   │   ├── 005-Pantalla de bienvenida.py
│   │   │   ├── 006-Bucle infinito.py
│   │   │   ├── 007-Creamos lista de clientes.py
│   │   │   ├── 008-Creamos menu.py
│   │   │   ├── 009-Atrapamos las opciones con if.py
│   │   │   ├── 010-Desarrollamos insertar cliente.py
│   │   │   ├── 011-Apendizamos.py
│   │   │   ├── 012-pass de momento.py
│   │   │   ├── 013-Desarrollo leer.py
│   │   │   ├── 014-Imprimimos mejor el cliente.py
│   │   │   ├── 015-Actualizar es como insertar.py
│   │   │   ├── 016-Chivamos el id.py
│   │   │   ├── 017-Eliminar elemento.py
│   │   │   ├── 018-Confirmacion.py
│   │   │   ├── 019-Mayus MIn.py
│   │   │   ├── 020-Lower.py
│   │   │   ├── 021-cambiamos splice por pop.py
│   │   │   ├── 022-Guardamos con pickle.py
│   │   │   ├── 023-Crago registro si existen.py
│   │   │   ├── 024-Guardamos.py
│   │   │   └── clientes.bin
│   │   └── Simuacros
│   │       └── 001-Portafolio.py
│   └── matrix.py
└── Readme.md
```

## Código (intercalado)

# Programacion-DAM-25-26
**Readme.md**
```markdown
# 🚀 Bienvenido a mi repositorio de Programación

¡Hola! 👋 Aquí encontrarás todo mi trabajo relacionado con programación.

---

## 📚 Apuntes de clase  
Mis notas y resúmenes organizados, para repasar conceptos clave y aprender de forma efectiva.

---

## 💻 Mis aplicaciones  
Aquí están las aplicaciones y proyectos que he ido desarrollando, desde pequeños ejercicios hasta proyectos completos.

---

## 📝 Evaluaciones  
Trabajos, exámenes y ejercicios evaluados que he realizado durante el curso.

---

## 🛠️ Tecnologías y lenguajes usados  
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white&style=for-the-badge)  
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white&style=for-the-badge)  
![Python](https://img.shields.io/badge/Python-3776AB?logo=python&logoColor=white&style=for-the-badge)  

```
## 000-Plantillas
**001-Crear usuario.sql**
```sql
-- CREAR USUARIO NUEVO CON CONTRASEÑA --
-- CREAMOS EL NOMBRE DE USUARIO QUE QUERAMOS --
CREATE USER 
'[usuario]'@'localhost' 
IDENTIFIED  BY '[contraseña]';

-- PERMITIR ACCESO AL USUARIO --
GRANT USAGE ON *.* TO '[usuario]'@'localhost';

-- SACARLE TODAS LAS RESTRICCIONES --
ALTER USER '[usuario]'@'localhost'
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

-- DAR ACCESO A LA BBDD "[]" --
GRANT ALL PRIVILEGES ON `[nombre bbdd]`.* 
TO '[usuario]'@'localhost';

-- RECARGAR LA TABLA DE PRIVILEGIOS --
FLUSH PRIVILEGES;

```
**002-Plantilla de conexion PY-MySql.py**
```python
import mysql.connector

conexion = mysql.connector.connect(
    host="localhost",
    user="clientes",
    password="Clientes123$",
    database="clientes"
)

cursor = conexion.cursor()  
cursor.execute("SELECT * FROM clientes;")
filas = cursor.fetchall()

print(filas)

```
**003-Flask.py**
```python
## IMPORTO LA LIBRERIA FLASK PARA CREAR WEBS ##
from flask import Flask, render_template ## CARGO ARCHIVOS HTML ##

## CREO UNA NUEVA APP ##
app = Flask(__name__)

## ESCUCHO LA RUTA RAIZ ##
@app.route("/")
def inicio():
	## Y RENDERIZO UNA PLANTILLA LAMADA index.html ##	
	return render_template("index.html")

## SI ESTE ARCHIVO NO ES UNA LIBRERIA Y ES EL ARCHIVO PRINCIPAL
if __name__ == "__main__":
## PON EN MARCHA LA APLICACIÓN ##
	app.run(debug = True)

```
**004-Plantilla de conexion PHP-MySql.php**
```php
<?php

  $host = "localhost";
  $user = "blogphp";
  $pass = "Blogphp123$";
  $db   = "blogphp";

  $conexion = new mysqli($host, $user, $pass, $db);

  $sql = "SELECT * FROM blog";

  $resultado = $conexion->query($sql);

  while ($fila = $resultado->fetch_assoc()) {
    var_dump($fila);
  }

  $conexion->close();
  
?>

```
**005-Estructura basica.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<h1>[Titulo]</h1>
			<h2>[Subtitulo]</h2>
		</header>
		<main>
			
		</main>
		<footer>
		
		</footer>
	</body>
</html>

```
## APP
**001- Calculador de cuadras.py**
```python
'''
   calculadora de cuadras
   v0.1 (c) valentin
   programa que calcula numero de cuadras a partir de los caballos
'''

from math import ceil

#datos de inicio
caballos = 0
cuadras = 0
caballos_por_cuadra = 0

#entrada de la información
caballos_por_cuadra =int(input("introduce el numero de caballos por cuadra: "))
caballos = int(input("introduce el numero de caballos: "))

#realización de cálculos
cuadras = caballos / 3
redondeoalza = matematicas.ceil(cuadras)

#salida de resultados
print("si tienes",caballos,"caballos")
print("y te caben",caballos_por_cuadra,"caballos por cuadra")
print("en ese caso necesitas",redondeoalza,"cuadras")

```
**002- Registro de personas.py**
```python
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
		
	
listapersonas = [] # CREO UNA LISTA VACIA #

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
		nuevo = Persona()
		
		nombrepersona = input("Introduce el nombre de la persona: ")
		nuevo.setNombre(nombrepersona)
		
		apellidopersona = input("Introduce el apellido de la persona: ")
		nuevo.setApellido(apellidopersona)
		
		edadpersona = int(input("Introduce la edad de la persona: "))
		nuevo.setEdad(edadpersona)
		
		ocupacion = input("Introduce la ocupación de la persona: ")
		nuevo.setOcupacion(ocupacion)
		
## AÑADIMOS EL CLIENTE A LA LISTA ##
		listapersonas.append(nuevo)
		print("Cliente insertado correctamente.")
	elif opcion == 2:
		print("Vamos a ver la lista de personas")
		for persona in listapersonas:
			print("-------------------------------------------------")
			print("Nombre:", persona.getNombre())
			print("Apellido:", persona.getApellido())
			print("Edad:", persona.getEdad())
			print("Ocupación:", persona.getOcupacion())
			print("-------------------------------------------------")

```
**003- Gestión de clientes.py**
```python
'''
	Gestor de clientes
	v0.1 Valentin Antonio De Gennaro
	Introducir, Almacenar y Listar clientes 
'''
import pickle

class Cliente():
	def __init__(self,nombre,apellido,email,edad):
		self.nombre = nombre
		self.apellidos = apellido
		self.email = email
		self.edad = edad

print("######### Gestión de clientes v0.1 #######")
print("####### Valentín Antonio De Gennaro  ######")
			
clientes = [] 
try:
	archivo = open("clientes.bin",'rb')
	clientes = pickle.load(archivo)
except:
	print("No existe archivo de datos")
    
while True:
	archivo = open("clientes.bin",'wb')
	pickle.dump(clientes,archivo)
	archivo.close()
	
	print("Selecciona una opcion")
	print("1.-Insertar un nuevo cliente")
	print("2.-Obtener listado de clientes")
	print("3.-Salir")
	opcion = int(input("Indica tu opcion: "))

	if opcion == 1: 
		print("Voy a insertar un cliente")
		nombre = input("Introduce el nombre del cliente: ") 
		apellidos = input("Introduce el apellido del cliente: ")
		email = input("Introduce el email de tu cliente: ")
		edad = input("Introduce la edad del cliente: ")
		clientes.append(Cliente(nombre,apellidos,email,edad))

	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("##########################################")
			print("Este es el cliente con ID:",identificador)
			print("Nombre: ",cliente.nombre)
			print("Apellidos: ",cliente.apellidos)
			print("Edad: ",cliente.edad)
			print("Email: ",cliente.email)
			print("##########################################")
			identificador += 1

	elif opcion == 3:
		print("Adios")
		break

```
**004- productos.py**
```python
'''
    Aplicación de gestión de productos
    v0.1 2025 Valentín Antonio De Gennaro
    Esta aplicación gestiona productos
'''

class Producto():
    def __init__(self):
        self.nombre = ""
        self.precio = 0
        

productos = []

print("Gestor de productos v0.1 Valentín Antonio De Gennaro")
while True:
    print("Selecciona una opción:")
    print("1.-Crear un nuevo producto")
    print("2.-Listar productos")
    print("3.-Actualizar productos")
    print("4.-Eliminar productos")

    opcion = int(input("Escoge tu opción: "))

    if opcion == 1:
        print("Creamos un nuevo producto")
        producto = Producto()
        producto.nombre = input("Introduce el nombre del producto: ")
        producto.precio = input("Introduce el precio del producto: ")
        productos.append(producto)   
    elif opcion == 2:
        print("Vamos a listar productos")
    elif opcion == 3:
        print("Vamos a actualizar productos")
    elif opcion == 4:
        print("Vamos a eliminar productos")

```
**005- Listado clientes.py**
```python
class Cliente():
	def __init__(self,nombre,apellidos,email,direccion):
		self.nombre = nombre
		self.apellido = apellidos
		self.email = email
		self.direccion = direccion

clientes = []
while True:

	nombre = input("Introduce el nombre del cliente: ")
	apellidos = input("Introduce los apellidos del cliente: ")
	email = input("Introduce el email del cliente: ")
	direccion = input("Introduce la direccion del cliente: ")

	clientes.append(Cliente(nombre,apellidos,email,direccion))

```
**006- Generador de tickets.py**
```python
'''
	Generador de ticket
	v0.1 Valentin Antonio De Gennaro
	A partir de datos solicitados genera un ticket
'''

############### DECLARAMOS LAS VARIABLES ################

nombre_cliente = input("Introduce el nombre del cliente: ")
edad = int(input("Introduce tu edad: "))

if edad <= 0:
	print("Edad invalida")
else:
	base_imponible = float(input("Introduce la base imponible de la factura: "))
	if base_imponible <= 0:
		print("Error")
	else: 

################## DECLARAMOS EL IVA ####################

		IVA = 0.21  # Es el 21%
		if edad < 18:
			print("No disponible para menores de 18")
			
################### CALCULAMOS #########################

		else:
			if base_imponible < 100:
				porcentaje_descuento = 0
				descuento = 0
				importe_descuento = base_imponible * descuento
				base_tras_descuento = base_imponible - importe_descuento
				importe_iva = base_tras_descuento * IVA
				total_factura = base_tras_descuento + importe_iva
			elif base_imponible >= 100 and base_imponible <=199.99:
				porcentaje_descuento = 5
				descuento = 0.05
				importe_descuento = base_imponible * descuento
				base_tras_descuento = base_imponible - importe_descuento
				importe_iva = base_tras_descuento * IVA
				total_factura = base_tras_descuento + importe_iva
			else:
				porcentaje_descuento = 10
				descuento = 0.1
				importe_descuento = base_imponible * descuento
				base_tras_descuento = base_imponible - importe_descuento
				importe_iva = base_tras_descuento * IVA
				total_factura = base_tras_descuento + importe_iva

################# GENERAMOS EL TICKET ###################

			print("--------------------")
			print("Generador de tickets")
			print("Valentin Antonio De Gennaro")
			print("v0.1-(c)-2025")
			print("--------------------")
			print("Nombre: ",nombre_cliente)
			print("Edad: ",edad)
			print("--------------------")
			print("Base imponible: ", base_imponible,"€")
			print("Porcentaje descuento: ",porcentaje_descuento,"%")
			print("Importe descuento: ", importe_descuento,"€")
			print("Base tras descuento: ", base_tras_descuento,"€")
			print("IVA: ", importe_iva,"€")
			print("Total de la factura: ", total_factura,"€")
			print("--------------------")

```
**007- Generador de facturas con IVA.py**
```python
'''
	Generador de facturas con IVA
	v0.1 Valentin Antonio De Gennaro
	Genera una factura con datos que le pide al usuario y desglosa el total
'''

#### DEFINO VARIABLES Y LE PIDO LOS DATOS AL USUARIO #####
nombre_cliente = input("Introduce el nombre del cliente: ")
precio_bruto = float(input("Introduce el precio bruto del producto: "))
IVA = 0.21    #21% del iva
DESCUENTO = 10

########## DEFINO CUANDO APLICA EL DESCUENTO #######
aplica_descuento = precio_bruto >= 50
con_descuento = aplica_descuento

################# HAGO CALCULOS ####################
iva_aplicado = precio_bruto * IVA
subtotal_con_iva = precio_bruto + iva_aplicado

############### APLICO EL DESCUENTO #################
if con_descuento:
	total = subtotal_con_iva - DESCUENTO
	aplica_descuento == True
	
else:
	aplica_descuento == False
	
####### LE MUESTRO LA INFORMACIÓN AL USUARIO ##########
if aplica_descuento == True:
	print("-------------------------------")
	print("Nombre: ",nombre_cliente)
	print("-------------------------------")
	print("Precio Bruto:                 |", precio_bruto,"€")
	print("IVA:                          |", iva_aplicado,"€")
	print("Descuento:                    |", DESCUENTO,"€")
	print("Total:                        |", total,"€")
	print("-------------------------------")

else:
	print("-------------------------------")
	print("Nombre: ",nombre_cliente)
	print("-------------------------------")
	print("Precio Bruto:                 |", precio_bruto,"€")
	print("IVA:                          |", iva_aplicado,"€")
	print("Descuento:                    |", 0,"€")
	print("Total:                        |", subtotal_con_iva,"€")
	print("-------------------------------")

```
**008- Agenda.py**
```python
while True:
	print("Dime lo que quieres hacer: ")
	print("1.-Introduce un nuevo contacto")
	print("2.-Leer todos los contactos")
	opcion = input("Escoge tu opcion: ")
	
	opcion = int(opcion)
	
	if opcion == 1:
		nombre = input("Introduce el nombre de la persona: ")
		email = input("Introduce el email de la persona: ")
		archivo = open("agenda.txt","a") ## A = AÑADIR ##
		archivo.write(nombre+ ", "+email+"\n") ## \n = BAJAR DE LINEA EN EL TXT ## 
		archivo.close()
		
	elif opcion == 2:
		archivo = open("agenda.txt","r")
		lineas = archivo.readlines()
		
		for linea in lineas:
			print(linea)
		archivo.close()

```
**009- Cuenta bancaria.py**
```python
limitediferenciasaldo = 1000

class CuentaBancaria():
	def __init__(self):
		self.__saldo = 0
		self.__cliente = ""
	
	## DEFINO SETTERS Y GETTERS PARA EL SALDO ##
	
	def setSaldo(self,nuevosaldo):
	## ESTABLEZCO UNA CONDICIÓN DE QUE VALIDA SI EL SALDO NUEVO ES MAYOR DE 1000€ ##
		if nuevosaldo > self.__saldo + limitediferenciasaldo:
	## SI SALTA LA ALARMA, AVISA Y *NO* CAMBIA EL SALDO ##
			print("Voy a avisar a la entidad de un ingreso muy grande")
		else:
	## SI PASA EL FILTRO, SOLO ENTONCES SE CAMBIA EL SALDO ##
			self.__saldo = nuevosaldo
			
	def getSaldo(self):
		return self.__saldo
		
cuentacliente1 = CuentaBancaria()
cuentacliente1.setSaldo(1000000000)
print(cuentacliente1.getSaldo())

```
**010- Calculadora de impuestos.py**
```python
'''
  Calculadora de Impuestos
  v0.1 por valentin
  funcionamiento : introduce una base imponible y se calcula IVA y total
'''


# Este programa no tiene importaciones

# Creo variables
base_imponible = 0
total_iva = 0
total_factura = 0

# aqui pondria las funciones/clases

#ahora calculamos

#primero pido una entrada
print("programa calculadora de impuestos")
print("(c) 2025 valentin")
print("introduce una base y te calculo el iva y el total")
base_imponible = float(input("introduce la base imponible de la factura: "))

#luego realizo calculos
total_iva = base_imponible*0.21
total_factura = base_imponible + total_iva

#por ultimo expreso una salida
print(" el IVA de la factura es: ",total_iva)
print(" el total de la factura es: ",total_factura)

```
**011- Banco.py**
```python
class Cliente():
## ESTE ES EL METODO CONSTRUCTOR ##
	def __init__(self):
		self.nombrecompleto = ""
		self.email = ""
		
## ESTOS SON LOS SETTERS Y LOS GETTERS ##
	def setNombreCompleto(self,nuevonombre):
		self.nombrecompleto = nuevonombre
	def setEmail(self,nuevoemail):
		self.email = nuevoemail
	def getNombreCompleto(self):
		return self.nombrecompleto
	def getEmail(self):
		return self.email
		
clientes = []  ##METO UNA LISTA VACIA##

print("Gestor de clientes v0.1 Valentin Antonio De Gennaro")
while True:
	print("Selecciona una opcion:")
	print("1.-Insertar un nuevo cliente")
	print("2.-Obtener listado de clientes")
	opcion = int(input("Indica tu opcion (1,2): "))

	if opcion == 1:  ## LOS SETTERS SE USAN EN LAS OPERACIONES DE CREACION DE NUEVOS ELEMENTOS
		print("Voy a insertar un cliente")
		nuevocliente = Cliente()
		nombrecliente = input("Introduce el nombre del cliente: ") # TOMO EL DATO #
		nuevocliente.setNombreCompleto(nombrecliente)  ## USO EL METODO SET PARA METER EL DATO EN EL OBJETO ##
		emailcliente = input("Introduce el email de tu cliente: ") # TOMO EL DATO #
		nuevocliente.setEmail(emailcliente)  ## USO EL METODO SET PARA METER EL DATO EN EL OBJETO ##
		
		clientes.append(nuevocliente)
		
	elif opcion == 2:
		print("Saco el listado de clientes")
		for cliente in clientes:
			print("-------------------------")
			print("Nombre: ", cliente.getNombreCompleto())
			print("Email: ", cliente.getEmail())
			print("-------------------------")

```
**012- Lista de la compra.py**
```python
print("Lista de la compra v0.1")
import json 								# Para usar la libreria debo importarlo

lista_de_la_compra = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
		lista_de_la_compra.append({'nombre':nombre,'cantidad':cantidad})
		archivo = open("lista.json","w") 				# Abro un archivo
		json.dump(lista_de_la_compra,archivo)			# Guardo en Json
		archivo.close()									# Cierro el archivo
		
	elif opcion == 2:
		print("Listamos la lista de la compra")
		for producto in lista_de_la_compra:
			print("")
			print("Producto:",producto['nombre'])
			print("Cantidad:",producto['cantidad'])
			print("##############################")



```
**013- Agenda deportiva.py**
```python
print("Agenda deportiva v0.1")
import json 								# Para usar la libreria debo importarlo

agenda_deportiva = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un evento")
	print("2.-Mostrar los eventos")
	print("3.-Salir")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un evento a la agenda")
		deporte = input("Indica el deporte del evento: ")
		nombre = input("Indica el nombre del evento: ")
		fecha = input("Indica la fecha del evento: ")
		descripcion = input("Indica una breve descripción del evento: ")
		agenda_deportiva.append({'deporte':deporte,'nombre':nombre,'fecha':fecha,'descripcion':descripcion})
		archivo = open("agenda.json","w") 				# Abro un archivo
		json.dump(agenda_deportiva,archivo)				# Guardo en Json
		archivo.close()									# Cierro el archivo
		
	elif opcion == 2:
		print("##### Lista de eventos ######")
		for evento in agenda_deportiva:
			print("")
			print("Deporte:",evento['deporte'])
			print("Nombre:",evento['nombre'])
			print("Fecha:",evento['fecha'])
			print("Descripción:",evento['descripcion'])
			print("##############################")
	
	elif opcion == 3:
		print("Saliendo ...")
		break



```
### Periodico
## Apuntes
### 001-  Identificaciòn de elementos
**001-Holamundo.py**
```python
print("Hola mundo desde Python")


```
**002-variables.py**
```python
nombre = "valentin"
edad = 19
nombre_completo = "valentin de gennaro"
altura = 1.83
print = ("el nombre completo es", nombre_completo)
vivo = True


```
**003-salidas.py**
```python

```
**004-ejercicio1-calculadroa de impuestos.py**
```python
'''
  Calculadora de Impuestos
  v0.1 por valentin
  funcionamiento : introduce una base imponible y se calcula IVA y total
'''


# Este programa no tiene importaciones

# Creo variables
base_imponible = 0
total_iva = 0
total_factura = 0

# aqui pondria las funciones/clases

#ahora calculamos

#primero pido una entrada
print("programa calculadora de impuestos")
print("(c) 2025 valentin")
print("introduce una base y te calculo el iva y el total")
base_imponible = float(input("introduce la base imponible de la factura: "))

#luego realizo calculos
total_iva = base_imponible*0.21
total_factura = base_imponible + total_iva

#por ultimo expreso una salida
print(" el IVA de la factura es: ",total_iva)
print(" el total de la factura es: ",total_factura)



```
### 002- Utilizaciòn de objetos
**001-objeto math.py**
```python
import math as matematicas

```
**002-namespace.py**
```python
import math

```
**003-llamada a metodos.py**
```python
import math as matematicas

print(matematicas.floor(7.2))
print(matematicas.ceil(7.2))

```
**005-propiedadess.py**
```python
import math as matematicas
 PI = matematicas.pi
 print(PI)

```
**006-fechas en python.py**
```python
import datetime as fechas

hoy = fechas.date(2025, 9, 11)
print(hoy)



```
**007-propiedades de la fecha.py**
```python
import datetime as fechas

hoy = fechas.date(2025, 9, 11)
print(hoy)

print(hoy.year)
print(hoy.month)
print(hoy.day)

diadelasemana = hoy.weekday()
print(diadelasemana)
diadelasemana = hoy.isoweekday()
print(diadelasemana)

```
**008-destruccion de objetos.py**
```python
import datetime as fechas

hoy = fechas.date(2025, 9, 11)
print(hoy)

print(hoy.year)
print(hoy.month)
print(hoy.day)

diadelasemana = hoy.weekday()
print(diadelasemana)
diadelasemana = hoy.isoweekday()
print(diadelasemana)

del hoy
print(hoy)


```
**009-caballos en la cuadra.py**
```python
'''
   calculadora de cuadras
   v0.1 (c) valentin
   programa que calcula numero de cuadras a partir de los caballos
'''

import math as matematicas

#datos de inicio
caballos = 0
cuadras = 0
caballos_por_cuadra = 0

#entrada de la información
caballos_por_cuadra =int(input("introduce el numero de caballos por cuadra: "))
caballos = int(input("introduce el numero de caballos: "))

#realización de cálculos
cuadras = caballos / 3
redondeoalza = matematicas.ceil(cuadras)

#salida de resultados
print("si tienes",caballos,"caballos")
print("y te caben",caballos_por_cuadra,"caballos por cuadra")
print("en ese caso necesitas",redondeoalza,"cuadras")



```
**010-Gato.py**
```python
class Gato():
	def __init__(self):
		self.nombre = ""
	def maulla():
		return "miau"
		
gato1 = Gato()
gato1.nombre = "Belcebú"

gato2 = Gato()
gato2.nombre = "Micifu"



```
**011-Matematicas.py**
```python
class Matematicas():
	def __init__(self):
		self.numero = 0
	def suma(self,a,b):
		return a+b
		
operacion1 = Matematicas()
print(operacion1.suma(4,3))

operacion2 = Matematicas()
print(operacion2.suma(6,7))



```
**012-Metodo pseudoestatico.py**
```python
class Matematicas():
	def __init__(self):
		self.numero = 0
	def suma(self,a,b):
		return a+b
		
print(Matematicas|.suma(6,7))


```
**013-Metodo estatico.py**
```python
class Matematicas():
	def __init__(self):
		self.numero = 0
		
	@staticmethod
	def suma(self,a,b):
		return a+b
		
print(Matematicas|.suma(6,7))


```
### 003- Uso de estructuras de control
**001-error.py**
```python
print(4/0)

print("Y el programa continua")


```
**001-simulacro actividad subunidad rta.py**
```python
cancion = "bohenmian rhapsody"
print(cancion)

cancion = "hey jude"
print(cancion)

cantante = "freddie mercury"
print(cantante)

cantante = "paul mccartney"
print(cantante)


```
**002-error con try step.py**
```python
print(4/0)

print("Y el programa continua")


```
**002-simulacro actividad subunidad rta.py**
```python
'''
   Calculador de puntuación de videojuegos
   v0.1 Valentin de Gennaro
   Este programa calcula la puntuación de tu juego favorito
'''
   

#Datos del inicio
nombre_del_juego = 0
puntuación = 0

#Entrada de datos
nombre_del_juego = input("Introduce el nombre de tu juego favorito: ")
puntuación = int(input("introduce la puntuación: "))

#Cálculos
doble_de_la_puntuación = puntuación * 2

#Salida de los resultados
print("Tu juego favorito es", nombre_del_juego, "Y el doble de su puntuación es", doble_de_la_puntuación)




```
**003-pseudocodigo.py**
```python
try:
    print(4/0)
    print("intento conectarme a la base de datos")
    print("pero falla")
except:
    print("no puedo ejecutar eso")
    print("pues por lo menos guardo los datos en un archivo local temporal")

print("Y el programa continua")


```
**004-chivato.py**
```python
assert 3 == 3 , "eso no es cierto"


```
**005-elchivatosalta.py**
```python
assert 3 == 2 , "eso no es cierto"


```
**005-ud3.py**
```python
#el código solo se ejecuta si la expresión es verdadera
edad = 5

if edad < 10:
    print("Eres un niño")
elif edad >=10 and edad < 20:
    print("Eres un adolescente")
elif edad >= 20 and edad < 30:
    print("eres un joven")
else:
    print("ya no eres un joven")

```
**006-ejemplo no tan traumatico.py**
```python
edad = 47

assert edad == 48 , "eso no es cierto"



```
**006-ud3-no-hay-que-hacer.py**
```python
#esto no hay que hacerlo

edad=47

if edad < 30:
    if edad < 20:
        print("eres muuuy joven")
    else:
        print("eres un joven")
else:
    if edad < 40:
        print("eres bastante joven")
    else:
            print("ya no eres joven")

```
**007-combinacion.py**
```python
edad = 47
try:
    assert edad == 48 , "eso no es cierto"
except:
    print("error de terminal")


```
**007-ud3.py**
```python
# cuento los días del mes
for dia in range(1,31):
    print("Hoy es el día",dia,"del mes")

```
**008-funcion de division.py**
```python
def hazdivision(dividendo,divisor):
    resultado = dividendo/divisor
    return resultado
    
print(hazdivision(4,3))

for i in range(-100,100):
    for j in range(-100,100):
        hazdivision(i,j)
        
print("todo ha sido correcto")

```
**008-ud3anida.py**
```python
# cuento los días del mes
for anio in range(1978,2026):
    for mes in range(1,13):
        for dia in range(1,31):
            print("Hoy es el día",dia,"del mes",mes,"del año",anio)

```
**009-mejora-funcion de division.py**
```python
def hazdivision(dividendo,divisor):
    if divisor != 0:
        resultado = dividendo/divisor
    else:
        resultado = 0
    return resultado
    
print(hazdivision(4,3))

for i in range(-100,100):
    for j in range(-100,100):
        hazdivision(i,j)

print("todo ha sido correcto")

```
**009-ud3saltos.py**
```python
# cuento los días del mes
#pares
for pares in range(0,100,2):
    print(pares)

#impares
for pares in range(1,100,2):
    print(pares)



```
**010-nuevo fallo.py**
```python
def hazdivision(dividendo,divisor):
#comprobamos si son numeros
    if isinstance(dividendo, (int, float, complex)) and isinstance(divisor, (int, float, complex)):
#comprobamos que el divisor no es cero
        if divisor != 0:
            resultado = dividendo/divisor
        else:
            resultado = 0
        return resultado
    else:
        return 0
    
print(hazdivision(4, "a"))

```
**010-ud3-while.py**
```python
dia = 1

while dia < 31:
    print("hoy es el dia",dia,"del mes")
    dia += 1 # dia = dia + 1


```
**011-mejora cadenas.py**
```python
def hazdivision(dividendo,divisor):
#comprobamos si son numeros
    if isinstance(dividendo, (int, float, complex)) and isinstance(divisor, (int, float, complex)):
#comprobamos que el divisor no es cero
        if divisor != 0:
            resultado = dividendo/divisor
            return resultado
        else:
            resultado = 0
    else:
        try:
            dividendo = float(dividendo)
            divisor = float(divisor)
            resultado = dividendo/divisor
            return resultado
        except:
            return 0
    
print(hazdivision(4, "3"))

```
**011-ud3-actividad-consigna.py**
```python
# Escribir pseudocodigo

-pide al usuario la edad
-si la edad es menor a 8, pre-mini
-si la edad va de 8 a 11, mini
-si la edad va de 12 a 15, infantil
-si la edad va de 16 a 17, cadete
-si la edad va de 18 a 20, junior
-si la edad va de 21 a mas, senior
-si la edad es mayor a 40, veterano
-muestra la categoria

#empezamos a meter palabritas
 
-pide al usuario la edad input
-si la edad es menor a 8, pre-mini if
-si la edad va de 8 a 11, mini if
-si la edad va de 12 a 15, infantil if
-si la edad va de 16 a 17, cadete if
-si la edad va de 18 a 20, junior if
-si la edad va de 21 a mas, senior if
-si la edad es mayor a 40, veterano if
-muestra la categoria print

```
**012-depuracion-mejora cadenas.py**
```python
def hazdivision(dividendo,divisor):
'''
    funcion de division
    entradas: dividendo y divisor que se esperan que sean numericos
    salidas: resultado de la division como numeros (o cero si hay fallo)
    capturas de error:
     1. si es numerico
     2. si se puede convertir a numero
     3. si no es division entre cero
'''
#comprobamos si son numeros
    print("entramos en la funcion")
    if isinstance(dividendo, (int, float, complex)) and isinstance(divisor, (int, float, complex)):
        print("parece que los parametros son numeros")
#comprobamos que el divisor no es cero
        if divisor != 0:
            print("parece que los puedo dividir")
            resultado = dividendo/divisor
            return resultado
        else:
            print("no puedo dividir porque el divisor es cero")
            resultado = 0
    else:
        print("los parametros no son numeros, pero voy a intentar convertirlos")
        try:
            print("intento convertir a numeros con exito")
            dividendo = float(dividendo)
            divisor = float(divisor)
            resultado = dividendo/divisor
            return resultado
        except:
            print("he intentado convertir a numeros, pero no he podido")
            return 0
    
print(hazdivision(4, "3"))

```
**012-ud3-actividad-codigo.py**
```python
#docstring
'''
    Programa clasificador de baloncesto
    v0.1 Valentín de Gennaro
    Este programa clasifica categorías por edades
'''
#importaciones
#este programa no requiere importaciones

#declaraciones variables globales
#inicializamos las variables con valores vacíos

#funciones/clases
#en este programa no hay funciones o clases

#función principal

edad = int(input("Introduce tu edad"))
if edad < 8:
    categoria = "pre-mini"
elif edad >=8 and edad < 12:
    categoria = "mini"
elif edad >=12 and edad < 16:
    categoria = "infantil"
elif edad >=16 and edad < 18:
    categoria = "cadete"
elif edad >=18 and edad < 21:
    categoria = "junior"
else:
    categoria = "senior"
 
print("Tu edad es de",edad,"años y tu categoría es",categoria)

if edad > 40:
    print("Eres un veterano en la cancha")

```
**013-actividad-ud3.py**
```python
#docstring
'''
    Programa contador de patitos de goma
    v0.1 Valentín de Gennaro
    Este programa te simula el conteo de patitos de goma
'''


```
**013-extraaccion de funcion.py**
```python
from funciondivision import hazdivision

print(hazdivision(4, "3"))

```
**020-ud3-funciones.py**
```python
#deben escribirse con camelcase
#deben tener un verbo (infinito o imperativo) y un objeto directo)
#deben tener un nombre descriptivo

def dihola():
    print("te digo hola")

dihola()

```
**021-ud3-funciones.py**
```python
#deben escribirse con camelcase
#deben tener un verbo (infinito o imperativo) y un objeto directo)
#deben tener un nombre descriptivo

def dihola(nombre,edad):
    print("hola",nombre,"tienes",edad,"años y yo te saludo")

dihola("valentin de gennaro", 21)
dihola("valentin", 19)


```
**022-ud3-funciones.py**
```python
#deben escribirse con camelcase
#deben tener un verbo (infinito o imperativo) y un objeto directo)
#deben tener un nombre descriptivo
#parámetro es el valor que entra en la función
#return es la forma limpia de sacar información de una función


def dihola(nombre,edad):
    return"hola,"+nombre+",tienes"+str(edad)+"años y yo te saludo"
    
#str para un numero y no de error

dihola("valentin de gennaro", 21)
dihola("valentin", 19)


```
**023-ud3-funcion-sumar.py**
```python
'''
funcion correcta:
nombre: verbo imperativo (o infinitivo) + objeto directo
usa camelcase
debe tener parametros de entrada
debe tener una salida "return"
debemos evitar prints u otros recursos de salida dentro de la función
'''


def calculasuma(operando1,operando2):
    resultado = operando1 + operando2
    return resultado

print(calculasuma(4,3))

```
**025-llamada a la funcion.py**
```python
#from archivo import funcion, funcion2, funcion3

from funcionsuma import calculasuma

print(calculasuma(4,3))

```
**funciondivision.py**
```python
def hazdivision(dividendo,divisor):
    '''
        funcion de division
        entradas: dividendo y divisor que se esperan que sean numericos
        salidas: resultado de la division como numeros (o cero si hay fallo)
        capturas de error:
         1. si es numerico
         2. si se puede convertir a numero
         3. si no es division entre cero
    '''
#comprobamos si son numeros
    print("entramos en la funcion")
    if isinstance(dividendo, (int, float, complex)) and isinstance(divisor, (int, float, complex)):
        print("parece que los parametros son numeros")
#comprobamos que el divisor no es cero
        if divisor != 0:
            print("parece que los puedo dividir")
            resultado = dividendo/divisor
            return resultado
        else:
            print("no puedo dividir porque el divisor es cero")
            resultado = 0
    else:
        print("los parametros no son numeros, pero voy a intentar convertirlos")
        try:
            print("intento convertir a numeros con exito")
            dividendo = float(dividendo)
            divisor = float(divisor)
            resultado = dividendo/divisor
            return resultado
        except:
            print("he intentado convertir a numeros, pero no he podido")
            return 0

```
**funcionsuma.py**
```python
def calculasuma(operando1,operando2):
    resultado = operando1 + operando2
    return resultado

```
### 004- Desarrollo de clases
#### 001-Conceptos de clase
**001-clase gato.py**
```python
#Opcional la primera letra en mayus, en java es obligatorio
class Gato:
    pass
#pass de momento no ocurre nada




```
**002-instanciamos gato.py**
```python
#Opcional la primera letra en mayus, en java es obligatorio
class Gato:
    pass
#pass de momento no ocurre nada

gato1 = Gato()
print(gato1)


```
**003-creamos otro  gato.py**
```python
#Opcional la primera letra en mayus, en java es obligatorio
class Gato:
    pass
#pass de momento no ocurre nada

gato1 = Gato()
print(gato1)

gato2 = Gato()
print(gato2)


```
**004-elementos principales.md**
```markdown
Elementos principales de una clase:

- Propiedades: piezas de informacion estaticas ("no se mueven")
- Metodos: piezas de informacion que se mueven

```
**005-propiedades y metodos.py**
```python
class Gato:
    def __init__(self):
        self.color = ""

jaegger = Gato()
jaegger.color = "crema"

lana = Gato
lana.color = "gris"

```
**006-propiedades.py**
```python
class Gato:
    def __init__(self):
        self.color = ""

jaegger = Gato()
jaegger.color = "crema"

lana = Gato
lana.color = "gris"



```
**007-intro-metodos.py**
```python
class Gato:
    def __init__(self):
        self.color = ""
        self.edad = 0
    def maulla(self):
        print("El gato esta maullando")

jaegger = Gato()
jaegger.color = "crema"
jaegger.edad = 9
jaegger.maulla()

lana = Gato()
lana.color = "gris"
lana.edad = 11
lana.maulla()


```
**008-objeto.cliente.py**
```python
cliente1_email = "info@jocarsa.com"
cliente1_direccion = "la calle de jose vicente"
cliente1_nombre = "Jose vicente"
cliente1_apellidos = "carratala sanchis"

cliente1_email = "info@cliente2.com"
cliente1_direccion = "la calle del cliente2"
cliente1_nombre = "pepe"
cliente1_apellidos = "sanchez"

```
**009-clase.cliente.py**
```python
##############Poco estable uso de muchas variables#########

cliente1_email = "info@jocarsa.com"
cliente1_direccion = "la calle de jose vicente"
cliente1_nombre = "Jose vicente"
cliente1_apellidos = "carratala sanchis"

cliente2_email = "info@cliente2.com"
cliente2_direccion = "la calle del cliente2"
cliente2_nombre = "pepe"
cliente2_apellidos = "sanchez"

###############Mucho mejor uso de clases#################

class Cliente:
    def __innit__(self):
        self.email = ""
        self.direccion = ""
        self.nombre = ""
        self.apellidos = ""

cliente1 = Cliente()
cliente1.email = "info@jocarsa.com"
cliente1.direccion = "la calle de jose vicente"
cliente1.nombre = "Jose vicente"
cliente1.apellidos = "carratala sanchis"

cliente2 = Cliente()
cliente2.email = "info@cliente2.com"
cliente2.direccion = "la calle del cliente2"
cliente2.nombre = "pepe"
cliente2.apellidos = "sanchez"

#Las clases nos permiten agrupar datos


```
#### 002-Estructuras y miembros de una clase
**010-listas.py**
```python
cliente1 = "juan"
cliente2 = "jorge"

clientes = ["Juan", "Jorge", "Jaime", "Jose"]
print(clientes)

```
**011-operaciones-listas.py**
```python
cliente1 = "juan"
cliente2 = "jorge"

clientes = ["Juan", "Jorge", "Jaime", "Jose"]
print(clientes)

#AÑADIR UN CLIENTE#
clientes.append("julia")
print(clientes)

# QUITAR UN ELEMENTO DE LA LISTA #
clientes.pop()
print(clientes)

```
**012-CLASE-CLIENTE.py**
```python
####### DECLARAMOS LA CLASE ############
class Cliente():
    def __init__(self):
        self.email = None
        self.nombre = None
        self.direccion = None

########## USAMOS LA CLASE INSTANCIANDO EN UN OBJETO ######
cliente1 = Cliente()
cliente1.email = "test@gmail.com"
cliente1.nombre = "jose"
cliente1.direccion = "la calle de jose"


```
**013-preguntamos al usuario.py**
```python
####### DECLARAMOS LA CLASE ############
class Cliente():
    def __init__(self):
        self.email = None
        self.nombre = None
        self.direccion = None

########## USAMOS LA CLASE INSTANCIANDO EN UN OBJETO ######
cliente1 = Cliente()
cliente1.email = input("Introduce el email del cliente: ")
cliente1.nombre = input("Introduce el nombre del cliente: ")
cliente1.direccion = input("Introduce la dirección del cliente: ")

print(cliente1)
print(cliente1.email)
print(cliente1.nombre)
print(cliente1.direccion)

```
**014-crud.py**
```python
#CRUD
#CREATE
#READ
#UPDATE
#DELETE

print("Programa de gestión de clientes v0.1 Valentin de Gennaro")

##### MUESTRO OPCIONES AL USUARIO #########
print("Selecciona una opción: ")
print("1.-Insertar un cliente")
print("2.-Listar clientes")
print("3.-Actualizar clientes")
print("4.-Eliminar clientes")

#### LE PERMITO ESCOGER UNA OPCION ####
opcion = input("Escoge una opción: ")
opcion = int(opcion) #CONVIERTO A ENTERO#

clientes = []  #CREO UNA LISTA VACIA#

while True: #ESTO DESATA UN BUCLE INFINITO PERO CONTROLADO#
    if opcion == 1:
        print("Vamos a insertar un cliente")
    elif opcion == 2:
        print("Vamos a ver a los clientes")
    elif opcion == 3:
        print("Vamos a actualizar un cliente")
    elif opcion == 4:
        print("Vamos a eliminar un cliente")
    else:
        break



```
**015-crud insertar y listar.py**
```python
#CRUD
#CREATE
#READ
#UPDATE
#DELETE

print("Programa de gestión de clientes v0.1 Valentin de Gennaro")

##### MUESTRO OPCIONES AL USUARIO #########
print("Selecciona una opción: ")
print("1.-Insertar un cliente")
print("2.-Listar clientes")
print("3.-Actualizar clientes")
print("4.-Eliminar clientes")



clientes = []  #CREO UNA LISTA VACIA#

while True: #ESTO DESATA UN BUCLE INFINITO PERO CONTROLADO#

#### LE PERMITO ESCOGER UNA OPCION ####
    opcion = input("Escoge una opción: ")
    opcion = int(opcion) #CONVIERTO A ENTERO#
    
    if opcion == 1:
        print("Vamos a insertar un cliente")
        nuevocliente = input("Introduce el nombre del cliente: ")
        clientes.append(nuevocliente)
    elif opcion == 2:
        print("Vamos a ver a los clientes")
        print(clientes)
    elif opcion == 3:
        print("Vamos a actualizar un cliente")
    elif opcion == 4:
        print("Vamos a eliminar un cliente")
    else:
        break



```
**016-clasecliente.py**
```python
#CRUD
#CREATE
#READ
#UPDATE
#DELETE

####### DECLARAMOS LA CLASE ############
class Cliente():
    def __init__(self):
        self.email = None
        self.nombre = None
        self.direccion = None

print("Programa de gestión de clientes v0.1 Valentin de Gennaro")

##### MUESTRO OPCIONES AL USUARIO #########
print("Selecciona una opción: ")
print("1.-Insertar un cliente")
print("2.-Listar clientes")
print("3.-Actualizar clientes")
print("4.-Eliminar clientes")



clientes = []  #CREO UNA LISTA VACIA#

while True: #ESTO DESATA UN BUCLE INFINITO PERO CONTROLADO#

#### LE PERMITO ESCOGER UNA OPCION ####
    opcion = input("Escoge una opción: ")
    opcion = int(opcion) #CONVIERTO A ENTERO#
    
    if opcion == 1:
        print("Vamos a insertar un cliente")
        nuevocliente = Cliente()
      ## AHORA LE PONEMOS PROPIEDADES ##
      ## A LARGO PLAZO ES INSEGURO ##
        nuevocliente.nombre = input("Introduce el nombre del cliente: ")
        nuevocliente.email = input("Introduce el email del cliente: ")
        nuevocliente.direccion = input("Introduce la direccion del cliente: ")
      ## AÑADIMOS UN CLIENTE A LA LISTA ##
        clientes.append(nuevocliente)
    elif opcion == 2:
        print("Vamos a ver a los clientes")
        print(clientes)
    elif opcion == 3:
        print("Vamos a actualizar un cliente")
    elif opcion == 4:
        print("Vamos a eliminar un cliente")
    else:
        break



```
#### 003-Creacion de propiedades
**017-propiedades.py**
```python
## LAS PROPIEDADES SON COMO LAS VARIABLES PERO DENTRO DE UNA CLASE ##
## GUARDAN INFO DENTRO DE UNA CLASE ##

class cliente():
    def __init__ (self):
        self.nombre = ""
        self.edad = 0
        
        
        

```
**018-propiedades pueden ser arrays.py**
```python
## LAS PROPIEDADES SON COMO LAS VARIABLES PERO DENTRO DE UNA CLASE ##
## GUARDAN INFO DENTRO DE UNA CLASE ##

class cliente():
    def __init__ (self):
        self.nombre = ""
        self.edad = 0
        self.telefonos = ["543534","5345345"]
        
        
        

```
**019-escribir las propiedades de una clase.py**
```python
## LAS PROPIEDADES SON COMO LAS VARIABLES PERO DENTRO DE UNA CLASE ##
## GUARDAN INFO DENTRO DE UNA CLASE ##

class cliente():
    def __init__ (self):
        self.nombre = ""
        self.edad = 0
        self.telefonos = ["543534","5345345"]
        
        
        
        

```
**020-leemos propiedad.py**
```python
## LAS PROPIEDADES SON COMO LAS VARIABLES PERO DENTRO DE UNA CLASE ##
## GUARDAN INFO DENTRO DE UNA CLASE ##

class cliente():
    def __init__ (self):
        self.nombre = ""
        self.edad = 0
        self.telefonos = ["543534","5345345"]

##AHORA INSTANCIO UN NUEVO OBJETO ##

cliente1 = cliente()

## AHORA LE ESCRIBO UNA PROPIEDAD ##

cliente1.nombre = "José Vicente"

print("El nombre del cliente es:",cliente1.nombre)
        
        
        

```
**021-los telefonos deben ser una lista.py**
```python
## LAS PROPIEDADES SON COMO LAS VARIABLES PERO DENTRO DE UNA CLASE ##
## GUARDAN INFO DENTRO DE UNA CLASE ##

class Cliente():
    def __init__ (self):
        self.nombre = ""
        self.edad = 0
        self.telefonos = []

##AHORA INSTANCIO UN NUEVO OBJETO ##

cliente1 = Cliente()

## AHORA LE ESCRIBO UNA PROPIEDAD ##

cliente1.nombre = "José Vicente"

print("El nombre del cliente es:",cliente1.nombre)

cliente1.telefonos.append("6546464")
cliente1.telefonos.append("3546466")

print(cliente1.telefonos)
        
        

```
**022-Aplicacion de productos.py**
```python
'''
    Aplicación de gestión de productos
    v0.1 2025 Valentín Antonio De Gennaro
    Esta aplicación gestiona productos
'''

class Producto():
    def __init__(self):
        self.nombre = ""
        self.precio = 0
        

productos = []

print("Gestor de productos v0.1 Valentín Antonio De Gennaro")
while True:
    print("Selecciona una opción:")
    print("1.-Crear un nuevo producto")
    print("2.-Listar productos")
    print("3.-Actualizar productos")
    print("4.-Eliminar productos")

    opcion = int(input("Escoge tu opción: "))

    if opcion == 1:
        print("Creamos un nuevo producto")
        producto = Producto()
        producto.nombre = input("Introduce el nombre del producto: ")
        producto.precio = input("Introduce el precio del producto: ")
        productos.append(producto)   
    elif opcion == 2:
        print("Vamos a listar productos")
    elif opcion == 3:
        print("Vamos a actualizar productos")
    elif opcion == 4:
        print("Vamos a eliminar productos")



```
**023-pseudocodigo-Aplicacion de productos.py**
```python
'''
    Aplicación de gestión de productos
    v0.1 2025 Valentín Antonio De Gennaro
    Esta aplicación gestiona productos
'''

## LIBRERÍAS NO ##

## DEFINIMOS CLASES Y FUNCIONES ##

class Producto():
    def __init__(self):
        self.nombre = ""
        self.precio = 0
        
## CREAMOS LAS VARIABLES GLOBALES ##

productos = []

# primero lanzamos un mensaje de bienvenida
print("Gestor de productos v0.1 Valentín Antonio De Gennaro")
# metemos al usuario en un bucle infinito
while True:
# le mostramos al usuario las opciones que tiene
    print("Selecciona una opción:")
    print("1.-Crear un nuevo producto")
    print("2.-Listar productos")
    print("3.-Actualizar productos")
    print("4.-Eliminar productos")
    opcion = int(input("Escoge tu opción: "))
# en función de la opción que coja el usuario
    if opcion == 1:
#o bien creamos un nuevo producto
        print("Creamos un nuevo producto")
        producto = Producto()  #creo una instancia de la clase#
        producto.nombre = input("Introduce el nombre del producto: ") # escribo la propiedad #
        producto.precio = input("Introduce el precio del producto: ") # escribo la propiedad #
        productos.append(producto)          # Y a la lista de productos le añado el producto #
    elif opcion == 2:
#o bien listamos los productos
        print("Vamos a listar productos")
    elif opcion == 3:
#o bien actualizamos los productos
        print("Vamos a actualizar productos")
    elif opcion == 4:
#o bien eliminamos los productos
        print("Vamos a eliminar productos")
# y volvemos a repetir

```
#### 004-Creación de metodos
**024-Repaso de metodos.py**
```python
class Gato():
	def __init__ (self):
		self.color = ""
		
	def maulla(self):
		return "miau"
		
gato1 = Gato()
gato1.color = "naranja"  ## SETEAMOS UNA PROPIEDAD ##
print(gato1.maulla())   ## AQUI LLAMAMOS A UN METODO ##

```
**025-metodo set.py**
```python
class Gato():
	def __init__ (self):
		self.color = ""   ## ESTO ES UNA PROPIEDAD ##
		
	def maulla(self):    ## ESTO ES UN METODO ##
		return "miau"
		
	def setColor(self,nuevocolor):  ## DEFINO UN SETTER - EL METODO ES EL RESPONSABLE DE CAMBIAR LA PROPIEDAD ##
		## POR EJEMPLO AQUI PODRIA VALIODAR SI EL COLOR ES UN COLOR VALIDO PARA UN GATO ##
		self.color = nuevocolor     ## Y CAMBIO LA PROPIEDAD ##
		
gato1 = Gato()
gato1.color = "naranja"   ## AQUI SETEAMOS UNA PROPIEDAD DIRECTAMENTE ( NO ES UNA BUENA PRACTICA) ##

gato1.setColor("naranja")  ## ESTO ES UNA PRACTICA MUCHO MEJOR



```
**026-metodo getter.py**
```python
class Gato():
	def __init__ (self):
		self.color = ""   ## ESTO ES UNA PROPIEDAD ##
		
	def maulla(self):    ## ESTO ES UN METODO ##
		return "miau"
		
	def setColor(self,nuevocolor):  ## DEFINO UN SETTER - EL METODO ES EL RESPONSABLE DE CAMBIAR LA PROPIEDAD ##
		## POR EJEMPLO AQUI PODRIA VALIODAR SI EL COLOR ES UN COLOR VALIDO PARA UN GATO ##
		self.color = nuevocolor     ## Y CAMBIO LA PROPIEDAD ##
		
	def getColor(self):
		## UNA VEZ MAS, AQUI PODRIA PONER VALIDACIONES SI LO QUISIERA ##
		return self.color
		
gato1 = Gato()
gato1.color = "naranja"   ## AQUI SETEAMOS UNA PROPIEDAD DIRECTAMENTE ( NO ES UNA BUENA PRACTICA) ##

gato1.setColor("naranja")  ## ESTO ES UNA PRACTICA MUCHO MEJOR

print(gato1.color)        ## ACCESO DIRECTO, SE PUEDE PERO NO SE RECOMIENDA

print(gato1.getColor())  ## ACCESO MEDIANTE METODO, *SE RECOMIENDA* ##


```
**027-defino propiedad privada.py**
```python
class Gato():
	def __init__ (self):
		self.color = "naranja"  ## ESTO ES UNA PROPIEDAD PRIVADA (CONTRAPUESTA A PUBLICA) 
		
gato1 = Gato()
##gato1.__color = "naranja"##
print(gato1.__color)


```
**028-clase cuenta bancaria.py**
```python
class CuentaBancaria():
	def __init__(self):
		self.saldo = 0
		self.cliente = ""

```
**029-clase cuenta bancaria.convertir a privadas.py**
```python
class CuentaBancaria():
	def __init__(self):
		self.__saldo = 0
		self.__cliente = ""
	
	## DEFINO SETTERS Y GETTERS PARA EL SALDO ##
	
	def setSaldo(self,nuevosaldo):
		self.__saldo = nuevosaldo
	def getSaldo(self)
		return self.__saldo
		
cuentacliente1 = CuentaBancaria()
cuentacliente1.setsaldo(1000000000)
print(cuentacliente1.getsaldo())

```
**030-validaciones.py**
```python
class CuentaBancaria():
	def __init__(self):
		self.__saldo = 0
		self.__cliente = ""
	
	## DEFINO SETTERS Y GETTERS PARA EL SALDO ##
	
	def setSaldo(self,nuevosaldo):
	## ESTABLEZCO UNA CONDICIÓN DE QUE VALIDA SI EL SALDO NUEVO ES MAYOR DE 1000€ ##
		if nuevosaldo > self.__saldo + 1000:
	## SI SALTA LA ALARMA, AVISA Y *NO* CAMBIA EL SALDO ##
			print("Voy a avisar a la entidad de un ingreso muy grande")
		else:
	## SI PASA EL FILTRO, SOLO ENTONCES SE CAMBIA EL SALDO ##
			self.__saldo = nuevosaldo
			
	def getSaldo(self):
		return self.__saldo
		
cuentacliente1 = CuentaBancaria()
cuentacliente1.setSaldo(1000000000)
print(cuentacliente1.getSaldo())

```
**031-variable global.py**
```python
limitediferenciasaldo = 1000

class CuentaBancaria():
	def __init__(self):
		self.__saldo = 0
		self.__cliente = ""
	
	## DEFINO SETTERS Y GETTERS PARA EL SALDO ##
	
	def setSaldo(self,nuevosaldo):
	## ESTABLEZCO UNA CONDICIÓN DE QUE VALIDA SI EL SALDO NUEVO ES MAYOR DE 1000€ ##
		if nuevosaldo > self.__saldo + limitediferenciasaldo:
	## SI SALTA LA ALARMA, AVISA Y *NO* CAMBIA EL SALDO ##
			print("Voy a avisar a la entidad de un ingreso muy grande")
		else:
	## SI PASA EL FILTRO, SOLO ENTONCES SE CAMBIA EL SALDO ##
			self.__saldo = nuevosaldo
			
	def getSaldo(self):
		return self.__saldo
		
cuentacliente1 = CuentaBancaria()
cuentacliente1.setSaldo(1000000000)
print(cuentacliente1.getSaldo())

```
**032-ejemplo practico.py**
```python
class Cliente():
	def __init__():
		self.nombrecompleto = ""
		self.email = ""

```
**033-ejemplo practico(stters y getters).py**
```python
class Cliente():
## ESTE ES EL METODO CONSTRUCTOR ##
	def __init__(self):
		self.nombrecompleto = ""
		self.email = ""
		
## ESTOS SON LOS SETTERS Y LOS GETTERS ##
	def setNombreCompleto(self,nuevonombre):
		self.nombrecompleto = nuevonombre
	def setEmail(self,nuevoemail):
		self.email = nuevoemail
	def getNombrecompleto(self):
		return self.nombrecompleto
	def getEmail(self):
		return self.email

```
**034-pequeño programa.py**
```python
class Cliente():
## ESTE ES EL METODO CONSTRUCTOR ##
	def __init__(self):
		self.nombrecompleto = ""
		self.email = ""
		
## ESTOS SON LOS SETTERS Y LOS GETTERS ##
	def setNombreCompleto(self,nuevonombre):
		self.nombrecompleto = nuevonombre
	def setEmail(self,nuevoemail):
		self.email = nuevoemail
	def getNombreCompleto(self):
		return self.nombrecompleto
	def getEmail(self):
		return self.email
		
clientes = []  ##METO UNA LISTA VACIA##

print("Gestor de clientes v0.1 Valentin Antonio De Gennaro")
while True:
	print("Selecciona una opcion:")
	print("1.-Insertar un nuevo cliente")
	print("2.-Obtener listado de clientes")
	opcion = int(input("Indica tu opcion (1,2): "))

	if opcion == 1:  ## LOS SETTERS SE USAN EN LAS OPERACIONES DE CREACION DE NUEVOS ELEMENTOS
		print("Voy a insertar un cliente")
		nuevocliente = Cliente()
		nombrecliente = input("Introduce el nombre del cliente: ") # TOMO EL DATO #
		nuevocliente.setNombreCompleto(nombrecliente)  ## USO EL METODO SET PARA METER EL DATO EN EL OBJETO ##
		emailcliente = input("Introduce el email de tu cliente: ") # TOMO EL DATO #
		nuevocliente.setEmail(emailcliente)  ## USO EL METODO SET PARA METER EL DATO EN EL OBJETO ##
		
		clientes.append(nuevocliente)
		
	elif opcion == 2:
		print("Saco el listado de clientes")
		for cliente in clientes:
			print("-------------------------")
			print("Nombre: ", cliente.getNombreCompleto())
			print("Email: ", cliente.getEmail())
			print("-------------------------")

```
#### 005-Creación de constructores
**035-repaso gato.py**
```python
class Gato():
	def __init__(self):
		self.edad = 0
		
	def maulla(self):
		return "El gato esta maullando"
		

gato1 = Gato()
print(gato1.edad)

print(gato1.maulla())

```
**036-al constructor se le pueden pasar parametros.py**
```python
class Gato():
	def __init__(self):
		self.edad = 0
		
	def maulla(self):
		return "El gato esta maullando"
		

gato1 = Gato()
print(gato1.edad)
gato1.edad = 5
print(gato1.edad)

print(gato1.maulla())

```
**037-constructor con parametros.py**
```python
class Gato():
	def __init__(self,edad):
		self.edad = edad
		
	def maulla(self):
		return "El gato esta maullando"
		

gato1 = Gato(5)


```
**038-mas parametros.py**
```python
class Gato():
	def __init__(self,edad,nombre):
		self.edad = edad
		self.nombre = nombre
		
	def maulla(self):
		return "El gato esta maullando"
		

gato1 = Gato(5,"Garfield")


```
**039-tercera propiedad.py**
```python
class Gato():
	def __init__(self,edad,nombre,raza):
		self.edad = edad
		self.nombre = nombre
		self.raza = raza
		
	def maulla(self):
		return "El gato esta maullando"
		

gato1 = Gato(5,"Garfield","mainecoon")


```
**040-ejemplo con cliente.py**
```python
class Cliente():
	def __init__(self,nombre,apellidos,email,direccion):
		self.nombre = nombre
		self.apellido = apellidos
		self.email = email
		self.direccion = direccion

nombre = input("Introduce el nombre del cliente: ")
apellidos = input("Introduce los apellidos del cliente: ")
email = input("Introduce el email del cliente: ")
direccion = input("Introduce la direccion del cliente: ")

cliente1 = Cliente(nombre,apellidos,email,direccion)
print(cliente1)


		



```
**041-Listado de clientes.py**
```python
class Cliente():
	def __init__(self,nombre,apellidos,email,direccion):
		self.nombre = nombre
		self.apellido = apellidos
		self.email = email
		self.direccion = direccion

clientes = []
while True:

	nombre = input("Introduce el nombre del cliente: ")
	apellidos = input("Introduce los apellidos del cliente: ")
	email = input("Introduce el email del cliente: ")
	direccion = input("Introduce la direccion del cliente: ")

	clientes.append(Cliente(nombre,apellidos,email,direccion))


```
#### 006-Utilización de clases y objetos
**042-Mi propia clase.py**
```python
class Matematicas():
	def __init__(self):
		self.PI = 3.14159265359
		
	def redondeo(self,numero):
		entero = int(numero)
		decimal = numero - entero
		if decimal < 0.5:
			redondeo = 0
		else:
			redondeo = 1
		return entero + redondeo

Mate = Matematicas()
print(Mate.redondeo(4.7))
print(Mate.redondeo(4.2))

```
**043-Redondeo alta y  baja.py**
```python
class Matematicas():
	def __init__(self):
		self.PI = 3.14159265359
		
	def redondeo(self,numero):
		entero = int(numero)
		decimal = numero - entero
		if decimal < 0.5:
			redondeo = 0
		else:
			redondeo = 1
		return entero + redondeo
		
	def techo(self,numero):
		return int(numero)+1
	def suelo(self,numero):
		return int(numero)

Mate = Matematicas()
print(Mate.redondeo(4.7))
print(Mate.redondeo(4.2))
print(Mate.techo(4.7))
print(Mate.suelo(4.7))

```
**044-Ahora uso libreria estandar.py**
```python
import math

print(round(4.7))
print(round(4.2))
print(math.ceil(4.7))
print(math.floor(4.7))

```
#### 007-Utiulización de clases heredadas
**045-Gatos y perros.py**
```python
class Gato():
	def __init__(self):
		self.edad = 0
		self.nombre = ""
		self.raza = ""
		
class Perro():
	def __init__(self):
		self.edad = 0
		self.nombre = ""
		self.raza = ""	

```
**046-Clase madre animal.py**
```python
class Animal():
	def __init__(self):
		self.edad = 0
		self.nombre = ""
		self.raza = ""

class Gato(Animal):
	def __init__(self):
		super().__init__()  ## TRAIGO TODO LO QUE TENGA LA CLASE SUPERIOR ##
		
class Perro(Animal):
	def __init__(self):
		super().__init__()  ## TRAIGO TODO LO QUE TENGA LA CLASE SUPERIOR ##
		
gato1 = Gato()
print(gato1.edad)

perro1 = Perro()
print(perro1.edad)


```
**047-Clase roca.py**
```python
class Animal():
	def __init__(self):
		self.edad = 0
		self.nombre = ""
		self.raza = ""

class Gato(Animal):
	def __init__(self):
		super().__init__()  ## TRAIGO TODO LO QUE TENGA LA CLASE SUPERIOR ##
		
class Perro(Animal):
	def __init__(self):
		super().__init__()  ## TRAIGO TODO LO QUE TENGA LA CLASE SUPERIOR ##
		
class Roca():
	def __init__(self):
		self.x = 0
		self.y = 0
		self.z = 0
		
gato1 = Gato()
print(gato1.edad)

perro1 = Perro()
print(perro1.edad)


```
**048-Herencia multiple o multinivel.py**
```python
class Entidad():
	def __init__(self):
		self.x = 0
		self.y = 0
		self.z = 0
		
class Animal(Entidad): 
	def __init__(self):
		super().__init__()
		self.edad = 0
		self.nombre = ""
		self.raza = ""

class Gato(Animal):
	def __init__(self):
		super().__init__()  ## TRAIGO TODO LO QUE TENGA LA CLASE SUPERIOR ##
		
class Perro(Animal):
	def __init__(self):
		super().__init__()  ## TRAIGO TODO LO QUE TENGA LA CLASE SUPERIOR ##
		
class Roca(Entidad):
	def __init__(self):

gato1 = Gato()
print(gato1.edad)

perro1 = Perro()
print(perro1.edad)

roca1 = Roca()
print(roca.x)
print(roca.y)
print(roca.z)


```
### 005- Lectura y escritura de información
**001-Escribir texto a archivo.py**
```python
archivo = open("clientes.txt","w") ## W = WRITE ##

archivo.write("Esto es una prueba")

archivo.close()

```
**002-Ahora leemos.py**
```python
archivo = open("clientes.txt","r") ## R = READ ##

contenido = archivo.readline()
## TAMBIÉN EXISTE ARCHIVO.READLINES() ##

print(contenido)

archivo.close()

```
**003-Creador Agenda.py**
```python
while True:
	print("Dime lo que quieres hacer: ")
	print("1.-Introduce un nuevo contacto")
	print("2.-Leer todos los contactos")
	opcion = input("Escoge tu opcion: ")
	
	opcion = int(opcion)
	
	if opcion == 1:
		nombre = input("Introduce el nombre de la persona: ")
		email = input("Introduce el email de la persona: ")
		archivo = open("agenda.txt","a") ## A = AÑADIR ##
		archivo.write(nombre+ ", "+email+"\n") ## \n = BAJAR DE LINEA EN EL TXT ##
		archivo.close()
		
	elif opcion == 2:
		archivo = open("agenda.txt","r")
		lineas = archivo.readlines()
		
		for linea in lineas:
			print(linea)
		archivo.close()
		

```
**004-Leer txt.py**
```python
archivo = open("blog.txt","r")

lineas = archivo.readlines()

for linea in lineas:
	print (linea)
	


```
**005-Leer json.py**
```python
import json  ## Libreria para usar un json ##

archivo = open("blog.json","r")

contenido = json.load(archivo)

print(contenido) ## Se importa en lo llamado 'DICCIONARIO'  en python ##



```
**006-Ahora accedemos a las parejas.py**
```python
import json  ## Libreria para usar un json ##

archivo = open("blog.json","r")

contenido = json.load(archivo)

for linea in contenido:
	print('########################')
	print(linea['titulo'])
	print(linea['fecha'])
	print(linea['autor'])
	print(linea['contenido'])
	print('########################')
	print("")


```
**007-articulo.html**
```html
<!Doctype html>
<html lang="es">
	<head>
		<title>Valentinblog</title>
		<meta charset="utf=8">
		<style>
			body{background:steelblue;color:steelblue;font-family:sans-serif;}
			header,main,footer{background:white;padding:20px;margin:auto;width:600px}
			header,footer{text-align:center;}
			main{color:black;}
		</style>
	</head>
	<body>
		<header><h1>Valentinblog</h1></header>
		<main>
			<article>
				<h3>Titulo del articulo</h3>
				<time>2025-10-16</time>
				<p>Valentin Antonio De Gennaro</p>
				<p>Este es el contenido de un articulo ficticio</p>
			</article>
		</main>
		<footer>(c)2025 Valentin Antonio De Gennaro</footer>
	</body>
</html>

```
**008-Instalar servidor.md**
```markdown
-Instalr un servidor web en entorno de desarrollo
(se entiende vuestro propio ordenador)

-Windows:
se recomienda el paquete XAMPP
https://www.apachefriends.org/es/index.html

Una vez instalado la carpeta de publicacion es c:/xampp/htdocs

-Linux
Se instala Apache con el comando
sudo apt install apache 2

una vez instalado, la carpeta de publicacion es: /var/www/html

```
**009-Arranco flask.py**
```python
from flask import Flask

aplicacion = Flask(__name__)

@aplicacion.route("/")
def raiz():
	return '''
	<!Doctype html>
<html lang="es">
	<head>
		<title>Valentinblog</title>
		<meta charset="utf=8">
		<style>
			body{background:steelblue;color:steelblue;font-family:sans-serif;}
			header,main,footer{background:white;padding:20px;margin:auto;width:600px}
			header,footer{text-align:center;}
			main{color:black;}
		</style>
	</head>
	<body>
		<header><h1>Valentinblog</h1></header>
		<main>
			<article>
				<h3>Titulo del articulo</h3>
				<time>2025-10-16</time>
				<p>Valentin Antonio De Gennaro</p>
				<p>Este es el contenido de un articulo ficticio</p>
			</article>
		</main>
		<footer>(c)2025 Valentin Antonio De Gennaro</footer>
	</body>
</html>
'''
	
if __name__ == "__main__":
	aplicacion.run(debug=True)

```
**010-Escribir.py**
```python
archivo = open("basededatos.txt")
archivo.write("esto es un contenido",'r')
archivo.close()

```
**011-apendizar.py**
```python
archivo = open("basededatos.txt")
archivo.write("esto es un contenido",'a')
archivo.close()

```
**012-Añadir salto de linea.py**
```python
archivo = open("basededatos.txt","a")
archivo.write("esto es un contenido\n")
archivo.close()

```
**013-Leer una linea.py**
```python
archivo = open("basededatos.txt","r")
lineas = archivo.readline()
archivo.close()

```
**014-Leer lineas.py**
```python
archivo = open("basededatos.txt","r")
lineas = archivo.readlines()
for linea in lineas:
	print(linea)
archivo.close()

```
**015-Pickle escribir.py**
```python
## pip3 install pickle

import pickle  ##ESCRIBIR EN BINARIO USANDO ESTA LIBRERIA ##


archivo = open("datos.bin","wb")
cadena = 'Valentin'

pickle.dump(cadena,archivo)

archivo.close()

```
**016-Leer pickle.py**
```python
## pip3 install pickle

import pickle  ##ESCRIBIR EN BINARIO USANDO ESTA LIBRERIA ##


archivo = open("datos.bin","rb")

cadena = pickle.load(archivo)

print(cadena)

archivo.close()

```
**017-Crear cliente.py**
```python
class Cliente():
	def __init__(self,nuevonombre,nuevoemail):
		self.nombre = ""
		self.email = ""
		
clientes = []

clientes.append(Cliente('Valentin De Gennaro','valentindegennaro@gmail.com'))
clientes.append(Cliente('Roberto','roberto@gmail.com'))

print(clientes)

```
**018-Guardo con pickle a binario.py**
```python
import pickle

class Cliente():
	def __init__(self,nuevonombre,nuevoemail):
		self.nombre = ""
		self.email = ""
		
clientes = []

clientes.append(Cliente('Valentin De Gennaro','valentindegennaro@gmail.com'))
clientes.append(Cliente('Roberto','roberto@gmail.com'))

print(clientes)

archivo = open("clientes.bin","wb")
pickle.dump(clientes,archivo)
archivo.close()

```
**019-Recupero los datos.py**
```python
import pickle

class Cliente():
	def __init__(self,nuevonombre,nuevoemail):
		self.nombre = nuevonombre
		self.email = nuevoemail


archivo = open("clientes.bin","rb")
clientes = pickle.load(archivo)
archivo.close()

print(clientes)

```
**020-Listar contenid de carpeta.py.py**
```python
import os

carpeta = input("Indica una carpeta: ")

elementos = os.listdir(carpeta)

for elemento in elementos:
	print(elemento)


```
**021-atributos.py**
```python
import os

carpeta = input("Indica una carpeta: ")

elementos = os.listdir(carpeta)

for elemento in elementos:
	ruta = os.path.join(carpeta, elemento)
	print(elemento)
	print(os.path.getsize(elemento))
	print(os.path.getmtime(elemento))


```
**022-Formateo el resultado.py**
```python
import os

carpeta = input("Indica una carpeta: ")

elementos = os.listdir(carpeta)

for elemento in elementos:
	ruta = os.path.join(carpeta, elemento)
	print(elemento)
	print(os.path.getsize(ruta)/(1024*1024),"MB")
	print(os.path.getmtime(elemento))


```
**023-suma del tamaño.py**
```python
import os

carpeta = input("Indica una carpeta: ")

elementos = os.listdir(carpeta)

suma = 0

for elemento in elementos:
	ruta = os.path.join(carpeta, elemento)
	suma += os.path.getsize(ruta)
	

print("La crapeta ocupa: ")
print(suma/(1024*1024),"MB")

```
**024-Recorrer.py**
```python
import os

carpeta = input("Indica una carpeta: ")

for directorio,carpetas,archivo in os.walk(carpeta):
	print(directorio)
	print(carpetas)
	print(archivo)

```
**025-Tamaño recursivo.py**
```python
import os

carpeta = input("Indica una carpeta: ")

suma = 0

for directorio, carpetas, archivo in os.walk(carpeta):
	for archivo in archivo:
		ruta = os.path.join(directorio, archivo)
		try:
			suma += os.path.getsize(ruta)
		except:
			pass
		
print("La crapeta ocupa: ")
print(suma/(1024*1024),"MB")

```
**026-Condicion.py**
```python
import os

carpeta = input("Indica una carpeta: ")
grande = 1024 * 1024 * 1024 ## 1 GIGA ##



for directorio, carpetas, archivo in os.walk(carpeta):
	for archivo in archivo:
		ruta = os.path.join(directorio, archivo)
		try:
			if os.path.getsize(ruta) > grande:
				print(ruta, os.path.getsize(ruta)/(1024*1024),"MB")
		except:
			pass
		


```
**027-escribir en archivo el contenido de la carpeta.py**
```python
import os

carpeta = input("Indica una carpeta: ")
grande = 1024 * 1024 * 1024 ## 1 GIGA ##

# a crea archivo #
mapa = open("mapa.txt","w") 
# w escribe encima #

for directorio, carpetas, archivos in os.walk(carpeta):
	for archivo in archivos:
		ruta = os.path.join(directorio, archivo)
		mapa.write(ruta+"\n")

mapa.close()


```
**028-minibuscador.py**
```python
cadena = "Esto es una cadena de prueba"
objetivo = "prueba"

if objetivo in cadena:
	print("Efectivamente está")
else:
	print("No está")
	


```
**029-Busca en mapa.py**
```python
archivo = open("mapa.txt","r")
busca = input("Introduce el termino a buscar: ")

lineas = archivo.readlines()

for linea in lineas:
	if "json" in linea:
		print("----------------------")
		print("Encontrado!: ",linea)




```
**030-crear carpeta.py**
```python
import os

os.mkdir("micarpeta") 

```
**031-eliminar carpeta.py**
```python
import os

os.rmdir("micarpeta")

```
**032-No se puede creae una carpeta dos veces.py**
```python
import os

os.mkdir("micarpeta")


```
**033-Solucion al problema.py**
```python
import os

try:
	os.mkdir("micarpeta")
except:
	print("Ha habido un error, continuamos")


```
**034-Crear un archivo.py**
```python
open("miarchivo.txt","w")


```
**035-Eliminar archivo.py**
```python
import os

# open("miarchivo.txt","w")

os.remove("miarchivo.txt")

```
**036-Nuevo archivo con texto.py**
```python
archivo = open("miarchivo.txt","w")

archivo.write("Esto es un texto de prueba que estoy escribiendo")

```
**037-Comprimir.py**
```python
import zipfile

origen = 'miarchivo.txt'

destino = 'comprimido.zip'

archivo = zipfile.ZipFile(destino, 'w')
archivo.write(origen)

```
**038-Algoritmo de compresion.py**
```python
import zipfile

origen = 'miarchivo.txt'

destino = 'comprimido.zip'

archivo = zipfile.ZipFile(destino, 'w', compression=zipfile.ZIP_DEFLATED)
archivo.write(origen)

```
**039-Comprimir todos los archivos de una carpeta.py**
```python
import zipfile
import os

carpeta = "archivos"

for directorio, subcarpetas, archivos in os.walk(carpeta):
	for nombre_archivo in archivos:
		origen = os.path.join(directorio, nombre_archivo)
		destino = os.path.join(directorio, nombre_archivo + ".zip")
		archivo = zipfile.ZipFile(destino, "w", compression=zipfile.ZIP_DEFLATED)
		archivo.write(origen, arcname=nombre_archivo)

```
**040-Comprimir carpeta.py**
```python
import zipfile
import os

origen = "archivos"
destino = "archivo.zip"

archivozip = zipfile.ZipFile(destino, "w", compression=zipfile.ZIP_DEFLATED)

for directorio, carpetas, archivos in os.walk(origen):
	for archivo in archivos:
		rutaarchivo = os.path.join(directorio,archivo)
		rutarelativa = os.path.relpath(rutaarchivo, origen)
		archivozip.write(rutaarchivo, rutarelativa)

archivozip.close()
		

```
**041- EJ FINAL SUB UNIDAD.py**
```python
import os
import zipfile
import shutil
# Usar lightgoldenrodyellow.py para generar el prompt para usar en chat gpt #
'''
  Quiero:
  1.-Pedir al usuario una ruta de una carpeta con input
  2.-Repasar todas las subcarpetas y archivos dentro de esa carpeta
  3.-Para cada archivo o carpeta, quiero comprimirla en un ZIP
  4.-Una vez comprimido ese zip, quiero eliminar los contenidos originales
'''

ruta = input("Introduce la ruta de la carpeta: ").strip()

try:
  # Comprobamos que la ruta existe y es una carpeta
  if not os.path.isdir(ruta):
    print("La ruta no es válida")
  else:
    # Recorremos SOLO el primer nivel dentro de la ruta dada
    for nombre in os.listdir(ruta):
      origen = os.path.join(ruta, nombre)

      # Evitar recomprimir ZIPs ya existentes
      if os.path.isfile(origen) and origen.lower().endswith(".zip"):
        continue

      # Si es una carpeta: crear un ZIP con todo su contenido y luego eliminarla
      if os.path.isdir(origen):
        destino = origen + ".zip"
        archivozip = zipfile.ZipFile(destino, 'w', zipfile.ZIP_DEFLATED)
        for directorio, subcarpetas, archivos in os.walk(origen):
          for archivo in archivos:
            rutaarchivo = os.path.join(directorio, archivo)
            rutarelativa = os.path.relpath(rutaarchivo, origen)
            archivozip.write(rutaarchivo, rutarelativa)
        archivozip.close()
        shutil.rmtree(origen)

      # Si es un archivo: comprimirlo y luego eliminar el original
      elif os.path.isfile(origen):
        destino = origen + ".zip"
        archivo = zipfile.ZipFile(destino, 'w', compression=zipfile.ZIP_DEFLATED)
        archivo.write(origen, arcname=nombre)
        archivo.close()
        os.remove(origen)

except:
  print("Ha habido un error, continuamos")

```
**042-AMPLIACION.py**
```python
import os
import zipfile
import shutil
import sys
import time

'''
  Quiero:
  1.-Pedir al usuario una ruta de una carpeta con input
  2.-Repasar todas las subcarpetas y archivos dentro de esa carpeta
  3.-Para cada archivo o carpeta, quiero comprimirla en un ZIP
  4.-Una vez comprimido ese zip, quiero eliminar los contenidos originales (opcional con booleano)
  5.-Mostrar una barra de progreso en consola con porcentaje y estimación de tiempo
'''

# 1) Booleano para activar/desactivar el borrado de originales
borrar_originales = True  # ponlo a False para conservar los originales

# ---- Utilidades para la barra de progreso ----
def formatear_tiempo(segundos):
  segundos = int(segundos)
  h = segundos // 3600
  m = (segundos % 3600) // 60
  s = segundos % 60
  if h > 0:
    return f"{h:02d}:{m:02d}:{s:02d}"
  else:
    return f"{m:02d}:{s:02d}"

def mostrar_progreso(procesados, total, inicio):
  if total == 0:
    return
  porcentaje = (procesados / total)
  ancho_barra = 30
  rellenos = int(ancho_barra * porcentaje)
  barra = "[" + "#" * rellenos + "-" * (ancho_barra - rellenos) + "]"

  transcurrido = time.time() - inicio
  if procesados > 0:
    estimado_total = transcurrido / procesados * total
    restante = max(0, estimado_total - transcurrido)
  else:
    restante = 0

  texto = f"\r{barra} {porcentaje*100:6.2f}%  transcurrido: {formatear_tiempo(transcurrido)}  restante: {formatear_tiempo(restante)}"
  sys.stdout.write(texto)
  sys.stdout.flush()
# ---------------------------------------------

ruta = input("Introduce la ruta de la carpeta: ").strip()

try:
  # Comprobamos que la ruta existe y es una carpeta
  if not os.path.isdir(ruta):
    print("La ruta no es válida")
  else:
    # Preparamos la lista de ítems a procesar (solo primer nivel), excluyendo ZIPs
    items = []
    for nombre in os.listdir(ruta):
      origen = os.path.join(ruta, nombre)
      if os.path.isfile(origen) and origen.lower().endswith(".zip"):
        continue
      items.append(origen)

    total = len(items)
    procesados = 0
    inicio = time.time()
    mostrar_progreso(procesados, total, inicio)

    for origen in items:
      nombre = os.path.basename(origen)

      # Si es una carpeta: crear un ZIP con todo su contenido
      if os.path.isdir(origen):
        destino = origen + ".zip"
        archivozip = zipfile.ZipFile(destino, 'w', zipfile.ZIP_DEFLATED)
        for directorio, subcarpetas, archivos in os.walk(origen):
          for archivo in archivos:
            rutaarchivo = os.path.join(directorio, archivo)
            rutarelativa = os.path.relpath(rutaarchivo, origen)
            archivozip.write(rutaarchivo, rutarelativa)
        archivozip.close()

        # Borrar carpeta original si está activado
        if borrar_originales:
          shutil.rmtree(origen)

      # Si es un archivo: comprimirlo
      elif os.path.isfile(origen):
        destino = origen + ".zip"
        archivo = zipfile.ZipFile(destino, 'w', compression=zipfile.ZIP_DEFLATED)
        archivo.write(origen, arcname=nombre)
        archivo.close()

        # Borrar archivo original si está activado
        if borrar_originales:
          os.remove(origen)

      # Actualizamos progreso
      procesados += 1
      mostrar_progreso(procesados, total, inicio)

    print()  # salto de línea al terminar la barra
    print("Proceso completado.")

except:
  print("\nHa habido un error, continuamos")


```
**043-Tkinter.py**
```python
# sudo apt-get install python3-tk
import tkinter as tk

ventana = tk.Tk()  # METODO ESTATICO

tk.Button(ventana,text="Pulsame si te atreves").pack(padx=10,pady=10)

ventana.mainloop()  # NO TE SALGAS


```
**044-command en el boton.py**
```python
# sudo apt-get install python3-tk
import tkinter as tk

def accion():
	print("Has pulsado el boton")
	
ventana = tk.Tk()  # METODO ESTATICO

tk.Button(ventana,text="Pulsame si te atreves",command=accion).pack(padx=10,pady=10)

etiqueta = tk.Label(text="¿Has pulsado el boton?")
etiqueta.pack(padx=10,pady=10)

ventana.mainloop()  # NO TE SALGAS


```
**045-Salida en pantalla.py**
```python
# sudo apt-get install python3-tk
import tkinter as tk

def accion():
	etiqueta.config(text="Pues si que has pulsado el boton")
	
ventana = tk.Tk()  # METODO ESTATICO

tk.Button(ventana,text="Pulsame si te atreves",command=accion).pack(padx=10,pady=10)

etiqueta = tk.Label(text="¿Has pulsado el boton?")
etiqueta.pack(padx=10,pady=10)

ventana.mainloop()  # NO TE SALGAS


```
**046-Microcalculadora.py**
```python
import tkinter as tk
	
ventana = tk.Tk()  # METODO ESTATICO

operando1 = tk.Entry()
operando1.pack(padx=10,pady=10)

operando2 = tk.Entry()
operando2.pack(padx=10,pady=10)

boton = tk.Button(text="Calcular!")
boton.pack(padx=10,pady=10)


resultado = tk.Label(text = "Aqui va el resultado")
resultado.pack(padx=10,pady=10)


ventana.mainloop()  # NO TE SALGAS


```
**047-Calcular.py**
```python
import tkinter as tk

def calcular():
	op1valor = float(operando1.get())
	op2valor = float(operando2.get())
	suma = op1valor + op2valor
	resultado.config(text=str(suma))
	
	
ventana = tk.Tk()  # METODO ESTATICO

operando1 = tk.Entry()
operando1.pack(padx=10,pady=10)

operando2 = tk.Entry()
operando2.pack(padx=10,pady=10)

boton = tk.Button(text="Calcular!",command=calcular)
boton.pack(padx=10,pady=10)


resultado = tk.Label(text = "Aqui va el resultado")
resultado.pack(padx=10,pady=10)


ventana.mainloop()  # NO TE SALGAS


```
**048-Recordamos.py**
```python
## LINEAS BASICAS PARA UN TKINTER ##
import tkinter as tk

ventana = tk.Tk()  # METODO ESTATICO

ventana.mainloop()  # NO TE SALGAS


```
**049-Creo un marco.py**
```python
import tkinter as tk

ventana = tk.Tk() 

marco = tk.Frame(ventana)

tk.Label(marco,text = "Introduce el nombre del cliente").pack(padx = 20, pady = 20)

marco.pack(padx = 20, pady = 20)

ventana.mainloop()  


```
**050-Creo un entry.py**
```python
import tkinter as tk

ventana = tk.Tk() 

marco = tk.Frame(ventana)

#DNI NIE
tk.Label(marco,text = "Introduce el dni/nie del cliente").pack(padx = 10, pady = 10)
dninie = tk.Entry(marco)
dninie.pack(padx = 10, pady = 10)

#NOMBRE
tk.Label(marco,text = "Introduce el nombre del cliente").pack(padx = 10, pady = 10)
nombre = tk.Entry(marco)
nombre.pack(padx = 10, pady = 10)

#APELLIDOS
tk.Label(marco,text = "Introduce los apellidos del cliente").pack(padx = 10, pady = 10)
apellidos = tk.Entry(marco)
apellidos.pack(padx = 10, pady = 10)

#EMAIL
tk.Label(marco,text = "Introduce el email del cliente").pack(padx = 10, pady = 10)
email = tk.Entry(marco)
email.pack(padx = 10, pady = 10)

marco.pack(padx = 20, pady = 20)

ventana.mainloop()  


```
**051-Creo un boton.py**
```python
import tkinter as tk

ventana = tk.Tk() 

marco = tk.Frame(ventana)

#DNI NIE
tk.Label(marco,text = "Introduce el dni/nie del cliente").pack(padx = 10, pady = 10)
dninie = tk.Entry(marco)
dninie.pack(padx = 10, pady = 10)

#NOMBRE
tk.Label(marco,text = "Introduce el nombre del cliente").pack(padx = 10, pady = 10)
nombre = tk.Entry(marco)
nombre.pack(padx = 10, pady = 10)

#APELLIDOS
tk.Label(marco,text = "Introduce los apellidos del cliente").pack(padx = 10, pady = 10)
apellidos = tk.Entry(marco)
apellidos.pack(padx = 10, pady = 10)

#EMAIL
tk.Label(marco,text = "Introduce el email del cliente").pack(padx = 10, pady = 10)
email = tk.Entry(marco)
email.pack(padx = 10, pady = 10)

#BOTON
tk.Button(marco,text = "Insertar cliente",command = insertar).pack(padx = 10, pady = 10)

marco.pack(padx = 20, pady = 20)

ventana.mainloop()  


```
**052-Funcion insertar.py**
```python
import tkinter as tk

ventana = tk.Tk() 

def insertar():
	print("Vamos a insertar un cliente")

marco = tk.Frame(ventana)

#DNI NIE
tk.Label(marco,text = "Introduce el dni/nie del cliente").pack(padx = 10, pady = 10)
dninie = tk.Entry(marco)
dninie.pack(padx = 10, pady = 10)

#NOMBRE
tk.Label(marco,text = "Introduce el nombre del cliente").pack(padx = 10, pady = 10)
nombre = tk.Entry(marco)
nombre.pack(padx = 10, pady = 10)

#APELLIDOS
tk.Label(marco,text = "Introduce los apellidos del cliente").pack(padx = 10, pady = 10)
apellidos = tk.Entry(marco)
apellidos.pack(padx = 10, pady = 10)

#EMAIL
tk.Label(marco,text = "Introduce el email del cliente").pack(padx = 10, pady = 10)
email = tk.Entry(marco)
email.pack(padx = 10, pady = 10)

#BOTON
tk.Button(marco,text = "Insertar cliente",command = insertar).pack(padx = 10, pady = 10)

marco.pack(padx = 20, pady = 20)

ventana.mainloop()  


```
**053-Mysql.py**
```python
import mysql.connector

conexion = mysql.connector.connect(
    host="localhost",
    user="empresadam",
    password="Empresadam123$",
    database="empresadam"
)
cursor = conexion.cursor()
cursor.execute('''
  INSERT INTO clientes
  VALUES(
    NULL,
    "11111111H",
    "Daniel",
    "tonto",
    "tonto@daniel.com"
  );
''')
conexion.commit()

cursor.close()
conexion.close()

```
**054-Crear usuario.sql**
```sql
-- crea usuario nuevo con contraseña
CREATE USER 
'empresadam'@'localhost' 
IDENTIFIED  BY 'Empresadam123$';

-- permite acceso a ese usuario
GRANT USAGE ON *.* TO 'empresadam'@'localhost';

-- quitale todos los limites que tenga
ALTER USER 'empresadam'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

-- dale acceso a la base de datos empresadam
GRANT ALL PRIVILEGES ON `empresadam`.* 
TO 'empresadam'@'localhost';

-- recarga la tabla de privilegios
FLUSH PRIVILEGES;

```
**055-Insertar en base de datos.py**
```python
import tkinter as tk
import mysql.connector
conexion = mysql.connector.connect(
    host="localhost",
    user="empresadam",
    password="Empresadam123$",
    database="empresadam"
)
cursor = conexion.cursor()
ventana = tk.Tk() 

def insertar():
	cursor.execute('''
	  INSERT INTO clientes
	  VALUES(
		NULL,
		"'''+dninie.get()+'''",
		"'''+nombre.get()+'''",
		"'''+apellidos.get()+'''",
		"'''+email.get()+'''"
	  );
	''')
	conexion.commit()
marco = tk.Frame(ventana, bg='white')
ventana.config(bg='orangered')
#DNI NIE
tk.Label(marco,text = "Introduce el dni/nie del cliente",bg = 'white').pack(padx = 10, pady = 10)
dninie = tk.Entry(marco)
dninie.pack(padx = 10, pady = 10)

#NOMBRE
tk.Label(marco,text = "Introduce el nombre del cliente",bg = 'white').pack(padx = 10, pady = 10)
nombre = tk.Entry(marco)
nombre.pack(padx = 10, pady = 10)

#APELLIDOS
tk.Label(marco,text = "Introduce los apellidos del cliente",bg = 'white').pack(padx = 10, pady = 10)
apellidos = tk.Entry(marco)
apellidos.pack(padx = 10, pady = 10)

#EMAIL
tk.Label(marco,text = "Introduce el email del cliente",bg = 'white').pack(padx = 10, pady = 10)
email = tk.Entry(marco)
email.pack(padx = 10, pady = 10)

#BOTON
tk.Button(marco,text = "Insertar cliente",bg='lightblue', command = insertar).pack(padx = 10, pady = 10)

marco.pack(padx = 20, pady = 20)

ventana.mainloop()  
cursor.close()
conexion.close()

```
**056-Leer base de datos.py**
```python
import mysql.connector
conexion = mysql.connector.connect(
    host="localhost",
    user="empresadam",
    password="Empresadam123$",
    database="empresadam"
)
cursor = conexion.cursor()
cursor.execute('''
	SELECT * FROM clientes;
''')

filas = cursor.fetchall()

for fila in filas:
	print(fila)

  
cursor.close()
conexion.close()

```
**057-Pintamos tablas.py**
```python
import tkinter as tk
from tkinter import ttk

ventana = tk.Tk()

arbol = ttk.Treeview(ventana, columns=('nombre', 'apellidos'), show = 'headings')
arbol.heading('nombre', text = 'Nombre del cliente')
arbol.heading('apellidos', text = 'Apellidos del cliente')

arbol.insert("","end", values = ("Jose Vicente", "Carratala")
arbol.insert("","end", values = ("Juan", "Garcia")

arbol.pack(padx = 20, pady = 20)

ventana.mainloop()

```
**058- Frankenstein.py**
```python
import tkinter as tk
from tkinter import ttk
import mysql.connector
conexion = mysql.connector.connect(
    host="localhost",
    user="Valentin",
    password="Valendg_25",
    database="CRM"
)
cursor = conexion.cursor()
ventana = tk.Tk()
ventana.config(bg='orangered')
arbol = ttk.Treeview(ventana, columns=('dninie', 'nombre', 'apellidos','email'), show = 'headings')
arbol.heading('dninie', text = 'DNI NIE del cliente')
arbol.heading('nombre', text = 'Nombre del cliente')
arbol.heading('apellidos', text = 'Apellidos del cliente')
arbol.heading('email', text = 'Email del cliente')
cursor.execute('''SELECT * FROM clientes;''')
filas = cursor.fetchall()
for fila in filas:
	arbol.insert("","end", values=(fila[1], fila[2], fila[3], fila[4]))

arbol.pack(padx = 20, pady = 20)

ventana.mainloop()

```
**059-Unir con IA.py**
```python
import sys
import tkinter as tk
from tkinter import messagebox

# Intentar cargar ttkbootstrap; si falta ImageTk/Tk, avisar y salir
try:
    import ttkbootstrap as tb
    from ttkbootstrap.constants import BOTH, YES, LEFT, RIGHT, X, Y, W
except Exception as e:
    root = tk.Tk()
    root.withdraw()
    messagebox.showerror(
        "Dependencias faltantes",
        "ttkbootstrap requiere Pillow (ImageTk) y tkinter.\n\n"
        "En Ubuntu/Debian:\n"
        "  sudo apt update && sudo apt install -y python3-pil.imagetk python3-tk\n\n"
        "En entorno virtual:\n"
        "  pip install pillow ttkbootstrap\n\n"
        f"Detalle del error: {e}"
    )
    sys.exit(1)

import mysql.connector
from mysql.connector import Error

DB_CONFIG = {
    "host": "localhost",
    "user": "empresadam",
    "password": "Empresadam123$",
    "database": "empresadam",
}

# Conexión
try:
    conexion = mysql.connector.connect(**DB_CONFIG)
    cursor = conexion.cursor()
except Error as e:
    r = tk.Tk()
    r.withdraw()
    messagebox.showerror("Error de base de datos", f"No se pudo conectar a MySQL:\n{e}")
    sys.exit(1)

# Ventana principal con ttkbootstrap
root = tb.Window(themename="darkly")
root.title("Gestión de clientes - Empresadam")
root.geometry("980x650")

status_var = tk.StringVar(value="Listo.")

# Notebook
notebook = tb.Notebook(root, bootstyle="info")
frame_insertar = tb.Frame(notebook, padding=20)
frame_listado = tb.Frame(notebook, padding=20)
notebook.add(frame_insertar, text="Insertar")
notebook.add(frame_listado, text="Clientes")
notebook.pack(fill=BOTH, expand=YES, padx=12, pady=12)

# -------- Pestaña: Insertar --------
form = tb.Labelframe(frame_insertar, text="Nuevo cliente", bootstyle="primary", padding=20)
form.pack(fill=X, padx=10, pady=10)

lbl_dni = tb.Label(form, text="DNI/NIE", anchor=W)
lbl_nombre = tb.Label(form, text="Nombre", anchor=W)
lbl_apellidos = tb.Label(form, text="Apellidos", anchor=W)
lbl_email = tb.Label(form, text="Email", anchor=W)

ent_dni = tb.Entry(form, width=30)
ent_nombre = tb.Entry(form, width=30)
ent_apellidos = tb.Entry(form, width=30)
ent_email = tb.Entry(form, width=30)

lbl_dni.grid(row=0, column=0, sticky=W, padx=6, pady=6)
ent_dni.grid(row=0, column=1, sticky=W, padx=6, pady=6)
lbl_nombre.grid(row=1, column=0, sticky=W, padx=6, pady=6)
ent_nombre.grid(row=1, column=1, sticky=W, padx=6, pady=6)
lbl_apellidos.grid(row=2, column=0, sticky=W, padx=6, pady=6)
ent_apellidos.grid(row=2, column=1, sticky=W, padx=6, pady=6)
lbl_email.grid(row=3, column=0, sticky=W, padx=6, pady=6)
ent_email.grid(row=3, column=1, sticky=W, padx=6, pady=6)

btns_row = tb.Frame(form)
btns_row.grid(row=4, column=0, columnspan=2, sticky=W, pady=(12, 0))

def limpiar_campos():
    ent_dni.delete(0, tk.END)
    ent_nombre.delete(0, tk.END)
    ent_apellidos.delete(0, tk.END)
    ent_email.delete(0, tk.END)

def insertar_cliente():
    dninie = ent_dni.get().strip()
    nombre = ent_nombre.get().strip()
    apellidos = ent_apellidos.get().strip()
    email = ent_email.get().strip()

    if not (dninie and nombre and apellidos and email):
        status_var.set("Completa todos los campos antes de insertar.")
        return

    try:
        cursor.execute(
            "INSERT INTO clientes (dninie, nombre, apellidos, email) VALUES (%s, %s, %s, %s);",
            (dninie, nombre, apellidos, email),
        )
        conexion.commit()
        status_var.set("Cliente insertado correctamente.")
        limpiar_campos()
        cargar_clientes()
        notebook.select(frame_listado)
    except Error as e:
        status_var.set(f"Error al insertar: {e}")
        messagebox.showerror("Error al insertar", str(e))

btn_insertar = tb.Button(btns_row, text="Insertar cliente", bootstyle="success", command=insertar_cliente)
btn_limpiar = tb.Button(btns_row, text="Limpiar", bootstyle="secondary", command=limpiar_campos)
btn_insertar.pack(side=LEFT, padx=(0, 8))
btn_limpiar.pack(side=LEFT)

# -------- Pestaña: Listado --------
topbar = tb.Frame(frame_listado)
topbar.pack(fill=X, pady=(0, 8))

tb.Label(topbar, text="Listado de clientes", font=("-size", 12)).pack(side=LEFT)

# Barra de búsqueda por DNI/NIE
busqueda_frame = tb.Frame(frame_listado)
busqueda_frame.pack(fill=X, pady=(0, 8))

tb.Label(busqueda_frame, text="Buscar por DNI/NIE:", anchor=W).pack(side=LEFT, padx=(0, 8))
dni_var = tk.StringVar()
dni_entry = tb.Entry(busqueda_frame, textvariable=dni_var, width=24, bootstyle="info")
dni_entry.pack(side=LEFT, padx=(0, 8))

def accion_buscar():
    patron = dni_var.get().strip()
    cargar_clientes(filtro_dni=patron if patron else None)

def accion_limpiar_busqueda():
    dni_var.set("")
    cargar_clientes(None)

btn_buscar = tb.Button(busqueda_frame, text="Buscar", bootstyle="info", command=accion_buscar)
btn_buscar.pack(side=LEFT, padx=(0, 8))
btn_limpiar_busqueda = tb.Button(busqueda_frame, text="Limpiar", bootstyle="secondary", command=accion_limpiar_busqueda)
btn_limpiar_busqueda.pack(side=LEFT)

# Botón de eliminación
acciones_frame = tb.Frame(frame_listado)
acciones_frame.pack(fill=X, pady=(0, 8))

btn_eliminar = tb.Button(acciones_frame, text="Eliminar seleccionados", bootstyle="danger", state="disabled")
btn_eliminar.pack(side=LEFT)

# Treeview de clientes (multiselección)
cols = ("dninie", "nombre", "apellidos", "email")
arbol = tb.Treeview(
    frame_listado,
    columns=cols,
    show="headings",
    bootstyle="info",
    selectmode="extended",  # permite multiselección
)
for col, text, width in [
    ("dninie", "DNI/NIE", 150),
    ("nombre", "Nombre", 180),
    ("apellidos", "Apellidos", 220),
    ("email", "Email", 220),
]:
    arbol.heading(col, text=text)
    arbol.column(col, width=width, anchor=W)

yscroll = tb.Scrollbar(frame_listado, orient="vertical", command=arbol.yview)
xscroll = tb.Scrollbar(frame_listado, orient="horizontal", command=arbol.xview)
arbol.configure(yscrollcommand=yscroll.set, xscrollcommand=xscroll.set)

arbol.pack(fill=BOTH, expand=YES, side="left")
yscroll.pack(fill=Y, side="left")
xscroll.pack(fill=X)

def cargar_clientes(filtro_dni=None):
    try:
        for item in arbol.get_children():
            arbol.delete(item)

        if filtro_dni:
            patron = f"%{filtro_dni}%"
            cursor.execute(
                "SELECT dninie, nombre, apellidos, email FROM clientes "
                "WHERE dninie LIKE %s "
                "ORDER BY dninie DESC;",
                (patron,),
            )
        else:
            cursor.execute(
                "SELECT dninie, nombre, apellidos, email FROM clientes "
                "ORDER BY dninie DESC;"
            )

        filas = cursor.fetchall()
        for dninie, nombre, apellidos, email in filas:
            arbol.insert("", "end", values=(dninie, nombre, apellidos, email))
        status_var.set(f"Clientes cargados: {len(filas)}")
        actualizar_estado_boton()
    except Error as e:
        status_var.set(f"Error al cargar: {e}")
        messagebox.showerror("Error de consulta", str(e))

def actualizar_estado_boton(event=None):
    seleccion = arbol.selection()
    btn_eliminar.config(state="normal" if seleccion else "disabled")

arbol.bind("<<TreeviewSelect>>", actualizar_estado_boton)

def eliminar_clientes():
    seleccion = arbol.selection()
    if not seleccion:
        status_var.set("No hay clientes seleccionados para eliminar.")
        return

    # Recoger DNIs/NIEs únicos de la selección
    dnis = []
    for iid in seleccion:
        vals = arbol.item(iid, "values")
        if vals and vals[0] not in dnis:
            dnis.append(vals[0])

    if not dnis:
        status_var.set("No se pudieron leer los DNI/NIE seleccionados.")
        return

    if not messagebox.askyesno(
        "Confirmar eliminación",
        f"Se eliminarán {len(dnis)} cliente(s) por DNI/NIE.\n¿Deseas continuar?",
    ):
        return

    try:
        # Generar placeholders para IN (%s, %s, ...)
        placeholders = ", ".join(["%s"] * len(dnis))
        query = f"DELETE FROM clientes WHERE dninie IN ({placeholders});"
        cursor.execute(query, tuple(dnis))
        afectados = cursor.rowcount
        conexion.commit()
        status_var.set(f"Eliminados {afectados} cliente(s).")
        cargar_clientes()
    except Error as e:
        status_var.set(f"Error al eliminar: {e}")
        messagebox.showerror("Error al eliminar", str(e))

btn_eliminar.config(command=eliminar_clientes)

# Carga inicial
cargar_clientes()

# Barra de estado
status_bar = tb.Label(root, textvariable=status_var, anchor=W, bootstyle="inverse-secondary")
status_bar.pack(fill=X, side="bottom")

def on_close():
    try:
        if cursor:
            cursor.close()
        if conexion and conexion.is_connected():
            conexion.close()
    finally:
        root.destroy()

root.protocol("WM_DELETE_WINDOW", on_close)
root.mainloop()


```
### 006- Aplicaciòn de las estructuras de almacenamiento
#### 001-Estructuras estaticas y dinamicas
**001- Estructuras estaticas.py**
```python
# X, Y, Z
coordenadas = (4,5,6)

```
**002- Append a tupla.py**
```python
# X, Y, Z
coordenadas = (4,5,6)
coordenadas.append(7)
## LA TUPLA ES ESTATICA, NO PUEDE CAMBIAR ##

```
**003- Escribir datos.py**
```python
# X, Y, Z
coordenadas = (4,5,6)


coordenadas[0] = 11 # ESTO ES LA X
coordenadas[1] = 12 # ESTO ES LA Y
coordenadas[2] = 13 # ESTO ES LA Z


```
**004- Leer datos.py**
```python
# X, Y, Z
coordenadas = (4,5,6)
coordenadas = (11,12,13)

print(coordenadas)

print(coordenadas[0])


```
**005- Estructuras dinamicas.py**
```python
agenda = [] # corchetes = Lista
# las estructuras dinamicas no tienen limite de almacenamiento 
agenda.append("Valentín de gennaro")
agenda.append("Pepe")

print(agenda)

agenda.append("Juan")

print(agenda)

```
**006- Acceso a un solo elemento.py**
```python
agenda = [] # corchetes = Lista
# las estructuras dinamicas no tienen limite de almacenamiento 
agenda.append("Valentín de gennaro")
agenda.append("Pepe")

print(agenda)

agenda.append("Juan")

print(agenda)
print(agenda[0])

```
**007- Sobreescribir.py**
```python
agenda = [
	'Valentin De Gennaro',
	'Pepe',
	'Juan'
] # = Lista

print(agenda)
# Remplazamos el primer nombre
agenda[0] = "Jaime"

print(agenda)


```
**008- Elimnar elementos de la lista.py**
```python
agenda = [
	'Valentin De Gennaro',
	'Pepe',
	'Juan'
] # = Lista

print(agenda)

agenda.pop() # Por defecto elimina el ultimo

print(agenda)


```
**009- Quitar un elemento en concreto.py**
```python
agenda = [
	'Valentin De Gennaro',
	'Pepe',
	'Juan'
] # = Lista

print(agenda)

agenda.pop(1) 

print(agenda)


```
**010- Tupla de nuevo.py**
```python
# x,y,z
coordenadas = (4,5,6)



```
**011- Diccionario.py**
```python
# x,y,z

coordenadas = {
	"x":"4",
	"y":"5",
	"z":"6"
}

print(coordenadas)



```
**012- Acceso a un elemento.py**
```python
# x,y,z
## LISTA PERO CON NOMBRES ##
coordenadas = {
	"x":"6",
	"y":"7",
	"z":"8"
}

print(coordenadas)
print(coordenadas['x'])


```
**013- Repaso.md**
```markdown
# Tuplas()

Estaticas, no pueden crecer ni decrecer
Indices númericos

# Listas []

Dinamicas, pueden crecer y decrecer
Indices númericos

# Diccionarios {}

Dinamicas, pueden crecer y decrecer
Indices alfanúmericos (letras, palabras, números)

```
**014- Creamos una lista de la compra.py**
```python
lista_de_la_compra = []

lista_de_la_compra.append("mangos")
lista_de_la_compra.append("chorizo")
lista_de_la_compra.append("cerveza")
lista_de_la_compra.append("patos")

print(lista_de_la_compra)


```
**015- Lista con diccionario.py**
```python
lista_de_la_compra = []

lista_de_la_compra.append(
	{
		"producto":"mangos",
		"cantidad":"4"
	}
)

print(lista_de_la_compra)



```
**016- Un segundo elemento.py**
```python
lista_de_la_compra = []

lista_de_la_compra.append(
	{
		"producto":"Licor",
		"cantidad":"4"
	}
)

lista_de_la_compra.append(
	{
		"producto":"Cerveza",
		"cantidad":"48"
	}
)

print(lista_de_la_compra)



```
**017- Carga inicial.py**
```python
lista_de_la_compra = [
	{
		"producto":"Licor",
		"cantidad":"4"
	},
	{
		"producto":"Cerveza",
		"cantidad":"48"
	}
]

print(lista_de_la_compra)



```
**018- El usuario se crea su lista.py**
```python
print("Lista de la compra v0.1")

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	



```
**019- Estructura if.py**
```python
print("Lista de la compra v0.1")

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
	elif opcion == 2:



```
**020- Creamos la lista.py**
```python
print("Lista de la compra v0.1")

lista_de_la_compra = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
	elif opcion == 2:



```
**021- Añado un elemento a la lista.py**
```python
print("Lista de la compra v0.1")

lista_de_la_compra = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
		lista_de_la_compra.append({'nombre':nombre,'cantidad':cantidad)
		
	elif opcion == 2:



```
**022- Vomito la lista.py**
```python
print("Lista de la compra v0.1")

lista_de_la_compra = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
		lista_de_la_compra.append({'nombre':nombre,'cantidad':cantidad)
		
	elif opcion == 2:
		print("Listamos la lista de la compra")
		print(lista_de_la_compra)



```
**023- Recorrer lista.py**
```python
agenda = ['Juan', 'Pedro', 'Pepe']

print(agenda)
print(agenda[0])

for nombre in agenda:
	print(nombre)

```
**024- Recorro la lista.py**
```python
print("Lista de la compra v0.1")

lista_de_la_compra = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
		lista_de_la_compra.append({'nombre':nombre,'cantidad':cantidad})
		
	elif opcion == 2:
		print("Listamos la lista de la compra")
		for producto in lista_de_la_compra:
			print("")
			print("Producto:",producto['nombre'])
			print("Cantidad:",producto['cantidad'])
			print("##############################")



```
**025- Guardo en json.py**
```python
print("Lista de la compra v0.1")
import json 								# Para usar la libreria debo importarlo

lista_de_la_compra = []

while True:
	print("Selecciona una opción")
	print("1.-Añadir un elemento a la lista")
	print("2.-Leer la lista")
	opcion = int(input("Tu opción: "))
	
	if opcion == 1:
		print("Añadimos un elemento a la lista")
		nombre = input("Indica el nombre del producto: ")
		cantidad = input("Indica la cantidad del producto: ")
		lista_de_la_compra.append({'nombre':nombre,'cantidad':cantidad})
		archivo = open("lista.json","w") 				# Abro un archivo
		json.dump(lista_de_la_compra,archivo)			# Guardo en Json
		archivo.close()									# Cierro el archivo
		
	elif opcion == 2:
		print("Listamos la lista de la compra")
		for producto in lista_de_la_compra:
			print("")
			print("Producto:",producto['nombre'])
			print("Cantidad:",producto['cantidad'])
			print("##############################")



```
#### 002-Creacion de matrices (arrays)
**026- comidas.py**
```python
menu = []

```
**027- Bucle infinito.py**
```python
menu = []

while True:
	comida = input("Introduce el nombre de la comida: ")
	

```
**028- Añado a la lista.py**
```python
menu = []

while True:
	comida = input("Introduce el nombre de la comida: ")
	menu.append(comida)

```
**029- Recorrer la lista.py**
```python
menu = []

while True:
	comida = input("Introduce el nombre de la comida: ")
	menu.append(comida)
	print("Tu comida hasta el momento es: ")
	for elemento in menu:
		print(elemento)

```
**030- Acciones del menu.py**
```python
menu = []

while True:
	print("Opciones: ")
	print("1.-Introducir nueva comida en el menu")
	print("2.-Listar comidas en el menu")
	opcion = int(input("Elige una opcion: ")
	
	comida = input("Introduce el nombre de la comida: ")
	menu.append(comida)
	print("Tu comida hasta el momento es: ")
	for elemento in menu:
		print(elemento)

```
**031- Tomamos las opciones.py**
```python
'''

	Menú de restaurante
	
'''

menu = []

while True:
	print("Opciones: ")
	print("1.-Introducir nueva comida en el menu")
	print("2.-Listar comidas en el menu")
	opcion = int(input("Elige una opcion: "))
	
	if opcion == 1:
		comida = input("Introduce el nombre de la comida: ")
		menu.append(comida)
		
	elif opcion == 2:
		print("Tu comida hasta el momento es: ")
		for elemento in menu:
			print(elemento)

```
**032- Intentamos guardar.py**
```python
'''

	Menú de restaurante
	
'''
import pickle

menu = []

while True:
	print("Opciones: ")
	print("1.-Introducir nueva comida en el menu")
	print("2.-Listar comidas en el menu")
	print("3.-Guardar en archivo")
	opcion = int(input("Elige una opcion: "))
	
	if opcion == 1:
		comida = input("Introduce el nombre de la comida: ")
		menu.append(comida)
		
	elif opcion == 2:
		print("Tu comida hasta el momento es: ")
		for elemento in menu:
			print(elemento)
	
	elif opcion == 3:
		archivo = open("restaurante.txt","w")
		archivo.write(menu)
		archivo.close

```
**033- Abro el archivo en modo estructura binaria.py**
```python
'''

	Menú de restaurante
	
'''
## IMPORTAMOS LA LIBRERIA ##
import pickle
## CREAMOS LA LISTA VACIA ##
menu = []
## EMPEZAMOS EL BUCLE ##
while True:
	print("Opciones: ")
	print("1.-Introducir nueva comida en el menu")
	print("2.-Listar comidas en el menu")
	print("3.-Guardar en archivo")
	opcion = int(input("Elige una opcion: "))
## DESARROLLO LA OPCIÓN 1 ##
	if opcion == 1:
		comida = input("Introduce el nombre de la comida: ")
		menu.append(comida)
## DESARROLLO LA OPCIÓN 2 ##	
	elif opcion == 2:
		print("Tu comida hasta el momento es: ")
		for elemento in menu:
			print(elemento)
## DESARROLLO LA OPCIÓN 3 ##
	elif opcion == 3:
		archivo = open("restaurante.bin","wb")  ## WRITE BINARY ##
		pickle.dump(menu,archivo)
		archivo.close()

```
**034- Print con exito.py**
```python
'''

	Menú de restaurante
	
'''
## IMPORTAMOS LA LIBRERIA ##
import pickle
## CREAMOS LA LISTA VACIA ##
menu = []
## EMPEZAMOS EL BUCLE ##
while True:
	print("Opciones: ")
	print("1.-Introducir nueva comida en el menu")
	print("2.-Listar comidas en el menu")
	print("3.-Guardar en archivo")
	opcion = int(input("Elige una opcion: "))
## DESARROLLO LA OPCIÓN 1 ##
	if opcion == 1:
		comida = input("Introduce el nombre de la comida: ")
		menu.append(comida)
## DESARROLLO LA OPCIÓN 2 ##	
	elif opcion == 2:
		print("Tu comida hasta el momento es: ")
		for elemento in menu:
			print(elemento)
## DESARROLLO LA OPCIÓN 3 ##
	elif opcion == 3:
		archivo = open("restaurante.bin","wb")  ## WRITE BINARY ##
		pickle.dump(menu,archivo)
		archivo.close()
		print("Información guardada correctamente ✅")

```
**035- Cargar archivo.py**
```python
'''

	Menú de restaurante
	
'''

## IMPORTAMOS LA LIBRERIA ##
import pickle

## CREAMOS LA LISTA VACIA ##
menu = []

## EMPEZAMOS EL BUCLE ##
while True:
	print("Opciones: ")
	print("1.-Introducir nueva comida en el menu")
	print("2.-Listar comidas en el menu")
	print("3.-Guardar en archivo")
	print("4.-Cargar datos de archivo")
	opcion = int(input("Elige una opcion: "))
	
## DESARROLLO LA OPCIÓN 1 ##
	if opcion == 1:
		comida = input("Introduce el nombre de la comida: ")
		menu.append(comida)
		
## DESARROLLO LA OPCIÓN 2 ##	
	elif opcion == 2:
		print("Tu comida hasta el momento es: ")
		for elemento in menu:
			print("#################")
			print(elemento)
			print("#################")
			
## DESARROLLO LA OPCIÓN 3 ##
	elif opcion == 3:
		archivo = open("restaurante.bin","wb")  ## WRITE BINARY ##
		pickle.dump(menu,archivo)
		archivo.close()
		print("#####################################")
		print("Información guardada correctamente ✅")
		print("#####################################")
		
## DESARROLLO LA OPCIÓN 4 ##
	elif opcion == 4:
		archivo = open("restaurante.bin","rb")
		menu = pickle.load(archivo)  ## VOLCAMOS EL ARCHIVO A LA LISTA ##
		archivo.close()
		print("##############################")
		print("Se ha cargado correctamente ✅")
		print("##############################")
		
		

```
#### 003-Matrices (arrays) multidimesionales
**001- Variable.py**
```python
nombre = "Valentin"

```
**002- Lista.py**
```python
nombre = "Valentin"  ## UNIDIMENSIONAL ##

nombres = [
	"Valentin",
	"Juan",
	"Pedro",
	"Roberto",
	"Jaime"
]

```
**003- Matriz multidimensional.py**
```python
agenda = []

## UNA LISTA DENTRO DE OTRA LISTA ##
agenda[0] = [
	"Valentin",
	"De Gennaro",
	"info@valentin.com",
	"1158873815"
]

agenda[1] = [
	"Juan",
	"Gomez",
	"info@juan.com",
	"12345678"
]

```
**004- Otra formulacion.py**
```python
agenda = []

## UNA LISTA DENTRO DE OTRA LISTA ##
agenda = [
	[
		"Valentin",
		"De Gennaro",
		"info@valentin.com",
		"1158873815"
	],
	[
		"Juan",
		"Gomez",
		"info@juan.com",
		"12345678"
	]
]

print(agenda)

```
**005- Acceso a un elemento de la primera dimension.py**
```python
agenda = []

## UNA LISTA DENTRO DE OTRA LISTA ##
agenda = [
	[
		"Valentin",
		"De Gennaro",
		"info@valentin.com",
		"1158873815"
	],
	[
		"Juan",
		"Gomez",
		"info@juan.com",
		"12345678"
	]
]

print(agenda[0])


```
**006- Puedo acceder a la segunda dimension.py**
```python
agenda = []

## UNA LISTA DENTRO DE OTRA LISTA ##
agenda = [
	[
		"Valentin",
		"De Gennaro",
		"info@valentin.com",
		"1158873815"
	],
	[
		"Juan",
		"Gomez",
		"info@juan.com",
		"12345678"
	]
]

print(agenda[0])
print(agenda[0][0]) ## VALENTIN ##


```
**007- Tambien podemos escribit.py**
```python
agenda = []

## UNA LISTA DENTRO DE OTRA LISTA ##
agenda = [
	[
		"Valentin",
		"De Gennaro",
		"info@valentin.com",
		"1158873815"
	],
	[
		"Juan",
		"Gomez",
		"info@juan.com",
		"12345678"
	]
]

print(agenda[0])
print(agenda[0][0]) ## VALENTIN ##
agenda [0][0] = "Jaime"
print(agenda[0][0]) ## JAIME ##

```
**008- Ejemplo palet.py**
```python
palet = [ # X
			[ # Y
				[0,1,2], # Z
				[3,4,5],
				[6,7,8]
			],
			[
				[9,10,11],
				[12,13,14],
				[15,16,17]
			],
			[
				[18,19,20],
				[21,22,23],
				[24,25,26]
			]
		]
print(palet)

```
**009- Linea de palets.py**
```python
palet = [ ## LINEA DE PALETS ##
			[ # X
				[ # Y
					[0,1,2], # Z
					[3,4,5],
					[6,7,8]
				],
				[
					[9,10,11],
					[12,13,14],
					[15,16,17]
				],
				[
					[18,19,20],
					[21,22,23],
					[24,25,26]
				]
			]
		]
print(palet)

```
**010- Estanteria de palets.py**
```python
palet = [
			[ ## LINEA DE PALETS ##
				[ # X
					[ # Y
						[0,1,2], # Z
						[3,4,5],
						[6,7,8]
					],
					[
						[9,10,11],
						[12,13,14],
						[15,16,17]
					],
					[
						[18,19,20],
						[21,22,23],
						[24,25,26]
					]
				]
			]
				[ # X
					[ # Y
						[0,1,2], # Z
						[3,4,5],
						[6,7,8]
					],
					[
						[9,10,11],
						[12,13,14],
						[15,16,17]
					],
					[
						[18,19,20],
						[21,22,23],
						[24,25,26]
					]
				]
				[ # X
					[ # Y
						[0,1,2], # Z
						[3,4,5],
						[6,7,8]
					],
					[
						[9,10,11],
						[12,13,14],
						[15,16,17]
					],
					[
						[18,19,20],
						[21,22,23],
						[24,25,26]
					]
				]
			]
			[ ## LINEA DE PALETS ##
				[ # X
					[ # Y
						[0,1,2], # Z
						[3,4,5],
						[6,7,8]
					],
					[
						[9,10,11],
						[12,13,14],
						[15,16,17]
					],
					[
						[18,19,20],
						[21,22,23],
						[24,25,26]
					]
				]
			]
				[ # X
					[ # Y
						[0,1,2], # Z
						[3,4,5],
						[6,7,8]
					],
					[
						[9,10,11],
						[12,13,14],
						[15,16,17]
					],
					[
						[18,19,20],
						[21,22,23],
						[24,25,26]
					]
				]
				[ # X
					[ # Y
						[0,1,2], # Z
						[3,4,5],
						[6,7,8]
					],
					[
						[9,10,11],
						[12,13,14],
						[15,16,17]
					],
					[
						[18,19,20],
						[21,22,23],
						[24,25,26]
					]
				]
			]
		]
print(palet)

```
**011- Estanterias.py**
```python
palet = [ ## LINEA DE ESTANTERIAS ##
			[ ## ESTANTERIA DE PALETS ##
				[ ## LINEA DE PALETS ##
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					]
				],
				[ ## LINEA DE PALETS ##
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					]
				]
			],
			[ ## ESTANTERIA DE PALETS ##
				[ ## LINEA DE PALETS ##
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					]
				],
				[ ## LINEA DE PALETS ##
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					],
					[ # X
						[ # Y
							[0,1,2], # Z
							[3,4,5],
							[6,7,8]
						],
						[
							[9,10,11],
							[12,13,14],
							[15,16,17]
						],
						[
							[18,19,20],
							[21,22,23],
							[24,25,26]
						]
					]
				]
			]
		]
print(palet)

```
**012- Naves industriales.py**
```python
palet = [ ## NAVES INDUSTRIALES ##
			[ ## LINEA DE ESTANTERIAS ##
				[ ## ESTANTERIA DE PALETS ##
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					],
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					]
				],
				[ ## ESTANTERIA DE PALETS ##
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					],
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					]
				]
			],
			[ ## LINEA DE ESTANTERIAS ##
				[ ## ESTANTERIA DE PALETS ##
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					],
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					]
				],
				[ ## ESTANTERIA DE PALETS ##
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					],
					[ ## LINEA DE PALETS ##
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						],
						[ # X
							[ # Y
								[0,1,2], # Z
								[3,4,5],
								[6,7,8]
							],
							[
								[9,10,11],
								[12,13,14],
								[15,16,17]
							],
							[
								[18,19,20],
								[21,22,23],
								[24,25,26]
							]
						]
					]
				]
			]
		]
print(palet)

```
**013- Agenda.py**
```python
agenda = []

while True:
	nombre = input("Dime tu nombre: ")
	apellidos = input("Dime tus apellidos: ")
	email = input("Dime tu email: ")
	telefono = input("Dime tu telefono: ")
	## AÑADO LOS DATOS A LA AGENDA ##
	agenda.append([nombre,apellidos,email,telefono])
	print(agenda)

```
**014- Pickle para guardar.py**
```python
import pickle
agenda = []

while True:
	nombre = input("Dime tu nombre: ")
	apellidos = input("Dime tus apellidos: ")
	email = input("Dime tu email: ")
	telefono = input("Dime tu telefono: ")
	## AÑADO LOS DATOS A LA AGENDA ##
	agenda.append([nombre,apellidos,email,telefono])
	print(agenda)
	archivo = open("agenda.bin","wb")
	pickle.dump(agenda,archivo)
	archivo.close()

```
**015- Conversiones de datos a conocidas.py**
```python
edad = '47'

edad_en_numero = int(edad)

print(edad)
print(edad_en_numero)

```
**016- Conversiones no posibles.py**
```python
edad = 'a'

edad_en_numero = int(edad)

print(edad)
print(edad_en_numero)

```
**017- Tipo.py**
```python
lista = ['manzanas','peras', 'platanos']
print(lista)
print(type(lista))

tupla = ('manzanas','peras', 'platanos')
print(tupla)
print(type(tupla))

```
**018- Cambio de tipo de datos.py**
```python
tupla = ('manzanas','peras', 'platanos')
## NECESITO METER UNA FRUTA MAS ##
print(tupla)

lista = list(tupla)  ## CONVIERTO UNA TUPLA EN UNA LISTA ##
print(lista)
lista.append('fresas')

## AHORA SUPONGAMOS QUE TENGOP QUE VOLVER A LA TUPLA ##
nuvea_tupla = tuple(lista)
print(nuvea_tupla)

```
**019- Parto.py**
```python
import pickle
agenda = []

while True:
	print("Selecciona una opcione: ")
	print("1.-Introducir un registro")
	print("2.-Leer registros")
	print("3.-Guardar registros")
	print("4.-Eliminar un registro")
	print("5.-Salir")
	opcion = int(input("Elige una opcion: "))
	
	if opcion == 1:	
	## INSERTAR ##
		nombre = input("Dime tu nombre: ")
		apellidos = input("Dime tus apellidos: ")
		email = input("Dime tu email: ")
		telefono = input("Dime tu telefono: ")
		## AÑADO LOS DATOS A LA AGENDA ##
		agenda.append([nombre,apellidos,email,telefono])
		
	elif opcion == 2:
	## IMPRIMIR ##
		print(agenda)
	
	elif opcion == 3:
	## GUARDAR ##
		archivo = open("agenda.bin","wb")
		pickle.dump(agenda,archivo)
		archivo.close()
		
	elif opcion == 4:
	## ELIMINAR ##
		eliminar = input("Introduce el nombre del registro a eliminar: ")
		agenda.pop(eliminar)
		print("Eliminado Correctamente")
	
	elif opcion == 5:
	## SALIR ##
		print("Saliendo...")
		break
		

```
#### 004-Genericidad
**001-Genericidad en python.py**
```python
numeros = [
	1,
	2,
	"3",
	4
]

print(numeros)

```
**002-Funcion doble.py**
```python
numeros = [
	1,
	2,
	"3",
	4
]

print(numeros)

def calculaDoble():
	for numero in numeros:
		print(numero*2)
	
calculaDoble()

```
**003-Arreglo de genericidad.py**
```python
numeros = [
	1,
	2,
	"3",
	4
]

print(numeros)

def calculaDoble():
	for numero in numeros:
		numero = int(numero)  ## CONVIERTO EN ENTERO ##
		print(numero*2)
	
calculaDoble()

```
**004-Meto un poco de presion.py**
```python
numeros = [
	1,
	2,
	"3",
	4,
	"cinco"
]

print(numeros)

def calculaDoble():
	for numero in numeros:
		numero = int(numero)  ## CONVIERTO EN ENTERO ##
		print(numero*2)
	
calculaDoble()

```
**005-Try except.py**
```python
numeros = [
	1,
	2,
	"3",
	4,
	"cinco"
]

print(numeros)

def calculaDoble():
	for numero in numeros:
		try:
			numero = int(numero)  ## CONVIERTO EN ENTERO ##
			print(numero*2)
		except:
			print("(ERROR)")
	
calculaDoble()

```
**006-Estructura de datos.py**
```python
numeros = [
	1,
	2,
	"3",
	4,
	"cinco"
]

print(numeros)
numeros_etiquetas = ['cero','uno','dos','tres','cuatro','cinco']
def calculaDoble():
	for numero in numeros:
		try:		## PRIMERO INTENTO CONVERTIR ##
			numero = int(numero)
			print(numero*2)
		except:		## SI NO PUEDO ##
			## INTENTO BUSCAR EL VALOR EN LA LISTA DE NUMEROS ##
			for i in range(0,len(numeros_etiquetas)):
				if numero == numeros_etiquetas[i]:
					print(i*2)
	
calculaDoble()

```
**007-La volvemos a fastidiar.py**
```python
numeros = [
	1,
	2,
	"3",
	4,
	"cinco",
	"cerveza"
]

print(numeros)
numeros_etiquetas = ['cero','uno','dos','tres','cuatro','cinco']
def calculaDoble():
	for numero in numeros:
		try:		## PRIMERO INTENTO CONVERTIR ##
			numero = int(numero)
			print(numero*2)
		except: 
			try:	## SI NO PUEDO ##
				## INTENTO BUSCAR EL VALOR EN LA LISTA DE NUMEROS ##
				for i in range(0,len(numeros_etiquetas)):
					if numero == numeros_etiquetas[i]:
						print(i*2)
		
	
calculaDoble()

```
**008-Atrapamos el caso cerveza.py**
```python
numeros = [
	1,
	2,
	"3",
	4,
	"cinco",
	"cerveza"
]

print(numeros)
numeros_etiquetas = ['cero','uno','dos','tres','cuatro','cinco']
def calculaDoble():
	for numero in numeros:
		try:
			numero = int(numero)
			print(numero*2)
		except:
			centinela = False
			for i in range(0,len(numeros_etiquetas)):
				if numero == numeros_etiquetas[i]:
					print(i*2)
					centienla = True
			if centinela == False:
				print("No se puede")
	
calculaDoble()

```
#### 005-Cadenas de caracteres. Expresiones regulares
**001-las strings realmente son colecciones.py**
```python
nombre = "Valentin"
print(nombre)

print(nombre[0]) # Solo imprime la 1er letra

```
**002-Recorrer una cadena.py**
```python
nombre = "Valentin"

for letra in nombre:
	print(letra) # Imprime las letras por separado

```
**003-Longitud de la cadena.py**
```python
nombre = "Valentin"

print("La longitud del nombre es: ")
print(len(nombre))

```
**004-Explotar.py**
```python
nombre = "Valentin Antonio"

explotado = nombre.split(" ")
print(explotado)

```
**005-Ejemplo csv.py**
```python
# CSV = Coma Separated Values

datos = "uno,dos,tres,cuatro,cinco,seis"

# Primero imprimo la cadena
print(datos)

# Ahora la parto
partido = datos.split(",")

# Ahora imoprimo partido
print(partido)



```
**006-Unir.py**
```python
# CSV = Coma Separated Values

datos = "uno,dos,tres,cuatro,cinco,seis"

# Primero imprimo la cadena
print(datos)

# Ahora la parto
partido = datos.split(",")

# Ahora imoprimo partido
print(partido)

# Ahora quiero unir todo de nuevo
nueva_cadena = "||".join(partido)

# Ahora imprimo los datos
print(nueva_cadena)



```
**007-Leer archivo csv.py**
```python
archivo = open("clientes.csv","r")

lineas = archivo.readlines()

for linea in lineas:
	partido = linea.split(",")
	print(partido)

```
**008- Convierto a matriz multidimensional.py**
```python
archivo = open("clientes.csv","r")

lineas = archivo.readlines()

conjunto_datos = []

for linea in lineas:
	partido = linea.split(",")
	conjunto_datos.append(partido)
	
print(conjunto_datos)

```
**009-Remplazar.py**
```python
cadena = "Hoy es martes"

reemplazado = cadena.replace("martes","miercoles")

print(reemplazado)

```
**010-Quiar saltos de linea.py**
```python
linea_con_salto = "Esto es una prueba \n"

limpiado = linea_con_salto.replace("\n","")

print(limpiado)

```
**011-Expresiones regulares.py**
```python

"""
Explicación del patrón:

^
    Indica el inicio de la cadena. La validación comienza desde el principio.

[a-zA-Z0-9_.+-]+
    Parte local del correo (antes de '@').
    Permite:
        - letras mayúsculas y minúsculas (a-zA-Z)
        - números (0-9)
        - guion bajo (_)
        - punto (.)
        - signo más (+)
        - guion (-)
    El símbolo '+' indica uno o más caracteres válidos.

@
    Caracter obligatorio que separa el usuario del dominio.

[a-zA-Z0-9-]+
    Nombre del dominio principal sin subdominios.
    Permite letras, números y guiones.
    Requiere al menos un carácter.

\.
    Un punto literal que separa el dominio del TLD.
    El backslash escapa el carácter '.' para que no actúe como comodín.

[a-zA-Z0-9-.]+
    Parte final del dominio (TLD o subdominios), por ejemplo:
        .com
        .co.uk
        .org
    Permite letras, números, guiones y puntos.
    El símbolo '+' indica uno o más caracteres.

$
    Indica el final de la cadena. La validación termina aquí.
"""
import re

patron = r'^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$'

email_mal = "algo"
email_bien = "info@jocarsa.com"

print(re.match(patron, email_mal))

print(re.match(patron, email_bien))

```
**012-Regex direccion postal.py**
```python
import re

patron = r'^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+ \d+[A-Za-z]? \d{5}$'
"""
Explicación del patrón:

^
    Inicio de la cadena.

[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+
    Nombre de la calle o vía.
    Permite:
        - letras mayúsculas y minúsculas
        - letras acentuadas y 'ñ'
        - espacios
    '+' indica uno o más caracteres.

␣ (espacio)
    Separador obligatorio.

\d+
    Número de portal.
    '\d' representa un dígito.
    '+' indica uno o más dígitos.
    Ejemplo: 5, 23, 104

[A-Za-z]?
    Letra opcional en el número (como 10B o 23A).
    '?' indica que puede aparecer cero o una vez.

␣ (espacio)
    Separador obligatorio.

\d{5}
    Código postal español estándar de 5 dígitos.

$
    Final de la cadena.
"""

direccion_mal = "Calle Mayor"
direccion_bien = "Calle Mayor 10 46005"

print(re.match(patron, direccion_mal))
print(re.match(patron, direccion_bien))

```
**013-Validar telefono.py**
```python
telefono = "123456789"


```
**014-ollama.md**
```markdown
# Descargamos la instalacion de ollama

sudo apt install curl (si no tenemos curl)

curl -fsSL https://ollama.com/install.sh | sh

# Comprobar la version instalada

ollama --version  ## ollama version is 0.13.0

# Alternativa con snap:

sudo snap install ollama

# Quiero saber los modelos que tengo instalado

ollama list

```
**015-Instalar un modelo.md**
```markdown
ollama pull qwen2.5:3b-instruct

```
**016-Ejecutar ollama.md**
```markdown
ollama run qwen2.5:3b-instruct

```
**017-Lista de modelos de ejemplo.md**
```markdown
LLaMA / Meta

llama2 ✅️

llama3 ✅️

llama3.1

llama3.2

llama3.2-vision

codellama

Mistral / Mixtral

mistral

mistral-small

mistral-large (community ports)

mixtral-8x7b

mixtral-8x22b (community)

open-mistral-nemo (NVIDIA)

Phi / Microsoft

phi

phi2

phi3

phi3-mini

phi3-small

phi3-medium

Qwen / Alibaba

qwen

qwen2

qwen2.5

qwen2.5-coder

qwen2-audio

qwen2-vision

Nous Research

nous-hermes

nous-hermes-2-mistral

neural-chat

Gemma / Google

gemma

gemma2

Tiny / Lightweight models

tinyllama

orca-mini

dolphin-phi

stablelm-zephyr

✅ Vision-capable Models

(models that process images)

llama3.2-vision

qwen2-vision

moondream

bakllava

llava

llava-phi

chocovision (community)

✅ Code-specialized Models

codellama ✅

granite-code ✅

qwen2.5-coder ✅

deepseek-coder ✅

starcoder2 

mistral-coder (community)

✅ Audio / Speech Models

whisper (speech-to-text)

qwen2-audio

salmonn (community)

✅ Embedding Models

nomic-embed-text

bge-base

bge-large

instructor-xl

✅ Tool / Function-calling Models

(many LLMs support tools depending on prompt)

No separate engine, but strongest:

llama3.1

llama3.2

qwen2.5

mixtral-8x7b

```
**018-Ejecutar ollama desde python.py**
```python
import requests
import json

url = "http://localhost:11434/api/generate"

payload = {
    "model": "qwen2.5:3b-instruct",
    "prompt": "Explica qué es una lista en Python con un ejemplo. Responde en español",
    "stream": False
}

response = requests.post(url, json=payload)

data = response.json()
print(data["response"])

```
#### 006-Colecciones, listas, conjuntos y diccionarios
**001-Diccionarios.py**
```python
# Repaso de listas y tuplas
lista = ["platano","manzana","fresa"]

lista[0] # platano
lista[1] # manzana

tupla = ("platano","manzana","fresa")

lista[0] # platano
lista[1] # manzana

```
**002-Diccionarios ahora si.py**
```python
##  ESTO SIGUE SIENDO UNA LISTA
persona = [
	"Valentin",
	"De Gennaro",
	"info@valentin.com",
	21
]

## AHORA EN FORMATO DICCIONARIO

persona = {
	"nombre":"Valentin",
	"apellidos":"De Gennaro",
	"correo":"info@valentin.com",
	"edad":21
}

```
**003-Lista en diccionario.py**
```python
persona = {
	"nombre":"Valentin",
	"apellidos":"De Gennaro",
	"correo":"info@valentin.com",
	"edad":21,
	"telefonos":[
		12345678,
		87654321
	]
}

```
**004-Lista de diccionarios en diccionario.py**
```python
persona = {
	"nombre":"Valentin",
	"apellidos":"De Gennaro",
	"correo":"info@valentin.com",
	"edad":21,
	"telefonos":[
		{
			"tipo":"fijo",
			"numero":12345678
		},
		{
			"tipo":"movil",
			"numero":87654321
		}
	]
}

print(persona)

```
**005-No argumentos.py**
```python
edad = input("Dime tu edad: ")
entero = int(edad)
doble = entero*2
print(doble)

```
**006-Ahora con argumentos.py**
```python
import sys

print(sys.argv)

```
**007-Doble edad con argumentos.py**
```python
import sys

argumentos = sys.argv

edad = argumentos[1]
entero = int(edad)
doble = entero*2
print(doble)

```
**008-Ejemplo con dos argumentos.py**
```python
import sys

argumentos = sys.argv
nombre = argumentos[1]
edad = argumentos[2]
entero = int(edad)
doble = entero*2
print("Hola, "+nombre+" tienes "+str(doble)+" años")

```
**009-Argumentos con nombre.py**
```python
import argparse

parser = argparse.ArgumentParser()
parser.add_argument("--nombre")
parser.add_argument("--apellidos")

args = parser.parse_args()

diccionario = vars(args)

print(diccionario)


```
**010-Instalar y usar ffmpeg.md**
```markdown
## INSTALAR
sudo apt install ffmpeg

## LLAMARLO
ffmpeg

## EJEMPLO DE USO
ffmpeg -i {VIDEO} codificado.mp4

```
**011-Acceder a diccionario.py**
```python
persona = {
	"nombre":"Valentin",
	"apellidos":"De Gennaro",
	"correo":"info@valentin.com",
	"edad":21,
	"telefonos":[
		{
			"tipo":"fijo",
			"numero":12345678
		},
		{
			"tipo":"movil",
			"numero":87654321
		}
	]
}

print(persona)
print(persona["telefonos"][0]["numero"])

```
#### 007-Operaciones agregadas
**001- Conjuntos.py**
```python
frutas = {"manzanas","peras","platanos"}
print(frutas)
print(type(frutas))

```
**002-No repeticiones.py**
```python
# No se aplica el concepto de orden
# No se pueden reordenar
# No admiten duplicados

frutas = {"manzanas","peras","platanos","manzanas"}
print(frutas)
print(type(frutas))

```
**003-Dos conjuntos.py**
```python
# No se aplica el concepto de orden
# No se pueden reordenar
# No admiten duplicados

frutas1 = {"manzanas","peras","platanos"}

frutas2 = {"peras","platanos","manzanas"}

if frutas1 == frutas2:
	print("Son iguales")
else:
	print("Son diferentes")

```
**004-Comprobacion numeros.py**
```python
patron = {1,2,3,4,5,6,7,8,9}

prueba = {6,4,3,5,7,8,2,1,9}

if prueba == patron:
	print("Se cumple la condicion")
else:
	print("No se cumple la condicion")

```
**005-Aleatorio.py**
```python
import random

patron = {1,2,3,4,5,6,7,8,9}

lista = []
for i in range(1,10):
	lista.append(random.randint(1,9))
print(patron)
print(lista)
conjunto = set(lista)
print(conjunto)

if conjunto == patron:
	print("El conjunto es correcto")
else:
	print("El conjunto no es correcto")

```
**006-Fueza bruta.py**
```python
import random

patron = {1,2,3,4,5,6,7,8,9}

while True:
  lista = []
  for i in range(1,10):
    lista.append(random.randint(1,9))
  conjunto = set(lista)

  if conjunto == patron:
    print("El conjunto es correcto")
    print(conjunto)
    print(lista)
    break # Fuerzo la finalizazión del bucle infinito

```
**007-Elimino un numero.py**
```python
import random

patron = {1,2,3,4,5,6,7,8,9}

while True:
  lista = []
  for i in range(1,10):
    lista.append(random.randint(1,9))
  conjunto = set(lista)
  if conjunto == patron:
    print("El conjunto es correcto")
    print(conjunto)
    print(lista)
    # Ahora elimino un numero
    indice = random.randint(1,9)
    lista[indice] = "_"
    print(lista)
    break # Fuerzo la finalizazión del bucle infinito

```
**008-Elimino X numeros.py**
```python
import random

patron = {1,2,3,4,5,6,7,8,9}

while True:
  lista = []
  for i in range(1,10):
    lista.append(random.randint(1,9))
  conjunto = set(lista)
  if conjunto == patron:
    print("El conjunto es correcto")
    print(conjunto)
    print(lista)
    for i in range(1,5):
    # Ahora elimino un numero
		indice = random.randint(0,8)
		lista[indice] = "_"
    print(lista)
    break # Fuerzo la finalizazión del bucle infinito

```
**009-Repito 9 veces.py**
```python
import random

patron = {1,2,3,4,5,6,7,8,9}

for celda in range(1,10):
	while True:
	  lista = []
	  for i in range(1,10):
		lista.append(random.randint(1,9))
	  conjunto = set(lista)
	  if conjunto == patron:
		print("El conjunto es correcto")
		print(conjunto)
		print(lista)
		break # Fuerzo la finalizazión del bucle infinito

```
**010-Matriz bidimensional.py**
```python
import random

patron = {1,2,3,4,5,6,7,8,9}
sudoku = []
for celda in range(1,10):
  while True:
    lista = []
    for i in range(1,10):
      lista.append(random.randint(1,9))
    conjunto = set(lista)
    if conjunto == patron:
      sudoku.append(lista)
      break # Fuerzo la finalizazión del bucle infinito
    
print(sudoku)

```
**011-flask.py**
```python
import random
from flask import Flask,render_template

app = Flask(__name__)

@app.route("/")
def inicio():
	patron = {1,2,3,4,5,6,7,8,9}
	sudoku = []
	for celda in range(1,10):
		while True:
			lista = []
			for i in range(1,10):
				lista.append(random.randint(1,9))
			conjunto = set(lista)
			if conjunto == patron:
				sudoku.append(lista)
				break # Fuerzo la finalizazión del bucle infinito
	return render_template("index.html",datos=sudoku)

if __name__ == "__main__":
  app.run(debug=True)

```
**012-falsk con contador.py**
```python
import random
from flask import Flask,render_template

app = Flask(__name__)

@app.route("/")
def inicio():
	contador = 0
	patron = {1,2,3,4,5,6,7,8,9}
	sudoku = []
	for celda in range(1,10):
		while True:
			contador += 1
			lista = []
			for i in range(1,10):
				lista.append(random.randint(1,9))
			conjunto = set(lista)
			if conjunto == patron:
				sudoku.append(lista)
				break # Fuerzo la finalizazión del bucle infinito
	print("He necesitado con fuerza bruta, "+str(contador)+"intentos")
	return render_template("index.html",datos=sudoku)

if __name__ == "__main__":
  app.run(debug=True)

```
**013-Calculo completo.py**
```python
import random
from flask import Flask, render_template

app = Flask(__name__)

PATRON = set(range(1, 10))  # {1,2,3,4,5,6,7,8,9}


def generar_fila():
    """Genera una permutación aleatoria de 1..9."""
    fila = list(range(1, 10))
    random.shuffle(fila)
    return fila


def filas_validas(sudoku):
    """Todas las filas contienen exactamente los números 1..9."""
    for fila in sudoku:
        if set(fila) != PATRON:
            return False
    return True


def columnas_validas(sudoku):
    """Todas las columnas contienen exactamente los números 1..9."""
    for c in range(9):
        columna = [sudoku[f][c] for f in range(9)]
        if set(columna) != PATRON:
            return False
    return True


def sudoku_a_bloques(sudoku):
    """
    Convierte el sudoku (9 filas x 9 columnas) en 9 bloques 3x3.
    Cada bloque es una lista de 9 números, en orden de lectura.
    """
    bloques = []
    for br in range(3):          # bloque fila
        for bc in range(3):      # bloque columna
            bloque = []
            for r in range(br * 3, br * 3 + 3):
                for c in range(bc * 3, bc * 3 + 3):
                    bloque.append(sudoku[r][c])
            bloques.append(bloque)
    return bloques


@app.route("/")
def inicio():
    intentos = 0

    # Fuerza bruta: generar tableros al azar hasta que filas y columnas sean válidas
    while True:
        intentos += 1
        sudoku = [generar_fila() for _ in range(9)]

        if filas_validas(sudoku) and columnas_validas(sudoku):
            break

    print(f"He necesitado, con fuerza bruta, {intentos} intentos")

    # Adaptamos a tu HTML: 9 bloques 3x3
    datos = sudoku_a_bloques(sudoku)

    return render_template("index.html", datos=datos)


if __name__ == "__main__":
    app.run(debug=True)

```
**014-Mas eficiente.py**
```python
import random
from flask import Flask, render_template

app = Flask(__name__)


def es_valido(grid, fila, col, num):
    """Comprueba si `num` puede ponerse en grid[fila][col]."""

    # Fila
    if num in grid[fila]:
        return False

    # Columna
    for f in range(9):
        if grid[f][col] == num:
            return False

    # Bloque 3x3
    bloque_fila = (fila // 3) * 3
    bloque_col = (col // 3) * 3
    for f in range(bloque_fila, bloque_fila + 3):
        for c in range(bloque_col, bloque_col + 3):
            if grid[f][c] == num:
                return False

    return True


def resolver_sudoku(grid):
    """
    Backtracking: intenta rellenar la cuadrícula.
    Devuelve True si se ha podido resolver, False si no.
    """

    # Buscar la siguiente celda vacía (0)
    for fila in range(9):
        for col in range(9):
            if grid[fila][col] == 0:
                # Probamos números del 1 al 9 en orden aleatorio
                candidatos = list(range(1, 10))
                random.shuffle(candidatos)

                for num in candidatos:
                    if es_valido(grid, fila, col, num):
                        grid[fila][col] = num
                        if resolver_sudoku(grid):
                            return True
                        # backtrack
                        grid[fila][col] = 0

                # Si ningún número sirve, devolvemos False
                return False

    # Si no quedan celdas vacías, está resuelto
    return True


def generar_sudoku_completo():
    """Genera un sudoku completo válido (9x9) usando backtracking."""
    grid = [[0 for _ in range(9)] for _ in range(9)]
    resolver_sudoku(grid)
    return grid


def sudoku_a_bloques(sudoku):
    """
    Convierte el sudoku (9x9) en 9 bloques 3x3.
    Cada bloque es una lista de 9 números.
    """
    bloques = []
    for br in range(3):          # bloque fila
        for bc in range(3):      # bloque columna
            bloque = []
            for r in range(br * 3, br * 3 + 3):
                for c in range(bc * 3, bc * 3 + 3):
                    bloque.append(sudoku[r][c])
            bloques.append(bloque)
    return bloques


@app.route("/")
def inicio():
    sudoku = generar_sudoku_completo()
    datos = sudoku_a_bloques(sudoku)
    return render_template("index2.html", datos=datos)


if __name__ == "__main__":
    app.run(debug=True)

```
##### templates
**index.html**
```html
<!doctype html>
<html lang="es">
	<head>
		<style>
			html,body{
				padding:0px;
				margin:0px;
				height:100%;
				width:100%;
			}
			body{
        		background:orangered;
				color: white;
				display:flex;
				justify-content:center;
				align-items:center;
			}
     		main{
				background:black;
				height:400px;
				width:400px;
        		display:grid;
				grid-template-columns:repeat(3,100fr);
			}
      		section{
				display:grid;
				grid-template-columns:repeat(3,100fr);
      			border:2px solid orangered;
			}
      		div{
				display:flex;
				justify-content:center;
				align-items:center;
				font-size:30px;
				border:1px solid white;
			}
    	</style>
  	</head>
 	<body>
   		<main>
      		{% for dato in datos:%}
      		<section>
      		{% for numero in dato:%}
          		<div>{{numero}}</div>
       		{% endfor %}
      		</section>
      		{% endfor %}
    	</main>
  	</body>
</html>
```
**index2.html**
```html
<!doctype html>
<html lang="es">
  <head>
    <style>
      html,body{
        padding:0x;margin:0px;height:100%;width:100%;
     	}
      body{
        background:grey;display:flex;justify-content:
          center;align-items:center;
      }
      main{
        background:white;height:400px;width:400px;
        display:grid;grid-template-columns:repeat(3,100fr);
     	}
      section{
        display:grid;grid-template-columns:repeat(3,100fr);
     	 	border:2px solid black;
      }
      div{
        display:flex;justify-content:center;
        align-items:center;font-size:30px;border:1px solid grey;
      }
    </style>
  </head>
 	<body>
   	<main>
      {% for dato in datos:%}
      	<section>
      	{% for numero in dato:%}
          <div>{{numero}}</div>
        {% endfor %}
      </section>
      {% endfor %}
    </main>
    <script>
     	// Selecciono todas las celdas
      let celdas = document.querySelectorAll("div")
      // Ahora recorro las celdas
      celdas.forEach(function(celda){
      	// Determino aleatoriamente si la borro o no
        if(Math.random() < 0.5){	// Si el aleatorio está por debajo de un limite
        	celda.style.color = "white" 	// Borro la celda
        }
      })
    </script>
  </body>
</html>
```
### 007-Utilizacion avanzada de clases
#### 000-Repaso
**001-Npc.py**
```python
## Non Playable Character

class Npc():
	def __init__(self,x,y):
		self.posx = x
		self.posy = y
		

personaje1 = Npc(4,3)
personaje2 = Npc(5,4)

print(personaje1)
print(personaje2)



```
**002-Lista de Npc.py**
```python
## Non Playable Character

class Npc():
	def __init__(self,x,y):
		self.posx = x
		self.posy = y
		

personajes = []

personajes.append(Npc(4,3))
personajes.append(Npc(3,4))

print(personajes)


```
**003-Ahora muchos personajes.py**
```python
## Non Playable Character

class Npc():
	def __init__(self,x,y):
		self.posx = x
		self.posy = y
		

personajes = []
numero_personajes = 50

for i in range(0,numero_personajes):
	personajes.append(Npc(4,3))

print(personajes)


```
**004-Posicion aleatoria.py**
```python
## Non Playable Character
import random

class Npc():
	def __init__(self,x,y):
		self.posx = x
		self.posy = y
		

personajes = []
numero_personajes = 50

for i in range(0,numero_personajes):
	xaleatoria = random.randint(0,500)
	yaleatoria = random.randint(0,500)
	personajes.append(Npc(xaleatoria,yaleatoria))

print(personajes)


```
**005-Imprimo como json.py**
```python
import random
import json

class Npc():
    def __init__(self, x, y):
        self.posx = x
        self.posy = y

    # Método para convertir el objeto en diccionario
    def to_dict(self):
        return {"posx": self.posx, "posy": self.posy}

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
    xaleatoria = random.randint(0, 500)
    yaleatoria = random.randint(0, 500)
    personajes.append(Npc(xaleatoria, yaleatoria))

# Convertimos todos los NPC a diccionarios
personajes_json = [p.to_dict() for p in personajes]

# Lo imprimimos formateado
print(json.dumps(personajes_json, indent=2))

```
**006-Flask.py**
```python
import random
import json
from flask import Flask,render_template

class Npc():
	def __init__(self, x, y):
		self.posx = x
		self.posy = y

    # Método para convertir el objeto en diccionario
	def to_dict(self):
		return {"posx": self.posx, "posy": self.posy}
# Preparo los personajes

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	personajes.append(Npc(xaleatoria, yaleatoria))

personajes_json = [p.to_dict() for p in personajes]

# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
**007-Nuevo parametro.py**
```python
import random
import json
from flask import Flask,render_template

class Npc():
	def __init__(self, x, y,radio):
		self.posx = x
		self.posy = y
		self.radio = radio

    # Método para convertir el objeto en diccionario
	def to_dict(self):
		return {"posx": self.posx, "posy": self.posy,"radio":self.radio}
# Preparo los personajes

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
    xaleatoria = random.randint(0, 500)
    yaleatoria = random.randint(0, 500)
    radioaleatorio = random.randint(10, 30)
    personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio))

personajes_json = [p.to_dict() for p in personajes]

# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
  return render_template("juego.html")

@app.route("/api")
def api():
  return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
  app.run(debug=True)

```
**008-Muevo personajes.py**
```python
import random
import json
from flask import Flask,render_template

class Npc():
	def __init__(self, x, y,radio):
		self.posx = x
		self.posy = y
		self.radio = radio

# Método para convertir el objeto en diccionario
    
	def to_dict(self):
		return {"posx": self.posx, "posy": self.posy,"radio":self.radio}
	def mover(self):
		self.posx += random.randint(-5,5) ## MUEVETE UN POCO EN X
		self.posy += random.randint(-5,5) ## MUEVETE UN POCO EN Y
		
# Preparo los personajes

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio))


# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
**009-Muevo personajes pero con trigonometria.py**
```python
import random
import json
from flask import Flask,render_template
import math

class Npc():
	def __init__(self, x, y,radio,direccion):
		self.posx = x
		self.posy = y
		self.radio = radio
		self.direccion = direccion

# Método para convertir el objeto en diccionario
    
	def to_dict(self):
		return {
		"posx": self.posx,
		"posy": self.posy,
		"radio":self.radio,
		"direccion":self.direccion
		}
	def mover(self):
		self.posx += math.cos(self.direccion)
		self.posy += math.sin(self.direccion)
		
# Preparo los personajes

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	direccionaleatoria = random.random()*math.pi*2
	personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio,direccionaleatoria))


# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
**010-Creamos velocidad.py**
```python
import random
import json
from flask import Flask,render_template
import math

class Npc():
	def __init__(self, x, y,radio,direccion,velocidad):
		self.posx = x
		self.posy = y
		self.radio = radio
		self.direccion = direccion
		self.velocidad = velocidad
# Método para convertir el objeto en diccionario
    
	def to_dict(self):
		return {
		"posx": self.posx,
		"posy": self.posy,
		"radio":self.radio,
		"direccion":self.direccion
		}
	def mover(self):
		self.posx += math.cos(self.direccion)*self.velocidad
		self.posy += math.sin(self.direccion)*self.velocidad
		
# Preparo los personajes

personajes = []
numero_personajes = 5000

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	direccionaleatoria = random.random()*math.pi*2
	velocidadaleatoria = random.random()*5
	personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio,direccionaleatoria,velocidadaleatoria))


# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
**011-Angulo cambia random.py**
```python
import random
import json
from flask import Flask,render_template
import math

class Npc():
	def __init__(self, x, y,radio,direccion,velocidad):
		self.posx = x
		self.posy = y
		self.radio = radio
		self.direccion = direccion
		self.velocidad = velocidad
# Método para convertir el objeto en diccionario
    
	def to_dict(self):
		return {
		"posx": self.posx,
		"posy": self.posy,
		"radio":self.radio,
		"direccion":self.direccion
		}
	def mover(self):
		self.direccion += self.direccion*(random.random()-0.5)*0.2
		self.posx += math.cos(self.direccion)*self.velocidad
		self.posy += math.sin(self.direccion)*self.velocidad
		
# Preparo los personajes

personajes = []
numero_personajes = 500

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	direccionaleatoria = random.random()*math.pi*2
	velocidadaleatoria = random.random()*5
	personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio,direccionaleatoria,velocidadaleatoria))


# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
**012-Colicion.py**
```python
import random
import json
from flask import Flask,render_template
import math

class Npc():
	def __init__(self, x, y,radio,direccion,velocidad):
		self.posx = x
		self.posy = y
		self.radio = radio
		self.direccion = direccion
		self.velocidad = velocidad
# Método para convertir el objeto en diccionario
    
	def to_dict(self):
		return {
		"posx": self.posx,
		"posy": self.posy,
		"radio":self.radio,
		"direccion":self.direccion
		}
	def mover(self):
		self.direccion += self.direccion*(random.random()-0.5)*0.2
		if self.posx > 500 or self.posx < 0 or self.posy > 500 or self.posy < 0:
			self.direccion += math.pi
		self.posx += math.cos(self.direccion)*self.velocidad
		self.posy += math.sin(self.direccion)*self.velocidad
		
# Preparo los personajes

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	direccionaleatoria = random.random()*math.pi*2
	velocidadaleatoria = random.random()*5
	personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio,direccionaleatoria,velocidadaleatoria))


# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
##### templates
**juego.html**
```html
<!doctype html>
<html>
    <head>
        <style>
            .npc{
                background:peru;
                border-radius:50px;
                position:absolute;
            }
        </style>
    </head>
 	<body>	
        <main>
        </main>
        <script>
        // Cojo el contenedor
        let escenario = document.querySelector("main")
        let temporizador = setTimeout("bucle()",1000)
        function bucle(){
                // Me conecto a una api, pido datos, los convierto a json, y los lanzo
            fetch("http://127.0.0.1:5000/api")
            .then(function(respuesta){return respuesta.json();})
            .then(function(datos){
                console.log(datos)
                // VACIO EL ESCENARIO SOLO CUANDO RECIBO DATOS
                escenario.innerHTML = ""
                // Para cada npc:
                datos.forEach(function(npc){
                // Creo un nuevo elemento en HTML
                    let personaje = document.createElement("div")
                // Le añado una clase css
                personaje.classList.add("npc")
                // La posicion x en HTML sera la posicion x que viene de Python
                personaje.style.left = npc.posx+"px"
                // La posicion y en HTML será la posición y que viene de Python
                personaje.style.top = npc.posy+"px"
                // Pongo la anchura sobre el dato que llega de Python
                personaje.style.width = npc.radio+"px"
                // Pongo la altura sobre el dato que llega de Python
                personaje.style.height = npc.radio+"px"
                escenario.appendChild(personaje)
                })
            })
            // PRIMERO BORRO EL TEMPORIZADOR ANTERIOR
            clearTimeout(temporizador)
            // Y AHORA VUELVO A LANZAR EL TEMPORIZADOR
            temporizador = setTimeout("bucle()",100)
        }
        </script>
  </body>
</html>
```
#### 001-Composición de clases
**001-Una primera clase.py**
```python
class Alumno():
	def __init__(self,nombre,apellidos,email)
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	
alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com")
print(alumno1)


```
**002-Una segunda clase.py**
```python
class Profesor():
	def __init__(self,nombre,apellidos,email)
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email

class Alumno():
	def __init__(self,nombre,apellidos,email)
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	
alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com")
print(alumno1)

profesor1 = Profesor("Jose Vicente","Carratala","info@jocarsa.com")
print(profesor1)

```
**003-Polimorfismo clasico.py**
```python
class Profesor():
	def __init__(self,nombre,apellidos,email)
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	def dameDatos(self):
		return self.nombre+self.apellidos

class Alumno():
	def __init__(self,nombre,apellidos,email)
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	def dameDatos(self):
		return self.nombre+self.apellidos
	
alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com")
print(alumno1.dameDatos())

profesor1 = Profesor("Jose Vicente","Carratala","info@jocarsa.com")
print(profesor1.dameDatos())

```
**004-Superclase.py**
```python
class Persona():
	def __init__(self,nombre,apellidos,email,direccion):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		self.direccion = direccion
	def dameDatos(self):
		return self.nombre+self.apellidos,self.direccion


class Profesor(Persona):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre,apellidos,email,direccion)

class Alumno(Persona):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre,apellidos,email,direccion)
	
alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com","calle principal 1")
print(alumno1.dameDatos())

profesor1 = Profesor("Jose Vicente","Carratala","info@jocarsa.com","calle principal 2")
print(profesor1.dameDatos())

```
**005-Sublases.py**
```python
class Persona():
	def __init__(self,nombre,apellidos,email,direccion):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		self.direccion = direccion
	def dameDatos(self):
		return self.nombre+self.apellidos,self.direccion


class Profesor(Persona):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre,apellidos,email,direccion)

class Alumno(Persona):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre,apellidos,email,direccion)
	
class AlumnoOnline(Alumno):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre,apellidos,email,direccion)

class AlumnoPresencial(Alumno):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre,apellidos,email,direccion)
	
alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com","calle principal 1")
print(alumno1.dameDatos())

profesor1 = Profesor("Jose Vicente","Carratala","info@jocarsa.com","calle principal 2")
print(profesor1.dameDatos())

```
**006-Diagrama.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "rectangle",
      "left": "607px",
      "top": "101px",
      "width": "",
      "height": "",
      "texto": "Persona"
    },
    {
      "id": "forma-2",
      "tipo": "rectangle",
      "left": "420px",
      "top": "236px",
      "width": "",
      "height": "",
      "texto": "Profesor"
    },
    {
      "id": "forma-3",
      "tipo": "rectangle",
      "left": "819px",
      "top": "215px",
      "width": "",
      "height": "",
      "texto": "Alumno"
    },
    {
      "id": "forma-4",
      "tipo": "rectangle",
      "left": "713.667px",
      "top": "341.833px",
      "width": "",
      "height": "",
      "texto": "AlumnoPresencial"
    },
    {
      "id": "forma-5",
      "tipo": "rectangle",
      "left": "977.667px",
      "top": "340.333px",
      "width": "",
      "height": "",
      "texto": "AlumnoOnline"
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
#### 002-Herencia y polimorfismo
**001-Herencia simple.py**
```python
class Persona():
	def __init__(self,nombre,apellidos):
		self.nombre = nombre
		self.apellidos = apellidos
	def dameDatos(self):
		return self.nombre+self.apellidos

class Profesor(Persona):
	def __init__(self,nombre,apellidos):
		super().__init__(nombre, apellidos)
  
class Alumno(Persona):
	def __init__(self,nombre,apellidos,email,direccion):
		super().__init__(nombre, apellidos)

alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com","calle principal 1")
print(alumno1.dameDatos())

profesor1 = Profesor("Jose Vicente","Carratala","info@jocarsa.com","calle principal 2")
print(profesor1.dameDatos())

```
**002-Polimorfismo clasico.py**
```python
class Persona():
	def __init__(self,nombre,apellidos):
		self.nombre = nombre
		self.apellidos = apellidos
	def dameDatos(self):
		return self.nombre+self.apellidos

class Profesor(Persona):
	def __init__(self,nombre,apellidos):
		super().__init__(nombre, apellidos)
	def dameDatos(self):
		return "Profesor: "+self.nombre+" "+self.apellidos
  
class Alumno(Persona):
	def __init__(self,nombre,apellidos):
		super().__init__(nombre, apellidos)
	def dameDatos(self):
	return "Alumno: "+self.nombre+" "+self.apellidos

alumno1 = Alumno("Valentin","De Gennaro","info@valentindg.com","calle principal 1")
print(alumno1.dameDatos())

profesor1 = Profesor("Jose Vicente","Carratala","info@jocarsa.com","calle principal 2")
print(profesor1.dameDatos())

```
#### 003-Jerarquia de clase. Superclases y subclases
**001-Preparamos.html**
```html
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
</html>
```
**002-Script de movimiento.html**
```html
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        let nave = document.querySelector("#nave");
        let posx = 40;
        let posy = 40;

        document.onkeydown = function(){       // CUANDO PULSE TECLA SOBRE EL DOCUMENTO
            console.log(tecla)
        }
    </script>
</html>
```
**003-Keycodes.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        let nave = document.querySelector("#nave");
        let posx = 40;
        let posy = 40;

        document.onkeydown = function(tecla){       // CUANDO PULSE TECLA SOBRE EL DOCUMENTO
            console.log(tecla)
            // w = 87, s = 83, a = 65 , d = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                // SI PULSO W                
                    posy -= 5;            // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                // SI PULSO S
                    posy += 5;            // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                // SI PULSO A
                    posx -= 5;            // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    posx += 5;            // SI PULSO D                                                                                       
                    break               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = posx+"px";
            nave.style.top = posy+"px";                                                                                                                                       
        }
    </script>
</html>
```
**004-Clase nave.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        // PRIMERO DECLARAMOS UNA CLASE
        class Jugador{
            constructor(x,y){
                this.posx = x;
                this.posy = y;
            }
        }
        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let InstanciaJugador = new Jugador(40,40)
        let nave = document.querySelector("#nave");

        document.onkeydown = function(tecla){       // CUANDO PULSE TECLA SOBRE EL DOCUMENTO
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                // SI PULSO W                
                    InstanciaJugador.posy -= 5;            // SUBO 5 UNIDADES EN Y
                    console.log("aqui entro")
                    break;

                case 83:                // SI PULSO S
                    InstanciaJugador.posy += 5;            // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                // SI PULSO A
                    InstanciaJugador.posx -= 5;            // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;            // SI PULSO D                                                                                       
                    break               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
    </script>
</html>
```
**005-Rocas.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        // PRIMERO DECLARAMOS UNA CLASE
        class Jugador{
            constructor(x,y){
                this.posx = x;
                this.posy = y;
            }
        }
        class Roca{
            constructor(x,y){
                this.posx = x;
                this.posy = y;
            }
        }
        // Voy a crear rocas
        let numero_rocas = 10;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*500				        // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*500				        // posy aleatoria entre 0 y 500
            rocas.push(new Roca(posx_aleatoria,posy_aleatoria))	        // Creo una nueva roca
    }
        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let InstanciaJugador = new Jugador(40,40)
        let nave = document.querySelector("#nave");

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"											// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**006-variaciones en las rocas.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        // PRIMERO DECLARAMOS UNA CLASE
        class Jugador{
            constructor(x,y,a){
                this.posx = x;
                this.posy = y;
                this.angulo = a; 
            }
        }
        class Roca{
            constructor(x,y,a,e){
                this.posx = x;
                this.posy = y;
                this.angulo = a;
                this.escala = e;
            }
        }
        // Voy a crear rocas
        let numero_rocas = 10;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*500				        // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*500				        // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*Math.PI*2
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria
                ))	// Creo una nueva roca	
            }

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let InstanciaJugador = new Jugador(40,40,0)
        let nave = document.querySelector("#nave");

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"											// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**007-Clase bala.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        // PRIMERO DECLARAMOS UNA CLASE
        class Bala{
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        
        class Jugador{
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;
                this.velocidad = v; 
            }
        }

        class Roca{
            constructor(x,y,a,e,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;
                this.escala = e;
                this.velocidad = v;
            }
        }

        // Voy a crear rocas
        let numero_rocas = 10;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*500				        // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*500				        // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*Math.PI*2
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria
                ))	// Creo una nueva roca	
            }

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let InstanciaJugador = new Jugador(40,40,0,0)
        let nave = document.querySelector("#nave");

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"											// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**008-Superclase.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        // PRIMERO DECLARAMOS UNA CLASE
        class Entidad{                                                // CREAMOS UNA ENTIDAD COMO SUPERCLASE
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        class Bala extends Entidad {                                   // LA BALA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // LA BALA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Jugador extends Entidad {                                // EL JUGADOR EXTIENDE A LA CANTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // EL JUGADOR HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Roca extends Entidad {                                   // LA ROCA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,e,v){ 
                super(x, y, a, v);	                                   // LA ROCA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD											
                this.escala = e;                                       // PERO LA ROCA PUEDE TENER SUS PROPIAS PROPIEDADES
            }
        }

        // Voy a crear rocas
        let numero_rocas = 10;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*500				        // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*500				        // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*Math.PI*2
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria
                ))	// Creo una nueva roca	
            }

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let InstanciaJugador = new Jugador(40,40,0,0)
        let nave = document.querySelector("#nave");

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"											// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**009-Ancho y alto del navegador.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        let anchopagina = window.innerWidth	
        let altopagina = window.innerHeight	

        // PRIMERO DECLARAMOS UNA CLASE
        class Entidad{                                                // CREAMOS UNA ENTIDAD COMO SUPERCLASE
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        class Bala extends Entidad {                                   // LA BALA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // LA BALA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Jugador extends Entidad {                                // EL JUGADOR EXTIENDE A LA CANTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // EL JUGADOR HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Roca extends Entidad {                                   // LA ROCA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,e,v){ 
                super(x, y, a, v);	                                   // LA ROCA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD											
                this.escala = e;                                       // PERO LA ROCA PUEDE TENER SUS PROPIAS PROPIEDADES
            }
        }

        // Voy a crear rocas
        let numero_rocas = 10;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*anchopagina			    // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*altopagina			    // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*Math.PI*2
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria
                ))	// Creo una nueva roca	
            }

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let InstanciaJugador = new Jugador(40,40,0,0)
        let nave = document.querySelector("#nave");

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"											// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**010-Quiero que la nave empiece en cualquier punto.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        let anchopagina = window.innerWidth	
        let altopagina = window.innerHeight	

        // PRIMERO DECLARAMOS UNA CLASE
        class Entidad{                                                // CREAMOS UNA ENTIDAD COMO SUPERCLASE
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        class Bala extends Entidad {                                   // LA BALA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // LA BALA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Jugador extends Entidad {                                // EL JUGADOR EXTIENDE A LA CANTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // EL JUGADOR HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Roca extends Entidad {                                   // LA ROCA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,e,v){ 
                super(x, y, a, v);	                                   // LA ROCA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD											
                this.escala = e;                                       // PERO LA ROCA PUEDE TENER SUS PROPIAS PROPIEDADES
            }
        }

        // Voy a crear rocas
        let numero_rocas = 100;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*anchopagina			    // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*altopagina			    // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*360
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria
                ))	// Creo una nueva roca	
            }

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let nave = document.querySelector("#nave");
        let InstanciaJugador = new Jugador(
            Math.random()*anchopagina,
            Math.random()*altopagina,
        0,0)

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"										// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**011-Descansamos con un fondo.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
            body{background:url("estrellas.jpeg");background-size:cover;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        let anchopagina = window.innerWidth	
        let altopagina = window.innerHeight	

        // PRIMERO DECLARAMOS UNA CLASE
        class Entidad{                                                // CREAMOS UNA ENTIDAD COMO SUPERCLASE
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        class Bala extends Entidad {                                   // LA BALA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // LA BALA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Jugador extends Entidad {                                // EL JUGADOR EXTIENDE A LA CANTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // EL JUGADOR HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Roca extends Entidad {                                   // LA ROCA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,e,v){ 
                super(x, y, a, v);	                                   // LA ROCA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD											
                this.escala = e;                                       // PERO LA ROCA PUEDE TENER SUS PROPIAS PROPIEDADES
            }
        }

        // Voy a crear rocas
        let numero_rocas = 100;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*anchopagina			    // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*altopagina			    // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*360
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria
                ))	// Creo una nueva roca	
            }

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let nave = document.querySelector("#nave");
        let InstanciaJugador = new Jugador(
            Math.random()*anchopagina,
            Math.random()*altopagina,
        0,0)

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"										// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**012-Crear balas.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
            body{background:url("estrellas.jpeg");background-size:cover;}
        </style>
    </head>
    <body>
        <img src="nave.png" id="nave">
    </body>
    <script>
        let anchopagina = window.innerWidth	
        let altopagina = window.innerHeight	

        // PRIMERO DECLARAMOS UNA CLASE
        class Entidad{                                                // CREAMOS UNA ENTIDAD COMO SUPERCLASE
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        class Bala extends Entidad {                                   // LA BALA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // LA BALA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Jugador extends Entidad {                                // EL JUGADOR EXTIENDE A LA CANTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // EL JUGADOR HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Roca extends Entidad {                                   // LA ROCA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,e,v){ 
                super(x, y, a, v);	                                   // LA ROCA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD											
                this.escala = e;                                       // PERO LA ROCA PUEDE TENER SUS PROPIAS PROPIEDADES
            }
        }

        // Voy a crear rocas
        let numero_rocas = 100;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*anchopagina			    // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*altopagina			    // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*360
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria,
                0
                ))	// Creo una nueva roca	
        }
        // Voy a crear balas
        let numero_balas = 0;												// Indico el numero de balas actual
        let balas = [];														// Creo un conjunto vacio

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let nave = document.querySelector("#nave");
        let InstanciaJugador = new Jugador(
            Math.random()*anchopagina,
            Math.random()*altopagina,
        0,0)

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
            }
            nave.style.left = InstanciaJugador.posx+"px";
            nave.style.top = InstanciaJugador.posy+"px";                                                                                                                                       
        }
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"										// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
**013-Creo bala nueva al disparar.html**
```html
<!DOCTYPE html>
<html>
    <head>
        <style>
            #nave{position:absolute;width:100px;}
            .roca{width:50px;}
            .bala{width:50px;}
            body{background:url("estrellas.jpeg");background-size:cover;}
        </style>
    </head>
    <body>
        <img src="nave2.png" id="nave">
    </body>
    <script>
        let anchopagina = window.innerWidth	
        let altopagina = window.innerHeight	

        // PRIMERO DECLARAMOS UNA CLASE
        class Entidad{                                                // CREAMOS UNA ENTIDAD COMO SUPERCLASE
            constructor(x,y,a,v){
                this.posx = x;
                this.posy = y;
                this.angulo = a;  	
                this.velocidad = v;
            }
        }
        class Bala extends Entidad {                                   // LA BALA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // LA BALA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Jugador extends Entidad {                                // EL JUGADOR EXTIENDE A LA CANTIDAD
            constructor(x,y,a,v){
                super(x, y, a, v);                                     // EL JUGADOR HEREDA ESTAS PROPIEDADES DE LA ENTIDAD
            }
        }
        class Roca extends Entidad {                                   // LA ROCA EXTIENDE A LA ENTIDAD
            constructor(x,y,a,e,v){ 
                super(x, y, a, v);	                                   // LA ROCA HEREDA ESTAS PROPIEDADES DE LA ENTIDAD											
                this.escala = e;                                       // PERO LA ROCA PUEDE TENER SUS PROPIAS PROPIEDADES
            }
        }

        // Voy a crear rocas
        let numero_rocas = 100;											// Digo cuantas rocas quiero
        let rocas = [];													// Creo un array vacío
        for(let i = 0;i<numero_rocas;i++){							    // Recorro un bucle
            let posx_aleatoria = Math.random()*anchopagina			    // posx aleatoria entre 0 y 500
            let posy_aleatoria = Math.random()*altopagina			    // posy aleatoria entre 0 y 500
            let angulo_aleatorio = Math.random()*360
            let escala_aleatoria = Math.random()*1
                rocas.push(new Roca(
                posx_aleatoria,
                posy_aleatoria,
                angulo_aleatorio,
                escala_aleatoria,
                0
                ))	// Creo una nueva roca	
        }
        // Voy a crear balas
        let numero_balas = 0;												// Indico el numero de balas actual
        let balas = [];														// Creo un conjunto vacio

        // AHORA CREO UNA INSTANCIA DEL JUGADOR
        let nave = document.querySelector("#nave");
        let InstanciaJugador = new Jugador(
            Math.random()*anchopagina,
            Math.random()*altopagina,
        0,0)

        // CUANDO PULSE UNA TECLA SOBRE EL DOCUMENTO
        document.onkeydown = function(tecla){       
            console.log(tecla)
            // W = 87, S = 83, A = 65 , D = 68
            switch(tecla.keyCode){                                                                                                                                                                                                                                                                                                                                                                                                          
                case 87:                                 // SI PULSO W                
                    InstanciaJugador.posy -= 5;          // SUBO 5 UNIDADES EN Y
                    break;

                case 83:                                 // SI PULSO S
                    InstanciaJugador.posy += 5;          // BAJO 5 UNIDADES EN Y
                    break;

                case 65:                                 // SI PULSO A
                    InstanciaJugador.posx -= 5;          // BAJO 5 UNIDADES EN X
                    break;

                case 68:
                    InstanciaJugador.posx += 5;          // SI PULSO D                                                                                       
                    break;                               // SUBO 5 UNIDADES EN X
                
                case 32:			                     // SI PULSO LA BARRA ESPACIADORA
                    balas.push(new Bala(
                        InstanciaJugador.posx,
                        InstanciaJugador.posy,
                        0,0
                    ));
                    let nueva_bala = document.createElement("img"); // Creo una nueva imagen
                    nueva_bala.classList.add("bala")								// Le añado la clase roca
                    nueva_bala.src = "bala.png"											// Cargo la imagen de la roca
                    nueva_bala.style.position = "absolute"					// Le pongo absoluto para poder mover con libertad
                    nueva_bala.style.left = InstanciaJugador.posx+"px"					// Le pongo su posicion X
                    nueva_bala.style.top = InstanciaJugador.posy+"px"						// Le pongo su posicion Y
                    document.querySelector("body").appendChild(nueva_bala)	// Añado la roca al body
                        break;
                }
                nave.style.left = InstanciaJugador.posx+"px";
                nave.style.top = InstanciaJugador.posy+"px";
            }                                                                                                                                      
        // Voy a dibujar rocas
        for(let i = 0;i<numero_rocas;i++){
            let nueva_roca = document.createElement("img");                     // Creo una nueva imagen
            nueva_roca.classList.add("roca")								    // Le añado la clase roca
            nueva_roca.src = "roca2.png"										// Cargo la imagen de la roca
            nueva_roca.style.position = "absolute"					            // Le pongo absoluto para poder mover con libertad
            nueva_roca.style.left = rocas[i].posx+"px"					        // Le pongo su posicion X
            nueva_roca.style.top = rocas[i].posy+"px"					    	// Le pongo su posicion Y
            nueva_roca.style.transform = "rotate("+rocas[i].angulo+"deg)  scale("+rocas[i].escala+")"
            document.querySelector("body").appendChild(nueva_roca)          	// Añado la roca al body
        }
    </script>
</html>
```
#### 004-Clases y metodos abstractos y finales
**001-Clase abstracta.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<script>
			class Ser{									// ABSTRACTO IMPLICITO, NO TIENE SENTIDO INSTANCIA
				constructor(edad){
					this.edad = edad;
				}
			}
			class Animal extends Ser{					// ABSTRACTO IMPLICITO, NO TIENE SENTIDO INSTANCIA
				constructor(especie){
					super();
					this.especie = especie;
				}
			}
			class Perro extends Animal{					// CONCRETO, TIENE SENTIDO INSTANCIAR
				constructor(color){
					super();
					this.color = color;
				}
			}
			let Perro1 = new Perro("blanco");
			console.log(Perro1);
		</script>
	</body>
</html>

```
**002-Transformaciones css.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
		<style>
			#rojo{
				width:50px; height:50px; background:orangered; border:1px solid black;
				transform:translate(200px,200px);
			}
		</style>
	</head>
	<body>
		<div id="rojo"></div>
	</body>
</html>

```
**003-Transformaciones independientes.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
		<style>
			#rojo{
				width:50px; height:50px; background:orangered; border:1px solid black;
				transform:translateX(200px) translateY(200px);
			}
		</style>
	</head>
	<body>
		<div id="rojo"></div>
	</body>
</html>

```
**004-Rotaciones.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
		<style>
			#rojo{
				width:50px; height:50px; background:orangered; border:1px solid black;
				transform:rotate(45deg);	
			}
		</style>
	</head>
	<body>
		<div id="rojo"></div>
	</body>
</html>

```
**005-Transformación de escala.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
		<style>
			#rojo{
				width:50px; height:50px; background:orangered; border:1px solid black;
				transform:scale(2);	
			}
		</style>
	</head>
	<body>
		<div id="rojo"></div>
	</body>
</html>

```
**006-Multiples transformaciónes.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
		<style>
			#rojo{
				width:50px; height:50px; background:orangered; border:1px solid black;
				transform:translate(100px,100px) rotate(45deg) scale(1);	
			}
		</style>
	</head>
	<body>
		<div id="rojo"></div>
	</body>
</html>

```
**007-Evento tecla.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<script>
			document.onkeydown = function(tecla){
				switch(tecla.key){
					case "w":
						console.log("Movemos el personaje hacia arriba");
						break;
					case "s":
						console.log("Movemos el personaje hacia abajo");
						break;
					case "a":
						console.log("Movemos el personaje hacia la izquierda");
						break;
					case "d":
						console.log("Movemos el personaje hacia la derecha");
						break;
				}
			}
		</script>
	</body>
</html>

```
**008-Eventos de raton.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<script>
			document.onkeydown = function(tecla){
				switch(tecla.key){
					case "w":
						console.log("Movemos el personaje hacia arriba");
						break;
					case "s":
						console.log("Movemos el personaje hacia abajo");
						break;
					case "a":
						console.log("Movemos el personaje hacia la izquierda");
						break;
					case "d":
						console.log("Movemos el personaje hacia la derecha");
						break;
				}
			}
			document.onmousedown = function(){
				console.log("Disparamos");
			}
		</script>
	</body>
</html>

```
**009-Juntamos lo de antes.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
		<style>
			#rojo{
				width:50px; height:50px; background:orangered; border:1px solid black;
			}
		</style>
	</head>
	<body>
		<div id="rojo"></div>
		<script>
			// DEFINO CONDICIONES DE INICIO //
			let posx = 0;
			let posy = 0;
			document.onkeydown = function(tecla){
				switch(tecla.key){
					case "w":
						posy -= 10; // RESTAMOS 10 EN Y //
						console.log("Movemos el personaje hacia arriba");
						break;
					case "s":
						posy += 10; // SUMAMOS 10 EN Y //
						console.log("Movemos el personaje hacia abajo");
						break;
					case "a":
						posx -= 10; // RESTAMOS 10 EN X //
						console.log("Movemos el personaje hacia la izquierda");
						break;
					case "d":
						posx += 10; // SUMAMOS 10 EN X //
						console.log("Movemos el personaje hacia la derecha");
						break;
				}
				document.querySelector("#rojo").style.transform = "translate("+posx+"px,"+posy+"px)"
			}
			document.onmousedown = function(){
				console.log("Disparamos");
			}
		</script>
	</body>
</html>

```
**010-Trigonometria basica.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="rojo"></div>
		<script>
			let angulo = Math.PI/4;
			let coseno = Math.cos(angulo);
			let seno = Math.sin(angulo);
			console.log("El angulo es",angulo,"su coseno es",coseno," y su seno es",seno);
		</script>
	</body>
</html>

```
**011-Dibujar con canvas.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<canvas></canvas>
		<script>
			let lienzo = document.querySelector("canvas");		// ATRAPO EL CANVAS //
			lienzo.width = 512;									// LE PONGO ANCHURA //
			lienzo.height = 512;								// LE PONGO ALTURA //
			let contexto = lienzo.getContext("2d");				// VOY A DIBUJAR EN 2D //
			
			// AHORA VOY A DIBUJAR UN CIRCULO //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //
			// ARCO = xinicial, yinicial, radio, anguloinicial, angulofinal //
			contexto.arc(256,256,200,0,Math.PI*2)
			contexto.stroke();									// DIBUJO LA LINEA //
			
			// AHORA VOY A DIBUJAR UNA LINEA //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(0,256);								// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(512,256);							// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
		
			// AHORA VOY A DIBUJAR UNA LINEA VERTICAL //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(256,0);								// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(256,512);							// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
		</script>
	</body>
</html>

```
**012-Linea con angulo.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<canvas></canvas>
		<script>
			let lienzo = document.querySelector("canvas");		// ATRAPO EL CANVAS //
			lienzo.width = 512;									// LE PONGO ANCHURA //
			lienzo.height = 512;								// LE PONGO ALTURA //
			let contexto = lienzo.getContext("2d");				// VOY A DIBUJAR EN 2D //
			
			// AHORA VOY A DIBUJAR UN CIRCULO //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //
			// ARCO = xinicial, yinicial, radio, anguloinicial, angulofinal //
			contexto.arc(256,256,200,0,Math.PI*2)
			contexto.stroke();									// DIBUJO LA LINEA //
			
			// AHORA VOY A DIBUJAR UNA LINEA //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(0,256);								// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(512,256);							// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
		
			// AHORA VOY A DIBUJAR UNA LINEA VERTICAL //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(256,0);								// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(256,512);							// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
		
			let angulo = 1;
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(256,256);							// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(
				256+200*Math.cos(angulo),
				256+200*Math.sin(angulo)
			);													// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
		</script>
	</body>
</html>

```
**013-Varias lineas.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<canvas></canvas>
		<script>
			let lienzo = document.querySelector("canvas");		// ATRAPO EL CANVAS //
			lienzo.width = 512;									// LE PONGO ANCHURA //
			lienzo.height = 512;								// LE PONGO ALTURA //
			let contexto = lienzo.getContext("2d");				// VOY A DIBUJAR EN 2D //
			
			// AHORA VOY A DIBUJAR UN CIRCULO //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //
			// ARCO = xinicial, yinicial, radio, anguloinicial, angulofinal //
			contexto.arc(256,256,200,0,Math.PI*2)
			contexto.stroke();									// DIBUJO LA LINEA //
			
			// AHORA VOY A DIBUJAR UNA LINEA //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(0,256);								// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(512,256);							// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
		
			// AHORA VOY A DIBUJAR UNA LINEA VERTICAL //
			contexto.beginPath();								// EMPIEZO A DIBUJAR //		
			contexto.moveTo(256,0);								// MUEVO EL CURSOR SIN DIBUJAR //
			contexto.lineTo(256,512);							// MUEVO EL CURSOR YA DIBUJANDO //
			contexto.stroke()									// REALIZO EL TRAZO //
			for(let i = 0;i<Math.PI*2;i += 0.004){
				// AHORA VOY A DIBUJAR UNA LINEA CON ANGULO //
				let angulo = i;
				contexto.beginPath();							// EMPIEZO A DIBUJAR //		
				contexto.moveTo(256,256);						// MUEVO EL CURSOR SIN DIBUJAR //
				contexto.lineTo(
					256+200*Math.cos(angulo),
					256+200*Math.sin(angulo)
				);												// MUEVO EL CURSOR YA DIBUJANDO //
				contexto.stroke()								// REALIZO EL TRAZO //
			}
		</script>
	</body>
</html>

```
**014-Temporizador.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<script>
			function saludo(){
				document.write("yo te saludo");
			}
			setTimeout("saludo()",5000);
		</script>
	</body>
</html>

```
**015-Bucle.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<script>
			let temporizador = setTimeout("bucle()",1000);			// DENTRO DE 1SEG ENTRA EN EL BUCLE //
			function bucle(){
				console.log("hola");
				clearTimeout(temporizador);							// BORRO EL TEMPORIZADOR ANTERIOR //
				temporizador = setTimeout("bucle()",1000);			// LLAMADA RECURSIVA //
			}
		</script>
	</body>
</html>

```
**016-Fecha actual.html**
```html
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>[Titulo]</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<time></time>
		<script>
			let temporizador = setTimeout("bucle()",1000);			// DENTRO DE 1SEG ENTRA EN EL BUCLE //
			function bucle(){
				let fecha = new Date();
				let anio = fecha.getFullYear();
				let mes = fecha.getMonth()+1;
				let dia = fecha.getDay();
				let hora = fecha.getHours();
				let minuto = fecha.getMinutes();
				let segundo = fecha.getSeconds();
				document.querySelector("time").textContent = anio+"/"+mes+"/"+dia+" "+hora+":"+minuto+":"+segundo; 
				clearTimeout(temporizador);							// BORRO EL TEMPORIZADOR ANTERIOR //
				temporizador = setTimeout("bucle()",1000);			// LLAMADA RECURSIVA //
			}
		</script>
	</body>
</html>

```
**017-Reloj.html**
```html
<!doctype html>
<html>
	<head>	

	</head>
	<body>
		<canvas></canvas>
		<script>
			// Condiciones iniciales
			let temporizador = setTimeout("bucle()",1000);			// Dentro de un seg, entra en el bucle
			let lienzo = document.querySelector("canvas");
			lienzo.width = 512;										// Anchura del lienzo
			lienzo.height = 512;									// Altura del lienzo
			let contexto = lienzo.getContext("2d"); 				// Voy a dibujar en 2d

			// Condicion de bucle
			function bucle(){
				let fecha = new Date();								// Construyo una fecha

				let hora = fecha.getHours();						// Quiero saber la hora
				let minuto = fecha.getMinutes();					// Quiero saber el minuto
				let segundo = fecha.getSeconds();					// Quiero saber el segundo

				contexto.clearRect(0,0,512,512); 					// Borro el lienzo

				contexto.beginPath();								// Empiezo a dibujar
				contexto.arc(256,256,200,0,Math.PI*2) 				// Dibujo un circulo completo
				contexto.stroke(); 									// Y trazo linea

				// Ahora dibujo la manecilla de los segundos
				angulo_segundo = segundo*(Math.PI*2/60)				// Segundos a Radiales
				contexto.beginPath();								// Empiezo a dibujar
				contexto.moveTo(256,256)							// Muevo el cursor al centro del reloj
				contexto.lineTo(
					256+Math.cos(angulo_segundo)*200,
					256+Math.sin(angulo_segundo)*200
				)
				contexto.stroke();
			
				// Ahora dibujo la manecilla de los minutos
				angulo_minuto = minuto*(Math.PI*2/60)				// Segundos a Radiales
				contexto.beginPath();								// Empiezo a dibujar
				contexto.moveTo(256,256)							// Muevo el cursor al centro del reloj
				contexto.lineTo(
					256+Math.cos(angulo_minuto)*150,
					256+Math.sin(angulo_minuto)*150
				)
				contexto.stroke();
				
				// Ahora dibujo la manecilla de la hora
				angulo_hora = hora*(Math.PI*2/60)					// Segundos a Radiales
				contexto.beginPath();								// Empiezo a dibujar
				contexto.moveTo(256,256)							// Muevo el cursor al centro del reloj
				contexto.lineTo(
					256+Math.cos(angulo_hora)*100,
					256+Math.sin(angulo_hora)*100
				)
				contexto.stroke();
				
				clearTimeout(temporizador);							// Borro el temporizador anterior
				temporizador = setTimeout("bucle()",1000); 			// Llamada recursiva
			}
		</script>
	</body>
</html>

```
**018-Estilo.html**
```html
<!doctype html>
<html>
	<head>	

	</head>
	<body>
		<canvas></canvas>
		<script>
			// Condiciones iniciales
			let temporizador = setTimeout("bucle()",1000);	// Dentro de un seg, entra en el bucle
			let lienzo = document.querySelector("canvas");
			lienzo.width = 512;					// Anchura del lienzo
			lienzo.height = 512;				// Altura del lienzo
			let contexto = lienzo.getContext("2d"); // Voy a dibujar en 2d

			// Condicion de bucle
			function bucle(){
				let fecha = new Date();						// Construyo una fecha

				let hora = fecha.getHours();			// Quiero saber la hora
				let minuto = fecha.getMinutes();	// Quiero saber el minuto
				let segundo = fecha.getSeconds();	// Quiero saber el segundo

				contexto.clearRect(0,0,512,512); 	// Borro el lienzo


				// Ahora dibujo la manecilla de las horas
				contexto.lineWidth = 10;
				contexto.strokeStyle = "blue";
				angulo_hora = hora*(Math.PI*2/60)		// Segundos convertidos a radianes
				contexto.beginPath(); 			// Empiezo a dibujar
				contexto.moveTo(256,256);		// Muevo el cursor al centro del reloj
				contexto.lineTo(
				256+Math.cos(angulo_hora)*100,
				256+Math.sin(angulo_hora)*100
				)
				contexto.stroke();

				// Ahora dibujo la manecilla de los minutos
				contexto.lineWidth = 7;
				contexto.strokeStyle = "green";
				angulo_minuto = minuto*(Math.PI*2/60)		// Segundos convertidos a radianes
				contexto.beginPath(); 			// Empiezo a dibujar
				contexto.moveTo(256,256);		// Muevo el cursor al centro del reloj
				contexto.lineTo(
				256+Math.cos(angulo_minuto)*150,
				256+Math.sin(angulo_minuto)*150
				)
				contexto.stroke();

				// Ahora dibujo la manecilla de los segundos
				contexto.lineWidth = 2;
				contexto.strokeStyle = "red";
				angulo_segundo = segundo*(Math.PI*2/60)		// Segundos convertidos a radianes
				contexto.beginPath(); 			// Empiezo a dibujar
				contexto.moveTo(256,256);		// Muevo el cursor al centro del reloj
				contexto.lineTo(
				256+Math.cos(angulo_segundo)*200,
				256+Math.sin(angulo_segundo)*200
				)
				contexto.stroke();

				// Circulo central
				contexto.beginPath();
				contexto.arc(256,256,10,0,Math.PI*2)
				contexto.fill();

				contexto.lineWidth = 20;
				contexto.strokeStyle = "black";
				contexto.beginPath();				// Empiezo a dibujar
				contexto.arc(256,256,200,0,Math.PI*2) // Dibujo un circulo completo
				contexto.stroke(); 					// Y trazo linea

				clearTimeout(temporizador);			// Borro el temporizador anterior
				temporizador = setTimeout("bucle()",1000); // Llamada recursiva
			}
		</script>
	</body>
</html>
</html>

```
**019-Desface de 90 grados.html**
```html
<!doctype html>
<html>
	<head>	

	</head>
	<body>
		<canvas></canvas>
		<script>
			// Condiciones iniciales
			let temporizador = setTimeout("bucle()",1000);	// Dentro de un seg, entra en el bucle
			let lienzo = document.querySelector("canvas");
			lienzo.width = 512;					// Anchura del lienzo
			lienzo.height = 512;				// Altura del lienzo
			let contexto = lienzo.getContext("2d"); // Voy a dibujar en 2d

			// Condicion de bucle
			function bucle(){
				let fecha = new Date();						// Construyo una fecha

				let hora = fecha.getHours();			// Quiero saber la hora
				let minuto = fecha.getMinutes();	// Quiero saber el minuto
				let segundo = fecha.getSeconds();	// Quiero saber el segundo

				contexto.clearRect(0,0,512,512); 	// Borro el lienzo


				// Ahora dibujo la manecilla de las horas
				contexto.lineWidth = 10;
				contexto.strokeStyle = "blue";
				angulo_hora = hora*(Math.PI*2/12)-Math.PI/2		// Segundos convertidos a radianes
				contexto.beginPath(); 			// Empiezo a dibujar
				contexto.moveTo(256,256);		// Muevo el cursor al centro del reloj
				contexto.lineTo(
				256+Math.cos(angulo_hora)*100,
				256+Math.sin(angulo_hora)*100
				)
				contexto.stroke();

				// Ahora dibujo la manecilla de los minutos
				contexto.lineWidth = 7;
				contexto.strokeStyle = "green";
				angulo_minuto = minuto*(Math.PI*2/60)-Math.PI/2		// Segundos convertidos a radianes
				contexto.beginPath(); 			// Empiezo a dibujar
				contexto.moveTo(256,256);		// Muevo el cursor al centro del reloj
				contexto.lineTo(
				256+Math.cos(angulo_minuto)*150,
				256+Math.sin(angulo_minuto)*150
				)
				contexto.stroke();

				// Ahora dibujo la manecilla de los segundos
				contexto.lineWidth = 2;
				contexto.strokeStyle = "red";
				angulo_segundo = segundo*(Math.PI*2/60)-Math.PI/2		// Segundos convertidos a radianes
				contexto.beginPath(); 			// Empiezo a dibujar
				contexto.moveTo(256,256);		// Muevo el cursor al centro del reloj
				contexto.lineTo(
				256+Math.cos(angulo_segundo)*200,
				256+Math.sin(angulo_segundo)*200
				)
				contexto.stroke();

				// Circulo central
				contexto.beginPath();
				contexto.arc(256,256,10,0,Math.PI*2)
				contexto.fill();

				contexto.lineWidth = 20;
				contexto.strokeStyle = "black";
				contexto.beginPath();				// Empiezo a dibujar
				contexto.arc(256,256,200,0,Math.PI*2) // Dibujo un circulo completo
				contexto.stroke(); 					// Y trazo linea

				clearTimeout(temporizador);			// Borro el temporizador anterior
				temporizador = setTimeout("bucle()",1000); // Llamada recursiva
			}
		</script>
	</body>
</html>
</html>

```
#### 005-Interfaces
**001-Resquests.py**
```python
# pip3 install requests --break-system-packages

import requests


```
**002-Primera petición.py**
```python
# pip3 install requests --break-system-packages

import requests

url = "https://jocarsa.com"

try:
	response = requests.get(url, timeout=10)

	print("Status code:", response.status_code)
	print("Final URL:", response.url)
	print("Headers:", response.headers)
	print("First 500 characters of body:\n")
	print(response.text[:500])

except requests.exceptions.RequestException as e:
	print("Request failed:", e)
	

```
**003-Encontramos elementos html .py**
```python
# pip3 install requests --break-system-packages

import requests
from lxml import html

url = "https://jocarsa.com"

response = requests.get(url, timeout=10)
response.raise_for_status()  # raises exception if not 200

# Parse HTML
tree = html.fromstring(response.content)

# Find all <h1> elements
h1_elements = tree.xpath("//h1")

# Print their text content
for i, h1 in enumerate(h1_elements, start=1):
	text = h1.text_content().strip()
	print(f"H1 #{i}: {text}")

```
**004-Lista  de webs.py**
```python
# pip3 install requests --break-system-packages

import requests
from lxml import html

urls = [
	"https://jocarsa.com",
	"https://josevicentecarratala.com"
]

for url in urls:
	print("########################")
	response = requests.get(url, timeout=10)
	response.raise_for_status()  # raises exception if not 200

	# Parse HTML
	tree = html.fromstring(response.content)

	# Find all <h1> elements
	h1_elements = tree.xpath("//h1")

	# Print their text content
	for i, h1 in enumerate(h1_elements, start=1):
		text = h1.text_content().strip()
		print(f"H1 #{i}: {text}")

```
**005-Libreria pillow.py**
```python
from PIL import Image

imagen = Image.open("jocarsa.png")

pixel1 = imagen.getpixel((0, 0))

print(pixel1)


```
**006-Tamaño de imagen.py**
```python
from PIL import Image

imagen = Image.open("jocarsa.png")

tamanio = imagen.size
print(tamanio)

pixel1 = imagen.getpixel((0, 0))

print(pixel1)


```
**007-Leer todos los pixeles de la img.py**
```python
from PIL import Image

imagen = Image.open("jocarsa.png")

anchura,altura = imagen.size					## COJO ALTURA Y ANCHURA

for x in range(0,anchura):						## REPASO LA ANCHURA
	for y in range(0,altura):					## REPASO LA ALTURA
		pixel = imagen.getpixel((x,y))			## COJO CADA PIXEL
		print(pixel)							## LO SACO POR PANTALLA


```
**008-Aclarar la imagen.py**
```python
from PIL import Image

imagen = Image.open("jocarsa.png")

anchura,altura = imagen.size					## COJO ALTURA Y ANCHURA

for x in range(0,anchura):						## REPASO LA ANCHURA
	for y in range(0,altura):					## REPASO LA ALTURA
		pixel = imagen.getpixel((x,y))			## COJO CADA PIXEL
## PRIMERO LEO LOS COMPONENTES DE COLOR ##
		rojo = pixel[0]
		verde = pixel[1]
		azul = pixel[2]	
## AHORA LE SUBO EL TONO DE COLOR (ACLARO) ##
		rojo += 120
		verde += 120
		azul += 120		
## Y SOBREESCRIBO EL COLOR ##
		imagen.putpixel((x, y), (rojo, verde, azul)) # ESTO ES CORRECTO
    
imagen.save("modificado.png")	


```
**009-Negativo.py**
```python
from PIL import Image

imagen = Image.open("jocarsa.png")

anchura,altura = imagen.size					## COJO ALTURA Y ANCHURA

for x in range(0,anchura):						## REPASO LA ANCHURA
	for y in range(0,altura):					## REPASO LA ALTURA
		pixel = imagen.getpixel((x,y))			## COJO CADA PIXEL
## PRIMERO LEO LOS COMPONENTES DE COLOR ##
		rojo = pixel[0]
		verde = pixel[1]
		azul = pixel[2]	
## AHORA LE SUBO EL TONO DE COLOR (ACLARO) ##
		rojo = 255 - rojo
		verde = 255 - verde
		azul = 255 - azul	
## Y SOBREESCRIBO EL COLOR ##
		imagen.putpixel((x, y), (rojo, verde, azul)) # ESTO ES CORRECTO
    
imagen.save("modificado1.png")	


```
**010-Repaso recorrer arrays.php**
```php
<?php

	$frutas = [
		"manzana",
		"pera",
		"banana",
		"sandia"
	];
	
	for($i = 0;i<count($frutas);$i++){
		echo $frutas[$i]."<br>";
	}

?>

```
**011-Foreach en array.php**
```php
<?php

	$frutas = [
		"manzana",
		"pera",
		"banana",
		"sandia"
	];
	
	foreach($frutas as $fruta){
		echo $fruta."<br";
	}

	// Ventajas del foreach: Es mas limpio
	// Desventajas del foreach: En principio no está el índice
?>

```
**012-Repasamos cliente.php**
```php
<?php

	$campos_cliente = [
		"nombre",
		"apellidos",
		"email",
		"telefono"
	];
	
	foreach($campos_cliente as $campo){
		echo $campo."<br>";
	}

?>

```
**013-Construyo formulario.php**
```php
<?php

	$campos_cliente = [
		"nombre",
		"apellidos",
		"email",
		"telefono",
		"direccion",
		"poblacion"
	];
	
	foreach($campos_cliente as $campo){
		echo '<input type="text" placeholder="'.$campo.'"><br>';
	}

?>

```
**014-Array nombrado.php**
```php
<?php

	$cliente = [
		"nombre" => "Valentín",
		"apellidos" => "De Gennaro",
		"email" => "info@valentindg.com"
	];

	var_dump($cliente);


?>

```
**015-Foreach en objeto.php**
```php
<?php

	$cliente = [
		"nombre" => "Valentín",
		"apellidos" => "De Gennaro",
		"email" => "info@valentindg.com"
	];

	foreach($cliente as $clave=>$valor){
		echo $clave. ": ".$valor."<br>";
	}


?>

```
**016-Formulario con  objeto.php**
```php
<?php

	$cliente = [
		"nombre" => "Valentín",
		"apellidos" => "De Gennaro",
		"email" => "info@valentindg.com"
	];

	foreach($cliente as $clave=>$valor){
		echo "<label>".$clave."<label>";    					## LEGEND(escalonado) LABEL(horizontal)
		echo "<input type='text' value='".$valor."'>";
	}


?>

```
### 010-Programción en el lado del servidor
#### 001-Fundamentos
**001-Preparatoria.md**
```markdown
PHP es un lenguaje del lado del servidor
Requiere que tengamos un servidor preparado

---

Formas faciles de preparar un servidor:
- En Linux(la buena):
	- Terminal:
		- sudo apt install apache2 (instalar apache)
		- sudo apt install php (instalar php sobre apache)
		- sudo chdmod 777 -R /var/www/html (para dar permisos a la carpeta)
		
		- Y a partir de ese momento:
			1.-Todos los archivos se meten dentro de /var/www/html
			2.-En el navegador ponemos http://localhost/....


- En Windows (la forma mala):
	- Descargamos XAMPP: https://www.apachefriends.org/es/index.html
	- Instalamos XAMPP
	- En el panel de control de XAMPP arrancamos de momento solo apache
	
	- Y a partir de ese momento:
		1.-Todos los archivos se meten dentro de C:/xampp/htdocs
		2.-En el navegador ponemos http://localhost/....

```
**002-Cuota de mercado.md**
```markdown
- Python es actualmente el lenguaje de programación general más utilizado.
- https://www.tiobe.com/tiobe-index/

- Resumen: Python es guay

- En los servidores web:
	- PHP reina desde los años 90.
	- Todo el mundo despotrica.
	- Todo el mundo lo quiere matar.
	- Todo el mundo dice que es una mierda.
	-https://w3techs.com/technologies/overview/programming_language

## PHP = Personal Home Page

- Sintaxis:
	- Los archivos que contienen PHP, tienen que tener la extensión .php





```
**003-Html en PHP.php**
```php
Un archivo PHP puede tener HTML
<p>No, en serio, puede realmente tener HTML </p>
<p>Un archivo PHP no te obliga a poner PHP </p>

Este archivo debe estar:
	- Linux: /var/www/html/(carpeta que querais)
	- Windows: C:/xampp/htdocs/(carpeta que queráis)

- Y luego en el navegador:
	- http://localhost/(carpeta que queráis)

```
**004-Probamos PHP.php**
```php
Esto no es PHP

<?php
	echo "Esto si es PHP";
?>

Esto ya no es PHP 

```
**005-Que pasa con el repositorio.md**
```markdown
Todos estáis queriendo meter vuestro repositorio 
en la carpeta de publicación

Eso me parece muy bien

No debéis mover la carpeta de GitHub, porque a GitHub no le gustará
Deberíais romper el clon, y volver a clonar de nuevo en la carpeta de publicación

Eso es deseable a largo plazo, pero no ahora mismo

De momento hoy:
Trabajad en la carpeta de apache
Al final de la clase copiais el contenido a vuestra carpeta real

Y estos proximos dias, lo hacemos "bien"

```
**006-Comentarios en PHP.php**
```php
<?php
	echo "Hola mundo en PHP"; 
  // echo en PHP es como print en Python
  // Esto es un comentario de una única línea
  
  /*
  	Esto es una linea de comentario
  	Esto tambien es una linea de comentario
  */
  
?>

```
**007-Operadores.php**
```php
<?php
	echo 4+3; 
	echo 4-3; 
	echo 4*3; 
	echo 4/3; 
	echo 4%3; 
?>

```
**008-Romper linea.php**
```php
Esto es HTML y la forma de romper linea es <br>
<?php
	echo "Esto es PHP<br>";
?>
Esto vuelve a ser HTML <br>


```
**009-Operadores de comparación.php**
```php
<?php
	echo 4<3;
 	echo 4<=3;
 	echo 4>3;
  	echo 4>=3;
 	echo 4==3;
  	echo 4!=3;
?>

```
**010-Operadores booleanos.php**
```php
<?php
	echo 4 == 4 && 3 == 3 && 2 == 2; // Verdadero
 	echo 4 == 4 && 3 == 3 && 2 == 1; // Falso
  
  	echo 4 == 4 || 3 == 3 || 2 == 2; // Verdadero
  	echo 4 == 4 || 3 == 3 || 2 == 1; // Verdadero
  	echo 4 == 4 || 3 == 2 || 2 == 1; // Verdadero
  	echo 4 == 3 || 3 == 2 || 2 == 1; // Falso
?>

```
**011-Variables.php**
```php
<?php
	$edad = 47; // Las variables se declaran con dolar
	echo $edad; // Podemos hacer echo de variables
	echo "<br>"; // Salto de linea
	$edad = 48; // Podemos cambiar el valor de una variable
	echo $edad;
?>

```
**012-Estructura for y calendario.php**
```php
<!Doctype html>
<html>
	<head>
		<style>
			.dia{
				border:1px solid black;
				padding:10px;
				width:50px;
				height:50px;
				display:inline-block;
			}
		</style> 
	</head>
	<body>
		<?php
			// El signo de encadenamiento es el . (Y eso es superguay)

			for($dia = 1;$dia < 31;$dia++){
				echo "<div class = 'dia'>".$dia."</div>";
			}
		?>
	</body>
</html>


```
**013-if.php**
```php
<?php

	$edad = 47;
  if($edad < 30){
  	echo "Eres un joven";
  }
  
?>

```
**014-else.php**
```php
<?php

	$edad = 47;
  if($edad < 30){
  	echo "Eres un joven";
  }else{
  	echo "Ya no eres un joven";
  }
  
?>

```
**015-else if.php**
```php
<?php

	$edad = 47;
  
  if($edad < 10){
  	echo "Eres un niño";
  }else if($edad >= 10 && $edad < 20){
  	echo "Eres un adolescente";
  }else if($edad >= 20 && $edad < 30){
  	echo "Eres un joven";
  }else{
  	echo "Ya no eres joven";
  }
  
?>

```
**016-Switch.php**
```php
<?php
	$dia_de_la_semana = "martes";
	switch($dia_de_la_semana){
		case "lunes":
			echo "hoy es el peor dia de la semana";
			break; 
		case "martes":
			echo "hoy es el segundo peor dia de la semana";
			break; 
		case "miercoles":
			echo "hoy ya estamos a mitad de la semana";
			break; 
		case "jueves":
			echo "ya casi es viernes";
			break; 
		case "viernes":
			echo "por fin es viernes";
			break; 
		case "sabado":
			echo "Este es el mejor dia de la semana";
			break; 
		case "domingo":
			echo "Parece mentira que mañana ya sea lunes";
			break; 
	}
?>

```
**017-Arrays.php**
```php
<?php
	$frutas = ['manzana','pera','banana'];
	
	var_dump($frutas);
?>


```
**018-Arrays multidimensionales.php**
```php
<?php
	$agenda = [
		["Valentín","De Gennaro",21],
		["Quepe","Pino",58],
		["Pablo","Pocahontas",15]
	];
	
	var_dump($agenda)
?>


```
**019-Declarar una función.php**
```php
<?php
	function diHola(){
		echo "Hola como estas?";
	}
?>


```
**020-Usar la funcion.php**
```php
<?php
	function diHola(){
		echo "Hola como estas?";
	}
	
	diHola();
?>


```
**021-Funciones con parametros.php**
```php
<?php
	function diHola($nombre){
		echo "Hola, ".$nombre." como estas?";
	}
	
	diHola("Valentín");
?>


```
**022-Varios parametros.php**
```php
<?php
	function diHola($nombre,$edad){
		echo "Hola, ".$nombre." tienes ".$edad." años, como estas?";
	}
	
	diHola("Valentín",21);
?>


```
**023-Return en la función.php**
```php
<?php
	function diHola($nombre,$edad){
		return "Hola, ".$nombre." tienes ".$edad." años. ¿C	omo estas?";
	}
	
	echo diHola("Valentín",21);
?>


```
**024-Vamos con los gatos.php**
```php
<?php
	class Perro{
		function __construct($nombre,$color,$edad){
			$this->nombre = $nombre;
			$this->color = $color;
			$this->edad = $edad;
		}
	}
	
	$perro1 = new Perro("Toto","Marron",7);
  	$perro2 = new Perro("Coco","Negro",9);
	
	var_dump($perro1);
	var_dump($perro2);
	
?>


```
#### 002-Get y post
**001-Repaso de los verbos.md**
```markdown
Los verbos http son:
	- GET (Dame) "SELECT"
	- POST (Toma) "INSERT"
	- PUT (Modificamos) "UPDATE"
	- DELETE (Eliminamos) "DELETE"
	
	- PATCH (Tambien modificamos) "UPDATE"

```
**002-Get PHP.php**
```php
<?php
	// ESPERA QUE EN LA URL HAYA UN PARAMETRO LLAMADO NOMBRE
	echo $_GET['nombre'];
?>


```
**003-Formulación de url.md**
```markdown
A una URL se le pueden pasar parametros:
	- sript.php?parametro1=valor1&parametro2=valor2&...
	
	-script.php = Es el script principal.
	- ? = A partir de aquie empiezan los parametros.
	- clave=valor = clave es la clave del parámetro, valor es el valor del parámetro.
	- & = espera que te paso más.

```
**004-Dos parametros get.php**
```php
<?php
	echo $_GET['nombre'];
	echo "<br>";
	echo $_GET['apellidos'];
?>

```
**005-Formulario.html**
```html
<form action="006-Post.php" method="POST">
	<p>Introduce tu nombre</p>
	<input type="text" name="nombre">
	<input type="submit">
</form>

- 006-Post.php = quien te procesa
- POST = como se va a enviar y recibir la informacion
- name="nombre" = la clave que se va a enviar

```
**006-Post.php**
```php
<?php
	echo $_POST['nombre'];
?>

- $_POST porque me envían la información por POST
- Y la tengo que recoger por la misma vía
- 'nombre' porque es la clave que se ha enviado desde HTML

```
**007-Autoprocesamiento.php**
```php
<?php
	echo $_POST['nombre'];
?>

<form action="?" method="POST">
	<p>Introduce tu nombre</p>
	<input type="text" name="nombre">
	<input type="submit">
</form>

```
**008-php.ini.md**
```markdown
php.ini en Windows:
- C:/xampp/php/php.ini

php.ini en Ubuntu:
- /etc/php/8.3/apache2/

Si no os deja modificar con gedit
	- sudo nano /etc/php/8.3/apache2/php.ini
	
Comandos:
(Parece que si que deja hacer scroll)
- Control + W = Buscar (where)
- Control + O = Guardar
- Control + X = Salir
- Tenéis la ayuda bajo del editor

## display_errors = On (cambiad de Off a On)

Cuando se toca el php.ini hay que reiniciar apache

- sudo service apache2 restart
   (para aplicar los cambios)


```
**009-Comprobación.php**
```php
<?php
	esto da error si o si
?>

```
**010-Retomamos.php**
```php
<?php
	echo $_POST['nombre'];
?>

<form action="?" method="POST">
  <p>Introduce tu nombre</p>
  <input type="text" name="nombre">
  <input type="submit">
</form>

```
**011-Comprobación de existencia.php**
```php
<?php
	// COMPROBACIÓN DE EXISTENCIA ISSET
	if(isset($_POST['nombre'])){
		echo $_POST['nombre'];
  }
?>

<form action="?" method="POST">
  <p>Introduce tu nombre</p>
  <input type="text" name="nombre">
  <input type="submit">
</form>

```
**012-Preguntas y respuestas.php**
```php
<!DOCTYPE html>
<html>
	<head>
		<style>
			body,html{
				width:100%;
				height:100%;
				padding:0px;
				margin:0px;
			}
			body{
				display:flex;
				align-items:center;
				justify.content:center;
				background:orangered;
				flex-direction:column;
			}
			header,footer,main{
				width:400px;
				padding:20px;
				background:white;
				text-align:center;
			}
			form{
				display:flex;
				flex-direction:column;
				gap:10px;
			}
			input{
				padding:10px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Preguntas y Respuestas</h1>
		</header>
		<main>
			<form>
				<label for="pregunta">Introduce la pregunta</label>
				<input type="text" name="pregunta" id="pregunta">
				<label for="respuesta">Introduce la respuesta</label>
				<input type="text" name="respuesta" id="respuesta">
				<input type="submit">
			</form>
		</main>
		<footer>
			(c) 2025 Valentín de Gennaro
		</footer>
	</body>
</html>

```
**013-Atrapamos la información.php**
```php
<!DOCTYPE html>
<html>
	<head>
		<style>
			body,html{
				width:100%;
				height:100%;
				padding:0px;
				margin:0px;
			}
			body{
				display:flex;
				align-items:center;
				justify.content:center;
				background:orangered;
				flex-direction:column;
			}
			header,footer,main{
				width:400px;
				padding:20px;
				background:white;
				text-align:center;
			}
			form{
				display:flex;
				flex-direction:column;
				gap:10px;
			}
			input{
				padding:10px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Preguntas y Respuestas</h1>
		</header>
		<main>
			<form>
				<label for="pregunta">Introduce la pregunta</label>
				<input type="text" name="pregunta" id="pregunta">
				<label for="respuesta">Introduce la respuesta</label>
				<input type="text" name="respuesta" id="respuesta">
				<input type="submit">
			</form>
		</main>
		<footer>
			(c) 2025 Valentín de Gennaro
			<?php
				echo $_POST['pregunta'];
				echo "<br>";
				echo $_POST['respuesta'];
			?>
		</footer>
	</body>
</html>

```
**014-Isset.php**
```php
<!DOCTYPE html>
<html>
	<head>
		<style>
			body,html{
				width:100%;
				height:100%;
				padding:0px;
				margin:0px;
			}
			body{
				display:flex;
				align-items:center;
				justify.content:center;
				background:orangered;
				flex-direction:column;
			}
			header,footer,main{
				width:400px;
				padding:20px;
				background:white;
				text-align:center;
			}
			form{
				display:flex;
				flex-direction:column;
				gap:10px;
			}
			input{
				padding:10px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Preguntas y Respuestas</h1>
		</header>
		<main>
			<form>
				<label for="pregunta">Introduce la pregunta</label>
				<input type="text" name="pregunta" id="pregunta">
				<label for="respuesta">Introduce la respuesta</label>
				<input type="text" name="respuesta" id="respuesta">
				<input type="submit">
			</form>
		</main>
		<footer>
			(c) 2025 Valentín de Gennaro
			<?php
				if(isset($_POST['pregunta']) && isset($_POST['respuesta'])){
					echo $_POST['pregunta'];
					echo "<br>";
					echo $_POST['respuesta'];
				}
			?>
		</footer>
	</body>
</html>

```
#### 003-Persistencia
**002-Voy a hacer una barbaridad.md**
```markdown
Terminal:
	- sudo chmod 777 -R /var/www/html/GitHub/Programacion-DAM-25-26

- sudo = Realizo acción como administrador

- chmod = cambio permisos

- 777 = le doy permiso a todo el mundo

- -R = Lo quiero aplicar recursivo (a todo el contenido)

- /var/www.... = la carpeta afectada

---

En el sistema de permisos UNIX (Linux,macOS):
	- 1 numero para el usuario
	- 1 numero para el grupo al que pertenece el usuario
	- 1 numero para todo el resto


	- 0 - ningún permiso
	- 1 = solo ejectar
	- 2 = solo escribir
	- 3 = escribir y ejecutar
	- 4 = solo leer
	- 5 = leer y ejecutar
	- 6 = leer y escribir
	- 7 = leer, escribir y ejecutar

	- 777 = permisible en tu maquina, no recomendable en produccion
		- usuario leer, escribir y ejecutar
		- grupo leer, escribir y ejecutar
		- todo el mundo leer, escribir y ejecutar

	- 755 = posible para produccion
		- usuario leer, escribir y ejecutar
		- grupo leer y ejecutar
		- todo el mundo leer y ejecutar

	- 644 = mas restrictivo para produccion
		- usuario leer y escribir
		- grupo solo leer
		- todo el mundo solo leer

```
**003-Leer php.php**
```php
<?php
  $archivo = fopen("archivo.txt", "r"); // "r" = leer/read
  
  // Parámetros 1.-Lo que lees 2.-Longitud de lo que lees
  $contenido = fread($archivo,filesize("archivo.txt"));
  
  echo $contenido;
  fclose($archivo);
?>

```
**004-Array nombrado en php.php**
```php
<?php
  $cliente = [];
  $cliente['nombre'] = "Valentín";
  $cliente['apellidos'] = "De Gennaro";
  $cliente['email'] = "info@valentindg.com";
  
  var_dump($cliente);
?>

```
**005-Saco el array como json.php**
```php
<<?php
  $cliente = [];
  $cliente['nombre'] = "Jose Vicente";
  $cliente['apellidos'] = "Carratala Sanchis";
  $cliente['email'] = "info@jocarsa.com";
  
  $json = json_encode($cliente);
  echo $json;  
?>

```
**006-Isset.php**
```php
<!DOCTYPE html>
<html>
	<head>
		<style>
			body,html{
				width:100%;
				height:100%;
				padding:0px;
				margin:0px;
			}
			body{
				display:flex;
				align-items:center;
				justify.content:center;
				background:orangered;
				flex-direction:column;
			}
			header,footer,main{
				width:400px;
				padding:20px;
				background:white;
				text-align:center;
			}
			form{
				display:flex;
				flex-direction:column;
				gap:10px;
			}
			input{
				padding:10px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Preguntas y Respuestas</h1>
		</header>
		<main>
			<form>
				<form action="?" method="POST">
				<label for="pregunta">Introduce la pregunta</label>
				<input type="text" name="pregunta" id="pregunta">
				<label for="respuesta">Introduce la respuesta</label>
				<input type="text" name="respuesta" id="respuesta">
				<input type="submit">
			</form>
		</main>
		<footer>
			(c) 2025 Valentín de Gennaro
			<?php
				$json = json_encode($_POST);
				echo $json;
			?>
		</footer>
	</body>
</html>

```
**007-Y lo guardamos en el disco.php**
```php
<!DOCTYPE html>
<html>
	<head>
		<style>
			body,html{
				width:100%;
				height:100%;
				padding:0px;
				margin:0px;
			}
			body{
				display:flex;
				align-items:center;
				justify.content:center;
				background:orangered;
				flex-direction:column;
			}
			header,footer,main{
				width:400px;
				padding:20px;
				background:white;
				text-align:center;
			}
			form{
				display:flex;
				flex-direction:column;
				gap:10px;
			}
			input{
				padding:10px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Preguntas y Respuestas</h1>
		</header>
		<main>
			<form>
				<form action="?" method="POST">
				<label for="pregunta">Introduce la pregunta</label>
				<input type="text" name="pregunta" id="pregunta">
				<label for="respuesta">Introduce la respuesta</label>
				<input type="text" name="respuesta" id="respuesta">
				<input type="submit">
			</form>
		</main>
		<footer>
			(c) 2025 Valentín de Gennaro
		  <?php
		  	if(isset($_POST['respuesta'])){
			  $json = json_encode($_POST); 									// Convierte post a JSON
			  $archivo = fopen(date('U').".json",'w');						// Abre un arhivo
			  fwrite($archivo,$json);										// Guarda el json
			  fclose($archivo);												// Cierra el archivo
			}
		  ?>
		</footer>
	</body>
</html>

```
#### 004-Proyecto ANA
**001-Analisis de tecnologias.md**
```markdown
- Necesitamos:
	- HTML
	- CSS
	- JS
	- PHP

- Necesitamos PHP - GitHub pages descartado

- Solución?

- Contratación de un alojamiento (hosting) que tenga soporte para:
	- HTML
	- CSS
	- JS
	- PHP

Ejemplo: hostinger
Via Render - Servicio en la nube que os de soporte

```
**002-Front.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body>
        <header>

        </header>
        <main>
            <div id="terminal" contenteditable=true>
            </div>
        </main>
        <footer>
            
        </footer>
    </body>
</html>
```
**003-Estilizamos un poco.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            #editor{
                font-family:monospace;
                background:lightgray;color:black;padding:20px;
                width:800px;
                height:500px;margin:auto;
                margin-bottom:10px;
            }
            #terminal{
                font-family:monospace;
                background:black;color:white;padding:20px;
                width:800px;
                height:100px;margin:auto;
            }
            .ventana{
                border:1px solid grey;
                border-top:30px solid grey;
                border-radius:5px;
                box-shadow:0px 5px 10px rgba(0,0,0,0.3);
            }
            button{
                margin:auto;
                background:green;
                color:white;
                padding:10px;
                border-radius:5px;
                border:none;
                margin:auto;
                margin-bottom:10px;
                display:block;
            }
    </style>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div id="editor" contenteditable=true class="ventana"></div>
            <button>Compilar</button>
            <div id="terminal" contenteditable="true" class="ventana"></div>
        </main>
        <footer>
            
        </footer>
    </body>
</html>
```
**004-JS.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            #editor{
                font-family:monospace;
                background:lightgray;color:black;padding:20px;
                width:800px;
                height:500px;margin:auto;
                margin-bottom:10px;
            }
            #terminal{
                font-family:monospace;
                background:black;color:white;padding:20px;
                width:800px;
                height:100px;margin:auto;
            }
            .ventana{
                border:1px solid grey;
                border-top:30px solid grey;
                border-radius:5px;
                box-shadow:0px 5px 10px rgba(0,0,0,0.3);
            }
            button{
                margin:auto;
                background:green;
                color:white;
                padding:10px;
                border-radius:5px;
                border:none;
                margin:auto;
                margin-bottom:10px;
                display:block;
            }
    </style>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div id="editor" contenteditable=true class="ventana"></div>
            <button>Compilar</button>
            <div id="terminal" contenteditable="true" class="ventana"></div>
        </main>
        <footer>
            <script>
                let boton = document.querySelector("button")
                boton.onclick = function(){
                    console.log("Vamos a enviar algo al servidor")
                    let codigo = document.querySelector("#editor").textContent
                    console.log(codigo)
                }
            </script>
        </footer>
    </body>
</html>
```
**005-flask.py**
```python
from flask import Flask, render_template 

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("frente.html")

if __name__ == "__main__":
	app.run(debug=True)

```
**006-Nuevo endpoint.py**
```python
from flask import Flask, render_template 

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("frente.html")

@app.route("/api")
def api():
	print("He recibido algo")
	return "ok"

if __name__ == "__main__":
  app.run(debug=True)

```
**007-Estamos obligados a metodo.py**
```python
from flask import Flask, render_template, request
import io
import contextlib


app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("frente.html")

@app.route("/api", methods=['POST'])
def api():
	codigo = request.data.decode("utf-8")

	buffer = io.StringIO()
	try:
        # Ejecuta el código y captura todo lo que se imprima
		with contextlib.redirect_stdout(buffer):
			exec(codigo, {})   # entorno global vacío (peligroso igualmente si no controlas el código)
	except Exception as e:
		return str(e), 400

	salida = buffer.getvalue()
	# Si no ha habido nada por pantalla, puedes devolver algo por defecto
	return salida if salida else "OK"

if __name__ == "__main__":
	app.run(debug=True)

```
**008-Soporte multilinea.py**
```python
from flask import Flask, render_template, request
import io
import contextlib

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("frente.html")

@app.route("/api", methods=['POST'])
def api():
	codigo = request.data.decode("utf-8")

	buffer = io.StringIO()
	try:
        # Ejecuta el código y captura todo lo que se imprima
		with contextlib.redirect_stdout(buffer):
			exec(codigo, {})
	except Exception as e:
        # devolvemos el error como texto y código 400
		return str(e), 400

	salida = buffer.getvalue()
	return salida if salida else "OK"

if __name__ == "__main__":
	app.run(debug=True)

```
**009-Ampliaciones.py**
```python
from flask import Flask, render_template, request
import io
import contextlib
import traceback

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("frente.html")

@app.route("/api", methods=['POST'])
def api():
	data = request.get_json(force=True)
	codigo = data.get("code", "")
	entradas = data.get("inputs", "")

    # Preparamos las líneas de entrada para input()
	input_lines = iter(entradas.splitlines())

	buffer = io.StringIO()

	def custom_input(prompt=""):
        # Mostrar el prompt en la salida
		print(prompt, end="", file=buffer)
		try:
			linea = next(input_lines)
            # Mostrar lo que "escribe" el usuario en la misma terminal
			print(linea, file=buffer)
			return linea
		except StopIteration:
            # No quedan más líneas de entrada
			print("\n[AVISO] No quedan más líneas de entrada (stdin). Se devuelve cadena vacía.", file=buffer)
			return ""

	# Entorno de ejecución
	global_env = {
		"__name__": "__main__",
		"input": custom_input,
	}

	try:
		with contextlib.redirect_stdout(buffer):
			with contextlib.redirect_stderr(buffer):
				exec(codigo, global_env)
	except Exception:
		error_text = traceback.format_exc()
		return error_text, 400

	salida = buffer.getvalue()
	return salida if salida else "OK"

if __name__ == "__main__":
	app.run(debug=True)

```
##### templates
**frente.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            #editor{
                font-family:monospace;
                background:lightgray;color:black;padding:20px;
                width:800px;
                height:500px;margin:auto;
                margin-bottom:10px;
            }
            #terminal{
                font-family:monospace;
                background:black;color:white;padding:20px;
                width:800px;
                height:100px;margin:auto;
            }
            .ventana{
                border:1px solid grey;
                border-top:30px solid grey;
                border-radius:5px;
                box-shadow:0px 5px 10px rgba(0,0,0,0.3);
            }
            button{
                margin:auto;
                background:green;
                color:white;
                padding:10px;
                border-radius:5px;
                border:none;
                margin:auto;
                margin-bottom:10px;
                display:block;
            }
    </style>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div id="editor" contenteditable=true class="ventana"></div>
            <button>Compilar</button>
            <div id="terminal" contenteditable="true" class="ventana"></div>
        </main>
        <footer>
            <script>
                let boton = document.querySelector("button")
                boton.onclick = function(){
                    console.log("Vamos a enviar algo al servidor")
                    let codigo = document.querySelector("#editor").textContent
                    console.log(codigo)
                    // Al servidor le paso el código apuntando a /api
                    fetch("/api", {
						method: "POST",
						headers: {
						    "Content-Type": "text/plain"
						},
						body: codigo
					})
					.then(response => response.text())
					.then(function(datos){
                        // Esto lo imprime en la consola (debug)
                        console.log(datos)
                        // Esto lo imprime en la terminal
                        document.querySelector("terminal").textContent = datos  
                    })
                }
            </script>
        </footer>
    </body>
</html>

```
**frenteampliado.html**
```html
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>compilador.jocarsa.com</title>
    <style>
      :root {
        --bg: #f3f4f6;
        --panel: #ffffff;
        --border: #d4d4d8;
        --border-soft: #e4e4e7;
        --accent: #16a34a;
        --accent-soft: rgba(22, 163, 74, 0.1);
        --text: #111827;
        --text-muted: #6b7280;
        --terminal-bg: #111827;
        --terminal-text: #e5e7eb;
      }

      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        min-height: 100vh;
        font-family: system-ui, -apple-system, BlinkMacSystemFont,
          "Segoe UI", sans-serif;
        background: radial-gradient(circle at top, #e5e7eb 0, #f9fafb 55%);
        color: var(--text);
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .app {
        width: 100%;
        max-width: 1100px;
        padding: 24px;
      }

      .app-shell {
        background: var(--panel);
        border-radius: 18px;
        border: 1px solid var(--border);
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
        padding: 20px 22px 18px;
      }

      header {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        margin-bottom: 18px;
      }

      h1 {
        font-size: 20px;
        margin: 0;
        font-weight: 600;
        letter-spacing: 0.03em;
      }

      .subtitle {
        font-size: 12px;
        color: var(--text-muted);
      }

      .brand-pill {
        font-size: 11px;
        padding: 4px 10px;
        border-radius: 999px;
        background: var(--accent-soft);
        color: var(--accent);
        border: 1px solid rgba(22, 163, 74, 0.25);
      }

      .layout {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 16px;
        margin-bottom: 14px;
      }

      .panel {
        background: #ffffff;
        border-radius: 14px;
        border: 1px solid var(--border-soft);
        display: flex;
        flex-direction: column;
        min-height: 260px;
      }

      .panel-header {
        padding: 8px 12px;
        border-bottom: 1px solid var(--border-soft);
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .panel-title {
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--text-muted);
      }

      .panel-badge {
        font-size: 11px;
        padding: 2px 8px;
        border-radius: 999px;
        background: #f3f4f6;
        color: var(--text-muted);
      }

      .panel-body {
        padding: 10px 10px 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        height: 100%;
      }

      /* Editor de código */
      #editor {
        flex: 1;
        width: 100%;
        border: none;
        resize: vertical;
        border-radius: 10px;
        padding: 10px 11px;
        background: #f9fafb;
        color: var(--text);
        font-family: "JetBrains Mono", ui-monospace, SFMono-Regular,
          Menlo, Monaco, Consolas, "Liberation Mono", "Courier New",
          monospace;
        font-size: 13px;
        line-height: 1.4;
        outline: none;
        box-shadow: inset 0 0 0 1px #e5e7eb;
      }

      #editor:focus {
        box-shadow: inset 0 0 0 1px var(--accent);
      }

      .hint {
        font-size: 11px;
        color: var(--text-muted);
        display: flex;
        justify-content: space-between;
        gap: 8px;
      }

      .hint kbd {
        background: #e5e7eb;
        padding: 1px 4px;
        border-radius: 4px;
        border: 1px solid #d4d4d8;
        font-size: 10px;
        font-family: inherit;
      }

      /* Terminal */
      .terminal {
        display: flex;
        flex-direction: column;
        gap: 6px;
        height: 100%;
      }

      #terminal-log {
        flex: 1;
        margin: 0;
        padding: 10px 11px;
        background: var(--terminal-bg);
        color: var(--terminal-text);
        font-family: "JetBrains Mono", ui-monospace, SFMono-Regular,
          Menlo, Monaco, Consolas, "Liberation Mono", "Courier New",
          monospace;
        font-size: 13px;
        line-height: 1.5;
        border-radius: 10px;
        white-space: pre-wrap;
        overflow-y: auto;
      }

      .terminal-footer {
        display: flex;
        flex-direction: column;
        gap: 4px;
      }

      .terminal-input-row {
        display: flex;
        align-items: center;
        gap: 6px;
      }

      .prompt-label {
        font-family: "JetBrains Mono", ui-monospace;
        font-size: 13px;
        color: var(--text-muted);
      }

      #terminal-input {
        flex: 1;
        border-radius: 999px;
        border: 1px solid var(--border-soft);
        padding: 6px 10px;
        font-size: 12px;
        font-family: "JetBrains Mono", ui-monospace;
        outline: none;
      }

      #terminal-input:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 1px rgba(22, 163, 74, 0.35);
      }

      .terminal-hint {
        font-size: 11px;
        color: var(--text-muted);
        display: flex;
        justify-content: space-between;
        gap: 8px;
      }

      .status-text {
        font-size: 11px;
        color: var(--text-muted);
      }

      .status-text span {
        color: var(--accent);
      }

      /* Barra inferior */
      .footer-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        margin-top: 8px;
      }

      .btn-main {
        padding: 8px 18px;
        border-radius: 999px;
        border: none;
        background: linear-gradient(135deg, #16a34a, #22c55e);
        color: white;
        font-weight: 500;
        font-size: 13px;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 10px 24px rgba(34, 197, 94, 0.25);
      }

      .btn-main:active {
        transform: translateY(1px);
        box-shadow: 0 6px 14px rgba(34, 197, 94, 0.25);
      }

      .btn-main-icon {
        font-size: 15px;
      }

      .footer-info {
        font-size: 11px;
        color: var(--text-muted);
        text-align: right;
      }

      .footer-info span {
        color: var(--accent);
      }

      @media (max-width: 900px) {
        .layout {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </head>
  <body>
    <div class="app">
      <div class="app-shell">
        <header>
          <div>
            <h1>compilador.jocarsa.com</h1>
            <div class="subtitle">
              Editor y terminal para ejecutar pequeños programas en Python
            </div>
          </div>
          <div class="brand-pill">JOCARSA · Python sandbox</div>
        </header>

        <main>
          <section class="layout">
            <!-- Panel editor -->
            <div class="panel">
              <div class="panel-header">
                <div class="panel-title">Editor</div>
                <div class="panel-badge">Python 3</div>
              </div>
              <div class="panel-body">
                <textarea id="editor" spellcheck="false">
nombre = input("¿Cómo te llamas? ")
edad = int(input("¿Cuántos años tienes? "))

print("Hola,", nombre)
print("El año que viene tendrás", edad + 1, "años.")</textarea>
                <div class="hint">
                  <div>Escribe tu programa aquí (multilínea).</div>
                  <div><kbd>Ctrl</kbd> + <kbd>Enter</kbd> para ejecutar</div>
                </div>
              </div>
            </div>

            <!-- Panel terminal -->
            <div class="panel">
              <div class="panel-header">
                <div class="panel-title">Terminal</div>
                <div class="panel-badge">STDIN · STDOUT · STDERR</div>
              </div>
              <div class="panel-body">
                <div class="terminal">
                  <pre id="terminal-log">$ compilador.jocarsa.com listo.
# La salida y las entradas aparecerán aquí.</pre>

                  <div class="terminal-footer">
                    <div class="terminal-input-row">
                      <span class="prompt-label">&gt;</span>
                      <input
                        id="terminal-input"
                        type="text"
                        placeholder="Escribe una línea de entrada y pulsa Enter…"
                      />
                    </div>
                    <div class="terminal-hint">
                      <div>
                        Cada Enter añade una línea a stdin (para <code>input()</code>).
                      </div>
                      <div class="status-text" id="status-text">
                        Estado: <span>inactivo</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="footer-bar">
            <button id="run" class="btn-main">
              <span class="btn-main-icon">▶</span>
              Ejecutar programa
            </button>
            <div class="footer-info">
              Las líneas que introduzcas en la consola se usarán como
              <span>stdin</span> en orden para las llamadas a
              <code>input()</code>.
            </div>
          </div>
        </main>
      </div>
    </div>

    <script>
      const editor = document.querySelector("#editor");
      const terminalLog = document.querySelector("#terminal-log");
      const terminalInput = document.querySelector("#terminal-input");
      const statusText = document.querySelector("#status-text");
      const runButton = document.querySelector("#run");

      // Buffer de líneas de stdin
      const stdinLines = [];

      function setStatus(text) {
        statusText.innerHTML = 'Estado: <span>' + text + "</span>";
      }

      function resetForRun() {
        // Limpieza del log para cada ejecución
        terminalLog.textContent = "$ python programa.py\n";
      }

      function ejecutar() {
        const codigo = editor.value;
        const inputs = stdinLines.join("\n");

        resetForRun();
        setStatus("ejecutando…");

        fetch("/api", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            code: codigo,
            inputs: inputs,
          }),
        })
          .then((response) =>
            response.text().then((texto) => {
              if (!response.ok) {
                throw new Error(texto);
              }
              return texto;
            })
          )
          .then((salida) => {
            terminalLog.textContent += (salida || "OK") + "\n";
            setStatus("ejecución completada");
          })
          .catch((err) => {
            terminalLog.textContent += "\n[ERROR]\n" + err.message;
            setStatus("error de ejecución");
          })
          .finally(() => {
            // Tras ejecutar, puedes vaciar stdinLines si quieres
            // para obligar a volver a teclear las entradas.
            // Si prefieres mantenerlas entre ejecuciones, comenta la línea siguiente:
            stdinLines.length = 0;
          });
      }

      // Añadir línea de stdin con Enter en la consola
      terminalInput.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
          e.preventDefault();
          const valor = terminalInput.value;
          if (valor.trim() === "") {
            terminalInput.value = "";
            return;
          }
          stdinLines.push(valor);
          // Opcional: mostrar la línea en la parte baja del log como eco previo
          // (el programa luego imprimirá también entradas y prompts).
          // Si no quieres este eco previo, comenta la línea siguiente:
          terminalLog.textContent += "> " + valor + "\n";
          terminalInput.value = "";
        }
      });

      // Ejecutar con el botón
      runButton.addEventListener("click", ejecutar);

      // Ejecutar con Ctrl+Enter en cualquier parte
      document.addEventListener("keydown", function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key === "Enter") {
          e.preventDefault();
          ejecutar();
        }
      });
    </script>
  </body>
</html>

```
#### 005-Includes
**contacto.php**
```php
<?php include "bloques/cabecera.php"; ?>
<p>Aqui solo pongo el contenido de la pagina de contacto</p>
<?php include "bloques/pie.php"; ?>

```
**index.php**
```php
<?php include "bloques/cabecera.php"; ?>
<p>Aqui solo pongo el contenido de la pagina principal</p>
<?php include "bloques/pie.php"; ?>

```
**sobremi.php**
```php
<?php include "bloques/cabecera.php"; ?>
<p>Aqui solo pongo el contenido de la pagina sobremi</p>
<?php include "bloques/pie.php"; ?>

```
##### bloques
**cabecera.php**
```php
<!doctype html>
<html>
    <head>
    	<title>Valentin</title>
    	<meta charset ="UTF-8">
    </head>
    <body>
        <header>
            <h1>Valentín de Gennaro</h1>
            <h2>Página superguay</h2>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="sobremi.php">Sobre mi</a>
                <a href="contacto.php">Contacto</a>
            </nav>
    </header>
    <main>

```
**pie.php**
```php
        </main>
        <footer>
            (c) 2025 Valentín de Gennaro
        </footer>
    </body>
</html>
```
##### microweb
**contacto.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body>
        <header>
            <h1>Valentín de Gennaro</h1>
            <h2>Página superguay</h2>
            <nav>
                <a href="inicio.html">Inicio</a>
                <a href="sobremi.html">Sobre mi</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </header>
         <main>
            <p>Este es el contenido de la pagina principal</p>
        </main>
        <footer>
            (c) 2025 Valentín de Gennaro
        </footer>
    </body>
</html>
```
**inicio.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body>
        <header>
            <h1>Valentín de Gennaro</h1>
            <h2>Página superguay</h2>
            <nav>
                <a href="inicio.html">Inicio</a>
                <a href="sobremi.html">Sobre mi</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </header>
         <main>
            <p>Este es el contenido de la pagina principal</p>
        </main>
        <footer>
            (c) 2025 Valentín de Gennaro
        </footer>
    </body>
</html>
```
**sobremi.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body>
        <header>
            <h1>Valentín de Gennaro</h1>
            <h2>Página superguay</h2>
            <nav>
                <a href="inicio.html">Inicio</a>
                <a href="sobremi.html">Sobre mi</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </header>
         <main>
            <p>Este es el contenido de la pagina principal</p>
        </main>
        <footer>
            (c) 2025 Valentín de Gennaro
        </footer>
    </body>
</html>
```
#### 006-Repsito de cosas de GitHub
**001-Problemas comunes en GitHub.md**
```markdown
# Cambio de nombre de repo

Cuando clonáis un repo por primera vez, se clona en una carpeta
en vuestro equipo
El nombre de esa carpeta coincide con el nombre del repo
(pero no tendría por qué)

A veces, cambiáis el nombre del repositorio
Pero el nombre de la carpeta no se actualiza

Solucion = es normal, no pasa nada

---

# Cambio de ubicación de la carpeta clonada

- A veces pasa:
	- Clonas la carpeta en un sitio (por ejemplo Documentos)
	- Pero luego te la quieres llevar a otro sitio (por ejemplo htdocs)

- Solución: (mala pero no imposible):
	1.-Te creas copia de seguridad de la carpeta en otra parte
	(en una carpeta en alguna parte de tu ordenador)
	2.-En GitHub Desktop, Boton derecho a la carpeta -> Remove
	3.-Al hacer eso desvinculas la carpeta
	4.-Si quieres antes haz un push por si acaso
	5.-Vuelves a clonar la carpeta en una carpeta ¡¡¡¡¡¡VACIA!!!!!!!!
	6.-Por ejemplo en C:/xampp/htdocs/loquesea
	7.-Y luego si es necesario pon dentro de esa carpeta los archivos 
	del paso 1
	8.-Profit


```
#### 007-Bloques
**paneldecontrol.php**
```php
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<nav>
			<?php include "bloques/navegacion.php"?>
		</nav>
		<main>
			<?php include "bloques/tabla.php"?>
		</main>
	</body>
</html>

```
##### bloques
**navegacion.php**
```php
			<ul>
				<li>
					<a href="enlace.php">Enlace</a>
				</li>
				<li>
					<a href="enlace.php">Enlace</a>
				</li>
				<li>
					<a href="enlace.php">Enlace</a>
				</li>
				<li>
					<a href="enlace.php">Enlace</a>
				</li>
				<li>
					<a href="enlace.php">Enlace</a>
				</li>
				<li>
					<a href="enlace.php">Enlace</a>
				</li>
			</ul>

```
**tabla.php**
```php
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Email</th>
						<th>Direccion</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Email</td>
						<td>Direccion</td>
					</tr>
					<tr>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Email</td>
						<td>Direccion</td>
					</tr>
					<tr>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Email</td>
						<td>Direccion</td>
					</tr>
					<tr>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Email</td>
						<td>Direccion</td>
					</tr>
				</tbody>
			</table>

```
#### 008-Sesiones en php
**001-Variables en el mismo archivo.php**
```php
<?php
	$nombre = "Valentin";
	echo $nombre;
?>

```
**002-Incluso en diferentes bloques.php**
```php
<?php
	$nombre = "Valentin";
?>

Esto es HTML pero no pasa nada<br>

<?php
	echo $nombre;
?>

```
**003-Origen .php**
```php
<?php
	$nombre = "Valentin";
?>
<a href ="004-Destino.php">Vamos a otra pagina</a>

```
**004-Destino.php**
```php
<?php
	echo $nombre
?>

```
**005-Origen y uso de sesiones.php**
```php
<?php
	session_start();
	$_SESSION['nombre'] = "Valentin";
?>
<a href="006-Destino con sesiones.php">Vamos a otra página</a>

```
**006-Destino con sesiones.php**
```php
<?php
	session_start();
	echo $_SESSION['nombre'];
?>

```
#### 009-Implantaciones CRUD
**index.php**
```php
<!doctype html>
<html lang="es">
	<head>
		<title>LocalHost - Noticias tecnológicas</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>LocalHost</h1>
			<h2>Noticias tecnológicas</h2>
		</header>
	<main>
		<?php include "inc/listar_articulos.php"; ?>
	</main>
	<footer>
	</footer>
	</body>
</html>

```
##### admin
**escritorio.php**
```php
<!doctype html>
<html lang="es">
	<head>
		<title>LocalHost - Panel de control</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<nav>
			<button>Noticias</button>
			<button>Autores</button>
		</nav>
		<main>
			<?php
			// ESTO SE CONOCE COMO ROUTER (ENRUTADOR) ////////////////////////
				if(isset($_GET['accion'])){
					if($_GET['accion'] == "nuevo"){									// DEFINO LA ACCION NUEVO
						include "inc/create/formulario.php";						// INCLUYO FORMULARIO.PHP
						
					}else if($_GET['accion'] == "eliminar"){						// DEFINO LA ACCION ELIMINAR
						include "inc/delete/eliminar.php";							// INCLUYO ELIMINAR.PHP
						
					}else if($_GET['accion'] == "editar"){							// DEFINO LA ACCION EDITAR
						include "inc/update/formulario_actualizar.php";				// INCLUYO FORMULARIO_ACTUALIZAR.PHP
					}
					
				}else{
					include "inc/read/Leer.php";
				}
			?>
			<a href="?accion=nuevo" id="nuevo">+</a>
		</main>
	</body>
</html>



```
**index.php**
```php
<!-- IMPORTANTE: Este es el index de admin -->
<!doctype html>
<html lang="es">
	<head>
	<title>El jocarsa - Noticias tecnológicas</title>
	<meta charset="utf-8">
	<style>
		body,html{width:100%;height:100%;padding:0px;margin:0px;background:orangered;}
		body{display:flex;justify-content:center;align-items:center;}
		form{
		display:flex;flex-direction:column;gap:20px;
		padding:40px;background:white;justify-content:center;
		align-items:center;width:150px;height:150px;
		}
		form input{width:100%;padding:10px;box-sizing:border-box;}
	</style>
	</head>
	<body>
	<form action="procesalogin.php" method="POST">
		<input type="text" name="usuario" placeholder="usuario">
		<input type="password" name="contrasena" placeholder="contraseña">
		<input type="submit">
	</form>
	</body>
</html>

```
**procesalogin.php**
```php
<?php
	// Aquí más adelante validaremos contra la base de datos
  // Pero de momento te llevo al escritorio
  header("Location: escritorio.php"); // Realiza una redireccion
?>

```
###### css
**estilo.css**
```css
/* ESTILOS GENERALES /////////////  */
html,body{
	width:100%;
	height:100%;
	margin:0px;
	padding:0px;
}
body{
	display:flex;
}
nav{
	flex:1;
	background:orangered;
}
main{
	flex:4;
	background:white;
}
#nuevo{
	position:absolute;
	bottom:20px;
	right:20px;
	background:orangered;
	color:white;
	width:30px;
	height:30px;
	border-radius:40px;
	text-align:center;
	font-size:30px;
	line-height:30px;
	text-decoration:none;
	font-weight:bold;
}

/* ESTILOS DEL MENU /////////////  */
nav{
	display:flex;
	padding:20px;
	flex-direction:column;
	gap:20px;
}
nav button{
	background:white;
	border:none;
	color:black;
	padding:10px;
}

/* ESTILOS DE LA TABLA /////////////  */
main{
	padding:20px;
}
table{
	width:100%;
	border-collapse: collapse;
	font-family: Arial, sans-serif;
	font-size: 18px;
	box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

table th{
	background: orangered;
	color: white;
	text-align: left;
	padding: 10px;
	letter-spacing: 0.5px;
}

table td{
	padding: 10px;
	border-bottom: 1px solid #f2f2f2;
}

table tr:hover{
	background: #FFA500; /* un ligero tono del naranja */
	transition: 0.2s;
}

table tr:nth-child(even){
	background: #fff8f3;
}

table{
	border-radius: 8px;
	overflow: hidden;
}
.eliminar,.editar{
	width:20px;
	height:20px;
	border-radius:30px;
	line-height:20px;
	text-decoration:none;
	display:block;
	text-align:center;
}


/* ESTILOS DEL FORMULARIO /////////////  */
form{
	display:flex;
	width:100%;
	flex-direction:column;
	gap:20px;
}
.controlformulario{
	display:flex;
	width:100%;
	flex-direction:column;
}

```
###### inc
####### create
**formulario.php**
```php
<form action="inc/create/procesaformulario.php" method="POST">
	<div class = "controlformulario">
		<label for="titulo">Titulo de la nueva noticia</label>
		<input type="text" name="titulo" id="titulo">
	</div>
	
	<div class = "controlformulario">
		<label for="contenido">Contenido de la nueva noticia</label>
		<input type="text" name="contenido" id="contenido">
	</div>
	
	<div class = "controlformulario">
		<label for="fecha_publicacion">fecha_publicacion de la nueva noticia</label>
		<input type="text" name="fecha_publicacion" id="fecha_publicacion">
	</div>
	
	<div class = "controlformulario">
		<label for="autor_id">Autor de la nueva noticia</label>
		<input type="text" name="autor_id" id="autor_id">
	</div>
	
	<input type="submit">

</form>

```
**procesaformulario.php**
```php
<?php
	// Primero cogemos la info que viene del formulario

	$titulo = $_POST['titulo'];								// ATRAPO EL TITULO
	$contenido = $_POST['contenido'];						// ATRAPO EL CONTENIDO
	$fecha_publicacion = $_POST['fecha_publicacion'];		// ATRAPO LA FECHA
	$autor_id = $_POST['autor_id'];							// ATRAPO EL ID DEL AUTOR

	 // Y luego metemos esa información en la base de datos
	$host = "localhost";									// ME CONECTO A LA BBDD	
	$user = "periodico";
	$pass = "Periodico123$";
	$db   = "periodico";

	$conexion = new mysqli($host, $user, $pass, $db);		// EJECUTO LA CONEXION

	// Metemos los datos en la base de datos
	$sql = "
	INSERT INTO noticias VALUES(
		NULL,
		'".$titulo."',
		'".$contenido."',
		'".$fecha_publicacion."',
		".$autor_id."
		);
	";														// LANZO LA CONEXION													 
	$conexion->query($sql);

	$conexion->close();										// CIERRO LA CONEXION
	header("Location: ../../escritorio.php");				// VUELVO AL ESCRITORIO

?>


```
####### delete
**eliminar.php**
```php
<?php

  $id = $_GET['id'];									// ATRAPO EL ID A ELIMINAR

  $host = "localhost";									// EM CONECTO A LA BASE DE DATOS
  $user = "periodico";
  $pass = "Periodico123$";
  $db   = "periodico";

  $conexion = new mysqli($host, $user, $pass, $db);		// EJECUTO LA CONEXION

  $sql = "DELETE FROM noticias WHERE id = ".$id.";";	// PREPARO LA PETICION
  
  $conexion->query($sql);								// EJECUTO LA PETICION
	
  $conexion->close();									// CIERRO LA CONEXION
  header("Location: escritorio.php");					// Y ME VUELVO AL ESCRITORIO
  
?>

```
####### read
**Leer.php**
```php
<table>
  <?php
    $host = "localhost";
    $user = "periodico";
    $pass = "Periodico123$";
    $db   = "periodico";

    $conexion = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM noticias;";

    $resultado = $conexion->query($sql);
    while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
      	echo "<td>".$fila['titulo']."</td>";
        echo "<td>".$fila['fecha_publicacion']."</td>";
        echo "<td>".$fila['autor_id']."</td>";
        echo "<td>".$fila['contenido']."</td>";
        echo "<td><a href='?accion=editar&id=".$fila['id']."' class='editar' title='Cuidado que vas a editar un dato'>✏️</a></td>";
        echo "<td><a href='?accion=eliminar&id=".$fila['id']."' class='eliminar' title='⚠️ Mas cuidado todavia que vas a eliminar un dato ⚠️'>❌️</a></td>";
      echo "</tr>";
    }

    $conexion->close();
  ?>
</table>

```
####### update
**formulario_actualizar.php**
```php
<?php

// Primero traemos el formulario de insertar
// Y luego lo rellenamos de datos (los datos a actualizar)

	$host = "localhost";
	$user = "periodico";
	$pass = "Periodico123$";
	$db   = "periodico";

    $conexion = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM noticias WHERE id = ".$_GET['id'].";";

    $resultado = $conexion->query($sql);
    while ($fila = $resultado->fetch_assoc()) {
?>

	<form action="inc/update/procesa_formulario.php" method="POST">
		<input type="hidden" name="id" value="<?= $fila['id'] ?>"> <!-- OJO A ESTE CAMPO OCULTO -->
		<div class="controlformulario">
			<label for="titulo">Título de la nueva noticia</label>
			<input type="text" name="titulo" id="titulo" value="<?= $fila['titulo'] ?>">
		</div>

		<div class="controlformulario">
			<label for="contenido">Contenido de la nueva noticia</label>
			<textarea id="contenido" name="contenido"><?= $fila['contenido'] ?></textarea>
		</div>

		<div class="controlformulario">
			<label for="fecha_publicacion">Fecha de la nueva noticia</label>
			<input type="text" name="fecha_publicacion" id="fecha_publicacion" value="<?= $fila['fecha_publicacion'] ?>">
		</div>

		<div class="controlformulario">
			<label for="autor_id">Autor de la nueva noticia</label>
			<input type="text" name="autor_id" id="autor_id" value="<?= $fila['autor_id'] ?>">
		</div>

		<input type="submit">

	</form>

<?php

	} 

?>

```
**procesa_formulario.php**
```php
<?php
	// Primero cogemos la info que viene del formulario

	$titulo = $_POST['titulo'];								// ATRAPO EL TITULO
	$contenido = $_POST['contenido'];						// ATRAPO EL CONTENIDO
	$fecha_publicacion = $_POST['fecha_publicacion'];		// ATRAPO LA FECHA
	$autor_id = $_POST['autor_id'];							// ATRAPO EL ID DEL AUTOR
	$id = $_POST['id'];										// ATRAPO EL ID				

	// Y luego metemos esa información en la base de datos
	$host = "localhost";														// Me conecto a la base de datos
	$user = "periodico";
	$pass = "Periodico123$";
	$db   = "periodico";

	$conexion = new mysqli($host, $user, $pass, $db);		// EJECUTO LA CONEXION

	// Metemos los datos en la base de datos
	$sql = "
		UPDATE noticias
		SET 
		titulo = '".$titulo."',
		contenido = '".$contenido."',
		fecha_publicacion = '".$fecha_publicacion."',
		autor_id = ".$autor_id."
		WHERE id = ".$id.";
	";	
		
	echo $sql;												// LANZO LA CONEXION													 
	$conexion->query($sql);

	$conexion->close();										// CIERRO LA CONEXION
	header("Location: ../../escritorio.php");				// VUELVO AL ESCRITORIO

?>


```
##### css
**estilo.css**
```css
/* Variables para facilitar cambios de color */
:root {
    --bg-body: #1e1e2e;      /* Fondo oscuro azulado */
    --bg-card: #2a2a3c;      /* Fondo de los artículos */
    --text-main: #c9d1d9;    /* Texto gris claro */
    --accent: #00f2ff;       /* Cian neón tecnológico */
    --border: #44475a;
}

body, html {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: var(--bg-body);
    color: var(--text-main);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
}

/* Títulos con fuente tipo consola/código */
h1, h2, h3 {
    font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
}

header, main, footer {
    max-width: 1200px; 
    width: 90%;
    margin: 40px auto;
}

header {
    text-align: center;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 20px;
    margin-bottom: 40px;
}

header h1 {
    font-size: 2.5rem;
    margin: 0;
    text-shadow: 0 0 10px rgba(0, 242, 255, 0.5); /* Efecto neón */
}

header h2 {
    font-size: 1rem;
    color: var(--accent);
    margin-top: 5px;
}

main {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Aquí está el cambio: 3 columnas de igual tamaño */
    gap: 30px;
}

/* Estilo para los artículos generados por el PHP */
/* Asumimos que son divs o articles hijos directos del main */
main > * {
    background-color: var(--bg-card);
    padding: 20px;
    border: 1px solid var(--border);
    border-radius: 8px;
    transition: transform 0.2s, box-shadow 0.2s;
}

main > *:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    border-color: var(--accent);
}

footer {
    text-align: center;
    font-size: 0.8rem;
    opacity: 0.6;
    margin-top: 50px;
    padding-bottom: 20px;
    border-top: 1px solid var(--border);
    padding-top: 20px;
}


```
##### inc
**listar_articulos.php**
```php
<?php
        $host = "localhost";
        $user = "periodico";
        $pass = "Periodico123$";
        $db   = "periodico";
        $conexion = new mysqli($host, $user, $pass, $db);
        $sql = "SELECT * FROM noticias";
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
          echo '
            <article>
              <h3>'.$fila['titulo'].'</h3>
              <time>'.$fila['fecha_publicacion'].'</time>
              <p>'.$fila['autor_id'].'</p>
              <p>'.$fila['contenido'].'</p>
            </article>
          ';
        }
        $conexion->close();
      ?>

```
#### 010-Tienda online
##### V0.1-Inicio
###### back
###### front
**carrito.php**
```php
Esta es la pagina de carrito<br>
<a href = "catalogo.php">Vamos a la pagina de finalización</a>

```
**catalogo.php**
```php
Esta es la pagina de catalogo<br>
<a href = "producto.php">Vamos a ver la pagina de producto</a>

```
**finalizacion.php**
```php
Esta es la página de finalizacion<br>
<a href="index.php">Ya has acabado, vamos a volver a empezar</a>

```
**index.php**
```php
Esta es la pagina principal<br>
<a href = "catalogo.php">Vamos a ver el catalogo</a>

```
**producto.php**
```php
Esta es la pagina de producto<br>
<a href = "catalogo.php">Vamos al carrito</a>

```
##### V0.2-Contenido
###### back
###### front
**carrito.php**
```php
Esta es la pagina de carrito<br>
<a href = "catalogo.php">Vamos a la pagina de finalización</a>

```
**catalogo.php**
```php
Esta es la pagina de catalogo<br>
<a href = "producto.php">Vamos a ver la pagina de producto</a>

```
**finalizacion.php**
```php
Esta es la página de finalizacion<br>
<a href="index.php">Ya has acabado, vamos a volver a empezar</a>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
Esta es la pagina de producto<br>
<a href = "catalogo.php">Vamos al carrito</a>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:800px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.3-BBDD
**Creamos BD.sql**
```sql
##################################### BD ###################################################
CREATE DATABASE tiendaonlinedamdaw;
USE tiendaonlinedamdaw;
################################### TABLAS #################################################
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);
################################### USUARIO #################################################
CREATE USER 
'tiendaonlinedamdaw'@'localhost' 
IDENTIFIED  BY 'Tiendaonlinedamdaw123$';

GRANT USAGE ON *.* TO 'tiendaonlinedamdaw'@'localhost';

ALTER USER 'tiendaonlinedamdaw'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON tiendaonlinedamdaw.* 
TO 'tiendaonlinedamdaw'@'localhost';

FLUSH PRIVILEGES;

```
**datosdemuestra.sql**
```sql
-- =====================================================
-- DATOS DE MUESTRA AMPLIADOS PARA TIENDA ONLINE
-- Orden correcto según claves foráneas
-- =====================================================

-- =====================
-- PRODUCTOS (20)
-- =====================
INSERT INTO producto VALUES
(1,  'Portátil 15"',              'Portátil para trabajo y estudio',                 '799.99', '25',  'portatil15.jpg'),
(2,  'Portátil 13"',              'Ultrabook ligero y potente',                      '999.99', '15',  'portatil13.jpg'),
(3,  'PC Sobremesa',              'Ordenador de sobremesa para oficina',             '699.00', '10',  'pc.jpg'),
(4,  'Monitor 24"',               'Monitor Full HD 24 pulgadas',                     '179.00', '40',  'monitor24.jpg'),
(5,  'Monitor 27"',               'Monitor QHD 27 pulgadas',                         '299.00', '30',  'monitor27.jpg'),
(6,  'Teclado mecánico',          'Teclado mecánico retroiluminado',                 '89.50',  '60',  'teclado_mec.jpg'),
(7,  'Teclado inalámbrico',       'Teclado inalámbrico silencioso',                  '39.90',  '100', 'teclado_wireless.jpg'),
(8,  'Ratón inalámbrico',         'Ratón óptico inalámbrico USB',                    '19.90',  '150', 'raton_wireless.jpg'),
(9,  'Ratón gaming',              'Ratón gaming RGB alta precisión',                '49.90',  '70',  'raton_gaming.jpg'),
(10, 'Auriculares Bluetooth',     'Auriculares inalámbricos con micrófono',          '59.99',  '80',  'auriculares_bt.jpg'),
(11, 'Auriculares gaming',        'Auriculares gaming con sonido envolvente',        '79.99',  '50',  'auriculares_gaming.jpg'),
(12, 'Webcam HD',                 'Cámara web HD para videollamadas',                '49.00',  '90',  'webcam.jpg'),
(13, 'Impresora láser',           'Impresora láser monocromo',                       '129.00', '20',  'impresora_laser.jpg'),
(14, 'Disco SSD 1TB',             'Disco sólido SSD 1TB SATA',                       '109.00', '75',  'ssd1tb.jpg'),
(15, 'Disco duro 2TB',            'Disco duro mecánico 2TB',                         '79.00',  '60',  'hdd2tb.jpg'),
(16, 'Memoria USB 64GB',          'Pendrive USB 3.0 64GB',                           '14.90',  '200', 'usb64.jpg'),
(17, 'Router WiFi',               'Router WiFi de doble banda',                      '69.00',  '45',  'router.jpg'),
(18, 'Tablet 10"',                'Tablet Android 10 pulgadas',                     '199.00', '35',  'tablet.jpg'),
(19, 'Smartphone 128GB',          'Teléfono móvil 128GB',                            '349.00', '55',  'smartphone.jpg'),
(20, 'Silla gaming',              'Silla ergonómica para escritorio',                '189.00', '25',  'silla_gaming.jpg');

-- =====================
-- CLIENTES (10)
-- =====================
INSERT INTO cliente VALUES
(1,  'Ana',     'Martínez López',   'ana.martinez@email.com',     'C/ Mayor 12, Madrid',          '600123456'),
(2,  'Carlos',  'Pérez Gómez',      'carlos.perez@email.com',    'Av. Libertad 45, Valencia',    '611234567'),
(3,  'Laura',   'Sánchez Ruiz',     'laura.sanchez@email.com',   'C/ del Mar 8, Alicante',       '622345678'),
(4,  'Javier',  'López Torres',     'javier.lopez@email.com',    'Gran Vía 101, Madrid',         '633456789'),
(5,  'Marta',   'Gómez Fernández',  'marta.gomez@email.com',     'C/ Colón 3, Castellón',       '644567890'),
(6,  'David',   'Ruiz Molina',      'david.ruiz@email.com',      'Av. Europa 22, Murcia',       '655678901'),
(7,  'Lucía',   'Navarro Pérez',    'lucia.navarro@email.com',   'C/ Serranos 7, Valencia',     '666789012'),
(8,  'Pablo',   'Hernández Gil',    'pablo.hernandez@email.com', 'C/ San Juan 19, Elche',       '677890123'),
(9,  'Sonia',   'Romero Díaz',      'sonia.romero@email.com',    'Av. Mediterráneo 5, Benidorm','688901234'),
(10, 'Alberto', 'Morales Cano',     'alberto.morales@email.com', 'C/ Alameda 14, Albacete',     '699012345');

-- =====================
-- PEDIDOS (15)
-- =====================
INSERT INTO pedido VALUES
(1,  '2025-12-01 10:15:00', 1),
(2,  '2025-12-01 18:40:00', 2),
(3,  '2025-12-02 09:05:00', 1),
(4,  '2025-12-02 21:30:00', 3),
(5,  '2025-12-03 11:00:00', 4),
(6,  '2025-12-03 16:20:00', 5),
(7,  '2025-12-04 12:10:00', 6),
(8,  '2025-12-04 19:45:00', 7),
(9,  '2025-12-05 08:50:00', 8),
(10, '2025-12-05 14:35:00', 9),
(11, '2025-12-06 10:05:00', 10),
(12, '2025-12-06 17:25:00', 2),
(13, '2025-12-07 09:40:00', 3),
(14, '2025-12-07 20:10:00', 6),
(15, '2025-12-08 13:55:00', 1);

-- =====================
-- LÍNEAS DE PEDIDO (30)
-- =====================
INSERT INTO lineaspedido VALUES
(1,  1,  '1',  1),
(2,  1,  '1',  8),
(3,  2,  '2', 10),
(4,  2,  '1',  4),
(5,  3,  '1',  6),
(6,  3,  '1', 14),
(7,  4,  '1', 18),
(8,  4,  '1',  9),
(9,  5,  '1',  2),
(10, 5,  '1',  7),
(11, 6,  '1', 20),
(12, 6,  '1',  5),
(13, 7,  '2', 16),
(14, 7,  '1', 12),
(15, 8,  '1', 11),
(16, 8,  '1',  9),
(17, 9,  '1', 19),
(18, 9,  '1', 17),
(19, 10, '1', 13),
(20, 10, '1', 15),
(21, 11, '1',  3),
(22, 11, '1', 14),
(23, 12, '2',  8),
(24, 12, '1',  6),
(25, 13, '1',  1),
(26, 13, '1', 10),
(27, 14, '1', 18),
(28, 14, '1', 16),
(29, 15, '1',  2),
(30, 15, '1',  4);

```
**diagrama de flujo.html**
```html
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Diagrama exportado</title>
<style>
body {
  margin: 0;
  padding: 20px;
  background: #f3f3f7;
  font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
}
.page {
  position: relative;
  background: #ffffff;
  border: 1px solid #d1d5db;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  width: 442.88284965183414px;
  height: 262.8359587296195px;
  overflow: visible;
}

/* formas básicas */
.shape {
  position: absolute;
  min-width: 120px;
  min-height: 40px;
  padding: 6px 10px;
  background: #ffffff;
  border-radius: 4px;
  border: 1px solid #9ca3af;
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
}

.shape.rectangle {
  border-radius: 4px;
}

.shape.pill {
  border-radius: 999px;
}

.shape.circle {
  border-radius: 999px;
  width: 80px;
  height: 80px;
  padding: 0;
  justify-content: center;
}

/* texto libre */
.shape.text {
  background: transparent;
  border: none;
  box-shadow: none;
  padding: 0;
  min-width: 20px;
  min-height: 20px;
}

/* base de datos */
.shape.db {
  min-width: 120px;
  min-height: 60px;
  padding-top: 20px;
  border-radius: 60px / 16px;
  background: linear-gradient(180deg, #e5e7eb 0%, #ffffff 40%, #e5e7eb 100%);
  position: absolute;
  overflow: hidden;
  text-align: center;
}
.shape.db::before {
  content: "";
  position: absolute;
  top: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid #9ca3af;
  background: radial-gradient(circle at 50% 30%, #ffffff 0%, #e5e7eb 70%);
}
.shape.db::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid rgba(156, 163, 175, 0.6);
  border-top: none;
  background: radial-gradient(circle at 50% 70%, #e5e7eb 0%, #d1d5db 70%);
}

/* entidades ER */
.shape.entity {
  width: 220px;
  min-height: 80px;
  background: #ffffff;
  border: 2px solid #111827;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.15);
  display: flex;
  flex-direction: column;
  font-size: 13px;
  overflow: hidden;
  padding: 0;
}
.entity-header {
  background: #f3f4f6;
  padding: 4px 8px;
  font-weight: 600;
  text-align: center;
  border-bottom: 1px solid #e5e7eb;
}
.entity-properties {
  flex: 1;
  padding: 4px 4px 0 4px;
}
.entity-property {
  display: grid;
  grid-template-columns: 14px 1fr 14px;
  align-items: center;
  column-gap: 4px;
  padding: 2px 0;
}
.entity-property .property-name {
  padding: 2px 4px;
  border-radius: 3px;
}

/* puertos */
.port {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1px solid #111827;
  background: #ffffff;
}
.port-left { justify-self: start; }
.port-right { justify-self: end; }

/* flechas rectas */
.arrow {
  position: absolute;
  height: 2px;
  background: #111827;
  transform-origin: 0 50%;
}
.arrow::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.arrow-double::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%) rotate(180deg);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}

/* flechas ortogonales */
.ortho-arrow {
  position: absolute;
  left: 0;
  top: 0;
}
.ortho-arrow .ortho-seg {
  position: absolute;
  background: #111827;
}
.ortho-seg.seg-horizontal { height: 2px; }
.ortho-seg.seg-vertical { width: 2px; }
.ortho-arrowhead {
  position: absolute;
  width: 0;
  height: 0;
}
.ortho-arrowhead.dir-right {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.ortho-arrowhead.dir-left {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 8px solid #111827;
}
.ortho-arrowhead.dir-down {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 8px solid #111827;
}
.ortho-arrowhead.dir-up {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 8px solid #111827;
}
</style>
</head>
<body>
<div class="page">

<div class="shape rectangle" style="left:40px;top:97.84376061480972px;width:119.99999999999994px;height:39.98437300972314px;">index</div>
<div class="shape rectangle" style="left:167.38283903702438px;top:40px;width:119.99999999999994px;height:39.984382961107315px;">Catálogo</div>
<div class="shape rectangle" style="left:282.88284965183414px;top:103.37500530740485px;width:119.99999999999994px;height:39.984382961107315px;">P Producto</div>
<div class="shape rectangle" style="left:247.37501061480964px;top:180.69530984629748px;width:119.99999999999994px;height:39.984382961107315px;">Carrito</div>
<div class="shape rectangle" style="left:86.50000530740488px;top:182.85157576851216px;width:119.99997346297549px;height:39.984382961107315px;">Finalización</div>
<div class="shape text" style="left:203.45310377038038px;top:120.25000530740485px;width:31.617219344429333px;height:19.992171577785317px;">Front</div>
<div class="arrow" style="left:144.02655822411253px;top:97.84376061480972px;width:43.194717121260936px;transform:rotate(-0.4262531013316452rad);"></div>
<div class="arrow" style="left:263.8183125650629px;top:79.98438296110731px;width:48.624667337078805px;transform:rotate(0.5018455771914861rad);"></div>
<div class="arrow" style="left:333.70182635759966px;top:143.35938826851216px;width:41.08465940897501px;transform:rotate(2.0012997385397435rad);"></div>
<div class="arrow" style="left:247.37501061480964px;top:201.49170297654248px;width:40.8787032809442px;transform:rotate(3.128190095313388rad);"></div>
<div class="arrow" style="left:135.56409527938598px;top:182.85157576851216px;width:51.31918392658071px;transform:rotate(-2.071339826124455rad);"></div>
</div>
</body>
</html>
```
**diagrama de flujo.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "rectangle",
      "left": "374.734px",
      "top": "263.499px",
      "width": "",
      "height": "",
      "texto": "index"
    },
    {
      "id": "forma-2",
      "tipo": "rectangle",
      "left": "502.111px",
      "top": "205.658px",
      "width": "",
      "height": "",
      "texto": "Catálogo"
    },
    {
      "id": "forma-3",
      "tipo": "rectangle",
      "left": "617.613px",
      "top": "269.03px",
      "width": "",
      "height": "",
      "texto": "P Producto"
    },
    {
      "id": "forma-4",
      "tipo": "rectangle",
      "left": "582.114px",
      "top": "346.349px",
      "width": "",
      "height": "",
      "texto": "Carrito"
    },
    {
      "id": "forma-5",
      "tipo": "rectangle",
      "left": "421.229px",
      "top": "348.499px",
      "width": "",
      "height": "",
      "texto": "Finalización"
    },
    {
      "id": "forma-6",
      "tipo": "text",
      "left": "538.19px",
      "top": "285.912px",
      "width": "",
      "height": "",
      "texto": "Front"
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "entity",
      "left": "447.129px",
      "top": "336.978px",
      "width": "",
      "height": "",
      "entityName": "Producto",
      "properties": [
        {
          "id": "prop-1",
          "name": "id"
        },
        {
          "id": "prop-2",
          "name": "nombre_producto"
        },
        {
          "id": "prop-3",
          "name": "descripcion"
        },
        {
          "id": "prop-4",
          "name": "precio"
        },
        {
          "id": "prop-5",
          "name": "stock"
        },
        {
          "id": "prop-6",
          "name": "imagen"
        }
      ]
    },
    {
      "id": "forma-2",
      "tipo": "entity",
      "left": "230.283px",
      "top": "62.1987px",
      "width": "",
      "height": "",
      "entityName": "Cliente",
      "properties": [
        {
          "id": "prop-7",
          "name": "id"
        },
        {
          "id": "prop-8",
          "name": "nombre_cliente"
        },
        {
          "id": "prop-9",
          "name": "apellidos"
        },
        {
          "id": "prop-10",
          "name": "email"
        },
        {
          "id": "prop-11",
          "name": "direccion"
        },
        {
          "id": "prop-12",
          "name": "telefono"
        }
      ]
    },
    {
      "id": "forma-3",
      "tipo": "entity",
      "left": "446.112px",
      "top": "136.183px",
      "width": "",
      "height": "",
      "entityName": "Pedido",
      "properties": [
        {
          "id": "prop-13",
          "name": "id"
        },
        {
          "id": "prop-14",
          "name": "fecha"
        },
        {
          "id": "prop-15",
          "name": "cliente_id"
        }
      ]
    },
    {
      "id": "forma-4",
      "tipo": "entity",
      "left": "672.018px",
      "top": "221.777px",
      "width": "",
      "height": "",
      "entityName": "LineasPedido",
      "properties": [
        {
          "id": "prop-16",
          "name": "id"
        },
        {
          "id": "prop-17",
          "name": "pedido_id"
        },
        {
          "id": "prop-18",
          "name": "cantidad"
        },
        {
          "id": "prop-19",
          "name": "producto_id"
        }
      ]
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": "prop-15",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": "prop-7",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-17",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": "prop-13",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-19",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": "prop-1",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.sql**
```sql
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);

```
###### back
###### front
**carrito.php**
```php
Esta es la pagina de carrito<br>
<a href = "catalogo.php">Vamos a la pagina de finalización</a>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<?php
    $host = "localhost";
    $user = "tiendaonlinedamdaw";
    $pass = "Tiendaonlinedamdaw123$";
    $db   = "tiendaonlinedamdaw";

    $conexion = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM producto;";

    $resultado = $conexion->query($sql);
    while ($fila = $resultado->fetch_assoc()) {
?>
	<article>
		<div class="imagen"></div>
		<h3><?= $fila['nombre_producto'] ?></h3>
		<p><?= $fila['precio'] ?></p>
		<p><?= $fila['descripcion'] ?></p>
		<a href="comprar.php">Comprar</a>
	</article>
<?php
	}

	$conexion->close();
?>

<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
Esta es la página de finalizacion<br>
<a href="index.php">Ya has acabado, vamos a volver a empezar</a>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
Esta es la pagina de producto<br>
<a href = "catalogo.php">Vamos al carrito</a>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:800px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.4-Pasamos articulo
**Creamos BD.sql**
```sql
##################################### BD ###################################################
CREATE DATABASE tiendaonlinedamdaw;
USE tiendaonlinedamdaw;
################################### TABLAS #################################################
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);
################################### USUARIO #################################################
CREATE USER 
'tiendaonlinedamdaw'@'localhost' 
IDENTIFIED  BY 'Tiendaonlinedamdaw123$';

GRANT USAGE ON *.* TO 'tiendaonlinedamdaw'@'localhost';

ALTER USER 'tiendaonlinedamdaw'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON tiendaonlinedamdaw.* 
TO 'tiendaonlinedamdaw'@'localhost';

FLUSH PRIVILEGES;

```
**alter descripciones largas.sql**
```sql
-- =====================================================
-- AÑADIR DESCRIPCIÓN EXTENSA A PRODUCTOS
-- =====================================================

ALTER TABLE producto
ADD COLUMN descripcion_larga TEXT
AFTER descripcion;

-- =====================================================
-- ACTUALIZAR DESCRIPCIONES LARGAS DE PRODUCTO
-- =====================================================

UPDATE producto SET descripcion_larga =
'Portátil de 15 pulgadas diseñado para un uso intensivo tanto en entornos profesionales como educativos. Incorpora una pantalla amplia que permite trabajar cómodamente con documentos, hojas de cálculo y aplicaciones multitarea. Ideal para estudiantes, docentes y trabajadores que necesitan fiabilidad, buen rendimiento y una experiencia equilibrada entre potencia y portabilidad.'
WHERE id = 1;

UPDATE producto SET descripcion_larga =
'Ultrabook compacto y ligero con pantalla de 13 pulgadas, pensado para usuarios que se desplazan con frecuencia. Ofrece un alto rendimiento en un formato reducido, con arranque rápido, bajo consumo energético y un diseño elegante. Perfecto para profesionales que buscan movilidad sin renunciar a potencia.'
WHERE id = 2;

UPDATE producto SET descripcion_larga =
'Ordenador de sobremesa orientado a tareas de oficina, administración y uso doméstico avanzado. Su arquitectura permite una buena ventilación y futuras ampliaciones. Ideal para empresas, centros educativos o usuarios que necesitan estabilidad y rendimiento continuo durante largas jornadas.'
WHERE id = 3;

UPDATE producto SET descripcion_larga =
'Monitor Full HD de 24 pulgadas con excelente reproducción de color y amplio ángulo de visión. Adecuado para trabajo diario, programación, diseño básico y consumo multimedia. Su tamaño ofrece un equilibrio perfecto entre espacio de trabajo y comodidad visual.'
WHERE id = 4;

UPDATE producto SET descripcion_larga =
'Monitor QHD de 27 pulgadas pensado para usuarios exigentes que necesitan mayor resolución y espacio visual. Ideal para diseño gráfico, edición de vídeo, análisis de datos y multitarea avanzada. Proporciona una experiencia visual más nítida y detallada.'
WHERE id = 5;

UPDATE producto SET descripcion_larga =
'Teclado mecánico con retroiluminación, diseñado para ofrecer una pulsación precisa y duradera. Especialmente recomendado para programación, escritura intensiva y gaming. Su construcción robusta garantiza una larga vida útil incluso con uso intensivo.'
WHERE id = 6;

UPDATE producto SET descripcion_larga =
'Teclado inalámbrico silencioso y cómodo, ideal para entornos de oficina o estudio. Su diseño compacto y sin cables ayuda a mantener el escritorio ordenado. Perfecto para usuarios que buscan comodidad y discreción en el uso diario.'
WHERE id = 7;

UPDATE producto SET descripcion_larga =
'Ratón inalámbrico de alta precisión, fácil de instalar mediante receptor USB. Ofrece libertad de movimiento y ergonomía para un uso prolongado. Adecuado para tareas ofimáticas, navegación web y trabajo diario.'
WHERE id = 8;

UPDATE producto SET descripcion_larga =
'Ratón gaming con iluminación RGB y sensor de alta precisión. Diseñado para jugadores que requieren velocidad, exactitud y personalización. También es una excelente opción para diseñadores y usuarios avanzados.'
WHERE id = 9;

UPDATE producto SET descripcion_larga =
'Auriculares Bluetooth con micrófono integrado, pensados para llamadas, videoconferencias y consumo multimedia. Ofrecen libertad de movimiento y buena calidad de sonido, siendo una opción versátil tanto para trabajo como para ocio.'
WHERE id = 10;

UPDATE producto SET descripcion_larga =
'Auriculares gaming con sonido envolvente que permiten una experiencia inmersiva en videojuegos. Incorporan micrófono ajustable y diseño cómodo para largas sesiones. Recomendados para gamers y usuarios exigentes.'
WHERE id = 11;

UPDATE producto SET descripcion_larga =
'Cámara web HD ideal para videollamadas, clases online y reuniones profesionales. Ofrece imagen clara y configuración sencilla. Muy utilizada en entornos educativos y de teletrabajo.'
WHERE id = 12;

UPDATE producto SET descripcion_larga =
'Impresora láser monocromo orientada a oficinas y hogares con alto volumen de impresión. Destaca por su velocidad, bajo coste por página y fiabilidad. Ideal para documentos de texto y uso administrativo.'
WHERE id = 13;

UPDATE producto SET descripcion_larga =
'Unidad SSD de 1TB que mejora notablemente el rendimiento del sistema. Reduce los tiempos de arranque y carga de aplicaciones. Recomendado tanto para actualizar equipos antiguos como para configuraciones nuevas.'
WHERE id = 14;

UPDATE producto SET descripcion_larga =
'Disco duro mecánico de 2TB pensado para almacenamiento masivo de datos, copias de seguridad y archivos multimedia. Solución económica para grandes volúmenes de información.'
WHERE id = 15;

UPDATE producto SET descripcion_larga =
'Memoria USB de 64GB con conexión USB 3.0 para transferencias rápidas. Ideal para transportar documentos, proyectos y material multimedia de forma cómoda y segura.'
WHERE id = 16;

UPDATE producto SET descripcion_larga =
'Router WiFi de doble banda que garantiza una conexión estable y rápida en hogares y oficinas. Permite conectar múltiples dispositivos simultáneamente manteniendo un buen rendimiento.'
WHERE id = 17;

UPDATE producto SET descripcion_larga =
'Tablet Android de 10 pulgadas adecuada para consumo multimedia, navegación, educación y tareas ligeras. Su tamaño la hace cómoda para lectura, vídeo y aplicaciones educativas.'
WHERE id = 18;

UPDATE producto SET descripcion_larga =
'Smartphone con 128GB de almacenamiento interno, pensado para usuarios que necesitan espacio para aplicaciones, fotos y vídeos. Combina buen rendimiento con una experiencia fluida en el día a día.'
WHERE id = 19;

UPDATE producto SET descripcion_larga =
'Silla gaming ergonómica diseñada para largas sesiones frente al ordenador. Proporciona soporte lumbar, ajuste de altura y comodidad, siendo adecuada tanto para gaming como para trabajo de oficina.'
WHERE id = 20;

```
**datosdemuestra.sql**
```sql
-- =====================================================
-- DATOS DE MUESTRA AMPLIADOS PARA TIENDA ONLINE
-- Orden correcto según claves foráneas
-- =====================================================

-- =====================
-- PRODUCTOS (20)
-- =====================
INSERT INTO producto VALUES
(1,  'Portátil 15"',              'Portátil para trabajo y estudio',                 '799.99', '25',  'portatil15.jpg'),
(2,  'Portátil 13"',              'Ultrabook ligero y potente',                      '999.99', '15',  'portatil13.jpg'),
(3,  'PC Sobremesa',              'Ordenador de sobremesa para oficina',             '699.00', '10',  'pc.jpg'),
(4,  'Monitor 24"',               'Monitor Full HD 24 pulgadas',                     '179.00', '40',  'monitor24.jpg'),
(5,  'Monitor 27"',               'Monitor QHD 27 pulgadas',                         '299.00', '30',  'monitor27.jpg'),
(6,  'Teclado mecánico',          'Teclado mecánico retroiluminado',                 '89.50',  '60',  'teclado_mec.jpg'),
(7,  'Teclado inalámbrico',       'Teclado inalámbrico silencioso',                  '39.90',  '100', 'teclado_wireless.jpg'),
(8,  'Ratón inalámbrico',         'Ratón óptico inalámbrico USB',                    '19.90',  '150', 'raton_wireless.jpg'),
(9,  'Ratón gaming',              'Ratón gaming RGB alta precisión',                '49.90',  '70',  'raton_gaming.jpg'),
(10, 'Auriculares Bluetooth',     'Auriculares inalámbricos con micrófono',          '59.99',  '80',  'auriculares_bt.jpg'),
(11, 'Auriculares gaming',        'Auriculares gaming con sonido envolvente',        '79.99',  '50',  'auriculares_gaming.jpg'),
(12, 'Webcam HD',                 'Cámara web HD para videollamadas',                '49.00',  '90',  'webcam.jpg'),
(13, 'Impresora láser',           'Impresora láser monocromo',                       '129.00', '20',  'impresora_laser.jpg'),
(14, 'Disco SSD 1TB',             'Disco sólido SSD 1TB SATA',                       '109.00', '75',  'ssd1tb.jpg'),
(15, 'Disco duro 2TB',            'Disco duro mecánico 2TB',                         '79.00',  '60',  'hdd2tb.jpg'),
(16, 'Memoria USB 64GB',          'Pendrive USB 3.0 64GB',                           '14.90',  '200', 'usb64.jpg'),
(17, 'Router WiFi',               'Router WiFi de doble banda',                      '69.00',  '45',  'router.jpg'),
(18, 'Tablet 10"',                'Tablet Android 10 pulgadas',                     '199.00', '35',  'tablet.jpg'),
(19, 'Smartphone 128GB',          'Teléfono móvil 128GB',                            '349.00', '55',  'smartphone.jpg'),
(20, 'Silla gaming',              'Silla ergonómica para escritorio',                '189.00', '25',  'silla_gaming.jpg');

-- =====================
-- CLIENTES (10)
-- =====================
INSERT INTO cliente VALUES
(1,  'Ana',     'Martínez López',   'ana.martinez@email.com',     'C/ Mayor 12, Madrid',          '600123456'),
(2,  'Carlos',  'Pérez Gómez',      'carlos.perez@email.com',    'Av. Libertad 45, Valencia',    '611234567'),
(3,  'Laura',   'Sánchez Ruiz',     'laura.sanchez@email.com',   'C/ del Mar 8, Alicante',       '622345678'),
(4,  'Javier',  'López Torres',     'javier.lopez@email.com',    'Gran Vía 101, Madrid',         '633456789'),
(5,  'Marta',   'Gómez Fernández',  'marta.gomez@email.com',     'C/ Colón 3, Castellón',       '644567890'),
(6,  'David',   'Ruiz Molina',      'david.ruiz@email.com',      'Av. Europa 22, Murcia',       '655678901'),
(7,  'Lucía',   'Navarro Pérez',    'lucia.navarro@email.com',   'C/ Serranos 7, Valencia',     '666789012'),
(8,  'Pablo',   'Hernández Gil',    'pablo.hernandez@email.com', 'C/ San Juan 19, Elche',       '677890123'),
(9,  'Sonia',   'Romero Díaz',      'sonia.romero@email.com',    'Av. Mediterráneo 5, Benidorm','688901234'),
(10, 'Alberto', 'Morales Cano',     'alberto.morales@email.com', 'C/ Alameda 14, Albacete',     '699012345');

-- =====================
-- PEDIDOS (15)
-- =====================
INSERT INTO pedido VALUES
(1,  '2025-12-01 10:15:00', 1),
(2,  '2025-12-01 18:40:00', 2),
(3,  '2025-12-02 09:05:00', 1),
(4,  '2025-12-02 21:30:00', 3),
(5,  '2025-12-03 11:00:00', 4),
(6,  '2025-12-03 16:20:00', 5),
(7,  '2025-12-04 12:10:00', 6),
(8,  '2025-12-04 19:45:00', 7),
(9,  '2025-12-05 08:50:00', 8),
(10, '2025-12-05 14:35:00', 9),
(11, '2025-12-06 10:05:00', 10),
(12, '2025-12-06 17:25:00', 2),
(13, '2025-12-07 09:40:00', 3),
(14, '2025-12-07 20:10:00', 6),
(15, '2025-12-08 13:55:00', 1);

-- =====================
-- LÍNEAS DE PEDIDO (30)
-- =====================
INSERT INTO lineaspedido VALUES
(1,  1,  '1',  1),
(2,  1,  '1',  8),
(3,  2,  '2', 10),
(4,  2,  '1',  4),
(5,  3,  '1',  6),
(6,  3,  '1', 14),
(7,  4,  '1', 18),
(8,  4,  '1',  9),
(9,  5,  '1',  2),
(10, 5,  '1',  7),
(11, 6,  '1', 20),
(12, 6,  '1',  5),
(13, 7,  '2', 16),
(14, 7,  '1', 12),
(15, 8,  '1', 11),
(16, 8,  '1',  9),
(17, 9,  '1', 19),
(18, 9,  '1', 17),
(19, 10, '1', 13),
(20, 10, '1', 15),
(21, 11, '1',  3),
(22, 11, '1', 14),
(23, 12, '2',  8),
(24, 12, '1',  6),
(25, 13, '1',  1),
(26, 13, '1', 10),
(27, 14, '1', 18),
(28, 14, '1', 16),
(29, 15, '1',  2),
(30, 15, '1',  4);

```
**diagrama de flujo.html**
```html
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Diagrama exportado</title>
<style>
body {
  margin: 0;
  padding: 20px;
  background: #f3f3f7;
  font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
}
.page {
  position: relative;
  background: #ffffff;
  border: 1px solid #d1d5db;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  width: 442.88284965183414px;
  height: 262.8359587296195px;
  overflow: visible;
}

/* formas básicas */
.shape {
  position: absolute;
  min-width: 120px;
  min-height: 40px;
  padding: 6px 10px;
  background: #ffffff;
  border-radius: 4px;
  border: 1px solid #9ca3af;
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
}

.shape.rectangle {
  border-radius: 4px;
}

.shape.pill {
  border-radius: 999px;
}

.shape.circle {
  border-radius: 999px;
  width: 80px;
  height: 80px;
  padding: 0;
  justify-content: center;
}

/* texto libre */
.shape.text {
  background: transparent;
  border: none;
  box-shadow: none;
  padding: 0;
  min-width: 20px;
  min-height: 20px;
}

/* base de datos */
.shape.db {
  min-width: 120px;
  min-height: 60px;
  padding-top: 20px;
  border-radius: 60px / 16px;
  background: linear-gradient(180deg, #e5e7eb 0%, #ffffff 40%, #e5e7eb 100%);
  position: absolute;
  overflow: hidden;
  text-align: center;
}
.shape.db::before {
  content: "";
  position: absolute;
  top: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid #9ca3af;
  background: radial-gradient(circle at 50% 30%, #ffffff 0%, #e5e7eb 70%);
}
.shape.db::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid rgba(156, 163, 175, 0.6);
  border-top: none;
  background: radial-gradient(circle at 50% 70%, #e5e7eb 0%, #d1d5db 70%);
}

/* entidades ER */
.shape.entity {
  width: 220px;
  min-height: 80px;
  background: #ffffff;
  border: 2px solid #111827;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.15);
  display: flex;
  flex-direction: column;
  font-size: 13px;
  overflow: hidden;
  padding: 0;
}
.entity-header {
  background: #f3f4f6;
  padding: 4px 8px;
  font-weight: 600;
  text-align: center;
  border-bottom: 1px solid #e5e7eb;
}
.entity-properties {
  flex: 1;
  padding: 4px 4px 0 4px;
}
.entity-property {
  display: grid;
  grid-template-columns: 14px 1fr 14px;
  align-items: center;
  column-gap: 4px;
  padding: 2px 0;
}
.entity-property .property-name {
  padding: 2px 4px;
  border-radius: 3px;
}

/* puertos */
.port {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1px solid #111827;
  background: #ffffff;
}
.port-left { justify-self: start; }
.port-right { justify-self: end; }

/* flechas rectas */
.arrow {
  position: absolute;
  height: 2px;
  background: #111827;
  transform-origin: 0 50%;
}
.arrow::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.arrow-double::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%) rotate(180deg);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}

/* flechas ortogonales */
.ortho-arrow {
  position: absolute;
  left: 0;
  top: 0;
}
.ortho-arrow .ortho-seg {
  position: absolute;
  background: #111827;
}
.ortho-seg.seg-horizontal { height: 2px; }
.ortho-seg.seg-vertical { width: 2px; }
.ortho-arrowhead {
  position: absolute;
  width: 0;
  height: 0;
}
.ortho-arrowhead.dir-right {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.ortho-arrowhead.dir-left {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 8px solid #111827;
}
.ortho-arrowhead.dir-down {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 8px solid #111827;
}
.ortho-arrowhead.dir-up {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 8px solid #111827;
}
</style>
</head>
<body>
<div class="page">

<div class="shape rectangle" style="left:40px;top:97.84376061480972px;width:119.99999999999994px;height:39.98437300972314px;">index</div>
<div class="shape rectangle" style="left:167.38283903702438px;top:40px;width:119.99999999999994px;height:39.984382961107315px;">Catálogo</div>
<div class="shape rectangle" style="left:282.88284965183414px;top:103.37500530740485px;width:119.99999999999994px;height:39.984382961107315px;">P Producto</div>
<div class="shape rectangle" style="left:247.37501061480964px;top:180.69530984629748px;width:119.99999999999994px;height:39.984382961107315px;">Carrito</div>
<div class="shape rectangle" style="left:86.50000530740488px;top:182.85157576851216px;width:119.99997346297549px;height:39.984382961107315px;">Finalización</div>
<div class="shape text" style="left:203.45310377038038px;top:120.25000530740485px;width:31.617219344429333px;height:19.992171577785317px;">Front</div>
<div class="arrow" style="left:144.02655822411253px;top:97.84376061480972px;width:43.194717121260936px;transform:rotate(-0.4262531013316452rad);"></div>
<div class="arrow" style="left:263.8183125650629px;top:79.98438296110731px;width:48.624667337078805px;transform:rotate(0.5018455771914861rad);"></div>
<div class="arrow" style="left:333.70182635759966px;top:143.35938826851216px;width:41.08465940897501px;transform:rotate(2.0012997385397435rad);"></div>
<div class="arrow" style="left:247.37501061480964px;top:201.49170297654248px;width:40.8787032809442px;transform:rotate(3.128190095313388rad);"></div>
<div class="arrow" style="left:135.56409527938598px;top:182.85157576851216px;width:51.31918392658071px;transform:rotate(-2.071339826124455rad);"></div>
</div>
</body>
</html>
```
**diagrama de flujo.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "rectangle",
      "left": "374.734px",
      "top": "263.499px",
      "width": "",
      "height": "",
      "texto": "index"
    },
    {
      "id": "forma-2",
      "tipo": "rectangle",
      "left": "502.111px",
      "top": "205.658px",
      "width": "",
      "height": "",
      "texto": "Catálogo"
    },
    {
      "id": "forma-3",
      "tipo": "rectangle",
      "left": "617.613px",
      "top": "269.03px",
      "width": "",
      "height": "",
      "texto": "P Producto"
    },
    {
      "id": "forma-4",
      "tipo": "rectangle",
      "left": "582.114px",
      "top": "346.349px",
      "width": "",
      "height": "",
      "texto": "Carrito"
    },
    {
      "id": "forma-5",
      "tipo": "rectangle",
      "left": "421.229px",
      "top": "348.499px",
      "width": "",
      "height": "",
      "texto": "Finalización"
    },
    {
      "id": "forma-6",
      "tipo": "text",
      "left": "538.19px",
      "top": "285.912px",
      "width": "",
      "height": "",
      "texto": "Front"
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "entity",
      "left": "447.129px",
      "top": "336.978px",
      "width": "",
      "height": "",
      "entityName": "Producto",
      "properties": [
        {
          "id": "prop-1",
          "name": "id"
        },
        {
          "id": "prop-2",
          "name": "nombre_producto"
        },
        {
          "id": "prop-3",
          "name": "descripcion"
        },
        {
          "id": "prop-4",
          "name": "precio"
        },
        {
          "id": "prop-5",
          "name": "stock"
        },
        {
          "id": "prop-6",
          "name": "imagen"
        }
      ]
    },
    {
      "id": "forma-2",
      "tipo": "entity",
      "left": "230.283px",
      "top": "62.1987px",
      "width": "",
      "height": "",
      "entityName": "Cliente",
      "properties": [
        {
          "id": "prop-7",
          "name": "id"
        },
        {
          "id": "prop-8",
          "name": "nombre_cliente"
        },
        {
          "id": "prop-9",
          "name": "apellidos"
        },
        {
          "id": "prop-10",
          "name": "email"
        },
        {
          "id": "prop-11",
          "name": "direccion"
        },
        {
          "id": "prop-12",
          "name": "telefono"
        }
      ]
    },
    {
      "id": "forma-3",
      "tipo": "entity",
      "left": "446.112px",
      "top": "136.183px",
      "width": "",
      "height": "",
      "entityName": "Pedido",
      "properties": [
        {
          "id": "prop-13",
          "name": "id"
        },
        {
          "id": "prop-14",
          "name": "fecha"
        },
        {
          "id": "prop-15",
          "name": "cliente_id"
        }
      ]
    },
    {
      "id": "forma-4",
      "tipo": "entity",
      "left": "672.018px",
      "top": "221.777px",
      "width": "",
      "height": "",
      "entityName": "LineasPedido",
      "properties": [
        {
          "id": "prop-16",
          "name": "id"
        },
        {
          "id": "prop-17",
          "name": "pedido_id"
        },
        {
          "id": "prop-18",
          "name": "cantidad"
        },
        {
          "id": "prop-19",
          "name": "producto_id"
        }
      ]
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": "prop-15",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": "prop-7",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-17",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": "prop-13",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-19",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": "prop-1",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.sql**
```sql
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);

```
###### back
###### front
**carrito.php**
```php
Esta es la pagina de carrito<br>
<a href = "catalogo.php">Vamos a la pagina de finalización</a>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));;
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
Esta es la página de finalizacion<br>
<a href="index.php">Ya has acabado, vamos a volver a empezar</a>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:800px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.5-Vamos al carrito
**Creamos BD.sql**
```sql
##################################### BD ###################################################
CREATE DATABASE tiendaonlinedamdaw;
USE tiendaonlinedamdaw;
################################### TABLAS #################################################
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);
################################### USUARIO #################################################
CREATE USER 
'tiendaonlinedamdaw'@'localhost' 
IDENTIFIED  BY 'Tiendaonlinedamdaw123$';

GRANT USAGE ON *.* TO 'tiendaonlinedamdaw'@'localhost';

ALTER USER 'tiendaonlinedamdaw'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON tiendaonlinedamdaw.* 
TO 'tiendaonlinedamdaw'@'localhost';

FLUSH PRIVILEGES;

```
**alter descripciones largas.sql**
```sql
-- =====================================================
-- AÑADIR DESCRIPCIÓN EXTENSA A PRODUCTOS
-- =====================================================

ALTER TABLE producto
ADD COLUMN descripcion_larga TEXT
AFTER descripcion;

-- =====================================================
-- ACTUALIZAR DESCRIPCIONES LARGAS DE PRODUCTO
-- =====================================================

UPDATE producto SET descripcion_larga =
'Portátil de 15 pulgadas diseñado para un uso intensivo tanto en entornos profesionales como educativos. Incorpora una pantalla amplia que permite trabajar cómodamente con documentos, hojas de cálculo y aplicaciones multitarea. Ideal para estudiantes, docentes y trabajadores que necesitan fiabilidad, buen rendimiento y una experiencia equilibrada entre potencia y portabilidad.'
WHERE id = 1;

UPDATE producto SET descripcion_larga =
'Ultrabook compacto y ligero con pantalla de 13 pulgadas, pensado para usuarios que se desplazan con frecuencia. Ofrece un alto rendimiento en un formato reducido, con arranque rápido, bajo consumo energético y un diseño elegante. Perfecto para profesionales que buscan movilidad sin renunciar a potencia.'
WHERE id = 2;

UPDATE producto SET descripcion_larga =
'Ordenador de sobremesa orientado a tareas de oficina, administración y uso doméstico avanzado. Su arquitectura permite una buena ventilación y futuras ampliaciones. Ideal para empresas, centros educativos o usuarios que necesitan estabilidad y rendimiento continuo durante largas jornadas.'
WHERE id = 3;

UPDATE producto SET descripcion_larga =
'Monitor Full HD de 24 pulgadas con excelente reproducción de color y amplio ángulo de visión. Adecuado para trabajo diario, programación, diseño básico y consumo multimedia. Su tamaño ofrece un equilibrio perfecto entre espacio de trabajo y comodidad visual.'
WHERE id = 4;

UPDATE producto SET descripcion_larga =
'Monitor QHD de 27 pulgadas pensado para usuarios exigentes que necesitan mayor resolución y espacio visual. Ideal para diseño gráfico, edición de vídeo, análisis de datos y multitarea avanzada. Proporciona una experiencia visual más nítida y detallada.'
WHERE id = 5;

UPDATE producto SET descripcion_larga =
'Teclado mecánico con retroiluminación, diseñado para ofrecer una pulsación precisa y duradera. Especialmente recomendado para programación, escritura intensiva y gaming. Su construcción robusta garantiza una larga vida útil incluso con uso intensivo.'
WHERE id = 6;

UPDATE producto SET descripcion_larga =
'Teclado inalámbrico silencioso y cómodo, ideal para entornos de oficina o estudio. Su diseño compacto y sin cables ayuda a mantener el escritorio ordenado. Perfecto para usuarios que buscan comodidad y discreción en el uso diario.'
WHERE id = 7;

UPDATE producto SET descripcion_larga =
'Ratón inalámbrico de alta precisión, fácil de instalar mediante receptor USB. Ofrece libertad de movimiento y ergonomía para un uso prolongado. Adecuado para tareas ofimáticas, navegación web y trabajo diario.'
WHERE id = 8;

UPDATE producto SET descripcion_larga =
'Ratón gaming con iluminación RGB y sensor de alta precisión. Diseñado para jugadores que requieren velocidad, exactitud y personalización. También es una excelente opción para diseñadores y usuarios avanzados.'
WHERE id = 9;

UPDATE producto SET descripcion_larga =
'Auriculares Bluetooth con micrófono integrado, pensados para llamadas, videoconferencias y consumo multimedia. Ofrecen libertad de movimiento y buena calidad de sonido, siendo una opción versátil tanto para trabajo como para ocio.'
WHERE id = 10;

UPDATE producto SET descripcion_larga =
'Auriculares gaming con sonido envolvente que permiten una experiencia inmersiva en videojuegos. Incorporan micrófono ajustable y diseño cómodo para largas sesiones. Recomendados para gamers y usuarios exigentes.'
WHERE id = 11;

UPDATE producto SET descripcion_larga =
'Cámara web HD ideal para videollamadas, clases online y reuniones profesionales. Ofrece imagen clara y configuración sencilla. Muy utilizada en entornos educativos y de teletrabajo.'
WHERE id = 12;

UPDATE producto SET descripcion_larga =
'Impresora láser monocromo orientada a oficinas y hogares con alto volumen de impresión. Destaca por su velocidad, bajo coste por página y fiabilidad. Ideal para documentos de texto y uso administrativo.'
WHERE id = 13;

UPDATE producto SET descripcion_larga =
'Unidad SSD de 1TB que mejora notablemente el rendimiento del sistema. Reduce los tiempos de arranque y carga de aplicaciones. Recomendado tanto para actualizar equipos antiguos como para configuraciones nuevas.'
WHERE id = 14;

UPDATE producto SET descripcion_larga =
'Disco duro mecánico de 2TB pensado para almacenamiento masivo de datos, copias de seguridad y archivos multimedia. Solución económica para grandes volúmenes de información.'
WHERE id = 15;

UPDATE producto SET descripcion_larga =
'Memoria USB de 64GB con conexión USB 3.0 para transferencias rápidas. Ideal para transportar documentos, proyectos y material multimedia de forma cómoda y segura.'
WHERE id = 16;

UPDATE producto SET descripcion_larga =
'Router WiFi de doble banda que garantiza una conexión estable y rápida en hogares y oficinas. Permite conectar múltiples dispositivos simultáneamente manteniendo un buen rendimiento.'
WHERE id = 17;

UPDATE producto SET descripcion_larga =
'Tablet Android de 10 pulgadas adecuada para consumo multimedia, navegación, educación y tareas ligeras. Su tamaño la hace cómoda para lectura, vídeo y aplicaciones educativas.'
WHERE id = 18;

UPDATE producto SET descripcion_larga =
'Smartphone con 128GB de almacenamiento interno, pensado para usuarios que necesitan espacio para aplicaciones, fotos y vídeos. Combina buen rendimiento con una experiencia fluida en el día a día.'
WHERE id = 19;

UPDATE producto SET descripcion_larga =
'Silla gaming ergonómica diseñada para largas sesiones frente al ordenador. Proporciona soporte lumbar, ajuste de altura y comodidad, siendo adecuada tanto para gaming como para trabajo de oficina.'
WHERE id = 20;

```
**datosdemuestra.sql**
```sql
-- =====================================================
-- DATOS DE MUESTRA AMPLIADOS PARA TIENDA ONLINE
-- Orden correcto según claves foráneas
-- =====================================================

-- =====================
-- PRODUCTOS (20)
-- =====================
INSERT INTO producto VALUES
(1,  'Portátil 15"',              'Portátil para trabajo y estudio',                 '799.99', '25',  'portatil15.jpg'),
(2,  'Portátil 13"',              'Ultrabook ligero y potente',                      '999.99', '15',  'portatil13.jpg'),
(3,  'PC Sobremesa',              'Ordenador de sobremesa para oficina',             '699.00', '10',  'pc.jpg'),
(4,  'Monitor 24"',               'Monitor Full HD 24 pulgadas',                     '179.00', '40',  'monitor24.jpg'),
(5,  'Monitor 27"',               'Monitor QHD 27 pulgadas',                         '299.00', '30',  'monitor27.jpg'),
(6,  'Teclado mecánico',          'Teclado mecánico retroiluminado',                 '89.50',  '60',  'teclado_mec.jpg'),
(7,  'Teclado inalámbrico',       'Teclado inalámbrico silencioso',                  '39.90',  '100', 'teclado_wireless.jpg'),
(8,  'Ratón inalámbrico',         'Ratón óptico inalámbrico USB',                    '19.90',  '150', 'raton_wireless.jpg'),
(9,  'Ratón gaming',              'Ratón gaming RGB alta precisión',                '49.90',  '70',  'raton_gaming.jpg'),
(10, 'Auriculares Bluetooth',     'Auriculares inalámbricos con micrófono',          '59.99',  '80',  'auriculares_bt.jpg'),
(11, 'Auriculares gaming',        'Auriculares gaming con sonido envolvente',        '79.99',  '50',  'auriculares_gaming.jpg'),
(12, 'Webcam HD',                 'Cámara web HD para videollamadas',                '49.00',  '90',  'webcam.jpg'),
(13, 'Impresora láser',           'Impresora láser monocromo',                       '129.00', '20',  'impresora_laser.jpg'),
(14, 'Disco SSD 1TB',             'Disco sólido SSD 1TB SATA',                       '109.00', '75',  'ssd1tb.jpg'),
(15, 'Disco duro 2TB',            'Disco duro mecánico 2TB',                         '79.00',  '60',  'hdd2tb.jpg'),
(16, 'Memoria USB 64GB',          'Pendrive USB 3.0 64GB',                           '14.90',  '200', 'usb64.jpg'),
(17, 'Router WiFi',               'Router WiFi de doble banda',                      '69.00',  '45',  'router.jpg'),
(18, 'Tablet 10"',                'Tablet Android 10 pulgadas',                     '199.00', '35',  'tablet.jpg'),
(19, 'Smartphone 128GB',          'Teléfono móvil 128GB',                            '349.00', '55',  'smartphone.jpg'),
(20, 'Silla gaming',              'Silla ergonómica para escritorio',                '189.00', '25',  'silla_gaming.jpg');

-- =====================
-- CLIENTES (10)
-- =====================
INSERT INTO cliente VALUES
(1,  'Ana',     'Martínez López',   'ana.martinez@email.com',     'C/ Mayor 12, Madrid',          '600123456'),
(2,  'Carlos',  'Pérez Gómez',      'carlos.perez@email.com',    'Av. Libertad 45, Valencia',    '611234567'),
(3,  'Laura',   'Sánchez Ruiz',     'laura.sanchez@email.com',   'C/ del Mar 8, Alicante',       '622345678'),
(4,  'Javier',  'López Torres',     'javier.lopez@email.com',    'Gran Vía 101, Madrid',         '633456789'),
(5,  'Marta',   'Gómez Fernández',  'marta.gomez@email.com',     'C/ Colón 3, Castellón',       '644567890'),
(6,  'David',   'Ruiz Molina',      'david.ruiz@email.com',      'Av. Europa 22, Murcia',       '655678901'),
(7,  'Lucía',   'Navarro Pérez',    'lucia.navarro@email.com',   'C/ Serranos 7, Valencia',     '666789012'),
(8,  'Pablo',   'Hernández Gil',    'pablo.hernandez@email.com', 'C/ San Juan 19, Elche',       '677890123'),
(9,  'Sonia',   'Romero Díaz',      'sonia.romero@email.com',    'Av. Mediterráneo 5, Benidorm','688901234'),
(10, 'Alberto', 'Morales Cano',     'alberto.morales@email.com', 'C/ Alameda 14, Albacete',     '699012345');

-- =====================
-- PEDIDOS (15)
-- =====================
INSERT INTO pedido VALUES
(1,  '2025-12-01 10:15:00', 1),
(2,  '2025-12-01 18:40:00', 2),
(3,  '2025-12-02 09:05:00', 1),
(4,  '2025-12-02 21:30:00', 3),
(5,  '2025-12-03 11:00:00', 4),
(6,  '2025-12-03 16:20:00', 5),
(7,  '2025-12-04 12:10:00', 6),
(8,  '2025-12-04 19:45:00', 7),
(9,  '2025-12-05 08:50:00', 8),
(10, '2025-12-05 14:35:00', 9),
(11, '2025-12-06 10:05:00', 10),
(12, '2025-12-06 17:25:00', 2),
(13, '2025-12-07 09:40:00', 3),
(14, '2025-12-07 20:10:00', 6),
(15, '2025-12-08 13:55:00', 1);

-- =====================
-- LÍNEAS DE PEDIDO (30)
-- =====================
INSERT INTO lineaspedido VALUES
(1,  1,  '1',  1),
(2,  1,  '1',  8),
(3,  2,  '2', 10),
(4,  2,  '1',  4),
(5,  3,  '1',  6),
(6,  3,  '1', 14),
(7,  4,  '1', 18),
(8,  4,  '1',  9),
(9,  5,  '1',  2),
(10, 5,  '1',  7),
(11, 6,  '1', 20),
(12, 6,  '1',  5),
(13, 7,  '2', 16),
(14, 7,  '1', 12),
(15, 8,  '1', 11),
(16, 8,  '1',  9),
(17, 9,  '1', 19),
(18, 9,  '1', 17),
(19, 10, '1', 13),
(20, 10, '1', 15),
(21, 11, '1',  3),
(22, 11, '1', 14),
(23, 12, '2',  8),
(24, 12, '1',  6),
(25, 13, '1',  1),
(26, 13, '1', 10),
(27, 14, '1', 18),
(28, 14, '1', 16),
(29, 15, '1',  2),
(30, 15, '1',  4);

```
**diagrama de flujo.html**
```html
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Diagrama exportado</title>
<style>
body {
  margin: 0;
  padding: 20px;
  background: #f3f3f7;
  font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
}
.page {
  position: relative;
  background: #ffffff;
  border: 1px solid #d1d5db;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  width: 442.88284965183414px;
  height: 262.8359587296195px;
  overflow: visible;
}

/* formas básicas */
.shape {
  position: absolute;
  min-width: 120px;
  min-height: 40px;
  padding: 6px 10px;
  background: #ffffff;
  border-radius: 4px;
  border: 1px solid #9ca3af;
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
}

.shape.rectangle {
  border-radius: 4px;
}

.shape.pill {
  border-radius: 999px;
}

.shape.circle {
  border-radius: 999px;
  width: 80px;
  height: 80px;
  padding: 0;
  justify-content: center;
}

/* texto libre */
.shape.text {
  background: transparent;
  border: none;
  box-shadow: none;
  padding: 0;
  min-width: 20px;
  min-height: 20px;
}

/* base de datos */
.shape.db {
  min-width: 120px;
  min-height: 60px;
  padding-top: 20px;
  border-radius: 60px / 16px;
  background: linear-gradient(180deg, #e5e7eb 0%, #ffffff 40%, #e5e7eb 100%);
  position: absolute;
  overflow: hidden;
  text-align: center;
}
.shape.db::before {
  content: "";
  position: absolute;
  top: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid #9ca3af;
  background: radial-gradient(circle at 50% 30%, #ffffff 0%, #e5e7eb 70%);
}
.shape.db::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid rgba(156, 163, 175, 0.6);
  border-top: none;
  background: radial-gradient(circle at 50% 70%, #e5e7eb 0%, #d1d5db 70%);
}

/* entidades ER */
.shape.entity {
  width: 220px;
  min-height: 80px;
  background: #ffffff;
  border: 2px solid #111827;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.15);
  display: flex;
  flex-direction: column;
  font-size: 13px;
  overflow: hidden;
  padding: 0;
}
.entity-header {
  background: #f3f4f6;
  padding: 4px 8px;
  font-weight: 600;
  text-align: center;
  border-bottom: 1px solid #e5e7eb;
}
.entity-properties {
  flex: 1;
  padding: 4px 4px 0 4px;
}
.entity-property {
  display: grid;
  grid-template-columns: 14px 1fr 14px;
  align-items: center;
  column-gap: 4px;
  padding: 2px 0;
}
.entity-property .property-name {
  padding: 2px 4px;
  border-radius: 3px;
}

/* puertos */
.port {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1px solid #111827;
  background: #ffffff;
}
.port-left { justify-self: start; }
.port-right { justify-self: end; }

/* flechas rectas */
.arrow {
  position: absolute;
  height: 2px;
  background: #111827;
  transform-origin: 0 50%;
}
.arrow::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.arrow-double::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%) rotate(180deg);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}

/* flechas ortogonales */
.ortho-arrow {
  position: absolute;
  left: 0;
  top: 0;
}
.ortho-arrow .ortho-seg {
  position: absolute;
  background: #111827;
}
.ortho-seg.seg-horizontal { height: 2px; }
.ortho-seg.seg-vertical { width: 2px; }
.ortho-arrowhead {
  position: absolute;
  width: 0;
  height: 0;
}
.ortho-arrowhead.dir-right {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.ortho-arrowhead.dir-left {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 8px solid #111827;
}
.ortho-arrowhead.dir-down {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 8px solid #111827;
}
.ortho-arrowhead.dir-up {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 8px solid #111827;
}
</style>
</head>
<body>
<div class="page">

<div class="shape rectangle" style="left:40px;top:97.84376061480972px;width:119.99999999999994px;height:39.98437300972314px;">index</div>
<div class="shape rectangle" style="left:167.38283903702438px;top:40px;width:119.99999999999994px;height:39.984382961107315px;">Catálogo</div>
<div class="shape rectangle" style="left:282.88284965183414px;top:103.37500530740485px;width:119.99999999999994px;height:39.984382961107315px;">P Producto</div>
<div class="shape rectangle" style="left:247.37501061480964px;top:180.69530984629748px;width:119.99999999999994px;height:39.984382961107315px;">Carrito</div>
<div class="shape rectangle" style="left:86.50000530740488px;top:182.85157576851216px;width:119.99997346297549px;height:39.984382961107315px;">Finalización</div>
<div class="shape text" style="left:203.45310377038038px;top:120.25000530740485px;width:31.617219344429333px;height:19.992171577785317px;">Front</div>
<div class="arrow" style="left:144.02655822411253px;top:97.84376061480972px;width:43.194717121260936px;transform:rotate(-0.4262531013316452rad);"></div>
<div class="arrow" style="left:263.8183125650629px;top:79.98438296110731px;width:48.624667337078805px;transform:rotate(0.5018455771914861rad);"></div>
<div class="arrow" style="left:333.70182635759966px;top:143.35938826851216px;width:41.08465940897501px;transform:rotate(2.0012997385397435rad);"></div>
<div class="arrow" style="left:247.37501061480964px;top:201.49170297654248px;width:40.8787032809442px;transform:rotate(3.128190095313388rad);"></div>
<div class="arrow" style="left:135.56409527938598px;top:182.85157576851216px;width:51.31918392658071px;transform:rotate(-2.071339826124455rad);"></div>
</div>
</body>
</html>
```
**diagrama de flujo.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "rectangle",
      "left": "374.734px",
      "top": "263.499px",
      "width": "",
      "height": "",
      "texto": "index"
    },
    {
      "id": "forma-2",
      "tipo": "rectangle",
      "left": "502.111px",
      "top": "205.658px",
      "width": "",
      "height": "",
      "texto": "Catálogo"
    },
    {
      "id": "forma-3",
      "tipo": "rectangle",
      "left": "617.613px",
      "top": "269.03px",
      "width": "",
      "height": "",
      "texto": "P Producto"
    },
    {
      "id": "forma-4",
      "tipo": "rectangle",
      "left": "582.114px",
      "top": "346.349px",
      "width": "",
      "height": "",
      "texto": "Carrito"
    },
    {
      "id": "forma-5",
      "tipo": "rectangle",
      "left": "421.229px",
      "top": "348.499px",
      "width": "",
      "height": "",
      "texto": "Finalización"
    },
    {
      "id": "forma-6",
      "tipo": "text",
      "left": "538.19px",
      "top": "285.912px",
      "width": "",
      "height": "",
      "texto": "Front"
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "entity",
      "left": "447.129px",
      "top": "336.978px",
      "width": "",
      "height": "",
      "entityName": "Producto",
      "properties": [
        {
          "id": "prop-1",
          "name": "id"
        },
        {
          "id": "prop-2",
          "name": "nombre_producto"
        },
        {
          "id": "prop-3",
          "name": "descripcion"
        },
        {
          "id": "prop-4",
          "name": "precio"
        },
        {
          "id": "prop-5",
          "name": "stock"
        },
        {
          "id": "prop-6",
          "name": "imagen"
        }
      ]
    },
    {
      "id": "forma-2",
      "tipo": "entity",
      "left": "230.283px",
      "top": "62.1987px",
      "width": "",
      "height": "",
      "entityName": "Cliente",
      "properties": [
        {
          "id": "prop-7",
          "name": "id"
        },
        {
          "id": "prop-8",
          "name": "nombre_cliente"
        },
        {
          "id": "prop-9",
          "name": "apellidos"
        },
        {
          "id": "prop-10",
          "name": "email"
        },
        {
          "id": "prop-11",
          "name": "direccion"
        },
        {
          "id": "prop-12",
          "name": "telefono"
        }
      ]
    },
    {
      "id": "forma-3",
      "tipo": "entity",
      "left": "446.112px",
      "top": "136.183px",
      "width": "",
      "height": "",
      "entityName": "Pedido",
      "properties": [
        {
          "id": "prop-13",
          "name": "id"
        },
        {
          "id": "prop-14",
          "name": "fecha"
        },
        {
          "id": "prop-15",
          "name": "cliente_id"
        }
      ]
    },
    {
      "id": "forma-4",
      "tipo": "entity",
      "left": "672.018px",
      "top": "221.777px",
      "width": "",
      "height": "",
      "entityName": "LineasPedido",
      "properties": [
        {
          "id": "prop-16",
          "name": "id"
        },
        {
          "id": "prop-17",
          "name": "pedido_id"
        },
        {
          "id": "prop-18",
          "name": "cantidad"
        },
        {
          "id": "prop-19",
          "name": "producto_id"
        }
      ]
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": "prop-15",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": "prop-7",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-17",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": "prop-13",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-19",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": "prop-1",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.sql**
```sql
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);

```
###### back
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizar.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));;
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
Esta es la página de finalizacion<br>
<a href="index.php">Ya has acabado, vamos a volver a empezar</a>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.6-Vamos a finzalizar
**Creamos BD.sql**
```sql
##################################### BD ###################################################
CREATE DATABASE tiendaonlinedamdaw;
USE tiendaonlinedamdaw;
################################### TABLAS #################################################
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);
################################### USUARIO #################################################
CREATE USER 
'tiendaonlinedamdaw'@'localhost' 
IDENTIFIED  BY 'Tiendaonlinedamdaw123$';

GRANT USAGE ON *.* TO 'tiendaonlinedamdaw'@'localhost';

ALTER USER 'tiendaonlinedamdaw'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON tiendaonlinedamdaw.* 
TO 'tiendaonlinedamdaw'@'localhost';

FLUSH PRIVILEGES;

```
**alter descripciones largas.sql**
```sql
-- =====================================================
-- AÑADIR DESCRIPCIÓN EXTENSA A PRODUCTOS
-- =====================================================

ALTER TABLE producto
ADD COLUMN descripcion_larga TEXT
AFTER descripcion;

-- =====================================================
-- ACTUALIZAR DESCRIPCIONES LARGAS DE PRODUCTO
-- =====================================================

UPDATE producto SET descripcion_larga =
'Portátil de 15 pulgadas diseñado para un uso intensivo tanto en entornos profesionales como educativos. Incorpora una pantalla amplia que permite trabajar cómodamente con documentos, hojas de cálculo y aplicaciones multitarea. Ideal para estudiantes, docentes y trabajadores que necesitan fiabilidad, buen rendimiento y una experiencia equilibrada entre potencia y portabilidad.'
WHERE id = 1;

UPDATE producto SET descripcion_larga =
'Ultrabook compacto y ligero con pantalla de 13 pulgadas, pensado para usuarios que se desplazan con frecuencia. Ofrece un alto rendimiento en un formato reducido, con arranque rápido, bajo consumo energético y un diseño elegante. Perfecto para profesionales que buscan movilidad sin renunciar a potencia.'
WHERE id = 2;

UPDATE producto SET descripcion_larga =
'Ordenador de sobremesa orientado a tareas de oficina, administración y uso doméstico avanzado. Su arquitectura permite una buena ventilación y futuras ampliaciones. Ideal para empresas, centros educativos o usuarios que necesitan estabilidad y rendimiento continuo durante largas jornadas.'
WHERE id = 3;

UPDATE producto SET descripcion_larga =
'Monitor Full HD de 24 pulgadas con excelente reproducción de color y amplio ángulo de visión. Adecuado para trabajo diario, programación, diseño básico y consumo multimedia. Su tamaño ofrece un equilibrio perfecto entre espacio de trabajo y comodidad visual.'
WHERE id = 4;

UPDATE producto SET descripcion_larga =
'Monitor QHD de 27 pulgadas pensado para usuarios exigentes que necesitan mayor resolución y espacio visual. Ideal para diseño gráfico, edición de vídeo, análisis de datos y multitarea avanzada. Proporciona una experiencia visual más nítida y detallada.'
WHERE id = 5;

UPDATE producto SET descripcion_larga =
'Teclado mecánico con retroiluminación, diseñado para ofrecer una pulsación precisa y duradera. Especialmente recomendado para programación, escritura intensiva y gaming. Su construcción robusta garantiza una larga vida útil incluso con uso intensivo.'
WHERE id = 6;

UPDATE producto SET descripcion_larga =
'Teclado inalámbrico silencioso y cómodo, ideal para entornos de oficina o estudio. Su diseño compacto y sin cables ayuda a mantener el escritorio ordenado. Perfecto para usuarios que buscan comodidad y discreción en el uso diario.'
WHERE id = 7;

UPDATE producto SET descripcion_larga =
'Ratón inalámbrico de alta precisión, fácil de instalar mediante receptor USB. Ofrece libertad de movimiento y ergonomía para un uso prolongado. Adecuado para tareas ofimáticas, navegación web y trabajo diario.'
WHERE id = 8;

UPDATE producto SET descripcion_larga =
'Ratón gaming con iluminación RGB y sensor de alta precisión. Diseñado para jugadores que requieren velocidad, exactitud y personalización. También es una excelente opción para diseñadores y usuarios avanzados.'
WHERE id = 9;

UPDATE producto SET descripcion_larga =
'Auriculares Bluetooth con micrófono integrado, pensados para llamadas, videoconferencias y consumo multimedia. Ofrecen libertad de movimiento y buena calidad de sonido, siendo una opción versátil tanto para trabajo como para ocio.'
WHERE id = 10;

UPDATE producto SET descripcion_larga =
'Auriculares gaming con sonido envolvente que permiten una experiencia inmersiva en videojuegos. Incorporan micrófono ajustable y diseño cómodo para largas sesiones. Recomendados para gamers y usuarios exigentes.'
WHERE id = 11;

UPDATE producto SET descripcion_larga =
'Cámara web HD ideal para videollamadas, clases online y reuniones profesionales. Ofrece imagen clara y configuración sencilla. Muy utilizada en entornos educativos y de teletrabajo.'
WHERE id = 12;

UPDATE producto SET descripcion_larga =
'Impresora láser monocromo orientada a oficinas y hogares con alto volumen de impresión. Destaca por su velocidad, bajo coste por página y fiabilidad. Ideal para documentos de texto y uso administrativo.'
WHERE id = 13;

UPDATE producto SET descripcion_larga =
'Unidad SSD de 1TB que mejora notablemente el rendimiento del sistema. Reduce los tiempos de arranque y carga de aplicaciones. Recomendado tanto para actualizar equipos antiguos como para configuraciones nuevas.'
WHERE id = 14;

UPDATE producto SET descripcion_larga =
'Disco duro mecánico de 2TB pensado para almacenamiento masivo de datos, copias de seguridad y archivos multimedia. Solución económica para grandes volúmenes de información.'
WHERE id = 15;

UPDATE producto SET descripcion_larga =
'Memoria USB de 64GB con conexión USB 3.0 para transferencias rápidas. Ideal para transportar documentos, proyectos y material multimedia de forma cómoda y segura.'
WHERE id = 16;

UPDATE producto SET descripcion_larga =
'Router WiFi de doble banda que garantiza una conexión estable y rápida en hogares y oficinas. Permite conectar múltiples dispositivos simultáneamente manteniendo un buen rendimiento.'
WHERE id = 17;

UPDATE producto SET descripcion_larga =
'Tablet Android de 10 pulgadas adecuada para consumo multimedia, navegación, educación y tareas ligeras. Su tamaño la hace cómoda para lectura, vídeo y aplicaciones educativas.'
WHERE id = 18;

UPDATE producto SET descripcion_larga =
'Smartphone con 128GB de almacenamiento interno, pensado para usuarios que necesitan espacio para aplicaciones, fotos y vídeos. Combina buen rendimiento con una experiencia fluida en el día a día.'
WHERE id = 19;

UPDATE producto SET descripcion_larga =
'Silla gaming ergonómica diseñada para largas sesiones frente al ordenador. Proporciona soporte lumbar, ajuste de altura y comodidad, siendo adecuada tanto para gaming como para trabajo de oficina.'
WHERE id = 20;

```
**alterar ids.sql**
```sql
-- 1) Quitar FKs (las que te bloquean)
ALTER TABLE lineaspedido DROP FOREIGN KEY fk_lineaspedido_1;
ALTER TABLE lineaspedido DROP FOREIGN KEY fk_lineaspedido_2;
ALTER TABLE pedido      DROP FOREIGN KEY fk_pedido_1;

-- 2) Poner AUTO_INCREMENT en las PK
ALTER TABLE producto    MODIFY id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE cliente     MODIFY id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE pedido      MODIFY id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE lineaspedido MODIFY id INT NOT NULL AUTO_INCREMENT;

-- 3) Volver a crear FKs (mismo nombre y columnas)
ALTER TABLE pedido
  ADD CONSTRAINT fk_pedido_1
  FOREIGN KEY (cliente_id) REFERENCES cliente(id);

ALTER TABLE lineaspedido
  ADD CONSTRAINT fk_lineaspedido_1
  FOREIGN KEY (producto_id) REFERENCES producto(id);

ALTER TABLE lineaspedido
  ADD CONSTRAINT fk_lineaspedido_2
  FOREIGN KEY (pedido_id) REFERENCES pedido(id);

```
**datosdemuestra.sql**
```sql
-- =====================================================
-- DATOS DE MUESTRA AMPLIADOS PARA TIENDA ONLINE
-- Orden correcto según claves foráneas
-- =====================================================

-- =====================
-- PRODUCTOS (20)
-- =====================
INSERT INTO producto VALUES
(1,  'Portátil 15"',              'Portátil para trabajo y estudio',                 '799.99', '25',  'portatil15.jpg'),
(2,  'Portátil 13"',              'Ultrabook ligero y potente',                      '999.99', '15',  'portatil13.jpg'),
(3,  'PC Sobremesa',              'Ordenador de sobremesa para oficina',             '699.00', '10',  'pc.jpg'),
(4,  'Monitor 24"',               'Monitor Full HD 24 pulgadas',                     '179.00', '40',  'monitor24.jpg'),
(5,  'Monitor 27"',               'Monitor QHD 27 pulgadas',                         '299.00', '30',  'monitor27.jpg'),
(6,  'Teclado mecánico',          'Teclado mecánico retroiluminado',                 '89.50',  '60',  'teclado_mec.jpg'),
(7,  'Teclado inalámbrico',       'Teclado inalámbrico silencioso',                  '39.90',  '100', 'teclado_wireless.jpg'),
(8,  'Ratón inalámbrico',         'Ratón óptico inalámbrico USB',                    '19.90',  '150', 'raton_wireless.jpg'),
(9,  'Ratón gaming',              'Ratón gaming RGB alta precisión',                '49.90',  '70',  'raton_gaming.jpg'),
(10, 'Auriculares Bluetooth',     'Auriculares inalámbricos con micrófono',          '59.99',  '80',  'auriculares_bt.jpg'),
(11, 'Auriculares gaming',        'Auriculares gaming con sonido envolvente',        '79.99',  '50',  'auriculares_gaming.jpg'),
(12, 'Webcam HD',                 'Cámara web HD para videollamadas',                '49.00',  '90',  'webcam.jpg'),
(13, 'Impresora láser',           'Impresora láser monocromo',                       '129.00', '20',  'impresora_laser.jpg'),
(14, 'Disco SSD 1TB',             'Disco sólido SSD 1TB SATA',                       '109.00', '75',  'ssd1tb.jpg'),
(15, 'Disco duro 2TB',            'Disco duro mecánico 2TB',                         '79.00',  '60',  'hdd2tb.jpg'),
(16, 'Memoria USB 64GB',          'Pendrive USB 3.0 64GB',                           '14.90',  '200', 'usb64.jpg'),
(17, 'Router WiFi',               'Router WiFi de doble banda',                      '69.00',  '45',  'router.jpg'),
(18, 'Tablet 10"',                'Tablet Android 10 pulgadas',                     '199.00', '35',  'tablet.jpg'),
(19, 'Smartphone 128GB',          'Teléfono móvil 128GB',                            '349.00', '55',  'smartphone.jpg'),
(20, 'Silla gaming',              'Silla ergonómica para escritorio',                '189.00', '25',  'silla_gaming.jpg');

-- =====================
-- CLIENTES (10)
-- =====================
INSERT INTO cliente VALUES
(1,  'Ana',     'Martínez López',   'ana.martinez@email.com',     'C/ Mayor 12, Madrid',          '600123456'),
(2,  'Carlos',  'Pérez Gómez',      'carlos.perez@email.com',    'Av. Libertad 45, Valencia',    '611234567'),
(3,  'Laura',   'Sánchez Ruiz',     'laura.sanchez@email.com',   'C/ del Mar 8, Alicante',       '622345678'),
(4,  'Javier',  'López Torres',     'javier.lopez@email.com',    'Gran Vía 101, Madrid',         '633456789'),
(5,  'Marta',   'Gómez Fernández',  'marta.gomez@email.com',     'C/ Colón 3, Castellón',       '644567890'),
(6,  'David',   'Ruiz Molina',      'david.ruiz@email.com',      'Av. Europa 22, Murcia',       '655678901'),
(7,  'Lucía',   'Navarro Pérez',    'lucia.navarro@email.com',   'C/ Serranos 7, Valencia',     '666789012'),
(8,  'Pablo',   'Hernández Gil',    'pablo.hernandez@email.com', 'C/ San Juan 19, Elche',       '677890123'),
(9,  'Sonia',   'Romero Díaz',      'sonia.romero@email.com',    'Av. Mediterráneo 5, Benidorm','688901234'),
(10, 'Alberto', 'Morales Cano',     'alberto.morales@email.com', 'C/ Alameda 14, Albacete',     '699012345');

-- =====================
-- PEDIDOS (15)
-- =====================
INSERT INTO pedido VALUES
(1,  '2025-12-01 10:15:00', 1),
(2,  '2025-12-01 18:40:00', 2),
(3,  '2025-12-02 09:05:00', 1),
(4,  '2025-12-02 21:30:00', 3),
(5,  '2025-12-03 11:00:00', 4),
(6,  '2025-12-03 16:20:00', 5),
(7,  '2025-12-04 12:10:00', 6),
(8,  '2025-12-04 19:45:00', 7),
(9,  '2025-12-05 08:50:00', 8),
(10, '2025-12-05 14:35:00', 9),
(11, '2025-12-06 10:05:00', 10),
(12, '2025-12-06 17:25:00', 2),
(13, '2025-12-07 09:40:00', 3),
(14, '2025-12-07 20:10:00', 6),
(15, '2025-12-08 13:55:00', 1);

-- =====================
-- LÍNEAS DE PEDIDO (30)
-- =====================
INSERT INTO lineaspedido VALUES
(1,  1,  '1',  1),
(2,  1,  '1',  8),
(3,  2,  '2', 10),
(4,  2,  '1',  4),
(5,  3,  '1',  6),
(6,  3,  '1', 14),
(7,  4,  '1', 18),
(8,  4,  '1',  9),
(9,  5,  '1',  2),
(10, 5,  '1',  7),
(11, 6,  '1', 20),
(12, 6,  '1',  5),
(13, 7,  '2', 16),
(14, 7,  '1', 12),
(15, 8,  '1', 11),
(16, 8,  '1',  9),
(17, 9,  '1', 19),
(18, 9,  '1', 17),
(19, 10, '1', 13),
(20, 10, '1', 15),
(21, 11, '1',  3),
(22, 11, '1', 14),
(23, 12, '2',  8),
(24, 12, '1',  6),
(25, 13, '1',  1),
(26, 13, '1', 10),
(27, 14, '1', 18),
(28, 14, '1', 16),
(29, 15, '1',  2),
(30, 15, '1',  4);

```
**diagrama de flujo.html**
```html
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Diagrama exportado</title>
<style>
body {
  margin: 0;
  padding: 20px;
  background: #f3f3f7;
  font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
}
.page {
  position: relative;
  background: #ffffff;
  border: 1px solid #d1d5db;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  width: 442.88284965183414px;
  height: 262.8359587296195px;
  overflow: visible;
}

/* formas básicas */
.shape {
  position: absolute;
  min-width: 120px;
  min-height: 40px;
  padding: 6px 10px;
  background: #ffffff;
  border-radius: 4px;
  border: 1px solid #9ca3af;
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
}

.shape.rectangle {
  border-radius: 4px;
}

.shape.pill {
  border-radius: 999px;
}

.shape.circle {
  border-radius: 999px;
  width: 80px;
  height: 80px;
  padding: 0;
  justify-content: center;
}

/* texto libre */
.shape.text {
  background: transparent;
  border: none;
  box-shadow: none;
  padding: 0;
  min-width: 20px;
  min-height: 20px;
}

/* base de datos */
.shape.db {
  min-width: 120px;
  min-height: 60px;
  padding-top: 20px;
  border-radius: 60px / 16px;
  background: linear-gradient(180deg, #e5e7eb 0%, #ffffff 40%, #e5e7eb 100%);
  position: absolute;
  overflow: hidden;
  text-align: center;
}
.shape.db::before {
  content: "";
  position: absolute;
  top: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid #9ca3af;
  background: radial-gradient(circle at 50% 30%, #ffffff 0%, #e5e7eb 70%);
}
.shape.db::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid rgba(156, 163, 175, 0.6);
  border-top: none;
  background: radial-gradient(circle at 50% 70%, #e5e7eb 0%, #d1d5db 70%);
}

/* entidades ER */
.shape.entity {
  width: 220px;
  min-height: 80px;
  background: #ffffff;
  border: 2px solid #111827;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.15);
  display: flex;
  flex-direction: column;
  font-size: 13px;
  overflow: hidden;
  padding: 0;
}
.entity-header {
  background: #f3f4f6;
  padding: 4px 8px;
  font-weight: 600;
  text-align: center;
  border-bottom: 1px solid #e5e7eb;
}
.entity-properties {
  flex: 1;
  padding: 4px 4px 0 4px;
}
.entity-property {
  display: grid;
  grid-template-columns: 14px 1fr 14px;
  align-items: center;
  column-gap: 4px;
  padding: 2px 0;
}
.entity-property .property-name {
  padding: 2px 4px;
  border-radius: 3px;
}

/* puertos */
.port {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1px solid #111827;
  background: #ffffff;
}
.port-left { justify-self: start; }
.port-right { justify-self: end; }

/* flechas rectas */
.arrow {
  position: absolute;
  height: 2px;
  background: #111827;
  transform-origin: 0 50%;
}
.arrow::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.arrow-double::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%) rotate(180deg);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}

/* flechas ortogonales */
.ortho-arrow {
  position: absolute;
  left: 0;
  top: 0;
}
.ortho-arrow .ortho-seg {
  position: absolute;
  background: #111827;
}
.ortho-seg.seg-horizontal { height: 2px; }
.ortho-seg.seg-vertical { width: 2px; }
.ortho-arrowhead {
  position: absolute;
  width: 0;
  height: 0;
}
.ortho-arrowhead.dir-right {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.ortho-arrowhead.dir-left {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 8px solid #111827;
}
.ortho-arrowhead.dir-down {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 8px solid #111827;
}
.ortho-arrowhead.dir-up {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 8px solid #111827;
}
</style>
</head>
<body>
<div class="page">

<div class="shape rectangle" style="left:40px;top:97.84376061480972px;width:119.99999999999994px;height:39.98437300972314px;">index</div>
<div class="shape rectangle" style="left:167.38283903702438px;top:40px;width:119.99999999999994px;height:39.984382961107315px;">Catálogo</div>
<div class="shape rectangle" style="left:282.88284965183414px;top:103.37500530740485px;width:119.99999999999994px;height:39.984382961107315px;">P Producto</div>
<div class="shape rectangle" style="left:247.37501061480964px;top:180.69530984629748px;width:119.99999999999994px;height:39.984382961107315px;">Carrito</div>
<div class="shape rectangle" style="left:86.50000530740488px;top:182.85157576851216px;width:119.99997346297549px;height:39.984382961107315px;">Finalización</div>
<div class="shape text" style="left:203.45310377038038px;top:120.25000530740485px;width:31.617219344429333px;height:19.992171577785317px;">Front</div>
<div class="arrow" style="left:144.02655822411253px;top:97.84376061480972px;width:43.194717121260936px;transform:rotate(-0.4262531013316452rad);"></div>
<div class="arrow" style="left:263.8183125650629px;top:79.98438296110731px;width:48.624667337078805px;transform:rotate(0.5018455771914861rad);"></div>
<div class="arrow" style="left:333.70182635759966px;top:143.35938826851216px;width:41.08465940897501px;transform:rotate(2.0012997385397435rad);"></div>
<div class="arrow" style="left:247.37501061480964px;top:201.49170297654248px;width:40.8787032809442px;transform:rotate(3.128190095313388rad);"></div>
<div class="arrow" style="left:135.56409527938598px;top:182.85157576851216px;width:51.31918392658071px;transform:rotate(-2.071339826124455rad);"></div>
</div>
</body>
</html>
```
**diagrama de flujo.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "rectangle",
      "left": "374.734px",
      "top": "263.499px",
      "width": "",
      "height": "",
      "texto": "index"
    },
    {
      "id": "forma-2",
      "tipo": "rectangle",
      "left": "502.111px",
      "top": "205.658px",
      "width": "",
      "height": "",
      "texto": "Catálogo"
    },
    {
      "id": "forma-3",
      "tipo": "rectangle",
      "left": "617.613px",
      "top": "269.03px",
      "width": "",
      "height": "",
      "texto": "P Producto"
    },
    {
      "id": "forma-4",
      "tipo": "rectangle",
      "left": "582.114px",
      "top": "346.349px",
      "width": "",
      "height": "",
      "texto": "Carrito"
    },
    {
      "id": "forma-5",
      "tipo": "rectangle",
      "left": "421.229px",
      "top": "348.499px",
      "width": "",
      "height": "",
      "texto": "Finalización"
    },
    {
      "id": "forma-6",
      "tipo": "text",
      "left": "538.19px",
      "top": "285.912px",
      "width": "",
      "height": "",
      "texto": "Front"
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "entity",
      "left": "447.129px",
      "top": "336.978px",
      "width": "",
      "height": "",
      "entityName": "Producto",
      "properties": [
        {
          "id": "prop-1",
          "name": "id"
        },
        {
          "id": "prop-2",
          "name": "nombre_producto"
        },
        {
          "id": "prop-3",
          "name": "descripcion"
        },
        {
          "id": "prop-4",
          "name": "precio"
        },
        {
          "id": "prop-5",
          "name": "stock"
        },
        {
          "id": "prop-6",
          "name": "imagen"
        }
      ]
    },
    {
      "id": "forma-2",
      "tipo": "entity",
      "left": "230.283px",
      "top": "62.1987px",
      "width": "",
      "height": "",
      "entityName": "Cliente",
      "properties": [
        {
          "id": "prop-7",
          "name": "id"
        },
        {
          "id": "prop-8",
          "name": "nombre_cliente"
        },
        {
          "id": "prop-9",
          "name": "apellidos"
        },
        {
          "id": "prop-10",
          "name": "email"
        },
        {
          "id": "prop-11",
          "name": "direccion"
        },
        {
          "id": "prop-12",
          "name": "telefono"
        }
      ]
    },
    {
      "id": "forma-3",
      "tipo": "entity",
      "left": "446.112px",
      "top": "136.183px",
      "width": "",
      "height": "",
      "entityName": "Pedido",
      "properties": [
        {
          "id": "prop-13",
          "name": "id"
        },
        {
          "id": "prop-14",
          "name": "fecha"
        },
        {
          "id": "prop-15",
          "name": "cliente_id"
        }
      ]
    },
    {
      "id": "forma-4",
      "tipo": "entity",
      "left": "672.018px",
      "top": "221.777px",
      "width": "",
      "height": "",
      "entityName": "LineasPedido",
      "properties": [
        {
          "id": "prop-16",
          "name": "id"
        },
        {
          "id": "prop-17",
          "name": "pedido_id"
        },
        {
          "id": "prop-18",
          "name": "cantidad"
        },
        {
          "id": "prop-19",
          "name": "producto_id"
        }
      ]
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": "prop-15",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": "prop-7",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-17",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": "prop-13",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-19",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": "prop-1",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.sql**
```sql
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);

```
###### back
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

Vamos a asegurarnos de que lo hemos traído todo<br>

El nombre del cliente es:<br>
<?= $_POST['nombre_cliente']?><br>
<br>
Los apellidos del cliente son<br>
<?= $_POST['apellidos']?><br>
<br>
El email del cliente es<br>
<?= $_POST['email']?><br>
<br>
La direcion del cliente es:<br>
<?= $_POST['direccion']?><br>
<br>
El teléfono del cliente es:<br>
<?= $_POST['telefono']?><br>
<br>

El producto que ha pedido es:<br>
<?= $_POST['idproducto']?><br>
<br>
La cantidad que ha pedido es:<br>
<?= $_POST['unidades']?><br>
<br>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

	// Y ahora es cuando toca guardar cosas en la base de datos
	// CUIDADO CON LAS FK
	// Aquellas tablas que no tengan dependencias, van primero
	// Las tablas que tengan dependencias van despues

	// Primero guardaremos el cliente
	// Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
	// Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
	// Tercero, guardaremos lineas de pedido (necesita un id de pedido)
	// Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  echo $sql;
  $resultado = $conexion->query($sql);
?>

<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.7-Ajustes esteticos
**Creamos BD.sql**
```sql
##################################### BD ###################################################
CREATE DATABASE tiendaonlinedamdaw;
USE tiendaonlinedamdaw;
################################### TABLAS #################################################
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);
################################### USUARIO #################################################
CREATE USER 
'tiendaonlinedamdaw'@'localhost' 
IDENTIFIED  BY 'Tiendaonlinedamdaw123$';

GRANT USAGE ON *.* TO 'tiendaonlinedamdaw'@'localhost';

ALTER USER 'tiendaonlinedamdaw'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON tiendaonlinedamdaw.* 
TO 'tiendaonlinedamdaw'@'localhost';

FLUSH PRIVILEGES;

```
**alter descripciones largas.sql**
```sql
-- =====================================================
-- AÑADIR DESCRIPCIÓN EXTENSA A PRODUCTOS
-- =====================================================

ALTER TABLE producto
ADD COLUMN descripcion_larga TEXT
AFTER descripcion;

-- =====================================================
-- ACTUALIZAR DESCRIPCIONES LARGAS DE PRODUCTO
-- =====================================================

UPDATE producto SET descripcion_larga =
'Portátil de 15 pulgadas diseñado para un uso intensivo tanto en entornos profesionales como educativos. Incorpora una pantalla amplia que permite trabajar cómodamente con documentos, hojas de cálculo y aplicaciones multitarea. Ideal para estudiantes, docentes y trabajadores que necesitan fiabilidad, buen rendimiento y una experiencia equilibrada entre potencia y portabilidad.'
WHERE id = 1;

UPDATE producto SET descripcion_larga =
'Ultrabook compacto y ligero con pantalla de 13 pulgadas, pensado para usuarios que se desplazan con frecuencia. Ofrece un alto rendimiento en un formato reducido, con arranque rápido, bajo consumo energético y un diseño elegante. Perfecto para profesionales que buscan movilidad sin renunciar a potencia.'
WHERE id = 2;

UPDATE producto SET descripcion_larga =
'Ordenador de sobremesa orientado a tareas de oficina, administración y uso doméstico avanzado. Su arquitectura permite una buena ventilación y futuras ampliaciones. Ideal para empresas, centros educativos o usuarios que necesitan estabilidad y rendimiento continuo durante largas jornadas.'
WHERE id = 3;

UPDATE producto SET descripcion_larga =
'Monitor Full HD de 24 pulgadas con excelente reproducción de color y amplio ángulo de visión. Adecuado para trabajo diario, programación, diseño básico y consumo multimedia. Su tamaño ofrece un equilibrio perfecto entre espacio de trabajo y comodidad visual.'
WHERE id = 4;

UPDATE producto SET descripcion_larga =
'Monitor QHD de 27 pulgadas pensado para usuarios exigentes que necesitan mayor resolución y espacio visual. Ideal para diseño gráfico, edición de vídeo, análisis de datos y multitarea avanzada. Proporciona una experiencia visual más nítida y detallada.'
WHERE id = 5;

UPDATE producto SET descripcion_larga =
'Teclado mecánico con retroiluminación, diseñado para ofrecer una pulsación precisa y duradera. Especialmente recomendado para programación, escritura intensiva y gaming. Su construcción robusta garantiza una larga vida útil incluso con uso intensivo.'
WHERE id = 6;

UPDATE producto SET descripcion_larga =
'Teclado inalámbrico silencioso y cómodo, ideal para entornos de oficina o estudio. Su diseño compacto y sin cables ayuda a mantener el escritorio ordenado. Perfecto para usuarios que buscan comodidad y discreción en el uso diario.'
WHERE id = 7;

UPDATE producto SET descripcion_larga =
'Ratón inalámbrico de alta precisión, fácil de instalar mediante receptor USB. Ofrece libertad de movimiento y ergonomía para un uso prolongado. Adecuado para tareas ofimáticas, navegación web y trabajo diario.'
WHERE id = 8;

UPDATE producto SET descripcion_larga =
'Ratón gaming con iluminación RGB y sensor de alta precisión. Diseñado para jugadores que requieren velocidad, exactitud y personalización. También es una excelente opción para diseñadores y usuarios avanzados.'
WHERE id = 9;

UPDATE producto SET descripcion_larga =
'Auriculares Bluetooth con micrófono integrado, pensados para llamadas, videoconferencias y consumo multimedia. Ofrecen libertad de movimiento y buena calidad de sonido, siendo una opción versátil tanto para trabajo como para ocio.'
WHERE id = 10;

UPDATE producto SET descripcion_larga =
'Auriculares gaming con sonido envolvente que permiten una experiencia inmersiva en videojuegos. Incorporan micrófono ajustable y diseño cómodo para largas sesiones. Recomendados para gamers y usuarios exigentes.'
WHERE id = 11;

UPDATE producto SET descripcion_larga =
'Cámara web HD ideal para videollamadas, clases online y reuniones profesionales. Ofrece imagen clara y configuración sencilla. Muy utilizada en entornos educativos y de teletrabajo.'
WHERE id = 12;

UPDATE producto SET descripcion_larga =
'Impresora láser monocromo orientada a oficinas y hogares con alto volumen de impresión. Destaca por su velocidad, bajo coste por página y fiabilidad. Ideal para documentos de texto y uso administrativo.'
WHERE id = 13;

UPDATE producto SET descripcion_larga =
'Unidad SSD de 1TB que mejora notablemente el rendimiento del sistema. Reduce los tiempos de arranque y carga de aplicaciones. Recomendado tanto para actualizar equipos antiguos como para configuraciones nuevas.'
WHERE id = 14;

UPDATE producto SET descripcion_larga =
'Disco duro mecánico de 2TB pensado para almacenamiento masivo de datos, copias de seguridad y archivos multimedia. Solución económica para grandes volúmenes de información.'
WHERE id = 15;

UPDATE producto SET descripcion_larga =
'Memoria USB de 64GB con conexión USB 3.0 para transferencias rápidas. Ideal para transportar documentos, proyectos y material multimedia de forma cómoda y segura.'
WHERE id = 16;

UPDATE producto SET descripcion_larga =
'Router WiFi de doble banda que garantiza una conexión estable y rápida en hogares y oficinas. Permite conectar múltiples dispositivos simultáneamente manteniendo un buen rendimiento.'
WHERE id = 17;

UPDATE producto SET descripcion_larga =
'Tablet Android de 10 pulgadas adecuada para consumo multimedia, navegación, educación y tareas ligeras. Su tamaño la hace cómoda para lectura, vídeo y aplicaciones educativas.'
WHERE id = 18;

UPDATE producto SET descripcion_larga =
'Smartphone con 128GB de almacenamiento interno, pensado para usuarios que necesitan espacio para aplicaciones, fotos y vídeos. Combina buen rendimiento con una experiencia fluida en el día a día.'
WHERE id = 19;

UPDATE producto SET descripcion_larga =
'Silla gaming ergonómica diseñada para largas sesiones frente al ordenador. Proporciona soporte lumbar, ajuste de altura y comodidad, siendo adecuada tanto para gaming como para trabajo de oficina.'
WHERE id = 20;

```
**alterar ids.sql**
```sql
-- 1) Quitar FKs (las que te bloquean)
ALTER TABLE lineaspedido DROP FOREIGN KEY fk_lineaspedido_1;
ALTER TABLE lineaspedido DROP FOREIGN KEY fk_lineaspedido_2;
ALTER TABLE pedido      DROP FOREIGN KEY fk_pedido_1;

-- 2) Poner AUTO_INCREMENT en las PK
ALTER TABLE producto    MODIFY id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE cliente     MODIFY id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE pedido      MODIFY id INT NOT NULL AUTO_INCREMENT;
ALTER TABLE lineaspedido MODIFY id INT NOT NULL AUTO_INCREMENT;

-- 3) Volver a crear FKs (mismo nombre y columnas)
ALTER TABLE pedido
  ADD CONSTRAINT fk_pedido_1
  FOREIGN KEY (cliente_id) REFERENCES cliente(id);

ALTER TABLE lineaspedido
  ADD CONSTRAINT fk_lineaspedido_1
  FOREIGN KEY (producto_id) REFERENCES producto(id);

ALTER TABLE lineaspedido
  ADD CONSTRAINT fk_lineaspedido_2
  FOREIGN KEY (pedido_id) REFERENCES pedido(id);

```
**datosdemuestra.sql**
```sql
-- =====================================================
-- DATOS DE MUESTRA AMPLIADOS PARA TIENDA ONLINE
-- Orden correcto según claves foráneas
-- =====================================================

-- =====================
-- PRODUCTOS (20)
-- =====================
INSERT INTO producto VALUES
(1,  'Portátil 15"',              'Portátil para trabajo y estudio',                 '799.99', '25',  'portatil15.jpg'),
(2,  'Portátil 13"',              'Ultrabook ligero y potente',                      '999.99', '15',  'portatil13.jpg'),
(3,  'PC Sobremesa',              'Ordenador de sobremesa para oficina',             '699.00', '10',  'pc.jpg'),
(4,  'Monitor 24"',               'Monitor Full HD 24 pulgadas',                     '179.00', '40',  'monitor24.jpg'),
(5,  'Monitor 27"',               'Monitor QHD 27 pulgadas',                         '299.00', '30',  'monitor27.jpg'),
(6,  'Teclado mecánico',          'Teclado mecánico retroiluminado',                 '89.50',  '60',  'teclado_mec.jpg'),
(7,  'Teclado inalámbrico',       'Teclado inalámbrico silencioso',                  '39.90',  '100', 'teclado_wireless.jpg'),
(8,  'Ratón inalámbrico',         'Ratón óptico inalámbrico USB',                    '19.90',  '150', 'raton_wireless.jpg'),
(9,  'Ratón gaming',              'Ratón gaming RGB alta precisión',                '49.90',  '70',  'raton_gaming.jpg'),
(10, 'Auriculares Bluetooth',     'Auriculares inalámbricos con micrófono',          '59.99',  '80',  'auriculares_bt.jpg'),
(11, 'Auriculares gaming',        'Auriculares gaming con sonido envolvente',        '79.99',  '50',  'auriculares_gaming.jpg'),
(12, 'Webcam HD',                 'Cámara web HD para videollamadas',                '49.00',  '90',  'webcam.jpg'),
(13, 'Impresora láser',           'Impresora láser monocromo',                       '129.00', '20',  'impresora_laser.jpg'),
(14, 'Disco SSD 1TB',             'Disco sólido SSD 1TB SATA',                       '109.00', '75',  'ssd1tb.jpg'),
(15, 'Disco duro 2TB',            'Disco duro mecánico 2TB',                         '79.00',  '60',  'hdd2tb.jpg'),
(16, 'Memoria USB 64GB',          'Pendrive USB 3.0 64GB',                           '14.90',  '200', 'usb64.jpg'),
(17, 'Router WiFi',               'Router WiFi de doble banda',                      '69.00',  '45',  'router.jpg'),
(18, 'Tablet 10"',                'Tablet Android 10 pulgadas',                     '199.00', '35',  'tablet.jpg'),
(19, 'Smartphone 128GB',          'Teléfono móvil 128GB',                            '349.00', '55',  'smartphone.jpg'),
(20, 'Silla gaming',              'Silla ergonómica para escritorio',                '189.00', '25',  'silla_gaming.jpg');

-- =====================
-- CLIENTES (10)
-- =====================
INSERT INTO cliente VALUES
(1,  'Ana',     'Martínez López',   'ana.martinez@email.com',     'C/ Mayor 12, Madrid',          '600123456'),
(2,  'Carlos',  'Pérez Gómez',      'carlos.perez@email.com',    'Av. Libertad 45, Valencia',    '611234567'),
(3,  'Laura',   'Sánchez Ruiz',     'laura.sanchez@email.com',   'C/ del Mar 8, Alicante',       '622345678'),
(4,  'Javier',  'López Torres',     'javier.lopez@email.com',    'Gran Vía 101, Madrid',         '633456789'),
(5,  'Marta',   'Gómez Fernández',  'marta.gomez@email.com',     'C/ Colón 3, Castellón',       '644567890'),
(6,  'David',   'Ruiz Molina',      'david.ruiz@email.com',      'Av. Europa 22, Murcia',       '655678901'),
(7,  'Lucía',   'Navarro Pérez',    'lucia.navarro@email.com',   'C/ Serranos 7, Valencia',     '666789012'),
(8,  'Pablo',   'Hernández Gil',    'pablo.hernandez@email.com', 'C/ San Juan 19, Elche',       '677890123'),
(9,  'Sonia',   'Romero Díaz',      'sonia.romero@email.com',    'Av. Mediterráneo 5, Benidorm','688901234'),
(10, 'Alberto', 'Morales Cano',     'alberto.morales@email.com', 'C/ Alameda 14, Albacete',     '699012345');

-- =====================
-- PEDIDOS (15)
-- =====================
INSERT INTO pedido VALUES
(1,  '2025-12-01 10:15:00', 1),
(2,  '2025-12-01 18:40:00', 2),
(3,  '2025-12-02 09:05:00', 1),
(4,  '2025-12-02 21:30:00', 3),
(5,  '2025-12-03 11:00:00', 4),
(6,  '2025-12-03 16:20:00', 5),
(7,  '2025-12-04 12:10:00', 6),
(8,  '2025-12-04 19:45:00', 7),
(9,  '2025-12-05 08:50:00', 8),
(10, '2025-12-05 14:35:00', 9),
(11, '2025-12-06 10:05:00', 10),
(12, '2025-12-06 17:25:00', 2),
(13, '2025-12-07 09:40:00', 3),
(14, '2025-12-07 20:10:00', 6),
(15, '2025-12-08 13:55:00', 1);

-- =====================
-- LÍNEAS DE PEDIDO (30)
-- =====================
INSERT INTO lineaspedido VALUES
(1,  1,  '1',  1),
(2,  1,  '1',  8),
(3,  2,  '2', 10),
(4,  2,  '1',  4),
(5,  3,  '1',  6),
(6,  3,  '1', 14),
(7,  4,  '1', 18),
(8,  4,  '1',  9),
(9,  5,  '1',  2),
(10, 5,  '1',  7),
(11, 6,  '1', 20),
(12, 6,  '1',  5),
(13, 7,  '2', 16),
(14, 7,  '1', 12),
(15, 8,  '1', 11),
(16, 8,  '1',  9),
(17, 9,  '1', 19),
(18, 9,  '1', 17),
(19, 10, '1', 13),
(20, 10, '1', 15),
(21, 11, '1',  3),
(22, 11, '1', 14),
(23, 12, '2',  8),
(24, 12, '1',  6),
(25, 13, '1',  1),
(26, 13, '1', 10),
(27, 14, '1', 18),
(28, 14, '1', 16),
(29, 15, '1',  2),
(30, 15, '1',  4);

```
**diagrama de flujo.html**
```html
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Diagrama exportado</title>
<style>
body {
  margin: 0;
  padding: 20px;
  background: #f3f3f7;
  font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
}
.page {
  position: relative;
  background: #ffffff;
  border: 1px solid #d1d5db;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  width: 442.88284965183414px;
  height: 262.8359587296195px;
  overflow: visible;
}

/* formas básicas */
.shape {
  position: absolute;
  min-width: 120px;
  min-height: 40px;
  padding: 6px 10px;
  background: #ffffff;
  border-radius: 4px;
  border: 1px solid #9ca3af;
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
}

.shape.rectangle {
  border-radius: 4px;
}

.shape.pill {
  border-radius: 999px;
}

.shape.circle {
  border-radius: 999px;
  width: 80px;
  height: 80px;
  padding: 0;
  justify-content: center;
}

/* texto libre */
.shape.text {
  background: transparent;
  border: none;
  box-shadow: none;
  padding: 0;
  min-width: 20px;
  min-height: 20px;
}

/* base de datos */
.shape.db {
  min-width: 120px;
  min-height: 60px;
  padding-top: 20px;
  border-radius: 60px / 16px;
  background: linear-gradient(180deg, #e5e7eb 0%, #ffffff 40%, #e5e7eb 100%);
  position: absolute;
  overflow: hidden;
  text-align: center;
}
.shape.db::before {
  content: "";
  position: absolute;
  top: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid #9ca3af;
  background: radial-gradient(circle at 50% 30%, #ffffff 0%, #e5e7eb 70%);
}
.shape.db::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 8px;
  right: 8px;
  height: 18px;
  border-radius: 999px;
  border: 1px solid rgba(156, 163, 175, 0.6);
  border-top: none;
  background: radial-gradient(circle at 50% 70%, #e5e7eb 0%, #d1d5db 70%);
}

/* entidades ER */
.shape.entity {
  width: 220px;
  min-height: 80px;
  background: #ffffff;
  border: 2px solid #111827;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.15);
  display: flex;
  flex-direction: column;
  font-size: 13px;
  overflow: hidden;
  padding: 0;
}
.entity-header {
  background: #f3f4f6;
  padding: 4px 8px;
  font-weight: 600;
  text-align: center;
  border-bottom: 1px solid #e5e7eb;
}
.entity-properties {
  flex: 1;
  padding: 4px 4px 0 4px;
}
.entity-property {
  display: grid;
  grid-template-columns: 14px 1fr 14px;
  align-items: center;
  column-gap: 4px;
  padding: 2px 0;
}
.entity-property .property-name {
  padding: 2px 4px;
  border-radius: 3px;
}

/* puertos */
.port {
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 1px solid #111827;
  background: #ffffff;
}
.port-left { justify-self: start; }
.port-right { justify-self: end; }

/* flechas rectas */
.arrow {
  position: absolute;
  height: 2px;
  background: #111827;
  transform-origin: 0 50%;
}
.arrow::after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.arrow-double::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%) rotate(180deg);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}

/* flechas ortogonales */
.ortho-arrow {
  position: absolute;
  left: 0;
  top: 0;
}
.ortho-arrow .ortho-seg {
  position: absolute;
  background: #111827;
}
.ortho-seg.seg-horizontal { height: 2px; }
.ortho-seg.seg-vertical { width: 2px; }
.ortho-arrowhead {
  position: absolute;
  width: 0;
  height: 0;
}
.ortho-arrowhead.dir-right {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 8px solid #111827;
}
.ortho-arrowhead.dir-left {
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 8px solid #111827;
}
.ortho-arrowhead.dir-down {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 8px solid #111827;
}
.ortho-arrowhead.dir-up {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 8px solid #111827;
}
</style>
</head>
<body>
<div class="page">

<div class="shape rectangle" style="left:40px;top:97.84376061480972px;width:119.99999999999994px;height:39.98437300972314px;">index</div>
<div class="shape rectangle" style="left:167.38283903702438px;top:40px;width:119.99999999999994px;height:39.984382961107315px;">Catálogo</div>
<div class="shape rectangle" style="left:282.88284965183414px;top:103.37500530740485px;width:119.99999999999994px;height:39.984382961107315px;">P Producto</div>
<div class="shape rectangle" style="left:247.37501061480964px;top:180.69530984629748px;width:119.99999999999994px;height:39.984382961107315px;">Carrito</div>
<div class="shape rectangle" style="left:86.50000530740488px;top:182.85157576851216px;width:119.99997346297549px;height:39.984382961107315px;">Finalización</div>
<div class="shape text" style="left:203.45310377038038px;top:120.25000530740485px;width:31.617219344429333px;height:19.992171577785317px;">Front</div>
<div class="arrow" style="left:144.02655822411253px;top:97.84376061480972px;width:43.194717121260936px;transform:rotate(-0.4262531013316452rad);"></div>
<div class="arrow" style="left:263.8183125650629px;top:79.98438296110731px;width:48.624667337078805px;transform:rotate(0.5018455771914861rad);"></div>
<div class="arrow" style="left:333.70182635759966px;top:143.35938826851216px;width:41.08465940897501px;transform:rotate(2.0012997385397435rad);"></div>
<div class="arrow" style="left:247.37501061480964px;top:201.49170297654248px;width:40.8787032809442px;transform:rotate(3.128190095313388rad);"></div>
<div class="arrow" style="left:135.56409527938598px;top:182.85157576851216px;width:51.31918392658071px;transform:rotate(-2.071339826124455rad);"></div>
</div>
</body>
</html>
```
**diagrama de flujo.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "rectangle",
      "left": "374.734px",
      "top": "263.499px",
      "width": "",
      "height": "",
      "texto": "index"
    },
    {
      "id": "forma-2",
      "tipo": "rectangle",
      "left": "502.111px",
      "top": "205.658px",
      "width": "",
      "height": "",
      "texto": "Catálogo"
    },
    {
      "id": "forma-3",
      "tipo": "rectangle",
      "left": "617.613px",
      "top": "269.03px",
      "width": "",
      "height": "",
      "texto": "P Producto"
    },
    {
      "id": "forma-4",
      "tipo": "rectangle",
      "left": "582.114px",
      "top": "346.349px",
      "width": "",
      "height": "",
      "texto": "Carrito"
    },
    {
      "id": "forma-5",
      "tipo": "rectangle",
      "left": "421.229px",
      "top": "348.499px",
      "width": "",
      "height": "",
      "texto": "Finalización"
    },
    {
      "id": "forma-6",
      "tipo": "text",
      "left": "538.19px",
      "top": "285.912px",
      "width": "",
      "height": "",
      "texto": "Front"
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-2",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-5",
        "propId": null,
        "side": null
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": null,
        "side": null
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.json**
```json
{
  "formas": [
    {
      "id": "forma-1",
      "tipo": "entity",
      "left": "447.129px",
      "top": "336.978px",
      "width": "",
      "height": "",
      "entityName": "Producto",
      "properties": [
        {
          "id": "prop-1",
          "name": "id"
        },
        {
          "id": "prop-2",
          "name": "nombre_producto"
        },
        {
          "id": "prop-3",
          "name": "descripcion"
        },
        {
          "id": "prop-4",
          "name": "precio"
        },
        {
          "id": "prop-5",
          "name": "stock"
        },
        {
          "id": "prop-6",
          "name": "imagen"
        }
      ]
    },
    {
      "id": "forma-2",
      "tipo": "entity",
      "left": "230.283px",
      "top": "62.1987px",
      "width": "",
      "height": "",
      "entityName": "Cliente",
      "properties": [
        {
          "id": "prop-7",
          "name": "id"
        },
        {
          "id": "prop-8",
          "name": "nombre_cliente"
        },
        {
          "id": "prop-9",
          "name": "apellidos"
        },
        {
          "id": "prop-10",
          "name": "email"
        },
        {
          "id": "prop-11",
          "name": "direccion"
        },
        {
          "id": "prop-12",
          "name": "telefono"
        }
      ]
    },
    {
      "id": "forma-3",
      "tipo": "entity",
      "left": "446.112px",
      "top": "136.183px",
      "width": "",
      "height": "",
      "entityName": "Pedido",
      "properties": [
        {
          "id": "prop-13",
          "name": "id"
        },
        {
          "id": "prop-14",
          "name": "fecha"
        },
        {
          "id": "prop-15",
          "name": "cliente_id"
        }
      ]
    },
    {
      "id": "forma-4",
      "tipo": "entity",
      "left": "672.018px",
      "top": "221.777px",
      "width": "",
      "height": "",
      "entityName": "LineasPedido",
      "properties": [
        {
          "id": "prop-16",
          "name": "id"
        },
        {
          "id": "prop-17",
          "name": "pedido_id"
        },
        {
          "id": "prop-18",
          "name": "cantidad"
        },
        {
          "id": "prop-19",
          "name": "producto_id"
        }
      ]
    }
  ],
  "flechas": [
    {
      "desde": {
        "shapeId": "forma-3",
        "propId": "prop-15",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-2",
        "propId": "prop-7",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-17",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-3",
        "propId": "prop-13",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    },
    {
      "desde": {
        "shapeId": "forma-4",
        "propId": "prop-19",
        "side": "left"
      },
      "hasta": {
        "shapeId": "forma-1",
        "propId": "prop-1",
        "side": "right"
      },
      "tipo": "simple",
      "estilo": "straight"
    }
  ]
}
```
**diagrama entidad relacion.sql**
```sql
CREATE TABLE producto (
  id INT,
  nombre_producto VARCHAR(255),
  descripcion VARCHAR(255),
  precio VARCHAR(255),
  stock VARCHAR(255),
  imagen VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE cliente (
  id INT,
  nombre_cliente VARCHAR(255),
  apellidos VARCHAR(255),
  email VARCHAR(255),
  direccion VARCHAR(255),
  telefono VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE pedido (
  id INT,
  fecha VARCHAR(255),
  cliente_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_pedido_1 FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE lineaspedido (
  id INT,
  pedido_id INT,
  cantidad VARCHAR(255),
  producto_id INT,
  PRIMARY KEY (id),
  CONSTRAINT fk_lineaspedido_1 FOREIGN KEY (pedido_id) REFERENCES pedido(id),
  CONSTRAINT fk_lineaspedido_2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);

```
###### back
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
#### 011-Supercontrolador
##### V0.1-Panel de control
**001-Ayuda.md**
```markdown
Pasos para iniciar:

1.-He copiado la ultima versión del proyecto que había en:
programación - u10 - su10 - v007 - Ajustes estéticos

2.-He traído el supercontrolador que estaba en:
bases de datos u8 su4 - 008-cabeceras de columna
Y lo he llamado index.php en back 
(porque es la semilla de nuestro back)

```
###### back
**index.php**
```php
<!doctype html>
<html>
	<head>
  	<style>
		html,body{width:100%;height:100%;padding:0px;margin:0px;}
		body{display:flex;font-family:sans-serif;}
		nav{background:orangered;padding:20px;gap:20px;flex:1;
		display:flex;flex-direction:column;gap:20px;}
		nav a{background:white;color:orangered;text-decoration:none;
		padding:10px;}
		main{padding:20px;flex:4;}
		table td{padding:10px;}
		table{border:2px solid black;width:100%;}
		th{background:orangered;color:white;padding:10px;}
	</style>
	</head>
	<body>
		<?php
		  // Primero me conecto a la base de datos
		  // Esto es común para todo el archivo
			$host = "localhost";
			$user = "tiendaonlinedamdaw";
			$pass = "Tiendaonlinedamdaw123$";
			$db   = "tiendaonlinedamdaw";

			$conexion = new mysqli($host, $user, $pass, $db);
		?>

		<nav>
		<?php
		  // Ahora lo que quiero es un listado de las tablas en la base de datos
			$resultado = $conexion->query("
				SHOW TABLES;
			");
			while ($fila = $resultado->fetch_assoc()) {
				echo '<a href="?tabla='.$fila['Tables_in_'.$db].'">'.$fila['Tables_in_'.$db].'</a>';
		    }
		?>
		</nav>
		<main>
			<table>
				<?php
					// PRIMERO CREO LAS CABECERAS //////////////////
					$resultado = $conexion->query("
						SELECT * FROM ".$_GET['tabla']." LIMIT 1;
					");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
					while ($fila = $resultado->fetch_assoc()) {
						echo "<tr>";
						foreach($fila as $clave=>$valor){
							echo "<th>".$clave."</th>";		// En lugar de enseñarme el valor, enseñame la clave
						}
						echo "</tr>";
					}
				?>
				<?php
					// Y LUEGO EL RESTO DE DATOS //////////////
					$resultado = $conexion->query("
						SELECT * FROM ".$_GET['tabla'].";
					");
					while ($fila = $resultado->fetch_assoc()) {
						echo "<tr>";
						foreach($fila as $clave=>$valor){
							echo "<td>".$valor."</td>";
						}
						echo "</tr>";
					}
				?>
			</table>
		</main>
	</body>
</html>

```
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.2-Explotamos
**001-Ayuda.md**
```markdown
Pasos para iniciar:

1.-He copiado la ultima versión del proyecto que había en:
programación - u10 - su10 - v007 - Ajustes estéticos

2.-He traído el supercontrolador que estaba en:
bases de datos u8 su4 - 008-cabeceras de columna
Y lo he llamado index.php en back 
(porque es la semilla de nuestro back)

```
###### back
**index.php**
```php
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<?php include "inc/conexion_bd.php"; ?>
		<nav>
			<?php include "controladores/poblar_menu.php"; ?>
		</nav>
		<main>
			<?php include "controladores/read.php"; ?>
		</main>
	</body>
</html>

```
####### controladores
**poblar_menu.php**
```php
<?php
  // Ahora lo que quiero es un listado de las tablas en la base de datos
	$resultado = $conexion->query("
		SHOW TABLES;
	");
	while ($fila = $resultado->fetch_assoc()) {
		echo '<a href="?tabla='.$fila['Tables_in_'.$db].'">'.$fila['Tables_in_'.$db].'</a>';
    }
?>

```
**read.php**
```php
<table>
	<?php
		// PRIMERO CREO LAS CABECERAS //////////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<th>".$clave."</th>";		// En lugar de enseñarme el valor, enseñame la clave
			}
			echo "</tr>";
		}
	?>
	<?php
		// Y LUEGO EL RESTO DE DATOS //////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla'].";
		");
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<td>".$valor."</td>";
			}
			echo "</tr>";
		}
	?>
</table>

```
####### css
**estilo.css**
```css
html,body{
	width:100%;
	height:100%;
	padding:0px;
	margin:0px;
}
body{
	display:flex;
	font-family:sans-serif;
}
nav{
	background:orangered;
	padding:20px;
	gap:20px;
	flex:1;
	display:flex;
	flex-direction:column;
	gap:20px;
}
nav a{
	background:white;
	color:orangered;
	text-decoration:none;
	padding:10px;
}
main{
	padding:20px;
	flex:4;
}
table td{
	padding:10px;
}
table{
	border:2px solid black;
	width:100%;
}
th{
	background:orangered;
	color:white;
	padding:10px;
}

```
####### inc
**conexion_bd.php**
```php
<?php
  // Primero me conecto a la base de datos
  // Esto es común para todo el archivo
	$host = "localhost";
	$user = "tiendaonlinedamdaw";
	$pass = "Tiendaonlinedamdaw123$";
	$db   = "tiendaonlinedamdaw";

	$conexion = new mysqli($host, $user, $pass, $db);
?>

```
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.3-Controlador insert
###### back
**index.php**
```php
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<?php include "inc/conexion_bd.php"; ?>
		<nav>
			<?php include "controladores/poblar_menu.php"; ?>
		</nav>
		<main>
			<?php
			// ENRUTADOR -> SE ENCARGA DE PROCESAR LAS OPERACIONES A MOSTRAR
				if(!isset($_GET['operacion'])){ // Si no hay operacion
					include "controladores/read.php";
				}else{
					if($_GET['operacion'] == "insertar"){
						include "controladores/insert.php";
					}
				}		 
			?>
		</main>
	</body>
</html>

```
####### controladores
**insert.php**
```php
<form action="" method="POST">
		<?php
		
		// CREAMOS UN FORMULARIO DINÁMICO

		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			foreach($fila as $clave=>$valor){
				echo "
					<div class='control_formulario'>
					<label>".$clave."</label>
					<input 
					  type='text' 
					  name='".$clave."'
					  placeholder='".$clave."'>
				  </div>
				  ";
		  	}
		}
	?>
</form>
<style>
	form{
		width: 100%;
		display: flex;
		flex-direction: column;
		gap:20px
	}
	.control_formulario{
		display:flex;
	}
	label{
		flex:1;
	}
	input{
		flex:4;
		padding: 10px;
		border: 2px solid orangered;
	}
</style>

```
**poblar_menu.php**
```php
<?php
  // Ahora lo que quiero es un listado de las tablas en la base de datos
	$resultado = $conexion->query("
		SHOW TABLES;
	");
	while ($fila = $resultado->fetch_assoc()) {
		echo '<a href="?tabla='.$fila['Tables_in_'.$db].'">'.$fila['Tables_in_'.$db].'</a>';
    }
?>

```
**read.php**
```php
<table>
	<?php
		// PRIMERO CREO LAS CABECERAS //////////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<th>".$clave."</th>";		// En lugar de enseñarme el valor, enseñame la clave
			}
			echo "</tr>";
		}
	?>
	<?php
		// Y LUEGO EL RESTO DE DATOS //////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla'].";
		");
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<td>".$valor."</td>";
			}
			echo "</tr>";
		}
	?>
</table>
<!-- Me voy a la operacion insertar y me llevo la tabla actual -->
<a href="?operacion=insertar&tabla=<?= $_GET['tabla']?>" class="boton_insertar">+</a>
<style>
	.boton_insertar{
		position:absolute;
		bottom: 20px;
		right: 20px;
		background:orangered;
		border-radius:30px;
		width:35px;
		height:35px;
		color:white;
		text-align:center;
		line-height:35px;
		text-decoration:none;
	}
</style>

```
####### css
**estilo.css**
```css
html,body{
	width:100%;
	height:100%;
	padding:0px;
	margin:0px;
}
body{
	display:flex;
	font-family:sans-serif;
}
nav{
	background:orangered;
	padding:20px;
	gap:20px;
	flex:1;
	display:flex;
	flex-direction:column;
	gap:20px;
}
nav a{
	background:white;
	color:orangered;
	text-decoration:none;
	padding:10px;
}
main{
	padding:20px;
	flex:4;
}
table td{
	padding:10px;
}
table{
	border:2px solid black;
	width:100%;
}
th{
	background:orangered;
	color:white;
	padding:10px;
}

```
####### inc
**conexion_bd.php**
```php
<?php
  // Primero me conecto a la base de datos
  // Esto es común para todo el archivo
	$host = "localhost";
	$user = "tiendaonlinedamdaw";
	$pass = "Tiendaonlinedamdaw123$";
	$db   = "tiendaonlinedamdaw";

	$conexion = new mysqli($host, $user, $pass, $db);
?>

```
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.4-Capricho usabilidad
###### back
**index.php**
```php
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<?php include "inc/conexion_bd.php"; ?>
		<nav>
			<?php include "controladores/poblar_menu.php"; ?>
		</nav>
		<main>
			<?php
			// ENRUTADOR -> SE ENCARGA DE PROCESAR LAS OPERACIONES A MOSTRAR
				if(!isset($_GET['operacion'])){ // Si no hay operacion
					include "controladores/read.php";
				}else{
					if($_GET['operacion'] == "insertar"){
						include "controladores/insert.php";
					}
				}		 
			?>
		</main>
	</body>
</html>

```
####### controladores
**insert.php**
```php
<form action="" method="POST">
		<?php
		
		// CREAMOS UN FORMULARIO DINÁMICO

		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			foreach($fila as $clave=>$valor){
				echo "
					<div class='control_formulario'>
					<label>".$clave."</label>
					<input 
					  type='text' 
					  name='".$clave."'
					  placeholder='".$clave."'>
				  </div>
				  ";
		  	}
		}
	?>
</form>
<style>
	form{
		width: 100%;
		display: flex;
		flex-direction: column;
		gap:20px
	}
	.control_formulario{
		display:flex;
	}
	label{
		flex:1;
	}
	input{
		flex:4;
		padding: 10px;
		border: 2px solid orangered;
	}
</style>

```
**poblar_menu.php**
```php
<?php
	// Ahora lo que quiero es un listado de las tablas en la base de datos
	$resultado = $conexion->query("
   SHOW TABLES;
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	$clase = "";							// De entrada no tienes clase	
    if(isset($_GET['tabla'])){
    	if($fila['Tables_in_'.$db] == $_GET['tabla']){	// Pero si el nombre de esta tabla coincide con la tabla cargada
    		$clase  = "activo";			// En ese caso tu clase es "activo"
    	}
    }
     echo '
     	<a href="?tabla='.$fila['Tables_in_'.$db].'" class="'.$clase.'">
      	'.$fila['Tables_in_'.$db].'
      </a>
      ';
  }
?>
<style>
	.activo{
  	transform:translateX(20px);
  }
</style>

```
**read.php**
```php
<table>
	<?php
		// PRIMERO CREO LAS CABECERAS //////////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<th>".$clave."</th>";		// En lugar de enseñarme el valor, enseñame la clave
			}
			echo "</tr>";
		}
	?>
	<?php
		// Y LUEGO EL RESTO DE DATOS //////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla'].";
		");
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<td>".$valor."</td>";
			}
			echo "</tr>";
		}
	?>
</table>
<!-- Me voy a la operacion insertar y me llevo la tabla actual -->
<a href="?operacion=insertar&tabla=<?= $_GET['tabla']?>" class="boton_insertar">+</a>
<style>
	.boton_insertar{
		position:absolute;
		bottom: 20px;
		right: 20px;
		background:orangered;
		border-radius:30px;
		width:35px;
		height:35px;
		color:white;
		text-align:center;
		line-height:35px;
		text-decoration:none;
	}
</style>

```
####### css
**estilo.css**
```css
html,body{
	width:100%;
	height:100%;
	padding:0px;
	margin:0px;
}
body{
	display:flex;
	font-family:sans-serif;
}
nav{
	background:orangered;
	padding:20px;
	gap:20px;
	flex:1;
	display:flex;
	flex-direction:column;
	gap:20px;
}
nav a{
	background:white;
	color:orangered;
	text-decoration:none;
	padding:10px;
}
main{
	padding:20px;
	flex:4;
}
table td{
	padding:10px;
}
table{
	border:2px solid black;
	width:100%;
}
th{
	background:orangered;
	color:white;
	padding:10px;
}

```
####### inc
**conexion_bd.php**
```php
<?php
  // Primero me conecto a la base de datos
  // Esto es común para todo el archivo
	$host = "localhost";
	$user = "tiendaonlinedamdaw";
	$pass = "Tiendaonlinedamdaw123$";
	$db   = "tiendaonlinedamdaw";

	$conexion = new mysqli($host, $user, $pass, $db);
?>

```
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.5-Procesar insert
###### back
**index.php**
```php
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<?php include "inc/conexion_bd.php"; ?>
		<nav>
			<?php include "controladores/poblar_menu.php"; ?>
		</nav>
		<main>
			<?php
			// ENRUTADOR -> SE ENCARGA DE PROCESAR LAS OPERACIONES A MOSTRAR
				if(!isset($_GET['operacion'])){ // Si no hay operacion
					include "controladores/read.php";
				}else{
					if($_GET['operacion'] == "insertar"){
						include "controladores/insertar.php";
					}else if($_GET['operacion'] == "procesa_insertar"){
						include "controladores/procesa_insertar.php";
					}
				}		 
			?>
		</main>
	</body>
</html>

```
####### controladores
**insertar.php**
```php
<form action="?operacion=procesa_insertar&tabla=<?= $_GET['tabla'] ?>" method="POST">
		<?php
		
		// CREAMOS UN FORMULARIO DINÁMICO

		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			foreach($fila as $clave=>$valor){
				echo "
					<div class='control_formulario'>
					<label>".$clave."</label>
					<input 
					  type='text' 
					  name='".$clave."'
					  placeholder='".$clave."'>
				  </div>
				  ";
		  	}
		}
	?>
	<div class='control_formulario'>
		<label>Insertar</label>
		<input type="submit">
	</div>
</form>
<style>
	form{
		width: 100%;
		display: flex;
		flex-direction: column;
		gap:20px
	}
	.control_formulario{
		display:flex;
	}
	label{
		flex:1;
	}
	input{
		flex:4;
		padding: 10px;
		border: 2px solid orangered;
	}
	input[type=submit]{
		background:orangered;
		color:white;
	}
</style>

```
**poblar_menu.php**
```php
<?php
	// Ahora lo que quiero es un listado de las tablas en la base de datos
	$resultado = $conexion->query("
   SHOW TABLES;
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	$clase = "";							// De entrada no tienes clase	
    if(isset($_GET['tabla'])){
    	if($fila['Tables_in_'.$db] == $_GET['tabla']){	// Pero si el nombre de esta tabla coincide con la tabla cargada
    		$clase  = "activo";			// En ese caso tu clase es "activo"
    	}
    }
     echo '
     	<a href="?tabla='.$fila['Tables_in_'.$db].'" class="'.$clase.'">
      	'.$fila['Tables_in_'.$db].'
      </a>
      ';
  }
?>
<style>
	.activo{
  	transform:translateX(20px);
  }
</style>

```
**procesa_insertar.php**
```php
<?php
	$sql = "INSERT INTO ".$_GET['tabla']." VALUES (";			// Inicio el formateo del SQL
	foreach($_POST as $clave=>$valor){							// Recorro los campos del form
		if($clave == "id"){										// Si eres un id
			$sql.="NULL,";										// Inserta NULL
		}else{													// Si no eres un id
			$sql.="'".$valor."',";								// Inserta el valor
		}
	}
	$sql = substr($sql, 0, -1);									// Le quito la ultima coma al SQL
	$sql .= ");";
	echo $sql;													// Lo saco por pantalla
	
	$resultado = $conexion->query($sql);						// Proceso el SQL
	header("Location: ?tabla=".$_GET['tabla']);	
?>


```
**read.php**
```php
<table>
	<?php
		// PRIMERO CREO LAS CABECERAS //////////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<th>".$clave."</th>";		// En lugar de enseñarme el valor, enseñame la clave
			}
			echo "</tr>";
		}
	?>
	<?php
		// Y LUEGO EL RESTO DE DATOS //////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla'].";
		");
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<td>".$valor."</td>";
			}
			echo "</tr>";
		}
	?>
</table>
<!-- Me voy a la operacion insertar y me llevo la tabla actual -->
<a href="?operacion=insertar&tabla=<?= $_GET['tabla']?>" class="boton_insertar">+</a>
<style>
	.boton_insertar{
		position:absolute;
		bottom: 20px;
		right: 20px;
		background:orangered;
		border-radius:30px;
		width:35px;
		height:35px;
		color:white;
		text-align:center;
		line-height:35px;
		text-decoration:none;
	}
</style>

```
####### css
**estilo.css**
```css
html,body{
	width:100%;
	height:100%;
	padding:0px;
	margin:0px;
}
body{
	display:flex;
	font-family:sans-serif;
}
nav{
	background:orangered;
	padding:20px;
	gap:20px;
	flex:1;
	display:flex;
	flex-direction:column;
	gap:20px;
}
nav a{
	background:white;
	color:orangered;
	text-decoration:none;
	padding:10px;
}
main{
	padding:20px;
	flex:4;
}
table td{
	padding:10px;
}
table{
	border:2px solid black;
	width:100%;
}
th{
	background:orangered;
	color:white;
	padding:10px;
}

```
####### inc
**conexion_bd.php**
```php
<?php
  // Primero me conecto a la base de datos
  // Esto es común para todo el archivo
	$host = "localhost";
	$user = "tiendaonlinedamdaw";
	$pass = "Tiendaonlinedamdaw123$";
	$db   = "tiendaonlinedamdaw";

	$conexion = new mysqli($host, $user, $pass, $db);
?>

```
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
##### V0.6-Mejoras esteticas
###### back
**index.php**
```php
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<?php include "inc/conexion_bd.php"; ?>
		<nav>
			<?php include "controladores/poblar_menu.php"; ?>
		</nav>
		<main>
			<?php
			// ENRUTADOR -> SE ENCARGA DE PROCESAR LAS OPERACIONES A MOSTRAR
				if(!isset($_GET['operacion'])){ // Si no hay operacion
					include "controladores/read.php";
				}else{
					if($_GET['operacion'] == "insertar"){
						include "controladores/insertar.php";
					}else if($_GET['operacion'] == "procesa_insertar"){
						include "controladores/procesa_insertar.php";
					}
				}		 
			?>
		</main>
	</body>
</html>

```
####### controladores
**insertar.php**
```php
<form action="?operacion=procesa_insertar&tabla=<?= $_GET['tabla'] ?>" method="POST">
		<?php
		
		// CREAMOS UN FORMULARIO DINÁMICO

		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			foreach($fila as $clave=>$valor){
				echo "
					<div class='control_formulario'>
					<label>".$clave."</label>
					<input 
					  type='text' 
					  name='".$clave."'
					  placeholder='".$clave."'>
				  </div>
				  ";
		  	}
		}
	?>
	<div class='control_formulario'>
		<label>Insertar</label>
		<input type="submit">
	</div>
</form>
<style>
	form{
		width: 100%;
		display: flex;
		flex-direction: column;
		gap:20px
	}
	.control_formulario{
		display:flex;
	}
	label{
		flex:1;
	}
	input{
		flex:4;
		padding: 10px;
		border: 2px solid orangered;
	}
	input[type=submit]{
		background:orangered;
		color:white;
	}
</style>

```
**poblar_menu.php**
```php
<?php
	// Ahora lo que quiero es un listado de las tablas en la base de datos
	$resultado = $conexion->query("
   SHOW TABLES;
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	$clase = "";							// De entrada no tienes clase	
    if(isset($_GET['tabla'])){
    	if($fila['Tables_in_'.$db] == $_GET['tabla']){	// Pero si el nombre de esta tabla coincide con la tabla cargada
    		$clase  = "activo";			// En ese caso tu clase es "activo"
    	}
    }
     echo '
     	<a href="?tabla='.$fila['Tables_in_'.$db].'" class="'.$clase.'">
      	'.$fila['Tables_in_'.$db].'
      </a>
      ';
  }
?>
<style>
	.activo{
  	transform:translateX(20px);
  }
</style>

```
**procesa_insertar.php**
```php
<?php
	$sql = "INSERT INTO ".$_GET['tabla']." VALUES (";			// Inicio el formateo del SQL
	foreach($_POST as $clave=>$valor){							// Recorro los campos del form
		if($clave == "id"){										// Si eres un id
			$sql.="NULL,";										// Inserta NULL
		}else{													// Si no eres un id
			$sql.="'".$valor."',";								// Inserta el valor
		}
	}
	$sql = substr($sql, 0, -1);									// Le quito la ultima coma al SQL
	$sql .= ");";
	echo $sql;													// Lo saco por pantalla
	
	$resultado = $conexion->query($sql);						// Proceso el SQL
	header("Location: ?tabla=".$_GET['tabla']);	
?>


```
**read.php**
```php
<table>
	<?php
		// PRIMERO CREO LAS CABECERAS //////////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla']." LIMIT 1;
		");	// SOLO QUIERO UN ELEMENTO !!!!!!!!!!!!!!!!
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<th>".$clave."</th>";		// En lugar de enseñarme el valor, enseñame la clave
			}
			echo "</tr>";
		}
	?>
	<?php
		// Y LUEGO EL RESTO DE DATOS //////////////
		$resultado = $conexion->query("
			SELECT * FROM ".$_GET['tabla'].";
		");
		while ($fila = $resultado->fetch_assoc()) {
			echo "<tr>";
			foreach($fila as $clave=>$valor){
				echo "<td>".$valor."</td>";
			}
			echo "</tr>";
		}
	?>
</table>
<!-- Me voy a la operacion insertar y me llevo la tabla actual -->
<a href="?operacion=insertar&tabla=<?= $_GET['tabla']?>" class="boton_insertar">+</a>
<style>
	.boton_insertar{
		position:absolute;
		bottom: 20px;
		right: 20px;
		background:orangered;
		border-radius:30px;
		width:35px;
		height:35px;
		color:white;
		text-align:center;
		line-height:35px;
		text-decoration:none;
	}
</style>

```
####### css
**estilo.css**
```css
html,body{
	width:100%;
	height: 100%;
	padding:0px;
	margin:0px;
}
body{
	display:flex;
	font-family:sans-serif;
	overflow:hidden;
}
nav{
	background:orangered;
	padding:20px;
	gap:20px;
	flex:1;
	display:flex;
	flex-direction:column;
	gap:20px;
}
nav a{
	background:white;
	color:orangered;
	text-decoration:none;
	padding:10px;
}
main{
	padding:20px;
	flex:4;
	height:100%;
	overflow-y:scroll;
}
table td{
	padding:10px;
}
table{
	border:2px solid black;
	width:100%;
	margin-bottom: 50px;
}
th{
	background:orangered;
	color:white;
	padding:10px;
}

```
####### inc
**conexion_bd.php**
```php
<?php
  // Primero me conecto a la base de datos
  // Esto es común para todo el archivo
	$host = "localhost";
	$user = "tiendaonlinedamdaw";
	$pass = "Tiendaonlinedamdaw123$";
	$db   = "tiendaonlinedamdaw";

	$conexion = new mysqli($host, $user, $pass, $db);
?>

```
###### front
**carrito.php**
```php
<?php include "inc/cabecera.php"; ?>

Hola que tal yo soy el carrito<br>
Vamos a ver si atrapamos correctamente el producto<br>

<?php
	echo "El producto es: ".$_POST['id']."<br>";
	echo "Las unidades son: ".$_POST['unidades']."<br>";
?>

<form method="POST" action="finalizacion.php">

	<!-- Datos de los productos -->
	<input type="hidden" name="idproducto" value="<?= $_POST['id'] ?>">
	<input type="hidden" name="unidades" value="<?= $_POST['unidades'] ?>">

	<!-- Datos del cliente -->
	<input type="text" name="nombre_cliente">
	<input type="text" name="apellidos">
	<input type="text" name="email">
	<input type="text" name="direccion">
	<input type="text" name="telefono">

	<!-- Y enviamos -->
	<input type="submit">
	
</form>
<?php include "inc/piedepagina.php"; ?>

```
**catalogo.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="catalogo">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto;";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<p><?= $fila['precio'] ?></p>
			<p><?= $fila['descripcion'] ?></p>
			<a href="producto.php?id=<?= $fila['id'] ?>">Comprar</a>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>
<style>
	#catalogo{
		display:grid;
		grid-template-columns:repeat(3,1fr);
		gap:20px;
	}
	#catalogo article{
		text-align:center;
  }
	#catalogo article .imagen{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:100px;
		border-radius:5px 5px 0px 0px;
  }
	#catalogo article a{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));	
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
  }
</style>
<?php include "inc/piedepagina.php"; ?>

```
**finalizacion.php**
```php
<?php include "inc/cabecera.php"; ?>

<h1>Pedido finalizado</h1>
<p>Muchas gracias por su compra</p>

<p>Datos del pedido:</p>
<?= $_POST['nombre_cliente']?> <?= $_POST['apellidos']?><br>
<?= $_POST['email']?><br>
<?= $_POST['direccion']?><br>
<?= $_POST['telefono']?><br>
<br>

<table>
<tr>
	<th>Nombre del producto</th>
  <th>Precio del producto</th>
  <th>Unidades</th>
  <th>Total</th>
</tr>
<?php
	// CONVIERTO EL ID DE PRODUCTO EN LOS DATOS DE PRODUCTO
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);
	$resultado = $conexion->query("
  	SELECT * FROM producto WHERE id = ".$_POST['idproducto'].";
  ");
  while ($fila = $resultado->fetch_assoc()) {
  	echo '<tr>
    	<td>'.$fila['nombre_producto'].'</td>
      <td>'.$fila['precio'].'</td>
      <td>'.$_POST['unidades'].'</td>
      <td>'.$_POST['unidades']*$fila['precio'].'</td>
    </tr>';
  }
  
?>
</table>

<?php
	$host = "localhost";
  $user = "tiendaonlinedamdaw";
  $pass = "Tiendaonlinedamdaw123$";
  $db   = "tiendaonlinedamdaw";

  $conexion = new mysqli($host, $user, $pass, $db);

      

      
	// Y ahora es cuando toca guardar cosas en la base de datos
  // CUIDADO CON LAS FK
  // Aquellas tablas que no tengan dependencias, van primero
  // Las tablas que tengan dependencias van despues
  
  // Primero guardaremos el cliente
  // Guardo los datos que vienen por post (del formulario anterior)
  $resultado = $conexion->query("
  	INSERT INTO cliente VALUES(
    	NULL,
      '".$_POST['nombre_cliente']."',
      '".$_POST['apellidos']."',
      '".$_POST['email']."',
      '".$_POST['direccion']."',
      '".$_POST['telefono']."'
    )
  ");
  // Y me quedo en memoria con el id del ultimo cliente insertado
  $id_cliente_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Segundo, guardaremos el pedido (necesita un id de cliente)
  // Ahora creo un pedido con la fecha actual y el id anterior
  $resultado = $conexion->query("
  	INSERT INTO pedido VALUES(
    	NULL,
      '".date('Y-m-d H:i:s')."',
      ".$id_cliente_insertado."
    )
  ");
  $id_pedido_insertado = $conexion->insert_id; // MAGIA NEGRA !!!!!!!!!!!!!!!!!!
  
  // Tercero, guardaremos lineas de pedido (necesita un id de pedido)
  // Ahora creo una linea  de pedido con el id de pedido insertado y las lineas que venian de la pantalla anterior
  $sql = "
  	INSERT INTO lineaspedido VALUES(
    	NULL,
      ".$id_pedido_insertado.",
      '".$_POST['unidades']."',
      ".$_POST['idproducto']."
    )
  ";
  $resultado = $conexion->query($sql);
?>
<style>
	table{width:100%;border:2px solid black;}
	table th{background:orangered;color:white;}
</style>
<?php include "inc/piedepagina.php"; ?>

```
**index.php**
```php
<?php include "inc/cabecera.php";?>
<section id="heroe">
	<h3>Motivo por el cual deberia comparar</h3>
	<p>Frase sugerente al respecto</p>
	<a href="catalogo.php">Vamos a ver esa maravilla de catalogo</a>
</section>
<style>
	#heroe{
		background:linear-gradient(to bottom right, rgb(255, 0, 0), rgb( 255, 127, 80));
		height:400px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
		margin-bottom:20px;
	}
	#heroe a{
		color:black;
		background:white;
		text-decoration:none;
		padding:10px;
		border-radius:5px;
  }
</style>
<section id="razones">
	<article>
		<h4>Razon 1 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 2 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 3 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
	<article>
		<h4>Razon 4 por la cual debes comprar</h4>
		<p>Descripción de esa razón</p>
	</article>
</section>
<style>

	#razones{
		display:grid;
		grid-template-columns:repeat(2,1fr);
		gap:20px;
		margin-top:20px;
	}
	#razones article{
		text-align:center;
		background:linear-gradient(to right, rgb(255, 0, 0), rgb(255, 127, 80));
		padding:20px;
		border-radius:5px;
		display:flex;
		flex-direction:column;
		color:black;
		justify-content:center;
		align-items:center;
	}
  
</style>
<?php include "inc/piedepagina.php";?>

```
**producto.php**
```php
<?php include "inc/cabecera.php"; ?>

<section id="paginaproducto">

	<?php
		$host = "localhost";
		$user = "tiendaonlinedamdaw";
		$pass = "Tiendaonlinedamdaw123$";
		$db   = "tiendaonlinedamdaw";

		$conexion = new mysqli($host, $user, $pass, $db);

		$sql = "SELECT * FROM producto WHERE id = ".$_GET['id'].";";

		$resultado = $conexion->query($sql);
		while ($fila = $resultado->fetch_assoc()) {
	?>
		<article>
			<div class="imagen" style="background:url(img/producto.jpg);background-size:cover;"></div>
			<p><?= $fila['precio'] ?></p>
			<form action="carrito.php" method="POST">
				<input type="hidden" name="id" value="<?= $fila['id'] ?>">
				<input type="number" name="unidades" min=1 max=10 value=1>
				<input type="submit" value="Comprar">
			</form>
		</article>
		
		<article>
			<h3><?= $fila['nombre_producto'] ?></h3>
			<h4><?= $fila['descripcion'] ?></h4>
			<p><?= $fila['descripcion_larga'] ?></p>
		</article>
	<?php
		}

		$conexion->close();
    ?>

</section>

<style>
	#paginaproducto{
		display:flex;
		gap:20px;
	}
	#paginaproducto article{
		text-align:justify;
		flex:1;
	}
	#paginaproducto article .imagen{
		background:darkorchid;
		height:300px;
		border-radius:5px 5px 0px 0px;
	}
	#paginaproducto article a{
		background:darkorchid;
		padding:10px;
		border-radius:5px;
		color:white;
		text-decoration:none;
	}
	
</style>

<?php include "inc/piedepagina.php"; ?>

```
####### css
**estilo.css**
```css
body,html{
	background:#FF4500;
}

header,main,footer{
	width:1100px;
	background:white;
	padding:20px;
	margin:auto;
}

```
####### img
####### inc
**cabecera.php**
```php
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Tienda valentindg</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Valentindg</h1>
			<h2>Tienda Online</h2>
			<nav>
				<ul>
					<li>
						<a href="catalogo.php">Catalogo</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
		
		
<style>
	header{
		text-align:center;
	}
	
	nav ul{
		display:flex;
		width:100%;
		justify-content:center;
		list-style-type:none;
		padding:0px;
		margin:0px;
	}
	nav ul li{
		padding:0px;
		margin:0px;
	}
</style>
			

```
**piedepagina.php**
```php
		</main>
		<footer>
		</footer>
	</body>
</html>

```
#### 012-Buscador Satori
**001-Crawler.py**
```python
import requests
from lxml import html

url = "https://elpais.com"

response = requests.get(url, timeout=10)
response.raise_for_status()  # raises exception if not 200

# Parse HTML
tree = html.fromstring(response.content)

# Find all <h1> elements
h1_elements = tree.xpath("//a")

# Print their text content
for i, h1 in enumerate(h1_elements, start=1):
	text = h1.text_content().strip()
	print(f"A #{i}: {text}")

```
**002-Titulo enlaces.py**
```python
import requests
from lxml import html

url = "https://elpais.com"

response = requests.get(url, timeout=10)
response.raise_for_status()

tree = html.fromstring(response.content)

# 1. Web title
title = tree.xpath("//title/text()")
print("WEB TITLE:")
print(title[0] if title else "No title found")

# 2. Links href
print("\nLINKS:")
links = tree.xpath("//a/@href")

for i, href in enumerate(links, start=1):
    print(f"{i}: {href}")

```
**003-BD.sql**
```sql
sudo mysql -u root -p

##### CREAMOS BD #######
CREATE DATABASE Satori;
USE Satori;

#### CREAMOS TABLA #####
CREATE TABLE paginas(
	id INT PRIMARY KEY AUTO_INCREMENT,
	titulo VARCHAR(255),
	url VARCHAR(255),
	contenido TEXT
);

##### CREAMOS USUARIO #######
CREATE USER 
'Satori'@'localhost' 
IDENTIFIED  BY 'Satori123$';

GRANT USAGE ON *.* TO 'Satori'@'localhost';

ALTER USER 'Satori'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON Satori.* 
TO 'Satori'@'localhost';

FLUSH PRIVILEGES;

```
**004-Satori guarda.py**
```python
import requests									# Importamos requests
from lxml import html						# importamos HTML
import mysql.connector					# Importamos MySQL

URL = "https://elpais.com"

DB_HOST = "localhost"						
DB_USER = "Satori"
DB_PASSWORD = "Satori123$"
DB_NAME = "Satori"

response = requests.get(URL, timeout=10, headers={
    "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 Chrome/120 Safari/537.36"
})
response.raise_for_status()

tree = html.fromstring(response.content)

title_list = tree.xpath("//title/text()")										# Saco el titulo
web_title = title_list[0].strip() if title_list else None


html_content = response.text[:255] 															# HTML completo

print("WEB TITLE:")
print(web_title or "No title found")

conn = mysql.connector.connect(
    host=DB_HOST,
    user=DB_USER,
    password=DB_PASSWORD,
    database=DB_NAME,
    charset="utf8mb4",
    use_unicode=True
)																													# Guardar a MySQL

try:
    cur = conn.cursor()

    sql = """
        INSERT INTO paginas (titulo, url, contenido)
        VALUES (%s, %s, %s)
    """
    cur.execute(sql, (web_title, URL, html_content))
    conn.commit()																				# Inserto

    print(f"\nOK: guardado en MySQL. ID insertado: {cur.lastrowid}")

finally:
    try:
        cur.close()
    except Exception:
        pass
    conn.close()

```
**005-Recursividad.py**
```python
import requests									# Importamos requests
from lxml import html						# importamos HTML
import mysql.connector					# Importamos MySQL
import time 						# Para dormir

URLS = ["https://elpais.com"]

DB_HOST = "localhost"						
DB_USER = "Satori"
DB_PASSWORD = "Satori123$"
DB_NAME = "Satori"

for URL in URLS:
  time.sleep(5)									# DORMIMOS 5 SEGUNDOS!!!!!!!!!!!!!!!!!!!!!!!
  response = requests.get(URL, timeout=10, headers={
      "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 Chrome/120 Safari/537.36"
  })
response.raise_for_status()

tree = html.fromstring(response.content)

title_list = tree.xpath("//title/text()")										# Saco el titulo
web_title = title_list[0].strip() if title_list else None


html_content = response.text[:255] 												# HTML completo

print("WEB TITLE:")
print(web_title or "No title found")

conn = mysql.connector.connect(
    host=DB_HOST,
    user=DB_USER,
    password=DB_PASSWORD,
    database=DB_NAME,
    charset="utf8mb4",
    use_unicode=True
)																				# Guardar a MySQL

try:
    cur = conn.cursor()

    sql = """
        INSERT INTO paginas (titulo, url, contenido)
        VALUES (%s, %s, %s)
    """
    cur.execute(sql, (web_title, URL, html_content))
    conn.commit()																 # Inserto

    print(f"\nOK: guardado en MySQL. ID insertado: {cur.lastrowid}")

finally:
    try:
        cur.close()
    except Exception:
        pass
    conn.close()

```
**006-La liamos.py**
```python
import requests                                    # Importamos requests
from lxml import html                              # importamos HTML
import mysql.connector                             # Importamos MySQL
import time                                       # Para dormir
from urllib.parse import urljoin, urlparse

URLS = ["https://espn.com"]

DB_HOST = "localhost"
DB_USER = "Satori"
DB_PASSWORD = "Satori123$"
DB_NAME = "Satori"

VISITADAS = set()   # Para evitar bucles infinitos


def sanitize_links(base_url, links):
    urls_validas = []

    for link in links:
        if not link:
            continue

        link = link.strip()

        # Ignorar enlaces basura
        if link.startswith(("#", "javascript:", "mailto:", "tel:")):
            continue

        # Convertir relativos en absolutos
        full_url = urljoin(base_url, link)

        parsed = urlparse(full_url)

        # Solo http/https
        if parsed.scheme not in ("http", "https"):
            continue

        # Evitar URLs absurdamente largas
        if len(full_url) > 500:
            continue

        urls_validas.append(full_url)

    return list(set(urls_validas))  # eliminar duplicados


def busca(URLS):
    for URL in URLS:

        if URL in VISITADAS:
            continue

        VISITADAS.add(URL)

        time.sleep(5)

        try:
            print("Procesando:", URL)

            response = requests.get(
                URL,
                timeout=10,
                headers={
                    "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 Chrome/120 Safari/537.36"
                }
            )
            response.raise_for_status()

            tree = html.fromstring(response.content)

            title_list = tree.xpath("//title/text()")
            web_title = title_list[0].strip() if title_list else None

            html_content = response.text[:255]

            print("WEB TITLE:")
            print(web_title or "No title found")

            conn = mysql.connector.connect(
                host=DB_HOST,
                user=DB_USER,
                password=DB_PASSWORD,
                database=DB_NAME,
                charset="utf8mb4",
                use_unicode=True
            )

            try:
                cur = conn.cursor()

                sql = """
                    INSERT INTO paginas (titulo, url, contenido)
                    VALUES (%s, %s, %s)
                """
                cur.execute(sql, (web_title, URL, html_content))
                conn.commit()

                print(f"OK MySQL → ID: {cur.lastrowid}")

            finally:
                try:
                    cur.close()
                except Exception:
                    pass
                conn.close()

            enlaces = tree.xpath("//a/@href")
            enlaces_limpios = sanitize_links(URL, enlaces)

            busca(enlaces_limpios)

        except Exception as e:
            print("Error pero continuamos:", e)


busca(URLS)



```
**007-Saneamos.py**
```python
import requests                                    # Importamos requests
from lxml import html                              # importamos HTML
import mysql.connector                             # Importamos MySQL
import time                                       # Para dormir
from urllib.parse import urljoin, urlparse

URLS = ["https://elpais.com"]

DB_HOST = "localhost"
DB_USER = "satori"
DB_PASSWORD = "Satori123$"
DB_NAME = "satori"

VISITADAS = set()   # Para evitar bucles infinitos


def sanitize_links(base_url, links):
    urls_validas = []

    for link in links:
        if not link:
            continue

        link = link.strip()

        # Ignorar enlaces basura
        if link.startswith(("#", "javascript:", "mailto:", "tel:")):
            continue

        # Convertir relativos en absolutos
        full_url = urljoin(base_url, link)

        parsed = urlparse(full_url)

        # Solo http/https
        if parsed.scheme not in ("http", "https"):
            continue

        # Evitar URLs absurdamente largas
        if len(full_url) > 500:
            continue

        urls_validas.append(full_url)

    return list(set(urls_validas))  # eliminar duplicados


def busca(URLS):
    for URL in URLS:

        if URL in VISITADAS:
            continue

        VISITADAS.add(URL)

        time.sleep(1)

        try:
            print("Procesando:", URL)

            response = requests.get(
                URL,
                timeout=10,
                headers={
                    "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 Chrome/120 Safari/537.36"
                }
            )
            response.raise_for_status()

            tree = html.fromstring(response.content)

            title_list = tree.xpath("//title/text()")
            web_title = title_list[0].strip() if title_list else None

            html_content = response.text[:255]

            print("WEB TITLE:")
            print(web_title or "No title found")

            conn = mysql.connector.connect(
                host=DB_HOST,
                user=DB_USER,
                password=DB_PASSWORD,
                database=DB_NAME,
                charset="utf8mb4",
                use_unicode=True
            )

            try:
                cur = conn.cursor()

                sql = """
                    INSERT INTO paginas (titulo, url, contenido)
                    VALUES (%s, %s, %s)
                """
                cur.execute(sql, (web_title, URL, html_content))
                conn.commit()

                print(f"OK MySQL → ID: {cur.lastrowid}")

            finally:
                try:
                    cur.close()
                except Exception:
                    pass
                conn.close()

            enlaces = tree.xpath("//a/@href")
            enlaces_limpios = sanitize_links(URL, enlaces)

            busca(enlaces_limpios)

        except Exception as e:
            print("Error pero continuamos:", e)


busca(URLS)

```
**008-Mockup buscador.html**
```html
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Satori</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h1>Satori</h1>
            <form method="POST" action="?">
                <input type="text" name="criterio">
            </form>
        </header>
        <main>
            <article>
                <h2>Titulo de la web</h2>
                <a href="https://ejemplo.com">https://ejemplo.com</a>
            </article>
        </main>
    </body>
</html>
```
**009-Semidinamico y estilo.php**
```php
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Satori</title>
        <meta charset="utf-8">
        <style>
            body,html{padding:0px;margin:0px;font-family:sans-serif;}
            header{display:flex;justify-content:center;align-items:center;gap:20px;}
            main{margin:auto;width:800px;}
            article{border-bottom:1px solid lightgray;margin:20px;padding:20px;}
            h1,h2,h3{padding:0px;margin:0px;}
        </style>
    </head>
    <body>
        <header>
            <h1>Satori</h1>
            <form method="POST" action="?">
                <input type="text" name="criterio">
            </form>
        </header>
        <main>
            <?php for($i = 0;$i<30;$i++){ ?>
                <article>
                    <h2>Titulo de la web</h2>
                    <a href="https://ejemplo.com">https://ejemplo.com</a>
                </article>
            <?php } ?>
        </main>
    </body>
</html>
```
**010-Atrapamos criterio de busqueda.php**
```php
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Satori</title>
        <meta charset="utf-8">
        <style>
            body,html{padding:0px;margin:0px;font-family:sans-serif;}
            header{display:flex;justify-content:center;align-items:center;gap:20px;}
            main{margin:auto;width:800px;}
            article{border-bottom:1px solid lightgray;margin:20px;padding:20px;}
            h1,h2,h3{padding:0px;margin:0px;}
        </style>
    </head>
    <body>
        <header>
            <h1>Satori</h1>
            <form method="POST" action="?">
                <input type="text" name="criterio">
            </form>
        </header>
        <main>
            <?php
                if(isset($_POST['criterio'])){
                    echo "Lo que vas a buscar es: ".$_POST['criterio'];
                }
            ?>
            <?php for($i = 0;$i<30;$i++){ ?>
                <article>
                    <h2>Titulo de la web</h2>
                    <a href="https://ejemplo.com">https://ejemplo.com</a>
                </article>
            <?php } ?>
        </main>
    </body>
</html>
```
**011-Resultados Mysql.php**
```php
<!doctype html>
<html lang="es">
  <head>
    <title>Satori</title>
    <meta charset="utf-8">
    <style>
    	body,html{padding:0px;margin:0px;font-family:sans-serif;}
      header{display:flex;justify-content:center;align-items:center;gap:20px;
      padding:20px;}
      main{margin:auto;width:800px;}
      article{border-bottom:1px solid lightgray;margin:20px;padding:20px;}
      h1,h2,h3{padding:0px;margin:0px;}
      a{font-size:10px;}
      input{border:1px solid lightgrey;padding:10px;border-radius:20px;}
      header img{width:50px;}
    </style>
  </head>
  <body>
    <header>
    	<img src="satorilogo.png">
      <h1>Satori</h1>
      <form method="POST" action="?">
        <input type="text" name="criterio" placeholder="Introduce algo para buscar...">
      </form>
    </header>
    <main>
    	<?php
      	if(isset($_POST['criterio'])){
        	echo "Lo que vas a buscar es: ".$_POST['criterio'];
        }
        $host = "localhost";
        $user = "Satori";
        $pass = "Satori123$";
        $db   = "Satori";

        $conexion = new mysqli($host, $user, $pass, $db);
        
        $resultado = $conexion->query("
          SELECT * FROM paginas WHERE titulo LIKE '%".$_POST['criterio']."%';
        ");	// Comparador LIKE '%xxxxxx%'
        while ($fila = $resultado->fetch_assoc()) { ?>
      	<article>
          <h2><?= $fila['titulo'] ?></h2>
          <a href="<?= $fila['url'] ?>"><?= $fila['url'] ?></a>
        </article>
      <?php } ?>
    </main>
  </body>
</html>
```
**012-Mejora con IA.php**
```php
<?php
// --- SECCIÓN DE LÓGICA PHP (BACKEND) ---
// Mantengo la seguridad que ya implementamos anteriormente.
$resultados = null;
$busqueda = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['criterio'])) {
    $busqueda = trim($_POST['criterio']);
    
    // Credenciales
    $host = "localhost"; $user = "Satori"; $pass = "Satori123$"; $db = "Satori";

    // Conexión segura
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $conexion = new mysqli($host, $user, $pass, $db);
        $conexion->set_charset("utf8mb4");

        // Sentencia preparada para evitar Inyección SQL
        $stmt = $conexion->prepare("SELECT titulo, url, descripcion FROM paginas WHERE titulo LIKE ? OR url LIKE ? LIMIT 20");
        $param = "%" . $busqueda . "%";
        $stmt->bind_param("ss", $param, $param); // Buscamos en título y URL
        $stmt->execute();
        $resultados = $stmt->get_result();
        $stmt->close();
        $conexion->close();
    } catch (Exception $e) {
        $error = "Error en el sistema de búsqueda."; // No mostrar detalles técnicos al usuario
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <title>Satori Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- VARIABLES DE COLOR Y TEMA --- */
        :root {
            /* Un degradado moderno para el header */
            --gradient-start: #4f46e5; /* Indigo vibrante */
            --gradient-end: #9333ea;   /* Morado vibrante */
            --bg-body: #f3f4f6;        /* Gris muy claro para el fondo */
            --card-bg: #ffffff;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --primary-link: #4f46e5;
            --url-green: #059669;      /* Verde bonito para URLs */
        }

        /* --- ESTILOS GENERALES --- */
        body, html {
            padding: 0; margin: 0;
            font-family: 'Poppins', sans-serif; /* Aplicamos la nueva fuente */
            background-color: var(--bg-body);
            color: var(--text-dark);
            min-height: 100vh;
        }

        /* --- HEADER LLAMATIVO --- */
        header {
            /* Fondo con degradado */
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 20px 80px; /* Más padding abajo para que el input "flote" */
            color: white;
            position: relative;
            margin-bottom: 40px;
        }

        .brand-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        /* Estilo si la imagen no carga o para el placeholder */
        .logo-placeholder {
            width: 50px; height: 50px; background: rgba(255,255,255,0.2);
            border-radius: 50%; display: flex; justify-content: center; align-items: center;
            font-weight: bold; font-size: 24px;
        }
        header img { width: 60px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2)); }
        
        h1 {
            font-size: 32px; margin: 0; font-weight: 600; letter-spacing: -0.5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* --- INPUT DE BÚSQUEDA FLOTANTE --- */
        form {
            width: 100%;
            max-width: 700px;
            position: relative;
            z-index: 10; /* Asegura que esté por encima */
        }

        input[type="text"] {
            width: 100%;
            padding: 20px 30px;
            border-radius: 50px; /* Píldora completa */
            border: none;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            outline: none;
            box-sizing: border-box;
            /* Sombra profunda para efecto flotante */
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            /* Al hacer foco, se eleva un poco más y la sombra crece */
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
        }
        input::placeholder { color: #aaa; }

        /* --- CONTENEDOR PRINCIPAL --- */
        main {
            max-width: 800px;
            margin: -30px auto 50px; /* Margen negativo para subirlo hacia el header */
            padding: 0 20px;
            position: relative;
            z-index: 5;
        }

        .info-estado {
            text-align: center; margin-bottom: 30px; color: var(--text-light); font-weight: 300;
        }
        .error-msg { color: #dc2626; background: #fecaca; padding: 10px; border-radius: 8px; text-align: center;}

        /* --- TARJETAS DE RESULTADOS --- */
        article {
            background: var(--card-bg);
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 16px; /* Bordes muy redondeados */
            border: 1px solid rgba(0,0,0,0.04);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        article:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
        }
        
        article h2 {
            padding: 0; margin: 0 0 8px 0; font-size: 20px; font-weight: 600; line-height: 1.3;
        }
        
        article h2 a {
            text-decoration: none; color: var(--primary-link); transition: color 0.2s;
        }
        article h2 a:hover { color: var(--gradient-end); text-decoration: underline; }
        
        /* Estilo para la URL */
        .url-display {
            font-size: 13px;
            color: var(--url-green);
            display: block;
            margin-bottom: 12px;
            font-weight: 400;
            white-space: nowrap; overflow: hidden; text-overflow: ellipsis; /* Corta URLs largas */
        }
        
        /* Un pequeño "snippet" de texto falso para que se vea mejor el diseño */
        .snippet { color: var(--text-light); font-size: 14px; line-height: 1.6; }

    </style>
</head>
<body>
    <header>
        <div class="brand-container">
            <?php if(file_exists('satorilogo.png')): ?>
                <img src="satorilogo.png" alt="Logo Satori">
            <?php else: ?>
                <div class="logo-placeholder">S</div>
            <?php endif; ?>
            <h1>Satori</h1>
        </div>
        <form method="POST" action="">
            <input type="text" name="criterio" placeholder="¿Qué quieres descubrir hoy?" value="<?= htmlspecialchars($busqueda) ?>" autocomplete="off" required>
        </form>
    </header>

    <main>
            <?php if (isset($error)): ?>
                <div class="error-msg"><?= $error ?></div>
            <?php endif; ?>

            <?php if ($busqueda && !isset($error)): ?>
                <p class="info-estado">Resultados para: <strong><?= htmlspecialchars($busqueda) ?></strong></p>
            <?php endif; ?>

            <?php 
            if ($resultados && $resultados->num_rows > 0) {
                // INICIO DEL BUCLE
                while ($fila = $resultados->fetch_assoc()) { 
                    $tituloSafe = htmlspecialchars($fila['titulo']);
                    $urlSafe = htmlspecialchars($fila['url']);
                    // Operador ternario para verificar si hay descripción
                    $descSafe = !empty($fila['descripcion']) ? htmlspecialchars($fila['descripcion']) : "Sin descripción disponible.";
                ?>
                <article>
                    <h2>
                        <a href="<?= $urlSafe ?>"><?= $tituloSafe ?></a>
                    </h2>
                    <span class="url-display"><?= $urlSafe ?></span>
                    
                    <div class="snippet">
                        <?= $descSafe ?>
                    </div>
                </article>
                <?php 
                } // CIERRE DEL WHILE
                
            } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($resultados) && !isset($error)) {
                // CASO NO HAY RESULTADOS (Importante para UX)
                echo "<div style='text-align:center; padding: 40px; color: #6b7280;'>
                        <p>No se encontraron resultados.</p>
                    </div>";
            } // CIERRE DEL IF (Esto es lo que te faltaba)
            ?>
        </main>
    </body>
</html>
```
**013-Busqueda con descripcion.py**
```python
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

```
### 011-Repaso examen 2da Eval
#### 001-Miercoles 7
**001-Votación examen.md**
```markdown
Examenes proyecto SI 18
Examenes proyecto NO 1
Abstención 2

```
**002-Tipos de examen propuestos.md**
```markdown
Propuestas exámenes semana que viene:
Propuesta "Proyecto Hectorcismo":
	- Habéis hecho una app por parejas
	- En el examen de bases de datos, mostráis la base de datos de vuestro proyecto
	- En el examen de lenguajes de marcas, mostráis todas las vistas (front y back?) desarrolladas en vuestro proyecto
	- En el examen de programación, mostráis los controladores (cómo os conectáis a la base de datos y enviais cosas a las vistas)
	- En el examen de proyecto intermodular, mostráis el conjunto en funcionamiento

Propuesta "como los exámenes anteriores":
	- Os proporciono un modelo de datos a cada uno de vosotros (un blog, portafolio, pagina de noticias, etc)
	- En bases de datos, creais las tablas, las relaciones, y las consultas correspondientes (CRUD)
	- En lenguajes de marcas, creais tres vistas (login, panel y front)
	- En programación, creais los controladores para unir bases de datos y vistas
	- En proyecto intermodular, mostráis el conjunto en funcionamiento

```
**003-Examen seleccionado en clase.md**
```markdown
Tipo de examen aprobado: examen de proyecto
Plan de trabajo de esta semana:
	- Repaso, simulacros, y adelantar el proyecto

```
**004-uso de lightgoldenrodyellow.md**
```markdown
Uso de lightgoldenrodyellow:
python3 lightgoldenrodyellow.py [origen] [destino]
[origen] = la carpeta que quieres documentar
[destino] = lugar donde se va a guardar el informe

python3 lightgoldenrodyellow.py /var/www/html/GitHub/Proyecto-Entornos /var/www/html/GitHub/

```
**005-planteamiento del examen de base de datos.md**
```markdown
Entregables en el examen de bases de datos (la base de datos de vuestro proyecto)

Crear bases de datos, y acceso por usuarios
Crear tablas, indices, claves, relaciones
Sabemos Crear, Read, Update, Delete
Sabemos hacer left join
Sabemos crear vistas
Sabemos operaciones como show tables (importante para el panel de control)

Herramientas de apoyo:
	1.-lightgoldenrodyellow (informe de proyecto)
	2.-jocarsa diagram para diagramas de bases de datos, estructura, flujo,

Qué ocurre en el examen: (el modelo de datos de vuestro proyecto)
	1.-Contáis cómo habéis creado la base de datos, comandos de creación de base de datos y de tablas, los comandos de creación de usuarios (contraseña y permisos)
	2.-Contáis, las tablas que tenéis, y por qué (nombres de las tablas, campos, tipos de datos)
	3.-Contáis las relaciones que existen entre las tablas, las FK que habéis creado, y las peticiones de tipo JOIN que habéis necesitado hacer
	4.-Probablemente habréis usado vistas para simplificar algunas peticiones - indicad cuales y por qué
	5.-Por ejemplo, en elementos tales como el panel de administración, es normal usar comandos como show tables() o describe table - indicad cómo lo habéis usado, para qué, etc

```
**006-Planteamiento del examen de lenguajes de marcas.md**
```markdown
El objetivo del examen es mostrar las "VISTAS" de vuestro proyecto.
Las "vistas" son "las pantallas" de vuestra aplicación.

En vuestras pantallas habrá mayormente HTML, CSS, y opcionalmente JS.
Si lo necesitáis, podéis usar PHP en el examen.
Teniendo claro que el examen debe centrarse sobre HTML, CSS y op JS.

#Importante: 
	- Empieza el examen con un diagrama de flujo.
	- Explica cómo te mueves por las pantallas.
	- Tenéis jocarsa|diagrama, tenéis DiaDiagram.

Explica las pantallas que has creado y como esta previsto que el usuario se mueva.
A continuación:
	- Una a una, explica las pantallas que has creado:
		1.-Explica las etiquetas HTML que has utilizado (para que sirven, etc).
		2.-Explica las propiedades CSS que has utilizado, base, flex, grid.
		3.-Opcionalmente en el caso de que hayas usado JS, explica el por qué y para qué.

Obviamente debéis explicar todas las pantallas que habéis creado

```
**007-Planteamiento examen programación.md**
```markdown
En el examen de programación, me habláis de los controladores
Suele ser PHP, Python o los dos (cada grupo en funcioń de 
lo que haya escogido)

Son los scripts mediante los cuales:
	1.-Implementáis la lógica de negocio
	2.-Os conectáis a la base de datos para hacer operaciones
	3.-Pintáis algún tipo de resultado en pantalla

Vuestro examen de programación puede contener HTML,CSS mezclado
con los controladores
PERO debéis reforzar vuestras explicaciones en:
	- Los controladores
	- La lógica
	- Flujo de la información

## Acordáos de documentar cada archivo que hayáis creado ##

```
**008-Planteamiento exame PI.md**
```markdown
En principio en proyecto intermodular no deberíais contarme nada de lenguajes de programación.

Me decís:
	-El proyecto que habéis hecho
	-De qué trata
	-Por qué lo habéis hecho
	-Con quién lo habéis hecho
	-Cómo habéis repartido tareas, quién ha hecho qué
	-Como habéis trabajado en equipo
	-Indicáis que conocéis cómo combinar las tecnologías implicadas

El resultado del proyecto intermodular es una aplicación
que resuelva una necesidad humana

```
## Ejercicios
**matrix.py**
```python
#!/usr/bin/env python3
import os
import sys
import time
import random
import shutil
from dataclasses import dataclass

# -------------- ANSI helpers --------------
CSI = "\x1b["
def hide_cursor():   sys.stdout.write(f"{CSI}?25l"); sys.stdout.flush()
def show_cursor():   sys.stdout.write(f"{CSI}?25h"); sys.stdout.flush()
def clear_screen():  sys.stdout.write(f"{CSI}2J{CSI}H"); sys.stdout.flush()
def move(y, x):      sys.stdout.write(f"{CSI}{y};{x}H")
def color_rgb(r,g,b):sys.stdout.write(f"{CSI}38;2;{r};{g};{b}m")
def reset_color():   sys.stdout.write(f"{CSI}0m")

# -------------- Config --------------
# Character set (mix of Latin, digits, Katakana-like)
GLYPHS = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%&*+-=<>"
KATAKANA = "ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝ"
CHARS = (GLYPHS + KATAKANA)

# Trail look
MIN_LEN, MAX_LEN = 6, 20         # trail length range
HEAD_COLOR = (190, 255, 190)     # bright green head
TAIL_BASE  = (30, 180, 60)       # base tail green
BG_ERASE   = " "                 # what to erase with

FPS = 20                         # target FPS
MOVE_PROB_PER_FRAME = 1.0        # 1.0 => move every frame; lower to slow all drops

# -------------- Drop model --------------
@dataclass
class Drop:
    y: int           # current head y (1..H, can start negative to enter from top)
    length: int      # trail length
    tick: int        # simple modulo ticker to vary per-column speed
    delay: int       # frames between moves (1 = fastest)
    col: int         # 1-based column index

def new_drop(col, H):
    length = random.randint(MIN_LEN, MAX_LEN)
    # start above the screen so trails "fall in"
    start_y = random.randint(-H, 0)
    # per column delay: 1..4 frames
    delay = random.randint(1, 4)
    return Drop(y=start_y, length=length, tick=0, delay=delay, col=col)

def gradient_color(t, length):
    """Return RGB for a trail segment t steps behind the head (t>=1)."""
    # fade factor from 1.0 near head to ~0 at tail end
    fade = max(0.0, 1.0 - (t / (length + 1)))
    r = int(TAIL_BASE[0] * fade)
    g = int(TAIL_BASE[1] * fade + 10)
    b = int(TAIL_BASE[2] * fade)
    return (r, g, b)

def rand_char():
    # Heavier weight to Latin/digits, occasional katakana
    if random.random() < 0.85:
        return random.choice(GLYPHS)
    return random.choice(KATAKANA)

# -------------- Main loop --------------
def matrix_rain():
    random.seed()
    try:
        hide_cursor()
        clear_screen()

        cols, rows = shutil.get_terminal_size((80, 24))
        # Keep a drop per visible column (avoid rightmost to reduce wrapping issues)
        drops = [ new_drop(col+1, rows) for col in range(max(1, cols-1)) ]
        last_size_check = 0

        # For erasing last tail cells efficiently, remember last tail-end y per column
        last_tail_end = {d.col: None for d in drops}

        frame_time = 1.0 / FPS
        t0 = time.time()

        while True:
            # Occasionally re-check terminal size and adjust drops
            if last_size_check >= FPS // 2:  # ~ twice per second
                last_size_check = 0
                ncols, nrows = shutil.get_terminal_size((80, 24))
                if ncols != cols or nrows != rows:
                    # Clear and rebuild state on resize to avoid artifacts
                    cols, rows = ncols, nrows
                    clear_screen()
                    # Rebuild drops to match width (minus one to avoid wrapping)
                    width = max(1, cols-1)
                    new_drops = []
                    for i in range(width):
                        if i < len(drops):
                            d = drops[i]
                            d.col = i+1
                            d.y = min(d.y, rows+MAX_LEN)
                            new_drops.append(d)
                        else:
                            new_drops.append(new_drop(i+1, rows))
                    drops = new_drops
                    last_tail_end = {d.col: None for d in drops}

            # Draw each column
            for d in drops:
                d.tick += 1
                moved = (d.tick % d.delay == 0) and (random.random() < MOVE_PROB_PER_FRAME)
                if moved:
                    d.y += 1

                # HEAD
                if 1 <= d.y <= rows:
                    move(d.y, d.col)
                    color_rgb(*HEAD_COLOR)
                    sys.stdout.write(rand_char())

                # TRAIL behind head
                if d.length > 0:
                    tail_end_y = d.y - d.length
                    # Draw fading trail segments that are on screen
                    t = 1
                    y = d.y - 1
                    while t <= d.length and y >= 1:
                        if y <= rows:
                            move(y, d.col)
                            color_rgb(*gradient_color(t, d.length))
                            # flicker: sometimes refresh with a new glyph
                            ch = rand_char() if random.random() < 0.3 else rand_char()
                            sys.stdout.write(ch)
                        t += 1
                        y -= 1

                    # ERASE the cell just after the tail end (keeps screen clean)
                    erase_y = tail_end_y
                    if erase_y >= 1 and erase_y <= rows:
                        # Only erase if we've moved since last frame and the tail end changed
                        if last_tail_end.get(d.col) != erase_y:
                            move(erase_y, d.col)
                            reset_color()
                            sys.stdout.write(BG_ERASE)
                            last_tail_end[d.col] = erase_y

                # recycle drop after passing through
                if d.y - d.length > rows + 3:
                    # new random drop for this column
                    nd = new_drop(d.col, rows)
                    d.y, d.length, d.tick, d.delay = nd.y, nd.length, 0, nd.delay
                    last_tail_end[d.col] = None

            reset_color()
            sys.stdout.flush()

            # Frame pacing
            last_size_check += 1
            # Sleep to keep FPS; account for work time
            t0 += frame_time
            now = time.time()
            delay = t0 - now
            if delay > 0:
                time.sleep(delay)
            else:
                # If we are behind, reset the clock baseline
                t0 = now

    except KeyboardInterrupt:
        pass
    finally:
        # restore terminal state
        reset_color()
        show_cursor()
        move(shutil.get_terminal_size((80,24)).lines, 1)
        sys.stdout.write("\n")
        sys.stdout.flush()

if __name__ == "__main__":
    # Enable ANSI on very old Windows consoles (best effort; modern Windows Terminal not needed)
    if os.name == "nt":
        try:
            import msvcrt, ctypes
            kernel32 = ctypes.windll.kernel32
            handle = kernel32.GetStdHandle(-11)  # STD_OUTPUT_HANDLE
            mode = ctypes.c_uint32()
            kernel32.GetConsoleMode(handle, ctypes.byref(mode))
            kernel32.SetConsoleMode(handle, mode.value | 0x0004)  # ENABLE_VIRTUAL_TERMINAL_PROCESSING
        except Exception:
            pass
    matrix_rain()

```
### EJ - CLASE
**0100-EJ-codigo.py**
```python
from math import sqrt
'''

'''

print("entramos en la función")
if isinstance(raizsegura, (int, float, complex)):
    print("parece que los parámetros son números")
    if raizsegura >= 0
    print("parece que se puede hacer")
    

```
**0110-EJ-codigo-dragones.py**
```python
'''
    Duelos de dragones
    v0.2 valentin de gennaro
'''

#En este bloque tomo los datos del usuario #######################

nombre_dragon_a = input("dime el nombre del dragón A: ")
edad_dragon_a = input("dime la edad del dragón A: ")
clasificacion_dragon_a = ""
fuerza_dragon_a = 0
resistencia_dragon_a = 0
print("El nombre del dragon A es:", nombre_dragon_a)
print("La edad del dragon A es:", edad_dragon_a)

nombre_dragon_b = input("dime el nombre del dragón B: ")
edad_dragon_b = input("dime la edad del dragón B: ")
clasificacion_dragon_b = ""
fuerza_dragon_b = 0
resistencia_dragon_b = 0
print("El nombre del dragon B es:", nombre_dragon_b)
print("La edad del dragon B es:", edad_dragon_b)

#En este bloque me aseguro de que son enteros ##################

try:
    edad_dragon_a = int(edad_dragon_a)
    print("He convertido la edad A correctamente")
except:
    edad_dragon_a = 100
    print("No he convertido la edad A correctamente, uso 100 años por defecto")
    
try:
    edad_dragon_b = int(edad_dragon_b)
    print("He convertido la edad B correctamente")
except:
    edad_dragon_b = 100
    print("No he convertido la edad B correctamente, uso 100 años por defecto")
    
#En este bloque clasifico los dragones ########################## 
    
if edad_dragon_a < 50:
    clasificacion_dragon_a = "Joven"
elif edad_dragon_a >= 50 and edad_dragon_a <= 199:
    clasificacion_dragon_a = "Adulto"
elif edad_dragon_a >= 200:
    clasificacion_dragon_a = "Anciano"
print("El dragon A es:", clasificacion_dragon_a)
    
if edad_dragon_b < 50:
    clasificacion_dragon_b = "Joven"
elif edad_dragon_b >= 50 and edad_dragon_b <= 199:
    clasificacion_dragon_b = "Adulto"
elif edad_dragon_b >= 200:
    clasificacion_dragon_b = "Anciano"
print("El dragon B es:", clasificacion_dragon_b)

#En este bloque defino las funciones obligatorias ###############

def calculaFuerzaBase(edad):
    '''
    Calcula una fuerza base segun la edad:
    - Joven (<50): 10 puntos de fuerza
    - Adulto (50-199): 15 puntos de fuerza
    - Anciano (>=200): 12 puntos de fuerza
    '''
    if edad < 50:
        fuerza = 10
    elif edad <= 199:
        fuerza = 15
    else:
        fuerza = 12
    return fuerza


def turnoDeAtaque(fuerza, resistencia_enemigo):
    '''
    Calcula el daño de un ataque en base a la fuerza del atacante
    y la resistencia del enemigo.
    La formula que uso es:
    daño = fuerza - (resistencia_enemigo // 3), minimo 0.
    No hace prints, solo devuelve el daño.
    '''
    daño = fuerza - (resistencia_enemigo // 3)
    if daño < 0:
        daño = 0

    # Aserciones sobre el daño
    assert isinstance(daño, (int, float)), "El daño debe ser numerico"
    assert daño >= 0, "El daño no puede ser negativo"

    return daño

#En este bloque calculo fuerza y resistencia base ################

fuerza_dragon_a = calculaFuerzaBase(edad_dragon_a)
resistencia_dragon_a = fuerza_dragon_a // 2 + 5

fuerza_dragon_b = calculaFuerzaBase(edad_dragon_b)
resistencia_dragon_b = fuerza_dragon_b // 2 + 5

print("Fuerza base del dragon A:", fuerza_dragon_a, "Resistencia base del dragon A:", resistencia_dragon_a)
print("Fuerza base del dragon B:", fuerza_dragon_b, "Resistencia base del dragon B:", resistencia_dragon_b)

################# Ahora los vamos a entrenar ###################################

for dia in range(1, 4):

###################### como entrenar a tu dragon A##############################
    
    if clasificacion_dragon_a == "Joven":
        fuerza_dragon_a += 2
        resistencia_dragon_a += 2
    elif clasificacion_dragon_a == "Adulto":
        fuerza_dragon_a += 1
        resistencia_dragon_a += 1
    elif clasificacion_dragon_a == "Anciano":
        fuerza_dragon_a += 1
        resistencia_dragon_a += 1
    print("Final del dia" , dia)
    print("El dragon A ahora tiene ", fuerza_dragon_a,"de fuerza y ", resistencia_dragon_a, " de resistencia")
    
###################### como entrenar a tu dragon B###############################
    
    if clasificacion_dragon_b == "Joven":
        fuerza_dragon_b += 2
        resistencia_dragon_b += 2
    elif clasificacion_dragon_b == "Adulto":
        fuerza_dragon_b += 1
        resistencia_dragon_b += 1
    elif clasificacion_dragon_b == "Anciano":
        fuerza_dragon_b += 1
        resistencia_dragon_b += 1
    print("Final del dia" , dia)
    print("El dragon B ahora tiene ", fuerza_dragon_b,"de fuerza y ", resistencia_dragon_b, " de resistencia")

##################### En este bloque preparo el duelo ###############################

salud_dragon_a = 40
salud_dragon_b = 40

print("\nComienza el duelo entre", nombre_dragon_a, "y", nombre_dragon_b)
print("Salud inicial A:", salud_dragon_a, "- Salud inicial B:", salud_dragon_b)

turno = 1

#################### Duelo por turnos hasta que uno llegue a 0 #####################

while salud_dragon_a > 0 and salud_dragon_b > 0:
    print("\n--- Turno", turno, "---")

##################### Turno de ataque del dragon A a B ##############################
    print("\nAtaca", nombre_dragon_a)
    for intento in range(1, 3):  # 2 mordiscos por turno
        daño = turnoDeAtaque(fuerza_dragon_a, resistencia_dragon_b)
        salud_dragon_b -= daño
        if salud_dragon_b < 0:
            salud_dragon_b = 0
############### Asercion para asegurarnos de que la salud no sea negativa ############
        assert salud_dragon_b >= 0, "La salud del dragon B no puede ser negativa"
        print("Mordisco", intento, "->", nombre_dragon_a, "hace", daño, "puntos de daño. Salud de", nombre_dragon_b, ":", salud_dragon_b)
        if salud_dragon_b == 0:
            break

    if salud_dragon_b == 0:
        print("\n", nombre_dragon_b, "no puede continuar el combate.")
        break

######################### Turno de ataque del dragon B a A ###########################
    print("\nAtaca", nombre_dragon_b)
    for intento in range(1, 3):  # 2 mordiscos por turno
        daño = turnoDeAtaque(fuerza_dragon_b, resistencia_dragon_a)
        salud_dragon_a -= daño
        if salud_dragon_a < 0:
            salud_dragon_a = 0
################# Asercion para asegurarnos de que la salud no sea negativa ###########
        assert salud_dragon_a >= 0, "La salud del dragon A no puede ser negativa"
        print("Mordisco", intento, "->", nombre_dragon_b, "hace", daño, "puntos de daño. Salud de", nombre_dragon_a, ":", salud_dragon_a)
        if salud_dragon_a == 0:
            break

    if salud_dragon_a == 0:
        print("\n", nombre_dragon_a, "no puede continuar el combate.")
        break

    turno += 1

###################### En este bloque muestro el resumen final ########################

print("\n===== RESUMEN DEL DUELO =====")
print("Dragón A:", nombre_dragon_a)
print("  Edad:", edad_dragon_a, "- Clasificación:", clasificacion_dragon_a)
print("  Fuerza final:", fuerza_dragon_a, "- Resistencia final:", resistencia_dragon_a)
print("  Salud final:", salud_dragon_a)

print("Dragón B:", nombre_dragon_b)
print("  Edad:", edad_dragon_b, "- Clasificación:", clasificacion_dragon_b)
print("  Fuerza final:", fuerza_dragon_b, "- Resistencia final:", resistencia_dragon_b)
print("  Salud final:", salud_dragon_b)

if salud_dragon_a > salud_dragon_b:
    print("\nEl ganador del duelo es:", nombre_dragon_a)
elif salud_dragon_b > salud_dragon_a:
    print("\nEl ganador del duelo es:", nombre_dragon_b)
else:
    print("\nEl duelo termina en empate.")


```
**0111-EJ-codigo-Magia.py**
```python
'''
	Duelo de magos
	v0.1 Valentín Antonio de Gennaro
'''
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
    print("No he convertido la edad correctamente, uso 100 años por defecto")
    
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
        entradas: clasificacion_mago
        salidas: poder_base
    '''
    poder_base = 0

    if clasificacion_mago == "Aprendiz":
        poder_base = 5
        
    elif clasificacion_mago == "Hechicero":
        poder_base = 8
        
    elif clasificacion_mago == "Archimago":
        poder_base = 10

    print("El poder base de tu", clasificacion_mago, "es:", poder_base)
    return poder_base

# Llamo a la función y guardo el resultado en la variable poder_base
poder_base = poderBase(clasificacion_mago)

################### Duelo con el escudo ###################

# escudo empieza con 15pts
energia_escudo = 15
print("La energía inicial del escudo es:", energia_escudo)

# recorre dos turnos con for
for turno in range(1, 3):
    print("\n---------- Turno", turno, "----------")

    # turno 1 fuego daño = poderbase // 2
    if turno == 1:
        print("El mago lanza un hechizo de FUEGO")
        daño = poder_base // 2
    
    # turno 2 hechizo rayo = daño = poderbase // 3
    else:
        print("El mago lanza un hechizo de RAYO")
        daño = poder_base // 3

    # nos aseguramos de que el daño nunca sea negativo
    if daño < 0:
        daño = 0

    # tras cada daño, print de daño y mayor que cero
    print("El daño provocado al escudo es:", daño)

    # resta el daño al escudo
    energia_escudo = energia_escudo - daño

    # tras ajuste de energia, energia no puede ser menor que cero
    if energia_escudo < 0:
        energia_escudo = 0

    print("La energía del escudo tras el ataque es:", energia_escudo)

################### Salida final ###################

print("\n=========== RESUMEN DEL DUELO ===========")
print("Edad del mago:", edad_mago)
print("Rango del mago:", clasificacion_mago)
print("Poder base del mago:", poder_base)
print("Energía final del escudo:", energia_escudo)

# energia es 0
if energia_escudo == 0:
    print("El escudo ha sido destruido. El duelo ha roto la defensa mágica.")

# energia es mayor que 0, escudo resiste duelo
else:
    print("El escudo resiste el duelo. La barrera mágica sigue en pie.")


```
### EJ - SUB
#### U1
**001-EJ-Resol.md**
```markdown
En este ejercicio vamos a hacer uso de las listas las cuales son muy utiles al requerir que la aplicación almacene informacion y luego te la imprima en pantalla.
Para realizar este ejercicio primero debemos definir la variables y preguntarle al usuario que valor asignarle, como se puede ver a continuación:
```
	jugados_rugby = int(input("Introdcuce el numero de partidos jugados: "))
	victorias_rugby = int(input("Introduce el numero de victorias: "))
```
Luego vamos a añadir una lista vacia:
```
	juegos_movil = []
```
Seguido de eso hay que pedirle al usuario los datos a almacenar en esa lista y agregarlos a la lista:
```
	juego1 = input("Introduce primer juego favorito: ")
	juegos_movil.append(juego1)
```
Luego le muestro al usuario la información:
```
	print("Jugaste ",jugados_rugby,"partidos en total")
```
A continuación el codigo completo:
```
	'''
		Información de juegos
		v0.1 Valentin Antonio De Gennaro
		
	'''

	## DEFINO VARIABLES Y LES ASIGNO VALOR ##
	jugados_rugby = int(input("Introdcuce el numero de partidos jugados: "))
	victorias_rugby = int(input("Introduce el numero de victorias: "))

	## CREO UNA LISTA VACIA ##
	juegos_movil = []

	## PIDO LOS DATOS AL USUARIO Y LOS AÑADO A LA LISTA ##
	juego1 = input("Introduce primer juego favorito: ")
	juegos_movil.append(juego1)
	juego2 = input("Introduce tu segundo juego favorito: ")
	juegos_movil.append(juego2)
	juego3 = input("Introduce tu tercer juego favorito: ")
	juegos_movil.append(juego3)

	## MUESTRO INFORMACIÓN AL USUARIO ##
	print("#######################################")
	print("Jugaste ",jugados_rugby,"partidos en total")
	print("Ganaste ",victorias_rugby,"partidos en total")
	print("---------------------------------------")

	## MUESTRO INFORMACIÓN AL USUARIO ##
	for juego in juegos_movil:
		print("Uno de tus juegos favoritos es: ",juego)
		print("---------------------------------------")
```
**NOTAS:**
- El uso de listas es muy util a la hora de almacenar información

```
**001-EJ.py**
```python
'''
	Información de juegos
	v0.1 Valentin Antonio De Gennaro
	
'''

## DEFINO VARIABLES Y LES ASIGNO VALOR ##
jugados_rugby = int(input("Introdcuce el numero de partidos jugados: "))
victorias_rugby = int(input("Introduce el numero de victorias: "))

## CREO UNA LISTA VACIA ##
juegos_movil = []

## PIDO LOS DATOS AL USUARIO Y LOS AÑADO A LA LISTA ##
juego1 = input("Introduce primer juego favorito: ")
juegos_movil.append(juego1)
juego2 = input("Introduce tu segundo juego favorito: ")
juegos_movil.append(juego2)
juego3 = input("Introduce tu tercer juego favorito: ")
juegos_movil.append(juego3)

## MUESTRO INFORMACIÓN AL USUARIO ##
print("#######################################")
print("Jugaste ",jugados_rugby,"partidos en total")
print("Ganaste ",victorias_rugby,"partidos en total")
print("---------------------------------------")

## MUESTRO INFORMACIÓN AL USUARIO ##
for juego in juegos_movil:
	print("Uno de tus juegos favoritos es: ",juego)
	print("---------------------------------------")

```
**002-EJ-Resol.md**
```markdown
En este ejercicio mediante variables vamos a realizar un registro de los puntos que llevas en rugby.
Las variables se utilizan para almacenar la información y como el nombre lo indica esta informacion puede variar.
Este codigo utiliza variables para definir un valor utilizando un operador de asignacion `=` seguido del valor literal que le asignamos a la variable.
Un ejemplo de asignar valor a una variable: 
```
puntos_rugby = 0
```
Y para mostrar mejor esto voy a mostrarte un codigo el cual mediante un `input` se le pide al usuario que me diga los puntos que anotó y la aplicacion va incrementar por 3 ese valor para calcular los puntos totales que tienes.
```
'''
    Registro puntos en rugby
    v0.1 Valentín Antonio de Gennaro
    Lleva el registro de los puntos anotados
'''

######## Declaro variables ########
puntos_rugby = 0

####### Entrada de información #########
puntos_rugby = int(input("Cuantos puntos has anotado: "))

####### Incremento los puntos #####
puntos_rugby *= 3

###### Devuelvo los datos #########
print("tienes:", puntos_rugby, "puntos totales")
```

**Nota:** 
- Tener cuidado con el cierre de parentesis, se deben cerrar todos los que se abran para que todo funcione.

Trabajar con int nos permite convertir el valor introducido en un numero entero haciendo todo mas simplificado.
```
**002-EJ.py**
```python
'''
    Registro puntos en rugby
    v0.1 Valentín Antonio de Gennaro
    Lleva el registro de los puntos anotados
'''

######## Declaro variables ########
puntos_rugby = 0

####### Entrada de información #########
puntos_rugby = int(input("Cuantos puntos has anotado: "))

####### Incremento los puntos #####
puntos_rugby *= 3

###### Devuelvo los datos #########
print("tienes:", puntos_rugby, "puntos totales")


```
**003-EJ-Resol.md**
```markdown
En el ejercicio a continuación se visualiza una aplicación que puede ser utilizada para calcular la duración de los partidos o torneos, o las calorías quemadas durante ese partido.
Mediante un operador aritmético `*` se puede calcular diferentes valores y luego mediante la función `print`se puede mostrar por pantalla la información. Un ejemplo en código: 
```
'''
    Realizar cálculos matemáticos
    v0.1 Valentín Antonio de Gennaro
'''

################ 1 ########################

dias_torneo = 3

horas = dias_torneo * 24
print("El torneo de rugby duró:", horas, "horas")

########### 2 ############################

horas = 10

minutos = horas * 60
print("10 horas son:",minutos, "minutos")

########### 3 ###########################

hora = 2
calorias = 500

calorias_quemadas = calorias * hora
print("En total quemaste:", calorias_quemadas, "calorías")
```
La forma de hacerlo paso a paso es primero definir la variable
```
dias_torneo = 3
```
Luego mediante el operador aritmético `*` vamos a realizar una multiplicación
```
horas = dias_torneo * 24
```
Y por ultimo mostramos por pantalla el resultado para que el usuario pueda visualizarlo
```
print("El torneo de rugby duró:", horas, "horas")
```
En resumen mediante operadores aritméticos se pueden realizar cálculos matemáticos 

```
**003-EJ.py**
```python
'''
    Realizar cálculos matemáticos
    v0.1 Valentín Antonio de Gennaro
'''

################ 1 ########################

dias_torneo = 3

horas = dias_torneo * 24
print("El torneo de rugby duró:", horas, "horas")

########### 2 ############################

horas = 10

minutos = horas * 60
print("10 horas son:",minutos, "minutos")

########### 3 ###########################

hora = 2
calorias = 500

calorias_quemadas = calorias * hora
print("En total quemaste:", calorias_quemadas, "calorías")

```
**004-EJ-Resol.md**
```markdown
En la código de este ejercicio se puede ver como este te dice el número favorito del juego que te gusta y tu edad.
El funcionamiento paso a paso es:
Primero declarar una variable y ponerle un literal, esto se hace de la siguiente manera:
```
edad = 21
```
Y luego mostrar por pantalla ese literal, esto se hace de la siguiente manera:
```
print("Tu edad es:", edad)
```
A continuación se puede visualizar el código:
```
'''
    Edades y números
    v0.1 Valentín Antonio de Gennaro
    Te dice tu edad y el nùmero de tu juego favorito
'''

edad = 21
print("Tu edad es:", edad)

numero_favorito = 25
print("El número de tu juego favorito es:", numero_favorito)
```
Mi conclusion: Un literal es muy importante ya que con este se puede asiganr un valor a una variable. Un ejemplo de uso podria ser calcular los puntos por partido de rugby, hay que declarar la variable de puntos y mediante `input` asignarle un literal.

```
**004-EJ.py**
```python
'''
    Edades y números
    v0.1 Valentín Antonio de Gennaro
    Te dice tu edad y tu número favorito
'''

edad = 21
print("Tu edad es:", edad)

numero_favorito = 25
print("El número de tu juego favorito es:", numero_favorito)



```
**005-EJ-Resol.md**
```markdown
En el ejercicio a continuación a partir de constantes y variables, se muestran dos valores diferentes. Las constantes se escriben en mayúsculas mientras que las variables en minúsculas, aunque realmente en python no existen las constantes solo son variables en mayúsculas.
A continuación vamos a visualizar el código el cual muestra el uso de las constantes y variables, y como luego se muestra en pantalla:

```
'''
    Duración partido rugby
    v0.1 Valentín Antonio de Gennaro
    Te informa la duración de un partido de rugby
'''
#En python no existen realmente las constantes, son  variables en mayúsculas.

DURACION_RUGBY = 80
minutos_jugados = DURACION_RUGBY
minutos_jugados = 90

print("El partido tiene una duración inicial de ", DURACION_RUGBY, "minutos")

print("Y una duración final de ", minutos_jugados, "minutos")
```
**Notas:**
- Las constantes en el día a día se pueden utilizar para definir un valor que sea inmutable, que no se pueda modificar. En el rugby podría ser el valor de cada touchdown.
- Hay que tener cuidado ya que si se le cambia el valor a esa variable el código daría error.


En conclusión el uso de constantes es necesario para definir valores inmutables.


```
**005-EJ.py**
```python
'''
    Duración partido rugby
    v0.1 Valentín Antonio de Gennaro
    Te informa la duración de un partido de rugby
'''
#En python no existen realmente las constantes, son  variables en mayúsculas.

DURACION_RUGBY = 80
minutos_jugados = DURACION_RUGBY
minutos_jugados = 90

print("El partido tiene una duración inicial de ", DURACION_RUGBY, "minutos")

print("Y una duración final de ", minutos_jugados, "minutos")

```
**006-EJ-Resol.md**
```markdown
En este ejercicio se realizó una calculadora de impuestos, que puede ser utilizada para calcular el IVA de la venta de entradas de un partido de rugby.
Para realizar este código primero vamos a declarar las variables:
```
base_imponible = 0
total_iva = 0
total_factura = 0
```
Luego en pantalla se va a mostrar la información del programa usando la función `print`:
```
print("programa calculadora de impuestos")
print("(c) 2025 Jose Vicente Carratalá")
print("introduce una base y te calculo el iva y el total")
```
Seguido de eso el programa va a pedirte que introduzcas la base imponible mediante `input`:
```
base_imponible = float(input("introduce la base imponible de la factura: "))
```
Luego de introducir la base imponible el programa lo que va a hacer es calcular el IVA y el total de la factura mediante operadores aritméticos `*`:
```
total_iva = base_imponible*0.21
total_factura = base_imponible + total_iva
```
Y como acción final te va a mostrar por pantalla el total del IVA y el total de la factura usando `print`:
```
print(" El total del IVA es: ",total_iva)
print(" El total de la factura es: ",total_factura)
```
A continuación podemos ver el código completo:
```
'''
  Calculadora de Impuestos
  v0.1 por Valentìn Antonio De Gennaro
  funcionamiento : introduce una base imponible y se calcula IVA y total
'''
             
############# VARIABLES ########################
base_imponible = 0
total_iva = 0
total_factura = 0

############## ENTRADA DE DATOS ################
print("programa calculadora de impuestos")
print("(c) 2025 Jose Vicente Carratalá")
print("introduce una base y te calculo el iva y el total")
base_imponible = float(input("introduce la base imponible de la factura: "))

############# CALCULOS #########################
total_iva = base_imponible*0.21
total_factura = base_imponible + total_iva

############## SALIDA ##########################
print(" El total del IVA es: ",total_iva)
print(" El total de la factura es: ",total_factura)
```
**Nota:**
- He aplicado lo aprendido en clase, ya que en clase vimos los operadores aritméticos, la función `print` y `input`.

```
**006-EJ.py**
```python
'''
  Calculadora de Impuestos
  v0.1 por Valentìn Antonio De Gennaro
  funcionamiento : introduce una base imponible y se calcula IVA y total
'''
             
############# VARIABLES ########################
base_imponible = 0
total_iva = 0
total_factura = 0

############## ENTRADA DE DATOS ################
print("programa calculadora de impuestos")
print("(c) 2025 Jose Vicente Carratalá")
print("introduce una base y te calculo el iva y el total")
base_imponible = float(input("introduce la base imponible de la factura: "))

############# CALCULOS #########################
total_iva = base_imponible*0.21
total_factura = base_imponible + total_iva

############## SALIDA ##########################
print(" El total del IVA es: ",total_iva)
print(" El total de la factura es: ",total_factura)

```
#### U2
**001-EJ-Resol.md**
```markdown
En este ejercicio vamos a calcular la raiz de un numero, y luego lo vamos a redondear. En el rugby se puede usar para calcular los puntos totales de un torneo
En este ejercicio vamos a utilizar la funciòn `sqrt` de la libreria `math`, se importa de la siguiente manera:
```
from math import sqrt
```
luego de eso tenemos que definir la varaible y asiganrle un literal, que va a ser el nùmero que usaremos para calcular la raiz.
```
puntuacion_total = 1569
```
ahora empieza la parte de calcular, empezamos por la raiz
```
resultado = sqrt(puntuacion_total)
```
luego tenemos que redondear ese resultado
```
redondeo = round(resultado)
```
y como parte final hay que mostrarle al usuario el resultado final
```
print("El resultado final es:",redondeo)
```
A continuación el codigo completo:
```
	'''
		Calculos matematicos
		v0.1 Valentin Antonio De Gennaro
	'''

	## Importamos la funcion sqrt (raiz) de la libreria math ##

	from math import sqrt

	## Defino la variable

	puntuacion_total = input("Introduce la puntuación total: ")

	## Calculo la raiz ##

	resultado = sqrt(puntuacion_total)

	## Redondeo el resultado ##

	redondeo = round(resultado)

	## Muestro el resultado ##

	print("El resultado redondeado es:",redondeo)
```
**NOTAS:**
- El uso de la libreria `math` es necesario para poder realizar calculo de raiz cuadrada, que en este caso se hace haciendo uso de la función `sqrt`


```
**001-EJ.py**
```python
'''
	Calculos matematicos
	v0.1 Valentin Antonio De Gennaro
'''

## Importamos la funcion sqrt (raiz) de la libreria math ##

from math import sqrt

## Defino la variable

puntuacion_total = input("Introduce la puntuación total: ")

## Calculo la raiz ##

resultado = sqrt(puntuacion_total)

## Redondeo el resultado ##

redondeo = round(resultado)

## Muestro el resultado ##

print("El resultado redondeado es:",redondeo)


```
**002-EJ-Resol.md**
```markdown
En este ejercicio usando la libreria `math` vamos a relizar dos calculos, la raiz de un numero, y el seno y coseno de los grados de un angulo.
Lo primero que hay que hacer en esta aplicación es importar la libreria, a continuación un ejemplo:
```
	import math
```
Luego vamos a definir la variable y asigarle un valor para calcular la raiz:
```
	numero = 100
```
Despues calculamos la raiz:
```
	raiz = math.sqrt(numero)
```
Luego defino la variable y le asigno un valor para calcular el seno y el coseno:
```
	angulo_grados = 90
```
Y calculamos:
```
seno = math.sin(angulo_radianes)
coseno = math.cos(angulo_radianes)
```
Y por ultimo le mustro la información al usuario:
```
print("La raiz cuadrada de ",numero," es: ",raiz)
print("El seno de ",(angulo_grados)," grados es: ",seno)
print("El coseno de ",(angulo_grados)," grados es: ",coseno)

```
A continuación el codigo completo:
```
	'''
		Calcular la raiz, el seno y el coseno
		v0.1 Valentin Antonio De Gennaro
		Este programa calcula la raiz de un numero, y el coseno y el seno de los grados de un angulo
	'''
	## IMPORTAMOS LA LIBRERIA ##
	import math

	## DEFINO EL NUMERO ##
	numero = 100

	## CALCULO LA RAIZ DE ESE NUMERO##
	raiz = math.sqrt(numero)

	## DEFINO EL ANGULO EN GRADOS ##
	angulo_grados = 90

	## CONVIERTO EL ANGULO DE GRADOS A RADIANES ##
	angulo_radianes = math.radians(angulo_grados)

	## CALCULO EL SENO Y EL COSENO ##
	seno = math.sin(angulo_radianes)
	coseno = math.cos(angulo_radianes)

	## MUESTRO LA INFORMACIÓN AL USUARIO ##
	print("La raiz cuadrada de ",numero," es: ",raiz)
	print("El seno de ",angulo_grados," grados es: ",seno)
	print("El coseno de ",angulo_grados," grados es: ",coseno)
```
**NOTAS:**
- Al momento de usar la libreria math hay que recordar utilizar la funcion usando el math. y la función.


```
**002-EJ.py**
```python
'''
	Calcular la raiz, el seno y el coseno
	v0.1 Valentin Antonio De Gennaro
	Este programa calcula la raiz de un numero, y el coseno y el seno de los grados de un angulo
'''
## IMPORTAMOS LA LIBRERIA ##
import math

## DEFINO EL NUMERO ##
numero = 100

## CALCULO LA RAIZ DE ESE NUMERO##
raiz = math.sqrt(numero)

## DEFINO EL ANGULO EN GRADOS ##
angulo_grados = 90

## CONVIERTO EL ANGULO DE GRADOS A RADIANES ##
angulo_radianes = math.radians(angulo_grados)

## CALCULO EL SENO Y EL COSENO ##
seno = math.sin(angulo_radianes)
coseno = math.cos(angulo_radianes)

## MUESTRO LA INFORMACIÓN AL USUARIO ##
print("La raiz cuadrada de ",numero," es: ",raiz)
print("El seno de ",(angulo_grados)," grados es: ",seno)
print("El coseno de ",(angulo_grados)," grados es: ",coseno)




```
**003-EJ-Resol.md**
```markdown
En el ejercicio a continuacion vamos a realizar el redondeo para arriba de un numero que le asignemos usando la libreria math.
Para relizar este ejercicio primero debemos importar el metodo `ceil` de la libreria math:
```
	from math import ceil
```
luego definimos la variable y le asignamos un valor literal
```
	numero = 150.8
```
Luego redondemos:
```
	redondeo = ceil(numero)
```
Y por ultimo le mostramos al usuario la informacion:
```
	print(redondeo)
```
A continuación el codigo completo:
```
	'''
		Redondeo de números decimales
		v0.1 Valentin Antonio De Gennaro
		El programa redondea para arriba el numero que se definio
	'''
	## IMPORTAMOS LA LIBRERIA ##
	from math import ceil

	## DEFINIMOS LA VARIABLE Y LE ASIGNAMOS UN VALOR DECIMAL ##
	numero = 150.8

	## REDONDEAMOS EL NUMERO ##
	redondeo = ceil(numero)

	## MOSTRAMOS LA INFORMACION AL USUARIO ##
	print(redondeo)
```
**NOTAS:**
- El uso de las librerias simpre ayuda, en este caso nos ayuda a redondear un numero decimal


```
**003-EJ.py**
```python
'''
	Redondeo de números decimales
	v0.1 Valentin Antonio De Gennaro
	El programa redondea para arriba el numero que se definio
'''
## IMPORTAMOS LA LIBRERIA ##
from math import ceil

## DEFINIMOS LA VARIABLE Y LE ASIGNAMOS UN VALOR DECIMAL ##
numero = 150.8

## REDONDEAMOS EL NUMERO ##
redondeo = ceil(numero)

## MOSTRAMOS LA INFORMACION AL USUARIO ##
print(redondeo)



```
**004-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear un objeto llamado `Equipo` que almacenará información acerca de un equipo y los nombres de sus jugadores.  

---

Primero debemos crear la clase `Equipo`:
```
	class Equipo():
		def __init__(self, nombre, jugadores):
			self.nombre = nombre
			self.jugadores = jugadores
```
Luego creamos un método llamado `mostrar_equipo()` que se encargará de mostrar por pantalla el nombre del equipo y los jugadores:
```
	def mostrar_equipo(self):
		print("Nombre del equipo:", self.nombre)
		print("Lista de jugadores:")
		for jugador in self.jugadores:
			print("-", jugador)
```

Luego creamos un equipo y le agregamos un nombre y jugadores:
```
	equipo1 = Equipo("Los Pumas", ["Valentín", "Franco", "Lucas", "Martín", "Joaquín"])
```
Por último llamamos al método `mostrar_equipo()` para mostrar toda la información en pantalla:
```
	equipo1.mostrar_equipo()
```

---

A continuación el codigo completo:
```
	'''
		Información del equipo
		v0.1 Valentin Antonio De Gennaro
		Te muestra información de un equipo y sus jugadores.
	'''
	## CREAMOS LA CLASE ##
	class Equipo():
		def __init__(self, nombre, jugadores):
			self.nombre = nombre
			self.jugadores = jugadores

		def mostrar_equipo(self):
			print("Nombre del equipo:", self.nombre)
			print("Lista de jugadores:")
			for jugador in self.jugadores:
				print("-", jugador)

	## CREAMOS UN EQUIPO ##
	equipo1 = Equipo("Los Pumas", ["Valentín", "Franco", "Lucas", "Martín", "Joaquín"])

	## MOSTRAMOS LA INFORMACIÓN DEL EQUIPO ##
	equipo1.mostrar_equipo()

```

---

**NOTAS:**
- Los bucles `for` son muy útiles para recorrer listas y mostrar información.


```
**004-EJ.py**
```python
'''
	Información del equipo
	v0.1 Valentin Antonio De Gennaro
	Te muestra información de un equipo y sus jugadores.
'''

class Equipo():
	def __init__(self, nombre, jugadores):
		self.nombre = nombre
		self.jugadores = jugadores

	def mostrar_equipo(self):
		print("Nombre del equipo:", self.nombre)
		print("Lista de jugadores:")
		for jugador in self.jugadores:
			print("-", jugador)


## CREAMOS UN OBJETO DE TIPO EQUIPO ##
equipo1 = Equipo("Los Pumas", ["Valentín", "Franco", "Lucas", "Martín", "Joaquín"])

## MOSTRAMOS LA INFORMACIÓN DEL EQUIPO ##
equipo1.mostrar_equipo()

```
**005-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una clase estática llamada `RugbyStats` que nos permita calcular estadísticas básicas de rugby, como los puntos totales y el promedio de puntos obtenidos en varias partidas.  

---

Primero creamos la clase:
```
	class RugbyStats:
```
Luego le añadimos los metodos estaticos:
```
	@staticmethod
	def calcularPuntosTotales(tesoros, penalizaciones):
		puntosTotales = (tesoros * 5) - (penalizaciones * 2)
		return puntosTotales
		
	@staticmethod
	def calcularPromedioPuntos(listaPuntos):
		total = sum(listaPuntos)
		promedio = total / len(listaPuntos)
		return promedio
```
Despues creamos 3 partidas y calculamos sus puntos totales:
```
	puntosPartido1 = RugbyStats.calcularPuntosTotales(6, 1)
	puntosPartido2 = RugbyStats.calcularPuntosTotales(3, 0)
	puntosPartido3 = RugbyStats.calcularPuntosTotales(5, 2)
```
Luego almacenamos los puntos en una lista:
```
	listaPuntos = [puntosPartido1, puntosPartido2, puntosPartido3]
```
Despues calculamos el promedio de esos puntos:
```
	promedio = RugbyStats.calcularPromedioPuntos(listaPuntos)
```
Y por ultimo mostramos por pantalla la información:
```
	print("Puntos obtenidos en cada partida:", listaPuntos)
	print("Promedio de puntos:", promedio)
```

---

A continuación el codigo completo:
```
	'''
		Estadísticas de Rugby
		v0.1 Valentin Antonio De Gennaro
		Calcula puntos y promedio de puntos en partidos de rugby.
	'''

	## CREAMOS LA CLASE ##
	class RugbyStats:

	## CREAMOS UN METODO ESTATICO ##
		@staticmethod
		def calcularPuntosTotales(tesoros, penalizaciones):
			puntosTotales = (tesoros * 5) - (penalizaciones * 2)
			return puntosTotales

	## CREAMOS OTRO METODO ESTATICO ##
		@staticmethod
		def calcularPromedioPuntos(listaPuntos):
			total = sum(listaPuntos)
			promedio = total / len(listaPuntos)
			return promedio

	## CREMOS LOS PARTIDOS Y CALCULAMOS SUS PUNTOS ##

	puntosPartido1 = RugbyStats.calcularPuntosTotales(6, 1)
	puntosPartido2 = RugbyStats.calcularPuntosTotales(3, 0)
	puntosPartido3 = RugbyStats.calcularPuntosTotales(5, 2)

	## GUARDAMOS LOS PUNTOS EN UNA LISTA ##
	listaPuntos = [puntosPartido1, puntosPartido2, puntosPartido3]

	## CALCULAMOS EL PROMEDIO DE LOS PUNTOS ##
	promedio = RugbyStats.calcularPromedioPuntos(listaPuntos)

	## MOSTRAMOS RESULTADOS ##
	print("Puntos obtenidos en cada partida:", listaPuntos)
	print("Promedio de puntos:", promedio)
```

```
**005-EJ.py**
```python
'''
	Estadísticas de Rugby
	v0.1 Valentin Antonio De Gennaro
	Calcula puntos y promedio de puntos en partidos de rugby.
'''

## CREAMOS LA CLASE ##
class RugbyStats:

## CREAMOS UN METODO ESTATICO ##
	@staticmethod
	def calcularPuntosTotales(tesoros, penalizaciones):
		puntosTotales = (tesoros * 5) - (penalizaciones * 2)
		return puntosTotales

## CREAMOS OTRO METODO ESTATICO ##
	@staticmethod
	def calcularPromedioPuntos(listaPuntos):
		total = sum(listaPuntos)
		promedio = total / len(listaPuntos)
		return promedio

## CREMOS LOS PARTIDOS Y CALCULAMOS SUS PUNTOS ##

puntosPartido1 = RugbyStats.calcularPuntosTotales(6, 1)
puntosPartido2 = RugbyStats.calcularPuntosTotales(3, 0)
puntosPartido3 = RugbyStats.calcularPuntosTotales(5, 2)

## GUARDAMOS LOS PUNTOS EN UNA LISTA ##
listaPuntos = [puntosPartido1, puntosPartido2, puntosPartido3]

## CALCULAMOS EL PROMEDIO DE LOS PUNTOS ##
promedio = RugbyStats.calcularPromedioPuntos(listaPuntos)

## MOSTRAMOS RESULTADOS ##
print("Puntos obtenidos en cada partida:", listaPuntos)
print("Promedio de puntos:", promedio)


```
**006-EJ-Resol.md**
```markdown
En este ejercicio vamos a hacer una aplicación que muestre informacion sobre un partido de rugby, muestra el nombre del equipo, cuando juega y el dia de la semana que juega.

---

Para realizar este ejercicio primero debemos importar la libreria:
```
	from datetime import datetime
```
Luego creamos la clase:
```
	class PartidoRugby():
		def __init__(self, nombre_equipo, fecha_partido):
			self.nombre_equipo = nombre_equipo
			self.fecha_partido = fecha_partido
```
Despues creamos un partido y le agregamos la información:
```
	partido = PartidoRugby("Los Pumas", datetime.now())
```
Y por ultimo mostramos la información:
```
	print("-------------------------------------------")
	print("Nombre del equipo:", partido.nombre_equipo)
	print("Fecha del partido:", partido.fecha_partido.strftime("%Y-%m-%d"))
	print("Día de la semana:", partido.fecha_partido.weekday())
	print("-------------------------------------------")
```

---

A continuación el codigo completo:
```
	'''
		Información de partido de rugby
		v0.1 Valentín Antonio De Gennaro
		Muestra información sobre un partido.
	'''
	## IMPORTAMOS LA LIBRERIA DATETIME ##
	from datetime import datetime				

	## DEFINIMOS LA CLASE PARTIDORUGBY ##
	class PartidoRugby():
		def __init__(self, nombre_equipo, fecha_partido):
			self.nombre_equipo = nombre_equipo
			self.fecha_partido = fecha_partido

	## CREAMOS UN PARTIDO Y LE AGREGAMOS INFORMACIÓN ##
	partido = PartidoRugby("Los Pumas", datetime.now())

	## MOSTRAMOS LA INFORMACIÓN ##
	print("-------------------------------------------")
	print("Nombre del equipo:", partido.nombre_equipo)
	print("Fecha del partido:", partido.fecha_partido.strftime("%Y-%m-%d"))
	print("Día de la semana:", partido.fecha_partido.weekday())
	print("-------------------------------------------")
```

---

**NOTAS:**
- La clase `datetime` permite trabajar con fechas y horas fácilmente en Python. 
- El método `strftime()` se usa para dar formato a la fecha.  

```
**006-EJ.py**
```python
'''
	Información de partido de rugby
	v0.1 Valentín Antonio De Gennaro
	Muestra información sobre un partido.
'''
## IMPORTAMOS LA LIBRERIA DATETIME ##
from datetime import datetime				

## DEFINIMOS LA CLASE PARTIDORUGBY ##
class PartidoRugby():
	def __init__(self, nombre_equipo, fecha_partido):
		self.nombre_equipo = nombre_equipo
		self.fecha_partido = fecha_partido

## CREAMOS UN PARTIDO Y LE AGREGAMOS INFORMACIÓN ##
partido = PartidoRugby("Los Pumas", datetime.now())

## MOSTRAMOS LA INFORMACIÓN ##
print("-------------------------------------------")
print("Nombre del equipo:", partido.nombre_equipo)
print("Fecha del partido:", partido.fecha_partido.strftime("%Y-%m-%d"))
print("Día de la semana:", partido.fecha_partido.weekday())
print("-------------------------------------------")

```
**007-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear un programa que calcule cuantas cuadras necesitas para la cantidad de caballos que le indique el usuario teniendo en cuenta que entran 3 caballos por cada cuadra.

---

Para realizar este ejercicio primero debemos importar la funcion `ceil` de la libreia `math`
```
	from math import ceil
```
Luego definimos las variables y le pedimos al usuario que introduzca los valores:
```
	numero_caballos = int(input("Introduce el número de caballos que tiene Carlos: "))
	jugos_movil = int(input("Introduce el número de juegos de móvil que jugó Carlos: "))
```
Despues realizamos los calculos:
```
	cuadras = numero_caballos / 3
	redondeoalza = ceil(cuadras)
```
Y por ultimo le mostramos al usuario la información:
```
	print("-------------------------------------------")
	print("Carlos tiene", numero_caballos, "caballos.")
	print("Jugó", jugos_movil, "juegos de móvil.")
	print("Necesita", redondeoalza, "cuadras.")
	print("-------------------------------------------")
```

---

A continuación el codigo completo:
```
	'''
	   calculadora de cuadras
	   v0.1 (c) valentin
	   programa que calcula numero de cuadras a partir de los caballos
	'''
	from math import ceil

	## DEFINIMOS LAS VARIABLES Y LE PEDIMOS AL USUARIO QUE LE ASIGNE LOS VALORES ##
	numero_caballos = int(input("Introduce el número de caballos que tiene Carlos: "))
	jugos_movil = int(input("Introduce el número de juegos de móvil que jugó Carlos: "))

	## CÁLCULAMOS ##
	cuadras = numero_caballos / 3
	redondeoalza = matematicas.ceil(cuadras)

	## MOSTRAMOS LA INFORMACIÓN ##
	print("-------------------------------------------")
	print("Carlos tiene", numero_caballos, "caballos.")
	print("Jugó", jugos_movil, "juegos de móvil.")
	print("Necesita", redondeoalza, "cuadras.")
	print("-------------------------------------------")
```

---

**NOTAS:**
- La función `input()` permite obtener datos del usuario.  

```
**007-EJ.py**
```python
'''
   calculadora de cuadras
   v0.1 (c) valentin
   programa que calcula numero de cuadras a partir de los caballos
'''
from math import ceil

## DEFINIMOS LAS VARIABLES Y LE PEDIMOS AL USUARIO QUE LE ASIGNE LOS VALORES ##
numero_caballos = int(input("Introduce el número de caballos que tiene Carlos: "))
jugos_movil = int(input("Introduce el número de juegos de móvil que jugó Carlos: "))

## CÁLCULAMOS ##
cuadras = numero_caballos / 3
redondeoalza = ceil(cuadras)

## MOSTRAMOS LA INFORMACIÓN ##
print("-------------------------------------------")
print("Carlos tiene", numero_caballos, "caballos.")
print("Jugó", jugos_movil, "juegos de móvil.")
print("Necesita", redondeoalza, "cuadras.")
print("-------------------------------------------")

```
#### U3
**001-EJ-Resol.md**
```markdown
En el ejercicio a continuación se visualiza un código que clasifica a un jugador dependiendo de su edad.
Para realizar este ejercicio primero hay que definir la variable, como se puede ver a continuación:
```
edad_jugador = 21
```
Luego mediante las estructuras de control `if`, `elif` y `else` se van a clasificar a los jugadores y mediante la función `print` para mostrar la clasificación como se puede ver a continuación:
```
if edad_jugador < 10:
    print("Eres un niño")
elif edad_jugador > 10 and edad_jugador <= 19:
    print("Eres un adolescente")
elif edad_jugador > 20 and edad_jugador <= 30:
    print("Eres un joven")
else:
    print("Ya no eres un joven")
```
Y a continuación se puede visualizar el código completo:
```
'''
    Clasificador de edades
    v0.1 Valentin Antonio De Gennaro
    Clasifica a un jugador segun se edad
'''

############### DECLARAMOS LA VARIABLE Y LE ASIGNAMOS UN VALOR #############
edad_jugador = 21

############### CLASIFICAMOS POR EDADES ##############################
if edad_jugador < 10:
    print("Eres un niño")
elif edad_jugador > 10 and edad_jugador <= 19:
    print("Eres un adolescente")
elif edad_jugador > 20 and edad_jugador <= 30:
    print("Eres un joven")
else:
    print("Ya no eres un joven")
```

**NOTAS:**
- Las estructuras de control `if`, `elif` y `else` son muy útiles a la hora de decirle al programa que si se cumple lo que le dijiste haga una cosa y si no lo cumple haga otra.
- En un pueblo pequeño con un club de futbol puede ser útil a la hora de definir lo equipos por edades este programa te va a facilitar la clasificación.

```
**001-EJ.py**
```python
'''
    Clasificador de edades
    v0.1 Valentin Antonio De Gennaro
    Clasifica a un jugador segun se edad
'''

############### DECLARAMOS LA VARIABLE Y LE ASIGNAMOS UN VALOR #############
edad_jugador = 21

############### CLASIFICAMOS POR EDADES ##############################
if edad_jugador < 10:
    print("Eres un niño")
elif edad_jugador > 10 and edad_jugador <= 19:
    print("Eres un adolescente")
elif edad_jugador > 20 and edad_jugador <= 30:
    print("Eres un joven")
else:
    print("Ya no eres un joven")
    

```
**002-EJ-Resol.md**
```markdown
En el ejercicio a continuación vamos a utilizar la estructura de control `for` para indicar los patitos que se producen en un año.
Para realizar este ejercicio primero hay que definir el rango de años,definiendo un bucle `for` para recorrer los años desde 2018 hasta 2023, como se puede ver a continuación:
```
for año in range (2018, 2024):
```
Luego dentro de ese bucle hay que crear otro bucle para contar los días del año.
```
for dia in range (1, 366):
```
Y por ultimo imprimimos en pantalla:
```
print(f"Año {año}: Produjo {dia} patitos")
```
A continuación puedes visualizar el código completo:
```
'''
    Contador de patitos producidos
    v0.1 Valentín Antonio De Gennaro
    Te dice la cantidad de patitos que se producen por año
    
'''

for año in range (2018, 2024):
    for dia in range (1, 366):
        print(f"Año {año}: Produjo {dia} patitos")
```

**NOTAS:**
- A la hora de utilizar el bucle `for` dentro del paréntesis el segundo valor tiene que ser un numero mas del que quieres indicar.

En rugby este código puede utilizarse para contar la cantidad de partidos que se juegan por año.
```
**003-EJ-Resol.md**
```markdown
En el ejercicio a continuación vamos a realizar una suma de dos números creando una función `funcionSuma`.
Para realizar este ejercicio primero hay que definir la función, usando camelCase, como se puede ver a continuación:
```
def calculaSuma(operando1, operando2):
```
Luego hay que indicar que hace esa función:
```
    resultado = operando1 + operando2
    return resultado
```
Y por ultimo le indicamos los valores a sumar y lo mostramos por pantalla: 
```
print(calculaSuma(4, 3))
```
A continuación esta el código entero: 
```
'''
    Suma de números
    v0.1 Valentin Antonio De Gennaro
    Definiendo una funcion te realiza una suma
    
'''

def calculaSuma(operando1, operando2):
    resultado = operando1 + operando2
    return resultado
    
print(calculaSuma(4, 3))

```
**NOTA:**
- No hay que olvidarse de indicar los valores en el `print` ya que de no hacerlo no va a indicar nada o va a arrojar error.

Este código puede utilizarse en el rugby para sumar los puntos por partido.
```
**004-EJ-Resol.md**
```markdown
Mediante las estructuras de control `try` y `except` se puede hacer que el programa continué ante un error. En este ejercicio calculamos la cantidad total de puntos por partido y en el caso de que el usuario introduzca mal los números y el programa de **ERROR**, este continua con normalidad.
Para realizar este ejercicio primero hay que definir las variables, como se puede ver a continuación:
```
puntos_rugby = 0
partidos_jugados = 0
```
Luego hay que pedirle al usuario que le asigne un valor a esas variables:
```
puntos_rugby = int(input("Introduce tus puntos: "))
partidos_jugados = int(input("Introduce la cantidad de partidos jugados: "))
```
Y luego de asignarles un valor el programa intentara dividir esos valores introducidos, como se puede ver a continuación:
```
try:
    puntosporpartido = puntos_rugby/partidos_jugados
    print("El total de puntos por partido es: ",puntosporpartido)
```
Y en el caso de que el usuario introduzca datos erróneos y el programa no funcione utilizamos un `except` para que el programa continué su funcionamiento, como se puede ver a continuación:
```
except:
    print("ERROR")
    print("El programa continua en funcionamiento")
```
A continuación podemos ver el código completo:
```
'''
    Calculador de puntos por partido
    v0.1 Valentin Antonio De Gennaro
    Divide los puntos entre los partidos jugados
'''

puntos_rugby = 0
partidos_jugados = 0
puntos_rugby = int(input("Introduce tus puntos: "))
partidos_jugados = int(input("Introduce la cantidad de partidos jugados: "))

try:
    puntosporpartido = puntos_rugby/partidos_jugados
    print("El total de puntos por partido es: ",puntosporpartido)
except:
    print("ERROR")
    print("El programa continua en funcionamiento")
```
A la hora de utilizar el `try` y el `except` hay que recordar anidar y no olvidarse de los paréntesis ya que en el caso de no hacerlo el código va a arrojar error y no va a funcionar. 
Es muy útil ya que en el caso de no usarlos y el programa dar error dejaría de funcionar.

```
**004-EJ.py**
```python
'''
    Calculador de puntos por partido
    v0.1 Valentin Antonio De Gennaro
    Divide los puntos entre los partidos jugados
'''

puntos_rugby = 0
partidos_jugados = 0
puntos_rugby = int(input("Introduce tus puntos: "))
partidos_jugados = int(input("Introduce la cantidad de partidos jugados: "))

try:
    puntosporpartido = puntos_rugby/partidos_jugados
    print("El total de puntos por partido es: ",puntosporpartido)
except:
    print("ERROR")
    print("El programa continua en funcionamiento")


```
**005-EJ-Resol.md**
```markdown
En este ejercico vamos a hacer uso de las aserciones que son utiles para detectar errores. E integrado mis hobbies haciendo que el usuario deba introducir la edad del jugador de rugby y el `assert` se encargue de detectar si la edad es incorrecta ya que la correcta es **21**, y luego hice algo similar pero mi juego diario del movil haciendo que el usuario indique si ha finalizado el juego o no.
En este codigo hacemos uso de el `assert` como se puede ver a continuación:
```
assert edad_jugador == 21, "La edad no es correcta"
```
Pero a la hora de usar el `assert` no hay que olvidarse de hacer uso del `try` y el `except` ya que de no usarlo el codigo va a dar error, a continuación se puede ver la forma correcta:
```
try:
	assert edad_jugador == 21, "La edad no es correcta"
except:
	print("La edad del jugador es incorrecta")
```
Ahora se puede ver el codigo completo:
```
'''
	Detectar errores
	v0.1 Valentìn Antonio De Gennaro
'''

edad_jugador = int(input("Introduce la edad del jugador de rugby: "))

try:
	assert edad_jugador == 21, "La edad no es correcta"
except:
	print("La edad del jugador es incorrecta")
	
estado_juego = input("¿Haz terminado tu juego diario?: ")

try:
	assert estado_juego == "si", "Muy mal"
except:
	print("Muy mal no has terminado tu juego diario")
```
**NOTAS:**
- No hay que olviadar usar el `try` y el `except`.

El uso de `assert` es necesario a la hora de programar ya que es util para detectar errores.


```
**005-EJ.py**
```python
'''
	Detectar errores
	v0.1 Valentìn Antonio De Gennaro
'''

edad_jugador = int(input("Introduce la edad del jugador de rugby: "))

try:
	assert edad_jugador == 21, "La edad no es correcta"
except:
	print("La edad del jugador es incorrecta")
	
estado_juego = input("¿Haz terminado tu juego diario?: ")

try:
	assert estado_juego == "si", "Muy mal"
except:
	print("Muy mal no has terminado tu juego diario")
	



```
**006-EJ-Resol.md**
```markdown
En este ejercicio vamos a introducir reglas dentro de una funcion en este caso, es una funcion de raiz cuadrada y dentro de esa funcion vamos a utilizar el `try` y el `except` para capturar errores.
Para realizar este ejercicio primero debemos definir la función como se puede ver a continuacion:
```
	def raizSegura(numero):
```
Luego debemos importar la libreria:
```
	from math import sqrt
```
Despues de eso comenzamos a introducirle las reglas a la función utilizando `if`, `else` y `return`, como se puede ver a continuacion:
```
	if isinstance(numero, (int, float)):
		if numero >= 0:
			raiz = sqrt(numero)
			return raiz
		else:
			return 0
```
luego debemos pedirle al usuario que introduzca el numero a calcular:
```
	numero = int(input("Introduce el numero: "))
```
Y por ultimo usando un `print` le mostramos al usuario el resultado:
```
	print(raizSegura(numero))
```
A continuación el codigo completo:
```
	def raizSegura(numero):
		'''
			Función que calcula la raíz cuadrada de un número dado.
			Entradas: numero (int, float o str) que se espera que sea numérico
			Salidas: resultado de la raíz cuadrada como float (o cero si hay fallo)
			Capturas de error:
			  1.- Si es numérico
			  2.- Si se puede convertir a número
			  3.- Si no es un número positivo
		'''
		from math import sqrt

		if isinstance(numero, (int, float)):
			if numero >= 0:
				raiz = sqrt(numero)
				return raiz
			else:
				return 0
		
		else:
			try:
				numero = float(numero)
				entero_raiz = sqrt(numero)
				return entero_raiz
			except:
				return 0

	numero = int(input("Introduce el numero: "))

	print(raizSegura(numero))
```
**NOTAS:**
- Si le decimos al programa que devuelva cero cuando se cumple una condición, no podemos agregarle un `assert` ya que de hacerlo arrojaria el error y no el 0
- Es de buenas practicas incluir un docstring detallando que hace el programa


```
**006-EJ.py**
```python
def raizSegura(numero):
	'''
		Función que calcula la raíz cuadrada de un número dado.
		Entradas: numero (int, float o str) que se espera que sea numérico
		Salidas: resultado de la raíz cuadrada como float (o cero si hay fallo)
		Capturas de error:
		  1.- Si es numérico
		  2.- Si se puede convertir a número
		  3.- Si no es un número positivo
	'''
	from math import sqrt

	if isinstance(numero, (int, float)):
		if numero >= 0:
			raiz = sqrt(numero)
			return raiz
		else:
			return 0
	
	else:
		try:
			numero = float(numero)
			entero_raiz = sqrt(numero)
			return entero_raiz
		except:
			return 0

numero = int(input("Introduce el numero: "))

print(raizSegura(numero))



```
**007-EJ-Resol.md**
```markdown
En este ejercicio vamos a hacer que el usuario indique el nombre y la edad de dos dragones, y con esa información vamos a clasificarlos segun su edad y los vamos a entrenar.
Para realizar este ejercicio primero debemos definir las variables y en el caso que sea necesario pedirle al usuario que le asigne un valor usando un `input`, como se puede ver a continuación es un ejemplo de las variables del dragon A:
```
	nombre_dragon_a = input("Introduce el nombre del dragón A: ")
	edad_dragon_a = input("Introduce la edad del dragón A: ")
	clasificacion_dragon_a = ""
	fuerza_dragon_a = 0
```
Luego le mostramos al usuario los datos que introdujo:
```
	print("-----------------------------------------------------")
	print("El nombre del dragon A es:", nombre_dragon_a)
	print("La edad del dragon A es:", edad_dragon_a)
	print("-----------------------------------------------------")
	print("El nombre del dragon B es:", nombre_dragon_b)
	print("La edad del dragon B es:", edad_dragon_b)
	print("")
```
Despues tenemos que asegurarnos que los valores introducidos en la edad sean enteros usando `try`:
```
	try:
		edad_dragon_a = int(edad_dragon_a)
		print("He convertido la edad A correctamente")
```
Y en el caso de que no se pueda convertir a entero usando un `except` le indicamos que le asigne un valor diferente:
```
	except:
		edad_dragon_a = 100
		print("No he convertido la edad A correctamente")
```
Luego debemos clasificar a los dragones dependiendo de su edad:
```
	if edad_dragon_a < 50:
		clasificacion_dragon_a = "Joven"
	elif edad_dragon_a >= 50 and edad_dragon_a <= 199:
		clasificacion_dragon_a = "Adulto"
	elif edad_dragon_a >= 200:
		clasificacion_dragon_a = "Anciano"
	print("El dragon A es:", clasificacion_dragon_a)
```
Usando un bucle `for` simulamos los 3 dias de entrenamiento:
```
	for dia in range (1,4):
```
Despues de haberlos clasificado debemos entrenarlos incrementando su fuerza dependiendo de su clasificacion previamente hecha:
```
    if clasificacion_dragon_a == "Joven":
        fuerza_dragon_a += 2
    elif clasificacion_dragon_a == "Adulto":
        fuerza_dragon_a += 1
    elif clasificacion_dragon_a == "Anciano":
        fuerza_dragon_a += 1
```
Y por ultimo le mostramos al usuario la información:
```
    print("--------------- Final del dia" , dia,"---------------")
    print("El dragon A ahora tiene ", fuerza_dragon_a,"de fuerza")
    print("-----------------------------------------------------")
```
A continuación el codigo completo:
```
'''
    Entrenaiento de dragones
    v0.1 Valentin Antonio De Gennaro
  	Este programa clasifica y entrena a dos dragones
'''
## EN ESTE BLOQUE DEFINIMOS LAS VARIABLES Y PEDIMOS LA INFORMACION AL USUARIO ##
nombre_dragon_a = input("Introduce el nombre del dragón A: ")
edad_dragon_a = input("Introduce la edad del dragón A: ")
clasificacion_dragon_a = ""
fuerza_dragon_a = 0

nombre_dragon_b = input("Introduce el nombre del dragón B: ")
edad_dragon_b = input("Introduce la edad del dragón B: ")
clasificacion_dragon_b = ""
fuerza_dragon_b = 0

## MOSTRAMOS AL USUARIO LOS DATOS QUE INTRODUJO ##
print("-----------------------------------------------------")
print("El nombre del dragon A es:", nombre_dragon_a)
print("La edad del dragon A es:", edad_dragon_a)
print("-----------------------------------------------------")
print("El nombre del dragon B es:", nombre_dragon_b)
print("La edad del dragon B es:", edad_dragon_b)
print("")

## EN ESTE BLOQUE NOS ASEGURAMOS QUE LOS VALORES SEAN ENTEROS ##
try:
    edad_dragon_a = int(edad_dragon_a)
    print("He convertido la edad A correctamente")
except:
    edad_dragon_a = 100
    print("No he convertido la edad A correctamente")
    
try:
    edad_dragon_b = int(edad_dragon_b)
    print("He convertido la edad B correctamente")
except:
    edad_dragon_b = 100
    print("No he convertido la edad B correctamente")
    
## EN ESTE BLOQUE CLASIFICAMOS A LOS DRAGONES ##    
if edad_dragon_a < 50:
    clasificacion_dragon_a = "Joven"
elif edad_dragon_a >= 50 and edad_dragon_a <= 199:
    clasificacion_dragon_a = "Adulto"
elif edad_dragon_a >= 200:
    clasificacion_dragon_a = "Anciano"
print("El dragon A es:", clasificacion_dragon_a)
    
if edad_dragon_b < 50:
    clasificacion_dragon_b = "Joven"
elif edad_dragon_b >= 50 and edad_dragon_b <= 199:
    clasificacion_dragon_b = "Adulto"
elif edad_dragon_b >= 200:
    clasificacion_dragon_b = "Anciano"
print("El dragon B es:", clasificacion_dragon_b)

## AHORA LOS ENTRENAMOS ##
for dia in range (1,4):

## ENTRENAMOS AL DRAGON A ## 
    if clasificacion_dragon_a == "Joven":
        fuerza_dragon_a += 2
    elif clasificacion_dragon_a == "Adulto":
        fuerza_dragon_a += 1
    elif clasificacion_dragon_a == "Anciano":
        fuerza_dragon_a += 1
 
## MOSTRAMOS LA INFORMACIÓN AL USUARIO ##       
    print("--------------- Final del dia" , dia,"---------------")
    print("El dragon A ahora tiene ", fuerza_dragon_a,"de fuerza")
    print("-----------------------------------------------------")
    
## ENTRENAMOS AL DRAGON B ##    
    if clasificacion_dragon_b == "Joven":
        fuerza_dragon_b += 2
    elif clasificacion_dragon_b == "Adulto":
        fuerza_dragon_b += 1
    elif clasificacion_dragon_b == "Anciano":
        fuerza_dragon_b += 1

## MOSTRAMOS AL INFORMACIÓN AL USUARIO ##        
    print("--------------- Final del dia" , dia,"---------------")
    print("El dragon B ahora tiene ", fuerza_dragon_b,"de fuerza")
    print("-----------------------------------------------------")
```
**NOTAS:**
- Es de buenas practicas indicar que hace cada bloque usando `#`
- Al momento de usar un bucle `for` es importante revisar que este bien espaciado, ya que de no estarlo el bucle no aplicara correctamente

```
**007-EJ.py**
```python
'''
    Entrenaiento de dragones
    v0.1 Valentin Antonio De Gennaro
  	Este programa clasifica y entrena a dos dragones
'''
## EN ESTE BLOQUE DEFINIMOS LAS VARIABLES Y PEDIMOS LA INFORMACION AL USUARIO ##
nombre_dragon_a = input("Introduce el nombre del dragón A: ")
edad_dragon_a = input("Introduce la edad del dragón A: ")
clasificacion_dragon_a = ""
fuerza_dragon_a = 0

nombre_dragon_b = input("Introduce el nombre del dragón B: ")
edad_dragon_b = input("Introduce la edad del dragón B: ")
clasificacion_dragon_b = ""
fuerza_dragon_b = 0

## MOSTRAMOS AL USUARIO LOS DATOS QUE INTRODUJO ##
print("-----------------------------------------------------")
print("El nombre del dragon A es:", nombre_dragon_a)
print("La edad del dragon A es:", edad_dragon_a)
print("-----------------------------------------------------")
print("El nombre del dragon B es:", nombre_dragon_b)
print("La edad del dragon B es:", edad_dragon_b)
print("")

## EN ESTE BLOQUE NOS ASEGURAMOS QUE LOS VALORES SEAN ENTEROS ##
try:
    edad_dragon_a = int(edad_dragon_a)
    print("He convertido la edad A correctamente")
except:
    edad_dragon_a = 100
    print("No he convertido la edad A correctamente")
    
try:
    edad_dragon_b = int(edad_dragon_b)
    print("He convertido la edad B correctamente")
except:
    edad_dragon_b = 100
    print("No he convertido la edad B correctamente")
    
## EN ESTE BLOQUE CLASIFICAMOS A LOS DRAGONES ##    
if edad_dragon_a < 50:
    clasificacion_dragon_a = "Joven"
elif edad_dragon_a >= 50 and edad_dragon_a <= 199:
    clasificacion_dragon_a = "Adulto"
elif edad_dragon_a >= 200:
    clasificacion_dragon_a = "Anciano"
print("El dragon A es:", clasificacion_dragon_a)
    
if edad_dragon_b < 50:
    clasificacion_dragon_b = "Joven"
elif edad_dragon_b >= 50 and edad_dragon_b <= 199:
    clasificacion_dragon_b = "Adulto"
elif edad_dragon_b >= 200:
    clasificacion_dragon_b = "Anciano"
print("El dragon B es:", clasificacion_dragon_b)

## AHORA LOS ENTRENAMOS ##
for dia in range (1,4):

## ENTRENAMOS AL DRAGON A ## 
    if clasificacion_dragon_a == "Joven":
        fuerza_dragon_a += 2
    elif clasificacion_dragon_a == "Adulto":
        fuerza_dragon_a += 1
    elif clasificacion_dragon_a == "Anciano":
        fuerza_dragon_a += 1
 
## MOSTRAMOS LA INFORMACIÓN AL USUARIO ##       
    print("--------------- Final del dia" , dia,"---------------")
    print("El dragon A ahora tiene ", fuerza_dragon_a,"de fuerza")
    print("-----------------------------------------------------")
    
## ENTRENAMOS AL DRAGON B ##    
    if clasificacion_dragon_b == "Joven":
        fuerza_dragon_b += 2
    elif clasificacion_dragon_b == "Adulto":
        fuerza_dragon_b += 1
    elif clasificacion_dragon_b == "Anciano":
        fuerza_dragon_b += 1

## MOSTRAMOS AL INFORMACIÓN AL USUARIO ##        
    print("--------------- Final del dia" , dia,"---------------")
    print("El dragon B ahora tiene ", fuerza_dragon_b,"de fuerza")
    print("-----------------------------------------------------")

```
#### U4
**001-EJ.md**
```markdown
En este ejercicio vamos a realizar una app que muestre al usuario información acerca de cuando juega un jugador y su equipo. 

---

Para realizar este ejercicio primero debemos declarar la clase:
```
	class Jugador():
		def __init__(self,nombre,edad,equipo):
			self.nombre = nombre
			self.edad = edad
			self.equipo = equipo
```
Luego definimos una funcion dentro de la clase para que muestre la información del jugador:
```
	def jugar_rugby (self):
		print(self.nombre, "del equipo",self.equipo, "esta jugando al rugby")
```
Despues debemos insertar información del jugador:
```
	jugador1 = Jugador("Messi",38,"Inter de Miami")
```
Y por ultimo mostramos la información al usuario:
```
	jugador1.jugar_rugby()
```

---

A continuación el codigo completo:
```
	'''
		Información de partidos
		v0.1 Valentin Antonio De Gennaro
		Te da información acerca de jugadores.
	'''

	class Jugador():
		def __init__(self,nombre,edad,equipo):
			self.nombre = nombre
			self.edad = edad
			self.equipo = equipo
		def jugar_rugby (self):
			print(self.nombre, "del equipo",self.equipo, "esta jugando al rugby")


	jugador1 = Jugador("Messi",38,"Inter de Miami")

	jugador1.jugar_rugby()
```

---

**NOTAS:**
- El uso de definir funciones es util para hacer el codigo mas limpio y no tan repetitivo


```
**001-EJ.py**
```python
'''
	Información de partidos
	v0.1 Valentin Antonio De Gennaro
	Te da información acerca de jugadores.
'''

class Jugador():
	def __init__(self,nombre,edad,equipo):
		self.nombre = nombre
		self.edad = edad
		self.equipo = equipo
	def jugar_rugby (self):
		print(self.nombre, "del equipo",self.equipo, "esta jugando al rugby")


jugador1 = Jugador("Messi",38,"Inter de Miami")

jugador1.jugar_rugby()

```
**002-EJ.md**
```markdown
En este ejercicio vamos a crear una aplicacion para gestionar clientes, te permite ingresar y listar clientes.

---

Para realizar esta aplicación primero debemos definir la clase:
```
	class Cliente:
		def __init__(self):
			self.email = ""
			self.nombre = ""
			self.direccion = ""
```
Luego definimos el metodo para insertar los datos del clientes:
```
	def insertar_datos(self):
		self.email = input("Introduce el email del cliente: ")
		self.nombre = input("Introduce el nombre del cliente: ")
		self.direccion = input("Introduce la dirección del cliente: ")
```
Creamos la lista para almacenar esos clientes:
```
	clientes = []
```
Luego creamos las opciones dentro de un bucle `while` para que el usuario elija que quiere hacer:
```
	while True:
		print("-------------------------------------------")
		print("Elige una opción")
		print("1. Insertar un cliente")
		print("2. Listar clientes")
		print("3. Salir")
		print("-------------------------------------------")
		opcion = int(input("Selecciona una opción: "))
```
Y empezamos a desarrollar las opciones, opcion 1:
```
	if opcion == 1:
		nuevo_cliente = Cliente()
		nuevo_cliente.insertar_datos()
		clientes.append(nuevo_cliente)
		print("Cliente añadido correctamente.")
```
opcion 2:
```
	elif opcion == 2:
		print("Listado de clientes:")
		for cliente in clientes:
			print("")
			print("Email:", cliente.email)
			print("Nombre:", cliente.nombre)
			print("Dirección:", cliente.direccion)
			print("-------------------------------------------")
```
y por ultimo la opcion 3:
```
	elif opcion == 3:
		print("Saliendo...")
		break
	else:
		print("Opción no válida, intenta de nuevo.")
```
---

A continuación el codigo completo:
```
	'''
		Gestión de clientes
		v0.1 Valentín Antonio De Gennaro
		Programa que permite insertar y listar clientes usando clases y listas.
	'''

	## DEFINIMOS LA CLASE CLIENTE ##
	class Cliente:
		def __init__(self):
			self.email = ""
			self.nombre = ""
			self.direccion = ""

	## MÉTODO PARA INSERTAR DATOS ##
		def insertar_datos(self):
			self.email = input("Introduce el email del cliente: ")
			self.nombre = input("Introduce el nombre del cliente: ")
			self.direccion = input("Introduce la dirección del cliente: ")

	## CREAMOS UNA LISTA VACÍA PARA GUARDAR LOS CLIENTES ##
	clientes = []

	## MENÚ PRINCIPAL ##
	while True:
		print("-------------------------------------------")
		print("Elige una opción")
		print("1. Insertar un cliente")
		print("2. Listar clientes")
		print("3. Salir")
		print("-------------------------------------------")
		opcion = int(input("Selecciona una opción: "))

		if opcion == 1:
			## INSERTAR UN CLIENTE ##
			nuevo_cliente = Cliente()
			nuevo_cliente.insertar_datos()
			clientes.append(nuevo_cliente)
			print("Cliente añadido correctamente.")
		elif opcion == 2:
			## LISTAR CLIENTES ##
			if clientes == []:
				print("No hay clientes registrados.")
			else:
				print("Listado de clientes:")
				for cliente in clientes:
					print("")
					print("Email:", cliente.email)
					print("Nombre:", cliente.nombre)
					print("Dirección:", cliente.direccion)
					print("-------------------------------------------")
		elif opcion == 3:
			print("Saliendo...")
			break
		else:
			print("Opción no válida, intenta de nuevo.")
```

---

**NOTAS:**
- Se utiliza una lista vacía para almacenar los objetos `Cliente`. 

```
**002-EJ.py**
```python
'''
	Gestión de clientes
	v0.1 Valentín Antonio De Gennaro
	Programa que permite insertar y listar clientes usando clases y listas.
'''

## DEFINIMOS LA CLASE CLIENTE ##
class Cliente:
	def __init__(self):
		self.email = ""
		self.nombre = ""
		self.direccion = ""

## MÉTODO PARA INSERTAR DATOS ##
	def insertar_datos(self):
		self.email = input("Introduce el email del cliente: ")
		self.nombre = input("Introduce el nombre del cliente: ")
		self.direccion = input("Introduce la dirección del cliente: ")

## CREAMOS UNA LISTA VACÍA PARA GUARDAR LOS CLIENTES ##
clientes = []

## MENÚ PRINCIPAL ##
while True:
	print("-------------------------------------------")
	print("Elige una opción")
	print("1. Insertar un cliente")
	print("2. Listar clientes")
	print("3. Salir")
	print("-------------------------------------------")
	opcion = int(input("Selecciona una opción: "))

	if opcion == 1:
		## INSERTAR UN CLIENTE ##
		nuevo_cliente = Cliente()
		nuevo_cliente.insertar_datos()
		clientes.append(nuevo_cliente)
		print("Cliente añadido correctamente.")
	elif opcion == 2:
		## LISTAR CLIENTES ##
		if clientes == []:
			print("No hay clientes registrados.")
		else:
			print("Listado de clientes:")
			for cliente in clientes:
				print("")
				print("Email:", cliente.email)
				print("Nombre:", cliente.nombre)
				print("Dirección:", cliente.direccion)
				print("-------------------------------------------")
	elif opcion == 3:
		print("Saliendo...")
		break
	else:
		print("Opción no válida, intenta de nuevo.")


```
**003-EJ.md**
```markdown
En este ejercicio vamos a modificar la clase `Cliente` para que pueda almacenar los movimientos bancarios del cliente en una lista. De esta forma podremos añadir nuevos movimientos y mostrarlos cuando queramos.

---

Primero definimos la clase `Cliente` y dentro de su método `__init__` añadimos una nueva propiedad llamada `movimientos_bancarios` que empieza como una lista vacía:
```
	class Cliente():
		def __init__(self, nombre, edad, telefonos):
			self.nombre = nombre
			self.edad = edad
			self.telefonos = telefonos
			self.movimientos_bancarios = []
```
Luego creamos una función dentro de la clase llamada `añadir_movimiento` que recibe un parámetro `monto` y lo añade a la lista `movimientos_bancarios`:
```
	def añadir_movimiento(self, monto):
	self.movimientos_bancarios.append(monto)
```

Después creamos otra función llamada `mostrar_movimientos` que muestra todos los movimientos del cliente:
```
	def mostrar_movimientos(self):
		print("Movimientos bancarios de", self.nombre)
		for movimiento in self.movimientos_bancarios:
			print(movimiento)
```
Luego creamos los movimientos del cliente:
```
	cliente1.añadir_movimiento(150.50)
	cliente1.añadir_movimiento(-20)
	cliente1.añadir_movimiento(300)
```
Y por ultimo le mostramos los datos al usuario:
```
	cliente1.mostrar_movimientos()
```

---

A continuación el codigo completo:
```
	'''
		Gestión de movimientos bancarios
		v0.1 Valentín Antonio De Gennaro
		Permite añadir y mostrar los movimientos bancarios de un cliente.
	'''

	class Cliente():
		def __init__(self, nombre, edad, telefonos):
			self.nombre = nombre
			self.edad = edad
			self.telefonos = telefonos
			self.movimientos_bancarios = []   # LISTA VACÍA PARA GUARDAR LOS MOVIMIENTOS

		def añadir_movimiento(self, monto):
			## AÑADIMOS EL MOVIMIENTO A LA LISTA ##
			self.movimientos_bancarios.append(monto)

		def mostrar_movimientos(self):
			## MOSTRAMOS TODOS LOS MOVIMIENTOS ##
			print("Movimientos bancarios de", self.nombre,":")
			for movimiento in self.movimientos_bancarios:
				print(movimiento)


	## CREAMOS UN CLIENTE ##
	cliente1 = Cliente("Valentín", 21, ["600000000"])

	## AÑADIMOS MOVIMIENTOS ##
	cliente1.añadir_movimiento(150.50)
	cliente1.añadir_movimiento(-20)
	cliente1.añadir_movimiento(300)

	## MOSTRAMOS LOS MOVIMIENTOS ##
	cliente1.mostrar_movimientos()
```

---

**NOTAS:**
- La lista `movimientos_bancarios` comienza vacía y se va llenando con cada movimiento que se añade. 

```
**003-Ej.py**
```python
'''
	Gestión de movimientos bancarios
	v0.1 Valentín Antonio De Gennaro
	Permite añadir y mostrar los movimientos bancarios de un cliente.
'''

class Cliente():
	def __init__(self, nombre, edad, telefonos):
		self.nombre = nombre
		self.edad = edad
		self.telefonos = telefonos
		self.movimientos_bancarios = []   # LISTA VACÍA PARA GUARDAR LOS MOVIMIENTOS

	def añadir_movimiento(self, monto):
		## AÑADIMOS EL MOVIMIENTO A LA LISTA ##
		self.movimientos_bancarios.append(monto)

	def mostrar_movimientos(self):
		## MOSTRAMOS TODOS LOS MOVIMIENTOS ##
		print("Movimientos bancarios de", self.nombre,":")
		for movimiento in self.movimientos_bancarios:
			print(movimiento)


## CREAMOS UN CLIENTE ##
cliente1 = Cliente("Valentín", 21, ["600000000"])

## AÑADIMOS MOVIMIENTOS ##
cliente1.añadir_movimiento(150.50)
cliente1.añadir_movimiento(-20)
cliente1.añadir_movimiento(300)

## MOSTRAMOS LOS MOVIMIENTOS ##
cliente1.mostrar_movimientos()


```
**004-EJ.md**
```markdown
En este ejercicio vamos a crear una aplicacion para gestionar datos de clientes. Usando clases, listas y metodos.
También vamos a crear métodos para poder cambiar el nombre y obtener el email, y guardaremos varios clientes en una lista.

---

Primero definimos la clase `Cliente`:
```
	class Cliente():
		def __init__(self, email):
			self.__nombrecompleto = ""
			self.__email = email
```
Luego creamos una función llamada `setNombreCompleto` para asignar un nuevo nombre al cliente:
```
	def setNombreCompleto(self, nuevonombre):
		self.__nombrecompleto = nuevonombre
```
Después creamos otra función llamada `getEmail` que muestre el email del cliente:
```
	def getEmail(self):
		return self.__email
```
También añadimos una función llamada `getNombreCompleto` para poder mostrar el nombre cuando sea necesario:
```
	def getNombreCompleto(self):
		return self.__nombrecompleto
```
A continuación creamos una lista vacía llamada `lista_clientes` donde vamos a guardar los objetos de tipo `Cliente`:
```
	lista_clientes = []
```
Creamos varios clientes y le asignamos valores:
```
	cliente1 = Cliente("cliente1@example.com")
	cliente1.setNombreCompleto("Carlos Pérez")
	lista_clientes.append(cliente1)
```
Y por último mostramos los datos al usuario:
```
	for cliente in lista_clientes:
		print("Nombre:", cliente.getNombreCompleto())
		print("Email:", cliente.getEmail())
		print("-------------------------------------------")
```

---

A continuación el código completo:
```
	'''
		Gestión de clientes
		v0.1 Valentín Antonio De Gennaro
		Permite guardar clientes en una lista usando getters y setters.
	'''

	## CREAMOS LA CLASE CLIENTE ##
		class Cliente():
			def __init__(self, email):
				self.__nombrecompleto = ""
				self.__email = email

			def setNombreCompleto(self, nuevonombre):
				self.__nombrecompleto = nuevonombre

			def getEmail(self):
				return self.__email

			def getNombreCompleto(self):
				return self.__nombrecompleto

		## CREAMOS LA LISTA DE CLIENTES ##
		lista_clientes = []

		## CREAMOS CLIENTES Y LOS AÑADIMOS A LA LISTA ##
		cliente1 = Cliente("cliente1@example.com")
		cliente1.setNombreCompleto("Carlos Pérez")
		lista_clientes.append(cliente1)

		cliente2 = Cliente("cliente2@example.com")
		cliente2.setNombreCompleto("María Gómez")
		lista_clientes.append(cliente2)

		cliente3 = Cliente("cliente3@example.com")
		cliente3.setNombreCompleto("Valentín De Gennaro")
		lista_clientes.append(cliente3)

		## MOSTRAMOS LA INFORMACIÓN DE LOS CLIENTES ##
		for cliente in lista_clientes:
			print("")
			print("Nombre:", cliente.getNombreCompleto())
			print("Email:", cliente.getEmail())
			print("-------------------------------------------")
```

---

**NOTAS:**
- Los atributos privados se definen con dos guiones bajos `__` delante del nombre.
- El método `setNombreCompleto()` sirve para modificar el nombre del cliente. 

```
**004-EJ.py**
```python
'''
	Gestión de clientes
	v0.1 Valentín Antonio De Gennaro
	Permite guardar clientes en una lista usando getters y setters.
'''

## CREAMOS LA CLASE CLIENTE ##
	class Cliente():
		def __init__(self, email):
			self.__nombrecompleto = ""
			self.__email = email

		def setNombreCompleto(self, nuevonombre):
			self.__nombrecompleto = nuevonombre

		def getEmail(self):
			return self.__email

		def getNombreCompleto(self):
			return self.__nombrecompleto

	## CREAMOS LA LISTA DE CLIENTES ##
	lista_clientes = []

	## CREAMOS CLIENTES Y LOS AÑADIMOS A LA LISTA ##
	cliente1 = Cliente("cliente1@example.com")
	cliente1.setNombreCompleto("Carlos Pérez")
	lista_clientes.append(cliente1)

	cliente2 = Cliente("cliente2@example.com")
	cliente2.setNombreCompleto("María Gómez")
	lista_clientes.append(cliente2)

	cliente3 = Cliente("cliente3@example.com")
	cliente3.setNombreCompleto("Valentín De Gennaro")
	lista_clientes.append(cliente3)

	## MOSTRAMOS LA INFORMACIÓN DE LOS CLIENTES ##
	for cliente in lista_clientes:
		print("")
		print("Nombre:", cliente.getNombreCompleto())
		print("Email:", cliente.getEmail())
		print("-------------------------------------------")


```
**005-EJ.md**
```markdown
En este ejercicio vamos a crear una aplicación que guardará los datos personales de un cliente como su nombre, apellidos, email y dirección.  

---

Primero definimos la clase `Cliente`:
```
	class Cliente():
		def __init__(self, nombre, apellidos, email, direccion):
			self.nombre = nombre
			self.apellidos = apellidos
			self.email = email
			self.direccion = direccion
```
Luego pedimos al usuario que introduzca los datos del cliente:
```
	nombre = input("Introduce el nombre del cliente: ")
	apellidos = input("Introduce los apellidos del cliente: ")
	email = input("Introduce el email del cliente: ")
	direccion = input("Introduce la dirección del cliente: ")
```
Después creamos un cliente y le asignamos los valores:
```
	cliente1 = Cliente(nombre, apellidos, email, direccion)
```
Por último mostramos la información al usuario:
```
	print("-------------------------------------------")
	print("Nombre:", cliente1.nombre)
	print("Apellidos:", cliente1.apellidos)
	print("Email:", cliente1.email)
	print("Dirección:", cliente1.direccion)
	print("-------------------------------------------")
```

---

A continuación el codigo completo:
```
	'''
		Registro de cliente
		v0.1 Valentín Antonio De Gennaro
		Programa que guarda y muestra los datos de un cliente.
	'''

	class Cliente():
		def __init__(self, nombre, apellidos, email, direccion):
			self.nombre = nombre
			self.apellidos = apellidos
			self.email = email
			self.direccion = direccion

	## PEDIMOS LOS DATOS AL USUARIO ##
	nombre = input("Introduce el nombre del cliente: ")
	apellidos = input("Introduce los apellidos del cliente: ")
	email = input("Introduce el email del cliente: ")
	direccion = input("Introduce la dirección del cliente: ")

	## CREAMOS UN CLIENTE ##
	cliente1 = Cliente(nombre, apellidos, email, direccion)

	## MOSTRAMOS LA INFORMACIÓN ##
	print("-------------------------------------------")
	print("Nombre:", cliente1.nombre)
	print("Apellidos:", cliente1.apellidos)
	print("Email:", cliente1.email)
	print("Dirección:", cliente1.direccion)
	print("-------------------------------------------")
```




```
**005-EJ.py**
```python
'''
	Registro de cliente
	v0.1 Valentín Antonio De Gennaro
	Programa que guarda y muestra los datos de un cliente.
'''

class Cliente():
	def __init__(self, nombre, apellidos, email, direccion):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		self.direccion = direccion

## PEDIMOS LOS DATOS AL USUARIO ##
nombre = input("Introduce el nombre del cliente: ")
apellidos = input("Introduce los apellidos del cliente: ")
email = input("Introduce el email del cliente: ")
direccion = input("Introduce la dirección del cliente: ")

## CREAMOS UN CLIENTE ##
cliente1 = Cliente(nombre, apellidos, email, direccion)

## MOSTRAMOS LA INFORMACIÓN ##
print("-------------------------------------------")
print("Nombre:", cliente1.nombre)
print("Apellidos:", cliente1.apellidos)
print("Email:", cliente1.email)
print("Dirección:", cliente1.direccion)
print("-------------------------------------------")


```
**006-EJ.md**
```markdown
En este ejercicio vamos a crear una aplicación con clase llamada `Matematicas` que nos servirá para redondear números y calcular su techo y su suelo sin usar librerías externas.  

---

Primero definimos la clase `Matematicas`:
```
	class Matematicas():
		def __init__(self):
			self.PI = 3.14159265359
```
Luego creamos una función llamada `redondeo` que redondea un número al entero más cercano siguiendo la regla del techo:
```
	def redondeo(self, numero):
		entero = int(numero)
		decimal = numero - entero
		if decimal < 0.5:
			return entero
		else:
			return entero + 1
```
Después creamos una función llamada `techo` que devuelve el número entero siguiente:
```
	def techo(self, numero):
		entero = int(numero)
		if numero == entero:
			return entero
		else:
			return entero + 1
```
Y otra función llamada `suelo` que devuelve el número entero más cercano hacia abajo:
```
	def suelo(self, numero):
		entero = int(numero)
		return entero
```
luego le pedimos al usuario el número:
```
numero = 7.6
```
Y por ultimo le mostramos la información al usuario:
```
	print("Número original:", numero)
	print("Redondeo:", calculadora.redondeo(numero))
	print("Techo:", calculadora.techo(numero))
	print("Suelo:", calculadora.suelo(numero))
```

---

A continuación el código completo:
```
	'''
		Clase Matematicas
		v0.1 Valentín Antonio De Gennaro
		Clase que permite redondear números y calcular su techo y suelo.
	'''

	class Matematicas():
		def __init__(self):
			self.PI = 3.14159265359

		def redondeo(self, numero):
			entero = int(numero)
			decimal = numero - entero
			if decimal < 0.5:
				return entero
			else:
				return entero + 1

		def techo(self, numero):
			entero = int(numero)
			if numero == entero:
				return entero
			else:
				return entero + 1

		def suelo(self, numero):
			entero = int(numero)
			return entero


	calculadora = Matematicas()

	numero = 7.6

	print("Número original:", numero)
	print("Redondeo:", calculadora.redondeo(numero))
	print("Techo:", calculadora.techo(numero))
	print("Suelo:", calculadora.suelo(numero))
```

---

**NOTAS:**
- No se usa la librería `math`, todo se calcula con operaciones básicas.  
- La variable `decimal` se obtiene restando la parte entera al número original. 


```
**006-EJ.py**
```python
'''
	Clase Matematicas
	v0.1 Valentín Antonio De Gennaro
	Clase que permite redondear números y calcular su techo y suelo.
'''

class Matematicas():
	def __init__(self):
		self.PI = 3.14159265359

	def redondeo(self, numero):
		entero = int(numero)
		decimal = numero - entero
		if decimal < 0.5:
			return entero
		else:
			return entero + 1

	def techo(self, numero):
		entero = int(numero)
		if numero == entero:
			return entero
		else:
			return entero + 1

	def suelo(self, numero):
		entero = int(numero)
		return entero


calculadora = Matematicas()

numero = input("Introduce el número: ")

print("Número original:", numero)
print("Redondeo:", calculadora.redondeo(numero))
print("Techo:", calculadora.techo(numero))
print("Suelo:", calculadora.suelo(numero))


```
**007-EJ.py**
```python
'''
	Herencia de animales
	v0.1 Valentín Antonio De Gennaro
	Ejemplo de clase madre e hijas usando herencia.
'''

class Animal():
	def __init__(self, edad, nombre, raza):
		self.edad = edad
		self.nombre = nombre
		self.raza = raza

class Gato(Animal):
	def __init__(self, edad, nombre, raza):
		super().__init__(edad, nombre, raza)

class Perro(Animal):
	def __init__(self, edad, nombre, raza):
		super().__init__(edad, nombre, raza)

## CREAMOS OBJETOS ##
gato1 = Gato(3, "Mishi", "Siames")
perro1 = Perro(5, "Rocky", "Labrador")

## MOSTRAMOS LA INFORMACIÓN ##
print("Edad del gato:", gato1.edad)
print("Edad del perro:", perro1.edad)


```
#### U5
**001-EJ-Resol.MD**
```markdown
En este ejercicio vamos a crear una agenda de contactos, que permita guardarlos en un archivo `.txt` y luego puedas listarlos.

---

Para realizar este ejercicio primero debemos comenzar el bucle:
```
	while True:
```
Luego le damos las opciones al usuario para que elija que hacer:
```
  print("Dime lo que quieres hacer: ")
  print("1.-Introduce un nuevo contacto")
  print("2.-Leer todos los contactos")
  opcion = int(input("Escoge tu opción: "))
```
Y luego comenzamos a desarrollar las opciones:
##Opción 1:
```
  if opcion == 1:
    nombre = input("Introduce el nombre de la persona: ")
    email = input("Introduce el email de la persona: ")
    archivo = open("agenda.txt",'a') 
    archivo.write(nombre+","+email+"\n")
    archivo.close()
```
##Opcion 2:
```
  elif opcion == 2:
    archivo = open("agenda.txt",'r')
    lineas = archivo.readlines()
    for linea in lineas:
      print(linea)
    archivo.close()
```

---

A continuación el codigo completo:
```
	'''
		Agenda de contactos
		v0.1 Valentin Antonio De Gennaro
		Permite guardar datos en un archivo txt y permite leerlos
	'''

	print("######Agenda de contactos#######")
	print("v0.1 Valentin Antonio De Gennaro")

	while True:
	  print("Dime lo que quieres hacer: ")
	  print("1.-Introduce un nuevo contacto")
	  print("2.-Leer todos los contactos")
	  opcion = int(input("Escoge tu opción: "))
	  if opcion == 1:
		nombre = input("Introduce el nombre de la persona: ")
		email = input("Introduce el email de la persona: ")
		archivo = open("agenda.txt",'a') 
		archivo.write(nombre+","+email+"\n")
		archivo.close()
	  elif opcion == 2:
		archivo = open("agenda.txt",'r')
		lineas = archivo.readlines()
		for linea in lineas:
		  print(linea)
		archivo.close()
```

---

**NOTAS:**
- Es importante cerrar el archivo con `close()` después de usarlo.

```
**001-EJ.py**
```python
'''
	Agenda de contactos
	v0.1 Valentin Antonio De Gennaro
	Permite guardar datos en un archivo txt y permite leerlos
'''

print("######Agenda de contactos#######")
print("v0.1 Valentin Antonio De Gennaro")

while True:
  print("Dime lo que quieres hacer: ")
  print("1.-Introduce un nuevo contacto")
  print("2.-Leer todos los contactos")
  opcion = int(input("Escoge tu opción: "))
  if opcion == 1:
    nombre = input("Introduce el nombre de la persona: ")
    email = input("Introduce el email de la persona: ")
    archivo = open("agenda.txt",'a') 
    archivo.write(nombre+","+email+"\n")
    archivo.close()
  elif opcion == 2:
    archivo = open("agenda.txt",'r')
    lineas = archivo.readlines()
    for linea in lineas:
      print(linea)
    archivo.close()

```
**003-EJ-Resol.md**
```markdown
En este ejercicio vamos a crera un programa que almacene datos de jugadores en un archivo `.txt` y en un `.bin` y te los muestre.

---

Primero creamos el archivo `jugadores.txt` y escribimos la información de un jugador:
```
	archivo = open("jugadores.txt", "w")
	archivo.write("Nombre: Juan Pérez\n")
	archivo.write("Edad: 25\n")
	archivo.write("Posición: Portero\n")
	archivo.write("Equipo: La Furia Roja\n")
	archivo.close()
```
Y luego añadimos otro jugador:
```
	archivo = open("jugadores.txt", "a")
	archivo.write("Nombre: María García\n")
	archivo.write("Edad: 28\n")
	archivo.write("Posición: Lateral derecho\n")
	archivo.write("Equipo: El Águila Negra\n")
	archivo.close()
```
A continuación leemos el archivo `jugadores.txt` y lo mostramos por pantalla:
```
	archivo = open("jugadores.txt", "r")
	contenido = archivo.read()
	print(contenido)
	archivo.close()
```

Finalmente usamos la librería `pickle` para guardar los jugadores en un archivo binario llamado `jugadores.bin`:
```
	import pickle
```
Luego creamos la clase jugador:
```
	class Jugador():
		def __init__(self, nombre, edad, posicion, equipo):
			self.nombre = nombre
			self.edad = edad
			self.posicion = posicion
			self.equipo = equipo
```
Creamos dos variables para almacenar los datos de los jugadores:
```
jugador1 = Jugador("Juan Pérez", 25, "Portero", "La Furia Roja")
jugador2 = Jugador("María García", 28, "Lateral derecho", "El Águila Negra")
```
Y por ultimo guardamos esos datos en el archivo `.bin`:
```
	archivo_binario = open("jugadores.bin", "wb")
	pickle.dump([jugador1, jugador2], archivo_binario)
	archivo_binario.close()
```

---

A continuación el codigo completo:
```
	'''
		Gestión de jugadores
		v0.1 Valentín Antonio De Gennaro
		Programa que guarda información de jugadores de rugby en archivos de texto y binarios.
	'''

	import pickle

	## ESCRIBIMOS EL PRIMER JUGADOR ##
	archivo = open("jugadores.txt", "w")
	archivo.write("Nombre: Juan Pérez\n")
	archivo.write("Edad: 25\n")
	archivo.write("Posición: Portero\n")
	archivo.write("Equipo: La Furia Roja\n")
	archivo.close()

	## AÑADIMOS UN NUEVO JUGADOR ##
	archivo = open("jugadores.txt", "a")
	archivo.write("Nombre: María García\n")
	archivo.write("Edad: 28\n")
	archivo.write("Posición: Lateral derecho\n")
	archivo.write("Equipo: El Águila Negra\n")
	archivo.close()

	## LEEMOS EL CONTENIDO DEL ARCHIVO ##
	archivo = open("jugadores.txt", "r")
	contenido = archivo.read()
	print(contenido)
	archivo.close()

	## CREAMOS LA CLASE JUGADOR ##
	class Jugador():
		def __init__(self, nombre, edad, posicion, equipo):
			self.nombre = nombre
			self.edad = edad
			self.posicion = posicion
			self.equipo = equipo

	## ALMACENAMOS LOS DATOS EN DOS VARIABLES ##
	jugador1 = Jugador("Juan Pérez", 25, "Portero", "La Furia Roja")
	jugador2 = Jugador("María García", 28, "Lateral derecho", "El Águila Negra")

	## GUARDAMOS LOS JUGADORES EN UN ARCHIVO BINARIO ##
	archivo_binario = open("jugadores.bin", "wb")
	pickle.dump([jugador1, jugador2], archivo_binario)
	archivo_binario.close()
```

---

**NOTAS:**
- La librería `pickle` sirve para guardar objetos en formato binario. 
- Es importante cerrar todos los archivos después de usarlos con `close()`.




```
**003-EJ.py**
```python
'''
	Gestión de jugadores
	v0.1 Valentín Antonio De Gennaro
	Programa que guarda información de jugadores de rugby en archivos de texto y binarios.
'''

import pickle

## ESCRIBIMOS EL PRIMER JUGADOR ##
archivo = open("jugadores.txt", "w")
archivo.write("Nombre: Juan Pérez\n")
archivo.write("Edad: 25\n")
archivo.write("Posición: Portero\n")
archivo.write("Equipo: La Furia Roja\n")
archivo.close()

## AÑADIMOS UN NUEVO JUGADOR ##
archivo = open("jugadores.txt", "a")
archivo.write("Nombre: María García\n")
archivo.write("Edad: 28\n")
archivo.write("Posición: Lateral derecho\n")
archivo.write("Equipo: El Águila Negra\n")
archivo.close()

## LEEMOS EL CONTENIDO DEL ARCHIVO ##
archivo = open("jugadores.txt", "r")
contenido = archivo.read()
print(contenido)
archivo.close()

## CREAMOS LA CLASE JUGADOR ##
class Jugador():
	def __init__(self, nombre, edad, posicion, equipo):
		self.nombre = nombre
		self.edad = edad
		self.posicion = posicion
		self.equipo = equipo

## ALMACENAMOS LOS DATOS EN DOS VARIABLES ##
jugador1 = Jugador("Juan Pérez", 25, "Portero", "La Furia Roja")
jugador2 = Jugador("María García", 28, "Lateral derecho", "El Águila Negra")

## GUARDAMOS LOS JUGADORES EN UN ARCHIVO BINARIO ##
archivo_binario = open("jugadores.bin", "wb")
pickle.dump([jugador1, jugador2], archivo_binario)
archivo_binario.close()


```
**004-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear un programa que calcule el tamaño total de una carpeta que el usuario indique.  

---

Primero importamos la librería `os`, que nos permite trabajar con rutas y archivos del sistema:
```
	import os
```
Luego le pedimos al usuario que nos indique la ruta de la carpeta:
```
	ruta = input("Introduce la ruta de la carpeta: ")
```
Creamos una variable para almacenar el tamaño de la carpeta:
```
	tamaño_total = 0
```

A continuación usamos `os.walk()` para recorrer todos los archivos y subcarpetas dentro de la ruta indicada. Por cada archivo que encontremos, sumamos su tamaño utilizando `os.path.getsize()`: 
```
	for carpeta, subcarpetas, archivos in os.walk(ruta):
		for archivo in archivos:
			ruta_completa = os.path.join(carpeta, archivo)
			tamaño_total += os.path.getsize(ruta_completa)
```
Y por ultimo le mostramos al usuario el tamaño de la carpeta en `MB`:
```
	print("El tamaño total de la carpeta es:", tamaño_total / 1048576, "MB")
```

---

A continuación el codigo completo:
```
	'''
		Calculadora de tamaño de carpeta
		v0.1 Valentín Antonio De Gennaro
		Programa que calcula el tamaño total de una carpeta en MB.
	'''

	import os

	ruta = input("Introduce la ruta de la carpeta: ")
	tamaño_total = 0

	for carpeta, subcarpetas, archivos in os.walk(ruta):
		for archivo in archivos:
			ruta_completa = os.path.join(carpeta, archivo)
			tamaño_total += os.path.getsize(ruta_completa)

	print("El tamaño total de la carpeta es:", tamaño_total / 1048576, "MB")
```

---

**NOTAS:**
- `os.walk()` permite recorrer todas las carpetas y archivos dentro de una ruta.  
- `os.path.getsize()` devuelve el tamaño del archivo en bytes.  
- Para mostrar el tamaño en MB se divide entre `1048576`.  


```
**004-EJ.py**
```python
'''
	Calculadora de tamaño de carpeta
	v0.1 Valentín Antonio De Gennaro
	Programa que calcula el tamaño total de una carpeta en MB.
'''

import os

ruta = input("Introduce la ruta de la carpeta: ")
tamaño_total = 0

for carpeta, subcarpetas, archivos in os.walk(ruta):
	for archivo in archivos:
		ruta_completa = os.path.join(carpeta, archivo)
		tamaño_total += os.path.getsize(ruta_completa)

print("El tamaño total de la carpeta es:", tamaño_total / 1048576, "MB")


```
**005-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una carpeta llamada EquipoRugby, comprimir todos los archivos que haya dentro en un archivo ZIP llamado Partidos.zip, y eliminar la carpeta si está vacía.  

---

Para empezar importamos las librerías necesarias:
```
	import os
	import zipfile
	import shutil
```
Es de buenas practicas agregar un bloque de comentario explicando lo que vamos a hacer:
```
	'''
	  Quiero:
	  1.- Crear una carpeta llamada EquipoRugby
	  2.- Comprimir todos los archivos que haya dentro en un ZIP llamado Partidos.zip
	  3.- Si la carpeta queda vacía, eliminarla
	'''
```
Después iniciamos un bloque `try` para que el programa siga funcionando en el caso de haber un error: 

Primero comprobamos si la carpeta existe y, si no existe, la creamos:
```
	if not os.path.isdir("EquipoRugby"):
		os.mkdir("EquipoRugby")
		print("Se ha creado la carpeta EquipoRugby")
	else:
		print("La carpeta EquipoRugby ya existía")
```
A continuación creamos el archivo ZIP y añadimos dentro todos los archivos que haya en la carpeta:
```
	zip_partidos = zipfile.ZipFile("Partidos.zip", "w", zipfile.ZIP_DEFLATED)

	for directorio, subcarpetas, archivos in os.walk("EquipoRugby"):
		for archivo in archivos:
			ruta_archivo = os.path.join(directorio, archivo)
			ruta_relativa = os.path.relpath(ruta_archivo, "EquipoRugby")
			zip_partidos.write(ruta_archivo, ruta_relativa)

	zip_partidos.close()
	print("Se ha creado el archivo Partidos.zip correctamente")
```

Por último comprobamos si la carpeta está vacía, si no tiene archivos, la eliminamos:
```
	if os.listdir("EquipoRugby") == []:
		os.rmdir("EquipoRugby")
		print("La carpeta EquipoRugby estaba vacía y se eliminó")
	else:
		print("La carpeta EquipoRugby no está vacía y no se eliminó")
```

---

A continuación el código completo:
```
import os
import zipfile
import shutil

'''
  Quiero:
  1.- Crear una carpeta llamada EquipoRugby
  2.- Comprimir todos los archivos que haya dentro en un ZIP llamado Partidos.zip
  3.- Si la carpeta queda vacía, eliminarla
'''

try:
	if not os.path.isdir("EquipoRugby"):
		os.mkdir("EquipoRugby")
		print("Se ha creado la carpeta EquipoRugby")
	else:
		print("La carpeta EquipoRugby ya existía")

	zip_partidos = zipfile.ZipFile("Partidos.zip", "w", zipfile.ZIP_DEFLATED)

	for directorio, subcarpetas, archivos in os.walk("EquipoRugby"):
		for archivo in archivos:
			ruta_archivo = os.path.join(directorio, archivo)
			ruta_relativa = os.path.relpath(ruta_archivo, "EquipoRugby")
			zip_partidos.write(ruta_archivo, ruta_relativa)

	zip_partidos.close()
	print("Se ha creado el archivo Partidos.zip correctamente")

	if os.listdir("EquipoRugby") == []:
		os.rmdir("EquipoRugby")
		print("La carpeta EquipoRugby estaba vacía y se eliminó")
	else:
		print("La carpeta EquipoRugby no está vacía y no se eliminó")

except:
	print("Ha habido un error, continuamos")
```

---

**NOTAS:**
- Usa `os.walk()` para recorrer archivos dentro de subcarpetas.
- El`try/except` evita que el programa se detenga si hay errores.
- `zipfile.ZipFile()` se usa para crear el archivo ZIP.



```
**005-EJ.py**
```python
import os
import zipfile
import shutil

'''
  Quiero:
  1.- Crear una carpeta llamada EquipoRugby
  2.- Comprimir todos los archivos que haya dentro en un ZIP llamado Partidos.zip
  3.- Si la carpeta queda vacía, eliminarla
'''

try:
	if not os.path.isdir("EquipoRugby"):
		os.mkdir("EquipoRugby")
		print("Se ha creado la carpeta EquipoRugby")
	else:
		print("La carpeta EquipoRugby ya existía")

	zip_partidos = zipfile.ZipFile("Partidos.zip", "w", zipfile.ZIP_DEFLATED)

	for directorio, subcarpetas, archivos in os.walk("EquipoRugby"):
		for archivo in archivos:
			ruta_archivo = os.path.join(directorio, archivo)
			ruta_relativa = os.path.relpath(ruta_archivo, "EquipoRugby")
			zip_partidos.write(ruta_archivo, ruta_relativa)

	zip_partidos.close()
	print("Se ha creado el archivo Partidos.zip correctamente")

	if os.listdir("EquipoRugby") == []:
		os.rmdir("EquipoRugby")
		print("La carpeta EquipoRugby estaba vacía y se eliminó")
	else:
		print("La carpeta EquipoRugby no está vacía y no se eliminó")

except:
	print("Ha habido un error, continuamos")


```
**006-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear un programa en Python que muestre una pantalla de bienvenida, luego un menú con las opciones de gestión de clientes (Crear, Leer, Actualizar y Eliminar) y que tenga una lista donde se guardarán los clientes.

---

Primero creamos la variable de bienvenida y la mostramos por pantalla:
```
	bienvenida = "###### Gestión de clientes v0.1 ######"
	print(bienvenida)
```
Después creamos la lista del menú con las opciones que va a poder elegir el usuario:
```
	opciones_menu = ["Crear","Leer","Actualizar","Eliminar"]
```
También creamos una lista vacía `clientes` para guardar los datos de los clientes:
```
clientes = []
```
Ahora definimos la función para insertar clientes:
```
def insertar_cliente():
	nombre = input("Introduce el nombre: ")
	apellidos = input("Introduce los apellidos: ")
	email = input("Introduce el email: ")
	cliente = {
		"nombre": nombre,
		"apellidos": apellidos,
		"email": email
	}
	clientes.append(cliente)
	print("Cliente añadido correctamente.")
```
Luego hacemos la función para listar los clientes:
```
def listar_clientes():
	if clientes == []:
		print("No hay clientes todavía.")
	else:
		identificador = 1
		for cliente in clientes:
			print("ID:", identificador)
			print("Nombre:", cliente["nombre"])
			print("Apellidos:", cliente["apellidos"])
			print("Email:", cliente["email"])
			print("---------------------")
			identificador = identificador + 1
```
Después creamos la función para actualizar un cliente:
```
	def actualizar_cliente():
		listar_clientes()
		id_cliente = int(input("Introduce el ID del cliente a actualizar: "))
		posicion = id_cliente - 1
		if posicion >= 0 and posicion < len(clientes):
			nombre = input("Nuevo nombre: ")
			apellidos = input("Nuevos apellidos: ")
			email = input("Nuevo email: ")
			clientes[posicion]["nombre"] = nombre
			clientes[posicion]["apellidos"] = apellidos
			clientes[posicion]["email"] = email
			print("Cliente actualizado.")
		else:
			print("ID no válido.")
```
Creamos también la función para eliminar un cliente:
```
	def eliminar_cliente():
		listar_clientes()
		id_cliente = int(input("Introduce el ID del cliente a eliminar: "))
		posicion = id_cliente - 1
		if posicion >= 0 and posicion < len(clientes):
			confirmacion = input("¿Seguro que quieres eliminarlo? (s/n): ")
			if confirmacion == "s":
				del clientes[posicion]
				print("Cliente eliminado.")
			else:
				print("Operación cancelada.")
		else:
			print("ID no válido.")
```
Por último hacemos el menú principal con un `while True` para que el programa siga funcionando hasta que el usuario lo cierre y definimos las opciones:
```
---

**NOTAS:**
- Los clientes se guardan en una lista de diccionarios para poder actualizar y eliminar.
- El ID que se muestra es la posición en la lista + 1.
- El menú funciona con `while True` como en los ejercicios de clase.
- Se usan solo funciones, listas y bucles, sin estructuras avanzadas.


```
**006-EJ.py**
```python
'''
	Gestión de clientes
	v0.1 Valentin Antonio De Gennaro
'''

## PANTALLA DE BIENVENIDA ##
bienvenida = "###### Gestión de clientes v0.1 ######"
print(bienvenida)

## LISTA DEL MENÚ ##
opciones_menu = ["Crear","Leer","Actualizar","Eliminar"]

## LISTA DONDE GUARDAREMOS LOS CLIENTES ##
clientes = []

## FUNCIONES ##

def insertar_cliente():
	nombre = input("Introduce el nombre: ")
	apellidos = input("Introduce los apellidos: ")
	email = input("Introduce el email: ")
	cliente = {
		"nombre": nombre,
		"apellidos": apellidos,
		"email": email
	}
	clientes.append(cliente)
	print("Cliente añadido correctamente.")

def listar_clientes():
	if clientes == []:
		print("No hay clientes todavía.")
	else:
		identificador = 1
		for cliente in clientes:
			print("ID:", identificador)
			print("Nombre:", cliente["nombre"])
			print("Apellidos:", cliente["apellidos"])
			print("Email:", cliente["email"])
			print("---------------------")
			identificador = identificador + 1

def actualizar_cliente():
	listar_clientes()
	id_cliente = int(input("Introduce el ID del cliente a actualizar: "))
	posicion = id_cliente - 1
	if posicion >= 0 and posicion < len(clientes):
		nombre = input("Nuevo nombre: ")
		apellidos = input("Nuevos apellidos: ")
		email = input("Nuevo email: ")
		clientes[posicion]["nombre"] = nombre
		clientes[posicion]["apellidos"] = apellidos
		clientes[posicion]["email"] = email
		print("Cliente actualizado.")
	else:
		print("ID no válido.")

def eliminar_cliente():
	listar_clientes()
	id_cliente = int(input("Introduce el ID del cliente a eliminar: "))
	posicion = id_cliente - 1
	if posicion >= 0 and posicion < len(clientes):
		confirmacion = input("¿Seguro que quieres eliminarlo? (s/n): ")
		if confirmacion == "s":
			del clientes[posicion]
			print("Cliente eliminado.")
		else:
			print("Operación cancelada.")
	else:
		print("ID no válido.")

## MENÚ PRINCIPAL ##
while True:
	print("---- MENÚ PRINCIPAL ----")
	identificador = 1
	for opcion in opciones_menu:
		print(str(identificador)+".-"+opcion)
		identificador = identificador + 1

	opcion_seleccionada = input("Selecciona una opción (1-4) o 'salir': ")
	
## DEFINIMOS LAS OPCIONES ##
	if opcion_seleccionada == "1":
		insertar_cliente()
	elif opcion_seleccionada == "2":
		listar_clientes()
	elif opcion_seleccionada == "3":
		actualizar_cliente()
	elif opcion_seleccionada == "4":
		eliminar_cliente()
	elif opcion_seleccionada.lower() == "salir":
		print("Saliendo del programa...")
		break
	else:
		print("Opción no válida.")


```
**011-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una aplicación en Python que gestione un portafolio de piezas y categorías utilizando una base de datos MySQL. El programa permitirá insertar, listar, actualizar y eliminar registros de las tablas `categoria` y `pieza`.

---

Primero importamos la librería necesaria para conectar Python con MySQL:
```
	import mysql.connector
```
Luego nos conectamos con la base de datos:
```
	conexion = mysql.connector.connect(
		host="localhost",
		user="admin",
		password="Portafolio2526@",
		database="portafolio"
	)
	cursor = conexion.cursor()
```

---

Después definimos las funciones para insertar datos.  
Primero creamos la función para insertar una pieza en la tabla `pieza`:
```
	def insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria):
		cursor.execute('''
		  INSERT INTO pieza
		  VALUES(
			NULL,
			"'''+titulo_pieza+'''",
			"'''+descripcion_pieza+'''",
			"'''+imagen+'''",
			"'''+url+'''",
			"'''+id_categoria+'''"
		  );
		''')
		conexion.commit()
```
También creamos la función para insertar una categoría:
```
	def insertar_categoria(titulo_categoria,descripcion_categoria):
		cursor.execute('''
		  INSERT INTO categoria
		  VALUES(
			NULL,
			"'''+titulo_categoria+'''",
			"'''+descripcion_categoria+'''"
		  );
		''')
		conexion.commit()
```

Y la función para actualizar una categoría existente:
```
	def actualizar_categoria(titulo_categoria,descripcion_categoria):
		cursor.execute('''
		  UPDATE categoria SET
			titulo = "'''+titulo_categoria+'''",
			descripcion = "'''+descripcion_categoria+'''"
		''')
		conexion.commit()
```

---

A continuación mostramos una bienvenida al usuario:
```
print("########### Gestión de portafolio ##############")
print("##### v0.1 Valentin Antonio De Gennaro #########")
```

---

Creamos un bucle `while True` que mostrará el menú de opciones:
```
	while True:
		print("Escoge una opción:")
		print("1.-Insertar")
		print("2.-Listar")
		print("3.-Actualizar")
		print("4.-Eliminar")
		print("5.-Salir")
		opcion = int(input("Escoge una opcion: "))
```
Y desarrollamos las opciones:
##Opcion 1:
```
	if opcion == 1:
			print("1.-Insertar una categoria")
			print("2.-Insertar una pieza")
			opcion = int(input("Escoge una opcion: "))
			
			if opcion == 1:
				titulo_categoria = input("Ingresa el titulo de la categoria: ")
				descripcion_categoria = input("Introduce la descripcion de la categoria: ")
				insertar_categoria(titulo_categoria, descripcion_categoria)
				
			elif opcion == 2:
				titulo_pieza = input("Ingresa el titulo de la pieza: ")
				descripcion_pieza = input("Introduce la descripcion de la pieza: ")
				imagen = input("Introduce la imagen de la pieza: ")
				url = input("Introduce la url de la pieza: ")
				id_categoria = input("Introduce el id de la categoria: ")
				insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria)
```
##Opcion 2:
```
	elif opcion == 2:
		print("1.-Listar categoria")
		print("2.-Listar pieza")
		print("3.-Ambas")
		opcion = int(input("Escoge una opcion: "))
		
		
		if opcion == 1:
			consulta = "SELECT * FROM categoria;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("-" * 30)  # línea separadora entre registros
		
		
		elif opcion == 2:
			consulta = "SELECT * FROM pieza;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("imagen: ",fila[3])
				print("url: ",fila[4])
				print("Id categoria: ",fila[5])
				print("-" * 30)  # línea separadora entre registros
				
		elif opcion == 3:		
			consulta = "SELECT * FROM vista_portafolio;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Titulo de la pieza: ",fila[0])
				print("Descripción de la pieza: ",fila[1])
				print("Imagen de la pieza: ",fila[2])
				print("Url de la pieza: ",fila[2])
				print("Titulo de la categoria: ",fila[2])
				print("Descripción de la categoria: ",fila[2])		
				print("-" * 30)  # línea separadora entre registros
```
##Opción 3:
```
	elif opcion == 3:
		print("1.-Modificar una categoria")
		print("2.-Modificar una pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva categoria: ")
			descripcion = input("Introduce la descripcion de la nueva categoria: ")
			cursor.execute('''
			  UPDATE categoria 
			  SET
			  titulo = "'''+titulo+'''",
			  descripcion = "'''+descripcion+'''"
			  WHERE Identificador = '''+identificador+'''
			''')
			conexion.commit()
			
		elif opcion == 2:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva pieza: ")
			descripcion = input("Introduce la descripcion de la nueva pieza: ")
			fecha = input("Introduce la fecha de la nueva pieza: ")
			imagen = input("Introduce el nombre de la imagen de la nueva pieza: ")
			cursor.execute('''
			  UPDATE piezas 
			  SET
			  titulo = "'''+titulo+'''",
			  descripcion = "'''+descripcion+'''",
			  fecha = "'''+fecha+'''",
			  imagen = "'''+imagen+'''"
			  WHERE Identificador = '''+identificador+'''
			''')
			conexion.commit()
```
##Opción 4:
```
	elif opcion == 4:
		print("1.-Eliminar un elemento de categoria")
		print("2.-Eliminar un elemento de pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM categoria WHERE Identificador = "+identificador+";")
			conexion.commit()
		
		
		elif opcion == 2:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM piezas WHERE Identificador = "+identificador+";")
			conexion.commit()
```
##Opción 5:
```
	elif opcion == 5:
		print("Saliendo...")
		break
```
Y por ultimo cerramos el cursor y la conexión:
```
cursor.close()
conexion.close()
```

---

A continuación el codigo completo:
```
	'''
		Gestion de portafolio
		v0.1 Valentin Antonio De Gennaro
	'''
	import mysql.connector

	conexion = mysql.connector.connect(
		host="localhost",
		user="admin",
		password="Portafolio2526@",
		database="portafolio"
	)
	cursor = conexion.cursor()

	def insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria):
		cursor.execute('''
		  INSERT INTO pieza
		  VALUES(
			NULL,
			"'''+titulo_pieza+'''",
			"'''+descripcion_pieza+'''",
			"'''+imagen.get+'''",
			"'''+url+'''"
			"'''+id_categoria+'''"
		  );
		''')
		conexion.commit()
		
	def insertar_categoria(titulo_categoria,descripcion_categoria):
		cursor.execute('''
		  INSERT INTO categoria
		  VALUES(
			NULL,
			"'''+titulo_categoria+'''",
			"'''+descripcion_categoria+'''"
		  );
		''')
		
	def actualizar_categoria(titulo_categoria,descripcion_categoria):
		cursor.execute('''
		  UPDATE categoria SET
			NULL,
			"'''+titulo_categoria+'''",
			"'''+descripcion_categoria+'''"
		  );
		''')
		conexion.commit()

	print("########### Gestión de portafolio ##############")
	print("##### v0.1 Valentin Antonio De Gennaro #########")

	while True:
		print("Escoge una opción:")
		print("1.-Insertar")
		print("2.-Listar")
		print("3.-Actualizar")
		print("4.-Eliminar")
		print("5.-Salir")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			print("1.-Insertar una categoria")
			print("2.-Insertar una pieza")
			opcion = int(input("Escoge una opcion: "))
			
			if opcion == 1:
				titulo_categoria = input("Ingresa el titulo de la categoria: ")
				descripcion_categoria = input("Introduce la descripcion de la categoria: ")
				insertar_categoria(titulo_categoria, descripcion_categoria)
				
			elif opcion == 2:
				titulo_pieza = input("Ingresa el titulo de la pieza: ")
				descripcion_pieza = input("Introduce la descripcion de la pieza: ")
				imagen = input("Introduce la imagen de la pieza: ")
				url = input("Introduce la url de la pieza: ")
				id_categoria = input("Introduce el id de la categoria: ")
				insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria)
		
		elif opcion == 2:
			print("1.-Listar categoria")
			print("2.-Listar pieza")
			print("3.-Ambas")
			opcion = int(input("Escoge una opcion: "))
			
			
			if opcion == 1:
				consulta = "SELECT * FROM categoria;"
				cursor.execute(consulta)
				resultados = cursor.fetchall()
				for fila in resultados:
					print("")
					print("Identificador: ",fila[0])
					print("Titulo: ",fila[1])
					print("descripcion: ",fila[2])
					print("-" * 30)  # línea separadora entre registros
			
			
			elif opcion == 2:
				consulta = "SELECT * FROM pieza;"
				cursor.execute(consulta)
				resultados = cursor.fetchall()
				for fila in resultados:
					print("")
					print("Identificador: ",fila[0])
					print("Titulo: ",fila[1])
					print("descripcion: ",fila[2])
					print("imagen: ",fila[3])
					print("url: ",fila[4])
					print("Id categoria: ",fila[5])
					print("-" * 30)  # línea separadora entre registros
					
			elif opcion == 3:		
				consulta = "SELECT * FROM vista_portafolio;"
				cursor.execute(consulta)
				resultados = cursor.fetchall()
				for fila in resultados:
					print("")
					print("Titulo de la pieza: ",fila[0])
					print("Descripción de la pieza: ",fila[1])
					print("Imagen de la pieza: ",fila[2])
					print("Url de la pieza: ",fila[2])
					print("Titulo de la categoria: ",fila[2])
					print("Descripción de la categoria: ",fila[2])		
					print("-" * 30)  # línea separadora entre registros
					
					
		elif opcion == 3:
			print("1.-Modificar una categoria")
			print("2.-Modificar una pieza")
			opcion = int(input("Escoge una opcion: "))
			
			if opcion == 1:
				identificador = input("Introduce el Identificador a actualizar: ")
				titulo = input("Introduce el titulo de la nueva categoria: ")
				descripcion = input("Introduce la descripcion de la nueva categoria: ")
				cursor.execute('''
				  UPDATE categoria 
				  SET
				  titulo = "'''+titulo+'''",
				  descripcion = "'''+descripcion+'''"
				  WHERE Identificador = '''+identificador+'''
				''')
				conexion.commit()
				
			elif opcion == 2:
				identificador = input("Introduce el Identificador a actualizar: ")
				titulo = input("Introduce el titulo de la nueva pieza: ")
				descripcion = input("Introduce la descripcion de la nueva pieza: ")
				fecha = input("Introduce la fecha de la nueva pieza: ")
				imagen = input("Introduce el nombre de la imagen de la nueva pieza: ")
				cursor.execute('''
				  UPDATE piezas 
				  SET
				  titulo = "'''+titulo+'''",
				  descripcion = "'''+descripcion+'''",
				  fecha = "'''+fecha+'''",
				  imagen = "'''+imagen+'''"
				  WHERE Identificador = '''+identificador+'''
				''')
				conexion.commit()
		
		elif opcion == 4:
			print("1.-Eliminar un elemento de categoria")
			print("2.-Eliminar un elemento de pieza")
			opcion = int(input("Escoge una opcion: "))
			
			if opcion == 1:
				identificador = input("Introduce el Identificador a eliminar: ")
				cursor.execute("DELETE FROM categoria WHERE Identificador = "+identificador+";")
				conexion.commit()
			
			
			elif opcion == 2:
				identificador = input("Introduce el Identificador a eliminar: ")
				cursor.execute("DELETE FROM piezas WHERE Identificador = "+identificador+";")
				conexion.commit()
		
		elif opcion == 5:
			print("Saliendo...")
			break
		
	cursor.close()
	conexion.close()
```	

---

**NOTAS:**
- El programa se conecta a MySQL usando la librería `mysql.connector`.

	

```
**011-EJ.py**
```python
'''
	Gestion de portafolio
	v0.1 Valentin Antonio De Gennaro
'''
import mysql.connector

conexion = mysql.connector.connect(
    host="localhost",
    user="admin",
    password="Portafolio2526@",
    database="portafolio"
)
cursor = conexion.cursor()

def insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria):
	cursor.execute('''
	  INSERT INTO pieza
	  VALUES(
		NULL,
		"'''+titulo_pieza+'''",
		"'''+descripcion_pieza+'''",
		"'''+imagen.get+'''",
		"'''+url+'''"
		"'''+id_categoria+'''"
	  );
	''')
	conexion.commit()
	
def insertar_categoria(titulo_categoria,descripcion_categoria):
	cursor.execute('''
	  INSERT INTO categoria
	  VALUES(
		NULL,
		"'''+titulo_categoria+'''",
		"'''+descripcion_categoria+'''"
	  );
	''')
	
def actualizar_categoria(titulo_categoria,descripcion_categoria):
	cursor.execute('''
	  UPDATE categoria SET
		NULL,
		"'''+titulo_categoria+'''",
		"'''+descripcion_categoria+'''"
	  );
	''')
	conexion.commit()

print("########### Gestión de portafolio ##############")
print("##### v0.1 Valentin Antonio De Gennaro #########")

while True:
	print("Escoge una opción:")
	print("1.-Insertar")
	print("2.-Listar")
	print("3.-Actualizar")
	print("4.-Eliminar")
	print("5.-Salir")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		print("1.-Insertar una categoria")
		print("2.-Insertar una pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			titulo_categoria = input("Ingresa el titulo de la categoria: ")
			descripcion_categoria = input("Introduce la descripcion de la categoria: ")
			insertar_categoria(titulo_categoria, descripcion_categoria)
			
		elif opcion == 2:
			titulo_pieza = input("Ingresa el titulo de la pieza: ")
			descripcion_pieza = input("Introduce la descripcion de la pieza: ")
			imagen = input("Introduce la imagen de la pieza: ")
			url = input("Introduce la url de la pieza: ")
			id_categoria = input("Introduce el id de la categoria: ")
			insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria)
	
	elif opcion == 2:
		print("1.-Listar categoria")
		print("2.-Listar pieza")
		print("3.-Ambas")
		opcion = int(input("Escoge una opcion: "))
		
		
		if opcion == 1:
			consulta = "SELECT * FROM categoria;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("-" * 30)  # línea separadora entre registros
		
		
		elif opcion == 2:
			consulta = "SELECT * FROM pieza;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("imagen: ",fila[3])
				print("url: ",fila[4])
				print("Id categoria: ",fila[5])
				print("-" * 30)  # línea separadora entre registros
				
		elif opcion == 3:		
			consulta = "SELECT * FROM vista_portafolio;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Titulo de la pieza: ",fila[0])
				print("Descripción de la pieza: ",fila[1])
				print("Imagen de la pieza: ",fila[2])
				print("Url de la pieza: ",fila[2])
				print("Titulo de la categoria: ",fila[2])
				print("Descripción de la categoria: ",fila[2])		
				print("-" * 30)  # línea separadora entre registros
				
				
	elif opcion == 3:
		print("1.-Modificar una categoria")
		print("2.-Modificar una pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva categoria: ")
			descripcion = input("Introduce la descripcion de la nueva categoria: ")
			cursor.execute('''
			  UPDATE categoria 
			  SET
			  titulo = "'''+titulo+'''",
			  descripcion = "'''+descripcion+'''"
			  WHERE Identificador = '''+identificador+'''
			''')
			conexion.commit()
			
		elif opcion == 2:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva pieza: ")
			descripcion = input("Introduce la descripcion de la nueva pieza: ")
			fecha = input("Introduce la fecha de la nueva pieza: ")
			imagen = input("Introduce el nombre de la imagen de la nueva pieza: ")
			cursor.execute('''
			  UPDATE piezas 
			  SET
			  titulo = "'''+titulo+'''",
			  descripcion = "'''+descripcion+'''",
			  fecha = "'''+fecha+'''",
			  imagen = "'''+imagen+'''"
			  WHERE Identificador = '''+identificador+'''
			''')
			conexion.commit()
    
	elif opcion == 4:
		print("1.-Eliminar un elemento de categoria")
		print("2.-Eliminar un elemento de pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM categoria WHERE Identificador = "+identificador+";")
			conexion.commit()
		
		
		elif opcion == 2:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM piezas WHERE Identificador = "+identificador+";")
			conexion.commit()
	
	elif opcion == 5:
		print("Saliendo...")
		break
	
cursor.close()
conexion.close()
	
	
	

```
#### U6
**001-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una aplicación que gestione jugadores de rugby, esta aplicación puede agregar, eliminar y modificar jugadores de una lista.

---

Para realizar este ejercicio primero debemos definir la lista y agregarle 3 nombres de jugadores de rugby. A continuación un ejemplo:
```
	jugadores = ["Antoine Dupont", "Beauden Barrett", "Cheslin Kolbe"]
```
Luego añadimos un nombre a la lista:
```
	jugadores.append("Maro Itoje")
```
Luego Usando un bucle `for` vamos a recorrer la lista y mostrarla al usuario usando `print`:
```
	print("Lista inicial de jugadores:")
	for jugador in jugadores:
		print(jugadores)
```
Ahora eliminamos a un jugador de la lista usando el metodo `pop()`:
```
	jugador_eliminado = jugadores.pop(1)
	print("Jugador eliminado: ",jugador_eliminado)
```
Luego de eso vamos a modificar el nombre de un jugador:
```
	indice_a_modificar = 0
	jugadores[indice_a_modificar] = "Jonathan Sexton"
```
Y por ultio mostramos la lista actualizada al usuario:
```
	print("Lista actualizada de jugadores:")
	for jugador in jugadores:
		print(jugadores)
```

---

A continuación el codigo completo:
```
	'''
		Lista de jugadores de rugby
		v0.1 Valentín Antonio De Gennaro
	'''

	## CREO UNA LISTA Y LE AÑADO 3 NOMBRES ##
	jugadores = ["Antoine Dupont", "Beauden Barrett", "Cheslin Kolbe"]

	## AÑADO OTRO NOMBRE A LA LISTA ##
	jugadores.append("Maro Itoje")

	## MUESTRO LOS JUGADORES DE LA LISTA ##
	print("Lista inicial de jugadores:")
	for jugador in jugadores:
		print(jugadores)
		
	## ELIMINO A UN JUGADOR DE LA LISTA ##
	jugador_eliminado = jugadores.pop(1)
	print("Jugador eliminado: ",jugador_eliminado)

	## MODIFICAMOS EL NOMBRE DE UN JUGADOR ##
	indice_a_modificar = 0
	jugadores[indice_a_modificar] = "Jonathan Sexton"

	## MOSTRAMOS LA LISTA ACTUALIZADA ##
	print("Lista actualizada de jugadores:")
	for jugador in jugadores:
		print(jugadores)
```

---

**NOTAS:**
- El uso de una lista es util para almacenar información y luego poder mostrarla.
- Usando `append()` podemos agregar información a la lista.

```
**001-EJ.py**
```python
'''
	Lista de jugadores de rugby
	v0.1 Valentín Antonio De Gennaro
'''

## CREO UNA LISTA Y LE AÑADO 3 NOMBRES ##
jugadores = ["Antoine Dupont", "Beauden Barrett", "Cheslin Kolbe"]

## AÑADO OTRO NOMBRE A LA LISTA ##
jugadores.append("Maro Itoje")

## MUESTRO LOS JUGADORES DE LA LISTA ##
print("Lista inicial de jugadores:")
for jugador in jugadores:
	print(jugadores)
	
## ELIMINO A UN JUGADOR DE LA LISTA ##
jugador_eliminado = jugadores.pop(1)
print("Jugador eliminado: ",jugador_eliminado)

## MODIFICAMOS EL NOMBRE DE UN JUGADOR ##
indice_a_modificar = 0
jugadores[indice_a_modificar] = "Jonathan Sexton"

## MOSTRAMOS LA LISTA ACTUALIZADA ##
print("Lista actualizada de jugadores:")
for jugador in jugadores:
	print(jugadores)


```
**002-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una aplicación que gestione el menu de un restaurante y lo almacene en un archivo binario y luego lo muestre.

---

Para realizar este ejercicio primero debemos importar la `pickle` la cual usaremos para guardar y leer en el archivo binario:
```
	import pickle
```
Luego usando `try / except` para evitar error cargamos o creamos el archivo binario:
```
	try:
		archivo = open("menu.bin","rb")
		menu = pickle.load(archivo)
		archivo.close()
		print("Menú cargado correctamente:", menu)
		
	except:
		print("No existe archivo previo. Creando un menú nuevo...")
		menu = []
```
Luego creamos un bucle `while` y le pedimos al usuario que indique una opción:
```
	while True:
		print("Selecciona una opcion:")
		print("1.- Añadir una nueva comida")
		print("2.- Mostrar el menu")
		print("3.- Guardar menú en archivo binario")
		print("4.- Cargar menú desde archivo binario")
		print("5.- Salir")
		opcion = int(input("Escoge una opción: "))
```
Luego del menu debemos desarrollar las opciones:

Opción 1:
```
	if opcion == 1:
		comida = input("Dime el nombre de la comida: ")
		menu.append(comida)
		print("Comida añadida:", comida)
```
Opción 2:
```
	elif opcion == 2:
		print("Comidas guardadas:")
		for comida in menu:
			print(comida)
```
Opción 3:
```
	elif opcion == 3:
		archivo = open("menu.bin","wb")
		pickle.dump(menu, archivo)
		archivo.close()
		print("Menú guardado correctamente.")
```
Opción 4:
```
	elif opcion == 4:
		try:
			archivo = open("menu.bin","rb")
			menu = pickle.load(archivo)
			archivo.close()
			print("Menú cargado:", menu)
		except:
			print("No se pudo cargar el archivo binario.")
```
Opción 5:
```
	elif opcion == 5:
		print("Saliendo...")
		break
```

---

A continuación el codigo completo:
```
'''
	Gestión de menú de restaurante
	v0.1 Valentín Antonio De Gennaro
'''

## IMPORTAMOS LA LIBRERIA NECESARIA ##
import pickle

print("### Gestión del menu de un restaurante ###")
print("#### v0.1 Valentin Antonio De Gennaro ####")

## INTENTAMOS CARGAR EL MENÚ ##
try:
	archivo = open("menu.bin","rb")
	menu = pickle.load(archivo)
	archivo.close()
	print("Menú cargado correctamente:", menu)
	
## SI NO EXITE CREAMOS UN MENU NUEVO ##	
except:
	print("No existe archivo previo. Creando un menú nuevo...")
	menu = []

## LE DAMOS LAS OPCIONES AL USUARIO ##
while True:
	print("Selecciona una opcion:")
	print("1.- Añadir una nueva comida")
	print("2.- Mostrar el menu")
	print("3.- Guardar menú en archivo binario")
	print("4.- Cargar menú desde archivo binario")
	print("5.- Salir")
	opcion = int(input("Escoge una opción: "))

## DESARROLLAMOS LAS OPCIONES: ##

	## OPCIÓN 1: AÑADIR COMIDA ##
	if opcion == 1:
		comida = input("Dime el nombre de la comida: ")
		menu.append(comida)
		print("###########################")
		print("Comida añadida:", comida)
		print("###########################")

	## OPCIÓN 2: MOSTRAR LISTA ##
	elif opcion == 2:
		print("###########################")
		print("Comidas guardadas:")
		for comida in menu:
			print("###########################")
			print(comida)
			print("###########################")

	## OPCIÓN 3: GUARDAR EN BINARIO ##
	elif opcion == 3:
		archivo = open("menu.bin","wb")
		pickle.dump(menu, archivo)
		archivo.close()
		print("###########################")
		print("Menú guardado correctamente.")
		print("###########################")

	## OPCIÓN 4: CARGAR DESDE BINARIO ##
	elif opcion == 4:
		try:
			archivo = open("menu.bin","rb")
			menu = pickle.load(archivo)
			archivo.close()
			print("###########################")
			print("Menú cargado:", menu)
			print("###########################")
		except:
			print("###########################")
			print("No se pudo cargar el archivo binario.")
			print("###########################")

	## OPCIÓN 5: SALIR ##
	elif opcion == 5:
		print("Saliendo del programa.")
		break

	else:
		print("###########################")
		print("Opción no válida.")
		print("###########################")

```

---

**NOTAS:**
- Al momento de usar el bucle `while` hay que controlarlo ya que de no hacerlo el programa va a ser un bucle sin fin.
- Usando la libreria `pickle` podemos guardar información en un archivo binario y luego mostrar la información.


```
**002-EJ.py**
```python
'''
	Gestión de menú de restaurante
	v0.1 Valentín Antonio De Gennaro
'''

## IMPORTAMOS LA LIBRERIA NECESARIA ##
import pickle

print("### Gestión del menu de un restaurante ###")
print("#### v0.1 Valentin Antonio De Gennaro ####")

## INTENTAMOS CARGAR EL MENÚ ##
try:
	archivo = open("menu.bin","rb")
	menu = pickle.load(archivo)
	archivo.close()
	print("Menú cargado correctamente:", menu)
	
## SI NO EXITE CREAMOS UN MENU NUEVO ##	
except:
	print("No existe archivo previo. Creando un menú nuevo...")
	menu = []

## LE DAMOS LAS OPCIONES AL USUARIO ##
while True:
	print("Selecciona una opcion:")
	print("1.- Añadir una nueva comida")
	print("2.- Mostrar el menu")
	print("3.- Guardar menú en archivo binario")
	print("4.- Cargar menú desde archivo binario")
	print("5.- Salir")
	opcion = int(input("Escoge una opción: "))

## DESARROLLAMOS LAS OPCIONES: ##

	## OPCIÓN 1: AÑADIR COMIDA ##
	if opcion == 1:
		comida = input("Dime el nombre de la comida: ")
		menu.append(comida)
		print("###########################")
		print("Comida añadida:", comida)
		print("###########################")

	## OPCIÓN 2: MOSTRAR LISTA ##
	elif opcion == 2:
		print("###########################")
		print("Comidas guardadas:")
		for comida in menu:
			print("###########################")
			print(comida)
			print("###########################")

	## OPCIÓN 3: GUARDAR EN BINARIO ##
	elif opcion == 3:
		archivo = open("menu.bin","wb")
		pickle.dump(menu, archivo)
		archivo.close()
		print("###########################")
		print("Menú guardado correctamente.")
		print("###########################")

	## OPCIÓN 4: CARGAR DESDE BINARIO ##
	elif opcion == 4:
		try:
			archivo = open("menu.bin","rb")
			menu = pickle.load(archivo)
			archivo.close()
			print("###########################")
			print("Menú cargado:", menu)
			print("###########################")
		except:
			print("###########################")
			print("No se pudo cargar el archivo binario.")
			print("###########################")

	## OPCIÓN 5: SALIR ##
	elif opcion == 5:
		print("Saliendo del programa.")
		break

	else:
		print("###########################")
		print("Opción no válida.")
		print("###########################")


```
**003-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una aplicación para gestionar una agenda, la cual guarda los datos en un archivo binario.

---

Para realizar este ejercicio primero debemos importar la libreria necesaria:
```
	import pickle
```
Luego creamos una lista vacia:
```
	agenda = []
```
Despues usando el bucle `while` le pedimos al usuario los datos del contacto a agregar:
```
	while True:
			nombre = input("Dime tu nombre: ")
			apellidos = input("Dime tus apellidos: ")
			email = input("Dime tu email: ")
			telefono = input("Dime tu telefono: ")
```
Luego añadimos los datos a la lista:
```
	agenda.append([nombre,apellidos,email,telefono])
```
Despues mostramos por pantalla los datos almacenados en la lista:
```
	print(agenda)
```
Y por ultimo guardamos los datos en un archivo binario:
```
	archivo = open("agenda.bin","wb")
	pickle.dump(agenda, archivo)
	archivo.close()
```

---

A continuación el codigo completo:
```
	'''
		Gestión de agenda
		v0.1 Valentín Antonio De Gennaro
	'''

	## IMPORTAMOS LA LIBRERIA NECESARIA ##
	import pickle

	print("############ Gestión de agenda ###########")
	print("#### v0.1 Valentin Antonio De Gennaro ####")

	## CREAMOS LA LISTA VACIA ##
	agenda = []

	## CREAMOS UN CONTACTO ##
	while True:
			nombre = input("Dime tu nombre: ")
			apellidos = input("Dime tus apellidos: ")
			email = input("Dime tu email: ")
			telefono = input("Dime tu telefono: ")
			
			## AÑADIMOS LOS DATOS A LA AGENDA ##
			agenda.append([nombre,apellidos,email,telefono])
			
			## MOSTRAMOS LOS DATOS DE LA AGENDA ##
			print(agenda)
				
			## GUARDAMOS LOS DATOS EN EL ARCHIVO BINARIO ##
			archivo = open("agenda.bin","wb")
			pickle.dump(agenda, archivo)
			archivo.close()
```

---

**NOTAS:**
- Esta agenda se podría usar para guardar contactos del equipo, de clase o de cualquier actividad.
- El archivo agenda.bin permite mantener los datos aunque cerremos el programa.

```
**003-EJ.py**
```python
'''
	Gestión de agenda
	v0.1 Valentín Antonio De Gennaro
'''

## IMPORTAMOS LA LIBRERIA NECESARIA ##
import pickle

print("############ Gestión de agenda ###########")
print("#### v0.1 Valentin Antonio De Gennaro ####")

## CREAMOS LA LISTA VACIA ##
agenda = []

## CREAMOS UN CONTACTO ##
while True:
		nombre = input("Dime tu nombre: ")
		apellidos = input("Dime tus apellidos: ")
		email = input("Dime tu email: ")
		telefono = input("Dime tu telefono: ")
		
		## AÑADIMOS LOS DATOS A LA AGENDA ##
		agenda.append([nombre,apellidos,email,telefono])
		
		## MOSTRAMOS LOS DATOS DE LA AGENDA ##
		print(agenda)
			
		## GUARDAMOS LOS DATOS EN EL ARCHIVO BINARIO ##
		archivo = open("agenda.bin","wb")
		pickle.dump(agenda, archivo)
		archivo.close()

```
**004-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una aplicación que mediante los datos que hay almacenados en una lista, nos devuelva el doble de su valor, pero esa lista tiene números y etiquetas.

---

Para realizar este ejercicio primero debemos definir la lista y asignarle los números y etiquetas:
```
datos = [
	1,
	2,
	"tres",
	4,
	"cinco",
	6
]
```
Luego vamos a mostrar el contenido de esa lista por pantalla:
```
print(datos)
```
Despues creamos la lista con las etiquetas:
```
numeros_etiquetas = ['cero','uno','dos','tres','cuatro','cinco','seis']
```
Y ahora definimos la función:
```
def calculaDoble():
	for dato in datos:
		try:											## INTENTO CONVERTIR A ENTERO ##
			numero = int(dato)
			print(numero*2)
		except:											## SI NO ES UN NÚMERO, INTENTO BUSCAR EN ETIQUETAS ##
			centinela = False
			for i in range(0,len(numeros_etiquetas)):
				if dato == numeros_etiquetas[i]:
					print(i*2)
					centienla = True
			if centinela == False:
				print("No se puede")
```
Y por ultimo llamamos a la función:
```
calculaDoble()
```

---

A continuación el codigo completo:
```
	'''
		LISTA CON NÚMEROS Y ETIQUETAS
		v0.1 Valentín de Gennaro
	'''

	## CREAMOS UNA LISTA Y EL ASIGAMOS DATOS ##
	datos = [
		1,
		2,
		"3",
		4,
		"cinco",
		6
	]
	## MOSTRAMOS ESOS DATOS AL USUARIO POR PANTALLA ##
	print(datos)

	## CREAMOS UNA LISTA DE ETIQUETAS ##
	numeros_etiquetas = ['cero','uno','dos','tres','cuatro','cinco','seis']

	## DEFINIMOS UNA FUNCIÓN ##
	def calculaDoble():
		for dato in datos:
			try:											## INTENTO CONVERTIR A ENTERO ##
				numero = int(dato)
				print(numero*2)
			except:											## SI NO ES UN NÚMERO, INTENTO BUSCAR EN ETIQUETAS ##
				centinela = False
				for i in range(0,len(numeros_etiquetas)):
					if dato == numeros_etiquetas[i]:
						print(i*2)
						centinela = True
				if centinela == False:
					print("No se puede")
		
	calculaDoble()
```

---

**NOTAS:**
- Si una etiqueta no está en la lista o el dato no es numérico, el programa muestra "No se puede".
- El centinela es necesario para saber si la etiqueta existe realmente en la lista y evitar falsos positivos.

```
**004-EJ.py**
```python
'''
	LISTA CON NÚMEROS Y ETIQUETAS
	v0.1 Valentín de Gennaro
'''

## CREAMOS UNA LISTA Y EL ASIGAMOS DATOS ##
datos = [
	1,
	2,
	"3",
	4,
	"cinco",
	6
]
## MOSTRAMOS ESOS DATOS AL USUARIO POR PANTALLA ##
print(datos)

## CREAMOS UNA LISTA DE ETIQUETAS ##
numeros_etiquetas = ['cero','uno','dos','tres','cuatro','cinco','seis']

## DEFINIMOS UNA FUNCIÓN ##
def calculaDoble():
	for dato in datos:
		try:											## INTENTO CONVERTIR A ENTERO ##
			numero = int(dato)
			print(numero*2)
		except:											## SI NO ES UN NÚMERO, INTENTO BUSCAR EN ETIQUETAS ##
			centinela = False
			for i in range(0,len(numeros_etiquetas)):
				if dato == numeros_etiquetas[i]:
					print(i*2)
					centienla = True
			if centinela == False:
				print("No se puede")
	
calculaDoble()

```
**005-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una app para validar direcciones postales usando expresiones regulares.

---

Para desarrollar este ejercicio primero vamos a importar la libreria necesaria:
```
	import re
```
Luego vamos a definir el patrón que vamos a usar para validar las direcciones postales:
```
	patron = r'^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+ \d+[A-Za-z]? \d{5}$'
```
Luego introducimos una dirección mal y una bien:
```
	direccion_mal = "Calle Mayor"
	direccion_bien = "Calle Mayor 10 46005"
```
Y por ultimo usamos la función `re.match()` para verificar si una dirección postal cumple con el patrón definido:
```
	print(re.match(patron, direccion_mal))
	print(re.match(patron, direccion_bien))
```
A continuación el codigo completo:
```
	'''
		Validador de Codigo Postal
		v0.1 Valentín De Gennaro
	'''
	## IMPORTAMOS LA LIBRERIA NECESARIA ##
	import re

	## DEFINIMOS EL PATRON PARA VALIDAR EL CODIGO POSTAL ##
	patron = r'^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+ \d+[A-Za-z]? \d{5}$'

	## DEFINIMOS LA DIRECCIÓN MAL Y LA BIEN ##
	direccion_mal = "Calle Mayor"
	direccion_bien = "Calle Mayor 10 46005"

	## MOSTRAMOS LA INFORMACIÓN AL USUARIO ##
	print(re.match(patron, direccion_mal))
	print(re.match(patron, direccion_bien))
```

---

**NOTAS:**
- El patrón usado permite validar calles con acentos y caracteres de las direcciones de España.
- `re.match()` solo valida si la cadena cumple todo el patrón desde el inicio, ideal para este tipo de comprobaciones.
- Si una dirección no cumple el formato exacto, devuelve None, lo cual facilita detectar errores rápidamente.

```
**005-EJ.py**
```python
'''
	Validador de Codigo Postal
	v0.1 Valentín De Gennaro
'''
## IMPORTAMOS LA LIBRERIA NECESARIA ##
import re

## DEFINIMOS EL PATRON PARA VALIDAR EL CODIGO POSTAL ##
patron = r'^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+ \d+[A-Za-z]? \d{5}$'

## DEFINIMOS LA DIRECCIÓN MAL Y LA BIEN ##
direccion_mal = "Calle Mayor"
direccion_bien = "Calle Mayor 10 46005"

## MOSTRAMOS LA INFORMACIÓN AL USUARIO ##
print(re.match(patron, direccion_mal))
print(re.match(patron, direccion_bien))

```
**006-EJ-Resol.md**
```markdown
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


```
**006-EJ.py**
```python
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
**007-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear un programa que genera un Sudoku válido utilizando una estructura bidimensional y posteriormente elimina un número de cada fila manteniendo la validez.

---

Primero definimos el tablero como una matriz de 9x9 inicializada con ceros. Esta estructura representará el Sudoku completo.
```

	tablero = [[0 for _ in range(9)] for _ in range(9)]
	
```
A continuación, creamos una función que comprueba si un número se puede colocar en una posición concreta del tablero sin romper las reglas del Sudoku.
```

	def es_valido(tablero, fila, columna, numero):
		for c in range(9):
		    if tablero[fila][c] == numero:
		        return False

		for f in range(9):
		    if tablero[f][columna] == numero:
		        return False

		inicio_fila = (fila // 3) * 3
		inicio_columna = (columna // 3) * 3

		for f in range(inicio_fila, inicio_fila + 3):
		    for c in range(inicio_columna, inicio_columna + 3):
		        if tablero[f][c] == numero:
		            return False

		return True

```
A continuación generamos el Sudoku completo:
```

	def generar_sudoku(tablero):
		for fila in range(9):
		    for columna in range(9):
		        if tablero[fila][columna] == 0:
		            for numero in range(1, 10):
		                if es_valido(tablero, fila, columna, numero):
		                    tablero[fila][columna] = numero
		                    if generar_sudoku(tablero):
		                        return True
		                    tablero[fila][columna] = 0
		            return False
		return True


```
Una vez generado el Sudoku completo, eliminamos un número por fila, asegurándonos de que la posición elegida contiene un valor distinto de cero.
```

	import random

	def eliminar_numeros(tablero):
		for fila in range(9):
		    columna = random.randint(0, 8)
		    tablero[fila][columna] = 0

```
Ejecutamos primero la generación y solo después la eliminación.
```

	generar_sudoku(tablero)
	eliminar_numeros(tablero)

```
Mostramos el tablero final por pantalla.
```

	for fila in tablero:
		print(fila)


```

---

A continuación el codigo completo:
```

	'''
		Sudoku
		v0.1 Valentin De Gennaro
		Genera un tablero de sudoku jugable.
	'''

	import random

	tablero = [[0 for _ in range(9)] for _ in range(9)]

	def es_valido(tablero, fila, columna, numero):
		for c in range(9):
		    if tablero[fila][c] == numero:
		        return False

		for f in range(9):
		    if tablero[f][columna] == numero:
		        return False

		inicio_fila = (fila // 3) * 3
		inicio_columna = (columna // 3) * 3

		for f in range(inicio_fila, inicio_fila + 3):
		    for c in range(inicio_columna, inicio_columna + 3):
		        if tablero[f][c] == numero:
		            return False

		return True

	def generar_sudoku(tablero):
		for fila in range(9):
		    for columna in range(9):
		        if tablero[fila][columna] == 0:
		            for numero in range(1, 10):
		                if es_valido(tablero, fila, columna, numero):
		                    tablero[fila][columna] = numero
		                    if generar_sudoku(tablero):
		                        return True
		                    tablero[fila][columna] = 0
		            return False
		return True

	def eliminar_numeros(tablero):
		for fila in range(9):
		    columna = random.randint(0, 8)
		    tablero[fila][columna] = 0

	generar_sudoku(tablero)
	eliminar_numeros(tablero)

	for fila in tablero:
		print(fila)


```

---

**NOTAS:**
- El Sudoku se genera completamente antes de eliminar números.
- Las celdas eliminadas se representan con un `0`.



```
**007-EJ.py**
```python
'''
	Sudoku
	v0.1 Valentin De Gennaro
	Genera un tablero de sudoku jugable.
'''

import random

tablero = [[0 for _ in range(9)] for _ in range(9)]

def es_valido(tablero, fila, columna, numero):
    for c in range(9):
        if tablero[fila][c] == numero:
            return False

    for f in range(9):
        if tablero[f][columna] == numero:
            return False

    inicio_fila = (fila // 3) * 3
    inicio_columna = (columna // 3) * 3

    for f in range(inicio_fila, inicio_fila + 3):
        for c in range(inicio_columna, inicio_columna + 3):
            if tablero[f][c] == numero:
                return False

    return True

def generar_sudoku(tablero):
    for fila in range(9):
        for columna in range(9):
            if tablero[fila][columna] == 0:
                for numero in range(1, 10):
                    if es_valido(tablero, fila, columna, numero):
                        tablero[fila][columna] = numero
                        if generar_sudoku(tablero):
                            return True
                        tablero[fila][columna] = 0
                return False
    return True

def eliminar_numeros(tablero):
    for fila in range(9):
        columna = random.randint(0, 8)
        tablero[fila][columna] = 0

generar_sudoku(tablero)
eliminar_numeros(tablero)

for fila in tablero:
    print(fila)



```
#### U7
**001-EJ-Resol.md**
```markdown
En este ejercicio vamos a crear una pequeña aplicación donde varios NPC se mueven por la pantalla. Para ello usaremos Python, Flask y un archivo HTML que recibe los datos desde una API.

---

Primero definimos la clase `Npc`, que tendrá la posición, el radio, la dirección y la velocidad. También creamos un método para convertir cada NPC en diccionario:

```
class Npc():
	def __init__(self, x, y, radio, direccion, velocidad):
		self.posx = x
		self.posy = y
		self.radio = radio
		self.direccion = direccion
		self.velocidad = velocidad

	def to_dict(self):
		return {
		"posx": self.posx,
		"posy": self.posy,
		"radio": self.radio,
		"direccion": self.direccion
		}
```
Luego hacemos que cada NPC pueda moverse. Para ello usamos `math.cos` y `math.sin` y actualizamos sus coordenadas:

```
	def mover(self):
		self.direccion += self.direccion*(random.random()-0.5)*0.2
		if self.posx > 500 or self.posx < 0 or self.posy > 500 or self.posy < 0:
			self.direccion += math.pi
		self.posx += math.cos(self.direccion)*self.velocidad
		self.posy += math.sin(self.direccion)*self.velocidad
```
Después generamos 50 NPC con valores aleatorios para que cada uno se mueva de forma distinta:
```
personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	direccionaleatoria = random.random()*math.pi*2
	velocidadaleatoria = random.random()*5
	personajes.append(Npc(xaleatoria, yaleatoria, radioaleatorio, direccionaleatoria, velocidadaleatoria))
```
Ahora creamos la aplicación Flask:
```
app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
```
En el archivo HTML usamos `fetch` para pedir los datos a la API y dibujar cada NPC usando `div`:
```
fetch("http://127.0.0.1:5000/api")
.then(function(respuesta){return respuesta.json();})
.then(function(datos){
	escenario.innerHTML = ""
	datos.forEach(function(npc){
		let personaje = document.createElement("div")
		personaje.classList.add("npc")
		personaje.style.left = npc.posx+"px"
		personaje.style.top = npc.posy+"px"
		personaje.style.width = npc.radio+"px"
		personaje.style.height = npc.radio+"px"
		escenario.appendChild(personaje)
	})
})
```
A continuación el código completo:
**Python:**
```
	import random
	import json
	from flask import Flask,render_template
	import math

	class Npc():
		def __init__(self, x, y,radio,direccion,velocidad):
			self.posx = x
			self.posy = y
			self.radio = radio
			self.direccion = direccion
			self.velocidad = velocidad
	# Método para convertir el objeto en diccionario
		
		def to_dict(self):
			return {
			"posx": self.posx,
			"posy": self.posy,
			"radio":self.radio,
			"direccion":self.direccion
			}
		def mover(self):
			self.direccion += self.direccion*(random.random()-0.5)*0.2
			if self.posx > 500 or self.posx < 0 or self.posy > 500 or self.posy < 0:
				self.direccion += math.pi
			self.posx += math.cos(self.direccion)*self.velocidad
			self.posy += math.sin(self.direccion)*self.velocidad
			
	# Preparo los personajes

	personajes = []
	numero_personajes = 50

	for i in range(0, numero_personajes):
		xaleatoria = random.randint(0, 500)
		yaleatoria = random.randint(0, 500)
		radioaleatorio = random.randint(10, 30)
		direccionaleatoria = random.random()*math.pi*2
		velocidadaleatoria = random.random()*5
		personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio,direccionaleatoria,velocidadaleatoria))


	# Lanzo una web

	app = Flask(__name__)

	@app.route("/")
	def inicio():
		return render_template("juego.html")

	@app.route("/api")
	def api():
		for personaje in personajes:
			personaje.mover()
		personajes_json = [p.to_dict() for p in personajes]
		return json.dumps(personajes_json, indent=2)
	  
	if __name__ == "__main__":
		app.run(debug=True)
```
**HTML:**
```
	<!doctype html>
	<html>
		<head>
		    <style>
		        .npc{
		            background:peru;
		            border-radius:50px;
		            position:absolute;
		        }
		    </style>
		</head>
	 	<body>	
		    <main>
		    </main>
		    <script>
		    // Cojo el contenedor
		    let escenario = document.querySelector("main")
		    let temporizador = setTimeout("bucle()",1000)
		    function bucle(){
		            // Me conecto a una api, pido datos, los convierto a json, y los lanzo
		        fetch("http://127.0.0.1:5000/api")
		        .then(function(respuesta){return respuesta.json();})
		        .then(function(datos){
		            console.log(datos)
		            // VACIO EL ESCENARIO SOLO CUANDO RECIBO DATOS
		            escenario.innerHTML = ""
		            // Para cada npc:
		            datos.forEach(function(npc){
		            // Creo un nuevo elemento en HTML
		                let personaje = document.createElement("div")
		            // Le añado una clase css
		            personaje.classList.add("npc")
		            // La posicion x en HTML sera la posicion x que viene de Python
		            personaje.style.left = npc.posx+"px"
		            // La posicion y en HTML será la posición y que viene de Python
		            personaje.style.top = npc.posy+"px"
		            // Pongo la anchura sobre el dato que llega de Python
		            personaje.style.width = npc.radio+"px"
		            // Pongo la altura sobre el dato que llega de Python
		            personaje.style.height = npc.radio+"px"
		            escenario.appendChild(personaje)
		            })
		        })
		        // PRIMERO BORRO EL TEMPORIZADOR ANTERIOR
		        clearTimeout(temporizador)
		        // Y AHORA VUELVO A LANZAR EL TEMPORIZADOR
		        temporizador = setTimeout("bucle()",100)
		    }
		    </script>
	  </body>
	</html>
```

---

**NOTAS:**

- Este ejercicio sirve para entender cómo un backend puede enviar datos en tiempo real a un frontend.
- Los NPC se mueven solos gracias al cálculo de dirección y velocidad.
- Este tipo de práctica es útil para juegos, animaciones o simulaciones visuales.


```
**001-EJ.py**
```python
import random
import json
from flask import Flask,render_template
import math

class Npc():
	def __init__(self, x, y,radio,direccion,velocidad):
		self.posx = x
		self.posy = y
		self.radio = radio
		self.direccion = direccion
		self.velocidad = velocidad
# Método para convertir el objeto en diccionario
    
	def to_dict(self):
		return {
		"posx": self.posx,
		"posy": self.posy,
		"radio":self.radio,
		"direccion":self.direccion
		}
	def mover(self):
		self.direccion += self.direccion*(random.random()-0.5)*0.2
		if self.posx > 500 or self.posx < 0 or self.posy > 500 or self.posy < 0:
			self.direccion += math.pi
		self.posx += math.cos(self.direccion)*self.velocidad
		self.posy += math.sin(self.direccion)*self.velocidad
		
# Preparo los personajes

personajes = []
numero_personajes = 50

for i in range(0, numero_personajes):
	xaleatoria = random.randint(0, 500)
	yaleatoria = random.randint(0, 500)
	radioaleatorio = random.randint(10, 30)
	direccionaleatoria = random.random()*math.pi*2
	velocidadaleatoria = random.random()*5
	personajes.append(Npc(xaleatoria, yaleatoria,radioaleatorio,direccionaleatoria,velocidadaleatoria))


# Lanzo una web

app = Flask(__name__)

@app.route("/")
def inicio():
	return render_template("juego.html")

@app.route("/api")
def api():
	for personaje in personajes:
		personaje.mover()
	personajes_json = [p.to_dict() for p in personajes]
	return json.dumps(personajes_json, indent=2)
  
if __name__ == "__main__":
	app.run(debug=True)

```
**001-juego.html**
```html
<!doctype html>
<html>
    <head>
        <style>
            .npc{
                background:peru;
                border-radius:50px;
                position:absolute;
            }
        </style>
    </head>
 	<body>	
        <main>
        </main>
        <script>
        // Cojo el contenedor
        let escenario = document.querySelector("main")
        let temporizador = setTimeout("bucle()",1000)
        function bucle(){
                // Me conecto a una api, pido datos, los convierto a json, y los lanzo
            fetch("http://127.0.0.1:5000/api")
            .then(function(respuesta){return respuesta.json();})
            .then(function(datos){
                console.log(datos)
                // VACIO EL ESCENARIO SOLO CUANDO RECIBO DATOS
                escenario.innerHTML = ""
                // Para cada npc:
                datos.forEach(function(npc){
                // Creo un nuevo elemento en HTML
                    let personaje = document.createElement("div")
                // Le añado una clase css
                personaje.classList.add("npc")
                // La posicion x en HTML sera la posicion x que viene de Python
                personaje.style.left = npc.posx+"px"
                // La posicion y en HTML será la posición y que viene de Python
                personaje.style.top = npc.posy+"px"
                // Pongo la anchura sobre el dato que llega de Python
                personaje.style.width = npc.radio+"px"
                // Pongo la altura sobre el dato que llega de Python
                personaje.style.height = npc.radio+"px"
                escenario.appendChild(personaje)
                })
            })
            // PRIMERO BORRO EL TEMPORIZADOR ANTERIOR
            clearTimeout(temporizador)
            // Y AHORA VUELVO A LANZAR EL TEMPORIZADOR
            temporizador = setTimeout("bucle()",100)
        }
        </script>
  </body>
</html>

```
### EJ - UD
#### U1
**001-SIM-EJ-FINAL-UD1.py**
```python
'''
	Generador de ticket
	v0.1 Valentin Antonio De Gennaro
	A partir de datos solicitados genera un ticket
'''

############### DECLARAMOS LAS VARIABLES ################

nombre_cliente = input("Introduce el nombre del cliente: ")
edad = int(input("Introduce tu edad: "))

if edad <= 0:
	print("Edad invalida")
else:
	base_imponible = float(input("Introduce la base imponible de la factura: "))
	if base_imponible <= 0:
		print("Error")
	else: 

################## DECLARAMOS EL IVA ####################

		IVA = 0.21  # Es el 21%
		if edad < 18:
			print("No disponible para menores de 18")
			
############### DEFINIMOS EL DESCUENTO ####################

		else:
			if base_imponible < 100:
				porcentaje_descuento = 0
				descuento = 0
			
			elif base_imponible >= 100 and base_imponible <=199.99:
				porcentaje_descuento = 5
				descuento = 0.05
			
			else:
				porcentaje_descuento = 10
				descuento = 0.1

###################### CALCULAMOS ##################### 

			importe_descuento = base_imponible * descuento
			base_tras_descuento = base_imponible - importe_descuento
			importe_iva = base_tras_descuento * IVA
			total_factura = base_tras_descuento + importe_iva

################# GENERAMOS EL TICKET ###################

			print("--------------------")
			print("Generador de tickets")
			print("Valentin Antonio De Gennaro")
			print("v0.1-(c)-2025")
			print("--------------------")
			print("Nombre: ",nombre_cliente)
			print("Edad: ",edad)
			print("--------------------")
			print("Base imponible:               |",base_imponible,"€")
			print("Porcentaje descuento:         |",porcentaje_descuento,"%")
			print("Importe descuento:            |",importe_descuento,"€")
			print("Base tras descuento:          |",base_tras_descuento,"€")
			print("IVA:                          |",importe_iva,"€")
			print("Total de la factura:          |",total_factura,"€")
			print("--------------------")
				
					
				
					
						
						
	

		
		

```
**002-EJ-FINAL-UD1-RESOL.md**
```markdown
En este ejercicio vamos a desarrollar una aplicación para generar facturas con IVA haciendo uso de operadores de comparación y variables booleanas. Son herramientas utiles a la hora de desarrollar un codigo.
Para desarrollar este codigo primero debemos definir las variables y asignarles un literal, el cual se lo vamos a pedir al usuario, como se puede ver a continuación:
```
	nombre_cliente = input("Introduce el nombre del cliente: ")
	precio_bruto = float(input("Introduce el precio bruto del producto: "))
```
Despues para poder calcular el IVA primero tenemos que declararlo:
```
	IVA = 0.21
```
Despues hay que definir el descuento que se va a aplicar con una constante:
```
	DESCUENTO = 10
```
Luego vamos a definir cuando se aplica ese descuento:
```
	aplica_descuento = precio_bruto >= 50
	con_descuento = aplica_descuento
```
Luego mediante variables booleanas aplicamo el descuento en el caso que corresponda:
```
	if con_descuento:
		total = subtotal_con_iva - DESCUENTO
		aplica_descuento == True
		
	else:
		aplica_descuento == False
```
Y por ultimo le mostramos al usuario la factura con el desglose del total:
```
	if aplica_descuento == True:
		print("-------------------------------")
		print("Nombre: ",nombre_cliente)
		print("-------------------------------")
		print("Precio Bruto:                 |", precio_bruto,"€")
		print("IVA:                          |", iva_aplicado,"€")
		print("Descuento:                    |", DESCUENTO,"€")
		print("Total:                        |", total,"€")
		print("-------------------------------")
```
A continuación el codigo completo:
```
	'''
		Generador de facturas con IVA
		v0.1 Valentin Antonio De Gennaro
		Genera una factura con datos que le pide al usuario y desglosa el total
	'''

	#### DEFINO VARIABLES Y LE PIDO LOS DATOS AL USUARIO #####
	nombre_cliente = input("Introduce el nombre del cliente: ")
	precio_bruto = float(input("Introduce el precio bruto del producto: "))
	IVA = 0.21    #21% del iva
	DESCUENTO = 10

	########## DEFINO CUANDO APLICA EL DESCUENTO #######
	aplica_descuento = precio_bruto >= 50
	con_descuento = aplica_descuento

	################# HAGO CALCULOS ####################
	iva_aplicado = precio_bruto * IVA
	subtotal_con_iva = precio_bruto + iva_aplicado

	############### APLICO EL DESCUENTO #################
	if con_descuento:
		total = subtotal_con_iva - DESCUENTO
		aplica_descuento == True
		
	else:
		aplica_descuento == False
		
	####### LE MUESTRO LA INFORMACIÓN AL USUARIO ##########
	if aplica_descuento == True:
		print("-------------------------------")
		print("Nombre: ",nombre_cliente)
		print("-------------------------------")
		print("Precio Bruto:                 |", precio_bruto,"€")
		print("IVA:                          |", iva_aplicado,"€")
		print("Descuento:                    |", DESCUENTO,"€")
		print("Total:                        |", total,"€")
		print("-------------------------------")

	else:
		print("-------------------------------")
		print("Nombre: ",nombre_cliente)
		print("-------------------------------")
		print("Precio Bruto:                 |", precio_bruto,"€")
		print("IVA:                          |", iva_aplicado,"€")
		print("Descuento:                    |", 0,"€")
		print("Total:                        |", subtotal_con_iva,"€")
		print("-------------------------------")
```
**NOTAS:**
- En python no hay constantes pero se escriben en mayusculas igual para definirlas

```
**002-EJ-FINAL-UD1.py**
```python
'''
	Generador de facturas con IVA
	v0.1 Valentin Antonio De Gennaro
	Genera una factura con datos que le pide al usuario y desglosa el total
'''

#### DEFINO VARIABLES Y LE PIDO LOS DATOS AL USUARIO #####
nombre_cliente = input("Introduce el nombre del cliente: ")
precio_bruto = float(input("Introduce el precio bruto del producto: "))
IVA = 0.21    #21% del iva
DESCUENTO = 10

########## DEFINO CUANDO APLICA EL DESCUENTO #######
aplica_descuento = precio_bruto >= 50
con_descuento = aplica_descuento

################# HAGO CALCULOS ####################
iva_aplicado = precio_bruto * IVA
subtotal_con_iva = precio_bruto + iva_aplicado

############### APLICO EL DESCUENTO #################
if con_descuento:
	total = subtotal_con_iva - DESCUENTO
	aplica_descuento = True
	
else:
	aplica_descuento = False
	
####### LE MUESTRO LA INFORMACIÓN AL USUARIO ##########
if aplica_descuento == True:
	print("-------------------------------")
	print("Nombre: ",nombre_cliente)
	print("-------------------------------")
	print("Precio Bruto:                 |", precio_bruto,"€")
	print("IVA:                          |", iva_aplicado,"€")
	print("Descuento:                    |", DESCUENTO,"€")
	print("Total:                        |", total,"€")
	print("-------------------------------")

else:
	print("-------------------------------")
	print("Nombre: ",nombre_cliente)
	print("-------------------------------")
	print("Precio Bruto:                 |", precio_bruto,"€")
	print("IVA:                          |", iva_aplicado,"€")
	print("Descuento:                    |", 0,"€")
	print("Total:                        |", subtotal_con_iva,"€")
	print("-------------------------------")

	

	
	

```
**UD1.md**
```markdown
En este ejercicio vamos a desarrollar una aplicación para generar facturas con IVA haciendo uso de operadores de comparación y variables booleanas. Son herramientas utiles a la hora de desarrollar un codigo.
Para desarrollar este codigo primero debemos definir las variables y asignarles un literal, el cual se lo vamos a pedir al usuario, como se puede ver a continuación:
```
	nombre_cliente = input("Introduce el nombre del cliente: ")
	precio_bruto = float(input("Introduce el precio bruto del producto: "))
```
Despues para poder calcular el IVA primero tenemos que declararlo:
```
	IVA = 0.21
```
Despues hay que definir el descuento que se va a aplicar con una constante:
```
	DESCUENTO = 10
```
Luego vamos a definir cuando se aplica ese descuento:
```
	aplica_descuento = precio_bruto >= 50
	con_descuento = aplica_descuento
```
Luego mediante variables booleanas aplicamo el descuento en el caso que corresponda:
```
	if con_descuento:
		total = subtotal_con_iva - DESCUENTO
		aplica_descuento == True
		
	else:
		aplica_descuento == False
```
Y por ultimo le mostramos al usuario la factura con el desglose del total:
```
	if aplica_descuento == True:
		print("-------------------------------")
		print("Nombre: ",nombre_cliente)
		print("-------------------------------")
		print("Precio Bruto:                 |", precio_bruto,"€")
		print("IVA:                          |", iva_aplicado,"€")
		print("Descuento:                    |", DESCUENTO,"€")
		print("Total:                        |", total,"€")
		print("-------------------------------")
```
A continuación el codigo completo:
```
	'''
		Generador de facturas con IVA
		v0.1 Valentin Antonio De Gennaro
		Genera una factura con datos que le pide al usuario y desglosa el total
	'''

	#### DEFINO VARIABLES Y LE PIDO LOS DATOS AL USUARIO #####
	nombre_cliente = input("Introduce el nombre del cliente: ")
	precio_bruto = float(input("Introduce el precio bruto del producto: "))
	IVA = 0.21    #21% del iva
	DESCUENTO = 10

	########## DEFINO CUANDO APLICA EL DESCUENTO #######
	aplica_descuento = precio_bruto >= 50
	con_descuento = aplica_descuento

	################# HAGO CALCULOS ####################
	iva_aplicado = precio_bruto * IVA
	subtotal_con_iva = precio_bruto + iva_aplicado

	############### APLICO EL DESCUENTO #################
	if con_descuento:
		total = subtotal_con_iva - DESCUENTO
		aplica_descuento == True
		
	else:
		aplica_descuento == False
		
	####### LE MUESTRO LA INFORMACIÓN AL USUARIO ##########
	if aplica_descuento == True:
		print("-------------------------------")
		print("Nombre: ",nombre_cliente)
		print("-------------------------------")
		print("Precio Bruto:                 |", precio_bruto,"€")
		print("IVA:                          |", iva_aplicado,"€")
		print("Descuento:                    |", DESCUENTO,"€")
		print("Total:                        |", total,"€")
		print("-------------------------------")

	else:
		print("-------------------------------")
		print("Nombre: ",nombre_cliente)
		print("-------------------------------")
		print("Precio Bruto:                 |", precio_bruto,"€")
		print("IVA:                          |", iva_aplicado,"€")
		print("Descuento:                    |", 0,"€")
		print("Total:                        |", subtotal_con_iva,"€")
		print("-------------------------------")
```
**NOTAS:**
- En python no hay constantes pero se escriben en mayusculas igual para definirlas

```
#### U2
**001-Eval.md**
```markdown
En este ejercicio vamos a desarrollar una aplicación que te calcule el número de caballos que entran por cuadra, te informa de cuantas cuadras necesitas para los caballos que le indiques. Y tambien te indica la fecha.
Para realizar este ejercicio primero debemos importar las librerias. A continuación un ejemplo:
```
	from math import ceil
	import datetime as fechas
```
Luego debemos definir las variables y pedirle al usuario que introduzca la información.:
```
	caballos = int(input("Introduce el número de caballos: "))
	capacidad_de_cuadra = int(input("Introduce el numero de caballos por cuadra: "))
```
Despues debemos calcular y redondear a la alza el resultado:
```
	cuadras_necesarias = ceil(caballos / capacidad_de_cuadra)
```
Y por ultimo le mostramos al usuario la información:
```
	print("Tienes",caballos,"caballos")
	print("Te caben",capacidad_de_cuadra,"caballos por cuadra")
	print("Necesitas",cuadras_necesarias,"cuadras")
```
A continuación el codigo completo:
```
	'''
		Planificador de cuadras
		v0.1 Valentin Antonio De Gennaro
		Calcula los caballos que entran por cuadra y la fecha
	'''

	from math import ceil
	import datetime as fechas

	########## ENTRADA DE LA INFORMACIÓN ##########
	caballos = int(input("Introduce el número de caballos: "))
	if caballos >= 0:
		capacidad_de_cuadra = int(input("Introduce el numero de caballos por cuadra: "))
		if capacidad_de_cuadra >= 0:
			anio = int(input("Introduce el año: "))
			mes = int(input("Introduce el mes: "))
			dia = int(input("Introduce el día: "))
			hoy = fechas.date(anio, mes, dia)
			diadelasemana = hoy.isoweekday()
			
	########## CALCULAMOS ##########
			cuadras_necesarias = ceil(caballos / capacidad_de_cuadra)

	########## MOSTRAMOS LA INFORMACIÓN ##########
			print("----------------------------------------------------")
			print("Tienes",caballos,"caballos")
			print("Te caben",capacidad_de_cuadra,"caballos por cuadra")
			print("Necesitas",cuadras_necesarias,"cuadras")
			print("-----------------Datos de la fecha------------------")
			print(hoy)
			print(hoy.year)
			print(hoy.month)
			print(hoy.day)
			print(semana)
			print(diadelasemana)
			print("----------------------------------------------------")
			
		else:
			print("ERROR - El valor no puede ser menor a cero")


	else:
			print("ERROR - El valor no puede ser menor a cero")
```
**NOTAS:**
- Cuando se utiliza el `int` delante del `input` hay que recordar abrir y cerrar ambos parentesis, ya que de no hacerlo el codigo va a dar error.
- Al momento de utilizar el `if` y el `else` hay que revisar que el codigo este bien espaciado.


```
**001-planificador_cuadras.py**
```python
'''
	Calculador de cuadras
	v0.1 Valentin Antonio De Gennaro
	Calcula los caballos que entran por cuadra y la fecha
'''

from math import ceil
import datetime as fechas

########## ENTRADA DE LA INFORMACIÓN ##########
caballos = int(input("Introduce el número de caballos: "))
if caballos >= 0:
	capacidad_de_cuadra = int(input("Introduce el numero de caballos por cuadra: "))
	if capacidad_de_cuadra >= 0:
		anio = int(input("Introduce el año: "))
		mes = int(input("Introduce el mes: "))
		dia = int(input("Introduce el día: "))
		hoy = fechas.date(anio, mes, dia)
		semana = hoy.weekday()
		diadelasemana = hoy.isoweekday()

########## CALCULAMOS ##########
		cuadras_necesarias = ceil(caballos / capacidad_de_cuadra)

########## MOSTRAMOS LA INFORMACIÓN ##########
		print("----------------------------------------------------")
		print("Tienes",caballos,"caballos")
		print("Te caben",capacidad_de_cuadra,"caballos por cuadra")
		print("Necesitas",cuadras_necesarias,"cuadras")
		print("-----------------Datos de la fecha------------------")
		print(hoy)
		print(hoy.year)
		print(hoy.month)
		print(hoy.day)
		print(semana)
		print(diadelasemana)
		print("----------------------------------------------------")
		
	else:
		print("ERROR - El valor no puede ser menor a cero")


else:
		print("ERROR - El valor no puede ser menor a cero")

```
#### U3
**001-Adivina.py**
```python
'''
	Adivina el número
	v0.1 Valentín Antonio De Gennaro
	La app piensa un número y tienes 6 intentos para adivinarlo
'''
## IMPORTO LA LIBRERIA ##
import random

## DEFINO LAS VARIABLES ##
intentos = 0
maximo_intentos = 6
numero_secreto = random.randint(1,50)

## MUESTRO LA INFORMACIÓN DEL JUEGO ##
print("Estoy eligiendo un número entre el 1 y el 50...")
print("...")
print("...")
print("...")
print("...")
print("Listo, ya lo elegí")
print("Debes adivinar el número que elegí")
print("Tienes 6 intentos")

## COMIENZA EL BUCLE ##
while intentos < maximo_intentos:
    numero = input("Introduce el número: ")
## VERIFICO QUE SEA ENTERO ##
    try:
        entero = int(numero)
    except ValueError:
        print("El número no es entero")
## NO GASTA INTENTO ##
        continue  

## VERIFICO QUE EL NUMERO ESTE DENTRO DEL RANGO ##
    if entero < 1 or entero > 50:
        print("Número fuera del rango establecido (1-50).")
## NO GASTA INTENTO ##
        continue 

    intentos += 1
    assert intentos >= 0, "Contador de intentos negativo"

    if entero == numero_secreto:
        print("Número Correcto, ¡has ganado!")
## TERMINA EL BUCLE SI ACIERTA ##
        break
    elif entero > numero_secreto:
        print("El número es demasiado alto")
    else:
        print("El número es demasiado bajo")

## MUESTRO UNA PISTA AL TERCER INTENTO ##
    if intentos == 3:
        if numero_secreto % 2 == 0:
            print("Pista: El número secreto es par")
        else:
            print("Pista: El número secreto es impar")

## SOLO SE EJECUTA SI PIERDE ##
else:
    print("Has superado el número máximo de intentos, el número que elegi es: ",numero_secreto)
		


		
		
		


		
		
		
		
		
		
		
		
		
		
		
		

		



```
**001-Eval.md**
```markdown
En este ejercicio vamos a hacer una aplicación que consiste en un juego de adivinar un número en 6 intentos. El cual si pones un número fuera del rango o no valido te da un error y no cuenta ese intento.
Primero debemos importar la libreria:
```
	import random
```
Luego le mostramos al usuario la información del juego:
```
	print("Estoy eligiendo un número entre el 1 y el 50...")
	print("...")
	print("...")
	print("...")
	print("...")
	print("Listo, ya lo elegí")
	print("Debes adivinar el número que elegí")
	print("Tienes 6 intentos")
```
Luego comenzamos el bucle:
```
	while intentos < maximo_intentos:
```
Despues le pedimos al usuario que nos indique un numero:
```
	numero = input("Introduce el número: ")
```
Luego hay que verificar que el número sea entero:
```
    try:
        entero = int(numero)
    except ValueError:
        print("El número no es entero")
```
Si el usuario acierta el codigo debemos romper el bucle con un `break`:
```
	if entero == numero_secreto:
		    print("Número Correcto, ¡has ganado!")
		    break
```
Al intento número 3 le damos una pista al usuario:
```
    if intentos == 3:
        if numero_secreto % 2 == 0:
            print("Pista: El número secreto es par")
        else:
            print("Pista: El número secreto es impar")
```
Y por ultimo en el caso de que pierda le informamos al usuario que perdio por quedarse sin intentos y cual era el número:
```
else:
    print("Has superado el número máximo de intentos, el número que elegi es: ",numero_secreto)
```
A continuación el codigo completo:
```
	'''
		Adivina el número
		v0.1 Valentín Antonio De Gennaro
		La app piensa un número y tienes 6 intentos para adivinarlo
	'''
	## IMPORTO LA LIBRERIA ##
	import random

	## DEFINO LAS VARIABLES ##
	intentos = 0
	maximo_intentos = 6
	numero_secreto = random.randint(1,50)

	## MUESTRO LA INFORMACIÓN DEL JUEGO ##
	print("Estoy eligiendo un número entre el 1 y el 50...")
	print("...")
	print("...")
	print("...")
	print("...")
	print("Listo, ya lo elegí")
	print("Debes adivinar el número que elegí")
	print("Tienes 6 intentos")

	## COMIENZA EL BUCLE ##
	while intentos < maximo_intentos:
		numero = input("Introduce el número: ")
	## VERIFICO QUE SEA ENTERO ##
		try:
		    entero = int(numero)
		except ValueError:
		    print("El número no es entero")
	## NO GASTA INTENTO ##
		    continue  

	## VERIFICO QUE EL NUMERO ESTE DENTRO DEL RANGO ##
		if entero < 1 or entero > 50:
		    print("Número fuera del rango establecido (1-50).")
	## NO GASTA INTENTO ##
		    continue 

		intentos += 1
		assert intentos >= 0, "Contador de intentos negativo"

		if entero == numero_secreto:
		    print("Número Correcto, ¡has ganado!")
	## TERMINA EL BUCLE SI ACIERTA ##
		    break
		elif entero > numero_secreto:
		    print("El número es demasiado alto")
		else:
		    print("El número es demasiado bajo")

	## MUESTRO UNA PISTA AL TERCER INTENTO ##
		if intentos == 3:
		    if numero_secreto % 2 == 0:
		        print("Pista: El número secreto es par")
		    else:
		        print("Pista: El número secreto es impar")

	## SOLO SE EJECUTA SI PIERDE ##
	else:
		print("Has superado el número máximo de intentos, el número que elegi es: ",numero_secreto)
```
**NOTAS:**
- El uso del continue es util ya que te permite en este caso que el codigo siga ejecutandose y no cuente ese intento.
- Al momento de anidar hay que revisar bien el espaciado.


```
#### U4
**001-Eval.md**
```markdown
En este ejercico vamos a crear un gestor de clientes haciendo uso de las clases, de set y de get, este gestor lo que hace es almacenar la información de los clientes y luego mostrarsela al usuario por pantalla.

---

Para realizar este ejercicio primero creamos la clase, como se puede ver a continuación:
```
	class Cliente():
		def __init__(self,nombre,apellidos,email):
			self.nombre = nombre
			self.apellidos = apellidos
			self.email = email
```
Luego añadimos el set:
```
	def setNombre(self,nuevonombre):
		self.nombre = nuevonombre
```
Luego añadimos el get:
```
	def getNombre(self):
		return self.nombre
```
Despues tenemos que añadir el cliente y sus datos:
```
	cliente1 = Cliente("Juan","perez paz","perez@gmail.com")
```
Y para demostrar que el set funcione metemos un dato dentro del set:
```
	cliente1.apellidos = ("perez paz")
	cliente1.setApellidos(cliente1.apellidos)
```
Y lo mostramos en pantalla para demostra que el get funciona:
```
	print(Cliente.getApellidos)
```

---

A continuación el codigo completo:
```
	'''
		Gestor de clientes
		v0.1 Valentin Antonio De Gennaro
		
	'''

	## CREAMOS LA CLASE ##

	class Cliente():
		def __init__(self,nombre,apellidos,email):
			self.nombre = nombre
			self.apellidos = apellidos
			self.email = email
		
	## AÑADIMOS LOS SET ##

		def setNombre(self,nuevonombre):
			self.nombre = nuevonombre
		def setApellidos(self,nuevoapellido):
			self.apellidos = nuevoapellido
		def setEmail(self,nuevoemail):
			self.email = nuevoemail

	## AÑADIMOS LOS GET ##
		def getNombre(self):
			return self.nombre
		def getApellidos(self):
			return self.apellidos
		def getEmail(self):
			return self.email

	## AGREGO LOS CLIENTES ##
			
	cliente1 = Cliente("Juan","perez paz","perez@gmail.com")
	cliente2 = Cliente("Roberto","sanchez","rss@gmail.com")
	cliente3 = Cliente("Rodrigo","gomez","gomezr@gmail.com")

	## AÑADO INFORMACIÓN DENTRO DEL SET ##
	cliente1.apellidos = ("perez paz")
	cliente1.setApellidos(cliente1.apellidos)

	## MUESTRO QUE EL GET Y EL SET FUNCIONAN CORRECTAMENTE ##
	print(Cliente.getApellidos)
```

---

**NOTAS:**
- Al momento de crear clases hay que prestar atencion a que la primera letra del nombre de la clase sea en mayuscula







```
**001-Eval.py**
```python
'''
	Gestor de clientes
	v0.1 Valentin Antonio De Gennaro
	
'''

## CREAMOS LA CLASE ##

class Cliente():
	def __init__(self,nombre,apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	
## AÑADIMOS LOS SET ##

	def setNombre(self,nuevonombre):
		self.nombre = nuevonombre
	def setApellidos(self,nuevoapellido):
		self.apellidos = nuevoapellido
	def setEmail(self,nuevoemail):
		self.email = nuevoemail

## AÑADIMOS LOS GET ##
	def getNombre(self):
		return self.nombre
	def getApellidos(self):
		return self.apellidos
	def getEmail(self):
		return self.email

## AGREGO LOS CLIENTES ##
		
cliente1 = Cliente("Juan","perez paz","perez@gmail.com")
cliente2 = Cliente("Roberto","sanchez","rss@gmail.com")
cliente3 = Cliente("Rodrigo","gomez","gomezr@gmail.com")

## AÑADO INFORMACIÓN DENTRO DEL SET ##
cliente1.apellidos = ("perez paz")
cliente1.setApellidos(cliente1.apellidos)

## MUESTRO QUE EL GET Y EL SET FUNCIONAN CORRECTAMENTE ##
print(Cliente.getApellidos)

```
#### U5
**001-Eval.md**
```markdown
En este ejercicio vamos a crear una aplicación de gestion de clientes la cual te va permitir introducir los datos de un cliente, la aplicación va a introducir esos datos en un archivo binario, y luego te permite mostrarlos en pantalla.

---

Para realizar este ejercicio primero debemos importar la libreria, a continaución un ejemplo:
```
	import pickle
```
Despues debemos definir la clase:
```
	class Cliente():
		def __init__(self,nombre,apellido,email,edad):
			self.nombre = nombre
			self.apellidos = apellido
			self.email = email
			self.edad = edad
```
Luego usando `try` y `except` vamos a abrir el archivo .bin, se usa el `try` y `except` ya que hay caso de que el archivo no exista:
```
	try:
		archivo = open("clientes.bin",'rb')
		clientes = pickle.load(archivo)
	except:
		print("No existe archivo de datos")
```
Y creamos el bucle:
```
	while True:
```
Y le damos al usuario opciones para que elija:
```
	print("Selecciona una opcion")
	print("1.-Insertar un nuevo cliente")
	print("2.-Obtener listado de clientes")
	print("3.-Salir")
	opcion = int(input("Indica tu opcion: "))
```
Desarrollamos las opciones:
```
	if opcion == 1: 
		print("Voy a insertar un cliente")
		nombre = input("Introduce el nombre del cliente: ") 
		apellidos = input("Introduce el apellido del cliente: ")
```
La opcion2:
```
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("##########################################")
			print("Este es el cliente con ID:",identificador)
			print("Nombre: ",cliente.nombre)
```
Y por ultimo la opcion 3:
```
	elif opcion == 3:
		print("Adios")
```

---

A continuación el codigo completo:
```
	'''
		Gestor de clientes
		v0.1 Valentin Antonio De Gennaro
		Introducir, Almacenar y Listar clientes 
	'''
	import pickle

	class Cliente():
		def __init__(self,nombre,apellido,email,edad):
			self.nombre = nombre
			self.apellidos = apellido
			self.email = email
			self.edad = edad

	print("######### Gestión de clientes v0.1 #######")
	print("####### Valentín Antonio De Gennaro  ######")
				
	clientes = [] 
	try:
		archivo = open("clientes.bin",'rb')
		clientes = pickle.load(archivo)
	except:
		print("No existe archivo de datos")
		
	while True:
		archivo = open("clientes.bin",'wb')
		pickle.dump(clientes,archivo)
		archivo.close()
		
		print("Selecciona una opcion")
		print("1.-Insertar un nuevo cliente")
		print("2.-Obtener listado de clientes")
		print("3.-Salir")
		opcion = int(input("Indica tu opcion: "))

		if opcion == 1: 
			print("Voy a insertar un cliente")
			nombre = input("Introduce el nombre del cliente: ") 
			apellidos = input("Introduce el apellido del cliente: ")
			email = input("Introduce el email de tu cliente: ")
			edad = input("Introduce la edad del cliente: ")
			clientes.append(Cliente(nombre,apellidos,email,edad))

		elif opcion == 2:
			identificador = 0
			for cliente in clientes:
				print("##########################################")
				print("Este es el cliente con ID:",identificador)
				print("Nombre: ",cliente.nombre)
				print("Apellidos: ",cliente.apellidos)
				print("Edad: ",cliente.edad)
				print("Email: ",cliente.email)
				print("##########################################")
				identificador += 1

		elif opcion == 3:
			print("Adios")
			break
```

---

**NOTAS:**
- Al momento de utilizar bucles hay que recordar cerrarlos.
- El uso de la libreria pickle es util, ya que en este caso te permite almacenar los datos del cliente, y aunque el programa se cierre y se vuelva a abrir si el archivo .bin existe los datos tambien.

```
**001-Eval.py**
```python
'''
	Gestor de clientes
	v0.1 Valentin Antonio De Gennaro
	Introducir, Almacenar y Listar clientes 
'''
import pickle

class Cliente():
	def __init__(self,nombre,apellido,email,edad):
		self.nombre = nombre
		self.apellidos = apellido
		self.email = email
		self.edad = edad

print("######### Gestión de clientes v0.1 #######")
print("####### Valentín Antonio De Gennaro  ######")
			
clientes = [] 
try:
	archivo = open("clientes.bin",'rb')
	clientes = pickle.load(archivo)
except:
	print("No existe archivo de datos")
    
while True:
	archivo = open("clientes.bin",'wb')
	pickle.dump(clientes,archivo)
	archivo.close()
	
	print("Selecciona una opcion")
	print("1.-Insertar un nuevo cliente")
	print("2.-Obtener listado de clientes")
	print("3.-Salir")
	opcion = int(input("Indica tu opcion: "))

	if opcion == 1: 
		print("Voy a insertar un cliente")
		nombre = input("Introduce el nombre del cliente: ") 
		apellidos = input("Introduce el apellido del cliente: ")
		email = input("Introduce el email de tu cliente: ")
		edad = input("Introduce la edad del cliente: ")
		clientes.append(Cliente(nombre,apellidos,email,edad))

	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("##########################################")
			print("Este es el cliente con ID:",identificador)
			print("Nombre: ",cliente.nombre)
			print("Apellidos: ",cliente.apellidos)
			print("Edad: ",cliente.edad)
			print("Email: ",cliente.email)
			print("##########################################")
			identificador += 1

	elif opcion == 3:
		print("Adios")
		break

```
### Trimestral
**001-EVAL.md**
```markdown
En este ejercicio vamos a crear un CRUD que administre la base de datos creada previamente, esta aplicación nos va a permitir insertar, listar, actualizar y eliminar datos de esa base de datos.

---

Para crear esta aplicación primero debemos importar la libreria y conectar a la base de datos:
```
	import mysql.connector

	conexion = mysql.connector.connect(
		host="localhost",
		user="trimestral",
		password="Portafolio123@",
		database="portafolioexamen"
	)
	cursor = conexion.cursor()
```
Luego debemos definir la función de insertar en la base de datos:
```
	def insertar_piezasportafolio(titulo_piezasportafolio, descripcion_piezasportafolio, fecha_piezasportafolio, id_categoria):
		cursor.execute('''
		  INSERT INTO piezasportafolio
		  VALUES(
			NULL,
			"'''+titulo_piezasportafolio+'''",
			"'''+descripcion_piezasportafolio+'''",
			"'''+fecha_piezasportafolio+'''",
			"'''+id_categoria+'''"
		  );
		''')
		conexion.commit()
```
Luego damos un mensaje de bienvenida:
```
	print("########### Gestión de portafolio ##############")
	print("##### v0.1 Valentin Antonio De Gennaro #########")
```
Y comenzamos el bucle dandole al usuario las opciones:
```
	while True:
		print("Escoge una opción:")
		print("1.-Insertar")
		print("2.-Listar")
		print("3.-Actualizar")
		print("4.-Eliminar")
		print("5.-Salir")
		opcion = int(input("Escoge una opcion: "))
```
Y seguido de eso comenzamos a desarrollar las opciones:
##Opción 1:(Insertar)
```
	if opcion == 1:
		titulo_piezasportafolio = input("Ingresa el titulo de la pieza: ")
		descripcion_piezasportafolio = input("Introduce la descripcion de la pieza: ")
		fecha_piezasportafolio = input("Introduce la fecha de creación de la pieza: ")
		id_categoria = input("Introduce el id de la categoria: ")
		insertar_piezasportafolio(titulo_piezasportafolio, descripcion_piezasportafolio, fecha_piezasportafolio, id_categoria)
```
##Opción 2:(Listar)
```
	elif opcion == 2:
		consulta = "SELECT * FROM piezasportafolio;"
		cursor.execute(consulta)
		resultados = cursor.fetchall()
		for fila in resultados:
			print("")
			print("Identificador: ",fila[0])
			print("Titulo: ",fila[1])
			print("descripcion: ",fila[2])
			print("fecha: ",fila[3])
			print("Id categoria: ",fila[4])
			print("-" * 30)  # línea separadora entre registros
```
##Opción 3:(Actualizar)
```
	elif opcion == 3:
		identificador = input("Introduce el Identificador a actualizar: ")
		titulo = input("Introduce el titulo de la nueva pieza: ")
		descripcion = input("Introduce la descripcion de la nueva pieza: ")
		fecha = input("Introduce la fecha de la nueva pieza: ")
		id_categoria = input("Introduce el nuevo id de categoria: ")
		cursor.execute('''
			UPDATE piezasportafolio
			SET
			titulo_piezasportafolio = "'''+titulo+'''",
			descripcion_piezasportafolio = "'''+descripcion+'''",
			fecha_piezasportafolio = "'''+fecha+'''",
			id_categoria = '''+id_categoria+''',
			WHERE identificador = '''+identificador+''';
		''')
```
##Opción 4:(Eliminar)
```
	elif opcion == 4:
		identificador = input("Introduce el Identificador a eliminar: ")
		cursor.execute("DELETE FROM piezasportafolio WHERE Identificador = "+identificador+";")
		conexion.commit()
```
##Opción 5:(Salir)
```
	elif opcion == 5:
		print("Saliendo...")
		break
```
Y por ultimo cerramos el cursor y la conexion:
```
	cursor.close()
	conexion.close()
```

---

A continuación el codigo completo:
```
	'''
		Gestion de portafolio
		v0.1 Valentín Antonio De Gennaro
		Gestiona una base de datos de un portafolio
	'''
	import mysql.connector

	conexion = mysql.connector.connect(
		host="localhost",
		user="trimestral",
		password="Portafolio123@",
		database="portafolioexamen"
	)
	cursor = conexion.cursor()

	def insertar_piezasportafolio(titulo_piezasportafolio, descripcion_piezasportafolio, fecha_piezasportafolio, id_categoria):
		cursor.execute('''
		  INSERT INTO piezasportafolio
		  VALUES(
			NULL,
			"'''+titulo_piezasportafolio+'''",
			"'''+descripcion_piezasportafolio+'''",
			"'''+fecha_piezasportafolio+'''",
			"'''+id_categoria+'''"
		  );
		''')
		conexion.commit()
		


	print("########### Gestión de portafolio ##############")
	print("##### v0.1 Valentin Antonio De Gennaro #########")

	while True:
		print("Escoge una opción:")
		print("1.-Insertar")
		print("2.-Listar")
		print("3.-Actualizar")
		print("4.-Eliminar")
		print("5.-Salir")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			titulo_piezasportafolio = input("Ingresa el titulo de la pieza: ")
			descripcion_piezasportafolio = input("Introduce la descripcion de la pieza: ")
			fecha_piezasportafolio = input("Introduce la fecha de creación de la pieza: ")
			id_categoria = input("Introduce el id de la categoria: ")
			insertar_piezasportafolio(titulo_piezasportafolio, descripcion_piezasportafolio, fecha_piezasportafolio, id_categoria)

		elif opcion == 2:
			consulta = "SELECT * FROM piezasportafolio;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("fecha: ",fila[3])
				print("Id categoria: ",fila[4])
				print("-" * 30)  # línea separadora entre registros
					
		elif opcion == 3:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva pieza: ")
			descripcion = input("Introduce la descripcion de la nueva pieza: ")
			fecha = input("Introduce la fecha de la nueva pieza: ")
			id_categoria = input("Introduce el nuevo id de categoria: ")
			cursor.execute('''
				UPDATE piezasportafolio
				SET
				titulo_piezasportafolio = "'''+titulo+'''",
				descripcion_piezasportafolio = "'''+descripcion+'''",
				fecha_piezasportafolio = "'''+fecha+'''",
				id_categoria = '''+id_categoria+''',
				WHERE identificador = '''+identificador+''';
			''')
			conexion.commit()
		
		elif opcion == 4:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM piezasportafolio WHERE Identificador = "+identificador+";")
			conexion.commit()
		
		elif opcion == 5:
			print("Saliendo...")
			break
		
	cursor.close()
	conexion.close()
```

---

**NOTAS:**
- Es importante revisar los espaciados, ya que de lo contrario no va a funcionar la aplicación.
- Es de buenas practicas dar un mensaje de bienvenida

---

**Conclusion:**
Este programa es necesario para la gestion de la base de datos de manera mas facil ya que no hay que escribir comandos en una terminal es solo escribir el texto y la aplicación se encarga de lo demas.

```
**001-EVAL.py**
```python
'''
	Gestion de portafolio
	v0.1 Valentín Antonio De Gennaro
	Gestiona una base de datos de un portafolio
'''
import mysql.connector

conexion = mysql.connector.connect(
    host="localhost",
    user="trimestral",
    password="Portafolio123@",
    database="portafolioexamen"
)
cursor = conexion.cursor()

def insertar_piezasportafolio(titulo_piezasportafolio, descripcion_piezasportafolio, fecha_piezasportafolio, id_categoria):
	cursor.execute('''
	  INSERT INTO piezasportafolio
	  VALUES(
		NULL,
		"'''+titulo_piezasportafolio+'''",
		"'''+descripcion_piezasportafolio+'''",
		"'''+fecha_piezasportafolio+'''",
		"'''+id_categoria+'''"
	  );
	''')
	conexion.commit()
	


print("########### Gestión de portafolio ##############")
print("##### v0.1 Valentin Antonio De Gennaro #########")

while True:
	print("Escoge una opción:")
	print("1.-Insertar")
	print("2.-Listar")
	print("3.-Actualizar")
	print("4.-Eliminar")
	print("5.-Salir")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		titulo_piezasportafolio = input("Ingresa el titulo de la pieza: ")
		descripcion_piezasportafolio = input("Introduce la descripcion de la pieza: ")
		fecha_piezasportafolio = input("Introduce la fecha de creación de la pieza: ")
		id_categoria = input("Introduce el id de la categoria: ")
		insertar_piezasportafolio(titulo_piezasportafolio, descripcion_piezasportafolio, fecha_piezasportafolio, id_categoria)

	elif opcion == 2:
		consulta = "SELECT * FROM piezasportafolio;"
		cursor.execute(consulta)
		resultados = cursor.fetchall()
		for fila in resultados:
			print("")
			print("Identificador: ",fila[0])
			print("Titulo: ",fila[1])
			print("descripcion: ",fila[2])
			print("fecha: ",fila[3])
			print("Id categoria: ",fila[4])
			print("-" * 30)  # línea separadora entre registros
				
	elif opcion == 3:
		identificador = input("Introduce el Identificador a actualizar: ")
		titulo = input("Introduce el titulo de la nueva pieza: ")
		descripcion = input("Introduce la descripcion de la nueva pieza: ")
		fecha = input("Introduce la fecha de la nueva pieza: ")
		id_categoria = input("Introduce el nuevo id de categoria: ")
		cursor.execute('''
			UPDATE piezasportafolio
			SET
			titulo_piezasportafolio = "'''+titulo+'''",
			descripcion_piezasportafolio = "'''+descripcion+'''",
			fecha_piezasportafolio = "'''+fecha+'''",
			id_categoria = '''+id_categoria+''',
			WHERE identificador = '''+identificador+''';
		''')
		conexion.commit()
    
	elif opcion == 4:
		identificador = input("Introduce el Identificador a eliminar: ")
		cursor.execute("DELETE FROM piezasportafolio WHERE Identificador = "+identificador+";")
		conexion.commit()
	
	elif opcion == 5:
		print("Saliendo...")
		break
	
cursor.close()
conexion.close()
	
	
	

```
#### SIM-PROFE
**001-Examen de final de trimestre.md**
```markdown
#CRUD en python (No SQL)
#Clases

1.- Presentara una pantalla de bienvenida.
2.- Ofrecera al usuario 4 opciones (Crear, Leer, Actualizar, Eliminar).
3.- Habrá que definir una clase en base a una entidad que os proporciones.
4.- Las entidades se gusrdaran como objetos en memoria.
5.- Las entidades persistiran en disco usando pickle.

# Practicar hasta el dia del examen 

```
**002-Creamos una clase.py**
```python
#CRUD en python (No SQL)
#Clases

1.- Presentara una pantalla de bienvenida.
2.- Ofrecera al usuario 4 opciones (Crear, Leer, Actualizar, Eliminar).
3.- Habrá que definir una clase en base a una entidad que os proporciones.
4.- Las entidades se gusrdaran como objetos en memoria.
5.- Las entidades persistiran en disco usando pickle.

# Practicar hasta el dia del examen 

```
**003-Creamos un constructor.py**
```python
class Cliente():
	def __init__(self):
		

```
**004-El constructor tiene oarametros.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	

```
**005-Pantalla de bienvenida.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")


		

```
**006-Bucle infinito.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

while True:
		

```
**007-Creamos lista de clientes.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes=[]

while True:
		

```
**008-Creamos menu.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
		

```
**009-Atrapamos las opciones con if.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		
	elif opcion == 2:
	
	elif opcion == 3:
	
	elif opcion == 4:
	
	
		

```
**010-Desarrollamos insertar cliente.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")

		
	elif opcion == 2:
	
	elif opcion == 3:
	
	elif opcion == 4:
	
	
		

```
**011-Apendizamos.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
	
	elif opcion == 3:
	
	elif opcion == 4:
	
	
		

```
**012-pass de momento.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
	
	elif opcion == 3:
		pass
	elif opcion == 4:
		pass
	
		

```
**013-Desarrollo leer.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		for cliente in clientes:
			print(cliente)
	elif opcion == 3:
		pass
	elif opcion == 4:
		pass
	
		

```
**014-Imprimimos mejor el cliente.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		for cliente in clientes:
			print(cliente.nombre, cliente.apellidos, cliente.email)
	elif opcion == 3:
		pass
	elif opcion == 4:
		pass
	
		

```
**015-Actualizar es como insertar.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		for cliente in clientes:
			print(cliente.nombre, cliente.apellidos, cliente.email)
			
	elif opcion == 3:
		identificador = input("Introduce el id para modificar: ")
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
	elif opcion == 4:
		pass
	
		

```
**016-Chivamos el id.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
	elif opcion == 4:
		pass
	
		

```
**017-Eliminar elemento.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		cliente.splice(identificador,1)
		

```
**018-Confirmacion.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ")
		if confirmacion == "S":
		cliente.splice(identificador,1)
		elif confirmacion == "N"
			print("Cancelado")
		else:
			print("Opción no valida")

```
**019-Mayus MIn.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ")
		if confirmacion == "S" or confirmacion == "s":
		cliente.splice(identificador,1)
		elif confirmacion == "N" or confirmacion == "n":
			print("Cancelado")
		else:
			print("Opción no valida")

```
**020-Lower.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
		
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ").lower()
		if confirmacion == "s":
		cliente.splice(identificador,1)
		elif confirmacion == "n":
			print("Cancelado")
		else:
			print("Opción no valida")

```
**021-cambiamos splice por pop.py**
```python
class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
		
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ").lower()
		if confirmacion == "s":
			clientes.pop(identificador)
		elif confirmacion == "n":
			print("Cancelado")
		else:
			print("Opción no valida")


```
**022-Guardamos con pickle.py**
```python
import pickle

class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
		
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ").lower()
		if confirmacion == "s":
			clientes.pop(identificador)
		elif confirmacion == "n":
			print("Cancelado")
		else:
			print("Opción no valida")


```
**023-Crago registro si existen.py**
```python
import pickle

class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
		
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

try: ## OJO QUE IGUAL NO EXISTE EL ARCHIVO ##
	archivo = open("clientes.dat","rb")
	clientes = pickle.load(archivo)
except:
	print("No existe archivo de datos")

while True:
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
		
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ").lower()
		if confirmacion == "s":
			clientes.pop(identificador)
		elif confirmacion == "n":
			print("Cancelado")
		else:
			print("Opción no valida")


```
**024-Guardamos.py**
```python
import pickle

class Cliente():
	def __init__(self,nombre, apellidos,email):
		self.nombre = nombre
		self.apellidos = apellidos
		self.email = email
	
print("#######Gestion de clientes v0.1######")
print("#####Valentin Antonio De Gennaro#####")

clientes = []

try: ## OJO QUE IGUAL NO EXISTE EL ARCHIVO ##
	archivo = open("clientes.bin","rb")
	clientes = pickle.load(archivo)
	archivo.close()
	
except:
	print("No existe archivo de datos")

while True:
	archivo = open('clientes.bin','wb')
	pickle.dump(clientes,archivo)
	archivo.close()
	
	print("Escoge una opción:")
	print("1.-Insertar un cliente")
	print("2.-Listar clientes")
	print("3.-Actualizar un cliente")
	print("4.-Eliminar un cliente")
	print("5.-Salir")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes.append(Cliente(nombre, apellidos, email))
		
	elif opcion == 2:
		identificador = 0
		for cliente in clientes:
			print("#######################")
			print("Este es el cliente con ID:", identificador)
			print(cliente.nombre)
			print(cliente.email)
			print(cliente.apellidos)
			print("#######################")
			identificador += 1
			
	elif opcion == 3:
		identificador = int(input("Introduce el id para modificar: "))
		nombre = input("Introduce el nombre del cliente: ")
		apellidos = input("Introduce los apellidos del cliente: ")
		email = input("Introduce el email del cliente: ")
		clientes[identificador].nombre = nombre
		clientes[identificador].apellidos = apellidos
		clientes[identificador].email = email
		
	elif opcion == 4:
		identificador = int(input("Introduce el id para eliminar: "))
		confirmacion = input("¿Estas seguro? (S/N): ").lower()
		if confirmacion == "s":
			clientes.pop(identificador)
		elif confirmacion == "n":
			print("Cancelado")
		else:
			print("Opción no valida")
	
	elif opcion == 5:
		break


```
#### Simuacros
**001-Portafolio.py**
```python
'''
	Gestion de portafolio
'''
import mysql.connector

conexion = mysql.connector.connect(
    host="localhost",
    user="admin",
    password="Portafolio2526@",
    database="portafolio"
)
cursor = conexion.cursor()

def insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria):
	cursor.execute('''
	  INSERT INTO pieza
	  VALUES(
		NULL,
		"'''+titulo_pieza+'''",
		"'''+descripcion_pieza+'''",
		"'''+imagen.get+'''",
		"'''+url+'''"
		"'''+id_categoria+'''"
	  );
	''')
	conexion.commit()
	
def insertar_categoria(titulo_categoria,descripcion_categoria):
	cursor.execute('''
	  INSERT INTO categoria
	  VALUES(
		NULL,
		"'''+titulo_categoria+'''",
		"'''+descripcion_categoria+'''"
	  );
	''')
	
def actualizar_categoria(titulo_categoria,descripcion_categoria):
	cursor.execute('''
	  UPDATE categoria SET
		NULL,
		"'''+titulo_categoria+'''",
		"'''+descripcion_categoria+'''"
	  );
	''')
	conexion.commit()

print("########### Gestión de portafolio ##############")
print("##### v0.1 Valentin Antonio De Gennaro #########")

while True:
	print("Escoge una opción:")
	print("1.-Insertar")
	print("2.-Listar")
	print("3.-Actualizar")
	print("4.-Eliminar")
	print("5.-Salir")
	opcion = int(input("Escoge una opcion: "))
	
	if opcion == 1:
		print("1.-Insertar una categoria")
		print("2.-Insertar una pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			titulo_categoria = input("Ingresa el titulo de la categoria: ")
			descripcion_categoria = input("Introduce la descripcion de la categoria: ")
			insertar_categoria(titulo_categoria, descripcion_categoria)
			
		elif opcion == 2:
			titulo_pieza = input("Ingresa el titulo de la pieza: ")
			descripcion_pieza = input("Introduce la descripcion de la pieza: ")
			imagen = input("Introduce la imagen de la pieza: ")
			url = input("Introduce la url de la pieza: ")
			id_categoria = input("Introduce el id de la categoria: ")
			insertar_pieza(titulo_pieza, descripcion_pieza, imagen, url, id_categoria)
	
	elif opcion == 2:
		print("1.-Listar categoria")
		print("2.-Listar pieza")
		print("3.-Ambas")
		opcion = int(input("Escoge una opcion: "))
		
		
		if opcion == 1:
			consulta = "SELECT * FROM categoria;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("-" * 30)  # línea separadora entre registros
		
		
		elif opcion == 2:
			consulta = "SELECT * FROM pieza;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Identificador: ",fila[0])
				print("Titulo: ",fila[1])
				print("descripcion: ",fila[2])
				print("imagen: ",fila[3])
				print("url: ",fila[4])
				print("Id categoria: ",fila[5])
				print("-" * 30)  # línea separadora entre registros
				
		elif opcion == 3:		
			consulta = "SELECT * FROM vista_portafolio;"
			cursor.execute(consulta)
			resultados = cursor.fetchall()
			for fila in resultados:
				print("")
				print("Titulo de la pieza: ",fila[0])
				print("Descripción de la pieza: ",fila[1])
				print("Imagen de la pieza: ",fila[2])
				print("Url de la pieza: ",fila[2])
				print("Titulo de la categoria: ",fila[2])
				print("Descripción de la categoria: ",fila[2])		
				print("-" * 30)  # línea separadora entre registros
				
				
	elif opcion == 3:
		print("1.-Modificar una categoria")
		print("2.-Modificar una pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva categoria: ")
			descripcion = input("Introduce la descripcion de la nueva categoria: ")
			cursor.execute('''
			  UPDATE categoria 
			  SET
			  titulo = "'''+titulo+'''",
			  descripcion = "'''+descripcion+'''",
			  WHERE Identificador = '''+identificador+'''
		''')
	conexion.commit()
		
		elif opcion == 2:
			identificador = input("Introduce el Identificador a actualizar: ")
			titulo = input("Introduce el titulo de la nueva pieza: ")
			descripcion = input("Introduce la descripcion de la nueva pieza: ")
			fecha = input("Introduce la fecha de la nueva pieza: ")
			imagen = input("Introduce el nombre de la imagen de la nueva pieza: ")
			cursor.execute('''
			  UPDATE piezas 
			  SET
			  titulo = "'''+titulo+'''",
			  descripcion = "'''+descripcion+'''",
			  fecha = "'''+fecha+'''",
			  imagen = "'''+imagen+'''"
			  WHERE Identificador = '''+identificador+'''
		''')
    conexion.commit()
    
	elif opcion == 4:
		print("1.-Eliminar un elemento de categoria")
		print("2.-Eliminar un elemento de pieza")
		opcion = int(input("Escoge una opcion: "))
		
		if opcion == 1:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM categoria WHERE Identificador = "+identificador+";")
			conexion.commit()
		
		
		elif opcion == 2:
			identificador = input("Introduce el Identificador a eliminar: ")
			cursor.execute("DELETE FROM piezas WHERE Identificador = "+identificador+";")
			conexion.commit()
	
	elif opcion == 5:
		print("Saliendo...")
		break
	
cursor.close()
conexion.close()
	
	
	

```