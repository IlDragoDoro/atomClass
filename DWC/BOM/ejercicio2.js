

  function actualizar_reloj(){
    var array_imagenes = ["img/c0.gif","img/c1.gif","img/c2.gif","img/c3.gif","img/c4.gif","img/c5.gif","img/c6.gif","img/c7.gif","img/c8.gif","img/c9.gif"];
    var tiempo_actual = new Date();

    var hora_actual = tiempo_actual.getHours();
    var hora_izquierda=Math.floor(hora_actual / 10);
    var hora_derecha=hora_actual % 10;

    document.images["hora1"].src=array_imagenes[hora_izquierda];
    document.images["hora2"].src=array_imagenes[hora_derecha];

    var minuto_actual=tiempo_actual.getMinutes();
    var minuto_izquierdo=Math.floor(minuto_actual / 10);
    var minuto_derecho=minuto_actual % 10;
    document.images["minuto1"].src=array_imagenes[minuto_izquierdo];
    document.images["minuto2"].src=array_imagenes[minuto_derecho];

    var segundo_actual=tiempo_actual.getSeconds();
    var segundo_izquierdo=Math.floor(segundo_actual / 10);
    var segundo_derecho=segundo_actual % 10;
    document.images["segundo1"].src=array_imagenes[segundo_izquierdo];
    document.images["segundo2"].src=array_imagenes[segundo_derecho];
  }
    var intervalo = setInterval("actualizar_reloj()", 1000);
