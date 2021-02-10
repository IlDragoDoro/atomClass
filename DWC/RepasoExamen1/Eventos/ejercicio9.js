window.onload=()=>{
  var divs = document.querySelectorAll('div');

var interval =  setInterval(function(){
var aleatorio = Math.round(Math.random()*8);
    for (var i = 0; i < divs.length; i++) {
      divs[i].setAttribute('style','');
    }
      console.log(aleatorio);
      divs[aleatorio].setAttribute('style','background-color:red;')
      if(divs[aleatorio].style.backgroundcolor=="red"){
        divs[aleatorio].setAttribute('style','');
        divs[aleatorio].onclick=()=>{
          alert('has ganado');
          clearInterval(interval);
        }
      }else{
        clearInterval(interval);
        alert('has ganado');
      }
  },1000);



};
