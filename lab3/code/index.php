<!DOCTYPE html>
<html>
<head>
    <title>Lab 3</title>
</head>

<body>

    <?php

    // get all php files in the current directory

    $files = glob("*.php");

    // loop through the files

    foreach ($files as $file) {

        // if the file is not this file

        if ($file != "index.php") {

            // display a link to the file

            echo "<a href=\"$file\">$file</a><br />";

        }

    }

    ?>


</body>

</html>