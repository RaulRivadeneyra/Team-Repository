<?php
  require 'conexion.php';

  $query = "SELECT * FROM usuarios";
  $result = $conexion -> query($query);
  $json = array();

  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['id'],
      'Nombre' => $row['Nombre'],
      'Calle' => $row['Calle'],
      'NumeroEdificio' => $row['NumeroEdificio'],
      'Cruzamiento1' => $row['Cruzamiento1'],
      'Cruzamiento2' => $row['Cruzamiento2'],
      'Colonia' => $row['Colonia'],
      'Descripcion' => $row['Descripcion'],
      'Email' => $row['Email'],
      'Telefono' => $row['Telefono'],
      'CodigoPostal' => $row['CP']
    );
  }
  mysqli_close($conexion);
  $jsonstring = json_encode($json);
  echo $jsonstring;
 ?>
