<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Greeting</title>
</head>
<body>
    <p>
        <?php
            $first = filter_input(INPUT_POST, "firstName");
            $direction = filter_input(INPUT_POST, "direction");
            
            $language  = filter_input(INPUT_POST, "language");

            $hidmsg = filter_input(INPUT_POST, "unseen");
            print "<p> h: $hidmsg</p>\n";
            $error     = "You are SO confused";
            
            if ($direction == "coming") {
                switch ($language) {
                    case "english":
                        $output = "Hello";
                        break;
                    case "french":
                        $output = "Bonjour";
                        break;
                    case "german":
                        $output = "Guten tag";
                        break;
                    default:
                        $output = $error;
                }
            }
            else if ($direction == "going") {
                switch ($language) {
                    case "english":
                        $output = "Good-bye";
                        break;
                    case "french":
                        $output = "Au revoir";
                        break;
                    case "german":
                        $output = "Auf wiedersehen";
                        break;
                    default:
                        $output = $error;
                }
            }
            else {
                $output = $error;
            }

            
            print $output;


        ?>
    </p>

    
</body>
</html>