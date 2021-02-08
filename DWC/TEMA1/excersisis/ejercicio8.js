function divideporcero(){

var texto = document.getElementById('texto').textContent;
var mitad = texto.length/2;

document.getElementById("resultado").innerHTML=texto.substr(0,mitad);
document.getElementById("resultadodos").innerHTML=texto.substr(mitad);

}
