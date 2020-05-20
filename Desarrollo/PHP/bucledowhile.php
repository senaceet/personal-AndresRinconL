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
        $par = 2*$i;
        echo $par," ";
        $contador =$contador+1;
        $i = $i+1;
    } while ($i <20);
    echo "<br>"."Total Números es: "."<strong>".$contador;
    ?>
</body>
</html>