<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
    <center><h2>Un plan de datos al mes bien económico cuesta $35.000, en un 1 año de
servicios con el valor del IVA del 19%, realmente cuanto pago en impuesto y
cual es total facturado por ese año.</h2></center>
</body>
<?php
$valor1 = (35000*19)/100;
$valor2 = 35000*12;
$valor3 = ($valor1+35000)*12;
$valor4 = $valor3-$valor2;
 echo "<h3>"."El valor en impuestos es: ".$valor4."</h3>"."<br>";
 echo "<h3>"."El valor facturado al añor sin impuestos es: ".$valor2."</h3>"."<br>";
 echo "<h3>"."El valor facturado al año con impuestos es: ".$valor3."</h3>";

?>
</html>