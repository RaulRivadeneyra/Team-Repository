<?php
session_start();
if(isset($_POST['login-btn'])){

  require 'conexion.php';
  require 'verificaciones.php';

  $resultado = "";

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  $query = "SELECT * FROM usuarios WHERE usuario = '$_POST[usuario]' ";
  $result = $conexion -> query($query);
  $count = mysqli_num_rows($result);
  $columna = mysqli_fetch_array($result);

  if($count > 0 && $columna['Password'] == $password) {
    $_SESSION['id_Usuario'] = $columna['id'];
    //$resultado = $columna['Usuario']."<br />".$columna['Email']."<br />";
    header('Location: ../main-page.html');
  }
  else {
    $resultado = "El usuario o la contraseña son incorrectos.<br />";
    header('Location: registroResultados.php?$resultado='.$resultado);
  }

}

 ?>
