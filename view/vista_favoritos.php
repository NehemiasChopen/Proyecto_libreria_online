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
    <?php foreach($u as $dato){
    $id_u = $dato["id_user"];
    $nombre = $dato["correo"];
    require_once '../view/menu.php';?>
    <!-- FIN DEL MENU LATERAL -->

    <!-- SE DIVIDE POR MEDIO DE UN MAIN CONTAINER DONDE SE MOSTRARA EL CATALOGO -->
    <div id="main-container">
        <h1 class="text-center p-3">MI LISTA DE FAVORITOS</h1>

        <p></p>
        <div class="container-lg">
            <table class="table table-dark table-hover">
                <tr>
                    <!-- Encabezado de la tabla -->
                    <th scope="col">IMAGEN</th>
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">EXISTENCIA</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">OFERTA</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <?php
            foreach($r as $dato){//mostrar los datos de la BD
                $id_p = $dato["id_produc"];
                $id_u = $dato["id_user"];
            echo "<tr>";
            echo "<td><img style='' src='".$dato["imagen"]."' width='100px' height='100px'></td>";
            echo "<td class='align-middle'><a href='../controller/detalles_producto.php?id_produc=$id_p&id_u=$id_u'
                    class='''>".$dato["nombre"]."</a></td>";
                    echo "<td class='align-middle'>".$dato["existencia"]."</td>";
                    echo "<td class='align-middle'>".$dato["precio"]."</td>";
                    echo "<td class='align-middle'>".$dato["oferta"]."%</td>";
                    ?>
                    <td class='align-middle'>
                        <!-- Boton para modifcar los datos-->
                        <a href="" class="btn btn-small btn-success"><i class="fa-solid fa-cart-shopping"></i></a>
                        <!-- Boton para eliminar los datos -->
                        <a href="../controller/eliminar_favorito.php?id_d=<?= $dato["id_deseo"] ?>&id_u=<?= $id_u ?>"
                            class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td><?php
            echo "</tr>";
            }
        ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php } ?>
</body>

</html>