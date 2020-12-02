<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 23</title>
  </head>
  <body>
      <?php
          if (!isset($_POST['n'])) {
            $n = 0;
            $cuentaNumeros = 0;
            $suma = 0;
          } else {
            $n = $_POST['n'];
            $cuentaNumeros = $_POST['cuentaNumeros'];
            $suma = $_POST['suma'];
          }

          if($suma < 10000)
          {
              $suma = $suma +$n;
              $cuentaNumeros++;
          }
          

          if (!isset($_POST['n']) || ($suma < 10000)) {
          ?>
            Introduzca un números hasta llegar a la suma de 10000<br>
            <form action="23-01.php" method="post">
              <input type="number" name="n" autofocus=""><br>
              <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
              <input type="hidden" name="suma" value="<?php echo $suma; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
        $cuentaNumeros--;
          if ($suma > 10000) {
            echo "Se han introducido " . $cuentaNumeros . " números <br>";
            
            echo "La media de los números es ".($suma / $cuentaNumeros);
        
            echo "<br>";
            
            echo "El total es " . $suma;
          }
        ?>
        <br><br>
        <a href="23-01.php">>> Volver</a>
  </body>
</html>