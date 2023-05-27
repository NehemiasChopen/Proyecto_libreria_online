<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MODIFICAR MARCA</title>
    <!-- Se manda a llamar al css de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Se manda a llamar al css personalizado -->
    <link rel="stylesheet" href="../view/CSS/estilo_login.css">
    <link rel="stylesheet" href="../view/CSS/estilo_registro.css">

</head>

<body>
    <form class="formulario" method="POST">
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height: 100vh;">
                <div class="form-container">
                    <h1 class="form-title">MODIFICAR</h1>
                    <?php
                    require_once "../controller/actualizar_marca.php";
                    foreach($r as $dato){//mostrar los datos de la BD
                    ?>
                    <div class="text-center text-secondary">
                        <img style="" src="<?=$dato["imagen"] ?>" width="200px" height="200px">
                        <div class="mb-3">
                            <label for="ingrecantiad" class="form-label">MARCA</label>
                            <input type="text" class="form-control" name="marca" value="<?= $dato["marca"]?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id_marc" value="<?= $dato["id_marc"] ?>">
                            <input type="hidden" name="imagen" value="<?= $dato["imagen"] ?>">
                        </div>

                        <?php }//EL FORMULARIO DEBE DE ESTRAR DENTRO DEL FOREACH
                        ?>
                        <button type="submit" id="actualizar" name="actualizar" value="ok">MODIFICAR</button>
                    </div>
                </div>
            </div>
    </form>
</body>

</html>