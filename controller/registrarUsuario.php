<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["botonRegistro"])){//Comprobacion de boton registro
    if (!empty($_POST["nombre"]) and !empty($_POST["correo"]) and !empty($_POST["password"]) and !empty($_POST["rol"])){//Comprobacion de campos vacios
        //almacenamiento de los datos ingresados
        $id= null;
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $password=$_POST["password"];
        $rol=$_POST["rol"];
        $direccion= null;

         require_once '../model/usuario.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
        $usuarios = new Usuarios(); 
        $r = $usuarios->guardar_usuario($id, $nombre,$correo,$rol,$password,$direccion); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
        if($r=1){
           echo '<div class="alert alert-success d-flex align-items-center">Se registro con Exito</div>';//Mensaje de confirmacion
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center">Error al registrar</div>'; //Mensaje de indicador de error
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>