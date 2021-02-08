$(function(){
  //Pongo los tipos de registro en mayusculas,minusculas,numeros,caracteres y la longitud minima de la contraseña
  var mayus = new RegExp("^(?=.*[A-Z])");
  var special = new RegExp("^(?=.*[!@#$%&*])");
  var numbers = new RegExp("^(?=.*[0-9])");
  var lower = new RegExp("^(?=.*[a-z])");
  var len = new RegExp("^(?=.{8,})");

  var regExp    = [mayus,special,numbers,lower,len];
  var elementos = [$("#mayus"),$("#special"),$("#numbers"),$("#lower"),$("#len")];
//Creo una función anonima para cuando se levanta la tecla que lea
  $("#password").on("keyup",function(){
   var pass = $("#password").val();
   var check = 0;
   for (var i = 0; i < 5; i++) {
     if (regExp[i].test(pass)) {
       elementos[i].hide();
       check++;
     }else{
       elementos[i].show();
     }
   }
   //Según la seguridad de la contraseña escribo un texto de un color u otroº
   if(check >= 0 && check <= 2){
     $("#mensaje").text("La contraseña no es segura").css("color","red");
   }else if(check >= 3 && check <= 4){
     $("#mensaje").text("La contraseña es poco segura").css("color","orange");
   }else if(check == 5){
     $("#mensaje").text("La contraseña es segura").css("color","green");
   }


  });
});
