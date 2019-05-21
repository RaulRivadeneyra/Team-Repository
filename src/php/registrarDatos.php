<?php

if(isset($_POST['registro-btn'])) {
  // Conectarse a la BD
  require 'conexion.php';
  require 'verificaciones.php';

  /*
    Codigo para registrar los datos del formulario en la BD
  */

  $resultado = "";
  // Verificar que el email no se repita
  $emailRepetido = verificarNoRepeticionEmail($conexion);
  // Verificar que el usuario no se repita
  $usuarioRepetido = verificarNoRepeticionUsuario($conexion);

	// Si es igual a 1 entonces el email ya esta en la BD
	if ($emailRepetido == 1 ) {
	  $resultado = "Error:<br />El email <strong>".$_POST['email']."</strong> ya se encuentra registrado.<br />";
    // Si el email esta repetido y el usuario tambien
    if($usuarioRepetido == 1){
      $resultado .= "<br />El usuario <strong>".$_POST['usuario']."</strong> ya se encuentra registrado.<br />";
    }
    $resultado .= "<br />Por favor ingrese otro email o <a href='../login.html'>inicie sesion.</a><br />";
    // Redirige a registroResultados.php
		header('Location: registroResultados.php?$resultado='.$resultado);
	}
  // Si el email no esta repetido pero el usuario si
  else if ($usuarioRepetido == 1){
    $resultado = "Error:<br />El usuario <strong>".$_POST['usuario']."</strong> ya se encuentra registrado.<br />";
    $resultado .= "<br />Por favor ingrese otro usuario o <a href='../login.html'>inicie sesion.</a><br />";
    // Redirige a registroResultados.php
    header('Location: registroResultados.php?$resultado='.$resultado);
  }
  else {
	/*
  	Si el email y el usuario no existe entonces se registran los datos en la BD
	*/
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$codigoPostal = $_POST['codigoPostal'];
	$nombre = $_POST['nombreCentroAcopio'];
	$calle = $_POST['calle'];
	$numeroEdificio = $_POST['numeroEdificio'];
	$cruzamiento1 = $_POST['cruzamiento1'];
	$cruzamiento2 = $_POST['cruzamiento2'];
	$colonia = $_POST['colonia'];
	$descripcion = $_POST['descripcion'];
	$telefono = $_POST['telefono'];

	// Variable para insertar los datos
	$query = "INSERT INTO usuarios (Usuario, Password, Email, CP, Nombre, Calle, NumeroEdificio, Cruzamiento1, Cruzamiento2, Colonia,
	Descripcion, Telefono) VALUES ('$usuario', '$password', '$email', '$codigoPostal', '$nombre', '$calle', '$numeroEdificio', 
	'$cruzamiento1', '$cruzamiento2', '$colonia', '$descripcion', '$telefono')";
  // Insertar los datos
	if (mysqli_query($conexion, $query)) {
		$resultado ="Gracias.<br />Su cuenta a sido creada con exito.<br /><br />Usuario: <strong>".$usuario."</strong><br />";
		$resultado .= "<br />Puede iniciar sesion <a href='../login.html'>aqui.</a><br />";
		header('Location: registroResultados.php?$resultado='.$resultado);
	} 
	else {
		echo "Hubo un problema al intentar guardar los datos: " . $query . "<br>" . mysqli_error($conexion);
	}
}
	mysqli_close($conexion);
}
?>
