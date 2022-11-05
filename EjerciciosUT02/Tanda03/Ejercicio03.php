<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Ejercicio03</h1>
    <p>
        Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while .
    </p>

<?php

    $i = 0;

    do {
        echo "$i ";
        $i += 5;
    }while($i <= 100);

?>

</body>
</html>