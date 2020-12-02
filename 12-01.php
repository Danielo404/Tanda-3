<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php 
    if (!isset($_POST["n"])): ?>
        Introduzca cuántos números de Fibonacci quieres: <br>
        <form action="12-01.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $n = $_POST['n'];
            $n1 = 0;
            $n2 = 1;
            $suma = 0;

            echo $n1 . "  " . $n2 . "  ";
            for($i = 0; $i <= $n; $i++)
            {
                $suma = $n1 + $n2;
                $n1 = $n2;
                $n2 = $suma;
                echo $suma . "  ";
            }
        ?>
    <?php endif; ?>
</body>
</html>