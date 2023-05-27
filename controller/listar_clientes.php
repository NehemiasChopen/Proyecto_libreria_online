<?php
  require_once '../model/usuario.php';
  $usuarios = new usuarios();
  $f = $usuarios->obtener_usuarios(); // se manda a llamar la funcion para obtener los datos
  require_once "../view/tabla_usuarios.php"; //Se manda a llamar el archivo donde se tiene el formato de la tabla
  ?>