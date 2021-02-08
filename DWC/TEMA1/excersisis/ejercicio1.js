function cambiar(){
  var img = document.getElementById("imagen");
  if(img.src.match("cerrado.jpg")){
    img.src="abierto.jpg";
  }else{
    img.src="cerrado.jpg";
  }
}
