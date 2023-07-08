<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Index</title>

</head>

<body>
    <?php

    // for each php file add link
$files = glob("*/*.htm");
    foreach ($files as $file) {
        echo "<a href='$file'>$file</a><br>";
    }

    ?>
</body>

