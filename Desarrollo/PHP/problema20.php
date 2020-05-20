<!DOCTYPE html>
<html lang="ES">
<head>

<meta charset="UTF-8">
<title>Problema 20</title>
<body>
<form method="POST" action=""><br>
<h4>A continuacion ingrese la cantidad de horas trabajadas en numero entero: </h4><br>    
<input type="text" name="horas"><br>
<input type="submit" name="submit" value="Enviar">
</body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$Horas=$_POST["horas"];
$sueldo=980.657;
$sueldoHora=$sueldo/$Horas;

echo "<br>"."en ".$Horas." horas le corresponden ".$sueldoHora." pesos";
?>
</head>
</html>