document.addEventListener('DOMContentLoaded', function () {
  //Cojo el div donde pondré la tabla
  var tablaaqui = document.getElementById('tablaaqui');
  //Creo contadores para cada numero
    var uno = 0;
    var dos = 0;
    var tres = 0;
    var cuatro = 0;
    var cinco = 0;
    var seis = 0;
    var siete = 0;
    var ocho = 0;
    var nueve = 0;
    var diez = 0;
    // Hago una función para calcular un numero del 1 al 10 10.000 veces, y contar cuantas veces
    // ha salido cada uno
    for (var i = 0; i < 10000; i++) {
      var rand = Math.round(Math.random(1,11) * 10);
      if(rand == 1){
        uno++;
      }
      if(rand == 2){
        dos++;
      }
      if(rand == 3){
        tres++;
      }
      if(rand == 4){
        cuatro++;
      }
      if(rand == 5){
        cinco++;
      }
      if(rand == 6){
        seis++;
      }
      if(rand == 7){
        siete++;
      }
      if(rand == 8){
        ocho++;
      }
      if(rand == 9){
        nueve++;
      }
      if(rand == 10){
        diez++;
      }
    }
    console.log(tres);

    //Creo las tablas:
    var table = document.createElement('table');
    table.setAttribute('border',true);
    tablaaqui.appendChild(table);
    //Creo el thead:
    var thead = document.createElement('thead');
    table.appendChild(thead);
    //Creo los th:
    var th1 = document.createElement('th');
    var th2 = document.createElement('th');

    //Pongo los datos en los tr
    th1.innerHTML='<strong>NÚMERO</strong>';
    th2.innerHTML='<strong>FRECUÉNCIA</strong>';
    //Meto los thead
    thead.appendChild(th1);
    thead.appendChild(th2);

    //creo el tbody
    var tbody = document.createElement('tbody');
    table.appendChild(tbody);

    //creo los tr
    var tr1 = document.createElement('tr');
    var tr2 = document.createElement('tr');
    var tr3 = document.createElement('tr');
    var tr4 = document.createElement('tr');
    var tr5 = document.createElement('tr');
    var tr6 = document.createElement('tr');
    var tr7 = document.createElement('tr');
    var tr8 = document.createElement('tr');
    var tr9 = document.createElement('tr');
    var tr10 = document.createElement('tr');

    //creo los td
    var td1 = document.createElement('td');
    var td2 = document.createElement('td');
    var td3 = document.createElement('td');
    var td4 = document.createElement('td');
    var td5 = document.createElement('td');
    var td6 = document.createElement('td');
    var td7 = document.createElement('td');
    var td8 = document.createElement('td');
    var td9 = document.createElement('td');
    var td10 = document.createElement('td');
    var td11 = document.createElement('td');
    var td12 = document.createElement('td');
    var td13 = document.createElement('td');
    var td14 = document.createElement('td');
    var td15 = document.createElement('td');
    var td16 = document.createElement('td');
    var td17 = document.createElement('td');
    var td18 = document.createElement('td');
    var td19 = document.createElement('td');
    var td20 = document.createElement('td');

    //pongo los datos en los td
    td1.innerHTML = '1';
    td2.innerHTML = uno;

    td3.innerHTML = '2';
    td4.innerHTML = dos;

    td5.innerHTML = '3';
    td6.innerHTML = tres;

    td7.innerHTML = '4';
    td8.innerHTML = cuatro;

    td9.innerHTML = '5';
    td10.innerHTML = cinco;

    td11.innerHTML = '6';
    td12.innerHTML = seis;

    td13.innerHTML = '7';
    td14.innerHTML = siete;

    td15.innerHTML = '8';
    td16.innerHTML = ocho;

    td17.innerHTML = '9';
    td18.innerHTML = nueve;

    td19.innerHTML = '10';
    td20.innerHTML = diez;



    //pongo los td
    tr1.appendChild(td1);
    tr1.appendChild(td2);

    tr2.appendChild(td3);
    tr2.appendChild(td4);

    tr3.appendChild(td5);
    tr3.appendChild(td6);

    tr4.appendChild(td7);
    tr4.appendChild(td8);

    tr5.appendChild(td9);
    tr5.appendChild(td10);

    tr6.appendChild(td11);
    tr6.appendChild(td12);

    tr7.appendChild(td13);
    tr7.appendChild(td14);

    tr8.appendChild(td15);
    tr8.appendChild(td16);

    tr9.appendChild(td17);
    tr9.appendChild(td18);

    tr10.appendChild(td19);
    tr10.appendChild(td20);

    //pongo los tr
    tbody.appendChild(tr1);
    tbody.appendChild(tr2);
    tbody.appendChild(tr3);
    tbody.appendChild(tr4);
    tbody.appendChild(tr5);
    tbody.appendChild(tr6);
    tbody.appendChild(tr7);
    tbody.appendChild(tr8);
    tbody.appendChild(tr9);
    tbody.appendChild(tr10);
});
