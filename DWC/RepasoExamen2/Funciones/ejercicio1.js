document.addEventListener('DOMContentLoaded', function () {
  var time = document.getElementById('time');
  var st = document.getElementById('st');
  var rt = document.getElementById('rt');
  st.onclick = () => {
    if (st.value == 'Start') {
      start(time, st);
    }else {
      stop(time, st);
    }
  };
});

function start(time, st) {
  st.value = 'Stop';
  var ms = 00;
  time.innerHTML = '00:00:' + ms;
}

function stop(time, st) {
  st.value = 'Start';
}

function reestablecer(time, rt) {

}
