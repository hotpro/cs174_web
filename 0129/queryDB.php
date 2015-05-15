<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>query db php</title>
</head>
<body>
    <h1>Query Result</h1>
    <?php
        $first = filter_input(INPUT_GET, "firstName");
        $last  = filter_input(INPUT_GET, "lastName");

        try
        {
            // Connect to the database.
            $con = new PDO("mysql:host=localhost;dbname=hw3_YutaoHou_799",
                "root", "");
            $con->setAttribute(PDO::ATTR_ERRMODE,
                               PDO::ERRMODE_EXCEPTION);

            $query = "SELECT * FROM advisor";
            // We're going to construct an HTML table.
            print "<table border='1'>\n";
            $result = $con->query($query);
            $row = $result->fetch(PDO::FETCH_ASSOC);

            // Construct the header row of the HTML table.
            print "            <tr>\n";
            foreach ($row as $field => $value) {
                print "                <th>$field</th>\n";
            }
            print "            </tr>\n";

            // Fetch the matching database table rows.
            $data = $con->query($query);
            $data->setFetchMode(PDO::FETCH_ASSOC);

            foreach ($data as $row) {
                print "            <tr>\n";
                foreach ($row as $field => $value) {
                    print "                <th>$value</th>\n";
                }
                print "            </tr>\n";
            }

        }
        catch(PDOException $ex)
        {
            echo 'ERROR '.$ex->getMessage();
        }


    ?>



</body>
</html>
