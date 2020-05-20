<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>BUCLE DO WHILE</h2></center>

    <?php
    $contador = 0;
    $i = 1; 
    do {
        $par = 10*$i;
        echo "10"," x ".$i." = ".$par,"<br>";
        $contador =$contador+1;
        $i = $i+1;
    } while ($i <10);
    echo "Multiplos de 10";
     
    ?>
</body>
</html>