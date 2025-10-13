<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Example Cookies</h1>
    <p>You last visited this website:</p>

    <?php
    if (isset($_COOKIE['last_visited'])) {
        echo $_COOKIE['last_visited'];
    } else {
        echo "This is your first visit!";
        
    }
    date_default_timezone_set("Asia/Kolkata");

    $current_time = date("l, jS \of F Y h:i:s A");

   
    setcookie("last_visited", $current_time, time() + (30* 24 * 60 * 60));
    ?>
</body>
</html>
