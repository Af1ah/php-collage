<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reverse string</title>
</head>

<body>
    <h1>reverse string</h1>
    <form action="reverseString.php" method="post">
        <input type="text" name="string" placeholder="enter a string" required>
        <input type="submit" value="submit" name="submit"><br><br>
    </form>


    <?php
    if (isset($_POST["submit"])) {
        $string = $_POST["string"];
        $rev = strrev($string);
        echo "<h3>current String: $string</h3>";
        echo "<h3>reversed String: $rev</h3>";
    } 
    ?>

</body>

</html>