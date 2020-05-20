<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aleatorio1000</title>
</head>
<body>
<?php
$valor = rand(1, 1000);
echo "El valor sorteado es $valor<br>";
if ($carac=strlen($valor)) {
echo "el número tiene: ".$carac." de digitos";
} 
?>
</body>
</html>