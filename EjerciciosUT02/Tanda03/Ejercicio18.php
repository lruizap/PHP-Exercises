<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejercicio18</title>
</head>
<body>

  <h1>Ejercicio18</h1>
  <p>
    Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos por teclado y validados como distintos, el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7.
  </p>

        <?php if (!isset($_POST['n1'])){?>
            <form action="Ejerciocio18.php" method="post">
              <input type="number" name="n1" autofocus=""><br>
              <input type="number" name="n2"><br>
              <input type="submit" value="Aceptar">
            </form>
            <?php
            } else {
              $n1 = $_POST['n1'];
              $n2 = $_POST['n2'];
              if ($n1 != $n2) {
                  if ($n1 > $n2) {
                    $aux = $n1;
                    $n1 = $n2;
                    $n2 = $aux;
                  }
                  for ($i = $n1; $i <= $n2; $i+=7) {
                    echo "$i  ";
                  }
                } else {
                  echo "Los números eran iguales, pruebe de nuevo";
              }
          }
        ?>
        <br><br>
        <a href="Ejercicio18.php">>> Volver</a>

</body>
</html>