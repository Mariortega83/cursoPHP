<?php

// Constantes
/*

1- No se necesita usar $
2- Solo se definen con el metodo define
3- Se  asignan una unica vez
4- El alcance o SCOPE es global es decir que se puede acceder
desde cualquier lugar

*/

// Definir una constante y su valor 

define("CUOTA",20000);

$valorCuota = CUOTA;

echo "El valor de cuota es : $valorCuota";
echo "<br>";
echo "El valor de la cuota es " . CUOTA . "<br>";

// Acceder con el metodo constant

echo "<br>";
echo constant('CUOTA');

// No podemos usar isset 
/*echo "<br>";
define('VERSION', '');

echo isset(VERSION);
*/

// Buenas practicas con CONSTANTES
// MAYUSCULLAS

define('NOMBRE', 'Jose Montoya');

//No usar nombres de constantes como : 

define('__VALOR__','Valor');

// No usar nombres de constantes con guion bajo

define('_valor','Valor');

// Magic constantes
echo  "<br>";
echo __LINE__ . "<br>";
echo __DIR__;
?>