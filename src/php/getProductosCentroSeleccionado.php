<?php
  require 'conexion.php';
  session_start();
  $idSeleccionado = $_SESSION['centro-seleccionado'];
  session_unset();
  session_destroy();

  $query = "SELECT * FROM productos WHERE id = $idSeleccionado";
  $result = $conexion -> query($query);
  $count = mysqli_num_rows($result);

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['id_Producto'],
      'nombreProducto' => $row['nombreProducto'],
      'observaciones' => $row['observaciones'],
      'cantidadActual' => $row['cantidadActual'],
      'cantidadRequerida' => $row['cantidadRequerida'],
      'fechaLimite' => $row['fechaLimite'],
      'prioridad' => $row['prioridad']
    );
  }
  mysqli_close($conexion);
  $jsonstring = json_encode($json);
  echo $jsonstring;
 ?>
