document.addEventListener('DOMContentLoaded', function () {

  var lista = document.getElementById('lista');
  var botones = document.querySelectorAll('button');
  var li = document.querySelectorAll('li');

botones[0].onclick=function(){
  lista.setAttribute('style','display:none');
}

botones[1].onclick=function(){
  lista.removeAttribute('style');
}

botones[2].onclick=function(){
  var lidown =document.createElement('li');
  lidown.innerHTML = "Nuevo elemento";
  lista.appendChild(lidown);
}

botones[3].onclick=function(){
  var liup =document.createElement('li');
  liup.innerHTML = "Nuevo elemento";
  var primero = li[0];
  console.log(primero);
  lista.insertBefore(liup,primero);
}

botones[4].onclick=function(){
    li[li.length-1].remove();
}

botones[5].onclick=function(){
    li[0].remove();
}

botones[6].onclick=function(){
     var replace =document.createElement('li');
     replace.innerHTML='This is the first';
    lista.replaceChild(replace,li[0]);
}

botones[7].onclick=function(){
li[li.length - 1].innerHTML += 'LAST';
}

botones[8].onclick=function(){
var aux = li[0].innerHTML;
li[0].innerHTML = li[li.length-1].innerHTML;
li[li.length-1].innerHTML=aux;
}

botones[9].onclick=function(){
  var clon = li[li.length-1].cloneNode(true);
  lista.appendChild(clon);
}


});
