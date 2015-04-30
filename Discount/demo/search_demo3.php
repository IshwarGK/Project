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
   
?>

<html>

    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        
	
    </head>
    <body>
    
        <h1>Search web page</h1>
        <form action="search_demo3.php" method="post"  >
        
            <input type="text" name="search" placeholder="search here"  />
            <input type="submit" value=">>" />
            
            
        </form>
        
        <?php print($output); 
            ?>
            
    </body>

</html>