<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>INGRESAR NUEVA CATEGORIA</title>
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
                    require_once "../controller/registrar_categoria.php";
                    ?>
                    <div class="text-center text-secondary">
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">CATEGORIA</label>
                            <input type="text" class="form-control" id="categoria" name="categoria">
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