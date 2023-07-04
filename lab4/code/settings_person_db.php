<?php

// connect to database
$host = 'mysql';
$database = 'person_db';
$user = 'test';
$password = 'test';

$DBConnect = @mysqli_connect($host, $user, $password, $database)
    Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";

?>