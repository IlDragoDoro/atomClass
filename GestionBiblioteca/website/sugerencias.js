function sugerencias(str){
  if(str.length == 0){
    document.getElementById('sugerenciaTXT').innerHTML = '';
  } else {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        document.getElementById('sugerenciaTXT').innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "sugerencias.php?q="+str, true);
    xmlhttp.send();
  }
}
