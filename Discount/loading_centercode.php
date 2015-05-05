<script>
alert("woooow");
</script>

<div class="col-md-9" id="load">
                    <!-- first row -->
                    <div class="row">
                        <!-- php code for listing plans -->
                        <?php
                            // database connection file include
                            //$count = $_GET["count"];
                            
                            if (isset($_GET["count1"]) or isset($_GET["brand"])) {
                                if (isset($_GET["count1"])){
                                    $delete1 = $_GET["count1"];
                                }
                                else{
                                    $delete1 = 1;   
                                }
                            }
                            else{
                                $delete1 = 0;
                            }

                            if (isset($_GET["count2"]) or isset($_GET["plan"])) {
                               if (isset($_GET["count2"])){
                                    $delete2 = $_GET["count2"];
                                }
                                else{
                                    $delete2 = 1;   
                                }
                                
                            }
                            else{
                                $delete2 = 0;
                            }

                            if (isset($_GET["count3"]) or isset($_GET["speed"])) {
                                if(isset($_GET["count3"])){
                                    $delete3 = $_GET["count3"];
                                }
                                else{
                                    $delete3 = 1;
                                }
                                
                            }
                            else{
                                $delete3 = 0;
                            }
                            if (isset($_GET["count4"]) ) {
                                $delete4 = $_GET["count4"];
                            }
                            else{
                                $delete4 = 0;
                            }
                            if (isset($_GET["count5"]) or isset($_GET["validity"])) {
                                if(isset($_GET["count5"])){
                                    $delete5 = $_GET["count5"];
                                }
                                else{
                                    $delete5 = 1;
                                }
                                
                            }
                            else{
                                $delete5 = 0;
                            }
                           
                
                            if($delete1 > 0){
                            $brand = $_GET["brand"];
                            //if (!empty($_GET["brand"])) {
                            $keywords1 = preg_split("/[\s,]+/", $brand);
                            $count = 0;
                            $arr= new SplFixedArray(16);
                                foreach($keywords1 as $x1) {
                                    $arr[$count] = $x1;
                                    $count++;
                                 }
                            
                            }
                            else{
                                $count = 0;
                            }
                            if($delete3 > 0) {
                            $speed = $_GET["speed"];
                            
                            $keywords3 = preg_split("/[\s,]+/", $speed);
                            $count3 = 0;
                            $arr3= new SplFixedArray(32);
                                foreach($keywords3 as $x3) {
                                    $arr3[$count3] = $x3;
                                    $count3++;
                                 }
                            }
                            else{
                            $count3 = 0;
                            }

                            if($delete2 > 0) {
                            $plan = $_GET["plan"];
                            //if (!empty($_GET["brand"])) {
                            $keywords2 = preg_split("/[\s,]+/", $plan);
                            $count2 = 0;
                            $arr2= new SplFixedArray(8);
                                foreach($keywords2 as $x2) {
                                    $arr2[$count2] = $x2;
                                    $count2++;
                                 }
                            }
                            else{
                            $count2 = 0;
                            }

                            if($delete4 > 0) {
                            $price = $_GET["price"];
                            $keywords4 = preg_split("/[\s,]+/", $price);
                            $count4 = 0;
                            $arr4= new SplFixedArray(16);
                                foreach($keywords4 as $x4) {
                                    $arr4[$count4] = $x4;
                                    $count4++;
                                 }
                            }
                            else{
                            $count4 = 0;
                            }

                            if($delete5 > 0) {
                            $validity = $_GET["validity"];
                            $keywords5 = preg_split("/[\s,]+/", $validity);
                            $count5 = 0;
                            $arr5= new SplFixedArray(16);
                                foreach($keywords5 as $x5) {
                                    $arr5[$count5] = $x5;
                                    $count5++;
                                 }
                            }
                            else{
                            $count5 = 0;
                            }
                

                            include "db_connect.php";
                            include 'internet_plan_backend.php';
                           // include "dp_internet_plan.php"
                           // $sql = "SELECT * FROM you_broadband_plan";
                            $result = $conn->query($sql);
                                
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                        ?>
                        
                        <div class="col-md-3" style="padding-bottom:40px;">
                            <div class="brand-block">
                                <div class="brand-image">
                                    <center>
                                        <?php
                                            echo '<img src="image/internet/'.$row["Image"].'" alt='.$row["Image"].' 
                                            width="130" height="25" />';
                                        ?>    
                                    </center>
                                </div>
                                <table style="margin:5px 0px 0px 10px;">
                                    <tr>
                                        <td>
                                            <b>Plan Name :</b> 
                                            <?php echo str_replace($row["Validity"],"",$row["Plan_Name"]); ?>
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
                                                    echo "<b>After Data Usage : </b>";
                                                    echo $row["After_Data_Usage"];    
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4><strong>
                                                <del>&#8377 <?php echo $row["Price"]; ?></del> 
                                                <?php echo $row["Discount"]; ?>% OFF &#8377 
                                                <?php
                                                    $discount = ($row["Price"] - ($row["Price"] * ($row["Discount"] / 100)));  
                                                    echo ROUND($discount,0); 
                                                ?> 
                                                </strong>
                                            </h4>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="padding:10px 0px 0px 60px;">
                                <!--button trigger for coupon modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#couponmodal">Get Coupon</button>
                            </div>
                            <!-- PHP code for getting coupon code  -->
                           
                            <?php
                           include "db_connect.php";

                            $sql2 = "SELECT * FROM aitel_coupon where Plan_Name = 'Fibernet 25 GB'";
                                                        $result2 = $conn->query($sql2);
                                                        $row2 = $result2->fetch_assoc();
                            ?>
                                    
                            <!-- coupon-modal -->
							<div class="modal fade" id="couponmodal" tabindex="-1" role="dialog" aria-labelledby="mycouponmodal" aria-
								 hidden="true">
								<div class="modal-dialog" style="width:700px;padding:150px 0px 0px 50px;">
									<div class="modal-content">
										<div class="modal-body">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:#080808;width:40px;height:40px;margin:-15px -15px 0px 0px;">
												<span aria-hidden="true" style="color:white;">&times;</span>
											</button>
											<center id="couponbody" style="color:#888888;">
												<h4>HERE IS YOUR COUPON CODE</h4>
												<form class="form-inline" role="form">
													<div class="form-group">
														<input type="text" class="form-control" id="coupon" value= <?php echo $row2["Coupon_Code"];?> size="50" disabled />
													</div>
													<button type="button" class="btn btn-primary">Copy</button>
												</form>
												<h4>Go to <a href="#">Airtel</a> and Avail this Offer</h4>
												<h5>Share this offer via 
													<a href="" data-toggle="modal" data-target="#smsmodal"><b>SMS</b></a> or 
													<a href="" data-toggle="modal" data-target="#emailmodal"><b>EMAIL</b></a>
												</h5>	
											</center>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
										</div>
									</div>
								</div>
							</div>
							
							<!-- sms coupon -->
							<div class="modal fade" tabindex="-1" id="smsmodal" role="dialog" aria-labelledby="smsmodal" aria-
								 hidden="true">
								<div class="modal-dialog ezCustTrans" style="width:700px;padding:150px 0px 0px 50px;">
									<div class="modal-content">
										<div class="modal-body">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:#080808;width:40px;height:40px;margin:-15px -15px 0px 0px;">
												<span aria-hidden="true" style="color:white;">&times;</span>
											</button>
											<center id="couponbody" style="color:#888888;">
												<h4>Share via SMS</h4>
												<form class="form-inline" role="form">
													<div class="form-group">
														<input type="tel" class="form-control" id="mobilenumber" size="50" />
													</div>
													<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-envelope">  </span> SMS</button>
												</form>	
											</center>
											<p style="padding:15px 0px 0px 90px;"><span class="glyphicon glyphicon-chevron-left"> </span><a href="" data-dismiss="modal">Back</a></p>
											<div style="height:33px;" ></div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
										</div>
									</div>
								</div>
							</div>
							
							<!-- email coupon -->
							<div class="modal fade" tabindex="-1" id="emailmodal" role="dialog" aria-labelledby="emailmodal" aria-
								 hidden="true">
								<div class="modal-dialog ezCustTrans" style="width:700px;padding:150px 0px 0px 50px;">
									<div class="modal-content">
										<div class="modal-body">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:#080808;width:40px;height:40px;margin:-15px -15px 0px 0px;">
												<span aria-hidden="true" style="color:white;">&times;</span>
											</button>
											<center id="couponbody" style="color:#888888;">
												<h4>Share via EMAIL</h4>
												<form class="form-inline" role="form">
													<div class="form-group">
														<input type="email" class="form-control" id="email" size="50" />
													</div>
													<button type="button" class="btn btn-primary">Send Email</button>
												</form>	
											</center>
											<p style="padding:15px 0px 0px 90px;"><span class="glyphicon glyphicon-chevron-left"> </span><a href="" data-dismiss="modal">Back</a></p>
											<div style="height:33px;" ></div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
										</div>
									</div>
								</div>
							</div>			
							
                   
                        </div>
                        <?php                                            
                                }        
                            }     
                        else{
                            
                            echo "Hey Please try another combination";
                            
                        }
                            // Close connection
                            $conn->close();
                        ?>
                    </div> <!-- row end -->    
                </div> <!-- col-md-9 end -->