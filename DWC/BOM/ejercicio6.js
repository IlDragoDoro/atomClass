var ventana;
var int1;
function crear(){
ventana = window.open("","","width=200,height=200,resizable=yes,scrollbars=yes,location=yes,top=-1800,left=-1800");
int1 = ventana.setInterval(function(){
var x = ventana.screenX;
ventana.document.write(x);
if(x != 0){
  ventana.moveBy(-25,0);
}
else{
  ventana.moveBy(25,0);
}


},1000);

}

function parar(){
ventana.clearInterval(int1);
}

function cerrar(){
  ventana.clearInterval(int1);
  ventana.close();
}
