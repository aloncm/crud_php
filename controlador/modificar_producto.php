<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["marca"]) and !empty($_POST["cantidad"])) {
        $id_productos =$_POST["id"];
        $nombre =$_POST["nombre"];
        $precio = $_POST["precio"];
        $marca = $_POST["marca"];
        $cantidad = $_POST["cantidad"];
        $sql=$conexion->query(" update productos set nombre='$nombre', precio=$precio, marca='$marca', cantidad=$cantidad where id_productos = $id ");
        if ($sql==true) {
            header("location:index.php");
        } else {
            echo "<div class= 'alert alert-danger'>ERROR AL MODIFICAR PRODUCTO</div>";
        }

    }else{
        echo "<div class= 'alert alert-warning'>CAMPOS VACIOS</div>";
 
    }


}

