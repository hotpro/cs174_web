<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Non-AJAX</title>
  <meta charset="UTF-8" />
  <script type="text/javascript" src="bounce.js"></script>
</head>

<body onload="init()">
  <h1>Non-AJAX</h1>

  <canvas id="canvas" height="200" width="200">
    <p>Canvas not supported!</p>
  </canvas>

  <form action="nonajax.php" method="get">
    <input type="hidden" name="hidden" value="hidden" />
    <input type="submit" />
  </form>

  <hr />

  <div id="input">
    <p>
      <?php
        $hidden = filter_input(INPUT_GET, "hidden");
        if ($hidden != NULL) {
          $fp = fopen("lorem.txt", "r") or die("File error.");
          while(!feof($fp)) {
            $line = fgets($fp);
            $line = str_replace("\n", "<br />", $line);
            print "            $line\n";

          }
        } else {
          print "    Watch this space!\n";
        }
      ?>
    </p>
  </div>

</html>
