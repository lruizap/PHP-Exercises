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

    $euros = $_GET['euros'];
    $pesetas = $euros * 166.386;
    echo "$pesetas pesetas";

?>

</body>
</html>