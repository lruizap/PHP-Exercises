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

    echo "El área del triángulo es ";
    echo round(($_POST['base'] * $_POST['altura']) / 2, $precision = 2), " cm<sup>2</sup>";

?>

</body>
</html>