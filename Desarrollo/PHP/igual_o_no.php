 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>calcular</title>
</head>
	<body>
		<form name= "variables" method="post" action="igual_o_no.php" >
		 <p>Ingrese un numero</p>
		 <input type="text" id="campo1" name="campo1" placeholders="Inserta un numero"/> <br>
		 <p>Ingrese un numero</p>
		 <input type="text" id="campo2" name="campo2" placeholders="Inserta un numero"/> <br>
		  <input type="submit" value="calcular"/>
		</form>	 
	</body>
	 <?php
	 error_reporting(E_ALL ^ E_NOTICE);
	 
	 //function alerta($message) {  echo "<script>alert('$message');</script>"; }
	 
	 $x= $_POST['campo1'];
	 $y= $_POST['campo2'];
	   
      if ($x==$y) {
		//alerta( "numeros iguales, intentelo nuevamente");
		echo "numeros iguales, intentelo nuevamente";
      }elseif($x>$y){
		  //alerta("El numero: ".$x." es mayor");
		  echo "El numero: ".$x." es mayor";
      } else{
		  //alerta("El numero: ".$y." es mayor");
		  echo "El numero: ".$y." es mayor";
      }


				

	 ?>   
 
</html>
 
 
 
 
