<?php 
   
  session_start();
  require_once "../models/usuarios.class.php";

  

  $user = new usuarios();

  $method = $_POST['metodo'];

  if (empty($method)) {
     $method = 'default';
  }



    switch ($method) {
    	case 'login':
    	    $data = $user->login($_POST['user'], $_POST['pass']);
    	    //
            if ($data == 1) {
                $id_user = $user->consultarUser($_POST['user']);
                $_SESSION["id_user"]= $id_user;
               
            } 

    	    echo $data;
    		break;

        case 'actualizar':
    	    $valid = $user->contUserId($_POST['user'], $_POST['id']);
            if ($valid == 0) {
                $data = $user->actualizarUsuarios($_POST['user'], $_POST['pass'], $_POST['nombre'], $_POST['apellido'], $_POST['id']);
            }
            echo $valid;
    		break;

    	case 'registrar':
            $valid  = $user->contUser($_POST['user']);
            $data = 0;
            if ($valid == 0) {
            	$user->registrarUsuarios($_POST['user'], $_POST['pass'], $_POST['nombre'], $_POST['apellido']);
                $data = 1;
            }

            echo $data;

    	    break;

    	
    	default:
    		echo "No se ha elegido ningún método.";
    		break;
    }













 ?>