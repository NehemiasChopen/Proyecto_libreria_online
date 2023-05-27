<?php
  require_once '../model/usuario.php';
  $id = $_GET["id"];//se obtiene el dato
  $Usuarios = new Usuarios();
  $r = $Usuarios->dato_cliente($id);
  require_once "../view/modificar_usuario.php"; //Se manda a llamar el archivo donde se tiene el formato de la tabla
  ?>