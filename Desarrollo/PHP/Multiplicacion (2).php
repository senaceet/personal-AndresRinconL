<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <form action="Multiplicacion.php" method="POST">
        <h1>Multiplicacion</h1>
        <p>Ingrese los numeros por favor</p>
        <input type="text" name="num1" value=""><br>
        <p></p>
        <input type="text" name="num2" value=""><br>
        <p></p>
        <input type="submit" value="Calcular"><br>
    <?php
    $numero1=$_POST['num1'];
    $numero2=$_POST['num2'];
    if((!empty($_POST['num1']&&$_POST['num2']))){
        echo "";
    }else{
        echo "por favor ingrese los numeros";
    }
    $result=$numero1*$numero2;
    echo "su resultado es: ".$result;

    ?>
    </form>
    
</body></center>
</html>