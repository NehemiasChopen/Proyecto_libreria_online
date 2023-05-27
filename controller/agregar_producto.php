<?php
  require_once '../model/categoria.php';
  $categorias = new Categoria();
  $c = $categorias->listar_categoria();

  require_once '../model/marcas.php';
  $categorias = new Marcas();
  $m = $categorias->listar_marcas();

  require_once '../model/proveedores.php';
  $proveedores = new Proveedores();
  $p = $proveedores->listar_proveedor();

  require_once '../view/agregar_producto.php';
  ?>