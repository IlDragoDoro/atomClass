window.onload=()=>{
  let txt = document.getElementById("txt");
  let btn = document.getElementById("btn");
  let ul =  document.getElementById("ul");

btn.onclick=()=>{
  var li = document.createElement("li");
  li.innerHTML= txt.value + " <button onclick='this.parentNode.remove()'>Borrar Tarea</button>";
  ul.appendChild(li);
  txt.value="";
 }
}
