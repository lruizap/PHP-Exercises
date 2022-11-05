<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio05</h1>
  <p>
    Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras del diagrama se pueden dibujar a base de la concatenación de una imagen.
  </p>

<?php

  if(!isset($_GET['temperatura'])){
      $mes = array(
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    ?>
    Por favor, introduzca la temperatura media de cada mes: <br><br>
    <form action="Ejercicio05.php" method="get">
      <?php
      echo "<table>";
      for ($i = 0; $i < 12; $i++) {
        echo "<tr><td>$mes[$i]</td><td> <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br></td></tr>";
      }
      echo "</table><br>";
      ?>
      <input type="submit" value="OK">

    </form>

    <?php
  } else {
    // Pinta el diagrama de barras
    $temperatura = $_GET['temperatura'];
    echo "<table>";
    foreach($temperatura as $mes => $temperaturaMes) {
      echo "<tr><td>$mes </td><td>";
      // Pinta la barra
      for ($i = 0; $i < $temperaturaMes; $i++) {
        echo "<p style='width:10px; height:10px; background:green; display:inline-block; margin:0px; padding:0px'></p>";
      }
      echo " $temperaturaMes"."ºC<br></td></tr>";
    }
    echo "</table>";
    ?>
    <br>
    <a href="Ejercicio05.php">>> Volver</a>
    <?php
  }
  ?>
</body>
</html>