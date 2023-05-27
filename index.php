<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="view/CSS/estilo-login.css">
    <title>INICIO DE SESIÓN</title>
</head>

<body>
    <form class="formulario" method="post">
        <p></p>
        <h1 style="font-weight: bold;">INICIAR SESIÓN</h1>
        <?php
        //SE REALIZA EL LLAMADO AL CONTROLADOR DEL INICIO DE SECION
        include "controller/iniciarSesion.php";
    ?>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" name="usuario" placeholder="Correo Electronico">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="password" placeholder="Contraseña">

            </div>
            <button type="submit" style="font-weight: bold;" class="button" name="IniciarSesion"
                value="ok">Login</button>
            <!--se redirecciona a la vista de registrarse -->
            <p></p>
            <p>¿No tienes una cuenta? <a class="link" href="view/crearUsuario.php">Registrate </a></p>
        </div>
    </form>
</body>

</html>