window.onload=()=>{
  var uno = document.getElementById("uno");
  var dos = document.getElementById("dos");

  document.onmousemove=(e)=>{
    uno.innerHTML=`
                  ScreenX: ${e.screenX} ScreenY: ${e.screenY} <br>
                   ClientX: ${e.clientX} ClientY: ${e.clientY}`;
  }
  document.onmousedown=(e)=>{
    dos.innerHTML=`You clicked ${e.button}`;
  }
}
