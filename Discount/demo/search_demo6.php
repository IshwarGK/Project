<?php

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "discount";
    $output = '';  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_POST['search'])){
    $search = $_POST['search'];
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
                      $b = 1;

                 }
               
            }
            if($p == 0){
                $sql = "select * from search_plan_demo where plan like '%$piece%'";
                $result = $conn->query($sql);
                
                 while($row = $result->fetch_assoc()){
                    $pname = $row['Plan'];
                    $purl = $row['Plan_url'];
                    $p = 1;

                 }
                
            }
        
            if($v == 0){
                $sql = "select * from search_validity_demo where validity like '%$piece%'";
                $result = $conn->query($sql);
                
                 while($row = $result->fetch_assoc()){
                    $vname = $row['validity'];
                    $vurl = $row['validity_url'];
                    $v = 1;

                 }
                
            }
        
            if($s == 0){
                $sql = "select * from search_speed_demo where speed like '%$piece%'";
                $result = $conn->query($sql);
                
                 while($row = $result->fetch_assoc()){
                    $sname = $row['speed'];
                    $surl = $row['speed_url'];
                    $s = 1;

                 }
                
            }
            
            
        
        
    }    
       
    if($b == 1 and $p == 0 and $s == 0 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl .'">'.$bname.'</a>'; 
    }
       
    if($b ==0 and $p == 1 and $s == 0 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?plan='. $purl.'">'.$pname.'</a>'; 
    } 
        
   if($b == 0 and $p == 0 and $s == 1 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?speed='. $surl .'">'.$sname.'</a>'; 
    } 
        
    if($b == 0 and $p == 0 and $s == 0 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?validity='. $vurl .'">'.$vname.'</a>'; 
    } 
        
        
        
    if($b ==1 and $p == 1 and $s == 0 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&plan='. $purl.'">'.$pname.'</a>'; 
    }
    if($b ==1 and $p == 0 and $s == 1 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&speed='. $surl.'">'.$sname.'</a>'; 
    }
    if($b ==1 and $p == 0 and $s == 0 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&validity='. $vurl.'">'.$vname.'</a>'; 
    }
    if($b ==0 and $p == 1 and $s == 1 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?speed='. $surl . '&plan='. $purl.'">'.$pname.'</a>'; 
    }
    if($b ==0 and $p == 1 and $s == 0 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?validity='. $vurl . '&plan='. $purl.'">'.$pname.'</a>'; 
    }    
    if($b ==0 and $p == 0 and $s == 1 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?validity='. $vurl . '&speed='. $surl.'">'.$sname.'</a>'; 
    }     
    
   
    if($b ==1 and $p == 1 and $s == 1 and $v == 0){
        $output .= '<a href="http://localhost/internet_plan.php?brand='. $burl . '&plan='. $purl. '&speed='. $surl.'">'.$pname.'</a>'; 
    }
    
    if($b ==1 and $p == 1 and $s == 0 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?speed='. $surl . '&plan='. $purl. '&validity='. $vurl.'">'.$pname.'</a>'; 
    }    
       
    if($b ==0 and $p == 1 and $s == 1 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?validity='. $vurl . '&plan='. $purl. '&speed='. $surl.'">'.$pname.'</a>'; 
    }   
    
    if($b ==1 and $p == 0 and $s == 1 and $v == 1){
        $output .= '<a href="http://localhost/internet_plan.php?speed='. $surl . '&validity='. $vurl. '&brand='. $burl.'">'.$vname.'</a>'; 
    }    
        
        
    } 
   
?>

<html>

    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        
    </head>
    <body>
    
        <h1>Search web page</h1>
        <form action="search_demo6.php" method="post"  >
        
            <input type="text" name="search" placeholder="search here"  />
            <input type="submit" value=">>" />
            
            
        </form>
        
        <?php print($output); 
            ?>
            
    </body>

</html>