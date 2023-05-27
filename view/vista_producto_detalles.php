<?php
require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
?>
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
    <script src="https://kit.fontawesome.com/6d65e29d14.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- MENU LATERAL DE LA PAGINA -->
    <?php
    $id_u = $id_u;
    $nombre = $nombre;
    require_once '../view/menu.php';?>
    <!-- FIN DEL MENU LATERAL -->

    <div id="main-container">
        <div class="container  w-100 my-5">
            <div class="row">
                <h1 class="text-center">DETALLE PRODUCTO</h1>
                <h1 class="text-center"> </h1>
                <?php foreach($r as $dato){
                    $id_p=$dato["id_produc"];?>
                <div class="col-md-6 order-md-1 text-center">
                    <figure class="figure">
                        <img src="<?=$dato["imagen"] ?>" class="figure-img img-fluid rounded" width="500px"
                            height="500px">
                    </figure>
                </div>
                <div class="col-md-6 order-md-2 text-white" style="background-color: rgba(0, 0, 0, 0.626);">
                    <form class="" method="post">
                        <?include "../controller/compra.php"; ?>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <input type="hidden" id="id_p" name="id_p" value="<?= $id_p ?>">
                            <input type="hidden" id="id_u" name="id_u" value="<?= $id_u ?>">
                            <p></p>
                            <p class="text-secondary fs-2"><?=$dato["nombre"] ?></p>
                            <input type="hidden" id="nombre" name="nombre" value="<?= $dato["nombre"] ?>">
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <p class="text-break fs-5 fst-italic"><?=$dato["detalles"] ?></p>
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <h5>CATEGORIA:<b> </b><small><b class="text-uppercase "><?=$dato["categoria"] ?></b></small>
                            </h5>
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <p></p>
                            <h5>PRECIO:<b> </b><small><b class="text-uppercase ">Q. <?=$dato["precio"] ?></b></small>
                            </h5>
                            <input type="hidden" id="precio" name="precio" value="<?= $dato["precio"] ?>">
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <p></p>
                            <h5>DESCUENTO:<b> </b><small><b class="text-uppercase "><?=$dato["oferta"] ?>%</b></small>
                            </h5>
                            <input type="hidden" id="oferta" name="oferta" value="<?= $dato["oferta"] ?>">
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <p></p>
                            <h5>EXISTENCIA:<b> </b><small><b
                                        class="text-uppercase "><?=$dato["existencia"] ?></b></small>
                            </h5>
                            <input type="hidden" id="exis_actual" name="exis_actual" value="<?= $dato["existencia"] ?>">
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto">
                            <p></p>
                            <label for="ingrecantiad" class="form-label">CANTIDAD</label>
                            <input type="number" class="form-control" name="cantidad">
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto ">
                            <p></p>
                            <a href="../controller/agregar_favorito.php?id_p=<?=$id_p?>&id_u=<?=$id_u?>&clave=5&cat=5"
                                class="btn btn-danger"><i class="fa-solid fa-heart fa-beat fa-2xl"
                                    style="color: #ffffff;"></i></a>
                            <button type="submit" style="font-weight: bold;" class="btn btn-success" name="compra"
                                value="ok"><i class="fa-solid fa-cart-shopping fa-2xl"
                                    style="color: #ffffff;"></i></button>
                            <p></p>
                        </div>
                    </form>
                </div>
                <?php }//fin de detalles?>
            </div>
        </div>
    </div>

    <!-- se usa el scrip de boostrap para las animaciones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>