<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["agregar"])){//Comprobacion del boton Actualizar
    if (!empty($_POST["nombre"]) and !empty($_POST["id_cat"]) and !empty($_POST["id_marc"]) and !empty($_POST["id_pro"]) and !empty($_POST["detalles"]) and !empty($_POST["precio"]) and !empty($_POST["imagen"])){//Comprobacion de campos vacios
        //Almacenamiento de los datos de los label
        $id_p = null;
        $nombre = $_POST["nombre"];
        $existencia = 0;
        $id_cat = $_POST["id_cat"];
        $id_marc = $_POST["id_marc"];
        $id_pro = $_POST["id_pro"];
        $detalles = $_POST["detalles"];
        $precio = $_POST["precio"];
        $oferta = 0;
        $imagen = "../img/productos/".$_POST["imagen"];

         require_once '../model/productos_sub.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $producto = new Producto(); 
        $r = $producto->registrar_producto($id_p,$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        if($r=1){
           echo '<script>window.location.href = "../controller/listar_productosA.php";</script>';//Mensaje de confirmacion
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center">Error al Actualizar</div>'; //Mensaje de indicador de error
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>