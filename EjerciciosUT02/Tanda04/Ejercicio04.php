<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

  <h1>Ejercicio04</h1>
  <p>
    Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un color diferente.
  </p>

<?php
  if (!isset($_GET['numeroTexto'])) {
    // Genera el array aleatorio
    for ($i = 0; $i < 100; $i++) {
        $numero[$i] = rand(0, 20);
        echo $numero[$i]." ";
    }

    $numeroTexto = implode(" ", $numero);
    ?>
    <br><br>
    <form action="Ejercicio04.php" method="get">
      Valor a sustituir: <input type="number" name ="viejo" autofocus="" required=""><br>
      Valor nuevo: <input type="number" name ="nuevo" required="">
      <input type="hidden" name="numeroTexto" value="<?= $numeroTexto; ?>">
      <input type="submit" value="OK">
    </form>
    <?php
  } else {
    $numeroTexto = $_GET['numeroTexto'];
    $viejo = $_GET['viejo'];
    $nuevo = $_GET['nuevo'];

    $numero = explode(" ", $numeroTexto);

    foreach ($numero as $n) {
      if ($n == $viejo) {
        echo "<span style=\"color: green; font-weight: bold;\">$nuevo</span> ";
      } else {
        echo  "$n ";
      }
    }
    ?>
    <br><br>
    <a href="Ejercicio04.php">>> Volver</a>
    <?php
  } ?>

</body>
</html>