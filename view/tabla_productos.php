<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <!-- se carga el scrip para poder usar los iconos en la tabla -->
    <script src="https://kit.fontawesome.com/6d65e29d14.js" crossorigin="anonymous"></script>
    <title>LIBRERIA ONLINE</title>
</head>

<body>
    <!-- SE MANDA A LLAMAR A LA VISTA DEL MENU LATERAL DE LA PAGINA -->
    <?php
    require_once '../view/menuA.php';?>
    <!-- FIN DEL MENU LATERAL -->

    <!-- SE DIVIDE POR MEDIO DE UN MAIN CONTAINER DONDE SE MOSTRARA EL CATALOGO -->
    <div id="main-container">
        <h1 class="text-center p-3">TABLA DE PRODUCTOS</h1>

        <p></p>
        <div class="container-lg">
            <a href="../controller/agregar_producto.php" class="btn btn-small btn-success"><i
                    class="fa-solid fa-folder-plus fa-xl"></i></a>
            <p></p>
            <table class="table table-dark table-hover">
                <tr>
                    <!-- Encabezado de la tabla -->
                    <th scope="col">ID</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">EXISTENCIA</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">MARCA</th>
                    <th scope="col">PROVEEDOR</th>
                    <th scope="col">DETALLES</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">OFERTA</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <?php
            foreach($r as $dato){//mostrar los datos de la BD
                    echo "<tr>";
                    echo "<td >".$dato["id_produc"]."</td>";
                    echo "<td><img style='' src='".$dato["imagen"]."' width='100px' height='100px'></td>";
                    echo "<td >".$dato["nombre"]."</td>";
                    echo "<td >".$dato["existencia"]."</td>";
                    echo "<td >".$dato["id_cat"]."</td>";
                    echo "<td >".$dato["id_marc"]."</td>";
                    echo "<td >".$dato["id_pro"]."</td>";
                    echo "<td >".$dato["detalles"]."</td>";
                    echo "<td >Q.".$dato["precio"]."</td>";
                    echo "<td >".$dato["oferta"]."%</td>";
                    ?>
                    <td>
                        <!-- Boton para modifcar los datos-->
                        <a href="../controller/agregar_existencia.php?id=<?= $dato["id_produc"] ?>"
                            class="btn btn-small btn-success"><i class="fa-solid fa-circle-plus"></i></a>
                        <!-- Boton para modifcar los datos-->
                        <a href="../controller/modificar_producto.php?id=<?= $dato["id_produc"] ?>"
                            class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- Boton para eliminar los datos -->
                        <a href="../controller/eliminar_producto.php?id=<?= $dato["id_produc"] ?>"
                            class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td><?php
            echo "</tr>";
            }
        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>