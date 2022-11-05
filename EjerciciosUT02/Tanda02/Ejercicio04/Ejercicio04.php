<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio04.php</title>
</head>
<body>

    <?php
        echo "Su salario semanal es ";

        $horas = $_POST['horas'];

        if($horas <= 40){
            echo $horas * 12, " €";
        }else {
            echo (40 * 12) + (($horas - 40) *16);
        }
    ?>
    <br><br>
    <a href="Ejercicio04.html">>> Volver</a>
</body>
</html>