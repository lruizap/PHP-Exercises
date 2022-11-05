<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio17</title>
</head>
<body>

  <h1>Ejercicio17</h1>
  <p>Realiza un programa que sume los 100 números siguientes a un número entero y positivo introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número positivo).</p>

<?php if(!isset($_POST['n'])):?>
  <form action="Ejercicio17.php" method='post'>
    <p>Introduce un número positivo</p>
    <input type="number" name="n" autofocus>
    <input type="submit" value="Aceptar">
  </form>
<?php else: 
    $num = $_POST['n'];
    if($num < 0 || is_float($num)){

      echo "El número debe ser entero y positivo";
      echo '<br><a href="Ejercicio17.php">>> Volver</a>';

    }else {
        for($i = $num; $i <= $num+100; $i++){
        echo "$i ";
        }
    }
    echo '<br><a href="Ejercicio17.php">>> Volver</a>';
  ?>

  <?php endif; ?>
</body>
</html>