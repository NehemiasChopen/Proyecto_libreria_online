<?php
  require_once '../model/marcas.php';
  $id=$_GET["id"];//se obtiene el dato
  $marcas = new Marcas();
  $r = $marcas->listar_Marca($id); // se manda a llamar la funcion para obtener los datos
  require_once '../view/modificar_marca.php';
  ?>