$(document).ready(function(){

	$("#login-carga").hide();

	$(".notification").hide();

  $("#btn-login").click(function(e){
    
     e.preventDefault();

     var datos = {
     	"user": $("#user").val(),
        "pass": $("#pass").val(),
        "metodo": 'login'
        };
        
        $("#login-carga").show();

       setTimeout(function(){ 

       	$.post( "api/controller/user.controller.php", datos,function( data ) {
             $("#login-carga").hide();
            
             $(".msj").click(function(e){
                e.preventDefault();
             	 $(".notification").hide();

             });

             if (data == 0) {
             	$(".notification").show(); 
             }else{
             	window.location.href = 'views/admin.php';
             
             }
       });

       }, 2000);
   

  });

});