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
   // $search = preg_replace("#[^0-9a-z]#i","",$search);
       
    $pieces = explode(" ", $search);
    $pieces_count = count($pieces);

//    $pieces[0] = preg_replace("#[^0-9a-z]#i"," ",$pieces[0]);
  //  $pieces[1] = preg_replace("#[^0-9a-z]#i"," ",$pieces[1]);
        
        
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from search_demo where fname like '%$search%' or lname like '%$search%'";
    $result = $conn->query($sql);

                 while($row = $result->fetch_assoc()){
                     $pname = $row['fname'];
                     $purl = $row['lname'];
                     //if($piece == $row['brand']){
                         
                    $output .= '<option>'.$pname.' '.$purl.'</option>'; 
                     
                     

                 }
               
    }

echo ($output);
?>
