 <?php 
 session_start();

    require_once "../api/models/usuarios.class.php";
    $user = new usuarios();

    if (!empty($_SESSION['id_user'])) {
      $datos = $user->consultarUserid($_SESSION['id_user']);

      foreach ($datos as $k) {
        $nombre = $k["nombre"];
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
	 

	 <div class="container" style="padding-top: 2%;">
	     <div class="jumbotron">
	     	<center>
	     	<img src="../images/bienvenido.jpg" alt="" width="300" height="200">
			  <h1 class="display-4">Bienvenido (a)!</h1>
			  <p class="lead">A través de este portal podrás acualizar tus datos <br></p>
			  <hr class="my-4">
			 
			  <p class="lead">
			    <a class="btn btn-primary btn-lg" href="edit-user.php" role="button">Actualizar mis datoss</a>
			  </p>

		</center>
</div> 
	 </div>

	
</body>
</html>