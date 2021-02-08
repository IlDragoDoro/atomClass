function formulas(){
var radio = document.getElementById("radio").value;
var longitud = Math.round((radio*radio)*Math.PI);
var area = Math.round(2*(Math.PI*radio));
document.getElementById("ahzkl").innerHTML= "El area del circulo es: \n" + area + "<br>" + "La longitud del circulo es: \n" + longitud;
}
