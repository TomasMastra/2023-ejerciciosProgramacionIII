
<?php
/* Programacion III (PHP) - 2023

Parte 3 - Ejercicios con Funciones

Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

Mastrapasqua Tomas 3C
Ejercicio 12 - clase 2 */


$caracteres = array('H', 'O', 'L', 'A');

$palabraInvertida = implode('', InvertirPalabra($caracteres));
echo $palabraInvertida;


function InvertirPalabra($caracteres)
{
    return array_reverse($caracteres);
}

?>
