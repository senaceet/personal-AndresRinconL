<!DOCTYPE html>
<html lang="ES">
<head>

<meta charset="UTF-8">
<title>Problema 20</title>
<body>
<form method="POST" action=""><br>
<h4>A continuacion ingrese la cantidad de dias trabajadas en numero entero: </h4><br>    
<input type="text" name="dias"><br>
<input type="submit" name="submit" value="Enviar">
</body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$dia=$_POST["dias"];
$sueldo=980.657;
$sueldoHora=$sueldo/$dia;

echo "<br>"."en ".$dia." dias le corresponden ".$sueldoHora." pesos";
?>
</head>
</html>