<?php
  require_once '../model/marcas.php';
  $categorias = new Marcas();
  $r = $categorias->listar_marcas(); // se manda a llamar la funcion para obtener los datos
  foreach($u as $dato){
    $id_u = $dato["id_user"];
    $nombre = $dato["correo"];
    require_once "../view/vista_todoMarcas.php"; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  }
  ?>