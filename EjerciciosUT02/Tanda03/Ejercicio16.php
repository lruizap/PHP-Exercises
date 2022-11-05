<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio16</title>
</head>
<body>

  <h1>Ejercicio16</h1>
  <p>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número primo es aquel que sólo es divisible entre él mismo y la unidad.</p>

<?php
          if (!isset($_POST['n'])) {
          ?>
            Introduzca un número para saber si es primo o no.<br>
            <form action=Ejericio16.php method="post">
              <input type="number" name="n" min="0" autofocus><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            // El 0 y el 1 no se consideran primos
            if (($n == 0) || ($n == 1)) {
              $esPrimo = false;
            } else {
              $esPrimo = true;
              for ($i = 2; $i <= $n/2; $i++) {
                if ($n % $i == 0) {
                  $esPrimo = false;
                }
            }
          }

            if ($esPrimo) {
                echo "El $n es primo.";
            } else {
                echo "El $n no es primo.";
            }
        }
        ?>
        <br><br>
        <a href="Ejercicio16.php">>> Volver</a>

</body>
</html>