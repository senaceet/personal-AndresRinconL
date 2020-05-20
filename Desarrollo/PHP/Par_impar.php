<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
    <h1>Numeros par e impar</h1>
<?php
for ($i=0; $i <=20; $i++) {
    if($i%2==1){
        echo "Este numero es impar: ".$i."<br>";
    }else{
        echo "Este numero es par: ".$i."<br>";
    }

}

?>
    
</body></center>
</html>