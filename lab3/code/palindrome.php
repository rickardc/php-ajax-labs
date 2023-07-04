<!DOCTYPE html>

<html>
<head>
    <title>Palindrome</title>
</head>

<body>

    <h1>Palindrome</h1>

    <form action="palindrome.php" method="post">
        <label for="word">String:</label>
        <input type="text" name="word" placeholder="Enter a word" />
        <input type="submit" value="Submit" />
    </form>

    <?php
        if (isset($_POST['word'])) {
            $word = $_POST['word'];
            $reverse = strrev($word);
            if ($word == $reverse) {
                echo "<p>$word is a palindrome!</p>";
            } else {
                echo "<p>$word is not a palindrome!</p>";
            }
        }
    ?>

</body>
</html>