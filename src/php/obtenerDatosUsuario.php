<?php
/**
 * Esta funcion obtiene los datos de un usuario y los devuelve.
 *
 */
function getDatosUsuario($conexion, $id) {
  $query = "SELECT * FROM Usuarios WHERE id = '$_SESSION[id]' ";
  $result = $conexion -> query($query);
  $count = mysqli_num_rows($result);
  $usuario = mysqli_fetch_array($result);
  return $usuario;
}

/**
 * Esta funcion imprime los datos de un usuario en forma de lista
 *
 */
function imprimirDatosUsuarioLista($usuario) {
  if(!empty($usuario)) {
	echo "<h3>Sesión iniciada</h3>";
    echo "<strong>Usuario: </strong>".$usuario['Usuario']."<br />";
    echo "<strong>Email: </strong>".$usuario['Email']."<br />";
    echo "<strong>Dirección: </strong>".$usuario['Direccion']."<br />";
    echo "<strong>Codigo postal: </strong>".$usuario['CP']."<br />";
    echo "<strong>Nombre del centro: </strong>".$usuario['Nombre']."<br />";  
  }
}
 ?>
