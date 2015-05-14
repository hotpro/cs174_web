<?php
  $counter = 0;
  if (isset($_COOKIE["counter"])) {
    $counter = $_COOKIE["counter"] + 1;
  }

  setCookie("counter", $counter);
  // setCookie("counter");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cookie Counter</title>
</head>

<body>
  <?php
    echo "<h1>Cookie Counter: $counter </h1>"
   ?>

</body>
</html>
