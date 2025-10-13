<?php
    function sum($n1,$n2){
       return $sum=$n1+$n2;

    }
   if (isset($_GET["submit"])){
     $n1=$_GET["num1"];
    $n2=$_GET["num2"];
    $sum = sum($n1,$n2);
    
    echo "<h1>result=$sum </h1>";
   }
    ?>