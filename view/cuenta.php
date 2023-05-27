<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <title>MI CUENTA</title>
</head>

<body>
    <!-- SE MANDA A LLAMAR A LA VISTA DEL MENU LATERAL DE LA PAGINA -->
    <?php 
    $id_u = $id_u;
    $nombre = $nombre;
    require_once '../view/menu.php';?>
    <!-- FIN DEL MENU LATERAL -->

    <!-- SE DIVIDE POR MEDIO DE UN MAIN CONTAINER DONDE SE MOSTRARA EL CATALOGO -->
    <div id="main-container">
        <P></P>
        <h1>MI CUENTA</h1>
        <div class="container  w-100 my-5">
            <div class="row">
                <div class="col-md-6 order-md-2 text-white" style="background-color: rgba(0, 0, 0, 0.626);">
                    <form method="POST">
                        <P></P>
                        <h4 style="text-align: center;">DATOS</h4>
                        <P></P>
                        <?php
                        include "../controller/actualizar_user.php";//Se al archivo donde se realiza la validacion de campos y el ingreso  de los datos a la BD
                        ?>
                        <input type="hidden" id="id_u" name="id_u" value="<?= $id_u ?>">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">NOMBRE</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="nombre"
                                value="<?= $nom ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">CORREO</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="correo"
                                value="<?= $nombre ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">DIRECCION</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="direccion"
                                value="<?= $direccion ?>">
                        </div>
                        <input type="hidden" id="rol" name="rol" value="<?= $rol ?>">
                        <input type="hidden" id="password" name="password" value="<?= $password ?>">
                        <P></P>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary" name="actualizar"
                                value="ok">ACTUALIZAR</button>
                        </div>
                        <P></P>

                    </form>
                </div>
                <div class="col-md-6 order-md-2 text-white" style="background-color: rgba(0, 0, 0, 0.626);">
                    <form method="POST">
                        <P></P>
                        <h4 style="text-align: center;">CAMBIO CONTRASEÑA</h4>
                        <P></P>
                        <?php
                        include "../controller/actualizar_userPas.php";//Se al archivo donde se realiza la validacion de campos y el ingreso  de los datos a la BD
                        ?>
                        <input type="hidden" id="id_u" name="id_u" value="<?= $id_u ?>">
                        <input type="hidden" id="nombre" name="nombre" value="<?= $nom ?>">
                        <input type="hidden" id="correo" name="correo" value="<?= $nombre ?>">
                        <input type="hidden" id="direccion" name="direccion" value="<?= $direccion ?>">
                        <input type="hidden" id="rol" name="rol" value="<?= $rol ?>">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">NUEVA CONTRASEÑA</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="nuevo_password"
                                minlength="7" maxlength="18" placeholder="Contraseña mayor a 7 caracteres">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">CONFIRMAR CONTRASEÑA</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="conf_password"
                                minlength="7" maxlength="18" placeholder="Vuelve a ingresar">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary" name="cambio" value="ok">CAMBIAR</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>