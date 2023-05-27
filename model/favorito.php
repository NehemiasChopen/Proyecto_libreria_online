<?php
//PHP con las funciones con las querys a usar 
 require_once 'conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Favorito {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function agregar_favorito($id,$id_u,$id_p){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO lista_deseos VALUES (?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id,$id_u,$id_p]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function mostrar_listaFav(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT 
        fav.id_deseo, 
        us.id_user, 
        pro.id_produc, 
        pro.imagen,
        pro.nombre,
        pro.existencia,
        pro.precio,
        pro.oferta
        FROM ((lista_deseos AS fav
        INNER JOIN productos AS pro ON fav.id_produc = pro.id_produc)   
        INNER JOIN usuarios AS us ON fav.id_user = us.id_user)
        where fav.id_user='$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function eliminar_favorito($id){//Funcion para eliminar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'DELETE FROM lista_deseos WHERE id_deseo=?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}
?>