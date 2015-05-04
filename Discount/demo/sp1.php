<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "discount";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    if($conn->query("CALL myproc('plan_name','Coupon_code')")){
       print_r("Wooow Added to database");
 
    }
    
   ?>