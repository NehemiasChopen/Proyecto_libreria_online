<?php
//PHP con las funciones con las querys a usar 
 require_once 'conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Usuarios {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function obtener_usuarios(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("select * from usuarios");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function guardar_usuario($id,$nombre,$correo,$rol,$password,$direccion){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO usuarios VALUES (?,?,?,?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id, $nombre,$correo,$rol,$password,$direccion]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function dato_cliente(int $id_u){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM usuarios WHERE id_user = '$id_u'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function actualizar_user($id_u, $nombre,$correo,$rol,$password,$direccion){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'UPDATE usuarios SET nombre=?,correo=?,rol=?,pasword=?,direccion=? WHERE id_user = ?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$nombre,$correo,$rol,$password,$direccion,$id_u]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function eliminar_usuario($id_user){//Funcion para eliminar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'DELETE FROM usuarios WHERE id_user=?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id_user]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}
?>