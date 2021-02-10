window.onload=()=>{
  var txt = document.getElementById('txt');
  var search = document.getElementById('search');

  search.onclick=(e)=>{
    if(txt.value){
      search.setAttribute('href' , 'http://www.google.com/search?q='+txt.value);
    }
  }

}
