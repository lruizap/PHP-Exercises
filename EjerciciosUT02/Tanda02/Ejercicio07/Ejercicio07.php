<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio07.php</title>
</head>
<body>

<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    if($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10 || $nota3 < 0 || $nota3 > 10){
        echo "las notas no pueden ser menores a 0 ni superiores a 10";
        return;
    };

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "la media es de ".$media;

?>
    <br><br>
    <a href="Ejercicio07.html">>> Volver</a>
</body>
</html>