<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <h1>Cuál es el valor de 1 hora de trabajo </h1>
<?php
$sm=880.000;
$h=60;
$d=8;
$op= $sm/($h*$d);
$op=bcdiv($op, '1', 3);
echo "El valor de una hora de trabajo es: ".$op." pesos";
?>

</body></center>
</html>