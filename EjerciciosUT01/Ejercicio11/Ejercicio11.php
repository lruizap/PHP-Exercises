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

    $lvl1 = "    *<br />";
    $lvl2 = "   *&nbsp;*<br />";
    $lvl3 = "  *&nbsp&nbsp;&nbsp;*<br />";
    $lvl4 = " *&nbsp;&nbsp&nbsp;&nbsp;&nbsp;*<br />";
    $lvl5 = "*&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;*<br />";

    echo "<div align='center'>";
    echo $lvl1;
    echo $lvl2;
    echo $lvl3;
    echo $lvl4;
    echo $lvl5;
    echo "</div>";

?>

</body>
</html>