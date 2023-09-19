<?php
/* Programacion III (PHP) - 2023

Parte 3 - Ejercicios con Funciones

Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
pertenece a algún elemento del listado.
0 en caso contrario.

Mastrapasqua Tomas 3C
Ejercicio 13 - clase 2 */


$palabra = 'Programacion';
$max = 15;



if(recibirPalabra($palabra, $max) == 1)
{

    echo "todo OK, la palabra es: " . $palabra;
}else{

    echo "error, la palabra " . $palabra . " no coincide";
}


//Se puede hacer en otro archivo

function recibirPalabra($palabraRecibida, $max)
{

    if(strlen($palabraRecibida) < $max)
    {
        if($palabraRecibida == "Recuperatorio" || $palabraRecibida == "Parcial" || $palabraRecibida == "Programacion")
        {
            return 1;
        }
    }

    return 0;

}

?>
