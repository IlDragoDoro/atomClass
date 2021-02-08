function toOctal(){

    var decimal = document.getElementById("numdecimal").value;
    var octal;
    if(decimal <= 7){
        document.getElementById("palñs").innerHTML = decimal;
    }
    octal = Number(decimal,10).toString(8);
     document.getElementById("palñs").innerHTML = octal;


}
