//Creo un contador
var i = 1;
//creo variable 'int' con funcion setInterval
  var int = setInterval(function () {
    document.getElementById('div').style.width =i+'%'; //Hago que el width sea del 1%
    i++; //Sumo +1 a 'i'
    if(i>=101){ //si el width es menor o igual a 101 escondo el submit
      clearInterval(inter2);
    document.getElementById('submit').style.display = "none";
    }
  },30); //El intervalo es de 30 ms
  //Compruebo que el contenido ha cargado
document.addEventListener('DOMContentLoaded',function () {
//Hago que el valor del botón cambie
document.getElementById('submit').onclick  = ()=>{
  var boton = document.getElementById('submit').value;
  if (boton != 'COMENZAR') { //Cambia a comenzar
    clearInterval(int);
    document.getElementById('submit').value= 'COMENZAR';
}else{
  document.getElementById('submit').value= 'PARAR'; //cambia a parar
    var weed = document.getElementById('div').style.width;
    var wee = weed.slice(0,-1);
    var weed2  = Number(wee);
   int = setInterval(function () {
    if(weed2<=100){
    document.getElementById('div').style.width =weed2+'%';
      weed2++;
  }
    if(weed2>=101){
      clearInterval(int);
      document.getElementById('submit').style.display = "none";
    }
  },30);
}
}
})
