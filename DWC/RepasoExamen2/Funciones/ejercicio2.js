document.addEventListener('DOMContentLoaded', function () {
  var st = document.getElementById('st');
  var rt = document.getElementById('rt');
  var m = document.getElementById('m');
  var s = document.getElementById('s');
  var ms = document.getElementById('ms');

  var min = 00;
  var seg = 00;
  var miliseg = 00;
  st.onclick = () => {

    setInterval(function () {
      if (miliseg <= 98) {
        miliseg++;
        ms.innerHTML = miliseg;
      } else if (miliseg == 99 && seg <= 58) {
        seg++;
        s.innerHTML = seg;
        miliseg = 00;
      } else if (seg == 59) {
        seg = 00;
        min++;
        m.innerHTML = min;
      }
    }, 10);

  };
});
