<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGRESAR NUEVO PROVEEDOR</title>
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
                    <h1 class="form-title">NUEVO PROVEEDOR</h1>
                    <?php
                    //SE REALIZA EL LLAMADO AL CONTROLADOR DEL INICIO DE SECION
                    require_once "../controller/agregar_proveedor.php";
                    ?>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">

                    <label for="direccion">DIRECCION:</label>
                    <input type="text" id="direccion" name="direccion">

                    <label for="telefono">TELEFONO:</label>
                    <input type="text" id="telefono" name="telefono">

                    <label for="correo">CORREO:</label>
                    <input type="email" id="correo" name="correo">
                    <div>
                    </div>
                    <button type="submit" id="btn-regis" name="registrar" value="ok">REGISTRAR</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>