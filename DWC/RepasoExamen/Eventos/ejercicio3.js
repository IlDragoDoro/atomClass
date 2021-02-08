window.onload=()=>{
  for(let elem of document.querySelectorAll('*')){
    elem.addEventListener('click',e=>alert(`capturing: ${elem.tagName}`),true);
    elem.addEventListener('click',e=>alert(`bubbling: ${elem.tagName}`));
  }
}
