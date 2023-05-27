<?php
  require_once '../model/favorito.php';
  foreach($u as $dato){
    $id_u = $dato["id_user"];
    $nombre = $dato["correo"];

    $favorito = new Favorito();
    $r = $favorito->mostrar_listaFav($id_u); // se manda a llamar la funcion para obtener los datos
    require_once "../view/vista_favoritos.php"; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  }
  ?>