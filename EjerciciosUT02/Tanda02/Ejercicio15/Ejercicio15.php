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
            $puntos = 0;

            foreach($_POST as $respuesta) {
            $puntos += $respuesta;
        }

          // Muestra el resultado del test

        if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! Tu pareja parece ser totalmente fiel.";
        }
        elseif ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, ";
            echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
        }
        else
        {
            echo "Tu pareja tiene todos los ingredientes de estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
            echo "y averigües qué es lo que está pasando por su cabeza.";
        }

        ?>
        <br><br>
        <a href="Ejercicio15.html">>> Volver</a>

</body>
</html>