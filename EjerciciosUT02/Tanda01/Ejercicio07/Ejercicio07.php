<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio07.php</title>
</head>
<body>

    <h1>Ejercicio07.php</h1>

    <?php
        echo "El total de la factura es ";
        echo round($_POST['baseImponible'] * 1.21, 2), " €.";
    ?>
    <br><br>
    <a href="Ejercicio07.html">>> Volver</a>

</body>
</html>