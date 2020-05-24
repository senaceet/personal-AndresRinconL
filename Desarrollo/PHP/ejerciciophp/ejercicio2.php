<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>datos</title>
    </head>
        <body bgcolor="silver">
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
             echo "la persona: ".$_REQUEST['nombre'],"<br>";
             if ($_REQUEST['edad']>=18) {
                 echo "Es mayor de edad";
             } else {
                echo"Es menor de edad";
             }
               
            ?>
            
        </body>
</html>
