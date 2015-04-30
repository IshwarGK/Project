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
   // $sql = "select * from search_demo where fname like '%$search%' or lname like '%$search%'";
    $b = $p = $s = $v = 0;
    foreach($pieces as $piece){
        
            if($b == 0){
                $sql = "select * from search_brand_demo where brand like '%$piece%'";
                $result = $conn->query($sql);

                 while($row = $result->fetch_assoc()){
                     $bname = $row['brand'];
                     $burl = $row['brand_url'];
                     //if($piece == $row['brand']){
                         
                          $b = 1;
                     //}

                 }
               
            }
            if($p == 0){
                $sql = "select * from search_plan_demo where plan like '%$piece%'";
                $result = $conn->query($sql);
                
                 while($row = $result->fetch_assoc()){
                     $pname = $row['Plan'];
                     $purl = $row['Plan_url'];
                     //if($piece == $row['Plan'] ){
                         
                         $p = 1;
                     //}
                    

                 }
                
            }
    }
        
    
     if($b == 1 and $p == 0){
        $output .= '<option>'.'<a href="http://localhost/internet_plan.php?brand='. $burl .'">'.$bname.'</a>'.'<option>'; 
    }
       
    if($b ==0 and $p == 1){
        $output .= '<option>'.'<a href="http://localhost/internet_plan.php?plan='. $purl.'">'.$pname.'</a>'.'<option>'; 
    } 
        
  
        
        
        
    if($b ==1 and $p == 1){
        $output .= '<option>'.'<a href="http://localhost/internet_plan.php?brand='. $burl . '&plan='. $purl.'">'.$bname.' '.$pname.'</a>'.'<option>'; 
    }
      
     
    }
echo ($output);
?>
