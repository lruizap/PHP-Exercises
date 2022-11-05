<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio02</title>
</head>
<body>

  <h1>Ejercicio02</h1>
  <p>Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.</p>

  <?php 

    if(!isset($_GET['n'])){
      $n = "";
      $numeros = array();
    } else {
      $n = $_GET['n'];
      $numeros = explode(" ",$_GET['arrayNumeros']);
    } ?>
    <form action="Ejercicio02.php" method="get">
      Introduzca un número:
      <input type="number" name ="n" autofocus>
      <input type="hidden" name="arrayNumeros" value="<?= implode(" ",$numeros)." ".$n?>">
      <input type="submit" value="OK">
    </form>

    <?php 
      if(count($numeros) == 10){
      array_shift($numeros);
      echo "<pre>";
      print_r($numeros);
      echo "</pre>";
      echo "Los números son: ";
      for ($i=0; $i < 10; $i++) { 
        echo $numeros[$i]. " ";
      }
      echo "<br>";
      echo "El mayor es: ".max($numeros);
      echo "<br>";
      echo "El menor es: ".min($numeros);
    }
    ?>
        <br>
        <a href="Ejercicio02.php">>> Volver</a>
</body>
</html>