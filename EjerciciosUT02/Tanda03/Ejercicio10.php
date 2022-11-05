<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Ejercicio10</h1>
    <p>
        Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.
    </p>

        <?php
            if (!isset($_POST['n'])) {
            $n = 0;
            $total = 0;
            $cuentaNumeros = 0;
            } else {
            $n = $_POST['n'];
            $total = $_POST['total'];
            if ($n <= 0){
                $cuentaNumeros = $_POST['cuentaNumeros'] - 1;
            } else {
                $cuentaNumeros = $_POST['cuentaNumeros'];
            }
        }
            if ($n >= 0) {
                $total += $n;
                $cuentaNumeros++;
        ?>
            <form action="Ejercicio10.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
            </form>
        <?php
            } else {
            
                if ($cuentaNumeros == 0){
                echo '<br><br>No hay números suficientes';
                }else{?>
                <br><br>La media de los números introducidos es <?php echo $total / $cuentaNumeros; ?>
                <?php } ?>
                <br><br>
                
                <a href="Ejercicio10.php">>> Volver</a>
        <?php
            }
        ?>
</body>
</html>