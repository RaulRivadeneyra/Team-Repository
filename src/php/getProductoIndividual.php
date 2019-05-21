<?php
  require 'conexion.php';

  if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * from productos WHERE id_Producto = $id";
    $result = mysqli_query($conexion, $query);

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
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
  }
?>
