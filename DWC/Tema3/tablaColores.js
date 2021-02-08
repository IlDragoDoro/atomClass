document.addEventListener("DOMContentLoaded", function(){
  var contenido = "";

  for (var i = 0; i < 20; i++) {
    var randomRed = Math.floor(Math.random()*256);
    var randomGreen = Math.floor(Math.random()*256);
    var randomBlue = Math.floor(Math.random()*256);
    contenido += "<tr> <td>" + randomRed + "</td>";
    contenido += "<td>"+randomGreen+"</td>";
    contenido += "<td>"+randomBlue+"</td>";
    contenido += "<td style=background-color:rgb("+ randomRed + "," + randomGreen + "," + randomBlue + ")></td></tr>"


  }
  document.getElementById("tBody").innerHTML=contenido;
});
