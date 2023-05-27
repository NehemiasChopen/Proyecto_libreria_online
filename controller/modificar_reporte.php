<?php
  require_once '../model/atencion_cliente.php';
  $id = $_GET["id"];
  $atencion = new Atencion_cli();
  $u = $atencion->reporte_especifico($id); // se manda a llamar la funcion para obtener los datos
  foreach($u as $dato){
    $id = $dato["id_aten"];
    $nombre = $dato["nombre"];
    $correo = $dato["correo"];
    $telefono = $dato["telefono"];
    $motivo_mensaje = $dato["motivo_mensaje"];
    $detalles = $dato["detalles"];
    }
    $estado = 'Atendido';
  $atencion = new Atencion_cli();
  $u = $atencion->actualizar_especifico($id,$nombre,$correo,$telefono,$motivo_mensaje,$detalles,$estado);
  if($r=1){
    echo '<script>window.location.href = "../controller/listar_reportes.php";</script>';//Mensaje de confirmacion
 }else{
    echo '<div class="alert alert-danger d-flex align-items-center">Error</div>'; //Mensaje de indicador de error
 }
?>