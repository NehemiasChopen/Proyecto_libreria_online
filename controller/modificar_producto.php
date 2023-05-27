<?php
  require_once '../model/productos_sub.php';
  $id=$_GET["id"];//se obtiene el dato
  $productos = new Producto();
  $r = $productos->listar_producto($id); // se manda a llamar la funcion para obtener los datos

  require_once '../model/categoria.php';
  $categorias = new Categoria();
  $c = $categorias->listar_categoria();

  require_once '../model/marcas.php';
  $categorias = new Marcas();
  $m = $categorias->listar_marcas();

  require_once '../model/proveedores.php';
  $proveedores = new Proveedores();
  $p = $proveedores->listar_proveedor();

  require_once '../view/modificar_producto.php';
  ?>