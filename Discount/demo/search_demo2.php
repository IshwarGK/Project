<?php

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "discount";
    $output = '';  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //if(isset($_POST['searchval'])){
    $search = $_POST['searchval'];
    //$search = 'ri';
   // $search = preg_replace("#[^0-9a-z]#i"," ",$search);

    $pieces = explode(" ", $search);
    $pieces_count = count($pieces);

    $pieces[0] = preg_replace("#[^0-9a-z]#i"," ",$pieces[0]);
    $pieces[1] = preg_replace("#[^0-9a-z]#i"," ",$pieces[1]);
   // echo $pieces[0]; // piece1
    
       
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // code for brand
    $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
     $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        
        $output = "There is no result found";
    }
    else{
        $b = 1;
         $bname = $row['brand'];
         $burl = $row['brand_url'];
        
   
    }

    // code for Plan
    // code for brand
    if($pieces_count == 2){
    $sql = "select * from search_plan_demo where plan like '%$pieces[1]%' ";
     $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        
        $output = "There is no result found";
    }
    else{
        $p = 1;
         $pname = $row['brand'];
         $purl = $row['brand_url'];
        
   
    }
    }
    if($pieces_count == 1){
         
         
         $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&plan='. $purl.'">'.$bname.'</a>'. '<div>';
        
    }
    else if($pieces_count == 2){
        $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&plan='. $purl.'">'.$fname.'</a>'.'<div>';
    }


//} 
   echo ($output);
?>