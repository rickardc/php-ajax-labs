<?php

$fruit = array ("one"=>"grapes", "two"=>"banana", "three"=>"cherry", "four"=>"apple");
ksort ($fruit);

print_r($fruit);

echo $fruit["one"];

?>
