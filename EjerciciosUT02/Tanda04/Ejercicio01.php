<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio01</title>
</head>
<body>

  <h1>Ejercicio01</h1>
  <p>
    Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas.
  </p>

    <?php
      $numero = [];
      for ($i = 0; $i < 20; $i++) {
          array_push($numero, rand(0,100));
          // array_push($array, contenido) AND $array[] = contenido => Son lo mismo.
      }

      foreach ($numero as $elemento) {
          $cuadrado[] = $elemento * $elemento;
          $cubo[] = $elemento * $elemento * $elemento;
      }

    ?>
      <table>
      <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
    <?php
      for ($i = 0; $i < 20; $i++) {
          echo "<tr><td>".$numero[$i]."</td>";
          echo "<td>".$cuadrado[$i]."</td>";
          echo "<td>".$cubo[$i]."</td></tr>";
      }
    ?>
      </table>

</body>
</html>