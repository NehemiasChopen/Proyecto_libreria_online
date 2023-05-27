<?php
//PHP con las funciones con las querys a usar 
 require_once 'conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Proveedores {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function listar_proveedor(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM proveedores");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function dato_proveedor(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM proveedores WHERE id_pro = '$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function registrar_proveedor($id, $nombre,$direccion,$telefono,$correo){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO proveedores VALUES (?,?,?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id, $nombre,$direccion,$telefono,$correo]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function actualizar_proveedor($id_pro, $nombre,$direccion,$telefono,$correo){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'UPDATE proveedores SET nombre=?,direccion=?,telefono=?,correo=? WHERE id_pro = ?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$nombre,$direccion,$telefono,$correo,$id_pro]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function eliminar_proveedor($id){//Funcion para eliminar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'DELETE FROM proveedores WHERE id_pro=?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}

?>