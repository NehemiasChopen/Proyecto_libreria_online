<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Se manda a llamar al css personalizado -->
    <link rel="stylesheet" href="../view/CSS/estilo-login.css">
    <link rel="stylesheet" href="../view/CSS/estilo-menu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
        <form class="formulario" method="post">
            <p></p>
            <h1 style="font-weight: bold; color: black;">Atención al Cliente</h1>
            <p></p>
            <?php
            include "../controller/atencionCliente.php"; // Include the file where field validation and data handling are performed
        ?>
            <div class="">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                </div>
                <div class="">
                    <div class="input-contenedor">
                        <i class="fas fa-envelope icon"></i>
                        <input type="text" name="correo" placeholder="Correo Electrónico">
                    </div>
                </div>
                <div class="">
                    <div class="input-contenedor">
                        <i class="fas fa-phone icon"></i>
                        <input type="text" name="telefono" placeholder="Teléfono">
                    </div>
                </div>
                <div class="">
                    <div class="input-contenedor">
                        <i class="fas fa-comment icon"></i>
                        <label for="titulo_mensaje" style="color: rgb(126, 126, 126);">Motivo del Mensaje:</label>
                        <select class="form-select" name="motivo_mensaje" id="motivo_mensaje">
                            <option value="">Selecciona una opción</option>
                            <option value="problemas_envio">Problemas con el envío</option>
                            <option value="devolucion_productos">Devolución de productos</option>
                            <option value="productos_existencia">Productos en existencia</option>
                            <option value="devolucion_dinero">Devolución de dinero</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="input-contenedor">
                        <textarea class="form-control" name="detalles" id="detalles" placeholder="Detalles"></textarea>
                    </div>
                </div>
                <input type="hidden" id="estado" name="estado" value="Esperando Respuesta">
                <p></p>
                <button type="submit" class="button" name="enviar" value="ok">Enviar</button>
            </div>
        </form>
    </div>
    <?php } ?>
</body>

</html>