function dado(){

    var caras = document.getElementById("numerisidio").value;
    var numrandom = Math.round(Math.random()*caras);
    document.getElementById("result").innerHTML = numrandom;

}
