document.addEventListener('DOMContentLoaded', function () {
  var cont = 0;
  var btn = document.getElementById('btn');
  var error = document.getElementById('error');
  var txt = document.getElementById('txt');
  //Miro si hay al menos 2 motivos seleccionados:
   document.getElementById('uno').onclick = () => {
     if(uno.checked){
       cont++;
     }
   }
   document.getElementById('dos').onclick = () => {
     if(dos.checked){
       cont++;
       console.log(cont);
     }
   }
   document.getElementById('tres').onclick = () => {
     if(uno.checked){
       tres++;
     }
   }
   document.getElementById('cuatro').onclick = () => {
     if(uno.checked){
       cuatro++;
     }
   }

  btn.onclick = () => {
    var code = document.getElementById('code').value; //cojo el codigo
    var regExp = /^RF([0]{5}|5[0]{4})([a-z]{2}|[A-Z]{1})$/g; //creo el regExp

    if(code.match(regExp)){//Compruebo si el codigo es valido
      console.log('el codigo es correcto');
      error.textContent ='';
      error.style.color = 'black';
      error .style.backgroundColor = 'white';
    }else{ //si no lo es da error
      console.log('el codigo no es correcto');
      error.textContent = 'NO SIGUE EL PATRÓN';
      error.style.color = 'white';
      error .style.backgroundColor = 'red';
    }

    //Si el contador no es 2 o + muestro error:
    if(cont < 2){
      txt.textContent = 'Debes seleccionar 2 opciones!';
    }else{

    }txt.textContent = '';
  }
  //Miro si está check ''otros''
  var check = document.getElementById('check');
  var ta = document.getElementById('ta');

  check.onclick = () => {
    if(check.checked == true){
      ta.removeAttribute('style');
    }else{
      ta.setAttribute('style','display:none');
    }
  }

  var img = document.getElementById('img');
  document.getElementById('r1').onclick = () => {
    img.src = 'img/receptes.jpg';
  }

  document.getElementById('r2').onclick = () => {
    img.src = 'img/llibres.jpg';
  }

  document.getElementById('r3').onclick = () => {
    img.src = 'img/jocs.jpg';
  }
});
