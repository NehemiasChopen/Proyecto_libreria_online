<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR ROL DE CLIENTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    //SE REALIZA EL LLAMADO AL CONTROLADOR DEL INICIO DE SECION
                    require_once "../controller/actualizar_userA.php";
                    foreach($r as $dato){//mostrar los datos de la BD
                    ?>
                    <input type="hidden" id="id_u" name="id_u" value="<?= $dato["id_user"] ?>">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?= $dato["nombre"] ?>">

                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" value="<?= $dato["correo"] ?>">

                    <input type="hidden" id="direccion" name="direccion" value="<?= $dato["direccion"] ?>">

                    <label for="rol">Rol:</label>
                    <select id="rol" name="rol">
                        <option value="<?= $dato["rol"] ?>"><?= $dato["rol"] ?></option>
                        <option value="admin">admin</option>
                        <option value="cliente">cliente</option>
                    </select>

                    <input type="hidden" id="password" name="password" value="<?= $dato["pasword"] ?>">

                    <?php }//EL FORMULARIO DEBE DE ESTRAR DENTRO DEL FOREACH
                    ?>
                    <div>
                    </div>
                    <button type="submit" id="btn-regis" name="actualizar" value="ok">MODIFICAR</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>