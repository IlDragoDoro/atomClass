window.onload=()=>{
let formulario = document.getElementsByName("formulario")[0];
let elementos = formulario.elements;
let boton = document.getElementById("submit");

let validarNombre = function(){
  if(formulario.nombre.value == 0){
    alert("Completa el campo nombre");
  }
}

let validar = function(){
  validarNombre();
}

formulario.addEventListener("submit",validar);
}
