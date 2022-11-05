<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Ejercicio11</h1>
    <p>
        Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado.
    </p>

<?php if(!isset($_POST['n'])):?>
    <form action="Ejercicio11.php" method='post'>
        <p>Introduce un número entero</p>
        <input type="number" name="n" autofocus>
        <input type="submit" value="Aceptar">
    </form>
<?php else : {
        $n = $_POST['n'];
        echo "<table><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
        for ($i = $n; $i < $n + 5; $i++) {
            echo "<tr><td>$i</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
        }
        echo "</table>";
        echo '<br><a href="Ejercicio11.php">>> Volver</a>';
}?>
<?php endif;?>
</body>
</html>