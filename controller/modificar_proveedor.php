<?php
  require_once '../model/proveedores.php';
  $id = $_GET["id"];//se obtiene el dato
  $proveedores = new Proveedores();
  $r = $proveedores->dato_proveedor($id);
  require_once "../view/modificar_proveedor.php"; //Se manda a llamar el archivo donde se tiene el formato de la tabla
  ?>