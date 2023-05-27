<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AGREGAR EXISTENCIA</title>
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
                    require_once "../controller/actualizar_existencia.php";
                    foreach($r as $dato){//mostrar los datos de la BD
                    ?>
                    <div class="text-center text-secondary">
                        <img style="" src="<?=$dato["imagen"] ?>" width="200px" height="200px">

                        <div class="mb-3">
                            <input type="hidden" id="id_p" name="id_p" value="<?= $dato["id_produc"] ?>">

                            <label for="disabledTextInput" class="form-label">NOMBRE</label>
                            <input class="form-control" type="text" placeholder="<?= $dato["nombre"] ?>"
                                aria-label="Disabled input example" disabled>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="nombre" value="<?= $dato["nombre"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="exis_actual" value="<?= $dato["existencia"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="ingrecantiad" class="form-label">EXISTENCIA</label>
                            <input type="number" class="form-control" name="existencia">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="categoria" value="<?= $dato["id_cat"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id_marc" value="<?= $dato["id_marc"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id_pro" value="<?= $dato["id_pro"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="detalles" value="<?= $dato["detalles"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="precio" value="<?= $dato["precio"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="oferta" value="<?= $dato["oferta"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="imagen" value="<?= $dato["imagen"] ?>">
                        </div>

                        <?php }//EL FORMULARIO DEBE DE ESTRAR DENTRO DEL FOREACH
                        ?>
                        <button type="submit" id="actualizar" name="actualizar" value="ok">AGREGAR EXISTENCIA</button>
                    </div>
                </div>
            </div>
    </form>
</body>

</html>