<html>
<head>
<title>Valoraleatorio</title>
</head>
<body>
<?php
$valor = rand(1, 10);
echo "El valor sorteado es $valor<br>";
if ($valor <= 10) {
echo "Es menor o igual a 10";
} else {
echo "Es mayor a 1";
}
?>
</body>