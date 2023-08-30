<?php
/* Programacion III (PHP) - 2023

Parte 1 - Ejercicios Simples

Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

Mastrapasqua Tomas 3C
Ejercicio 2 - clase 1 */

date_default_timezone_set('America/Argentina/Buenos_Aires');

$fechaActual = date('d m y');
echo $fechaActual . "<br/>";

$fechaActual = date('l j F');
echo $fechaActual . "<br/>";

$estacion = date('n');

// Se puede validar cada estacion
if($estacion >= 6 && $estacion <= 8)
 {
    echo "La estacion es" . " " . "invierno";
 }else{
    echo "Es otra estacion";
 }
?>
