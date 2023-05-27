<?php
//PHP con las funciones con las querys a usar 
 require_once 'conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Categoria {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function listar_categoria(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM categorias");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function registrar_categoria($id,$nombre,$imagen){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO categorias VALUES (?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id,$nombre,$imagen]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function eliminar_categoria($id){//Funcion para eliminar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'DELETE FROM categorias WHERE id_cat=?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}

?>