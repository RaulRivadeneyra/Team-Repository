<?php
/*
  Codigo para conectarse a la base de datos
*/

	$servidor = "localhost";
	//$usuario = "id9007255_admin";
	//$pass = "aidcapass";
	$usuario = "root";
	$pass = "";
	$base = "id9007255_aidca";

	// Crear la conexion
	$conexion = mysqli_connect($servidor,$usuario,$pass) or die ("No se conecto con el servidor");
	$db = mysqli_select_db($conexion,$base) or die ("No se encontro la BD");

	// Checar la conexion
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
