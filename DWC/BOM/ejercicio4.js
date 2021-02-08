function guardarCookie(){
   nombre = document.getElementById("nombre").value;
   apellidos = document.getElementById("apellidos").value;
   window.open('ejer4.html','_self');
  document.cookie= nombre + " " + apellidos;
}
function mostrar(){
  if(document.cookie){
  document.getElementById("txt").innerHTML="Hola " + " " +  document.cookie;
  }
}
