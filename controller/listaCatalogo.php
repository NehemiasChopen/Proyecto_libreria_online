<?php
  require_once '../model/productos_inicio.php';
  $productos = new Producto();
  $r = $productos->listar_productos(); // se manda a llamar la funcion para obtener los datos
  $id_u = $id_u;
  $nombre = $nombre;
  require_once "../view/vista_todoProductos.php"; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  ?>