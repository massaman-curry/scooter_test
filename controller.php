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

      if (is_readable($file)){

        $current_status = (int)file_get_contents($file);

        $new_status = !$current_status;
        print $new_status;

        file_put_contents($file, $new_status);

      } else {

        print 'ファイルが読み込めませんでした';

      }
  ?>
</body>
</html>
