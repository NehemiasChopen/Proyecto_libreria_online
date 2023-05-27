<?php
//PHP con las funciones con las querys a usar 
 require_once '../model/conexionBD.php';//se manda a llamar a la conexion de la BD
 
class Producto {
    
    public function _construct(){//Constructor 
        $bd = new Conectar_Database();
        $con = $bd->getconection();
    }

    public function listar_producto(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM productos WHERE id_produc='$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function listar_productos_cat(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM productos WHERE id_cat='$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function listar_productos_marc(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM productos WHERE id_marc='$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function registrar_producto($id_p,$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'INSERT INTO productos VALUES (?,?,?,?,?,?,?,?,?,?)';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$id_p,$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }

    public function detalles_producto(int $id){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT 
        productos.id_produc,
        productos.imagen, 
        productos.nombre, 
        productos.detalles, 
        categorias.categoria, 
        productos.precio, 
        productos.oferta,
        productos.existencia
        FROM productos
        INNER JOIN categorias ON productos.id_cat = categorias.id_cat 
        where productos.id_produc='$id'");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function listar_productos_descuen(){//funcion para listar los datos
        $bd = new Conectar_Database();//conexion a la 
        $con = $bd->getconection();//base de datos
        $sql = $con->query("SELECT * FROM productos WHERE oferta > 0");//select from especifico segun el id
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function actualizar_producto($id_p,$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen){//funcion para ingresar los datos
        $bd = new Conectar_Database();
        $con = $bd->getconection();
        $sql = 'UPDATE productos SET nombre=?,existencia=?,id_cat=?,id_marc=?,id_pro=?,detalles=?,precio=?,oferta=?,imagen=? WHERE id_produc = ?';
        $comando = $con->prepare($sql);
        $resultado= $comando->execute([$nombre,$existencia,$id_cat,$id_marc,$id_pro,$detalles,$precio,$oferta,$imagen,$id_p]);
        if ($resultado){
            $correcto=true;
        }
        return $resultado;
    }
}

?>