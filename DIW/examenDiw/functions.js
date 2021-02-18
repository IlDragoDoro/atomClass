document.addEventListener("DOMContentLoaded",function(){
var posicionBoton = $("#abajo").offset().top;
$("html, body").animate({scrollTop:posicionBoton+"px"});

  $("#arriba").click(function(){
    $("html, body").animate({scrollTop:"0px"});
  });
  $('#abajo').click(function(){
    var altura = $(document).height();
    $("html, body").animate({scrollTop:altura+"px"});
  });
});
