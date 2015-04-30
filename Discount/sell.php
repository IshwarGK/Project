<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png">
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/social.css" />
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="jquery/jquery-2.1.3.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/socialbars.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#footer").load("footer.php");
        });
        //topbar, searchbar and menubar end
    </script>
</head>
<body>
	<div id="socialside">
    </div>
    <!-- topbar start -->
    <div class="header-topbar">
        <div class="container">
            <div class="row row-items">
                <div class="col-md-4">
                    <a href="index.php">
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:210px;height:45px;"/>
                    </a> 
                    <font style="color:white;font-size:25px;"><b>Marketplace</b></font>
                </div>
                
                <div class="col-md-8">
                    <form class="form-inline" role="form">
                        <span style="padding-right:8px;">
                            <font style="color:#FBD00E;font-size:19px;"><b>Seller Login</b></font>
                        </span>
                        <div class="form-group">
                            <input type="email" class="form-control input-md" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group" style="padding:0px 5px 0px 5px;">
                            <input type="password" class="form-control input-md" id="pwd" placeholder="Password" />
                        </div>
                        <button type="submit" class="btn btn-primary"><b>Login</b></button>
                        <sub><font style="font-size:13px;"><a href="" style="color:white;">Forgot your password?</a></font></sub>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->
    
    <!-- menubar start -->
    <div class="header-menubar">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active" style="border-right: 1px solid #181818;"><a href="home.html"><b>HOME</b></a></li>
                    <li style="border-right: 1px solid #181818;"><a href="aboutus.html"><b>ABOUT US</b></a></li>
                    <li style="border-right: 1px solid #181818;"><a href="pricing.html"><b>PRICING</b></a></li>
                    <li><a href="start_selling.html"><b>START SELLING</b></a></li>
                </ul>
            </div>
        </nav>
    </div>    
    <!-- menubar end -->
    
    <!-- start selling & slogan start -->
    <div class="header-banner">
        <div class="container">
            <h2>
                <div style="color:wheat;">
                    <b>Place Your Product Discount<br />
                    Your Product Gets Customers</b>
                </div>    
            </h2>
            <h4>
                <div style="color:#ACD9FF;padding:10px 0px 10px 0px;">
                    Register your product discount today.
                </div>    
            </h4>
            <a href="start_selling.html" type="button" class="btn btn-default" style="background-color:#FBD00E;"><b>Start selling</b></a>
        </div>
    </div>
    <!-- start selling & slogan start -->
    
    <!-- how to sell start -->
    <div class="container how-sell">
        <h2>
            <div style="color:#680000;">
                <strong>How to sell</strong> with<font face="bauhaus 93"> diskart.com </font>
            </div>    
        </h2>
    </div>    
    
    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-md-2 col-md-offset-1">
                <center>
                    <img src="image/sell/register.png" class="img-circle" alt="register" width="100" height="100" />
                </center>    
                <div class="sell-step" style="background-color:#1E90FF;">
                    <h4><strong>Register &amp; List</strong></h4>
                    <p>Create seller account and list your products with discounts </p>
                </div>
            </div>
            <div class="col-md-1">
                <span class="glyphicon glyphicon-arrow-right" style="padding:45px 0px 0px 30px;"></span>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="image/sell/receive_order.jpg" class="img-circle" alt="register" width="100" height="100" />
                </center>    
                <div class="sell-step" style="background-color:#FF4500;">
                    <h4><strong>Receive orders</strong></h4>
                    <p>Receive orders with coupon code and verify it in seller account </p>
                </div>
            </div>
            <div class="col-md-1">
                <span class="glyphicon glyphicon-arrow-right" style="padding:45px 0px 0px 30px;"></span>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="image/sell/sell.png" class="img-circle" alt="register" width="100" height="100" />
                </center>    
                <div class="sell-step" style="background-color:#008000;">
                    <h4><strong>Sell</strong></h4>
                    <p>Sell products with discounts to customers </p>
                </div>
            </div>
            <div class="col-md-1">
                <span class="glyphicon glyphicon-arrow-right" style="padding:45px 0px 0px 30px;"></span>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="image/sell/rupee.png" class="img-circle" alt="register" width="100" height="100" />
                </center>    
                <div class="sell-step" style="background-color:#A00000;">
                    <h4><strong>Payments</strong></h4>
                    <p>Collect payments from customers </p>
                </div>
            </div>
        </div>
    </div>    
    <!-- how to sell end -->
    
    <!-- start footer -->
    <div id="footer"></div>    
    <!-- end footer -->
    
</body>    
</html>