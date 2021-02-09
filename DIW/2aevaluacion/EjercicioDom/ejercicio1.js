window.onload = () => {
  var p = document.querySelectorAll('p');
  var b = document.querySelectorAll('button');
$("button").click(function(){
  console.log(p);
if(this == b[0]){
  $(p[0]).attr('style','display:none');
}
if(this == b[1]){
  $(p[1]).attr('style','display:none');
}
});
};
