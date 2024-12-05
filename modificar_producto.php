<?php 

include "modelo/conexion.php";  

$id=$_GET["id"];

$sql = $conexion->query(" select * from productos where id_productos =$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
<h5 class="text-center text-secondary">MODIFICAR PRODUCTOS</h5>
<imput type="hidden" name="id" value="<?= $_GET["id"] ?>">
<?php
include "controlador/modificar_producto.php";
while($datos=$sql->fetch_object()) {?>
    <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
   </div>
   <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Precio</label>
    <input type="text" class="form-control" name="precio" value="<?= $datos->precio ?>">
   </div>
   <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Marca</label>
    <input type="text" class="form-control" name="marca" value="<?= $datos->marca ?>">
   </div>
   <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad ?>">
   </div>
<?php }
?>

  
  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
</form>
</body>
</html>