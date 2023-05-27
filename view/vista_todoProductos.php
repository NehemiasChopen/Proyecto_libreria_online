<?php
require_once '../model/conexionBD.php';//Se realiza el llamado al modelo de la conexion de la BD
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
    <div class="sticky-bottom">
        <div class="container w-100 my-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($r as $dato){
                   $id_p = $dato["id_produc"];
                   ?>
                <!-- se realiza el llamado de la informacion de la BD-->
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="../controller/detalles_producto.php?id_produc=<?=$id_p?>&id_u=<?=$id_u?>" class=""
                            style="text-decoration: none">
                            <!-- ENCABEZAD DEL CARD -->
                            <img src="<?=$dato["imagen"] ?>" class="img-fluid" width="300px" height="300px">
                            <!-- CUERPO DE LA CARD USADA PARA MOSTRAR EL PRODUCTO -->
                            <div class="card-body" style="background-color:  rgb(0, 0, 0);">
                                <p class="text-center" style="color: white"><?=$dato["nombre"] ?></p>
                                <h3 class="text-center" style="color: white">Q. <?=$dato["precio"] ?></h3>
                                <a href="../controller/agregar_favorito.php?id_p=<?=$id_p?>&id_u=<?=$id_u?>&clave=1&cat=1"
                                    class="btn
                                    btn-danger"><i class="fa-solid fa-heart fa-beat fa-2xl"
                                        style="color: #ffffff;"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }//EL FORMULARIO DEBE DE ESTRAR DENTRO DEL FOREACH?>
            </div>
        </div>
    </div>

    <!-- Se  implementa el script de BOOSTRAP para las animaciones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>