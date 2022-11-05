<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio25</title>
</head>
<body>

  <h1>Ejercicio25</h1>
  <p>
    Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.
  </p>
      <?php
        if (!isset($_POST['n'])){
        ?>
        Por favor, introduzca un número entero:
        <form action="Ejercicio25.php" method="post">
          <input type="number" name="n" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
          $n = $_POST['n'];
          $volteado = 0;

          $numero = abs($n);

          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
          } // while
          if ($n <0){
            $volteado = -$volteado;
          }
          echo "Si le damos la vuelta al $n tenemos el $volteado";
        }
        ?>
        <br><br>
        <a href="Ejercicio25.php">>> Volver</a>

</body>
</html>