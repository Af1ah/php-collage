<?php
  $conn = pg_connect("host=localhost dbname=login user=postgres password=123");
if ($conn) {
    echo "Connected successfully!";
} else {
    echo "Connection failed: " . pg_last_error();
}
    $username=$_POST['username'];
    $pswd=$_POST['password'];
    $regi="insert into login_table";


    $query="select * from login_table where username='$username' and password='$pswd' ";
    $result= pg_query($conn,$query);

    if(pg_num_rows($result)>0){
     echo "login successfull";
    }else{
        echo "invalid username and password";
    }
    pg_close($conn);
?>


