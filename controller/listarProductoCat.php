<?php
  require_once '../model/productos_sub.php';
  require_once '../model/usuario.php';
  $id=$_GET["id_cat"];//se obtiene el dato
  $productos = new Producto();
  $r = $productos->listar_productos_cat($id); // se manda a llamar la funcion para obtener los datos

  $clave = 2;
  $id_u=$_GET["id_u"];
  $Usuarios = new Usuarios();
  $u = $Usuarios->dato_cliente($id_u);
  foreach($u as $dato){
    $nombre = $dato["correo"];
  require_once "../view/vista_productosEspecificos.php"; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  }
  ?>