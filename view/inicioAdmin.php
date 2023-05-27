<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <!-- Se manda a llamar al css personalizado -->
    <title>LIBRERIA ONLINE</title>
</head>

<body>
    <!-- SE MANDA A LLAMAR A LA VISTA DEL MENU LATERAL DE LA PAGINA -->
    <?php
    require_once '../view/menuA.php';?>
    <!-- FIN DEL MENU LATERAL -->

    <!-- SE DIVIDE POR MEDIO DE UN MAIN CONTAINER DONDE SE MOSTRARA EL CATALOGO -->
    <div id="main-container">
        <p></p>
        <h1 class="title">PRODUCTOS</h1>
        <div>
            <!-- SE MANDA A LLAMAR AL CONTROL PARA ENLISTAR EL CATALOGO COMPLETO-->
            <?php ?>
        </div>
    </div>
</body>

</html>