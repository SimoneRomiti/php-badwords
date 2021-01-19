<?php
  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
  $badword1 = $_GET["badword1"];
  $badword2 = $_GET["badword2"];
  $array = [$badword1, $badword2];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Testo normale</h1>
    <h2><?php echo $text; ?></h2>
    <p>Lunghezza stringa: <?php echo strlen($text); ?></p>

    <h1>Testo censurato</h1>

    <h2><?php echo str_ireplace($array, "***", $text); ?></h2>

  </body>
</html>
