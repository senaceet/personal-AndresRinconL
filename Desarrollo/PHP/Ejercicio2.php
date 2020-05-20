<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = "SILVER">
&nbsp; 
<?php
$cadena1 = "David Andres Rincon Lopez"; //string
$tipdoc = "C.C"; //string
$identificacion = 1012422621; // integer
$sexo = "M"; //string
$cargo = "Analista Desarrollador"; //string
$fecha = date("m.d.y"); //date
$estado = true; //booleano
if ($estado){
    $estado = "Si";
}else{
    $estado = "No";
}
$observacion = "Siento que hizo falta una explicacion un poco más detallada de php ya que no pude usar
todas las variables porque no las senti necesarias."; //string

echo "<center>"."NOMBRES Y APELLIDOS: " .$cadena1."<br>"."TIPO DOCUMENTO: ".$tipdoc."<br>"
."NUMERO DOCUMENTO: ".$identificacion."<br>"."SEXO: ".$sexo."<br>"."CARGO ANHELADO: ".$cargo."<br>".
"FECHA: ".$fecha."<br>"."ESTA ENTENDIENDO: ".$estado."<br>"."OBSERVACIONES: ".$observacion."</center>";
?>

</body>
</html>