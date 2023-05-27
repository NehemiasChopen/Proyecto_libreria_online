<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["enviar"])){//Comprobacion de boton registro
    if (!empty($_POST["nombre"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"]) and !empty($_POST["motivo_mensaje"])and !empty($_POST["detalles"]) and !empty($_POST["estado"])){//Comprobacion de campos vacios
        //almacenamiento de los datos ingresados
        $id= null;
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $motivo_mensaje=$_POST["motivo_mensaje"];
        $detalles=$_POST["detalles"];
        $estado = $_POST["estado"];

         require_once '../model/atencion_cliente.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $atencion_cli = new Atencion_cli(); 
        $r = $atencion_cli->guardar_reporte($id, $nombre,$correo,$telefono,$motivo_mensaje,$detalles,$estado); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        if($r=1){
           echo '<div class="alert alert-success d-flex align-items-center">Se envio el reporte a administracion con exito</div>';//Mensaje de confirmacion
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center">Error al enviar el reporte</div>'; //Mensaje de indicador de error
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>