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
    
    <!-- topbar, searchbar and menubar start  -->
    <div id="header" style="width:1349px; height:150px;"></div>
    <!-- topbar, searchbar and menubar end  -->
    
    <!-- list of internet plans start -->
    <div style="width:1349px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <ul id="shortcut-menu">
                        <li><a href="index.html">Home</a></li>
                        <li> > </li>
                        <li>Internet Plans</li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <!-- left panel start -->
                <div class="col-md-2 col-md-offset-1" style="border-right:1px solid #F0F0F0;">
                    <!-- shop by brand start-->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Shop by Brands</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Airtel</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />BSNL</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Hathway</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />TaTa Docomo</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Tikona</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />You Broadband</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- shop by brand end -->
                    
                    <!-- Plan Type start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Plan</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Unlimited</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Day / Night</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Normal</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Plan Type end -->
                    
                    <!-- sort by speed start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Speed</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px; height:150px; overflow-y:scroll;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />50 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />18 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />12 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />10 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />6 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />2 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1.5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />512 Kbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />320 Kbps</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- sort by speed end -->
                    
                    <!-- price start -->
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Price</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />500 - 1000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1000 - 2000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />2000 - 3000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />3000 - 4000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Above 4000</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- price end -->
                    
                    <!-- validity start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Validity</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />3 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />6 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />12 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />24 month</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- validity end -->
                    
                </div>
                <!--left panel end -->
                
                <!-- right panel start -->
                <div class="col-md-9">
                    <!-- first row -->
                    <div class="row">
                        <!-- php code for listing plans -->
                        <?php
                            // database connection file include
                            include "db_connect.php";
                            $sql = "SELECT * FROM you_broadband_plan";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                        ?>
                        
                        <div class="col-md-3" style="padding-bottom:30px;">
                            <div class="brand-block">
                                <div class="brand-image">
                                    <center>
                                        <?php
                                            echo '<img src="image/internet/'.$row["Image"].'" alt="youbroadbandlogo" 
                                            width="130" height="25" />';
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
                                            <?php 
                                                if($row["After_Data_Usage"] != "None") {
                                                    echo "<b>After Data Usage :</b>";
                                                    echo $row["After_Data_Usage"];    
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4><strong>
                                                <del>&#8377 <?php echo $row["Price"]; ?></del> 
                                                <?php echo $row["Discount"]; ?>% OFF &#8377 1425
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
                    </div> <!-- row end -->    
                </div> <!-- col-md-9 end -->
                <!-- right panel end -->
            </div><!-- main row end -->
        </div> <!-- container-fluid end -->
    </div> <!-- outer widht block end -->
    <!-- list of internet plans end -->
    
    <!-- start footer -->
    <div id="footer" style="width:1349px;"></div>    
    <!-- end footer -->
    
</body>    
</html>