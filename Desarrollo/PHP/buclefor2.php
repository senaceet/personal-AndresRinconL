<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle For</title>
</head>
<body>
  <center><h2>BUCLE FOR</h2></center>
    <?php
    $suma = 0;
    for($i=0; $i <=10; $i++){
     echo $i." ";
     $suma += $i;
    }
    
    echo "<br>","El resultado es: ",$suma;
    ?>
</body>
</html>