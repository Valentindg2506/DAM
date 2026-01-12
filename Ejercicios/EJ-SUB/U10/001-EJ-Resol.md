En este ejercicio vamos a crear un programa en PHP que evalúe la edad de una persona y nos diga en qué etapa de la vida se encuentra. Para ello utilizaremos variables y las estructuras de control `if`, `elseif` y `else`.

---

Para realizar este ejercicio primero debemos declarar las variables. En PHP las variables siempre comienzan con el símbolo `$`:
```
	$edad = 25;
	$etapa = "";
```
Luego vamos a utilizar la estructura de control `if` para determinar la etapa.

	Si la edad es menor a 10 años:
	```
		if ($edad < 10) {
			$etapa = "Eres un niño";
		}
	```
	Si la edad está entre 10 y 20 años (inclusive), usamos `elseif` junto con el operador lógico `&&` (AND):
	```
		elseif ($edad >= 10 && $edad <= 20) {
			$etapa = "Eres un adolescente";
		}
	```
	Si la edad está entre 20 y 30 años (inclusive):
	```
		elseif ($edad > 20 && $edad <= 30) {
			$etapa = "Eres un joven";
		}
	```
Por último, podemos añadir un `else` para cualquier edad superior a 30, aunque el enunciado se centra en los primeros casos:
```
	else {
		$etapa = "Eres un adulto";
	}
```
Finalmente, imprimimos el resultado utilizando la función `echo`:
```
	echo $etapa;
```

---

A continuación el codigo completo:
```
<?php
/*
	Clasificador de etapas de vida
	v0.1 Valentin Antonio De Gennaro
	Determina la etapa de una persona según su edad en PHP.
*/

	## DECLARAMOS LAS VARIABLES ##
	$edad = 25;
	$etapa = "";

	## ESTRUCTURA DE CONTROL IF-ELSE ##
	if ($edad < 10) {
		$etapa = "Eres un niño";
	} elseif ($edad >= 10 && $edad <= 20) {
		$etapa = "Eres un adolescente";
	} elseif ($edad > 20 && $edad <= 30) {
		$etapa = "Eres un joven";
	} else {
		$etapa = "Eres un adulto";
	}

	## IMPRIMIMOS EL RESULTADO ##
	echo "-------------------------------------------";
	echo "\n"; // Salto de linea
	echo "Edad introducida: " . $edad;
	echo "\n";
	echo $etapa;
	echo "\n";
	echo "-------------------------------------------";

	?>
```

---

**NOTAS:**
- En PHP es obligatorio usar el símbolo `$` antes del nombre de la variable.
- Las sentencias deben terminar siempre con punto y coma `;`.
- El operador `.` se utiliza para concatenar cadenas de texto.
