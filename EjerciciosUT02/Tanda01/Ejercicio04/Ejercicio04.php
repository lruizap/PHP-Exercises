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

    $x = $_POST['x'];
    $y = $_POST['y'];
    echo $x, " + ", $y, " = ", $x+$y, "<br>";
    echo $x, " - ", $y, " = ", $x-$y, "<br>";
    echo $x, " * ", $y, " = ", $x*$y, "<br>";
    echo $x, " / ", $y, " = ", round($x/$y,2);

?>

</body>
</html>