document.addEventListener('DOMContentLoaded', function () {
  var div = document.getElementById('div');
  var i = 1;
  var stop = document.getElementById('stop');
  var td = document.getElementById('td');
  var interval = setInterval(function(){
    div.setAttribute('style','background-image: url("img/'+i+'.jpg")')
    if(i <= 7){
      i++;
      td.innerHTML = i;
    }else if(i == 8){
      i= 1;
      td.innerHTML = i;
    }

  },3000);

  stop.onclick = () => {
    clearInterval(interval);
  }
})
