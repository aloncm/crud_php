<?php

if (!empty($_GET["id"])) {
    $id=$_GET ["id"];
    $sql=$conexion->query("delete from productos where id_productos=$id");
    if($sql==true) {
        echo '<div class="alert alert-success">PRODUCTO ELIMINADO CORRECTAMENTE</div>';
    }else{
        echo '<div class="alert alert-danger">ERROR AL ELIMINAR</div>';
    }

}
?>
