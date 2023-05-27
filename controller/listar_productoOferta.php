<?php
  require_once '../model/productos_sub.php';
  $productos = new Producto();
  $r = $productos->listar_productos_descuen(); // se manda a llamar la funcion para obtener los datos
  $clave = 3;
  $id = 0;
  foreach($u as $dato){
    $id_u = $dato["id_user"];
    $nombre = $dato["correo"];
    require_once "../view/vista_productosEspecificos.php"; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  }
  ?>