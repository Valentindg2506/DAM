En este documento del proyecto vamos a explicr la parte de programación de este proyecto. Explicando como usamos `PHP` para conectarnos con la base de datos, como funcionan los controladores, como usamos las estructuras de control y cómo se piden, insertan y modifican datos en la base de datos.

---

##Estructura del proyecto:
```
Proyecto-Entornos
├── README.md
├── admin
│   ├── BBDD
│   │   ├── AdminViews.png
│   │   ├── AdminViews.svg
│   │   ├── Base de datos.sql
│   │   └── diagrama.svg
│   ├── controladores
│   ├── css
│   │   └── estilo.css
│   ├── img
│   │   ├── adminviews.png
│   │   ├── adminviews_favicon.png
│   │   ├── flechaderecha.png
│   │   ├── iconologout.png
│   │   ├── iconopelicula.png
│   │   ├── iconoseries.png
│   │   └── iconovuelta.png
│   ├── inc
│   │   ├── cabecera.php
│   │   ├── conexion.php
│   │   ├── db.php
│   │   ├── piedepagina.php
│   │   └── sidebar.php
│   ├── index.php
│   ├── peliculas.php
│   ├── series.php
│   └── usuarios.php
├── front
│   ├── controladores
│   │   ├── guardar_contenido.php
│   │   ├── login_procesa.php
│   │   └── registro_procesa.php
│   ├── css
│   │   └── estilo.css
│   ├── exito.php
│   ├── formulario_pelicula.php
│   ├── formulario_serie.php
│   ├── img
│   │   ├── adminviews.png
│   │   ├── adminviews_favicon.png
│   │   ├── flechaderecha.png
│   │   ├── iconologout.png
│   │   ├── iconopelicula.png
│   │   ├── iconoseries.png
│   │   └── iconovuelta.png
│   ├── inc
│   │   ├── cabecera.php
│   │   ├── db.php
│   │   └── piedepagina.php
│   ├── index.php
│   ├── intruso.php
│   ├── peliculas.php
│   ├── series.php
│   └── style
│       └── style.css
├── informe.md
└── screenshots
    ├── adminindex.png
    ├── contenidocontenido.png
    ├── contenidousuarios.png
    ├── inicio.png
    ├── login.png
    ├── peliculas.png
    ├── registro.png
    ├── series.png
    ├── tablacontenido.png
    └── tablausuarios.png
```

---

Este proyecto consta de dos partes el `admin` y el `front`. Ambos usan `PHP` y a continuación vamos a explicar y dar ejemplos de para que se usa, con codigo e imagenes:

**Admin:**
En la parte del admin hacemos uso del `PHP` para la conexion a la base de datos y para pedirle datos. Para la conexion con la base de datos tenemos un archivo llamado `db.php`:
```
	<?php

	$host = "localhost";        // Servidor
	$user = "AdminViews";       // Usuario de la BD
	$pass = "********";         // Contraseña del usuario
	$db   = "AdminViews";       // Nombre de la base de datos

	// Paso 1: Intentar conectar
	$conexion = new mysqli($host, $user, $pass, $db);

	// Paso 2: Verificar si hubo error
	if ($conexion->connect_error) {
		die("Error de conexión: " . $conexion->connect_error);
	}

	//Forzar codificación UTF-8 para evitar problemas con tildes y ñ
	$conexion->set_charset("utf8");
	?>
```
Esto nos ayuda a evitar poner la plantilla de conexión en todos los archivos que sea necesario una conexión con la base de datos, usando `PHP` tomamos ese archivo y lo usamos:
```
	require_once "inc/db.php";
```
En el `index.php` del admin usamos php para pintar información que hay en la base de datos en la pantalla que ve el administrador de la app.
- Mostramos los usuario totales que hay registrados en la aplicación:
```
	<?php
		$sqlUsers = "SELECT COUNT(*) as total FROM usuario";
		$resUsers = $conexion->query($sqlUsers);
		$totalUsuarios = $resUsers->fetch_assoc()['total'];
	?>
- Mostramos el total de series que hay registradas en la base de datos:
```
	<?php
		$sqlSeries = "SELECT COUNT(*) as total FROM contenido WHERE tipo = 'serie'";
		$resSeries = $conexion->query($sqlSeries);
		$totalSeries = $resSeries->fetch_assoc()['total'];
	?>

```
- Mostramos el total de peliculas que hay registradas en la base de datos:
```
	<?php
		$sqlPelis = "SELECT COUNT(*) as total FROM contenido WHERE tipo = 'pelicula'";
		$resPelis = $conexion->query($sqlPelis);
		$totalPelis = $resPelis->fetch_assoc()['total'];
	?>
```
Tambien usamos php todas las vistas del proyecto menos en el login como medida de seguridad para comprobar que el usuario que quiere entrar a esa parte esta correctamente logueado y en el caso de no estarlo se lo redirige a una vista que muestra un mensaje de alerta:
```
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("Location: ../front/intruso.php");
		exit;
	}
```

**Front**
En el front usamos la función `include` de `PHP` para que el codigo que se repite como la cabecera y el pie de pagina se puedan poner en un archivo separado y usar el el include para llamarlo y que se muestre en pantalla:
```
	<?php include "inc/cabecera.php" ?>
	<?php include "inc/piedepagina.php" ?>
```
También lo usamos en `peliculas.php` la pantalla de peliculas, haciendo una estructura de control que desarrolla una accion dependiendo de lo que se indique en el formulario o el boton que presione el usuario:
```
	//0. LEER FORMULARIO
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$accion = $_POST['accion'] ?? ''; // Leer acción del formulario
		$id = (int)($_POST['id'] ?? 0);
		$usuario_id = $_SESSION['id_usuario'] ?? 1; 

		// 1. MOVER A VISTAS
		if ($accion === 'mover') {
			$fecha = $_POST['fecha'];
			$rating = $_POST['rating']; 
			$stmt = $conexion->prepare("UPDATE contenido SET estado='Vistas', fecha_visualizacion=?, puntuacion=? WHERE id=?");
			$stmt->bind_param("ssi", $fecha, $rating, $id);
			$stmt->execute(); $stmt->close();

		// 2. BORRAR
		} elseif ($accion === 'borrar') {
			$stmt = $conexion->prepare("DELETE FROM contenido WHERE id=?");
			$stmt->bind_param("i", $id);
			$stmt->execute(); $stmt->close();

		// 3. AGREGAR PELÍCULA
		} elseif ($accion === 'agregar') {
			$titulo = $_POST['nombre'];
			$comentario = $_POST['comentario'] ?? '';
			$prioridad = $_POST['prioridad'] ?? 'Media';
			$estado = $_POST['estado'] ?? 'Por_ver';
			$img_url = $_POST['imagen_url'] ?? ''; 
			$tipo = 'pelicula'; 

			$sql = "INSERT INTO contenido (usuario_id, titulo, comentario, estado, tipo, nivel_prioridad, imagen_url) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $conexion->prepare($sql);
			$stmt->bind_param("issssss", $usuario_id, $titulo, $comentario, $estado, $tipo, $prioridad, $img_url);
			$stmt->execute(); $stmt->close();
		}
```
1.- Esto le permite que el usuario pueda mover la peliculas entre `por_ver` o `vistas`, con unos botones que se muestran en pantalla.
2.- Le permite al usuario poder borrar una pelicula que ya este en la tabla, con un boton con un icono que podra visualizar en la pantalla.
3.- Le permite al usuario poder agregar peliculas, identificando la información que introduce el usuario y luego de identificar esa información la mete en la base de datos.

Tambien lo utilizamos para que en las tablas se muestre la información correspondiente con un bucle `for`:
```
	<?php foreach ($peliculas as $p): ?>
		<?php if ($p['estado'] == 'Por_ver'): ?>
		<?php endif; ?>
	<?php endforeach; ?>
```
Y debajo debemos recordar cerrar el bucle para que este este controlado.

---

## Controladores

**Procesa login**
Luego en el front usamos controladores para hacer procesos, como el `login_procesa.php` que se encarga como el nombre lo indica de procesar el login, de la siguiente manera:
- Primero se tiene que conectar a la base de datos:
```
	session_start();
	require_once '../inc/db.php';
```
- Comprueba que se haya enviado el formulario:
```
	if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
```
- Toma los datos del formulario:
```
	$usuario = $_POST['usuario'];
	$pass_ingresada = $_POST['contrasena'];
```
- Hace la comproación a la base de datos para verificar que el usuario coincida:
```
    $sql = "SELECT id, usuario, contrasena FROM usuario WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $usuario); // "s" = string
    $stmt->execute();
```
- Toma la contraseña de la base de datos que esta hasheada como metodo de seguridad:
```
	$hash_guardado = $fila['contrasena'];
```
- Verifica que las contraseñas coincidan: 
```
	if (password_verify($pass_ingresada, $hash_guardado)) {
```
Y en el caso de que coincidan se genera un login exitoso y se guardan los datos del usuario en sesion para recordarlos:
```
$_SESSION['usuario'] = $fila['usuario'];
$_SESSION['id_usuario'] = $fila['id'];
```
Luego usando un `if` indicamos que si el usuario con el que se esta iniciando sesion es el de admin lo lleve al panel de administrador:
```
    if ($fila['usuario'] === 'Admin1') {  // SI EL USUARIO ES ADMIN
        header("Location: ../../admin/index.php"); // LO LLEVA A AL PANEL DE ADMIN
    }
```
- Y en el caso contrario lo lleva a `exito.php` que es la pantalla de inicio de la app:
```
else {
	header("Location: ../exito.php"); // Ruta normal
}
```
- Y usando `else` identificamos errores:
	- Error de contraseña:
	```
		else {
			// Contraseña mal
			header("Location: ../index.php?error=1");
			exit;
		}
	```
	- Usuario no existe:
	```
		else {
			// Usuario no existe
			header("Location: ../index.php?error=1");
			exit;
		}
	```
	- Intento de acceso sin completar los datos del login:
	```
		else {
			// Intento de acceso directo sin formulario
			header("Location: ../index.php");
		}
	```
**Procesa registro**
En el `registro_procesa.php` comenzamos similar al archivo anterior con una conexion a la base de datos, y luego toma los datos que introdujo el usuario en el formulario de registro:
```
	$nombre = $_POST['nombrecompleto'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$correo = $_POST['email'];
```
Luego pasamos a las validaciones:
	- Comprobar que el usuario no exista ya en la base de datos, para evitar usuarios duplicados:
	```
		$usuario_seguro = mysqli_real_escape_string($conexion, $usuario);
		$sql_check = "SELECT * FROM usuario WHERE usuario = '$usuario_seguro'";
		$res_check = mysqli_query($conexion, $sql_check);
		if (mysqli_num_rows($res_check) > 0) {
			$errores['usuario'] = "Este usuario ya está ocupado. Elige otro.";
		}
	```
	- Comprobar que el email sea valido:
	```
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores['email'] = "El correo no tiene un formato válido.";
		}
	```
	- Validar que la contraseña cumpla con los requisitos:
	```
		if (!preg_match('/^(?=.*[A-Z])(?=.*[\W_]).{8,16}$/', $contrasena)) {
		$errores['pass'] = "La contraseña debe tener 8-16 carácteres, 1 Mayúscula y 1 Símbolo";
	```
	- Validar que el usuario cumpla con los requisitos:
	```
		if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9_]{5,20}$/', $usuario)) {
			$errores['usuario'] = "El usuario requiere 5-20 caracteres, al menos 1 mayúscula y 1 número.";
		}
	```
Luego en el caso de que tenga erroes los guarda para luego mostrarlos en `index.php` que es el archivo del login.
```
	if (!empty($errores)) {
		$_SESSION['errores'] = $errores;
		$_SESSION['datos_viejos'] = $_POST; // Sticky Form: Para no tener que reescribir todo
		
		header("Location: ../index.php"); 
		exit;
	}
```
Y en el caso de que todo este bien hashea la contraseña para que se guarde de forma segura en la base de datos:
```
	$passHash = password_hash($contrasena, PASSWORD_DEFAULT);
```
Y por ultimo guarda los datos en la base de datos:
```
	$sql = "INSERT INTO usuario (usuario, contrasena, nombre, correo) VALUES (?, ?, ?, ?)";
	$stmt = $conexion->prepare($sql);
	$stmt->bind_param("ssss", $usuario, $passHash, $nombre, $correo);
```

---

**Conclusion:**
En este proyecto usamos `PHP` para conectar con la base de datos, pedir información, insertarla, modificarla y borrarla (CRUD) segun las acciones del usuario. Usamos controladores que nos permiten procesar acciones como el login, el registro y el contenido. También usamos estructuras de control como `if, else, foreach` y validaciones para controlar como se desarrolla el programa y evitar errores. Como medida de seguridad hasheamos las contraseñas para que esten guardadas de forma segura en la base de datos.
