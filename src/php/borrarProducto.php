<?php
	require 'conexion.php';
	
	if(isset($_POST['id'])) {
	  $id = $_POST['id'];
	  $query = "DELETE FROM productos WHERE id_Producto = $id"; 
	  $result = mysqli_query($conexion, $query);
	  if (!$result) {
		die('Error al borrar.');
	  }
	}
?>