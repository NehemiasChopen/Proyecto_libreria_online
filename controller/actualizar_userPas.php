<?php
// CODIGO PARA EL REGISTRO DE LOS USUARIOS

if (!empty($_POST["cambio"])){//Comprobacion de boton registro
    if (!empty($_POST["id_u"]) and !empty($_POST["nombre"]) and !empty($_POST["correo"]) and !empty($_POST["direccion"]) and !empty($_POST["rol"]) and !empty($_POST["nuevo_password"]) and !empty($_POST["conf_password"])){//Comprobacion de campos vacios
        //almacenamiento de los datos ingresados
        $id_u = $_POST["id_u"];
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $direccion=$_POST["direccion"];
        $rol=$_POST["rol"];
        $nuevo_password = $_POST["nuevo_password"];
        $conf_password = $_POST["conf_password"];

         require_once '../model/usuario.php';//se manda a llamar el archivo donde esta el proceso de ingresado en la BD
        
         if($nuevo_password == $conf_password){
            $password = $nuevo_password;
            $usuarios = new Usuarios(); 
            $r = $usuarios->actualizar_user($id_u, $nombre,$correo,$rol,$password,$direccion); //Se envian los datos a la funcion guardar_persona para ingresarlos a la BD
            if($r=1){
               echo '<div class="alert alert-success d-flex align-items-center">Se actualizo la contraseña con exito</div>';//Mensaje de confirmacion
            }else{
               echo '<div class="alert alert-danger d-flex align-items-center">Error al registrar</div>'; //Mensaje de indicador de error
            }
         }else{
            echo '<div class="alert alert-danger d-flex align-items-center">Error las contraseñas no coinciden</div>';
         }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Alguno de los campos esta vacio</div>';//Mensaje de indicador de campos vacios
    }
}
?>