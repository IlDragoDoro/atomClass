window.onload=()=>{
  document.addEventListener('click',function(e){
    var divs = document.querySelectorAll('div');
    for (var i = 0; i < divs.length; i++) {
      divs[i].removeAttribute('style');
      divs[i].setAttribute('style',`top:${e.clientY}px;left:${e.clientX}px;width:200px;height:200px;background-color:red;position:absolute;`);
        document.body.append(div2);
    }


  })
}
