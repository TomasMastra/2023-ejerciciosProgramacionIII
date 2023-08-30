<?php
/* Programacion III (PHP) - 2023

Parte 1 - Ejercicios Simples

Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.

Mastrapasqua Tomas 3C
Ejercicio 1 - clase 1 */

$total = 0;

for($i = 0; $i<1000; $i++)
{
    if($total > 1000)
    {
        break;
    }
    
    $total += $i;
    echo $total .  "<br/>";
}



echo "numeros" . " " . $i;

?>
