<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Inventory Insert</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384- 
      0mSbJPOpSVfYJYPd+0+8d/3Jy6z8wvqo1KGaC9xkP5ZBhI
      0euxJp5C5g4yJv7Wf"
      crossorigin="anonymous">
</head>

<body>

    <?php
        require_once("settings.php");
    ?>

    <h1>Inventory Insert</h1>

    <form
        action="inventory_add.php"
        method="get">

        <label for="make">Make:</label>
        <input type="text" name="make" id="make">
        <br>
        <label for="model">Model:</label>
        <input type="text" name="model" id="model">
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        <br>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity">
        <br>
        <input type="submit" value="Add">
        <br>
    </form>

    <h2>Updated Inventory</h2>
    <?php
        if(isset($_GET['make']) && 
            isset($_GET['model']) && 
            isset($_GET['price']) && 
            isset($_GET['quantity'])) {
            
                $make = $_GET['make'];
                $model = $_GET['model'];
                $price = $_GET['price'];
                $quantity = $_GET['quantity'];
            
                $SQLstring = "insert into inventory (make, model, price, quantity) values ('$make', '$model', '$price', '$quantity')";
            
                $queryResult = @mysqli_query($DBConnect, $SQLstring)
                    Or die ("<p>Unable to query the $TableName table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";

                updateTable();

                echo "<p>Added $make $model to inventory.</p>";

                // reset form
                $_GET['make'] = '';
                $_GET['model'] = '';
                $_GET['price'] = '';
                $_GET['quantity'] = '';

        } else {
            echo "<p>Enter all fields.</p>";

                }

        function updateTable() {

            global $DBConnect, $TableName;
            
            $SQLstring = "select * from inventory order by price desc";
            $queryResult = @mysqli_query($DBConnect, $SQLstring)
                Or die ("<p>Unable to query the $TableName table.</p>"."<p>Error code ". mysqli_errno($DBConnect). ": ".mysqli_error($DBConnect)). "</p>";
            
                echo "<table class='table table-striped'>";
            
                echo "<tr><th>Make</th><th>Model</th><th>Price</th><th>Quantity</th></tr>";
            
                while ($row = mysqli_fetch_row($queryResult)) {
                    echo "<tr><td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "<td>{$row[4]}</td></tr>";
            }
            echo "</table>";

        }

    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
        crossorigin="anonymous"></script>

    </body>
</html>