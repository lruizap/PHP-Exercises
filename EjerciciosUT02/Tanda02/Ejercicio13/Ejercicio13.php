<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

          // ordenación de los dos primeros números
        if ($a < $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

          // ordenación de los dos últimos números
        if ($b < $c) {
            $aux = $b;
            $b = $c;
            $c = $aux;
        }

          // se vuelven a ordenar los dos primeros
        if ($a < $b) {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

        echo "Los números introducidos ordenados de mayor a menor son $a, $b y $c.";
    ?>
    <br><br>
    <a href="Ejercicio13.html">>> Volver</a>

</body>
</html>