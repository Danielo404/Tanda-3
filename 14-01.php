<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php 
    if (!isset($_POST["b"])): ?>
        Inttroduzca la base y el exponente (positivo) <br>
        <form action="14-01.php" method="post">
          <input type="number" name="b" autofocus>
          <input type="number" name="e">
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $b = $_POST['b'];
            $e = $_POST['e'];
            if($e == 0)
            {
                echo "El total es: " . 1;
            }

            if($e == 1)
            {
                echo "El total es: " . $b;
            }
            $total = $b * $b;

            if($e > 1)
            {
                for($i = 0; $i < $e-2; $i++)
            {
                $total *= $b; 
            }

            echo "El total es: " . $total;
            }

        ?>
    <?php endif; ?>
</body>
</html>