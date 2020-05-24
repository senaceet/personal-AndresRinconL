<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <form action="Decimales.php" method="POST">
        <h1>Operacion con decimales</h1>
        <p>ingrese un numero </p>
        <input type="text" name="num1" value="">
        <p>ingrese un numero </p>
        <input type="text " name="num2" value="">
        <p></p>
        <input type="submit" value="calcular"><br>
<?php
$numero1=$_POST['num1'];
$numero2=$_POST['num2'];
if($numero1==$numero2){
    echo "sus numeros son iguales";
}else if($numero1>$numero2){
    echo "El numero mayor es: ".$numero1."<br>";
    echo " El numero menor es: ".$numero2;

}else{
    echo "El numero mayor es: ".$numero2."<br>";
    echo " El numero menor es: ".$numero1;
}
?>

    </form>
</body></center>
</html>