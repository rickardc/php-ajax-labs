<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Inventory</title>
  <link src="style.css" rel="stylesheet" />
</head>

<body>

    <?php
        require_once("settings.php");
    ?>

    <h1>Inventory Search</h1>

    <form
        action="inventory.php"
        method="get">

        <label for="make">Select make:</label>
        <select name='make' id='make'>
            <option value=''>Select Make</option>
            <option value='all'>All</option>
            <?php

                // sql query
                $SQLstring = "select distinct make from inventory";

                // query result
                $queryResult = @mysqli_query($DBConnect, $SQLstring)
                    Or die ("<p>Unable to query the $TableName table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";

                // loop through query result
                while ($row = mysqli_fetch_row($queryResult)) {
                    echo "<option value='{$row[0]}'>{$row[0]}</option>";
                }

                ?>
        </select>
        <br>
        <input type="submit" value="Search">
        <br>
    </form>

    <h2>Results</h2>
    <?php
         
    if(isset($_GET['make'])) {

        $make = $_GET['make'];
        
        if ($make == 'all') {
            $SQLstring = "select * from inventory order by price desc";
        } else {
            $SQLstring = "select * from inventory where make = '$make' order by price desc";
        }
        
        $queryResult = @mysqli_query($DBConnect, $SQLstring)
            Or die ("<p>Unable to query the $TableName table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
        
            echo "<table border='1'>";
        echo "<tr><th>Make</th><th>Model</th><th>Price</th><th>Quantity</th></tr>";
        while ($row = mysqli_fetch_row($queryResult)) {
            echo "<tr><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td></tr>";
        }
        echo "</table>";
    }
            

    ?>


</body>
</html>