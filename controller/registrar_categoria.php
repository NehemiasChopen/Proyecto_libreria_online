<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["agregar"])){//Comprobacion del boton Actualizar
    if (!empty($_POST["categoria"]) and !empty($_POST["imagen"])){//Comprobacion de campos vacios
        //Almacenamiento de los datos de los label
        $id_c = null;
        $nombre = $_POST["categoria"];
        $imagen = "../img/categorias/".$_POST["imagen"];

         require_once '../model/categoria.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $categoria = new Categoria(); 
        $r = $categoria->registrar_categoria($id_c,$nombre,$imagen); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        if($r=1){
           echo '<script>window.location.href = "../controller/listar_categorias.php";</script>';//Mensaje de confirmacion
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center">Error al Actualizar</div>'; //Mensaje de indicador de error
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>