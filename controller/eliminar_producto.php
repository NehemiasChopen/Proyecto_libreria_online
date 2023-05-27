<?php
//PHP para eliminar los datos de las personas
if (!empty($_GET["id"])){//obtencion del id a eliminar
    $id=$_GET["id"];//almacenamiento del id a eliminar en variable
    
    require_once '../model/productos_inicio.php';//se manda a llamar el archivo con las querys
        
        $producto = new Producto();
        $r = $producto->eliminar_producto($id);//se envia el dato a la funcion eliminar.
        if($r=1){
            echo '<script>window.location.href = "../controller/listar_productosA.php";</script>';//redirigir al index despues de actualizar los datos
        }else{
           echo '<div class="alert alert-danger">Error al Eliminar</div>';//mensaje de error al eliminar
        }
}
?>