<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Diskart: Sell Products Discounts Online</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- bootstrap for all -->
	<link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- signup and login social icons -->
	<link id="scrollUpTheme" rel="stylesheet" href="css/back-to-top-tab.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/back-to-top-labs.css"> <!-- back to top button -->	
	<link rel="stylesheet" type="text/css" href="css/sell.css" /> <!-- sell.php page css -->
	<link rel="stylesheet" type="text/css" href="css/social-buttons.css" /> <!-- social button css -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" />
	<!-- bootstrap form validation -->
	<script src="jquery/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- bootstrap for all -->
	<script src="jquery/jquery.scrollUp.min.js"></script> <!-- back to top button js -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js">         </script> <!-- bootstrap form validation -->
	<script src="js/back-to-top.js" type="text/javascript"></script> <!-- back to top js -->
    <script>
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            check_login_cookies();
            
        });
        //topbar, searchbar and menubar end
        
        function check_login_cookies(){
            var user_name = getCookie('cookies_username');
             var user_pass = getCookie('cookies_pwd');
            if (user_name != "") {
                 window.location = "seller_login_database.php";
            } 
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        
		//login submit start
		function loginfunction(){
			
			var username = document.getElementById("username").value;
			var pwd = document.getElementById("pwd").value;
			
			var dataString = 'username=' + username + '&pwd=' + pwd;
			
			if(username == "")
			{
				document.getElementById("username-confirm").innerHTML = "<font style='margin-left:120px;color:darkred;'>Username field is empty</font>";
				document.getElementById("password-confirm").innerHTML = "";
				
			} 
			if(pwd == "")
			{
				if(username == "")
				{
					document.getElementById("password-confirm").innerHTML = "<font style='margin-left:25px;color:darkred;'>Password field is empty</font>";
				} else {
					document.getElementById("username-confirm").innerHTML = "";
					document.getElementById("password-confirm").innerHTML = "<font style='margin-left:300px;color:darkred;'>Password field is empty</font>";	
				}
			}
			
			if(username != "" && pwd != "" ) 
			{
				
				$.ajax({
				type: "POST",
				url: "seller_login_database.php",
				data: dataString,
				cache: false,
				dataType: "json",
				success: function(data) {
    				if(data.status == 'success'){
						document.getElementById("login-error").innerHTML = "";
        				window.location.assign("seller_after_login.php");
						
    				}else if(data.status == 'error'){
						document.getElementById("username-confirm").innerHTML = "";
						document.getElementById("password-confirm").innerHTML = "";
        				document.getElementById("login-error").innerHTML = "<font style='margin-left:120px;color:darkred;'>Username or Password is incorrect</font>";
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
	
    <!-- topbar start -->
    <div style="height:70px;background-color:#3b5998;">
        <div class="container">
            <div class="row row-items">
                <div class="col-md-4">
                    <a href="sell.php">
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:190px;height:40px;margin-top:-18px;" />
                    </a> 
                    <font style="color:white;font-size:25px;"><b> Marketplace </b></font>
                </div>
                
                <div class="col-md-8">
                    <form class="form-inline" role="form" onsubmit="return loginfunction()" >
                        <span style="padding-right:8px;">
                            <font style="color:#FBD00E;font-size:19px;"><b>Seller Login</b></font>
                        </span>
                        <div class="form-group">
                            <input type="username" class="form-control input-md" id="username" name="username" placeholder="Username" />
                        </div>
                        <div class="form-group" style="padding:0px 5px 0px 5px;">
                            <input type="password" class="form-control input-md" id="pwd" name="pwd" placeholder="Password" />
                        </div>
                        <button type="submit" class="btn btn-primary"><b>Login</b></button>
                        <sub><font style="font-size:13px;"><a href="" style="color:white;">Forgot your password?</a></font></sub><br />
						<span id="username-confirm"></span>
						<span id="password-confirm"></span>
						<span id="login-error"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->
    
    <!-- menubar start -->
    <div style="background-color:#232f3e;">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active" style="border-right: 1px solid #3b5998;"><a href="sell.php"><b>HOME</b></a></li>
                    <li style="border-right: 1px solid #3b5998;"><a href="aboutus.php"><b>ABOUT US</b></a></li>
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
                <strong>How to sell</strong> with<font face="bauhaus 93"> diskart.in </font>
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
    <div style="background-color:#005387;margin-top:70px;padding:50px 0px 50px 0px;">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3 col-md-offset-1">
					<h2 class="sell-contact">CONTACT US</h2>
					<font style="color:white;">
						<p><b>Email : sell@diskart.in</b></p>
						<p><b>Mb. No.: 7028257052</b></p>
					</font>
				</div>
				
				<div class="col-md-3 col-md-offset-1">
					<h2 class="sell-contact">SOCIAL</h2>
					<button class="btn btn-facebook"><i class="fa fa-facebook"></i> </button>
					<button class="btn btn-twitter"><i class="fa fa-twitter"></i> </button>
					<button class="btn btn-google-plus"><i class="fa fa-google-plus"></i> </button>
					<button class="btn btn-linkedin"><i class="fa fa-linkedin"></i> </button>
				</div>
				
				<div class="col-md-3 col-md-offset-1">
					<h2 class="sell-contact">SITEMAP</h2>
					<p><strong><a href="sell.php" id="footer-shortcut-link">HOME</a></strong></p>
					<p><strong><a href="#" id="footer-shortcut-link">ABOUT US</a></strong></p>
					<p><strong><a href="start_selling.php" id="footer-shortcut-link">START SELLING</a></strong></p>
					<p><strong><a href="index.php" id="footer-shortcut-link">DISKART.IN</a></strong></p>
				</div>
			</div>
		</div>
	</div>
	
	<div style="background-color:#3b5998;padding:15px 0px 10px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<p style="color:white;"><b>&#169; 2015 Diskart. All rights reserved.</b></p>
				</div>
			</div>
		</div>
	</div>
    <!-- end footer -->
    
</body>    
</html>