<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 24</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['alturaIntroducida'])){
          ?>
            <h2>Pirámide de números</h2>
            <form action="24-01.php" method="post">
              Altura: <input type="number" name="alturaIntroducida" min="1" max="9" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $alturaIntroducida = $_POST['alturaIntroducida'];

            $altura = 1;
            $i = 0;
            $espacios = $alturaIntroducida-1;

            echo "<code>";
            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp";
              }

              // pinta la línea de números
              for ($i = 1; $i < $altura; $i++) {
                echo $i;
              }

              for ($i = $altura; $i > 0; $i--) {
                echo $i;
              }

              echo "<br>";

              $altura++;
              $espacios--;
            } // while
            echo "</code></p>";
          }
        ?>
        <br>
        <a href="24-01.php">>> Volver</a>
  </body>
</html>