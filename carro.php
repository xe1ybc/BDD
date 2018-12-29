<?php
session_start();
require_once 'cone.php';
if(isset($_POST['agregar']))
{
    if(isset($_SESSION['agregar_carro']))
    {
        $prod_array_id_carro = array_column($_SESSION['agregar_carro'],'prod_id');
        if(!in_array($_GET['id'],$prod_array_id_carro))
        {

            $count= count($_SESSION['agregar_carro']);
            $prod_array = array(
                'prod_id'        => $_GET['id'],
                'Nombre_prod'    => $_POST['hidden_nombre'],
                'Nprecio'    => $_POST['hidden_precio'],
                'Ncantidad'  => $_POST['cantidad'],
            );

            $_SESSION['agregar_carro'][$count]=$prod_array;
        }
        else
            {
              echo '<script>alert("El Producto ya existe!");</script>';
            }
    }
    else
        {
            $prod_array = array(
                'prod_id'        => $_GET['id'],
                'Nombre_prod'    => $_POST['hidden_nombre'],
                'Nprecio'    => $_POST['hidden_precio'],
                'Ncantidad'  => $_POST['cantidad'],
            );

            $_SESSION['agregar_carro'][0] = $prod_array;
        }
}
if(isset($_GET['action']))
{
    if($_GET['action']=='delete')
    {
        foreach ($_SESSION['agregar_carro'] AS $key => $value)
        {
            if($value['prod_id'] == $_GET['id'])
            {
                unset($_SESSION['agregar_carro'][$key]);
                echo '<script>alert("El Producto Fue Eliminado!");</script>';
                echo '<script>window.location="carro.php";</script>';
            }

        }

    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <style>
        <body{color: #3cb371;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title>Carrito</title>
</head>
<body>

<div class="container">
    
    <?php
$sql="SELECT * FROM productos";
$resul= mysqli_query($cone,$sql);
if(mysqli_num_rows($resul) > 0){
    while ($row=mysqli_fetch_array($resul)){
?>
    <div class="col-md-3">
        <form method="post" action="carro.php?action=add&id=<?php echo $row['id']; ?>">
            <?php

            ?>
            <div  align="center">
                <img src="img/<?php echo $row['img'];?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row['nombre'];?></h4>
                <h4 class="text-danger">$<?php echo $row['precio'];?></h4>
                <input type="text" name="cantidad" class="form-control" value="1" />
                <input type="hidden" name="hidden_nombre" value="<?php echo $row['nombre'];?>" />
                <input type="hidden" name="hidden_precio" value="<?php echo $row['precio'];?>" />
                <input type="submit" name="agregar" style="margin-top:5px;" class="btn btn-success" value="Add" />
            </div>
        </form>
    </div>
        <?php
    }
}
    ?>
    <div style="clear:both"></div>
    <br />
    <h3>Detalle de la Orden</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Producto</th>
                <th width="10%">Cantidad</th>
                <th width="20%">Precio</th>
                <th width="15%">Total</th>
            </tr>
            <?php
            if(!empty($_SESSION["agregar_carro"]))
            {
                $total = 0;
                foreach($_SESSION["agregar_carro"] as $keys => $values)
                {
                    ?>
                    <tr>
                        <td><?php echo $values["Nombre_prod"]; ?></td>
                        <td><?php echo $values["Nprecio"]; ?></td>
                        <td>$ <?php echo $values["Ncantidad"]; ?></td>
                        <td>$ <?php echo number_format($values["Ncantidad"] * $values["Nprecio"], 2);?></td>
                        <td><a href="carro.php?action=delete&id=<?php echo $values["prod_id"]; ?>"><span class="text-danger">Quitar</span></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["Ncantidad"] * $values["Nprecio"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
            }else{
                ?>
                <tr>
                    <td colspan="4" style="color: red" align="center"><strong>No hay Producto Agregados</strong></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <center>
            <button type="submit" class="btn btn-success"><a href="negocio.html">Volver</a></button>
        </center>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>