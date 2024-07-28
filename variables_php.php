<?php
    // Definiendo variables

    $nombre = "Mario";

    // Definicion de variables
    
    $url = "www.youtube.com/render2web";
    echo "<h3>Direccion: </h3>";
    echo $url;
    echo "<br>";
    // Cmbiar el valor de la variable

    $url = "www.render2web.com";
    echo $url;
    echo "<br>";
    // Variable tipo string y concatenar
    $apellidos = "salamanca";
    $mensaje = "pagame el coche viejo";
    // echo $apellidos." ".$mensaje
    print "$apellidos: $mensaje";
    echo "<br>";

    //Variables tipo entero
    $altura = 173;
    echo "Estatura" ." ". $altura;

    //Sumar dos valores
    echo "<br>";
    /* $num1 = 10;
    $num2 = 5;

    $total = $num1 + $num2;

    echo $total;*/

    $num1 = 10;
    $num2 = 5;

    $total = $num1 + $num2;

    echo $total;

    // Introduccion rapida a las variables

    function restar()
    {
        $num5 = 7;
        $num6 = 9;

        $totalResta =  $num5 - $num6;
        echo $totalResta;
    }
    echo "<br>";
    restar();

    $nombre = "Jose";
    $Nombre = "Alberto";
    echo "<br>";
    echo "El nombre 1 es: $nombre y el nombre 2 es: $Nombre";

    //Variable local SCOPE(Alcance)
    $contacto = "Juan Pepe";
     
    function mostrarContacto()
    {
        $contacto = "Juan Carlos";
        echo $contacto;

    }

    echo "<br>";
    mostrarContacto();
    echo $contacto;
    ?>