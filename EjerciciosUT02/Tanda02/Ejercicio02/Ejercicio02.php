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

    $hora = $_POST['hora'];

    if($hora >= 6 && $hora <= 12 ){
        echo "Buenos días";
    } elseif ($hora >= 13 && $hora <= 20) {
        echo "Buenas tardes";
    }
    else {
        echo "Buenas noches";
    }

?>
        <br><br>
        <a href="Ejercicio02.html">>> Volver</a>
</body>
</html>