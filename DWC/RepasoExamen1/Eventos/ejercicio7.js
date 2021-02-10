window.onload=()=>{
var mouse = document.getElementById('mouse');
var keyboard = document.getElementById('keyboard');
var izquierdo = document.getElementById('izquierdo');
var derecho = document.getElementById('derecho');

document.onmousemove=(e)=>{
mouse.innerHTML=`Screen [${e.screenX},${e.screenY}]<br>
                  Page: [${e.pageXOffset},${e.pageYOffset}]`;
}
};
document.onmousedown = (e) => {
  if (e.button == 0) {
    izquierdo.innerHTML += ' si';
  }else if(e.button == 2){
    derecho.innerHTML += ' si';
  }

  document.onkeydown=(e)=>{
    keyboard.innerHTML=`Código: ${e.keyCode}<br>
                        Tecla: ${e.code}`;
  }
}
