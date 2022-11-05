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
        echo "El volumen del cono es ";
        $volumen = (1 / 3) * Math.pi() * $_POST['r'] * $_POST['r'] * $_POST['h'];
        echo round($volumen, $precision = 2), " cm<sup>2</sup>.";
    ?>
    <br><br>
    <a href="Ejercicio09.html">>> Volver</a>

</body>
</html>