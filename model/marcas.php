<?php
//PHP con las funciones con las querys a usar 
 require_once 'conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Marcas {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function listar_marcas(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM marcas");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function listar_Marca(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM marcas WHERE id_marc = '$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function registrar_marcas($id_marc,$marca,$imagen){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO marcas VALUES (?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id_marc,$marca,$imagen]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function actualizar_marca($id_marc,$marca,$imagen){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'UPDATE marcas SET marca=?,imagen=? WHERE id_marc = ?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$marca,$imagen,$id_marc]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function eliminar_marcas($id){//Funcion para eliminar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'DELETE FROM marcas WHERE id_marc=?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}

?>