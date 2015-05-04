<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
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
			background-color:#228B22;
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
	</script>
</head>
<body>
	
    <!-- topbar start -->
    <div class="seller_profile_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.php">
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:200px;height:40px;" />
                    </a>	
                </div>
				<div class="col-md-9" style="padding-top:5px;">
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
							<h2>GoSwift Exim Private Limited, Kothrud</h2>
						</center>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form role="form" class="form-inline" style="margin-top:40px;">
							<h4>Enter Coupon</h4>
							<div class="form-group">
								<input type="text" class="form-control" id="coupon" name="coupon" placeholder="Enter Coupon" autofocus required />
							</div>
							<button type="submit" class="btn btn-primary">Verify</button>
						</form>	
					</div>
				</div>
				
				<div class="row" style="padding-top:40px;">
					<div class="col-md-2 col-md-offset-3">
						<button type="button" class="btn btn-success" onclick="paynowfunction()">Pay Now</button>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-danger" onclick="couponhistoryfunction()" id="coupon-button">Show Coupon History</button>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<div class="pay-now">
							<font size="4">
								<center>
									<p>Total Number of Coupons Used : 1500</p>
									<p>Total Pay Out : 4500 &#8377</p>
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
									<th>PRODUCT</th>
									<th>PRICE</th>
									<th>COUPON</th>
									<th>DATE</th>
									<th>COMMISSION</th>
									<th>PAY</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Airtel</td>
									<td>1500 &#8377</td>
									<td>AD50</td>
									<td>25-04-15</td>
									<td>5%</td>
									<td>75 &#8377</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Docomo</td>
									<td>1500 &#8377</td>
									<td>AD50</td>
									<td>25-04-15</td>
									<td>5%</td>
									<td>75 &#8377</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Airtel</td>
									<td>1500 &#8377</td>
									<td>AD50</td>
									<td>25-04-15</td>
									<td>5%</td>
									<td>75 &#8377</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Airtel</td>
									<td>1500 &#8377</td>
									<td>AD50</td>
									<td>25-04-15</td>
									<td>5%</td>
									<td>75 &#8377</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Airtel</td>
									<td>1500 &#8377</td>
									<td>AD50</td>
									<td>25-04-15</td>
									<td>5%</td>
									<td>75 &#8377</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><b>Total Pay</b></td>
									<td><b>1500 &#8377</b></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
		
			</div>
			<!-- left panel end -->
			
			<!-- right panel start -->
			<div class="col-md-5">
				<div class="company-profile">
					
					<center><font size="5"><strong>Company Profile</strong></font></center>
					
					<div class="row" style="margin-top:30px;">
						<div class="col-md-5">
							<p><b>Company Name </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> Goswift Exim Private Limited</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Owner </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> Rimish Bansod</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Username </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> rimish786</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Email-Id</b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> rimish786@gmail.com</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Mobile Number</b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> 808724524</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<p><b>Product </b></p>
						</div>
						<div class="col-md-7">
							<p><b> : </b> Internet Broadband</p>
						</div>
					</div>
					
				</div>
					
			</div>
			<!-- right panel end -->
		</div>
	</div>
	<!-- seller details and enter coupon end -->
</body>
</html>    