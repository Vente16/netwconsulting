 <?php 
 session_start();

    require_once "../api/models/usuarios.class.php";
    $user = new usuarios();

    if (!empty($_SESSION['id_user'])) {
      $datos = $user->consultarUserid($_SESSION['id_user']);

      foreach ($datos as $k) {
        $nombre   = $k["nombre"];
        $apellido = $k["apellido"];
        $email    = $k["email"];
        $pass     = $k["pass"];

      }

    }else{
       header("Location: ../index.php");

    }
    

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portal web - Inicio</title>
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>
<body>
     
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin.php">Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin.php">Incio <span class="sr-only">(current)</span></a>
        </li>
       
      </ul>

     <li class="nav-item dropdown" style="list-style:none;">
      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">
        <?=$nombre?>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">

         <a class="dropdown-item" href="edit-user.php">Actualizar mis datos <i class="fas fa-user-edit"></i></a>
        <a class="dropdown-item" href="logout.php"> Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
       
      </div>
    </li>
       

     
    </div>
  </nav>
	 

	 <div class="container">
        <form style="padding-top: 3%;">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
     <input type="hidden" id="id" value="<?=$_SESSION['id_user']?>">
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresa correo"  value="<?=$email?>" required min="5" max="100">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contaseña</label>
    <input type="password" class="form-control" id="pass" placeholder=" Ingresa Contraseña"  value="<?=$pass?>" required min="3" max="50">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder=" Ingresa nombre"  value="<?=$nombre?>" required min="3" max="30">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" id="apellido" placeholder="Ingresa apellido"  value="<?=$apellido?>" required min="3" max="30">
  </div>
  
  <button type="submit" class="btn btn-primary" id="btn-actualizar">Actualizar</button><br/><br>
    
    <img src="../images/ajax-loader.gif" alt="cargando..." style="height: 100px" id="login-carga">
    <div class="alert alert-success" role="alert" id="success-update">
       Se ha actualizado correctamente! <i class="fas fa-check-circle"></i>
      </div>

      <div class="alert alert-danger" role="alert" id="danger-update">
       Ya exite un usuario con este correo, por favor elige otro <i class="fas fa-exclamation-triangle"></i>
      </div>
</form> 
   </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../js/edit-user.js" type="text/javascript"></script>
</body>
</html>