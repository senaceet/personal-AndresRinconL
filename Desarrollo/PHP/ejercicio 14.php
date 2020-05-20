<html>
<head><title>Area del triángulo</title></head>
<body>
 </body>
 <form method="POST">
    Introduzca el radio: <br>
  <input type="text" name="radio"> <br>
    <input type=submit value="Resolver">
 </form>
 <br>

 <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $radio = $_POST['radio'];
    $Pi = 3.1416;
    $area = $Pi * pow($radio, 2);
    echo "El resultado es: " .$area;
 ?>
 
 </html>