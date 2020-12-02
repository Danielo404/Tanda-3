<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <?php 
    if (!isset($_POST["n"])): ?>
        Se pondrá el número que introduzcas del revés <br>
        <form action="25-01.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $n = $_POST['n'];
            echo strrev($n);

        ?>
    <?php endif; ?>
</body>
</html>