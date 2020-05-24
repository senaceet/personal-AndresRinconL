<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <form action="Resta.php" method="POST">
        <h1>Resta</h1>
        <p>ingrese un numero</p>
        <input type="text" name="num1" value="">
        <p>ingrese un numero</p>
        <input type="text" name="num2" value="">
        <br>
        <input type="submit" value="calcular"><br>
<?php
$numero1=$_POST['num1'];
$numero2=$_POST['num2'];
if(!empty($_POST['num1'])){
    echo "";
}else{
    echo "por favor ingrese los numeros";
}if(!empty($_POST['num2'])){
    echo "";
}else{
    echo "";
}
$result=$numero1-$numero2;
echo "Su resultado es: ".$result;
?>

    
    </form>
    
</body></center>
</html>