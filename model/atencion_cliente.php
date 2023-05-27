<?php
//PHP con las funciones con las querys a usar 
 require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Atencion_cli {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function obtener_reporte(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("select * from atencion_cliente");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function reporte_especifico(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM atencion_cliente WHERE id_aten = '$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function guardar_reporte($id, $nombre,$correo,$telefono,$motivo_mensaje,$detalles,$estado){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO atencion_cliente VALUES (?,?,?,?,?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id, $nombre,$correo,$telefono,$motivo_mensaje,$detalles,$estado]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function actualizar_especifico($id,$nombre,$correo,$telefono,$motivo_mensaje,$detalles,$estado){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'UPDATE atencion_cliente SET nombre=?,correo=?,telefono=?,motivo_mensaje=?,detalles=?,estado=? WHERE id_aten = ?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$nombre,$correo,$telefono,$motivo_mensaje,$detalles,$estado,$id]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}
?>