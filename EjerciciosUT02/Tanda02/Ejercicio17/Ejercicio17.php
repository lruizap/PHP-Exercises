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
            $n = $_POST['n'];

          // si el número
            if ($n<0){
            $n = -$n;
            }

            if ( $n < 10 ) {
            $primera = n;
            }

            if (( $n >= 10 ) && ( $n < 100 )) {
                $primera = $n / 10;
            }

            if (( $n >= 100 ) && ( $n < 1000 )) {
                $primera = $n / 100;
            }

            if (( $n >= 1000 ) && ( $n < 10000 )) {
                $primera = $n / 1000;
            }

            if ( $n >= 10000 ) {
                $primera = $n / 10000;
            }

            echo "La primera cifra del número introducido es ", floor($primera);
        ?>
        <br><br>
        <a href="Ejercicio17.html">>> Volver</a>
</body>
</html>