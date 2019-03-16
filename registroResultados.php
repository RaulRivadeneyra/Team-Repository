<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Css/style.css?v=<?php echo(rand()); ?>" />
  <title>Document</title>
</head>
<body>
  <div class="resultados-registro-cont">
    <h1>
      <?php
      $Result = $_GET['$resultado'];
      echo $Result;
      ?>
    </h1>
  </div>

</body>
</html>
