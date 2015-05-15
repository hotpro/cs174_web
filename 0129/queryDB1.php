<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>query db php</title>
</head>
<body>
    <h1>Query Result</h1>
    <?php 
$first = "John";
$last  = "Smith";

print <<<HERE
<table border="1">
    <tr>
        <td>First name:</td>
        <td>$first</td>
    </tr>
     <tr>
        <td> Last name:</td>
        <td>$last</td>
    </tr></table>
HERE;



        
    ?>

    <h1>Display Errors</h1>
    <?php
        ini_set('display_errors', 1);
        
        // Create errors
        foreach ($var as $v) {}
        $result = 1/0;
    ?>



    
</body>
</html>