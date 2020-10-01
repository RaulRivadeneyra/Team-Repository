<?php
  require 'conexion.php';
  session_start();

  if(isset($_POST['id'])) {
    $idProducto = $_POST['id'];
    $nombreProducto = $_POST['nombreProducto'];
    $observaciones = $_POST['observaciones'];
    $cantidadActual = $_POST['cantidadActual'];
    $cantidadRequerida = $_POST['cantidadRequerida'];
    $fechaLimite_input = $_POST['fechaLimite'];
    $prioridad = $_POST['prioridad'];

    //Convertir la fecha html a fecha sql
    $fechaLimite = date("Y-m-d H:i:s", strtotime($fechaLimite_input));
    $idUsuario = $_SESSION['id_Usuario'];

    $query = "UPDATE productos SET nombreProducto = '$nombreProducto', observaciones = '$observaciones',
    cantidadActual = '$cantidadActual', cantidadRequerida = '$cantidadRequerida',
    fechaLimite = '$fechaLimite', prioridad = '$prioridad' WHERE id_Producto = '$idProducto' AND id = '$idUsuario'";

    // Insertar los datos
    if (!mysqli_query($conexion, $query)) {
      die('Hubo un problema al intentar actualizar los datos: ' . $query . '<br>' . mysqli_error($conexion));
    }

    mysqli_close($conexion);
  }
?>
