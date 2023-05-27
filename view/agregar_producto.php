<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>INGRESAR NUEVO PRODUCTO</title>
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
                    require_once "../controller/registrar_producto.php";
                    ?>
                    <div class="text-center text-secondary">
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">NOMBRE</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="ingrecate" class="form-label">CATEGORIA</label>
                            <select class="form-select" aria-label="Default select example" name="id_cat">
                                <option value="">Selecciona una opción</option>";
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
                                <option value="">Selecciona una opción</option>";
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
                                <option value="">Selecciona una opción</option>";
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
                            <input type="text" class="form-control" id="detalles" name="detalles">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">PRECIO</label>
                            <input type="text" class="form-control" id="precio" name="precio">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">IMAGEN</label>
                            <input type="text" class="form-control" id="imagen" name="imagen">
                        </div>
                        <button type="submit" id="agregar" name="agregar" value="ok">AGREGAR</button>
                    </div>
                </div>
            </div>
    </form>
</body>

</html>