<?php

// Expresiones y operadores
// Ejemplo de una expresion

$nombre = "Jose Montoya";
$salario = 20000;
// $total = suma(10,20);

// El = es un operador de asignacion, los operadores
// se usan para realizar operaciones sobre las variables

$apellidos = "Montoya";
// $x++;
$suma = 30 + 2; 

// Diferentes tipos de operadores

// Aritmeticos 

$sueldo = 100000;
$subsidioTransporte = 200000;
$salud = 100000;
$pension = 100000;
$ingresos = $sueldo + $subsidioTransporte;
$gastos = $salud + $pension;
$total = $ingresos - $gastos;

echo "El sueldo total es: $total";


// Calcular el area de un cuadrado

$base = 10 ;
$altura = 14 ; 

$area = $base * $altura;

echo "<br>";
echo $area;

// Division

$num1 = 8 ;
$num2 = 2 ; 

$division = $num1 / $num2;

echo "<br>";
echo $division;

// Porcentaje

$sumaNotas = 42 ;
$asignaturas = 5 ; 

$media = $sumaNotas / $asignaturas;

echo "<br>";
echo $media;

// Modulo
echo "<br>";
$a = 51 % 2;
echo $a;


// Exponenciacion

echo "<br>";
$c = 4;
$d = 3;
$resualtado = $c ** $d;
echo $resualtado;

// Operadores condicionales

$puedeIngresar = (true) ?//Pregunta, como un if
 "ENTRA" // Si es verdad
: "NO ENTRA" // Si es falso
; // ? true : false

echo "<br>";
echo $puedeIngresar;


// Operadores logicos and or %% ||

$permiso = true;
$autenticado = true;
echo "<br>";
echo ($permiso or $autenticado) ? "Bienvendio" : "No bienvenido";
echo "<br>";
echo ($permiso and $autenticado) ? "Bienvendio" : "No bienvenido";
echo "<br>";

$total = 50;
$pasaMateria = 50;
$validar = ($total>=$pasaMateria) ? true : false;

echo ($validar) ? "Pasa" : "No pasa";

// Operador +=
echo "<br>";
$contador = 1;
// $contador = $contador + 1;
$contador += $contador;
echo $contador;

// Operador -=
echo "<br>";
$contador = 1;
// $contador = $contador - 1;
$contador -= $contador;
echo $contador;

// Operador *=
echo "<br>";
$contador = 1;
// $contador = $contador * 1;
$contador *= $contador;
echo $contador;

// Operador /=
echo "<br>";
$contador = 1;
// $contador = $contador / 1;
$contador /= $contador;
echo $contador;

// Operador %=
echo "<br>";
$contador = 1;
// $contador = $contador % 1;
$contador %= $contador;
echo $contador;

// .=

echo "<br>";
$nombreCompleto = "Jose";
$nombreCompleto .= " Andres";
$nombreCompleto .= " Montoya";

echo $nombreCompleto;


// Operadores de incremento

echo "<br>";

$conta = 20;
$conta += 1;

echo $conta;
echo "<br>";

// Post incremento

echo $conta++;
echo "<br>";
echo $conta;

// Pre incremento

echo "<br>";
echo ++$conta;
echo "<br>";
echo $conta;


// Operadores de decremento

echo "<br>";

$conta = 20;
$conta -= 1;

echo $conta;
echo "<br>";

// Post decremento

echo $conta--;
echo "<br>";
echo $conta;

// Pre decremento

echo "<br>";
echo --$conta;
echo "<br>";
echo $conta;

echo "<br>";
// Operador de ejecucion


//echo `dir * .php`;

// Precedencia de operadores
echo "<br>";
$val = 20;
echo $val++;
$contad = $val++;
echo "<br>";
echo $contad;
echo "<br>";
echo $val;


// Ejemplo 2
echo "<br>";
$valor1 = 3 * 4 + 2;
echo $valor1;

// Ejemplo 3
echo "<br>";
$resultado1 = true && false;
$resultado2 = true and false;

echo ($resultado1) ? "verdadero" : "falso";
echo "<br>";
echo ($resultado2) ? "verdadero" : "falso";


?>