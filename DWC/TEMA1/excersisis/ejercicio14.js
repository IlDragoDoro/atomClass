var date3 = new Date(2009,3,21,12,15,00);
document.getElementById("firstdate").innerHTML = date3;
var tresdias = date3.getDate() - 3;
var cincomeses = date3.getMonth() - 5;
var fechados =  tresdias + "/" +
                ("00"+date3.getMonth()).slice(-2)+"/"+
                date3.getFullYear()+" "+
                ("00"+ date3.getHours()).slice(-2)+":"+
                ("00"+date3.getMinutes()).slice(-2);
document.getElementById("seconddate").innerHTML=fechados;
