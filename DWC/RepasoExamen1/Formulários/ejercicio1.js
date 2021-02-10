window.onload=()=>{
//Cojo el botón
  var submit = document.getElementById("submit");
  var txt = document.getElementById("txt");
  //Pillo todos los elementos del html
var name = document.getElementById("name");
var textarea =document.getElementById("textarea");
var m=document.getElementById("m");
var w = document.getElementById("w");
var havebicicle = document.getElementById("havebicicle");
var bicicles = document.getElementById("bicicles");
var havecar = document.getElementById("havecar");
var cars = document.getElementById("cars");
var sex;

document.onclick=()=>{
  if(havebicicle.checked){
    bicicles.removeAttribute("disabled");
  }else{
    bicicles.setAttribute("disabled","true");
  }

  if(havecar.checked){
    cars.removeAttribute("disabled");
  }else{
    cars.setAttribute("disabled","true");
  }
  if(m.checked){
    sex = "man";
    w.setAttribute("disabled","true");
  }else if (w.checked){
    sex = "woman";
    m.setAttribute("disabled","true");
  }
}
submit.onclick=()=>{
  txt.innerHTML= name.value + "," + textarea.value + "," + sex + "," + bicicles.value + "," + cars.value + "." ;
}
}
