<?php
  require_once '../model/usuario.php';
  $id_u = $_GET["id_u"];//se obtiene el dato
  $rol = $_GET["rol"];
  $Usuarios = new Usuarios();
  $o = $Usuarios->dato_cliente($id_u); // se manda a llamar la funcion para obtener los datos
  if($rol == 'cliente'){
    require_once '../view/bienvenida.php'; //Se manda a llamar el archivo donde se tiene la vista de la tabla
  }else{
    require_once '../view/inicioAdmin.php'; //se manda a llamar el archivo de la pagina de administrador
  }

  ?>