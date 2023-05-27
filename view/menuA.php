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
        <!-- ENCABEZADO MENU -->
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
        <!-- FIN ENCABEZADO -->
        <!-- DATOS INICALES -->
        <div id="profile">
            <a href="../view/inicioAdmin.php">
                <div id="imagen"><img src="../img/logo-administrador.png" alt=""></div>
                <div id="name"><span>
                        ADMIN
                    </span></div>
            </a>
        </div>
        <!-- FIN -->

        <!-- INICIO OPCIONES DEL MENU -->
        <div id="menu-items">
            <div class="items">
                <a href="../controller/listar_clientes.php">
                    <div class="icon"><img src="../img/icon/icono-clientes.png" alt=""></div>
                    <div class="title"><span>CLIENTES</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">
                <a href="#">
                    <div class="icon"><img src="../img/icon/icono-pedidos.png" alt=""></div>
                    <div class="title"><span>PEDIDOS</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">
                <a href="../controller/listar_reportes.php">
                    <div class="icon"><img src="../img/icon/icono-reportes.png" alt=""></div>
                    <div class="title"><span>REPORTES</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">
                <a href="../controller/listar_productosA.php">
                    <div class="icon"><img src="../img/icon/icono-productos.png" alt=""></div>
                    <div class="title"><span>PRODUCTOS</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">
                <a href="../controller/listar_proveedor.php">
                    <div class="icon"><img src="../img/icon/icono-proveedores.png" alt=""></div>
                    <div class="title"><span>PROVEEDORES</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">

                <a href="../controller/listar_categorias.php">
                    <div class="icon"><img src="../img/icon/icono-categorias-lis.png" alt=""></div>
                    <div class="title"><span>CATEGORÍAS</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">

                <a href="../controller/listar_marcas.php">
                    <div class="icon"><img src="../img/icon/icono-marcas.png" alt=""></div>
                    <div class="title"><span>MARCAS</span></div>
                </a>
            </div>
            <div class="items separator"></div>
            <div class="items">
                <a href="../index.php">
                    <div class="icon"><img src="../img/icon/icono-cerrarsesion.png" alt=""></div>
                    <div class="title"><span>CERRAR SESIÓN</span></div>
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