<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 28</title>
  </head>
  <body>
        <?php

          if (!isset($_POST['n'])){
          ?>
            Introduzca un número entero mayor que 1:
            <form action="28-01.php" method="post">
              <input type="number" name="n" min="0" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            $f = 1;

            for ($i = 2; $i <= $n; $i++) {
              $f *= $i;
              }
            echo "<br>El factorial de $n es $f.";
          } // else
        ?>
        <br><br>
        <a href="28-01.php">>> Volver</a>
  </body>
</html>