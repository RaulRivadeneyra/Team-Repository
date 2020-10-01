<?php
  session_start();
  $id = $_POST['id'];
  $_SESSION['centro-seleccionado'] = $id;
  echo $id;
 ?>
