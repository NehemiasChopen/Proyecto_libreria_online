<?php
require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
?>
<!doctype html>
<html>

<head>
    <title>LISTA DE PROVEEDORES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <!-- se carga el scrip para poder usar los iconos en la tabla -->
    <script src="https://kit.fontawesome.com/6d65e29d14.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- SE MANDA A LLAMAR A LA VISTA DEL MENU LATERAL DE LA PAGINA -->
    <?php require_once '../view/menuA.php';?>
    <!-- FIN DEL MENU LATERAL -->
    <div id="main-container">

        <h1 class="text-center p-3">TABLA DE PROVEEDORES</h1>

        <p></p>
        <div class="container-lg">
            <a href="../view/agregar_proveedor.php" class="btn btn-small btn-success"><i
                    class="fa-solid fa-folder-plus fa-xl"></i></a>
            <p></p>
            <table class="table table-dark table-hover">
                <tr>
                    <!-- Encabezado de la tabla -->
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($f as $dato){//mostrar los datos de la BD
                    echo "<tr>";
                    echo "<td>".$dato["id_pro"]."</td>";
                    echo "<td>".$dato["nombre"]."</td>";
                    echo "<td>".$dato["direccion"]."</td>";
                    echo "<td>".$dato["telefono"]."</td>";
                    echo "<td>".$dato["correo"]."</td>";
                    ?>
                    <td>
                        <!-- Boton para modifcar los datos-->
                        <a href="../controller/modificar_proveedor.php?id=<?= $dato["id_pro"] ?>"
                            class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- Boton para eliminar los datos -->
                        <a href="../controller/eliminar_proveedor.php?id=<?= $dato["id_pro"] ?>"
                            class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td><?php
                    echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
</body>

</html>