
<?php
/* Programacion III (PHP) - 2023

Parte 4 - Ejercicios con POO

Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).

Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
$miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
los métodos.

Mastrapasqua Tomas 3C
Ejercicio 18 - clase 2 */

require_once 'C:\xampp\htdocs\2023-2doCuatri\garaje.php';
require_once './auto.php';

$auto1 = new Auto('Peugeot', 'Azul');
$auto1->AgregarImpuestos(1500);

$auto2 = new Auto("Toyota", "Negro");
$auto2->AgregarImpuestos(1500);

$garageTomas = new Garage("razon Social", 1000);

echo $garageTomas->Add($auto1);
echo $garageTomas->Add($auto2);
echo $garageTomas->Add($auto1);
echo $garageTomas->Add($auto2);

echo "--------------------------------- </br>";

$garageTomas->MostrarAutos();



?>
