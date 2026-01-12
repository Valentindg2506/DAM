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
