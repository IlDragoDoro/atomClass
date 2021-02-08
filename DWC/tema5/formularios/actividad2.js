window.onload=()=>{
var textarea = document.getElementById("name");
var txt = document.getElementById("txt");
var max = 150;
textarea.onkeyup=()=>{
if(textarea.value.length > 0){
var total = max - textarea.value.length;
txt.innerHTML=total + " caracteres restantes";
}
if(textarea.value.length == 0){
  txt.innerHTML="150 caracteres restantes";
}
}

}
