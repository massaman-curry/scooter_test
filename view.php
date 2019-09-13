<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title> View</title>
</head>

<body>
  <?php 

  $seed = session_id();

  function get_token($key = ''){
    $_SESSION['key'] = $key;
    return sha1($key);
  }

  $_SESSION['token'] = get_token($seed);
  $_SESSION['device'] = $_GET['number'];

  ?>
  <a class="btn btn-primary" href="http://192.168.33.10/controller.php"> 使う </a>
</body>
</html>
