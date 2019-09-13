<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Control </title>
</head>

<body>
  <?php
    $file = "status.txt";
    $device = $_SESSION['device'];

    $judge = sha1($_SESSION['key']) == $_SESSION['token']? 1 : 0;

    if (is_readable($file) && $judge == 1){

      $current_status = file_get_contents($file);

      if ($current_status == $device){
        $new_status = '0';
      } else {
        $new_status = $device;
      }

      print $new_status;

      file_put_contents($file, $new_status);

    } else {

      print 'エラーが起きました。もう一度やり直してください。';

    }
  ?>
</body>
</html>
