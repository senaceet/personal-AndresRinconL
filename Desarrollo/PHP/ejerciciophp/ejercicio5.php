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
                    echo"<center>","la edad ingresada es: ".$_REQUEST['edad']."<br>","</center>";

                    if ($_REQUEST['radio1']=="soltero") {
                        echo "<center>"."Soltero/a"."<br>";
                    } else if ($_REQUEST['radio1']=="casado") {
                        echo "<center>"."Casado/a"."<br>";
                    } else if ($_REQUEST['radio1']=="union libre") {
                        echo "<center>"."Union libre"."<br>";
                    } else if ($_REQUEST['radio1']=="viudo") {
                        echo "<center>"."Viudo/a"."<br>";
                    }
                                     

                ?>
            </body>
</html>