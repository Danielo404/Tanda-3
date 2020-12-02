<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php 
    if (!isset($_POST["n"])): ?>
        Introduce un número para sumar los 100 siguientes <br>
        <form action="17-01.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $n = $_POST['n'];
            $total = 0;
            if($n >= 0)
            {
                for($i = $n; $i <= $n + 100; $i++)
                {
                    $total = $i + $total;
                }
                echo "La suma total es " . $total;
            }
            else{
                echo "El número introducido";
            }

        ?>
    <?php endif; ?>
</body>
</html>