<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ACTUALIZAR PRODUCTO</title>
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
                    <?php
                    require_once "../controller/actualizar_producto.php";
                    foreach($r as $dato){//mostrar los datos de la BD
                    ?>
                    <div class="text-center text-secondary">
                        <img style="" src="<?=$dato["imagen"] ?>" width="200px" height="200px">

                        <div class="mb-3">
                            <input type="hidden" id="id_p" name="id_p" value="<?= $dato["id_produc"] ?>">

                            <label for="disabledTextInput" class="form-label">NOMBRE</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="<?= $dato["nombre"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="existencia" value="<?= $dato["existencia"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="ingrecate" class="form-label">CATEGORIA</label>
                            <select class="form-select" aria-label="Default select example" name="id_cat">
                                <option value="<?= $dato["id_cat"] ?>"><?= $dato["id_cat"] ?></option>";
                                <!-- Se manda a llamar los datos de la tabla proveedores -->
                                <?php
                            foreach($c as $cat){//mostrar los datos de la BD
                             echo "<option value='".$cat["id_cat"]."'>".$cat["id_cat"]." ".$cat["categoria"]."</option>";
                            }?>
                                <!-- fin de la consulta -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ingrecate" class="form-label">MARCA</label>
                            <select class="form-select" aria-label="Default select example" name="id_marc">
                                <option value="<?= $dato["id_marc"] ?>"><?= $dato["id_marc"] ?></option>";
                                <!-- Se manda a llamar los datos de la tabla proveedores -->
                                <?php
                            foreach($m as $marc){//mostrar los datos de la BD
                             echo "<option value='".$marc["id_marc"]."'>".$marc["id_marc"]." ".$marc["marca"]."</option>";
                            }?>
                                <!-- fin de la consulta -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ingrecate" class="form-label">PROVEEDOR</label>
                            <select class="form-select" aria-label="Default select example" name="id_pro">
                                <option value="<?= $dato["id_pro"] ?>"><?= $dato["id_pro"] ?></option>";
                                <!-- Se manda a llamar los datos de la tabla proveedores -->
                                <?php
                            foreach($p as $pro){//mostrar los datos de la BD
                             echo "<option value='".$pro["id_pro"]."'>".$pro["id_pro"]." ".$pro["nombre"]."</option>";
                            }?>
                                <!-- fin de la consulta -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">DETALLES</label>
                            <input type="text" class="form-control" id="detalles" name="detalles"
                                value="<?= $dato["detalles"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">PRECIO</label>
                            <input type="text" class="form-control" id="precio" name="precio"
                                value="<?= $dato["precio"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">OFERTA: %</label>
                            <input type="text" class="form-control" id="oferta" name="oferta"
                                value="<?= $dato["oferta"] ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="imagen" value="<?= $dato["imagen"] ?>">
                        </div>

                        <?php }//EL FORMULARIO DEBE DE ESTRAR DENTRO DEL FOREACH
                        ?>
                        <button type="submit" id="actualizar" name="actualizar" value="ok">ACTUALIZAR PRODUCTO</button>
                    </div>
                </div>
            </div>
    </form>
</body>

</html>