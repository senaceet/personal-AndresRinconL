<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <form action="Operacion.php" method="POST">
        <h1>Solucion de la operacion ((20+40)-10*5)  </h1>
<?php   
$a=20;
$b=40;
$c=10;
$d=5;
$op=(($a+$b)-$c*$d);
echo "El resultado es: ".$op;
?>

    </form>
    
</body></center>
</html>