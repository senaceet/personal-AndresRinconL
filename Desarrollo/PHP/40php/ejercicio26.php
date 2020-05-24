<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
<center><h2>Una persona sale de Bogota para la Guajira, llegara a la ciudad de Riohacha,
el recorrido total en su carro son 1100 Km, ¿si el galón de la gasolina hoy
vale $8500 cuantos galones de gasolina consume el vehículo en todo el
recurrido?, tenga en cuenta que a ese viaje hay que sumarle 12 peajes en
promedio de $11.000 cada uno, ¿luego el dinero total en los gastos de ida
más los gastos de vuelta son?</h2></center>
<?php
$valor1 = 1100/34;
$valor2 = 34*8500;
$valor3 = 11000*12;
$valor4 = $valor2+$valor3;
$valor5 = $valor4+$valor4;
 echo "<h3>"."La cantidad de galones consumidos es 34"."<br>";
 echo "<h3>"."El valor de los 34 galones es: ".$valor2."</h3>"."<br>";
 echo "<h3>"."El valor de los 12 peajes es: ".$valor3."</h3>";
 echo "<h3>"."El valor total de ida es: ".$valor4."</h3>";
 echo "<h3>"."El valor de gastos de ida y vuelta es: ".$valor5."</h3>";

?>   
</body>
</html>