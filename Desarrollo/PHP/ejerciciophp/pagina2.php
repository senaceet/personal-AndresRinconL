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
                    echo"<center>","el apellido ingresado es: ",$_REQUEST['apellido']."<br>","</center>";
                    echo"<center>","la fecha ingresada es: ",$_REQUEST['nacimiento']."<br>","</center>";
                    echo"<center>","el tipo de indentificacion ingresado es: ".$_REQUEST['identificación']."<br>","</center>";
                    echo"<center>","el número ingresado es: ".$_REQUEST['Cedula']."<br>","</center>";
                    echo"<center>","el sexo ingresado es: ".$_REQUEST['sexo']."<br>","</center>";
                    echo"<center>","la edad ingresada es: ".$_REQUEST['edad']."<br>","</center>";
                    echo"<center>","la empresa ingresada es: ".$_REQUEST['empresa']."<br>","</center>";
                    echo"<center>","la profesion ingresada es: ".$_REQUEST['profesion']."<br>","</center>";
                    echo"<center>","la direccion ingresada es: ".$_REQUEST['direccion']."<br>","</center>";
                    echo"<center>","el número telefonico ingresado es: ".$_REQUEST['telefono']."<br>","</center>";
                    echo"<center>","el número movil ingresado es: ".$_REQUEST['movil']."<br>","</center>";
                    echo"<center>","la eps ingresada es: ".$_REQUEST['eps']."<br>","</center>";
                    echo"<center>","el sueldo ingresado es: ".$_REQUEST['sueldo']."<br>","</center>";
                    

                  

                ?>
            </body>
</html>