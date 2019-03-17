/**
 * Esta funcion verifica que el formulario de registro sea valido para
 * poder insertar los datos en la BD.
 * @return {valido: boolean} Si el formulario es valido o no.
 */
function validarRegistro() {
  let usuario = document.getElementById("usuario").value,
      password = document.getElementById("password").value,
      confirmPassword = document.getElementById("confirmPassword").value,
      email = document.getElementById("email").value,
      direccion = document.getElementById("direccion").value,
      codigoPostal = document.getElementById("codigoPostal").value,
      nombreCentroAcopio = document.getElementById("nombreCentroAcopio").value;

  /* Variable para comprobar si hay espacios en blanco , Variable
     para comprobar si hay letras, variable que devuelve los
     resultados de las comprobaciones */
  let sinEspacios = /\s/,
      letras = /[A-Za-z]/,
      valido = true;

  // Verifica si tienen espacios en blanco
  if(sinEspacios.test(usuario) || sinEspacios.test(password) || sinEspacios.test(email) || sinEspacios.test(codigoPostal)) {
    alert("El usuario, contraseña, email y codigo postal no deben tener espacios en blanco.");
    valido = false;
  }
  else if(usuario.length > 40) {
    alert("El usuario no debe tener mas de 40 caracteres.");
    valido = false;
  }
  else if(password.length > 30) {
    alert("La contraseña no debe tener mas de 30 caracteres.");
    valido = false;
  }
  else if(direccion.length > 120) {
    alert("La direccion no debe tener mas de 120 caracteres.");
    valido = false;
  }
  else if(codigoPostal.length != 5) {
    alert("El codigo postal debe tener 5 numeros.");
    valido = false;
  }
  // Verifica si hay letras en el codigo postal
  else if(letras.test(codigoPostal)) {
    alert("El codigo postal debe ser solo numeros.");
    valido = false;
  }
  else if(nombreCentroAcopio.length > 100) {
    alert("El nombre del centro de acopio no debe tener mas de 100 caracteres.");
    valido = false;
  }
  // Verifica si los password son distintos
  else if(password != confirmPassword) {
    alert("Las contraseñas no coinciden");
    valido = false;
  }
  else {
    valido = true;
  }

  return valido;
}
