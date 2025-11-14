<?php 
$conn = pg_connect("host=localhost dbname=school user=postgres password=123");


if (isset($_POST["submit"])) {

    $reg_no = (int) $_POST["reg_no"];

    $sql = "SELECT * FROM student WHERE roll_no = $reg_no";
    $rs  = pg_query($conn, $sql);
    $row = pg_fetch_assoc($rs);

    if ($row) {
        echo "<h3>Student Details</h3>";
        echo "Name : " . $row["name"] . "<br>";
        echo "Mark : " . $row["mark"] . "<br>";
        echo "Grade : " . $row["grade"] . "<br>";
    } else {
        echo "No student found with Reg No: $reg_no";
    }
}
?>
