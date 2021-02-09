window.onload = () => {
$('#b1').click(function(){
$('li').attr('style','display:none');
});

$('#b2').click(function(){
$('li').attr('style','display');
});

$('#b3').click(function(){
$('ul').append("<li>Nuevo elemento</li>");
});

$('#b4').click(function(){
  var li = $('li');
$(li[0]).before("<li>Nuevo elemento</li>");
});

$('#b5').click(function(){
  ($('li')[$('li').length-1]).remove();
});

$('#b6').click(function(){
  ($('li')[0]).remove();
});

$('#b7').click(function(){
   var li = $('li');
  $(li[0]).replaceWith("<li>This is the first</li>");
});

$('#b8').click(function(){
  ($('li')[$('li').length-1]).append("(LAST)");
});

$('#b9').click(function(){
  var li = $('li');
  $(li[$('li').length-1]).replaceWith("<li>First item</li>");
  $(li[0]).replaceWith("<li>Forth item.</li>");
});

$('#b10').click(function(){
  var li = $('li');
  $(li[3]).before("<li>This is a new 4</li>");
});



};
