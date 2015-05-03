<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- bootstrap for all -->
	<link rel="stylesheet" type="text/css" href="css/style.css" /> <!-- all css file -->
	<link id="scrollUpTheme" rel="stylesheet" href="css/back-to-top-tab.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/back-to-top-labs.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- signup and login social icons -->
    <link rel="stylesheet" type="text/css" href="css/social.css" /> <!-- social icons bar left -->
	<link rel="stylesheet" type="text/css" href="css/feedback.css" /> <!-- feedback form -->	
	<link rel="stylesheet" type="text/css" href="css/sell.css" /> <!-- sell.php page css -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
	<!-- bootstrap form validation -->
	<script src="jquery/jquery-2.1.3.min.js"></script>
	<script src="jquery/jquery.scrollUp.min.js"></script> <!-- back to top button js -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js">         </script> <!-- bootstrap form validation -->
	<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- bootstrap for all -->
	<script src="js/socialbars.js" type="text/javascript"></script> <!-- social bar left -->
	<script src="js/back-to-top.js" type="text/javascript"></script> <!-- back to top js -->
	
    <script>
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#footer").load("footer.php");
        });
        //topbar, searchbar and menubar end
		
		//feedback form load start
		$(document).ready(function(){
            $("#feedback").load("feedback_form.php");
        });
		//feedback form load end
		
		//login submit start
		function loginfunction(){
			var username = document.getElementById("username").value;
			var pwd = document.getElementById("pwd").value;
			
			var dataString = 'username=' + username + '&pwd=' + pwd;
			
			if(username == "" || pwd == "")
			{
				document.getElementById("username-confirm").innerHTML = "Username field is empty";
				document.getElementById("password-confirm").innerHTML = "Password field is empty";
			} else {
				$.ajax({
				type: "POST",
				url: "seller_login_database.php",
				data: dataString,
				cache: false,
				dataType: "json",
				success: function(data) {
    				if(data.status == 'success'){
        				alert("success");
						
    				}else if(data.status == 'error'){
        				document.getElementById("login-error").innerHTML = "<font style='margin-left:120px;color:darkred;padding-top:5px;'>Username or Password is incorrect</font>";
    				}
				}
				});
			}
			return false;
		}
		//login submit end
		
    </script>
</head>
<body>
	
	<!-- social buttons start -->
    <div id="socialside"></div>
	<!-- social buttons end -->
	
	<!-- feedback form start -->
	<div id="feedback"></div>
	<!-- feedback form end -->
	
    <!-- topbar start -->
    <div class="header-topbar">
        <div class="container">
            <div class="row row-items">
                <div class="col-md-4">
                    <a href="index.php">
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:200px;height:40px;margin-top:-20px;" />
                    </a> 
                    <font style="color:white;font-size:25px;"><b>Marketplace</b></font>
                </div>
                
                <div class="col-md-8">
                    <form class="form-inline" role="form" onsubmit="return loginfunction()" >
                        <span style="padding-right:8px;">
                            <font style="color:#FBD00E;font-size:19px;"><b>Seller Login</b></font>
                        </span>
                        <div class="form-group">
                            <input type="username" class="form-control input-md" id="username" name="username" placeholder="Username" />
							<div id="username-confirm"></div>
                        </div>
                        <div class="form-group" style="padding:0px 5px 0px 5px;">
                            <input type="password" class="form-control input-md" id="pwd" name="pwd" placeholder="Password" />
							<div id="password-confirm"></div>
                        </div>
                        <button type="submit" class="btn btn-primary"><b>Login</b></button>
                        <sub><font style="font-size:13px;"><a href="" style="color:white;">Forgot your password?</a></font></sub>
						<span id="login-error"></span>
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
                    <li class="active" style="border-right: 1px solid #181818;"><a href="home.php"><b>HOME</b></a></li>
                    <li style="border-right: 1px solid #181818;"><a href="aboutus.php"><b>ABOUT US</b></a></li>
                    <li style="border-right: 1px solid #181818;"><a href="pricing.php"><b>PRICING</b></a></li>
                    <li><a href="start_selling.php"><b>START SELLING</b></a></li>
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
            <a href="start_selling.php" type="button" class="btn btn-default" style="background-color:#FBD00E;"><b>Start selling</b></a>
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
	
	<!-- back to top button start -->
	<a href="#" class="image-switch"></a>
	<!-- back to top button end -->
    
    <!-- start footer -->
    <div id="footer"></div>    
    <!-- end footer -->
    
</body>    
</html>