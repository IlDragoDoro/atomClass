document.addEventListener('DOMContentLoaded', function () {
var btn = document.getElementById('btn');

  btn.onclick = () => {
    //Cojo el mensaje y la clave
    var msg = document.getElementById('msg').value;
    var clave = document.getElementById('clave').value;

    var alfabeto = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t'
                    , 'u','v','w','x','y','z'];

     //Pensaba hacer un .split para separar los caracteres en un array,luego moverlos
     //de posición según el array de arriba y la clave dada y juntarlos de nuevo escribiendolos
     //en txt
     //Me faltó tiempo xD
});
