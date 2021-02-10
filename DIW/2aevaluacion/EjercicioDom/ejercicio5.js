$(document).ready(function(){
   var i = 0;
$(document).on('mousemove',function(){
  var x1 = Math.round(Math.random()*700);
  var y1= Math.round(Math.random()*700);

  var x2 = Math.round(Math.random()*700);
  var y2= Math.round(Math.random()*700);

  var x3 = Math.round(Math.random()*700);
  var y3= Math.round(Math.random()*700);

  var x4 = Math.round(Math.random()*700);
  var y4= Math.round(Math.random()*700);

  var div = $('div');
  $(div[0]).animate({
    top: x1+'px'
  },1000);
  $(div[0]).animate({
    left: y1+'px'
  },1000);

  $(div[1]).animate({
    top: x2+'px'
  },1000);
  $(div[1]).animate({
    left: y2+'px'
  },1000);

  $(div[2]).animate({
    top: x3+'px'
  },1000);
  $(div[2]).animate({
    left: y3+'px'
  },1000);

  $(div[3]).animate({
    top: x4+'px'
  },1000);
  $(div[3]).animate({
    left: y4+'px'
  },1000);

});

$('div').click(function(){
$(this).attr('style','display:none');
i += 1;
$('#result').text('Has capturado: ' + i );
});
});
