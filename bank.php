<?php

if (isset($_POST["submit"])) {
    $ac_no = (int)$_POST["acc_no"];
    $amount = (int)$_POST["amount"];
    $transaction = $_POST["transaction"];


    $con = pg_connect("host=localhost dbname=bank user=postgres password=123");
    if ($con) {
        echo "connection successfull <br>";
    } else {
        echo "connection failed".pg_last_error();
    }
    $query="select balance from bank where acc_no=$ac_no";
    $result=pg_query($con,$query);
    $bal = pg_fetch_assoc($result);
    $balance =  $bal['balance'];
    echo "balance".$balance;
    echo pg_last_error();
    if($transaction=="deposit"){
        $balance+=$amount;
        
    }
    else{
        $balance-=$amount;
     
    }
    $query2="update  bank set balance=$balance where acc_no=$ac_no";
    $result2=pg_query($con,$query2);
    echo pg_last_error();
   
    

    echo "<br>updated balance = ".$balance;
}

?>