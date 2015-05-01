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

    $search = $_GET['searchval'];
    
    $pieces = explode(" ", $search);
    $pieces_count = count($pieces);

    if($pieces_count == 1 ){
        print_r("kjsdhf");
         
    }

    $miss1 = $miss2 = $miss3 = $miss4 = 0;

    if($pieces_count == 4){
        $pieces[2] = $pieces[2].' '. $pieces[3];
        $pieces[0] = $pieces[0].' '. $pieces[1];
       
        $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
            $sql = "select * from search_speed_demo where speed like '%$pieces[2]%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $speed = $row['speed_url'];
                header('Location: internet_plan.php?bb=B&brand='. basename($brand). '&speed='. basename($speed));
               
            }
        }
        else{
            $miss4 = 1;
        }
    }

    else if($pieces_count == 3){
        // two words from brand and one from validity
        $brand22 = $pieces[0].' '. $pieces[1];
        $sql = "select * from search_brand_demo where brand like '%$brand22%' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
            
                $str = $pieces[2];
                $str2 = explode("-", $str);
                
                $sql = "select * from search_validity_demo where validity like '%$str2[0]%' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $validity = $row['validity_url'];
                   header('Location: internet_plan.php?bb=B&brand='. basename($brand). '&validity='. basename($validity));
                }
        }
        
        // two words from brand and one from plan
       
        $sql = "select * from search_brand_demo where brand like '%$brand22%' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
        
                $sql = "select * from search_plan_demo where plan like '%$str2[0]%' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $plan = $row['Plan_url'];
                   header('Location: internet_plan.php?bb=B&brand='. basename($brand). '&plan='. basename($plan));
               
                }
        }
        
        // one brand and speed
        $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
            
            $speed2 = $pieces[1].' '. $pieces[2];
            $sql = "select * from search_speed_demo where speed like '%$speed2%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $speed = $row['speed_url'];
                header('Location: internet_plan.php?bb=B&brand='. basename($brand). '&speed='. basename($speed));
               
            }
        
        }
        
        
        
         
    }

    else if($pieces_count == 2 or $miss3 == 1){
        
            // if brand name and plan is selected
        
            $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $brand = $row['brand_url'];
                
                $str = $pieces[1];
                $str2 = explode("-", $str);
                
                $sql = "select * from search_plan_demo where plan like '%$str2[0]%' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $plan = $row['Plan_url'];
                   header('Location: internet_plan.php?bb=B&brand='. basename($brand). '&plan='. basename($plan));
               
                }
             
            }
        
            // if brand name and validity is selected
        
            $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $brand = $row['brand_url'];
                
                $str = $pieces[1];
                $str2 = explode("-", $str);
                
                $sql = "select * from search_validity_demo where validity like '%$str2[0]%' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $validity = $row['validity_url'];
                   header('Location: internet_plan.php?bb=B&brand='. basename($brand). '&validity='. basename($validity));
               
                }
             
            }
            
            // if both string combinly contains brand name
                $pieces[0] = $pieces[0].' '. $pieces[1];
       
                $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $brand = $row['brand_url'];
                    header('Location: internet_plan.php?bb=B&brand='. basename($brand));
                }
        
    }

    else if($pieces_count == 1 or $miss2 == 1){
        
        // checking brand
        $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
        if($result = $conn->query($sql)){
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
           
            header('Location: internet_plan.php?bb=B&brand='. basename($brand));
        
        }
        }
        // checking Plan
        $sql = "select * from search_plan_demo where plan like '%$pieces[0]%' ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $plan = $row['Plan_url'];
            header('Location: internet_plan.php?bb=B&plan='. basename($plan));
        }
        
        
    }
    
    




?>