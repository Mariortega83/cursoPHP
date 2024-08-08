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

    // Variables globales
    global $mensaje;
    $mensaje = "saludo";
    function mostrarContacto3()
    { 

        global $mensaje;
        echo $mensaje;
    }

    echo "<br>";
    mostrarContacto3();
    echo "<br>";
    echo $mensaje;

    // Variables estaticas
    function contador(){
       static $num = 1;
        echo $num;
        $num = $num + 1;
    }

    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";
    contador();
    echo "<br>";

    // Variables super globales

    $saludo4;
    $saludo4 = "Bienvenidos";
    echo $GLOBALS['saludo4']."<br>";

    // Variables super globales predefinidas

    echo "Nombre archivo:" . $_SERVER['PHP_SELF'];
    echo "<br>";

    // Varaibles de variables

    $persona = "Jose Andres Montoya";

    $hombre = "persona";

    $genero = "hombre";

    echo $hombre;// No accede a la variable
    echo "<br>";
    echo $persona;

    echo "<br>";
    echo $$hombre;// Este si\

    echo "<br>";
    echo $$$genero;
    

    // Variables o metodos para variables predefinidos
    /* $division = 4/0;
    //echo $php_geterrormsg

    $err = error_get_last();

    var_export($err);
*/

    // Variable setead isset

    echo"<br />";
    $telefono = 123145;
    echo $telefono;

    echo isset($telefono) ? "Variable definida" :
    "Variable indefinida" ;



    ?>