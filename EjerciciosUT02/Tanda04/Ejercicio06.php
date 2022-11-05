<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio06</h1>
  <p>Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los pares de un color y los impares de otro.

</p>

<?php

  if(!isset($_GET['numero'])){
    $numero = 0;
    $numeros = array();
  } else {
    $numero = $_GET['numero'];
    $numeros = explode(" ", $_GET['numeroTexto']);
    
    if(!empty($numero)){
      array_push($numeros, $numero);
    } else{
      array_push($numeros, 0);
    }
    
  }
?>
  <br><br>
    <form action="Ejercicio06.php" method="get">
      Numero: <input type="number" name ="numero" required="" autofocus>
      <input type="hidden" name="numeroTexto" value="<?= trim(implode(" ", $numeros))?>">
      <input type="submit" value="OK">
  </form>

  <?php
  
  if(count($numeros) == 8){
    echo "<p style='font-size:60px'>Los números son: ";
    for ($i=0; $i < count($numeros); $i++) { 
      $valor = (int)$numeros[$i];
      if($valor % 2 == 0){
        echo "<span style='color:green;'>".$valor."</span> ";
      } else {
        echo "<span style='color:blue;'>".$valor."</span> ";
      }
    }
    echo "</p>";
  }
  
  ?>
        <br><br><br>
        <a href="Ejercicio06.php">>> Volver</a>
</body>
</html>