document.addEventListener("DOMContentLoaded",function(){
var names1 = ['Name:','Status:','Closed:','Event:','Length:','InnerWidth:','InnerHeight:','ScrollX','PageXOffset:',
'ScrollY','PageYOffset','ScreenLeft:','ScreenTop:','ScreenX:','ScreenY','OuterWidth:','OuterHeight:','MozInnerScreenX:','MozInnerScreenY',
'DevicePixelRatio:','ScrollMaxX:','ScrollMaxY','FullScreen:','MozPaintCount:','Origin:','IsSecureContext:'];
var ventana = [window.name,window.status,window.closed,(window.event).value,
window.length,window.innerWidth,window.innerHeight,window.scrollX,window.pageXOffset,
window.scrollY,window.pageYOffset,window.screenLeft,window.screenTop,window.screenX,window.screenY,
window.outerWidth,window.outerHeight,window.mozInnerScreenX,window.mozInnerScreenY,window.devicePixelRatio,
window.scrollMaxX,window.scrollMaxY,window.fullScreen,window.mozPaintCount,window.origin,window.isSecureContext];
document.write("<h1>JavaScript Browser BOM</h1><h3>Window</h3>")

for (var i = 0; i < ventana.length; i++) {
  document.write(names1[i] + " " + ventana[i] + "<br>")
}
document.write("<h3>History:</h3>");
var names2= ['Length:','ScrollRestoration:'];
var historial = [window.history.length,window.history.scrollRestoration];
for (var i = 0; i < historial.length; i++) {
  document.write(names2[i]+" "+historial[i] + "<br>");
}
document.write("<h3>Location:</h3>");
var names3=['Href:','Origin:','Protocol:','Host:','Hostname:','Port:','PathName:','Search:','Hash:'];
var localizacion = [window.location.href,window.location.origin,window.location.protocol,window.location.host,
  window.location.hostname,window.location.port,window.location.pathname,window.location.search,window.location.hash]
  for (var i = 0; i < localizacion.length; i++) {
    document.write(names3[i] + " " + localizacion[i] + "<br>");
  }
  document.write("<h3>Navigator</h3>");
});
