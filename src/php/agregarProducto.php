<?php
  require 'conexion.php';
  session_start();

  $nombreProducto = $_POST['nombreProducto'];
  $observaciones = $_POST['observaciones'];
  $cantidadActual = $_POST['cantidadActual'];
  $cantidadRequerida = $_POST['cantidadRequerida'];
  $fechaLimite_input = $_POST['fechaLimite'];
  $prioridad = $_POST['prioridad'];

  //Convertir la fecha html a fecha sql
  $fechaLimite = date("Y-m-d H:i:s", strtotime($fechaLimite_input));
  $idUsuario = $_SESSION['id_Usuario'];

  $query = "INSERT INTO productos (id, nombreProducto, observaciones, cantidadActual,
  cantidadRequerida, fechaLimite, prioridad) VALUES ('$idUsuario','$nombreProducto', '$observaciones',
  '$cantidadActual', '$cantidadRequerida', '$fechaLimite', '$prioridad')";

  // Insertar los datos
  if (!mysqli_query($conexion, $query)) {
    die('Hubo un problema al intentar guardar los datos: ' . $query . '<br>' . mysqli_error($conexion));
  }
  else {
    echo 'Producto agregado';
  }

  mysqli_close($conexion);
 ?>
