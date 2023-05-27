<?php
  require_once '../model/usuario.php';
  $id = $_GET["id"];//se obtiene el dato
  $id_u = $_GET["id_u"];
  $Usuarios = new Usuarios();
  $u = $Usuarios->dato_cliente($id_u); // se manda a llamar la funcion para obtener los datos
  switch ($id) {
    case "1_u":
        require_once '../view/inicio.php'; //Se manda a llamar el archivo donde se tiene la vista de la tabla
      break;
    case "2_u":
        require_once '../controller/listaCategoria.php';
      break;
    case "3_u":
        require_once '../controller/listar_productoOferta.php';
      break;
    case "4_u":
        require_once '../controller/listaMarcas.php';
      break;
    case "5_u":
      require_once '../view/atencion_cliente.php';
      break;
    case "6_u":
        
      break;
    case "7_u":
      require_once '../controller/datos_cuenta.php';
      break;
    case "8_u":
      require_once '../controller/mostrar_favoritos.php';
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }

  ?>