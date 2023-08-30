<?php
/* Programacion III (PHP) - 2023

Parte 1 - Ejercicios Simples

Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

Mastrapasqua Tomas 3C
Ejercicio 4 - clase 1 */

$operador = "/";
$op1 = 12;
$op2 = 0;
$resultado = 0;

switch($operador)
{
   case "+":
        $resultado = $op1 + $op2;
        echo "La SUMA es " . $resultado;
    break;

    case "-":
        $resultado = $op1 - $op2;
        echo "La RESTA es "  . $resultado;
    break;

    case "/":
        if($op2 != 0)
        {
            $resultado = $op1 / $op2;
            echo "La DIVISION es "  . $resultado;
        }else{
            echo "No se puede dividir por 0";
        }
    break;

    case "*":
        $resultado = $op1 * $op2;
        echo "La MULTIPLICACION es "  . $resultado;
    break;
}
?>
