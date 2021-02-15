document.addEventListener('DOMContentLoaded', function () {
  var input = document.getElementById('input');
  var btn = document.getElementById('button');
  var time = document.getElementById('time');

  btn.onclick = () => {
    temporizador(input, btn, time);
  };
});

function temporizador(input, btn, time) {
  if (input.value > 0) {
    document.getElementById('txt').innerHTML = '';
    time.innerHTML = input.value;
    var a = input.value;
    var int = setInterval(function () {
      if (a > 0) {
        a -= 1;
        time.innerHTML = a;
      }else if (a == 0) {
        alert('Se ha acabado el tiempo!!');
        input.value = '';
        clearInterval(int);
      }
    }, 1000);

  }else {
    document.getElementById('txt').innerHTML = 'El tiempo debe ser mayor a 0';
    time.innerHTML = 0;
  }
}
