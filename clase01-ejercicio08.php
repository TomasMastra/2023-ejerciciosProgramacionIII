<?php
/* Programacion III (PHP) - 2023

Parte 2 - Ejercicios con Arrays

Aplicación No 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';

Mastrapasqua Tomas 3C
Ejercicio 8 - clase 1 */

$vec = array("1" => 1, "30" => 2, "e" => 99, "hola" => 'mundo');

foreach($vec as $holaMundo => $valor)
{
    echo $valor . "</br>";
}
?>
