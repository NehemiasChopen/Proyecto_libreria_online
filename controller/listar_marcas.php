<?php
  require_once '../model/marcas.php';
  $marca = new Marcas();
  $r = $marca->listar_marcas(); // se manda a llamar la funcion para obtener los datos
  require_once "../view/tabla_marcas.php"; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  ?>