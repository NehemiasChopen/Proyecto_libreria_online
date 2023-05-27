<?php
//PHP con las funciones con las querys a usar 
 require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Producto {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function listar_productos(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM productos");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function eliminar_producto($id){//Funcion para eliminar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'DELETE FROM productos WHERE id_produc=?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}

?>