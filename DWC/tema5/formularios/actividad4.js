window.onload=()=>{
// Variables ->
var today = new Date();
var edad;
var date;
var bd = document.getElementById("bd");
var fi = document.getElementById("fi");
var name = document.getElementById("name");
var email = document.getElementById("email");
var telephone = document.getElementById("phone");
var birthday = document.getElementById("birthday");
var first = document.getElementById("first");
var password = document.getElementById("password");
var password2 = document.getElementById("password2");
var checkbox = document.getElementById("checkbox");

birthday.onchange=()=>{
  date = new Date(birthday.value);
  var anyo = today.getFullYear();
   edad = anyo - date.getFullYear() ;
  bd.innerHTML= "Tienes " + edad + " años.";
  first.removeAttribute("disabled");
}

first.onchange=()=>{
  var undef = document.getElementById("first").value;
  var unde = new Date(undef);
  var radiola = unde.getFullYear();
  var teddy = radiola - date.getFullYear();

  if(teddy >= 16){
    fi.innerHTML=" tenias " + teddy + " años.";
    fi.style.color="black";
  }else {
    fi.innerHTML=" solo tenias " + teddy + " años!, revisalo.";
    fi.style.color="red";
  }
}

password.onkeyup=()=>{
var ok = document.getElementById("seguridad");
var pass = password.value;
if(pass.length >= 8 && pass.length <= 16){
ok.innerHTML="";

}else{
  ok.innerHTML="La contraseña debe tener al menos 8 digitos";
  ok.style.color="red";
}
}

password2.onkeyup=()=>{
  var siuu = document.getElementById("siuu");
  if(password2.value == password.value){
    siuu.innerHTML="Las contraseñas coinciden";
    siuu.style.color="green";
  }else{
    siuu.innerHTML="Las contraseñas deben ser iguales";
    siuu.style.color="red";
  }
}
}
