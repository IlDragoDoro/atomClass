function seleccionar(a) { //Función para seleccionar el TR
  a.parentNode.parentNode.setAttribute('style', 'background-color:yellow');

  //Selecciona el tr que tiene los td dentro poniendoles un background de color amarillo
}

function eliminar(a) {
  a.parentNode.parentNode.remove();

  // Elimina el tr que contiene los td
}

function actualizar(a) {
  $('#insert').attr('value', 'Update');

  $pos = a.parentNode.parentNode.children[0].textContent;
  $team = a.parentNode.parentNode.children[1].textContent;
  $points = a.parentNode.parentNode.children[2].textContent;

  $('#uno').val($pos);
  $('#dos').val($team);
  $('#tres').val($points);
  $name = a.closest('tr');

  //Cojo los children de cada posición dentro del tr y les cambio el contenido al de los inputs
}

document.addEventListener('DOMContentLoaded', function () {
  $('#insert').click(function () {
    if ($('#insert').val() == 'Insert') {
      var position = $('#uno').val();
      var team = $('#dos').val();
      var points = $('#tres').val();

      if (position != '' && team != '' && points != '') {
        var entrar = $("<tr><td id='position'>" + position + "</td> <td id='team'>" +
          team + "</td> <td id='points'> " + points +
          "</td> <td> <button id='select' type='button' " +
          " name='button' onclick='seleccionar(this)'>Select</button> <button id='delete'" +
          "type='button' name='button' onclick='eliminar(this)'>Delete</button> <button id='update'" +
          " type='button' name='button' onclick='actualizar(this)'>Update</button></td></tr>");
        $('tbody').append(entrar);
        $('#uno').val('');
        $('#dos').val('');
        $('#tres').val('');

        //vacío los campos
      } else {
        console.log('ERROR,HAY CAMPOS VACÍOS');
      }
    } else {
      $pos = $name.children[0].textContent = $('#uno').val();
      $team = $name.children[1].textContent = $('#dos').val();
      $points = $name.children[2].textContent = $('#tres').val();

      //Cojo el children del tr mas cercano al evento (click) y cambio su textContent

      $('#insert').val('Insert'); //Cambio el valor al botón
      $('#uno').val('');
      $('#dos').val('');
      $('#tres').val('');

      //vacío los campos
    }

    //Si el botón es Insert inserto en un nuevo tr el nuevo contenido

    //Si es update cambio el contenido actual por el de los inputs
  });

  $('#cancel').click(function () {
    $('#uno').val('');
    $('#dos').val('');
    $('#tres').val('');
  });
});
