window.onload = () => {
  var botones = document.querySelectorAll('button');
  var player = 1;
  var winner = document.getElementById('winner');
  for (var i = 0; i < botones.length; i++) {
    botones[i].addEventListener('click', function () {
      if (this.innerHTML == '' && player == 1) {
        this.innerHTML = 'X';
        player = 2;
      }else if(this.innerHTML == '' && player == 2) {
        this.innerHTML = 'O';
        player = 1;
      }
      //Horizontal
      if (botones[0].innerHTML == botones[1].innerHTML && botones[1].innerHTML== botones[2].innerHTML
        && botones[0].innerHTML != '' && botones[1].innerHTML != '' && botones[2].innerHTML != '' ){
          winner.innerHTML="Has ganado " + botones[0].innerHTML;
     }if (botones[3].innerHTML == botones[4].innerHTML && botones[4].innerHTML == botones[5].innerHTML
          && botones[3].innerHTML != '' && botones[4].innerHTML != '' && botones[5].innerHTML != '' ){
            winner.innerHTML="Has ganado " + botones[3].innerHTML;
     }if (botones[6].innerHTML == botones[7].innerHTML && botones[7].innerHTML== botones[8].innerHTML
            && botones[6].innerHTML != '' && botones[7].innerHTML != '' && botones[8].innerHTML != '' ){
              winner.innerHTML="Has ganado " + botones[6].innerHTML;
    }

    //vertical
    if (botones[0].innerHTML == botones[3].innerHTML && botones[3].innerHTML== botones[6].innerHTML
           && botones[0].innerHTML != '' && botones[3].innerHTML != '' && botones[6].innerHTML != '' ){
             winner.innerHTML="Has ganado " + botones[0].innerHTML;
    }
    if (botones[1].innerHTML == botones[4].innerHTML && botones[4].innerHTML== botones[7].innerHTML
           && botones[1].innerHTML != '' && botones[4].innerHTML != '' && botones[7].innerHTML != '' ){
             winner.innerHTML="Has ganado " + botones[1].innerHTML;
    }
    if (botones[2].innerHTML == botones[5].innerHTML && botones[5].innerHTML== botones[8].innerHTML
           && botones[2].innerHTML != '' && botones[5].innerHTML != '' && botones[8].innerHTML != '' ){
             winner.innerHTML="Has ganado " + botones[2].innerHTML;
    }

    //Paralelo
    if (botones[0].innerHTML == botones[4].innerHTML && botones[4].innerHTML== botones[8].innerHTML
           && botones[0].innerHTML != '' && botones[4].innerHTML != '' && botones[8].innerHTML != '' ){
             winner.innerHTML="Has ganado " + botones[0].innerHTML;
    }
    if (botones[2].innerHTML == botones[4].innerHTML && botones[4].innerHTML== botones[6].innerHTML
           && botones[2].innerHTML != '' && botones[4].innerHTML != '' && botones[6].innerHTML != '' ){
             winner.innerHTML="Has ganado " + botones[2].innerHTML;
    }
    });
  }
};
