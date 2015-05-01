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

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from search_demo where fname like '%$search%' or lname like '%$search%'";
    $result = $conn->query($sql);
        $i = 1;
        echo "<datalist id='datalist2'>";
                 while($row = $result->fetch_assoc()){
                     $pname = $row['fname'];
                     $purl = $row['lname'];
                     //if($piece == $row['brand']){
                         
                   // $output .= '<option value ='.$i.'>'.$pname.' '.$purl.'</option>'; 
                     echo "<option value='http://www.google.com'>".$pname."</option>";
                     $i++;
                }
        echo "</datalist>";
               
    }
    
 //echo "<select id='datalist2'>".$output."</select>";
?>
