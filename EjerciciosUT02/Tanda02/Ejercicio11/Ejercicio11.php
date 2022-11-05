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
        $minuto = $_POST['minuto'];

        $segundosTranscurridos = ($hora * 3600) + ($minuto * 60);
        $segundosHastaMedianoche = (24 * 3600) - $segundosTranscurridos;
        echo "Desde las " . date('h:i', mktime($hora, $minuto)) ." hasta la medianoche faltan ";
        echo "$segundosHastaMedianoche segundos.";
    ?>
    <br><br>
    <a href="Ejercicio11.php">>> Volver</a>

</body>
</html>