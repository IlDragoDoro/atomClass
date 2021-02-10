window.onload = () => {
var divs = document.querySelectorAll('div');
var txt = document.getElementById('txt');
for (var i = 0; i < divs.length; i++) {
  divs[i].addEventListener('mouseenter', function(){
    txt.innerHTML=`Estás en: ${this.id}`;
  });
}
}
