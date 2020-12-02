<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php 
    if (!isset($_POST["x"])): ?>
        Se te mostrarán de 7 en 7 todos los números comprendidos entre x e y <br>
        <form action="18-01.php" method="post">
          <input type="number" name="x" autofocus>
          <input type="number" name="y" autofocus>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
        <?php
            $x = $_POST['x'];
            $y = $_POST['y'];
            
            if($x < $y)
            {
                for($i = $x; $i <= $y ; $i+=7)
                {
                    echo $i . " ";
                }
            }
            else{
                echo "Los números introducidos no son correctos";
            }

        ?>
    <?php endif; ?>
</body>
</html>