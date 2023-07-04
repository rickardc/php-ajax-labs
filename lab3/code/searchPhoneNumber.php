<HTML XMLns="http://www.w3.org/1999/xHTML"> 
<body>
<H1>Members of the Hawthorn Bowling Club</H1>
<br/>

<form action="searchPhoneNumber.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name?" />
    <input type="submit" value="Search" />
</form>

<?php 
  $file = "bowlers.txt";
  if(!file_exists($file))
    echo "No registered member found!";
  else {
    $bowlers=file($file);
    
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "<p>Searching for $name</p>";
        $found = false;
        for($i=0; $i<count($bowlers); $i++) {
            $curBowler = explode(",", $bowlers[$i]);
            if ($curBowler[0] == $name) {
                echo "<p>Phone number for $name is $curBowler[1]</p>";
                $found = true;
            }
        }
        if (!$found) {
            echo "<p>No phone number found for $name</p>";
        }
    }

  }
?>
</body> 
</HTML>