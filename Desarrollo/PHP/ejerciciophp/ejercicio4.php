<?php
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$radio=$_POST['radio1'];

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>datos</title>
    </head>
        <body bgcolor="silver">
            <?php
            if ($radio=="sumar"){
                $suma=$valor1+$valor2;
                echo "la suma de ".$valor1." y ".$valor2." es: ".$suma;
            }
            else if($radio=="restar"){
                $resta=$valor1-$valor2;
                echo "la resta de ".$valor1." y ".$valor2." es ".$resta;
            }
            else if ($radio=="multiplicacion"){
                $multiplo=$valor1*$valor2;
                echo "la multiplicación de ".$valor1." y ".$valor2." es ".$multiplo;
                
            }
            ?>
            
        </body>
</html>