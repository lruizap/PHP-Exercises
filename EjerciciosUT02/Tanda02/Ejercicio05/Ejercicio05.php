<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio05.php</title>
</head>
<body>

<?php

    $a = $_POST['a'];

    $b = $_POST['b'];
    
    if($a == 0 && $b == 0){
        echo "No tiene solución real";
    }else {
        $resultado = (-$b/$a);
        echo "$a x + $b = $resultado";
    }
    
?>
    <br><br>
    <a href="Ejercicio05.html">>> Volver</a>
</body>
</html>