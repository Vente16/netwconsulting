$(document).ready(function(){

	$("#login-carga").hide();

	$(".notification").hide();
  $("#success-update").hide();
  $("#danger-update").hide();
  
  $("#btn-actualizar").click(function(e){
    
     e.preventDefault();

     var datos = {
     	  "user": $("#email").val(),
        "pass": $("#pass").val(),
        "nombre": $("#nombre").val(),
        "apellido": $("#apellido").val(),
        "id":  $("#id").val(),
        "metodo": 'actualizar'
        };
        
        $("#login-carga").show();

       setTimeout(function(){ 

       	$.post( "../api/controller/user.controller.php", datos,function( data ) {
             $("#login-carga").hide();

            if (data == 0) {
               $("#success-update").show();
               $("#bd-versions").html(datos.nombre);
               $("#login-carga").hide();
               $("#danger-update").hide();
            }else{
                $("#danger-update").show();
                $("#login-carga").hide();
                $("#success-update").hide();
            }  
             
       });

       }, 2000);
          
     
    
  
  });

});