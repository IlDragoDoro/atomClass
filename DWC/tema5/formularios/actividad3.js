window.onload=()=>{
var txt = document.getElementById("txt"); //Elijo el input
var selector = document.getElementById("selector"); //Elijo el selector

selector.onchange=()=>{ //Cuando cambie el option ejecutará el siguiente bloque de codigo:
  var std = selector.options[selector.selectedIndex].text;
  if(std == "binario"){
    txt.value="";
    txt.onkeyup=(e)=>{
      if(e.key == 0 || e.key == 1){
        txt.innerHTML=e.key;
      }else{
        var valor = txt.value;
        txt.value=valor.substring(0,valor.length-1);
      }
    }
  }else if(std == "octal"){
    txt.value="";
    txt.onkeyup=(e)=>{
      if(e.key != NaN && e.key >=0 && e.key <=7){ //Si es numerico entre 1 y 7 hará lo de abajo:
        txt.innerHTML=e.key;
      }else{
        var valor = txt.value;
        txt.value=valor.substring(0,valor.length-1);

      }
    }
  }else if(std == "decimal"){
    txt.value="";
    txt.onkeyup=(e)=>{
      if(e.key != NaN && txt.value >=0 && txt.value <= 127){ //Si es numerico entre 0 y 127 hará lo de abajo:
        txt.innerHTML=e.key;
      }else{
        var valor = txt.value;
        txt.value=valor.substring(0,valor.length-1);
      }
    }
  }else if(std == "hexadecimal"){
    txt.value="";
    var hex = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F',
                'a', 'b', 'c', 'd', 'e', 'f'];
    txt.onkeyup=(e)=>{
      if(hex.includes(e.key)){ //Si incluye algún elemento del array hará lo siguiente:
        txt.setAttribute("maxLength","6");
        txt.innerHTML=e.key; //El contenido del input será la tecla seleccionada
      }else{//si no
        var valor = txt.value; // el valor se guardará aquí
        txt.value=valor.substring(0,valor.length-1); // y el valor del input eliminará el ultimo
      }
    }
  }
}
}
