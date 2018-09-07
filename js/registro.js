$(document).ready(function(){

	$("#login-carga").hide();

	$(".notification").hide();

  $("#registro").click(function(e){
    
     e.preventDefault();

     var datos = {
     	  "user": $("#user").val(),
        "pass": $("#pass").val(),
        "nombre": $("#nombre").val(),
        "apellido": $("#apellido").val(),
        "metodo": 'registrar'
        };
        
        $("#login-carga").show();

       
    
       setTimeout(function(){ 

       	$.post( "../api/controller/user.controller.php", datos,function( data ) {

              
             $("#login-carga").hide();
             console.log(data);
              
             $(".msj").click(function(e){
                e.preventDefault();
             	 $(".notification").hide();

             });

             if (data == 0) {
             	$(".noti-danger").show();
              $(".noti-success").hide(); 

             }else {
              $(".noti-success").show(); 
              $(".noti-danger").hide();

             }
       });

       }, 2000);
   
         
  });

});