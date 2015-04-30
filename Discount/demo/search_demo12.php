<?php

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "discount";
    $output = '';  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from search_demo where fname like '%r%' or lname like '%l%'";
    $result = $conn->query($sql);
    $i = 1;
<select name="fruits" id="fruits" class="form-control">
                 while($row = $result->fetch_assoc()){
                     $pname = $row['fname'];
                     $purl = $row['lname'];
                     //if($piece == $row['brand']){
                         
                    $output .= '<option value="'.$i.'">'.$pname.' '.$purl.'</option>'; 
                     
                    $i++;          
                    

                 }
               
    </select>
    echo ($output);    

?>
