<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>17.php</title>
  </head>
  <body>
        <?php

          if (!isset($_POST['n'])){
          ?>
            Introduzca un número entero mayor que 1:
            <form action="27.php" method="post">
              <input type="number" name="n" min="1" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            $cuenta = 0;
            $suma = 0;

            for ($i = 1; $i <= $n; $i++) {
              if (($i % 3) == 0) {
                echo "$i&nbsp;&nbsp;";
                $cuenta++;
                $suma += $i;
              }
            }
            echo "<br>Desde 1 hasta $n hay $cuenta múltiplos de 3 y suman $suma.";
          } // else
        ?>
        <br><br>
        <a href="27-01.php">>> Volver</a>
  </body>
</html>