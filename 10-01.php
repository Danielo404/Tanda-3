<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
            $n = 0;
            $contador = 0;
            $total = 0;
        }
        else{
            $n = $_POST['n'];
            $total = $_POST['total'];
            $contador = $_POST['contador'];
        }

        if($n >= 0)
        {
            $contador++;
            $total = $n + $total;
        
        ?>

    <form action="10-01.php" method="post">
        Introduce un número del 1 al 10 (Negativo para terminar de introducir) <input type="text" name="n" autofocus> <br>
        <input type="submit" name="resultado">
        <input type="hidden" name="total" value="<?php echo $total; ?>">
        <input type="hidden" name="contador" value="<?php echo $contador; ?>">
    </form>
        
    <?php
    }
        else {
            $total = $total / ($contador -1);
            echo "La media total es: " . $total;
        }    
    ?>

</body>
</html>