<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio03</h1>
  <p>Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente, muestra el contenido del array.

</p>


  <?php 

    if(!isset($_GET['n'])){
      $n = 0;
      $numeros = array();
    } else {
      $n = $_GET['n'];
      $numeros = explode(" ",$_GET['arrayNumeros']);
      array_push($numeros, $n);
    } ?>
    <form action="Ejercicio03.php" method="get">
      Introduzca un número:
      <input type="number" name ="n" autofocus>
      <input type="hidden" name="arrayNumeros" value="<?=trim(implode(" ",$numeros))?>">
      <input type="submit" value="OK">
    </form>

    <?php 
      if(count($numeros) == 15){
      echo "Los números son: ";
      $arrayNuevo = [];

      for ($k=0; $k < 15; $k++) { 
        echo $numeros[$k]." ";
      }

      echo "</br>";

      array_move_rigth($numeros);

      echo "Los nuevos números son: ";
      for ($j=0; $j < 15; $j++) { 
        echo $numeros[$j]." ";
      }
    }
    ?>
        <br>
        <a href="Ejercicio03.php">>> Volver</a>

    <?php
    # Se le pone & porque pasa por referencia el dato, es decir, para hacer referencia a una variable exterior a la función. Así cuando le pasemos la variable lo que tenemos que modificar es la variable de fuera

      function array_move_rigth(&$array)
      {
        $last = array_pop($array);
        array_unshift($array, $last);
      }
    
    ?>

</body>
</html>