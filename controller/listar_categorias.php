<?php
  require_once '../model/categoria.php';
  $categorias = new Categoria();
  $r = $categorias->listar_categoria(); // se manda a llamar la funcion para obtener los datos
  require_once "../view/tabla_categorias.php";
  ?>