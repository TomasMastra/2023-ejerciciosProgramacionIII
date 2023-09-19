
<?php
/* Programacion III (PHP) - 2023

Parte 4 - Ejercicios con POO

Aplicación No 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos

privados: _color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
por parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);

En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.

● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)

Mastrapasqua Tomas 3C
Ejercicio 17 - clase 2 */

require_once './auto.php';


echo "Prueba: Misma marca y distinto color </br>";

$auto = new Auto('a', 'Azul');
$auto->AgregarImpuestos(1500);

$auto2 = new Auto("a", "Negro");
$auto2->AgregarImpuestos(1500);


$suma = $auto->add($auto2);

if ($suma > 0) {
    echo "El importe de la suma es: " . $suma . "</br>";
} else {
    echo "No se pudo realizar la suma.</br>";
}

echo "--------------------- </br>";
echo "Prueba: Misma marca, mismo color y distinto precio</br>";

$auto3 = new Auto("Toyota", "Azul", 5000);
$auto3->AgregarImpuestos(1500.50);

$auto4 = new Auto("Toyota", "Azul", 5000);
$auto4->AgregarImpuestos(1500.25);



$suma = $auto3->add($auto4);

if ($suma > 0) {
    echo "El importe de la suma es: " . $suma . "</br>";
} else {
    echo "No se pudo realizar la suma.</br>";
}
echo "---------------------------------- </br>";

echo "Sobrecarga restante </br>";

$auto5 = new Auto("Toyota", "Azul", 5000, date('d-m-Y h:i:s'));
$auto5->AgregarImpuestos(1500);


?>