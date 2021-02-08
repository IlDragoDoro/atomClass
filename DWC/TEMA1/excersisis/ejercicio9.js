function ej9(){
var texto = prompt('Introduce un texto','Escribe aquí tu texto');
var long = texto.length;
if(texto == null || texto == ""){
  document.getElementById('np').innerHTML="El usuario ha cancelado la acción";
} //Número de palabras.
document.getElementById('np').innerHTML="Numero de palabras: " + long;
//Primera palabra
var ppalabra = texto.substr(0,texto.indexOf(" "));
document.getElementById('fword').innerHTML="Primera palabra: "+ppalabra;
//Ultima palabra
var upalabra = texto.substr(texto.lastIndexOf(" "));
document.getElementById('sword').innerHTML="Última palabra: "+upalabra;
//Orden inverso
var inverso = texto.split(" ");
var reverse = inverso.reverse();
var joinText = reverse.join(" ");
document.getElementById("inverse").innerHTML="Orden inverso: "+joinText;
//A-Z
var ordenar = texto.split(" ").sort().join(" ");
document.getElementById("az").innerHTML="A-Z: "+ ordenar;
//Z-A
var invert = ordenar.split(" ").reverse().join(" ");
document.getElementById("za").innerHTML="Z-A: "+ invert;
//palindromo

var largo = Math.floor(texto.length/2);
for (var i = 0; i < largo; i++) {
if(texto[i]!==texto[texto.length-i-1])
return alert("No es un palindromo!");
return alert("Es un palindromo!!");
}


}
