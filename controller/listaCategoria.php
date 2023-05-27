<?php
  require_once '../model/categoria.php';
  $categorias = new Categoria();
  $r = $categorias->listar_categoria(); // se manda a llamar la funcion para obtener los datos
   //Se manda a llamar el archivo donde se tiene la vista de la tabla
  foreach($u as $dato){
    $id_u = $dato["id_user"];
    $nombre = $dato["correo"];
    require_once "../view/vista_todaCategoria.php";
  }
  ?>