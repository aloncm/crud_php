<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP y MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #007bff;
            text-shadow: 2px 2px 4px rgba(0, 123, 255, 0.6);
        }
        .form-label {
            font-weight: bold;
        }
        .container-fluid {
            margin-top: 30px;
        }
        .btn-primary {
            background-color: #007bff; /* Color azul para el botón */
            color: white;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Color más oscuro al pasar el mouse */
        }
        table th {
            background-color: #17a2b8;
            color: white;
        }
        table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
        table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }
        table td {
            vertical-align: middle;
        }
        .action-links {
            display: flex;
            gap: 10px;
        }
        .action-links a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .action-links a:hover {
            color: #0056b3;
        }
        .form-container {
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            padding: 20px;
        }
        .form-container input {
            border-radius: 5px;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.1);
        }
        .btn-delete, .btn-edit {
            color: #007bff;
            border: 1px solid #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-edit {
            border-color: #28a745;
        }
        .btn-delete:hover, .btn-edit:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

<script>
    function eliminar () {
        var respuesta = confirm("¿ESTÁS SEGURO DE QUE DESEAS ELIMINAR?");
        return respuesta;
    }
</script>

<h1 class="text-center p-3">VENTA PAPELERÍA</h1>

<?php 
include "modelo/conexion.php";
include "controlador/eliminar_producto.php";
?>

<div class="container-fluid row">

    <form class="col-12 col-md-4 p-3 form-container" method="POST">
        <h3 class="text-center mb-3">REGISTRO DE PRODUCTOS</h3>

        <?php include "controlador/registro_persona.php"; ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="btnregistrar" value="ok">Registrar</button>
    </form>

    <div class="col-12 col-md-8 p-3 table-container">
        <table class="table table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">MARCA</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql = $conexion->query("SELECT * FROM productos");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->id_productos ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->precio ?></td>
                        <td><?= $datos->marca ?></td>
                        <td><?= $datos->cantidad ?></td>
                        <td class="action-links">
                            <a class="btn-delete" onclick="return eliminar()" href="index.php?id=<?= $datos->id_productos ?>">Eliminar</a>
                            <a class="btn-edit" href="modificar_producto.php?id=<?= $datos->id_productos ?>">Editar</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQyWsV4cOBmVfP2twGOK0LWyhzv+DKpPj10J20mMiC2TzZka6Ak+uR8M63zZbZcp" crossorigin="anonymous"></script>

</body>
</html>

   
  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
   