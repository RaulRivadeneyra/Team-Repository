<?php
  /* Verifica si el usuario inicio sesion */
  session_start();
  $logged = false;
  if(isset($_SESSION['id_Usuario'])) {
    $logged = true;
  }
  else {
    $logged = false;
  }
  $jsonstring = json_encode($logged);
  echo $jsonstring;
 ?>
