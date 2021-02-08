window.onload=()=>{
  var puno = document.getElementById("puno");
  var pdos = document.getElementById("pdos");
  var ptres = document.getElementById("ptres");

  var auno = document.getElementById("auno");
  var ados = document.getElementById("ados");
  var atres = document.getElementById("atres");

  auno.onclick=()=>{
    if(auno.innerHTML == "Ocultar Contenido"){
      puno.setAttribute("hidden",true);
      auno.innerHTML="Mostrar Contenido";
    }else{
      puno.removeAttribute("hidden");
      auno.innerHTML="Ocultar Contenido";
    }
  };
  ados.onclick=()=>{
    if(ados.innerHTML == "Ocultar Contenido"){
      pdos.setAttribute("hidden",true);
      ados.innerHTML="Mostrar Contenido";
    }else{
      pdos.removeAttribute("hidden");
      ados.innerHTML="Ocultar Contenido";
    }
  }
  atres.onclick=()=>{
    if(atres.innerHTML == "Ocultar Contenido"){
      ptres.setAttribute("hidden",true);
      atres.innerHTML="Mostrar Contenido";
    }else{
      ptres.removeAttribute("hidden");
      atres.innerHTML="Ocultar Contenido";
    }
  }

}
