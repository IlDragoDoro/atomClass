window.onload = () => {
  $('#btn').click(function () { //Cojo el boton y le hago función al evento click
      var txt = $('#pattern').val(); //Cojo el valor del input
      $('body').find('.highlight').removeClass('highlight'); //Elimino cualquier highlight anterior
      var filtro = new RegExp(txt, 'ig'); //Creo un RegExp
      // Creo el string con el que reemplazar el texto
      var str = "<span class='highlight'>" + txt + '</span>';
      if (txt != '') { //Si el input no está vacío:
        $('body').each(function () { //Para cada elemento del body hace esto:
          //Reemplaza cada elemento que coincida por un span con highlight
          $(this).html($(this).html().replace(filtro, str));
        });
      }
    });
};
