<?php
/* Programacion III (PHP) - 2023

Parte 2 - Ejercicios con Arrays

Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.

Mastrapasqua Tomas 3C
Ejercicio 10 - clase 1 */

$i = 0;
$lapiceras = array(
    array("color" => 'Rojo', "marca" => 'A', "trazo" => 'Grueso', "precio" => 100000),
    array("color" => 'Negro', "marca" => 'B', "trazo" => 'Grueso', "precio" => 500),
    array("color" => 'Azul', "marca" => 'C', "trazo" => 'Fino', "precio" => 300),
    array("color" => 'Verde', "marca" => 'D', "trazo" => 'Grueso', "precio" => 250)
);
foreach($lapiceras as $elemento => $lapicera)
{
    $i++;
    echo "Array Nro: " . $i . "</br>";
    foreach ($lapicera as $elementoLapicera => $valor)
    {
    echo $elementoLapicera . ":   " . $valor . " </br> " ;
    }
    echo "</br> ---------------------------</br>";
}

?>
