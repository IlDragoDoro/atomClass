window.onload=()=>{
  let txt = document.getElementById("txt");
  let map = document.getElementById("map");
  let latitude;
  let longitude;
 if(navigator.geolocation){
   navigator.geolocation.getCurrentPosition(showPosition, showError);
 }else{
   txt.innerHTML="Geolocation is not supported by this browser";
 }
}

function showPosition(position){
   latitude =  position.coords.latitude;
   longitude= position.coords.longitude;
  txt.innerHTML="Latitude: " + latitude +
  "<br>Longitude: " + longitude ;
  map.innerHTML="<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12298.392054853459!2d"+longitude+"!3d"+latitude+"!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1608108847689!5m2!1ses!2ses' width='100%'height='450' frameborder='0' style='border:0;'' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>"
}

function showError(){
  switch (error.code) {
    case error.PERMISSION_DENIED:
    txt.innerHTML= "user denied the request for Geolocation."
    break;
    case error.POSITION_UNAVAILABLE:
    txt.innerHTML="Location information is unavailable."
    break;
    case error.TIMEOUT:
    txt.innerHTML="The request to get user location timed out."
    break;
    case error.UKNOWN_ERROR:
    txt.innerHTML="An uknown error occurred."
    break;
  }
}
