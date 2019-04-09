<?php
  session_start();
  if(isset($_SESSION['id'])){
    require 'php/conexion.php';
    require 'php/obtenerDatosUsuario.php';

    $usuario = getDatosUsuario($conexion, $_SESSION['id']);
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
</head>
<body>

  <?php if(!empty($usuario)): ?>
    <?php imprimirDatosUsuarioLista($usuario); ?>
    <a href="php/logout.php">Cerrar sesión</a>
  <?php else: ?>
    <p>Debes <a href="login.html">iniciar sesión</a></p>
  <?php endif; ?>

</body>
</html>
