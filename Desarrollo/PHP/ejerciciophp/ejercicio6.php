<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
            <body bgcolor="silver">
            <?php 
            error_reporting(E_ALL ^ E_NOTICE);
                if ($_REQUEST['operacion']==suma) 
                { 
                    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2']; 
                    echo "La suma es:".$suma; 
                } else if ($_REQUEST['operacion']==resta){ 
                    $resta=$_REQUEST['valor1'] - $_REQUEST['valor2']; 
                    echo "La resta es:".$resta; 
                } else if ($_REQUEST['operacion']==multi){ 
                    $resta=$_REQUEST['valor1'] * $_REQUEST['valor2']; 
                    echo "La resta es:".$resta; 
                } else if ($_REQUEST['operacion']==division){ 
                    $resta=$_REQUEST['valor1'] / $_REQUEST['valor2']; 
                    echo "La resta es:".$resta; 
                } 
              
            ?> 
            </body>
</html>
