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

            $capicua = false;

            // número de una cifra
            if ( $n < 10 ) {
                $capicua = true;
            }

            // número de dos cifras
            if (( $n >= 10 ) && ( $n < 100 )) {
                $capicua = (floor($n / 10) == ($n % 10));
            }

            // número de tres cifras
            if (( $n >= 100 ) && ( $n < 1000 )) {
                $capicua = (floor($n / 100) == ($n % 10) );
            }

            // número de cuatro cifras
            if (( $n >= 1000 ) && ( $n < 10000 )) {
                $capicua =  ((floor( $n / 1000 ) == ($n % 10) ) && ( (floor( $n / 100 ) % 10 )== (floor( $n / 10) % 10 )));
            }

            // número de cinco cifras
            if ( $n >= 10000) {
                $capicua = (floor( $n / 10000 ) == ($n % 10) ) && ( ( (floor($n / 1000) % 10) ) == (floor( $n / 10) % 10));
            }

            if ( $capicua ) {
                echo "El número introducido es capicúa.";
            } else {
                echo "El número introducido no es capicúa.";
            }
        ?>
        <br><br>
        <a href="Ejercicio19.html">>> Volver</a>

</body>
</html>