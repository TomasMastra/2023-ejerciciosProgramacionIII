<?php
/* Programacion III (PHP) - 2023

Parte 2 - Ejercicios con Arrays

Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.

Mastrapasqua Tomas 3C
Ejercicio 6 - clase 1 */

/*echo rand(), "\n";
echo rand(), "\n";

echo rand(5, 15), "\n";*/


$vec = array();
$preomedio = 0;
$suma = 0;
$tamanoArray;

for( $i = 0 ; $i <5 ; $i++)
{

$vec[$i] = rand(5, 9);
$suma += $vec[$i];

}
$tamanoArray = count($vec);
$promedio = $suma / $tamanoArray;
echo "♦ El tamaño del array es: " . $tamanoArray . "<br/>";
echo "♦ El promedio es de " . $promedio . "<br/>";


if($promedio > 6.9)
{
echo "♦ El promedio es mayor a 6";

}elseif($promedio <= 5.9)
{
    echo "♦ El promedio es menor a 6";
}else{
    echo "♦ El promedio es 6" . "     (" . $promedio . ")";
}



?>
