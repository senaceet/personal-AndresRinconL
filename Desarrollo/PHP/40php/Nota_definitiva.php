<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <form action="Nota_definitiva.php" method="POST">
        <h1>Nota Definitiva</h1>
        <p>ingrese su nota por favor</p>
        <input type="text" name="not1" value="">
        <p>ingrese su 2 nota</p>
        <input type="text" name="not2" value="">
        <p>ingrese su 3 nota</p>
        <input type="text" name="not3" value="">
        <p>ingrese su 4 nota</p>
        <input type="text" name="not4" value="">
        <p></p>
        <input type="submit" value="calcular"><br>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$nota1=$_POST['not1'];
$nota2=$_POST['not2'];
$nota3=$_POST['not3'];
$nota4=$_POST['not4'];
$op=(($nota1+$nota2+$nota3+$nota4)/4);
echo "Su nota final es: ".$op;
?>


    </form>
    
</body></center>
</html>