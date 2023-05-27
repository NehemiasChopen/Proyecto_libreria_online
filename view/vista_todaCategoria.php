<?php
require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
?>
<!-- VISTA DEL LISTADDO DE TODAS LAS CATEGORIAS AGREGADAS EN LA BD -->
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--titulo de la pagina-->
    <title>CATALOGO DE PRODUCTOS</title>
    <!-- Se manda a llamar al css de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <!-- Se manda a llamar al css personalizado -->
    <link rel="stylesheet" href="../view/CSS/estilo.css">
    <!-- se manda a llamar el scrip para el boton whatsapp -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- MENU LATERAL DE LA PAGINA -->
    <?php
    $id_u = $id_u;
    $nombre = $nombre;
    require_once '../view/menu.php';?>
    <!-- FIN DEL MENU LATERAL -->

    <div id="main-container">
        <p></p>
        <h1 class="title">CATEGORIAS</h1>
        <p></p>
        <div>
            <div class="sticky-bottom">
                <div class="container w-100 my-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!-- LLAMADO DE LA INFORMACION DESDE LA BD -->
                        <?php foreach($r as $dato){?>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <a href="../controller/listarProductoCat.php?id_cat=<?=$dato["id_cat"] ?>&id_u=<?=$id_u?>"
                                    class="text-center" style="text-decoration: none">
                                    <!--ENCABEZADO DEL CARD-->
                                    <img src="<?=$dato["imagen"] ?>" class="img-fluid" width="300px" height="300px">
                                    <!-- CUERPO DEL CARD USADO PARA MOSTRAR EL NOMBRE DE LA CATEGORIA -->
                                    <div class="card-body" style="background-color: rgb(0, 0, 0);">
                                        <h5 class="text-center" style="color: white"><?=$dato["categoria"] ?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php }//EL FORMULARIO DEBE DE ESTRAR DENTRO DEL FOREACH ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- se usa el scrip de boostrap para las animaciones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>