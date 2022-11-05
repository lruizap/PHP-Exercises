<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

    <h1>Ejercicio12</h1>
    <p>
        Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe introducir por teclado.
    </p>

<?php if(!isset($_POST['n'])):?>
    <form action="Ejercicio12.php" method='post'>
        <p>Introduce un número entero</p>
        <input type="number" name="n" autofocus>
        <input type="submit" value="Aceptar">
    </form>
<?php else : {
        $n = $_POST['n'];
        function fibonacci($n)
        {
            $fibonacci  = [0,1];
        
            for($i=2;$i<=$n;$i++)
                {
                    $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
                }
                echo $fibonacci[$n];
        }
        
        fibonacci($n);
        echo '<br><a href="Ejercicio12.php">>> Volver</a>';
}?>
<?php endif;?>
</body>
</html>