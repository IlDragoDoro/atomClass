document.addEventListener('DOMContentLoaded', function () {
$('#select').click(function(){
  $(this).parents('tr').attr('style','background-color:yellow');
});

$('#delete').click(function(){
  $(this).parents('tr').remove();
});

$('#update').click(function(){
$('#insert').attr('value','Update');

var posiciones = "";
$(this).parents('tr').find('#position').each(function(){
  posiciones += $(this).html() + "\n";
});
var equipos = "";
$(this).parents('tr').find('#team').each(function(){
  equipos += $(this).html() + "\n";
});

var puntos = "";
$(this).parents('tr').find('#points').each(function(){
  puntos += $(this).html() + "\n";
});

$('#uno').val(posiciones[0]);
$('#dos').val(equipos);
$('#tres').val(puntos[0]+puntos[1]+puntos[2]);
});

$('#insert').click(function(){
  var position = $('#uno').val();
  var team = $('#dos').val();
  var points = $('#tres').val();

    if(position != '' && team != '' && points != '' ){
      var entrar = $("<tr><td id='position'>"+ position + "</td> <td id='team'>"+ team +"</td> <td id='points'> "+ points +"</td> <td> <button id='select' type='button' name='button'>Select</button> <button id='delete' type='button' name='button'>Delete</button> <button id='update' type='button' name='button'>Update</button></tr>")
      $('tbody').append(entrar);
      $('#uno').val('');
      $('#dos').val('');
      $('#tres').val('');
    }else{
      console.log('ERROR,HAY CAMPOS VACÍOS');
    }
});

$('#cancel').click(function(){
  $('#uno').val('');
  $('#dos').val('');
  $('#tres').val('');
});
});
