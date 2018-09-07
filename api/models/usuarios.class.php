<?php 

  require_once "conexion.class.php";
 
    class usuarios{
  
	   public $con;

	   public function __construct(){
	  
	    $conexion = new conexion();
	    $this->con = $conexion->getConexion();

	   }

	  public function registrarUsuarios($email, $pass, $nombre, $apellido){
       
      $sql = "INSERT INTO usuarios (email, pass, nombre, apellido) 
      VALUES (:email, :pass, :nombre, :apellido)";
      $query = $this->con->prepare($sql);
      $query->bindParam(":email", $email);
      $query->bindParam(":pass", $pass);
      $query->bindParam(":nombre", $nombre);
      $query->bindParam(":apellido", $apellido);
      $query->execute();
    
	   }

	   public function login($email, $pass){

      $sql = "SELECT * FROM usuarios WHERE email=:email AND pass=:pass";
      $query = $this->con->prepare($sql);
      $query->bindParam(":email", $email);
      $query->bindParam(":pass", $pass);
      $query->execute();
      $int = 0;
      foreach ($query as $key) {
       	$int++;

      }  

       return $int;
     
	   }

    public function consultarUser($email){
    
    $sql = "SELECT id FROM usuarios WHERE email='$email'";
    $query = $this->con->prepare($sql);
    $query->bindParam(":email", $email);
    $id = $query->execute();

    foreach ($query as $key) {
       return $key["id"];
    }
  
    

    } 

     public function actualizarUsuarios($email, $pass, $nombre, $apellido, $id){
       
      $sql = "UPDATE usuarios SET email=:email, pass=:pass, nombre=:nombre, apellido=:apellido 
      WHERE id ='$id';";
      $query = $this->con->prepare($sql);
      $query->bindParam(":email", $email);
      $query->bindParam(":pass", $pass);
      $query->bindParam(":nombre", $nombre);
      $query->bindParam(":apellido", $apellido);
      $query->execute();
      if ($query) {
        return 1;
      }else{
        return 0;
      }
    
     }

     public function consultarUserid($id){
    
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $query = $this->con->prepare($sql);
    $query->execute();
  
    return $query;

    } 

     public function contUser($email){
    
    $sql = "SELECT COUNT(*) FROM usuarios WHERE email=:email";
    $query = $this->con->prepare($sql);
    $query->bindParam(":email", $email);
    $cuenta = $query->execute();
  
    foreach ($query as $key) {
       return $key["COUNT(*)"];
    }
  
  }

   public function contUserId($email, $id){
    
    $sql = "SELECT COUNT(*) FROM usuarios AS Total WHERE email='$email' AND id != '$id'";
    $query = $this->con->prepare($sql);
    $query->execute();
    foreach ($query as $key) {
       return $key["COUNT(*)"];
    }
    
  
  }

    


  }





    
 ?>