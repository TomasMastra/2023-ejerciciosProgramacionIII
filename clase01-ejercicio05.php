<?php
/* Programacion III (PHP) - 2023

Parte 1 - Ejercicios Simples

Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

Mastrapasqua Tomas 3C
Ejercicio 5 - clase 1 */

$numerosEscrito = array(
    20 => 'veinte', 21 => 'veintiuno', 22 => 'veintidós',
    23 => 'veintitrés', 24 => 'veinticuatro', 25 => 'veinticinco',
    26 => 'veintiséis', 27 => 'veintisiete', 28 => 'veintiocho',
    29 => 'veintinueve', 30 => 'treinta', 31 => 'treinta y uno',
    32 => 'treinta y dos', 33 => 'treinta y tres', 34 => 'treinta y cuatro',
    35 => 'treinta y cinco', 36 => 'treinta y seis', 37 => 'treinta y siete',
    38 => 'treinta y ocho', 39 => 'treinta y nueve', 40 => 'cuarenta',
    41 => 'cuarenta y uno', 42 => 'cuarenta y dos', 43 => 'cuarenta y tres',
    44 => 'cuarenta y cuatro', 45 => 'cuarenta y cinco', 46 => 'cuarenta y seis',
    47 => 'cuarenta y siete', 48 => 'cuarenta y ocho', 49 => 'cuarenta y nueve',
    50 => 'cincuenta', 51 => 'cincuenta y uno', 52 => 'cincuenta y dos',
    53 => 'cincuenta y tres', 54 => 'cincuenta y cuatro', 55 => 'cincuenta y cinco',
    56 => 'cincuenta y seis', 57 => 'cincuenta y siete', 58 => 'cincuenta y ocho',
    59 => 'cincuenta y nueve', 60 => 'sesenta'
);

$num = 46;

foreach($numerosEscrito as $numero => $valor)
{

    if($numero == $num)
    {
        echo "Numero: " . $valor;
    }
}




?>
