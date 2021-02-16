document.addEventListener ("DOMContentLoaded", function () {


});

class Persona(nombre, correo, movil, dni){
this.nombre = nombre;
this.correo = correo;
this.movil = movil;
this.dni = dni;
}

class Docente(nombre, correo, movil, dni, cargo, Asignatura){
  this.nombre=nombre;
  this.correo=correo;
  this.movil=movil;
  this.dni=dni;
  this.cargo=cargo;
  this.Asignatura=Asignatura;
}

class Asignatura(nombre){
  this.nombre=nombre;
}
