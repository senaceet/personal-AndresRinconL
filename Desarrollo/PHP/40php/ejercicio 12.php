<html>
<head><title>Area del triángulo</title></head>
<body>
    <h3>¿Una habitación tiene 8 metros de largo y 4 de ancho, cual es el valor del área total de la habitación?</h3>
 </body>

 <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $largo = 8;
    $ancho = 4;
    $resultado = ($ancho * $largo) /2;
    echo "El resultado es: " .$resultado;
 ?>
 
 </html>