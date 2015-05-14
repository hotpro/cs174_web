<?php
  session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Session Counter</title>
</head>
  <?php
    $counter = 0;
    if (isset($_SESSION["counter"])) {
      $counter = $_SESSION["counter"] + 1;
    }

    $_SESSION["counter"] = $counter;

    echo "<h1>Session Counter: $counter</h1>";
   ?>
</html>
