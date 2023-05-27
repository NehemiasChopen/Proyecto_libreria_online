<?php
require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
?>
<!-- VISTA DEL LISTADO DE PRODUCTOS SE LISTAN LOS PRODUCTOS ESPECIFICOS SEGUN LA PAGINA DE DONDE SE LLAMA A LA VISTA -->
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--titulo de la pagina-->
    <title>LIBRERIA ONLINE</title>
    <!-- Se manda a llamar al css de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <!-- Se manda a llamar al css personalizado -->
    <link rel="stylesheet" href="view/CSS/estilo-login.css">
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
        <div class="sticky-bottom">
            <div class="container w-100 my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- LLAMADO DE LA INFORMACION DE LOS PRODUCTOS DESDE LA BD PARA LLENAR EL CARD -->
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
                                    <a href="../controller/agregar_favorito.php?id_p=<?=$id_p?>&id_u=<?=$id_u?>&clave=<?=$clave?>&cat=<?=$id?>"
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
    </div>

    <!-- se usa el scrip de boostrap para las animaciones -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>