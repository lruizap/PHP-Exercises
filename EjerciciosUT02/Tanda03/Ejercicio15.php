<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio15</title>
</head>
<body>

  <h1>Ejercicio15</h1>
  <p>Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y el 5, se deberán mostrar 2<sup>1</sup>, 2<sup>2</sup>, 2<sup>3</sup>, 2<sup>4</sup>, 2<sup>5</sup>.</p>

  <?php if(!isset($_GET['base'])&&!isset($_GET['exp'])): ?>
        <form action="Ejercicio15.php" method='get'>
        <p>Introduce una base y un exponente</p>
        <input type="number" name="base" autofocus>
        <input type="number" name="exp" autofocus>
        <input type="submit" value="Aceptar">
    </form>
  <?php else: 
    $base = $_GET["base"];
    $exponente = $_GET["exp"];
    if($exponente < 0 || is_float($exponente)){

      echo "El exponente debe ser un número entero y positivo";
      echo '<br><a href="Ejercicio15.php">>> Volver</a>';

    }else {
      if($exponente == 0){
        $potencia = 1;
      }else {
        for($i = 0; $i <= $exponente; $i++){
          $potencia = $base ** $i;
        echo "La potencia $i es = $potencia </br>";
        }
      }
      echo '<br><a href="Ejercicio15.php">>> Volver</a>';
    }
  ?>

  <?php endif; ?>

</body>
</html>