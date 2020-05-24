<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Captura de datos</title>
    </head>
            <body bgcolor="silver">
                <?php
                    $f = "f";
                    echo"<center>","el nombre ingresado es: ",$_REQUEST['Nombre']."<br>","</center>";
                    echo"<center>","el apellido ingresado es: ",$_REQUEST['apellido']."<br>","</center>";
                    echo"<center>","el tipo de indentificacion ingresado es: ".$_REQUEST['identificación']."<br>","</center>";
                    echo"<center>","el número ingresado es: ".$_REQUEST['Cedula']."<br>","</center>";
                    echo"<center>","el sexo ingresado es: ".$_REQUEST['sexo']."<br>","</center>";
                    echo"<center>","la edad ingresada es: ".$_REQUEST['edad']."<br>","</center>";

                    if ($_REQUEST['edad']>=18) {
                        echo "<center>"."Es mayor de edad"."<br>";
                    } else {
                       echo"<center>"."Es menor de edad, puede salir 30 minutos al día"."<br>";
                    }
                    
                    if ($_REQUEST['sexo']==$f) {
                        echo "<center>"."Es Femenino y debe ser protejida"."<br>";
                    } else {
                       echo"<center>"."Es Masculino, puede ir a mercar"."<br>";
                    }
                                     

                ?>
            </body>
</html>