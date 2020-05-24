</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



            <!-- INICIO DE FORMULARIO -->
            <form action="cocacola1.php" method="POST">

            <label for="">Ingrese el valor de la botella</label>
        <div class ="form-group"><input type="number" value ="" name ="botella" class ="form-control" placeholder="valor unitario"></div>
        <?php
        //if(isset($_POST['canasta'])&&(isset( $_POST['Ml'])&&(isset($_POST['botella'])))){


        
        $canasta = $_POST['canasta'];
        $Ml = $_POST['Ml'];
        $iva = $_POST['iva'];
        $valorBotella = $_POST['botella'];

        $valorCanasta = ($valorBotella * 30);
        $costoLiquido = (350 * 30) / $valorCanasta;
        $valorIva =  ($valorCanasta) / 100;
        
        ?>


        <label for="">Valor canasta con iva</label>
        <div class = "form-group"><input type="number" value="<?php echo  $valorCanasta ?>" name = "canasta" class = "form-control"></div>
        <label >Costo del liquido en Militros </label>
        <div class = "form-group"><input type="number" value="<?php echo $costoLiquido   ?>" name  = "Ml" class = "form-control"></div>
        <label >Costo de iva</label>
        <div class = "form-group"><input type="number" value="<?php echo  $valorIva ?>" name  = "iva" class = "form-control"></div>

        <div class = "form-group"><input type="submit" class = "btn btn-primary" vale ="Envia datos" ></div>
        </div>
        </form>


  
</body>
</html>



     