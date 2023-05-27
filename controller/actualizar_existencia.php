<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["actualizar"])){//Comprobacion del boton Actualizar
    if (!empty($_POST["existencia"])){//Comprobacion de campos vacios
        //Almacenamiento de los datos de los label
        $id_p = $_POST["id_p"];
        $nombre = $_POST["nombre"];
        $exis_ingre = $_POST["existencia"];
        $exis_actual = $_POST["exis_actual"];
        $id_cat = $_POST["categoria"];
        $id_marc = $_POST["id_marc"];
        $id_pro = $_POST["id_pro"];
        $detalles = $_POST["detalles"];
        $precio = $_POST["precio"];
        $oferta = $_POST["oferta"];
        $imagen = $_POST["imagen"];
        
        $existencia = $exis_ingre + $exis_actual;//suma de la existencia ingresada con la existente

         require_once '../model/productos_sub.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $producto = new Producto(); 
        $r = $producto->actualizar_producto($id_p,$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
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