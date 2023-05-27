<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["compra"])){//Comprobacion del boton Actualizar
    if (!empty($_POST["id_p"]) and !empty($_POST["id_u"]) and !empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["oferta"]) and !empty($_POST["exis_actual"]) and !empty($_POST["cantidad"])){//Comprobacion de campos vacios
        //Almacenamiento de los datos de los label
        $id = null;
        $id_p = $_POST["id_p"];
        $id_u = $_POST["id_u"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $oferta = $_POST["oferta"];
        $exis_actual = $_POST["exis_actual"];
        $cantidad = $_POST["cantidad"];
        
        $existencia = $exis_actual - $cantidad;//suma de la existencia ingresada con la existente

        $precio_descuento = $precio - ($oferta * $precio)/100;

        $total = $cantidad + $precio_descuento;

         //require_once '../model/productos_sub.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        //$producto = new Producto(); 
        //$r = $producto->actualizar_producto($id_p,$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        //if($r=1){
        //   echo '<script>window.location.href = "../controller/listar_productosA.php";</script>';//Mensaje de confirmacion
        //}else{
        //   echo '<div class="alert alert-danger d-flex align-items-center">Error al Actualizar</div>'; //Mensaje de indicador de error
        //}
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>