<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>19-01.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['alturaIntroducida'])){
          ?>
          <h2>Pirámide</h2>
          <form action="19-01.php" method="post">
            Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""><br>
            Figura base:
            <select name="figura">
                <option value="bolita">Bolita</option>
                <option value="ladrillo">Ladrillo</option>
                <option value="pinguino">Pingüino</option>
                <option value="sol">Sol</option>
            </select>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else { // pinta la pirámide //////////////////////////////
            $alturaIntroducida = $_POST['alturaIntroducida'];
            $figura = $_POST['figura'];
            $altura = 1;
            $espacios = $alturaIntroducida - 1;
            switch ($figura) {
              case 'bolita':
                $glifo = "•";
                break;
              case 'ladrillo':
                $glifo = "#";
                break;
              case 'pinguino':
                $glifo = "Å";
                break;
              case 'sol':
                $glifo = "*";
                break;
            }

            echo "<code>";
            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp;";
              }

              // pinta la línea
              for ($i = 1; $i < $altura * 2; $i++) {
                echo "$glifo";
              }

              echo "<br>";

              $altura++;
              $espacios--;
            }
          }
          echo "</code>";
          ?>
          <br><br>
          <a href="19-01.php">>> Volver</a>
  </body>
</html>