<html>
<head><title>Area del triángulo</title></head>
<body>
 </body>
 <form method="POST">
    Introduzca el valor de la base del rectangulo: <br>
  <input type="text" name="base"> <br>
    Introduzca el valor de la altura del rectangulo: <br>
  <input type="text" name="altura"> <br> 
    <input type=submit value="Resolver">
 </form>
 <br>

 <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $resultado = ($base * $altura);
    echo "El resultado es: " .$resultado;
 ?>
 
 </html>