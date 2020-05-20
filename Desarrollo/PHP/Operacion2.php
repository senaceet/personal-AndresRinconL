<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <form action="Operacion2.php">
        <h1>Solucion de la operacion (((500 / 2)*8)-15) </h1><br>
<?php
$a=500;
$b=2;
$c=8;
$d=15;
$op=((($a/$b)*$c)-$d);
echo "El resultado es: ".$op;
?>
    </form>
    
</body></center>
</html>