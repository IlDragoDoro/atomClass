document.addEventListener("DOMContentLoaded",function(){
var array = [9,5,6,7,2,1,3,4,8,10]; //Creo un array
ordenar(array); //Llamo a la función ordenar()
mediana(array); //llamo a la función mediana()
});

function ordenar(array){ //Creo una función para ordenar el array
  for (var i = 0; i < array.length; i++) { //Primer bucle
    var aux; //La variable me ayudará a guardar un dato
    var min = i; //El minimo
    for (var j = i+1; j < array.length; j++) { //Segundo bucle
      if(array[j] < array[min]){ //si J es menor a Min
        min=j; //cambio
      }
    }
    aux = array[i]; //Cambio posiciones
    array[i]=array[min];
    array[min]=aux;

    console.log(array[i]); //Enseño el array ordenado por consola
  }
}


function mediana(array){ //Función para sacar la mediana
  var mediana = 0; //La mediana la inicializo en 0
  var txt = document.getElementById('mediana'); //Cojo el H1 del html
  if(array.length % 2 == 0){ //Si es par:
    var uno = array[(array.length/2)-1]; //Guardo en variables los valores
    var dos = array[array.length/2];
    mediana = (uno+dos)/2; //calculo la mediana
    txt.innerHTML = 'El array es par y la mediana es: ' + mediana; //Enseño la mediana en el h1

  }else   if(array.length % 2 != 0){ //Si es impar
    var pos = Math.round(array.length/2);
    //Solo cojo el valor del centro (Hago math.round por que me salia obviamente decimal)
    mediana = array[pos]; //Guardo el valor
    txt.innerHTML = 'El array es impar y la mediana es: ' + mediana; //Muestro la mediana en el h1

  }
}
