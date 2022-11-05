<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio14</title>
</head>
<body>
  
  <h1>Ejercicio 14</h1>

  <p>Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.</p>

  <?php if(!isset($_GET['base'])&&!isset($_GET['exp'])): ?>
        <form action="Ejercicio14.php" method='get'>
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
      echo '<br><a href="Ejercicio14.php">>> Volver</a>';

    }else {
      if($exponente == 0){
        $potencia = 1;
      }else {
        $potencia = $base ** $exponente;
      }
      echo "La potencia es = $potencia";
      echo '<br><a href="Ejercicio14.php">>> Volver</a>';
    }
  ?>

  <?php endif; ?>

</body>
</html>