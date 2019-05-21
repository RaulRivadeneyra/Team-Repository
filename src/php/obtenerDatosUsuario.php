<?php
  require 'conexion.php';
  session_start();
    $idUsuario = $_SESSION['id_Usuario'];
    $query = "SELECT * from usuarios WHERE id = $idUsuario";
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
