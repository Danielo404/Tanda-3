
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 22</title>
  </head>
  <body>
        <?php
          echo "Números primos entre 2 y 100: <br>";

          for ($n = 2; $n <= 100; $n++) {
            $esPrimo = true;
            for ($i = 2; $i < ($n/2)+1; $i++) {
              if ($n % $i == 0) {
                $esPrimo = false;
              }
            }
            if ($esPrimo) {
              echo "$n&nbsp;&nbsp;";
            }
          }
          echo 100;
        ?>
        <br><br>
        <a href="22-01.php">>> Volver</a>
  </body>
</html>