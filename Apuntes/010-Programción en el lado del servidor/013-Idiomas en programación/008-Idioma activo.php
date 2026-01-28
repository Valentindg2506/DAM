<?php
	session_start(); // ESTO ES PARA RECORDAR COSAS
	// SI NO EXISTE LA VARIABLE DE SESION IDIOMA
	if(!isset($_SESSION['idioma'])){
	// EN ESE CASO EL IDIOMA POR DEFECTO ES ESPAÑOL
		$_SESSION['idioma'] = 'es';
	}
	// SI LA URL TRANSPORTA LA VARIABLE IDIOMA
	if(isset($_GET['idioma'])){
	// LA SESION ES LO QUE DIGA LA URL
		$_SESSION['idioma'] = $_GET['idioma'];
	}
	$idioma['es']['inicio'] = "Inicio";
	$idioma['es']['sobremi'] = "Sobre mi";
	$idioma['es']['proyectos'] = "Proyectos";
	$idioma['es']['contacto'] = "Contacto";
	
	$idioma['en']['inicio'] = "Home";
	$idioma['en']['sobremi'] = "About me";
	$idioma['en']['proyectos'] = "Proyects";
	$idioma['en']['contacto'] = "Contact";
?>
<doctype html>
<html lang="es">
	<head>
		<title>Multi-Idioma</title>
		<meta charset="utf-8">
	</head>
	<body>
		<select>
			<option value="es"
				<?php if($_SESSION['idioma'] == 'es'){echo ' selected ';} ?>
			>🇦🇷️</option>
			<option value="en"
				<?php if($_SESSION['idioma'] == 'en'){echo ' selected ';} ?>
			>🇺🇸️</option>
		</select>
		<h1>Valentin de Gennaro</h1>
		<nav>
			<a href=""><?= $idioma[$_SESSION['idioma']]['inicio'] ?></a>
			<a href=""><?= $idioma[$_SESSION['idioma']]['sobremi'] ?></a>
			<a href=""><?= $idioma[$_SESSION['idioma']]['proyectos'] ?></a>
			<a href=""><?= $idioma[$_SESSION['idioma']]['contacto'] ?></a>
		</nav>
	</body>
	<script>
		let selector = document.querySelector("select") // SELECCIONO EL SELECT
		selector.onchange = function(){	//CUANDO CAMBIE EL SELECTOR
			window.location = "?idioma="+this.value	// RECARGO Y LE PASO EL IDIOMA EN LA URL
		}
	</script>
</html>
