/*****************************************************************************************
classes.js
******************************************************************************************/
//Constructor de la classe classTabla
//tabla: L'objecte de la taula.
//filas: número files.
//columnas: número columnes.
//texto: text que es ficarà a les cel·les.
function classTabla(tabla, filas, columnas, texto) {
//Propietats de la classe classTabla
this.objTabla = tabla;
this.numFilas = filas;
this.numColumnas = columnas;
//this.textoInicial = texto;
//Mètodes de la classe classTabla
//Mètode que inserta una fila
//numFila: A partir de quina fila s'inserta
//textP: text que es posará en les cel·les
this.insertaFila = function(numFila, textoP) {
}
//Mètode que inserta moltes file
//numFila: A partir de quina fila s'inserta
//nRep número de files a insertar
//textP: text que es posará en les cel·les
this.insertaFilas = function(numFila, nRep, textoP) {
}
//Mètode que inserta una columna
//numFila: número fila on s'inserta
//texto: texte que es posarà en les cel·les de la fila insertada
//Retorna true si columna ben insertada, false en cas contrari
this.insertaColumna = function (numColumna, texto) {
}
//Mètode que esborra la columna en numColumna
//numColumna: número columna on s'esborrarà
this.borraColumna = function (numColumna) {
}
//Mètode intern que esborra una cel·la
//és privada, tot i que això no es pot definir en JS
//no fer servir tota sola perquè desquadra this.numFilas i this.numColumnas
this._borraCelda = function (numFila, numColumna) {
}
//Mètode que esborra la fila en numFila
//numFila: número fila on s'esborrarà
this.borraFila = function (numFila) {
}
//Mètode que canvia el contingut d'una cel·la
//numFila: número fila de la cel·la
//numColumna: número columna de la cel·la
this.cambiaCelda = function (numFila, numColumna, texto) {
}
//Mètode que canvia totes les cel·les de la taula per texto
//texto: text que es posarà dins les cel·les
this.cambiaCeldasTabla = function (texto) {
}
//Mètode que canvia el color de fons de la taula per pColor
//pColor: color
//Inicialitzar l'objecte
//crear la taula inicial això com s'ha especificat en el constructor
this.insertaFilas(0, this.numFilas, texto);
}
