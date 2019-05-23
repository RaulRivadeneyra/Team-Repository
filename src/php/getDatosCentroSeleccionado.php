<?php
  require 'conexion.php';
  session_start();
    $idSeleccionado = $_SESSION['centro-seleccionado'];
    $query = "SELECT * from usuarios WHERE id = $idSeleccionado";
    $result = mysqli_query($conexion, $query);

    $json = array();
    while($row = mysqli_fetch_array($result)) {
      $json[] = array(
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
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
 ?>
