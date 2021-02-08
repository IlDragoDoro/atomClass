function separato(){

    var mail = document.getElementById("email").value;
    var num = mail.indexOf("@");
    var div = mail.slice(0,num);
    var div2 = mail.slice(num+1);

    document.getElementById("divmail").innerHTML = "L'usuari és:" + div + "<br> El domini és:" + div2;

}
