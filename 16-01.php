<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php 
    if (!isset($_POST["n"])): ?>
        Introduce un número para saber si es primo o no. <br>
        <form action="16-01.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $n = $_POST['n'];
            
            if(($n == 1) || ($n == 0))
            {
                $esPrimo = false;
            }
            else
            {
                $esPrimo = true;
                for($i = 2; $i < $n/2; $i++)
                {
                    if($n % $i == 0)
                    {
                        $esPrimo = false;
                    }
                }
            }

            if($esPrimo)
            {
                echo "El número es primo";
            }
            else
            {
                echo "El número no es primo";
            }

        ?>
    <?php endif; ?>
</body>
</html>