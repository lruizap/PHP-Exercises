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

    $pesetas = 1000;

    // Para redondear usaremos la función round(variable, decimales)

    $euros = round($pesetas / 166.386,2);
    echo "$pesetas pesetas = $euros €";

?>

</body>
</html>