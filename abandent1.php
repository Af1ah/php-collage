<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>number</title>
  </head>
  <body>
    <div class="container">
    <h1>find </h1>
       <form  method="post">
     <input type="number" name="numInput" placeholder="number" />
     <input type="submit" value="submit" name="submit">
   </form>
    </div>
  
    <?php
 
      if (isset($_POST["submit"])){

        $a = $_POST["numInput"];
        $sum = 0;
        for ($i = 1; $i <= $a / 2; $i++) {
          if ($a % $i == 0) {
            $sum += $i;
          }
        }
        if ($sum == $a) {
          $type = "perfect";
        } elseif ($sum > $a) {
          $type = "abundent";
        } else {
          $type = "deficient";
        }
        echo "<div class='result'<h2>this number is $type</h2></div>";
     
      }
    ?>
  </body>
</html>
