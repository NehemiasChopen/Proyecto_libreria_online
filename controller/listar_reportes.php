<?php
  require_once '../model/atencion_cliente.php';
  $atencion = new Atencion_cli();
  $f = $atencion->obtener_reporte(); // se manda a llamar la funcion para obtener los datos
  require_once "../view/tabla_reportes.php"; //Se manda a llamar el archivo donde se tiene el formato de la tabla
  ?>