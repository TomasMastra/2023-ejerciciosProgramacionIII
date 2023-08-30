<?php
/* Programacion III (PHP) - 2023

Parte 1 - Ejercicios Simples

Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. Ejemplo 1: $a
= 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”

Mastrapasqua Tomas 3C
Ejercicio 3 - clase 1 */

$a = 1;
$b = 5;
$c = 3;


if(($a < $b && $c < $a) || ($c < $b && $b < $a)) 
{
    echo "el del medio es el a" . " " . $a;

} elseif (($b < $a && $a < $c) || ($c < $a && $a < $b)) 
{
    echo "El del medio es a: " . $a;

} elseif (($a < $c && $c < $b) || ($b < $c && $c < $a)) 
{
    echo "El del medio es c: " . $c;

} else {
    
    echo "No hay número del medio";
}



?>
