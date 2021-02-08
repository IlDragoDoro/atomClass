function reloj() {
    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("hora").innerHTML  = this.response;
      }
    };
    xhttp.open("POST", "hora.php", true);
    xhttp.send();
  }
  setInterval(reloj, 1000);
