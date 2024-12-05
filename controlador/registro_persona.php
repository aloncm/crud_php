<?php

if ( !empty($_POST["btnregistrar"])) {
if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["marca"]) and !empty($_POST["cantidad"]))  {
  
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$marca=$_POST["marca"];
$cantidad=$_POST["cantidad"];

$sql=$conexion->query("insert into productos (nombre, precio, marca, cantidad) values ('$nombre','$precio', '$marca', '$cantidad')");
if ($sql==true) {
    echo'<div class= "alert alert-sucsess">Producto registrada correctamente</div>';
}else {
    echo'<div class= "alert alert-danger">Error al registrar producto</div>';
}

}else {
    echo '<div class= "alert alert-warning">Alguno de los campos esta vacío</div>';
}

} 
?>