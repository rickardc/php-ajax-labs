<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Employee Search</title>
  <link src="style.css" rel="stylesheet" />
</head>

<body>

    <?php
        require_once("settings_person_db.php");
    ?>

    <h1>Employee Search</h1>

    <form
        action="employee_search.php"
        method="get">

        <label for="city">Please select which city: </label>
        <select name='city' id='city'>
            <option value=''>Select City</option>
            <option value='all'>All</option>
            <?php

                // sql query
                $SQLstring = "select distinct city from employees";

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
        <label for="lang">Please select which language: </label>
        <select name='lang' id='lang'>
            <option value=''>Select Language</option>
            <option value='all'>All</option>
            <?php

                // sql query
                $SQLstring = "select distinct language from Languages";

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
        <label for="years">Please select how many years experience: </label>
        <input type="number" name="years" id="years" min="0" max="50">

        <br>
        <br>
        <input type="submit" value="Search">
        <br>
    </form>

    <h2>Results</h2>
    
    <?php     
    if(isset($_GET['city']) && isset($_GET['lang']) && isset($_GET['years'])) {
        $city = $_GET['city'];
        $lang = $_GET['lang'];
        $years = $_GET['years'];
        
        $SQLstring = "SELECT Employees.first_name, Employees.last_name, Languages.language, Experience.years, Employees.city
        FROM Employees
        JOIN Experience ON Experience.employee_id = Employees.id
        JOIN Languages ON lang_id = Experience.language_id";

        if($city != 'all') {
            $SQLstring .= " and city = '$city'";
        }
        
        if($lang != 'all') {
            $SQLstring .= " and language = '$lang'";
        }
        
        if($years != '') {
            $SQLstring .= " and Experience.years >= $years";
        }
        
        $queryResult = @mysqli_query($DBConnect, $SQLstring)
            Or die ("<p>Unable to query the $TableName table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
        
        echo $SQLstring;
        echo "\n <table border='1'>";
        echo "\n <tr><th>First Name</th><th>Last Name</th><th>Language</th><th>Years EXP</th><th>City</th></tr>";
        
        while ($row = mysqli_fetch_row($queryResult)) {
            echo "\n <tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td></tr>";
        }
        
        echo "\n </table>";
    }
            

    ?>


</body>
</html>