<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>calcular</title>
</head>
<body>
<form name= "variables" method="post" action=" igual_o_no.php" >
 <p>Ingrese un numero</p>
 <input type="text" id="campo1" name="campo1" placeholders="Inserta un numero"/> <br>
 <p>Ingrese un numero</p>
 <input type="text" id="campo2" name="campo2" placeholders="Inserta un numero"/> <br>
  <input type="submit" value="calcular"/>
</form>
 <?php
 error_reporting(E_ALL ^ E_NOTICE);
 $campo1= $_POST['campo1'];
 $campo2= $_POST['campo2'];
   
 
     if ($campo1==$campo2) {
     echo "numeros igueles, intentelo nuevamente"."<br>";
      }elseif ($campo1!=$campo2){
      }if($campo1>$campo2){
          echo"El numero: ".$campo1." es mayor";
      } else{
          echo"el numero: ".$campo2." es mayor";
      }
  

 ?>   
</body>
</html>