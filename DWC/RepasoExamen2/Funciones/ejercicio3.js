window.onload = ()=> {
  var btn = document.getElementById('alicer');
  btn.onclick = ()=> {
    hola('radiola');
  };

}

function hola(nombre) {
  alert('hola ' + nombre);
};
