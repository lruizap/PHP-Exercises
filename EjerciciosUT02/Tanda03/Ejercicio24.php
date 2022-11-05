<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio24</title>
</head>
<body>

  <h1>Ejercicio24</h1>
  <p>
    Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier para que los espacios tengan la misma anchura que los números.
<!-- 
Pirámide para N = 5

    1
   121
  12321
 1234321
123454321 -->
  </p>

<?php
          if (!isset($_POST['alturaIntroducida'])){
          ?>
            <h2>Pirámide de números</h2>
            <form action="Ejercicio24.php" method="post">
              Altura: <input type="number" name="alturaIntroducida" min="1" max="9" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $alturaIntroducida = $_POST['alturaIntroducida'];

            $altura = 1;
            $i = 0;
            $espacios = $alturaIntroducida-1;

            echo "<code>";
            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp";
              }

              // pinta la línea de números
              for ($i = 1; $i < $altura; $i++) {
                echo $i;
              }

              for ($i = $altura; $i > 0; $i--) {
                echo $i;
              }

              echo "<br>";

              $altura++;
              $espacios--;
            } // while
            echo "</code></p>";
          }
        ?>
        <br>
        <a href="Ejercicio24.php">>> Volver</a>

</body>
</html>