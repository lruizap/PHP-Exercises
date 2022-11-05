<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Ejercicio09</h1>
    <p>
        Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.
    </p>

<?php if(!isset($_GET['n'])): ?>

    <form action="Ejercicio09.php" method="get">
        <p>Introduce un número</p>
        <input type="number" name="n" id="n">
        <input type="submit" value="Aceptar">
    </form>

<?php else:?>
    <?php 
        $numero = $_GET['n'];
        $numeroIntroducido = $numero;
        $numeroDeDigitos = 0;

        while ($numero > 0) {
            $numero = floor($numero / 10);
            $numeroDeDigitos++;
            }

        echo "$numeroIntroducido tiene $numeroDeDigitos dígito/s.";
        ?>
        <br><br>
        <a href="Ejercicio09.php">>> Volver</a>

    <?php endif; ?>


</body>
</html>