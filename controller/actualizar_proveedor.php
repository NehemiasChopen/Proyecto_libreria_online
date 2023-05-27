<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["actualizar"])){//Comprobacion de boton registro
    if (!empty($_POST["id_pro"]) and !empty($_POST["nombre"]) and !empty($_POST["direccion"])  and !empty($_POST["telefono"]) and !empty($_POST["correo"])){//Comprobacion de campos vacios
        //almacenamiento de los datos ingresados
        $id_pro = $_POST["id_pro"];
        $nombre=$_POST["nombre"];
        $direccion=$_POST["direccion"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];

         require_once '../model/usuario.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $proveedor = new Proveedores(); 
        $r = $proveedor->actualizar_proveedor($id_pro, $nombre,$direccion,$telefono,$correo); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        if($r=1){
           echo '<script>window.location.href = "../controller/listar_proveedor.php";</script>';//Mensaje de confirmacion
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center">Error al Actualizar</div>'; //Mensaje de indicador de error
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>