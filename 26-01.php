<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>26.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['n'])){
          ?>
          <form action="26-01.php" method="post">
            Introduzca un número entero: <input type="number" name="n" min="0" autofocus="" required=""><br>
            Introduzca un dígito: <input type="number" name="digito" min="0" max="9" required=""><br>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else {
            $n = $_POST['n'];
            $digito = $_POST['digito'];
            $volteado = 0;
            $longitud = 0;
            $posicion = 1;

            echo "Contando de izquierda a derecha, el $digito aparece dentro de $n en las siguientes posiciones:&nbsp;&nbsp;";

            // le da la vueta al número y calcula la longitud
            $numero = $n;
            if ($numero == 0) {
              $longitud = 1;
            }

            while ($numero > 0) {
              $volteado = ($volteado * 10) + ($numero % 10);
              $numero = floor($numero / 10);
              $longitud++;
            } // while


            // comprueba la posición
            while ($volteado > 0) {
              if (($volteado % 10) == $digito) {
                echo "$posicion&nbsp;&nbsp;";
              }
              $volteado = floor($volteado/10);
              $posicion++;
            } // while
          } // else
        ?>
        <br><br>
        <a href="26-01.php">>> Volver</a>
  </body>
</html>