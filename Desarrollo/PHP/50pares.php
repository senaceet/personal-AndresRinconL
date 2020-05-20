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
    $i = 0; 
    do {
        $divi = 2*$i;
        echo $divi."<br>" ;
        $contador =$contador+1;
        $i = $i+1;
    } while ($i <21);   
     
    ?>
</body>
</html>