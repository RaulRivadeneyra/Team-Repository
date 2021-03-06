/**
 * Esta funcion verifica que el formulario de registro sea valido para
 * poder insertar los datos en la BD.
 * @return {boolean} Si los datos ingresados en el formulario de registro son validos.
 */
function validarRegistro() {
  let usuario = document.getElementById("usuario").value,
      password = document.getElementById("password").value,
      confirmPassword = document.getElementById("confirmPassword").value,
      email = document.getElementById("email").value,
      codigoPostal = document.getElementById("codigoPostal").value,
      nombreCentroAcopio = document.getElementById("nombreCentroAcopio").value,
	  calle = document.getElementById("calle").value,
	  cruzamiento1 = document.getElementById("cruzamiento1").value,
	  cruzamiento2 = document.getElementById("cruzamiento2").value,
	  numeroEdificio = document.getElementById("numeroEdificio").value,
	  colonia = document.getElementById("colonia"),
	  descripcion = document.getElementById("descripcion"),
	  telefono = document.getElementById("telefono").value;

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
  else if(sinEspacios.test(calle) || sinEspacios.test(cruzamiento1) || sinEspacios.test(cruzamiento2) || sinEspacios.test(numeroEdificio)) {
	alert("La calle, los cruzamientos y el numero del edificio no deben tener espacios en blanco.");
	valido = false;
  }
  else if(sinEspacios.test(telefono)) {
	alert("El numero de telefono no debe tener espacios en blanco.");
	valido = false;
  }
  else if(telefono.length > 10) {
	alert("El numero de telefono no debe tener mas de 10 digitos.");
	valido = false;
  }
  else if(letras.test(telefono)) {
	alert("El numero de telefono no debe tener letras");
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
  else if(descripcion.length > 255) {
    alert("La descripcion no debe tener mas de 255 caracteres.");
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
  else if(colonia.length > 100) {
	alert("La colonia no debe tener mas de 100 caracteres.");
	valido = false;
  }
  else {
    valido = true;
  }

  return valido;
}

/**
 * Esta funcion es llamada al llenar una caja de texto, verifica que los datos ingresados sean validos, de no
 * serlo imprime un mensaje alertando sobre el error.
 * @param {string} texto - El contenido de la caja de texto.
 * @param {string} id - El id de la caja de texto.
 */
function validarCamposRegistro(texto, id) {
	let sinEspacios = /\s/,
	    letras = /[A-Za-z]/;
	let mensaje = document.getElementById("msg-" + id);
	let msg = "";
	
	if (id == "usuario" || id == "password" || id == "confirmPassword" || id == "email" || id == "codigoPostal" || id == "telefono") {
		if (sinEspacios.test(texto)) {
			msg = "No debe tener espacios en blanco.";
		}
		else if (id == "usuario" && texto.length > 40){
			msg = "El usuario no debe tener mas de 40 caracteres.";
		}
		else if ((id == "password" || id == "confirmPassword") && texto.length > 30){
			msg = "La contraseña no debe tener mas de 30 caracteres.";
		}
		else if (id == "confirmPassword" && texto != document.getElementById("password").value){
			msg = "Las contraseñas no coinciden.";
		}
		else if (id == "codigoPostal" && texto.length != 5){
			msg = "El codigo postal debe ser 5 numeros.";
		}
		else if (id == "codigoPostal" && letras.test(texto)){
			msg = "El codigo postal debe tener solo numeros.";
		}
		else if(id == "telefono" && texto.length > 10){
			msg = "El numero de telefono no debe tener mas de 10 digitos."
		}
		else if(id == "telefono" && letras.test(texto)){
			msg = "El numero de telefono no debe tener letras."
		}
	}
	else{
		if (id == "descripcion" && texto.length > 255){
			msg = "La descripción no debe tener mas de 255 caracteres.";
		}
		else if (id == "nombreCentroAcopio" && texto.length > 100){
			msg = "El nombre no debe tener mas de 100 caracteres.";
		}
		else if(id == "colonia" && texto.length > 100){
			msg = "La colonia no debe tener mas de 100 caracteres.";
		}
	}
	mensaje.innerHTML = msg;
}