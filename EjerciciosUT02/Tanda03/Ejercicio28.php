<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio28</title>
  </head>
  <body>
    <h1>Ejercicio28</h1>
    <p>
      Escribe un programa que calcule el factorial de un número entero leído por teclado.
    </p>
        <?php

          if (!isset($_POST['n'])){
          ?>
            Introduzca un número entero mayor que 1:
            <form action="Ejercicio28.php" method="post">
              <input type="number" name="n" min="0" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            $f = 1;

            for ($i = 2; $i <= $n; $i++) {
              $f *= $i;
              }
            echo "<br>El factorial de $n es $f.";
          } // else
        ?>
        <br><br>
        <a href="Ejercicio28.php">>> Volver</a>
  </body>
</html>