<?php
  function verificarNoRepeticionEmail($conexion){
    // Variable para verificar si el email ya existe
  	$checkEmail = "SELECT * FROM Usuarios WHERE Email = '$_POST[email]' ";
  	// Obtiene informacion de la conexion
  	$result = $conexion -> query($checkEmail);
  	// Obtiene los resultados de cuantos emails iguales hay
  	$count = mysqli_num_rows($result);
    return $count;
  }

  function verificarNoRepeticionUsuario($conexion){
    // Variable para verificar si el usuario ya existe
    $checkUser = "SELECT * FROM Usuarios WHERE Usuario = '$_POST[usuario]' ";
    // Obtiene informacion de la conexion
    $result = $conexion -> query($checkUser);
    // Obtiene los resultados de cuantos emails iguales hay
    $count = mysqli_num_rows($result);
    return $count;
  }
?>
