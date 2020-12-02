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
        Introduzca un número entero: <br>
        <form action="11-01.php" method="post">
          <input type="number" name="n" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $n = $_POST['n'];
            echo "<table border = 1px>";
                for($i = $n; $i <= $n+5; $i++)
                {
                    echo "<tr>" . "<td>". $i ."</td>" .  "<td>" . $i * $i . "</td>" ."<td>" .  $i * $i * $i . "</td>" . "</tr>";
                }
                echo "</table>"
        ?>
    <?php endif; ?>
</body>
</html>