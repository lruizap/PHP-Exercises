<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio03.php</title>
</head>
<body>

<?php

    $dia = $_POST['dia'];

            switch($dia) {
                case "1":
                    echo "Lunes";
                break;

                case "2":
                    echo "Martes";
                break;

                case "3":
                    echo "Miércoles";
                break;

                case "4":
                    echo "Jueves";
                break;

                case "5":
                    echo "Viernes";
                break;

                case "6":
                    echo "Sábado";
                    break;

                case "7":
                    echo "Domingo";
                break;

                default:
                    echo "El día introducido no es correcto.";
                break;
            }

?>
        <br><br>
        <a href="Ejercicio03.html">>> Volver</a>
</body>
</html>