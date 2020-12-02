<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
            echo "Introduce un número.";
            echo '<form action="08-01.php" method="post">';
            echo '<input type="number" name="n" autofocus>';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
            echo "<br>";
        }
        else{
            echo "<table border = 1px>";
            $n = $_POST['n'];
            echo "La tabla del " . $n;
            echo "<br>";

            for($i = 0; $i <= 10; $i++)
        {
            echo "<tr><td>" . $n . " X " . $i . " = " . $n * $i . "</td></tr>";
        }
            echo "</table>";
        }

        
            
    ?>
</body>
</html>