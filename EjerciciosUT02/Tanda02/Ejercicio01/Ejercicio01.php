<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio01.php</title>
</head>
<body>

        <?php
            $dia = $_POST['dia'];

            switch($dia) {
                case "lunes":
                    echo "Desarrollo en Entorno Servidor";
                break;

                case "martes":
                    echo "Desarrollo de Interfaces Web";
                break;

                case "miércoles":
                    echo "Desarrollo en Entorno Servidor";
                break;

                case "jueves":
                    echo "Desarrollo en Entorno Servidor";
                break;

                case "viernes":
                    echo "Despliegue de Aplicaciones Web";
                break;

                case "sábado":
                    break;

                case "domingo":
                    echo "¡Ese día no hay clase!";
                break;

                default:
                    echo "El día introducido no es correcto.";
                break;
            }
?>
        <br><br>
        <a href="Ejercicio01.html">>> Volver</a>

</body>
</html>