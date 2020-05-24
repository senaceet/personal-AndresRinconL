<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="silver"> 

  <form method="post" action="ejercicio4.php" >
        Ingrese primer valor:
        <br>
        <input type="text" name="valor1">
        <br>
        <br>
        Ingrese segundo valor:
        <br>
        <input type="text" name="valor2">
        <br>
        <br>
        <input type="radio" name="radio" value="sumar"> sumar
        <br>        
        <input type="radio" name="radio" value="resta"> resta
        <br>
        <input type="radio" name="radio" value="multiplicar"> multiplicar
        <br>
        <input type="submit" value="continuar">
     </form>
    <?php
     echo print_r($_POST);
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
            error_reporting(E_ALL ^ E_NOTICE);
            if ($_REQUEST['radio']=="suma") {
                 $suma = $valor1+$valor2;
                 echo "resultado de la suma".$suma;
             } 
             else if ($_REQUEST['radio']=="resta") {
                $resta = $valor1-$valor2;
                echo "resultado de la suma".$resta;
            } 
            else if ($_REQUEST['radio']=="multiplicar") {
                $multiplicar = $valor1*$valor2;
                echo "resultado de la suma".$multiplicar;
            } 
            ?>
            
</body>
</html>