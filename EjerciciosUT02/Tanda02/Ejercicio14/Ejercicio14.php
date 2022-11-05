<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php

          $n = $_GET['numero'];

          if ($n % 2) {
            echo "El número introducido es impar";
          } else {
            echo "El número introducido es par";
          }

          if ($n % 5) {
            echo " y no es divisible entre 5.";
          } else {
            echo " y divisible entre 5.";
          }

?>
    <br><br>
    <a href="Ejercicio14.html">>> Volver</a>
</body>
</html>