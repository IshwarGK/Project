<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Seller Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="jquery/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<style>
		
		/* topbar div start */
		.seller_profile_top {
			padding:8px 0px 15px 0px;
			width:100%;
			background-color:#3b5998;
		}
		/* topbar div start */
		
		/* paynow button start */
		.pay-now {
			margin:50px 0px 0px 80px;
			padding-top:5px;
			border:1px solid #E0E0E0;
			background-color:#F0F0F0;
			border-radius:5px;
			width:400px;
			height:120px;
		}
		.pay-now:hover {
			border:2px solid #B0C4DE;
		}
		/* paynow button end */
		
		/* company profile */
		.company-profile {
			margin-top:25px;
			padding:20px 10px 20px 10px;
			border:1px solid #E0E0E0;
			border-radius:5px;
			background-color:#F0F0F0;
		}
		.company-profile:hover {
			border:2px solid black;
		}
		/* company profile */
		
		
	</style>
	<script>
		
		//coupon check message start
		$(document).ready(function(){
			document.getElementById("coupon-check").innerHTML = "";
			document.getElementById("coupon_form").reset();
		});
		//coupon check message end
		
		//coupon history button start
		$(document).ready(function(){
            
			$("#coupon-history").hide();
		});
		var count = 0;
		function couponhistoryfunction() {
			count = count + 1;
			if(count % 2 != 0){
				$("#coupon-history").fadeIn(1000);
				document.getElementById("coupon-button").innerHTML = "Hide Coupon History";
			} else {
				$("#coupon-history").fadeOut(1000);
				document.getElementById("coupon-button").innerHTML = "Show Coupon History";
			}
		}
		//coupon history button end
	
        //paynow button start
		$(document).ready(function(){
			$(".pay-now").hide();
		});
		var countpay = 0;
		function paynowfunction() {
			countpay = countpay + 1;
			if(countpay % 2 != 0){
				$(".pay-now").fadeIn(1000);
				
			} else {
				$(".pay-now").fadeOut(1000);
				
			}
		}
		//paynow button end
        
        // start delete login cookies
        var delete_cookie = function(name) {
            document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        };
        
        // end delete login cookies
        
	</script>
</head>
<body>
    <script>
    function delete_login_cookies(){
            
            delete_cookie('cookies_username');
            delete_cookie('cookies_pwd');
        
            window.location = "sell.php";
            
        }
    </script>
    
    <!-- database connection start -->
	<?php 
		include 'db_connect.php'; 
		$username = $_COOKIE['cookies_username'];
        $pwd = $_COOKIE['cookies_pwd'];
        $sql = "SELECT * FROM seller_account WHERE Username = '$username' and Password = '$pwd'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
    ?>
	<!-- database connection end -->
	
    <!-- topbar start -->
    <div class="seller_profile_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a>
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:190px;height:40px;" />
                    </a>	
                </div>
				<div class="col-md-4" style="padding-top:5px;">
					<span style="margin-left:-15px;">
						<font style="color:white;font-size:25px;">Marketplace</font>
					</span>
				</div>
            </div>
        </div>
    </div>
	<!-- topbar end -->
	
	<!-- seller details and enter coupon start -->
	<div class="container">
		<div class="row">
			<!-- left panel start -->
			<div class="col-md-7">
				
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<center>
							<h2><?php echo $row['Company_Name'].", " .$row['Area']; ?></h2>
						</center>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form role="form" class="form-inline" id="coupon_form" style="margin-top:40px;" onsubmit="return verify_coupon_code_fun('<?php echo $username ?>', '<?php echo $pwd ?>')">
							<h4>Enter Coupon</h4>
							<div class="form-group">
								<input type="text" class="form-control" id="coupon" name="coupon" placeholder="Enter Coupon" autofocus required />
							</div>
							<button type="submit" class="btn btn-primary">Verify</button>
						</form>
						<div id="coupon-check" style="margin-top:10px;"> </div>
                        
					</div>
				</div>
				
                <script>
                function verify_coupon_code_fun(username,pwd){
                    
                    var coupon = document.getElementById("coupon").value;
			        
                    var dataString = 'username=' + username + '&pwd=' + pwd + '&coupon=' + coupon;
                    
                                    $.ajax({
                                    type: "POST",
                                    url: "verify_coupon_code.php",
                                    data: dataString,
                                    cache: false,
                                    dataType: "json",
                                    success:function(data) {
                                        if(data.status == 'success'){
                                            
                                            document.getElementById("coupon-check").innerHTML = "<font style='color:green;'>Verified</font>";
											document.getElementById("coupon_form").reset();
											location.reload();
											
                                        } 
										if(data.status == 'error'){
                                            
                                            document.getElementById("coupon-check").innerHTML = "<font style='color:darkred;'>Coupon code is already used</font>";
                                        }
										if(data.status == 'wrongcoupon'){
                                            
                                            document.getElementById("coupon-check").innerHTML = "<font style='color:darkred;'>Coupon Code is wrong</font>";
                                        }
										
										
                                    }
                                    });
                                return false;
                    
                    
                }
                </script>
                
				<div class="row" style="padding-top:40px;">
					<div class="col-md-2 col-md-offset-3">
						<button type="button" class="btn btn-success" onclick="paynowfunction()">Pay Now</button>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-danger" onclick="couponhistoryfunction()" id="coupon-button">Show Coupon History</button>	
					</div>
				</div>
				<?php
                    $i = 1;
                    $j = 0;
                    $total = 0;
                ?>
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<div class="pay-now">
							<font size="4">
								<center>
                                    <?php 
                                
                            include "db_connect.php";
                                
                                
                                $sql3 = "SELECT cv.coupon_code, vc.used_date, ap.plan_name, ap.price 

                                        FROM verified_coupon_airtel vc

                                        INNER JOIN coupon_validation_airtel as cv

                                            on cv.coupon_code = vc.coupon_code

                                        INNER JOIN airtel_plan as ap

                                            on ap.plan_name = cv.plan_name";

                                $result3 = $conn->query($sql3);
                                $total2 = 0;

                                if ($result3->num_rows > 0) {
                                while($row2 = $result3->fetch_assoc()){
                                    $j++;
                                    $sum2 = ($row2['price']) * (5/100);
                                    $total2 = $total2 + $sum2;
                                   
                                }
                                } ?>
									<p>Total Number of Coupons Used : <?php echo ($j); ?></p>
									<p>Total Pay Out : <?php echo $total2; ?></p>
									<button class="btn btn-primary">Checkout</button>
								</center>	
							</font>
						</div>
					</div>
				</div>
				
				<div class="row" style="padding-top:50px;">
					<div class="col-md-11 col-md-offset-1">
						<table class="table table-striped table-bordered table-hover table-condensed" id="coupon-history">
							<thead>
								<tr>
									<th>#</th>
									<th>Plan Name</th>
									<th>PRICE</th>
									<th>COUPON</th>
									<th>DATE</th>
									<th>COMMISSION</th>
									<th>PAY</th>
								</tr>
							</thead>
							<tbody>
                                <?php 
                                
                            include "db_connect.php";
                                
                                
                                $sql2 = "SELECT cv.coupon_code, vc.used_date, ap.plan_name, ap.price 

                                        FROM verified_coupon_airtel vc

                                        INNER JOIN coupon_validation_airtel as cv

                                            on cv.coupon_code = vc.coupon_code

                                        INNER JOIN airtel_plan as ap

                                            on ap.plan_name = cv.plan_name";

                                $result2 = $conn->query($sql2);
                                

                                if ($result2->num_rows > 0) {
                                while($row2 = $result2->fetch_assoc()){
                                    ?>
                                
								<tr>
									<td><?php echo $i; $i++;?></td>
									<td><?php echo $row2['plan_name'] ?></td>
									<td><?php echo $row2['price'] ?></td>
									<td><?php echo $row2['coupon_code'] ?></td>
									<td><?php echo $row2['used_date'] ?></td>
									<td>5%</td>
									<td> <?php $sum = ($row2['price']) * (5/100); $total = $total + $sum; echo $sum ?></td>
								</tr>
								
								<?php 
                                }
                                } ?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><b>Total Pay</b></td>
									<td><b><?php echo $total ?></b></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
		
			</div>
			<!-- left panel end -->
			
			<!-- right panel start -->
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-1 col-md-offset-9">
						<button class="btn btn-info" onclick="delete_login_cookies()" style="margin-top:20px;"> 
							<span class="glyphicon glyphicon-log-out"> </span> log out 
						</button>
					</div>
				</div>
				<div class="company-profile">
					
					<center><font size="5"><strong>Company Profile</strong></font></center>
					
					<div class="row" style="margin-top:30px;">
						<div class="col-md-5">
							<p><b>Company Name </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Company_Name']; ?></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Address </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Company_Address'].", " .$row['Area'].", " .$row['City'].", " .$row['State'].", " .$row['Zip_Code']; 
								?></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Owner </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Full_Name']; ?></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Username </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Username']; ?></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Email-Id</b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Email']; ?></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Mobile Number</b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Mobile_Number']; ?></p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Product </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> <?php echo $row['Product']; ?></p>
						</div>
					</div>
					
				</div>
					
			</div>
			<!-- right panel end -->
		</div>
	</div>
	<!-- seller details and enter coupon end -->
	<?php 
		// Close connection
    	$conn->close();
	?>
	
	<div style="background-color:#3b5998;padding:15px 0px 10px 0px;margin-top:192px;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<p style="color:white;"><b>&#169; 2015 Diskart. All rights reserved.</b></p>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>    