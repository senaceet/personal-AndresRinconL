<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle While</title>
</head>
<body>
<center><h2>BUCLE WHILE</h2></center>
<?php
$int = rand(1,50);
$i = 1;
while ($i <= $int) {
    echo $i," ";
    $i++;  
}
?>
</body>
</html>