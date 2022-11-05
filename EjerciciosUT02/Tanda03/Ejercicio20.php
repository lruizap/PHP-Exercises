<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio20</title>
</head>
<body>

  <h1>Ejercicio20</h1>
  <p>Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.</p>

        <?php
          if (!isset($_POST['alturaIntroducida'])){
          ?>
          <h2>Pirámide</h2>
          <form action="Ejercicio20.php" method="post">
            Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""><br>
            Figura base:
            <select name="figura">
                <option value="bolita">Bolita</option>
                <option value="ladrillo">Ladrillo</option>
                <option value="pinguino">Pingüino</option>
                <option value="sol">Sol</option>
            </select>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else { // pinta la pirámide //////////////////////////////
            $alturaIntroducida = $_POST['alturaIntroducida'];
            $figura = $_POST['figura'];
            $altura = 1;
            $espacios = $alturaIntroducida - 1;
            $espaciosInternos = 0;
            switch ($figura) {
              case 'bolita':
                $glifo = "•";
                break;
              case 'ladrillo':
                $glifo = "#";
                break;
              case 'pinguino':
                $glifo = "Å";
                break;
              case 'sol':
                $glifo = "*";
                break;
            }

            echo "<code>";
            while ($altura < $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp;";
              }

              // pinta la línea
              echo "$glifo";
              for ($i = 1; $i < $espaciosInternos; $i++) {
                echo "&nbsp;";
              }

              if ($altura > 1) {
                echo "$glifo";
              }

              echo "<br>";

              $altura++;
              $espacios--;
              $espaciosInternos += 2;
            }
            for ($i = 1; $i < $altura * 2; $i++) {
              echo "$glifo";
            }
          }
          echo "</code>";
          ?>
          <br><br>
          <a href="Ejercicio20.php">>> Volver</a>

</body>
</html>