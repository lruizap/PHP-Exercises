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
      $n = 0;
      $numeros = array();
    } else {
      $n = $_GET['n'];
      $numeros = explode(" ",$_GET['arrayNumeros']);
      array_push($numeros, $n);
    } ?>
    <form action="Ejercicio02.php" method="get">
      Introduzca un número:
      <input type="number" name ="n" autofocus>
      <input type="hidden" name="arrayNumeros" value="<?=trim(implode(" ",$numeros))?>">
      <input type="submit" value="OK">
    </form>

    <?php 
      if(count($numeros) == 10){
      echo "Los números son: ";
      for ($i=0; $i < count($numeros); $i++) { 
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