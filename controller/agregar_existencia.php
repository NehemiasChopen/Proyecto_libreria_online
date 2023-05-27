<?php
  require_once '../model/productos_sub.php';
  $id=$_GET["id"];//se obtiene el dato
  $productos = new Producto();
  $r = $productos->listar_producto($id); // se manda a llamar la funcion para obtener los datos
  require_once '../view/agregar_existenci.php';
  ?>