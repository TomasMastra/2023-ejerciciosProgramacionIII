<?php
/* Programacion III (PHP) - 2023

Parte 2 - Ejercicios con Arrays

Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.

Mastrapasqua Tomas 3C
Ejercicio 7 - clase 1 */



$numerosImpares = array();
$i = 0;


    while(count($numerosImpares) != 10)
    {
        if($i % 2 == 1)
        {
            $numerosImpares[] = $i;
        }
        $i++;
    }



foreach($numerosImpares as $valor)
{
    echo "Numero impar:" . $valor . "</br>";
}

?>
