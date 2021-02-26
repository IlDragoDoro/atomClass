
function canviar(){
  var b = document.querySelectorAll('b');
  var canviar = document.getElementById('canviar');
  var span = document.querySelectorAll('span');
  //Para cada uno de los b:
  for (var i = 0; i < b.length; i++) {
    if(canviar.textContent == 'MOSTRAR'){ //Si el innerHTML del botón es MOSTRAR:
      b[i].removeAttribute('style'); //Elimino el estilo
      span[i].setAttribute('style','border: 0px'); // Quito el borde al span
      //canviar.innerHTML = 'AMAGAR'; -> Me da errores y no me deja cambiar los estilos...
    } else{
      //canviar.innerHTML = 'MOSTRAR'; Si es AMAGAR se cambiaría a mostrar pero me daba error
      b[i].setAttribute('style', 'display:none;border: 1px solid red'); //se cambiaría a display none y borde rojo
    }
  }
}

function encuadrar(){
var div = document.createElement('div');
div.setAttribute('id','div')
var p = document.querySelectorAll('p');
var body = document.getElementById('body');
var btn = document.getElementById('encuadrar');
for (var i = 0; i < p.length; i++) {
  var pepe = document.createElement('p');
  pepe.innerHTML = p[i].innerHTML;
  div.appendChild(pepe);
  console.log(div)
  p[i].remove();
}
  body.appendChild(div);
  btn.setAttribute('disabled','true');

}
