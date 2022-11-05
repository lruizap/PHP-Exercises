<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio08</h1>
  <p>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar el array resultante. Por ejemplo:</p>

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
    <form action="Ejercicio08.php" method="get">
      Numero: <input type="number" name ="numero" required="" autofocus>
      <input type="hidden" name="numeroTexto" value="<?= trim(implode(" ", $numeros))?>">
      <input type="submit" value="OK"> <br> <br> <br>
  </form>

  <?php
  
  if(count($numeros) == 10){
    EscribeArray($numeros);
    # Lo puedo tratar como un array porqueedevuelve uno
    EscribeArray(arrayprimos($numeros));
  }
  
  function EscribeArray($numeros){
        echo "Array original:<br>";
        echo "<table style='border:solid;black;5px'><tr>";
        for ($i = 0; $i < 10; $i++) {
          echo "<td style='border:solid;black;1px'>$i</td>";
        }
        echo "</tr>";

        // Contenido
        for ($i = 0; $i < 10; $i++) {
          echo "<td style='border:solid;black;1px'>".$numeros[$i]."</td>";
        }
        echo "</tr></table>";
  }

  function esPrimo($numero){
    if(!is_numeric($numero))
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo 🙁
            return false;

        }

    }

    // Es primo 🙂
    return true;
}

  function arrayPrimos($numeros){
    $noPrimos = array();
    $Primos = array();

    for($i = 0; $i < 10; $i++){
      if(esPrimo($numeros[$i])){
        array_push($Primos, $numeros[$i]);
      } else {
        array_push($noPrimos, $numeros[$i]);
      }
    }

    $numeros = array();
    
    for($i = 0; $i < count($Primos); $i++){
      array_push($numeros, $Primos[$i]);
    }
    for($i = 0; $i < count($noPrimos); $i++){
      array_push($numeros, $noPrimos[$i]);
    }

    return $numeros;
  }

  ?>
        <br><br><br>
        <a href="Ejercicio08.php">>> Volver</a>

</body>
</html>