<?php
require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido a nuestra página web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/estilo-login.css">
</head>

<body>
    <?php foreach($o as $dato){?>
    <form action="../controller/obtencion_datos.php" class="formulario" method="get">
        <h1 style="font-weight: bold;">BIENVENIDO </h1>
        <div class="contenedor">
            <h4 class="text-center" style="font-weight: bold;"><?php echo $dato["nombre"]; ?></h4>
            <p>Aquí encontrarás productos de buena calida y a bajos precios</p>
            <input type="hidden" id="id_U" name="id_u" value="<?= $dato["id_user"] ?>">
            <button type="submit" class="button" name="id" value="1_u">INGRESAR</button>
        </div>
    </form>
    <?php } ?>
</body>

</html>