<?php
foreach($u as $dato){
    $id_u = $dato["id_user"];
    $nombre = $dato["correo"];
    $nom = $dato["nombre"];
    $rol = $dato["rol"];
    $password = $dato["pasword"];
    $direccion = $dato["direccion"];

    require_once '../view/cuenta.php';
}
?>