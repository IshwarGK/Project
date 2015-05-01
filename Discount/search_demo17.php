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

    $search = $_POST['searchval'];
    
    $pieces = explode(" ", $search);
    $pieces_count = count($pieces);

    $miss1 = $miss2 = $miss3 = $miss4 = 0;

    if($pieces_count == 4){
        $pieces[2] = $pieces[2].' '. $pieces[3];
        $pieces[0] = $pieces[0].' '. $pieces[1];
        
        $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
            $sql = "select * from search_speed_demo where brand like '%$pieces[2]%' ";
            $result = $conn->query($sql);
            if ($result->num_rows == 0) {
                $row = $result->fetch_assoc();
                $speed = $row['speed_url'];
                var url = "internet_plan.php?brand="+$brand"& speed="+$speed;
                window.location.href = url;
                break;
            }
        }
        else{
            $miss4 = 1;
        }
    }

    else if($pieces_count == 2 or $miss3 == 1){
            $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $brand = $row['brand_url'];
                
                $sql = "select * from search_plan_demo where brand like '%$pieces[1]%' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $plan = $row['plan_url'];
                    var url = "internet_plan.php?brand=" + $brand;
                    window.location.href = url;
                    break;
                }
                
                

            }
            else{
                $miss2 == 1;
                break;
            }
            
        
    }

    else if($pieces_count == 1 or $miss2 == 1){
        
        // checking brand
        $sql = "select * from search_brand_demo where brand like '%$pieces[0]%' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $row = $result->fetch_assoc();
            $brand = $row['brand_url'];
            var url = "internet_plan.php?brand=" + $brand;
            window.location.href = url;
            break;
        }
        
        // checking Plan
        $sql = "select * from search_plan_demo where brand like '%$pieces[0]%' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $row = $result->fetch_assoc();
            $plan = $row['plan_url'];
            var url = "internet_plan.php?plan=" + $plan;
            window.location.href = url;
            break;
        }
        
    }
    
    




?>