<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio07</h1>
  <p>
    Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares si es necesario.
  </p>

<?php

  if(!isset($_GET['arrayAleatorio'])){
    $numeros = array();
    echo "<p style='font-size:30px'>Los números son: ";
      for ($i = 0; $i < 20; $i++) {
        array_push($numeros,rand(0, 100));
        echo $numeros[$i]." ";
    }
    echo "</p>";
  } else {
    $numeros = explode(" ", $_GET['arrayAleatorio']);
  }
  ?>
    <form action="Ejercicio07.php" method="get">
      <input type="hidden" name="numeroTexto" value="<?= trim(implode(" ", $numeros)); ?>">
    </form>

  <?php 
    $arrayPares = array();
    $arrayImpares = array();
    for ($i=0; $i < count($numeros); $i++) { 
      $valor = (int)$numeros[$i];
        if($valor % 2 == 0){
          array_push($arrayPares, $valor);
        }else {
          array_push($arrayImpares, $valor);
        }
    }
    $numeros = array();
    sort($arrayImpares);
    sort($arrayPares);

    for ($i=0; $i <count($arrayPares) ; $i++) { 
      array_push($numeros, $arrayPares[$i]);
    }

        for ($i=0; $i <count($arrayImpares) ; $i++) { 
      array_push($numeros, $arrayImpares[$i]);
    }

    echo "<p style='font-size:30px'>Los números son: ";
      for ($i = 0; $i < count($numeros); $i++) {
        echo $numeros[$i]." ";
    }
    echo "</p>";
  ?>

</body>
</html>