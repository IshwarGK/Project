<?php

    // database connection file include
    include "db_connect.php";

    $sql = "SELECT * FROM you_broadband_plan";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>"."Plan Name"."</td><td>".$row["Plan_Name"]."</td></tr>"
                ."<tr><td>"."Validity"."</td><td>".$row["Validity"]."</td></tr>"
                ."<tr><td>"."Data Usage"."</td><td>".$row["Data_Usage"]."</td></tr>"
                ."<tr><td>"."Speed"."</td><td>".$row["Speed"]."</td></tr>"
                ."<tr><td>"."After Data Usage"."</td><td>".$row["After_Data_Usage"]."</td></tr>"
                ."<tr><td>"."Price"."</td><td>"."<img src='/image/internet/".$row["Image"]."' width=50 height=50>"."</td></tr>";
        }
        echo "</table>";
    } 
    else {
            echo "0 results";
    }
    
    // Close connection
    $conn->close();

?> 