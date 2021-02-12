document.addEventListener('DOMContentLoaded', function () {
$('#select').click(function(){
  $(this).parents('tr').attr('style','background-color:yellow');
});

$('#delete').click(function(){
  $('td').remove();
});

$('#update').click(function(){
  $('#uno').val($('td').parents('#position'));
  $('#dos').val('team');
  $('#tres').val('50');
});
});
