<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php 
    if (!isset($_POST["b"])): ?>
        Inttroduzca la base y el exponente (positivo) <br>
        <form action="15-01.php" method="post">
          <input type="number" name="b" autofocus>
          <input type="number" name="e">
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $b = $_POST['b'];
            $e = $_POST['e'];
            $base = $b;
            $total = $b * $b;

            echo $base . " ";
            if ($e > 0) {
                for ($i = 0; $i < $e -1; $i++) {
                    echo $total . " ";
                  $total *= $b;
                }
              }
        ?>
    <?php endif; ?>
</body>
</html>