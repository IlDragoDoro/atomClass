function verify(){
    let x =document.getElementById("num").value;
    let text;

    if(isNaN(x) || x < (-1) || x > 1){
    text = "Valor no valido";
    }else{
        text = "Valor correcto";
    }
    document.getElementById("demo").innerHTML=text;
}
