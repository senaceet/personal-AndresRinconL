<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aleatorio1000</title>
</head>
<body>
<?php
$valor = rand(1, 3);
echo "El valor sorteado es $valor<br>";
if ($valor==1) {
echo "Uno";}
elseif ($valor==2) {
    echo "Dos";
}if ($valor==3){
echo "Tres"; 
}


?>
</body>
</html>