<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio09.php</title>
</head>
<body>

<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if(isset($a, $b, $c))
    {
        $cuenta = (($b * $b) - (4 * $a * $c));
        $sqrt = sqrt($cuenta);
        $positive_result = number_format((-$b + $sqrt) / (2 * $a), 2);
        $negative_result = number_format((-$b - $sqrt) / (2 * $a), 2);
        
        if($cuenta > 0){
            echo "La ecuación tiene dos soluciones: $positive_result y $negative_result";
        } elseif($cuenta < 0) {
            echo "La ecuación no tiene solución real";
        } else {
            $positive_result = number_format((-$b + $sqrt) / (2 * $a), 2);
            echo "La ecuación tiene una solucion: $positive_result";
        };
        
    } else {
        echo 'Introduce valores válidos';
    }
?>
</body>
</html>