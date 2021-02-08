var diasdelasemana = ["lunes","martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
var date4 = new Date(2009,3,21,12,15,00);
var date4day = diasdelasemana[date4.getDay()];
document.getElementById("diatexto").innerHTML = date4day;
