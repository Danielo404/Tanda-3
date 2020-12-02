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
            $contadorPositivo = 0;
            $contadorNegativo = 0;
            $cuentanumeros = 0;
        }
        else{
            $n = $_POST['n'];
            $contadorNegativo = $_POST['contadorNegativo'];
            $contadorPositivo = $_POST['contadorPositivo'];
            $cuentanumeros = $_POST['cuentanumeros'];
            if($n >= 0)
            {
                $contadorPositivo++;
                $cuentanumeros++;
            }
            else {
                $contadorNegativo++;
                $cuentanumeros++;
            }
        }
        if($cuentanumeros == 10)
        {
            echo "En la lista hay " . $contadorPositivo . " números positivos y " . $contadorNegativo . " números negativos.";
        }
        
        ?>

    <form action="13-01.php" method="post">
        Introduce números <input type="text" name="n" autofocus> <br>
        <input type="submit" name="resultado">
        <input type="hidden" name="contadorNegativo" value="<?php echo $contadorNegativo; ?>">
        <input type="hidden" name="contadorPositivo" value="<?php echo $contadorPositivo; ?>">
        <input type="hidden" name="cuentanumeros" value="<?php echo $cuentanumeros; ?>">
    </form>

</body>
</html>