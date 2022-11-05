<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio06.php</title>
</head>
<body>

<?php

    $h = $_POST['altura'];

    if($h<0){
        echo "Valor de altura no válido";
    }else {
        $tCuadrado = (2*$h) / 9.8;
        echo sqrt($tCuadrado)." s";
    }
    
?>
    <br><br>
    <a href="Ejercicio06.html">>> Volver</a>
</body>
</html>