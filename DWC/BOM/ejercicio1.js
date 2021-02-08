var ventana;
function abrir(){
  var confirmar = confirm('Quieres abrir una página nueva?');
  if (confirmar == true){
     ventana = window.open("","_blank","width=200,height=80,toolbar=no,location=no,menubar=no,resizable=no,top=500,left=500");
     ventana.document.write("<p>Un pequeño texto</p> <br> <button onclick='window.close()'>Cerrar</button>");
  }else{
    alert('operación cancelada por el usuario');
  }
}
function cerrar(){
  if(ventana == null){
    alert("La ventana ya estaba cerrada");
  }else{
    ventana.close();
    ventana=null;
  }
}
function moverNum(){
  ventana.moveBy(10,10);
}
function moverA(){
  ventana.moveTo(100,100);
}
function aumentar(){
ventana.resizeBy(10,10);
}
function ampliar(){
  ventana.resizeTo(400,200);
}
