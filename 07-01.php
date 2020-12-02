<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        if(!isset($_POST['oportunidades']))
        {
            $numeroIntroducido = 48461;
            $oportunidades = 4;
        }
        else{
            $numeroIntroducido = $_POST['numeroIntroducido'];
            $oportunidades = $_POST['oportunidades'];
        }

            $numeroSecreto = 1234;

        if($numeroIntroducido == $numeroSecreto)
        {
            echo "Has abierto la caja fuerte, eres el mejor de tu casa";
        }
        elseif($oportunidades == 0)
        {
            echo "Se han acabado tus oportunidades broski.";
        }
        else {
            echo "Te quedan " . $oportunidades . " oportunidades. <br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="07-01.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
        }
    ?>
</body>
</html>