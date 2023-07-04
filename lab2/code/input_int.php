<!DOCTYPE html>

<html>
<head>
    <title>Input Int</title>
</head>

<body>

<form action="input_int.php" method="get">
    <label>Please input a number:	
        <input type="text" name="number"> 
    </label>
    <input type="submit" value="Submit" />

    <?php

        if(isset($_GET['number']) ){

            $number = $_GET['number'];

            if($number <= 0 or !(is_numeric($number))){
                echo "<p> Please enter a number greater than zero</p>";
            } else {

                $number = round($number);

                $results = array($number);
                $i = 1;

                while($i < $number){
                    if( $number % ($number - $i) != 0){

                        array_push($results, ($number - $i));

                    }

                    $i++;
                };

                array_push($results, 1);

                echo "<br>";

                for ($x = 0; $x <= count($results)-1; $x++) {
                    echo "The number is: $results[$x] <br>";
                  } 

                
            }
        }
    ?>

</body>