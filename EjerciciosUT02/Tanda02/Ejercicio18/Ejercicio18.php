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

            // si el número es negativo, se le quita el signo
            if ($n < 0){
                $n = -$n;
            }

            if ( $n < 10 ) {
                $digitos = 1;
            }

            if (( $n >= 10 ) && ( $n < 100 )) {
                $digitos = 2;
            }

            if (( $n >= 100 ) && ( $n < 1000 )) {
                $digitos = 3;
            }

            if (( $n >= 1000 ) && ( $n < 10000 )) {
                $digitos = 4;
            }

            if ( $n >= 10000 ) {
                $digitos = 5;
            }

            echo "El número introducido tiene $digitos dígitos.";
        ?>
        <br><br>
        <a href="Ejercicio18.php">>> Volver</a>

</body>
</html>