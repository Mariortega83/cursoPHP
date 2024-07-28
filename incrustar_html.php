<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustar PHP en HTML</title>

    <script>
            <?php 
            echo  "alert('SALUDO CURSO PHP MODERNO')";
            ?> 

    </script>
</head>
<body>
    <h2 style="text-align: center;">Curso PHP</h2>

   
    <?php echo "Somos los putos amos";?>  

    <?php 
        print " <h4>Titulo</h4>";
        echo"<hr>";
    ?>

    <h4>
        <?php echo "Somos los putos amos";?>  
    </h4>

    <h2 style="color: blue;">Texto Azul</h2>
    <h2 <?php echo 'style="color:blue;"' ?>>Texto Azul PHP</h2>
</body>
</html>