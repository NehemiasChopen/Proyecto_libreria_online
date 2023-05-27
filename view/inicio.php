<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <!-- Se manda a llamar al css personalizado -->
    <link rel="stylesheet" href="../view/CSS/estilo.css">
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
        <p></p>
        <h1 class="title">PRODUCTOS</h1>
        <div>
            <!-- SE MANDA A LLAMAR AL CONTROL PARA ENLISTAR EL CATALOGO COMPLETO-->
            <?php require_once '../controller/listaCatalogo.php';?>
        </div>
    </div>
    <?php } ?>
</body>

</html>