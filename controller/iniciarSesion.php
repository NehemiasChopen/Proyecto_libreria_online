<?php
if (!empty($_POST["IniciarSesion"])){//Comprobacion del boton Actualizar
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])){//Comprobacion de campos vacios
        //Almacenamiento de los datos de los label
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $validacion = 0;

        require_once 'model/conexionBD.php';//se manda a llamar a la conexion de la BD
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM usuarios WHERE correo='$usuario'AND pasword='$password'");//select from especifico segun el id
        $f = $sql->fetchAll(PDO::FETCH_ASSOC);//FUNCION PARA MANDAR A LLAMAR A LOS DATOS A ACTUALIZAR
        foreach($f as $dato)
        {
            if(($usuario==$dato["correo"]) and ($password==$dato["pasword"])){
                $validacion = $dato["correo"];
                $id_u = $dato["id_user"];
                $rol = $dato["rol"];
            }
        }

        if($usuario == $validacion){
            echo '<script>window.location.href = "../controller/identificar_rol.php?id_u=' . $id_u. '&rol='. $rol .'";</script>';//redirigir al index despues de actualizar los datos
        }else{
           echo '<div class="alert alert-danger d-flex align-items-center" style="text-align: center">ERRO: Usuario o Contraseña incorrecta</div>';//Mensaje de error de actualizacion
        }
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center">Verifique que ninguno de los campos este vacio</div>';//Mensaje de campos vacios
    }
}

?>