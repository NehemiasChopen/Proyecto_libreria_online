<?php
//PHP para eliminar los datos de las personas
if (!empty($_GET["id_d"])){//obtencion del id a eliminar
    $id=$_GET["id_d"];//almacenamiento del id a eliminar en variable
    $id_u=$_GET["id_u"];
    
    require_once '../model/favorito.php';//se manda a llamar el archivo con las querys
        
        $favorito = new Favorito();
        $r = $favorito->eliminar_favorito($id);//se envia el dato a la funcion eliminar.
        if($r=1){
            echo '<script>window.location.href = "../controller/obtencion_datos.php?id=8_u&id_u='.$id_u.'";</script>';//redirigir al index despues de actualizar los datos
        }else{
           echo '<div class="alert alert-danger">Error al Eliminar</div>';//mensaje de error al eliminar
        }
}
?>