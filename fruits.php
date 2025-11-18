<?php
if (isset($_POST['fruits'])) {
    $selected = $_POST['fruits'];

    echo "<h2>You selected the following fruits:</h2>";

    echo "<ul>";
    foreach ($selected as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
} else {
    echo "<h2>No fruit was selected!</h2>";
}
?>
