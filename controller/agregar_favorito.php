<?php
// CODIGO PARA AGREGAR A FAVORITOS LOS PRODUCTOS
if (!empty($_GET["id_p"])){//obtencion del DPI a eliminar
    $id = null;
    $id_p=$_GET["id_p"];//almacenamiento del DPI a eliminar en variable
    $id_u=$_GET["id_u"];
    $clave = $_GET["clave"];
    $cat=$_GET["cat"];
    $ms = 1;

    require_once '../model/favorito.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD

    $favorito = new Favorito(); 
        $r = $favorito->agregar_favorito($id,$id_u,$id_p);
        if($r=1){
        switch ($clave) {
            case "1":
                echo '<script>window.location.href = "../controller/obtencion_datos.php?id='.$clave.'_u&id_u='.$id_u.'";</script>';//redirigir al index despues de actualizar los datos
              break;
            case "2":
                echo '<script>window.location.href = "../controller/listarProductoCat.php?id_cat='.$cat.'&id_u='.$id_u.'";</script>';
              break;
            case "3":
                echo '<script>window.location.href = "../controller/obtencion_datos.php?id='.$clave.'_u&id_u='.$id_u.'";</script>';
              break;
            case "4":
                echo '<script>window.location.href = "../controller/listarProductoMarc.php?id_marc='.$cat.'&id_u='.$id_u.'";</script>';
              break;
            case "5":
              echo '<script>window.location.href = "../controller/detalles_producto.php?id_produc='.$id_p.'&id_u='.$id_u.'";</script>';
              break;
            default:
              echo "";
          }
        }else{
            echo '<div class="alert alert-danger d-flex align-items-center">Error al agregar a favorito</div>'; //Mensaje de indicador de error
         }
}
?>