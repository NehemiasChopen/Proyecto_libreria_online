<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="CSS/estilo-login.css">
    <title>REGISTRARSE</title>
</head>

<body>
    <form class="formulario" method="post">
        <p></p>
        <h1 style="font-weight: bold;">Registrate</h1>
        <?php
            include "../controller/registrarUsuario.php";//Se al archivo donde se realiza la validacion de campos y el ingreso  de los datos a la BD
        ?>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="nombre" placeholder="Nombre Completo">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" name="correo" placeholder="Correo Electronico">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" minlength="7" maxlength="18" name="password"
                    placeholder="Contraseña mayor a 7 caracteres">
            </div>

            <div>
                <input type="hidden" name="rol" value="cliente">

            </div>
            <button type="submit" class="button" name="botonRegistro" value="ok">Registrate</button>
            <p></p>
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="../index.php">Iniciar Sesion</a></p>
        </div>
    </form>
</body>

</html>