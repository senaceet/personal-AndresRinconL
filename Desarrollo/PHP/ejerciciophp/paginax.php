<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Captura de datos</title>
    </head>
            <body bgcolor="silver">
                <?php
                    
                    echo"<center>","el nombre ingresado es: ",$_REQUEST['Nombre']."<br>","</center>";
                    echo"<center>","el número ingresado es: ".$_REQUEST['Cedula']."<br>","</center>";
                    echo"<center>","la edad ingresado es: ".$_REQUEST['edad']."<br>","</center>";
                    echo"<center>","el número movil ingresado es: ".$_REQUEST['movil']."<br>","</center>";
                    echo"<center>","el correo ingresado es: ".$_REQUEST['correo']."<br>","</center>";
                    

                  

                ?>
            </body>
</html>