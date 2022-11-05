<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Ejercicio08</h1>
    <p>
        Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<code>&lt;table&gt;</code> en HTML).
    </p>

    <?php 
    
        if(!isset($_POST['n'])) {
            echo "Por favor, introduzca un número del 0 al 10";
            echo "<form action='Ejercicio08-2.php' method='post'>";
            echo "<input type='number' name='n' min='0' max='10'><br>";
            echo "<input type='submit' value='Aceptar'>";
            echo "</form>";
        }
        else {
            $n = $_POST['n'];
            echo "Tabla del $n<br>";
            echo "<table><br>";
            for ($i = 0; $i < 11; $i++) {
                echo "<tr><td>$n x $i = ".$n*$i."</td></tr>";
            }
            echo "</table>";
        }
    ?>

</body>
</html>