<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
<form name= "Notas estudiante" method="post" action=" promedio.php" >
 <p>Ingrese una nota</p>
 <input type="text" id="campo1" name="campo1" placeholders="Inserta una nota"/> <br>
 <p>Ingrese una nota</p>
 <input type="text" id="campo2" name="campo2" placeholders="Inserta una nota"/> <br>
 <p>Ingrese una nota</p>
 <input type="text" id="campo3" name="campo3" placeholders="Inserta una nota"/>
 <input type="submit" value="promedio"/>
</form>
 <?php
  //error_reporting(E_ALL ^ E_NOTICE);
 if (isset($_POST['campo1']) || isset($_POST['campo2']) || isset($_POST['campo3'])) {
  $campo1= $_POST['campo1'];
  $campo2= $_POST['campo2'];
  $campo3= $_POST['campo3'];
  $resultado =($campo1+$campo2+$campo3)/3;
  echo "el promedio del estudiante es: ".$resultado;
 }
  
 ?>   
</body>
</html>