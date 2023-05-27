<?php
//PHP para eliminar los datos de las personas
if (!empty($_GET["id"])){//obtencion del DPI a eliminar
    $id=$_GET["id"];//almacenamiento del DPI a eliminar en variable
    
    require_once '../model/usuario.php';//se manda a llamar el archivo con las querys
        
        $usuarios = new Usuarios();
        $r = $usuarios->eliminar_usuario($id);//se envia el dato a la funcion eliminar.
        if($r=1){
            echo '<script>window.location.href = "../controller/listar_clientes.php";</script>';//redirigir al index despues de actualizar los datos
        }else{
           echo '<div class="alert alert-danger">Error al Eliminar</div>';//mensaje de error al eliminar
        }
}
?>