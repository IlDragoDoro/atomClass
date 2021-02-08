


function calculate(){
  var a = document.getElementById("uno").value;
  var b = document.getElementById("dos").value;
  if (a == 0) {
    document.getElementById("texto").innerHTML="No es una ecuación de primer grado";
  }
  x =- b/a;
   document.getElementById("texto").innerHTML=x;


}
