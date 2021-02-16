document.addEventListener("DOMContentLoaded", function () {

  rojo(); //Llamo a la función rojo
  azul(); //Llamo a la función azul

});

function rojo(){ //Para el botón rojo
  var rojo = document.getElementById('rojo'); //Cojo el botón
  var red = 255; //Hago una variable para el color
  rojo.onclick=()=>{ //Hago un método
    if(red > 0){ //Si es mayor a 0 resta 15
      red -= 15;
      rojo.setAttribute('style','background-color:rgb(' + red + ',0,0)');
    } else if(red == 0){ //si es 0 vuelve a su posición original
      rojo.setAttribute('style','background-color:rgb(255,0,0)');
    }
  }
}

function azul(){ //Para el botón azul
  var azul = document.getElementById('azul'); //Cojo el botón
  var blue = 255; //Hago una variable para el color
  azul.onclick=()=>{ //Hago un método
    if(blue > 0){ //Si es mayor a 0 resta 15
      blue -= 15;
      azul.setAttribute('style','background-color:rgb(0,0,'+ blue + ')');
    } else if(blue == 0){ //si es 0 vuelve a su posición original
      azul.setAttribute('style','background-color:rgb(0,0,255)');
    }
  }
}
