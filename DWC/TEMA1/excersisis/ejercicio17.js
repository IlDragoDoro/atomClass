var fechanacimiento = new Date(1984,01,07);
var fechaHoy = new Date();
var edad = fechaHoy.getFullYear() - fechanacimiento.getFullYear();
var diferenciameses = fechaHoy.getMonth() - fechanacimiento.getMonth();

if(diferenciameses <0 || (diferenciameses === 0  && fechaHoy.getDate() < fechanacimiento.getDate())
){
   edad = edad-1;
}

  document.getElementById("afklñ").innerHTML = "Tiene \n" + edad + "\n años";
