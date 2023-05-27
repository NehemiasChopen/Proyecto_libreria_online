<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <!-- MENU LATERAL DE LA PAGINA -->
    <div id="menulateral" class="menu-collapsed">
        <div id="header">
            <div id="menu-btn">
                <div class="btn-desplegar"></div>
                <div class="btn-desplegar"></div>
                <div class="btn-desplegar"></div>
            </div>
            <div id="title">
                <h5>LIBRERIA ONLINE</h5>
            </div>
        </div>
        <div id="profile">
            <a href="../controller/obtencion_datos.php?id=1_u&id_u=<?php echo $id_u?>">
                <div id="imagen"><img src="../img/logo-libreria.png" alt=""></div>
                <div id="name"><span>
                        <?php echo $nombre?>
                    </span></div>
            </a>
        </div>
        <div id="menu-items">
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=2_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-categoria.png" alt=""></div>
                    <div class="title"><span>CATEGORIA</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=3_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-ofertas.png" alt=""></div>
                    <div class="title"><span>OFERTAS</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=4_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-marcas.png" alt=""></div>
                    <div class="title"><span> MARCAS</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=5_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-atencioncliente.png" alt=""></div>
                    <div class="title"><span> ATENCION AL CLIENTE</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=6_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-compras.png" alt=""></div>
                    <div class="title"><span> COMPRAS</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=7_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-cuenta.png" alt=""></div>
                    <div class="title"><span>CUENTA</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../controller/obtencion_datos.php?id=8_u&id_u=<?php echo $id_u?>">
                    <div class="icon"><img src="../img/icon/icono-listadeseos.png" alt=""></div>
                    <div class="title"><span>LISTA DE DESEOS</span></div>
                </a>
            </div>
            <div class="items separator">

            </div>
            <div class="items">
                <a href="../index.php">
                    <div class="icon"><img src="../img/icon/icono-cerrarsesion.png" alt=""></div>
                    <div class="title"><span>CERRAR SESION</span></div>
                </a>
            </div>
        </div>
    </div>
    <!-- FIN DEL MENU LATERAL -->

    <!-- SCRIPT para animacion del menu -->
    <script>
    const btn = document.querySelector('#menu-btn');
    const menu = document.querySelector('#menulateral');
    btn.addEventListener('click', e => {
        menu.classList.toggle("menu-expanded");
        menu.classList.toggle("menu-collapsed");

        document.querySelector('body').classList.toggle('body-expanded');
    });
    </script>
</body>

</html>