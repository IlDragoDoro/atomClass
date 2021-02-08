var date2 = new Date(2009,3,21,12,15,00);
document.getElementById("resssult").innerHTML = date2;
var date2Str = ("00" + date2.getDate()).slice(-2)+"/"+
                ("00"+date2.getMonth()).slice(-2)+"/"+
                date2.getFullYear()+" "+
                ("00"+ date2.getHours()).slice(-2)+":"+
                ("00"+date2.getMinutes()).slice(-2);
document.getElementById("resssult2").innerHTML=date2Str;
