<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lab 4</title>
</head>

<body>

    <?php
        // loop through working directory and priovide links to each file
        $dir = "./";
        $files = scandir($dir);

        foreach ($files as $file) {
            if (is_file($file)) {
                echo "<a href='$file'>$file</a><br/>";
            }
        }
    ?>

</body>