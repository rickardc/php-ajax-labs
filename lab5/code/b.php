<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Question B</title>
  <script src="js/b.js"></script>

</head>

<body>
    
<h3> Question B </h3>
<br>
<p> <a href="index.php">Index</a> </p>
<p> b) (2.5pt) Copy the code of “example1.htm” from Canvas. The file is located in lecture 5’s 
    example code zip file. Then, change the ‘write’ function to output given name/email into a HTML table. 
    Each ‘addressBookItem’ is displayed as a row in the table, and the fields of fname/lname/email are 
    different columns (see Figure 1).</p>

    <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" ><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email">
    </form>

    <button onclick="addToTable()">Submit</button>
    <br>
    <br>
    <table id="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>John</td>
            <td>Smith</td>
            <td>smith.j@email.com</td>
    </table>



</body>
</html>