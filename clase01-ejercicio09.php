<?php
/* Programacion III (PHP) - 2023

Parte 2 - Ejercicios con Arrays

Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.

Mastrapasqua Tomas 3C
Ejercicio 9 - clase 1 */

$lapicera = array("color" => 'Rojo', "marca" => 'Bic', "trazo" => 'Grueso', "precio" => 100000);

$lapiceras = array(
    array("color" => 'Rojo', "marca" => 'A', "trazo" => 'Grueso', "precio" => 100000),
    array("color" => 'Negro', "marca" => 'B', "trazo" => 'Grueso', "precio" => 500),
    array("color" => 'Azul', "marca" => 'C', "trazo" => 'Fino', "precio" => 300),
    array("color" => 'Verde', "marca" => 'D', "trazo" => 'Grueso', "precio" => 250)
);
foreach($lapiceras as $elemento => $lapicera)
{
    foreach ($lapicera as $elementoLapicera => $valor)
    {
    echo $elementoLapicera . ":   " . $valor . " |  " ;
    }
    echo "</br>";
}
?>
