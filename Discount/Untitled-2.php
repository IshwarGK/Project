<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/internet-style.css" />
    <script src="js/modernizr.custom.83306.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="jquery/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script> 
        
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
        //topbar, searchbar and menubar end   
        
    </script>
</head>
<body>
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
            <div class="row">
            <?php

            // database connection file include
            include "db_connect.php";

            $sql = "SELECT * FROM you_broadband_plan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                //echo "<table>";
                while($row = $result->fetch_assoc()) {
            ?>
                
            <div class="col-md-3" style="padding-bottom:30px;">
                <div class="brand-block">
                    <div class="brand-image">
                        <center>
                            <?php
                                echo '<img src="image/internet/'.$row["Image"].'" alt="youbroadband-logo" width="130" height="25" />';
                            ?>    
                        </center>
                    </div>
                    <table style="margin:5px 0px 0px 10px;">
                        <tr>
                            <td>
                                <b>Plan Name :</b> 
                                <?php echo $row["Plan_Name"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Validity :</b>
                                <?php echo $row["Validity"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Data Usage : </b>
                                <?php echo $row["Data_Usage"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Speed :</b>
                                <?php echo $row["Speed"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>After Data Usage :</b> 
                                none
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4><strong>
                                    <del>&#8377 <?php echo $row["Price"]; ?></del> <?php echo $row["Discount"]; ?>% OFF &#8377 1425
                                    </strong>
                                </h4>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="padding:10px 0px 0px 60px;">
                    <button type="submit" class="btn btn-success">Get Coupon</button>
                </div>                   
            </div>
                
            <?php                                            
                    }
        
                } 
    
                // Close connection
                $conn->close();
            ?>
            </div>    
            </div>    
        </div>
    </div>
</body>
</html>