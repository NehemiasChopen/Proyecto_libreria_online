<?php
  require_once '../model/proveedores.php';
  $proveedor = new Proveedores();
  $f = $proveedor->listar_proveedor(); // se manda a llamar la funcion para obtener los datos
  require_once "../view/tabla_proveedores.php"; //Se manda a llamar el archivo donde se tiene el formato de la tabla
  ?>