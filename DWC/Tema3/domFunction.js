document.addEventListener("DOMContentLoaded",function(){
  var links = document.getElementsByTagName("a");
  var numLinks = document.getElementsByTagName("a").length;
  var paragrafos = document.getElementsByTagName("p");
  var numParagrafos = document.getElementsByTagName("p").length;
  var penultimoLink = document.getElementsByTagName("a")[numLinks-2];
  var ultimoLink = document.getElementsByTagName("a")[numLinks-1];
  var contador = 0;

for (var i = 0; i < links.length; i++) {
  if (links[i] == "http://prueba" || links[i] == "http://prueba/" ) {
    contador ++;
  }
}

var paragrafo1= paragrafos[0].getElementsByTagName("a").length;
var paragrafo2=paragrafos[1].getElementsByTagName("a").length
var paragrafo3=paragrafos[2].getElementsByTagName("a").length
var paragrafo4=paragrafos[3].getElementsByTagName("a").length
var paragrafo5=paragrafos[4].getElementsByTagName("a").length
var paragrafo6=paragrafos[5].getElementsByTagName("a").length



document.getElementById("info").innerHTML= "El numero de links es: " + numLinks + "<br>" +
"El numero de parágrafos es: " + numParagrafos + "<br>" + "El penultimo enlace es: " + penultimoLink
+ "<br>" + "El último enlace es: " + ultimoLink + "<br>" + "El número de enlaces a http://prueba es: " + contador + "<br>"+
"El numero de enlaces del paragrafo uno es: " + paragrafo1 + "<br>" + "El numero de enlaces del paragrafo dos es: " + paragrafo2 + "<br>" +
"El numero de enlaces del paragrafo tres es: " + paragrafo3 + "<br>" + "El numero de enlaces del paragrafo cuatro es: " + paragrafo4 + "<br>" +
"El numero de enlaces del paragrafo cinco es: " + paragrafo5 + "<br>" + "El numero de enlaces del paragrafo seis es: " + paragrafo6;

});
