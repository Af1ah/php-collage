<!DOCTYPE html>
<html>
<head>
    <title>My Biodata</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        table {
            border: 2px solid black;
            width: 500px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>My Bio data</h1>
        
    
    <?php
   
   $name = $_POST["name"];
        $address = $_POST["address"];
        $dob = $_POST["dob"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
    $gender = $_POST["gender"];

        // Normalize languages from form accepting both names: languages[] or lang[]
        if (isset($_POST['languages'])) {
            $languages = (array) $_POST['languages'];
        } elseif (isset($_POST['lang'])) {
            $languages = (array) $_POST['lang'];
        } else {
            $languages = [];
        }

        $qualification = $_POST["qualification"];
        $city = $_POST["city"];
        
        echo "<table>";
        echo "<tr><th>Field</th><th>Details</th></tr>";
        echo "<tr><td>Name</td><td>".$name."</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";
        echo "<tr><td>Date of Birth</td><td>$dob</td></tr>";
        echo "<tr><td>Phone</td><td>$phone</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Languages</td><td>";
        if (!empty($languages)) {
            echo implode(", ", $languages);
        } else {
            echo "None";
        }
        echo "</td></tr>";
        echo "<tr><td>Qualification</td><td>$qualification</td></tr>";
        echo "<tr><td>City</td><td>$city</td></tr>";
        echo "</table>";
        
       
     
    ?>
</body>
</html>