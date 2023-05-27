<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["agregar"])){//Comprobacion del boton Actualizar
    if (!empty($_POST["marca"]) and !empty($_POST["imagen"])){//Comprobacion de campos vacios
        //Almacenamiento de los datos de los label
        $id_marc = null;
        $marca = $_POST["marca"];
        $imagen = "../img/marcas/".$_POST["imagen"];

         require_once '../model/marcas.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $marcas = new Marcas(); 
        $r = $marcas->registrar_marcas($id_marc,$marca,$imagen); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        if($r=1){
           echo '<script>window.location.href = "../controller/listar_marcas.php";</script>';//Mensaje de confirmacion
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center">Error al Registrar</div>'; //Mensaje de indicador de error
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>