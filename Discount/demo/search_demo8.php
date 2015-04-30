<?php

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "discount";
    $output = '';  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_POST['searchval'])){
    $search = $_POST['searchval'];
    $search = preg_replace("#[^0-9a-z]#i","",$search);
       
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from search_demo where fname like '%$search%' or lname like '%$search%'";
     $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        
        $output = "There is no result found";
    }
     while($row = $result->fetch_assoc()){
         $fname = $row['fname'];
         $lname = $row['lname'];
         $burl = 'you_broadband_plan';
         $purl = 'unlimited';
        // $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . ' & plan='. $purl.'">'.$bname.'</a>'. '<div>';
         $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&plan='. $purl.'">'.$fname.'</a>'.'<div>'.$fname.' ' .$lname. '<div>';
     }
    }
echo ($output);
   
?>
