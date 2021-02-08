window.onload=()=>{
  //Pillo todos los botones en un array
var botones = document.querySelectorAll("button");
//Pillo en h1 donde quiero escribir
var h1 = document.getElementById("h1");

for (var i = 0; i < botones.length; i++) {
  //Creo un bucle para leer todos los botones individualmente
  botones[i].addEventListener('click',function(){
    //Añado un elemento de escucha de eventos a cada uno de los botones
    h1.innerHTML+=this.innerHTML;
    //Hago que el h1 contenga el elemento ''This'' que es el innerHTML en este caso
    //del elemento que hace el evento click.
  });
}

}
