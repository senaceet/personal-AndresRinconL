<!DOCTYPE html>
<html lang="ES">
<head>

<meta charset="UTF-8">
<title>Problem 18</title>
<body>
<form method="POST" action=""><br>
<h4>A continuacion ingrese la cantidad de metros en numero entero: </h4><br>    
<input type="text" name="Metros"><br>
<input type="submit" name="submit" value="transformar">
</body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$Metros=$_POST["Metros"];
$cm=100;
$metro=$cm;
$resultado=$Metros*$metro;
echo "<br>"."en ".$Metros."m caben ".$resultado."cm";
?>
</head>
</html>