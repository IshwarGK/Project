    <script> 
		//fix search bar on scroll start
			// first method
			jQuery("document").ready(function($){
				var nav = $('.header-topbar');
				var pos = nav.offset().top;
				$(window).scroll(function () {
					var fix = ($(this).scrollTop() > pos) ? true : false;
					nav.toggleClass("fix-nav", fix);
					$('body').toggleClass("fix-body", fix);
					
					if ($(this).scrollTop() > pos) {
						$('#slogan').slideUp(300);
						$('#menu1').slideUp(300);
						$('#search-box').animate({marginTop:"13px"}, -1000);
     				} else {
						$('#slogan').slideDown(300);
						$('#menu1').slideDown(300);
						$('#search-box').animate({marginTop:"0px"}, -1000);	
     				}
				});
			});
			//second method
			/*
			$(window).scroll(function () {
     			if ($(this).scrollTop() > 100) {
          			$('#top-search').addClass("fix-nav");
					$('#slogan').hide(1);
					$('.company-logo').animate({marginTop:"0px"}, -1000);
   					$('body').addClass("fix-body");
					$('.header-menubar').hide();
					
     			} else {
   					$('#top-search').removeClass("fix-nav");
					$('.company-logo').animate({marginTop:"-20px"}, -1000);
					$('#slogan').show(1);
					$('.header-menubar').show();
   					$('body').removeClass("fix-body");
					
     			}	 
			});*/
		
		//fix search bar on scroll end
		
		// search bar find results start
		function searchFunction(){   
			var x = $('#mainsearch').val();
			var z = $('#datalist1');
			var val = $(z).find('option[value="' + x + '"]');
			var endval = val.attr('value');	
            var url = "search_backend.php?searchval="+endval;
            window.location.href = url;
    		return false;	
			}
		// search bar find results end

        //dropdown menu start
        $(document).ready(function(){
            $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');        
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');       
                }
            );
        });
        //dropdown menu end
        
    </script>
    
    <!-- logo, helping bar and search bar start -->   
	<div class="header-topbar">
		<div class="container">
        	<div class="row">
				
				<!-- company logo and slogan column start -->
				<div class="col-md-3 col-md-offset-1">
                	<a href="index.php">
                    	<img src="image/logo.png" class="company-logo" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" />
                    </a>
					<font id="slogan" size="2">The Largest Discount Store</font>
                </div>
				<!-- company logo and slogan column end -->
				
				<!--helping bar and search bar column start -->
				<div class="col-md-8">
					<!-- helping bar row start -->
					<div class="row">	
                    	<div class="col-md-7 col-md-offset-4">
							<ul id="menu1">
								<li style="display:inline;">
									<a href="" data-toggle="modal" data-target="#exampleModal3" data-backdrop="static">Pune
										<span class="glyphicon glyphicon-menu-down"></span>
									</a>    
								</li>
								<!-- start modal of change location exampleModal3 -->
								<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="locationModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<div class="container-fluid">
													<div class="row">
														<div class="col-md-4">
															<h4 class="modal-title" id="locationModalLabel"><b>Select Your City</b></h4>
														</div>
														<div class="col-md-8">
															<form role="form">
																<input type="search" class="form-control" id="search" placeholder="Enter Your City" 
																	   autocomplete="on"  style="border-color:black;" />
															</form> 
														</div>
													</div>
													<div class="row topsearch">
														<div class="col-md-12">
															<strong>Top Searched: </strong> <a href="">Delhi,</a> <a href="">Mumbai,</a> 
															<a href="">Pune,</a> <a href="">Bengaluru,</a> <a href="">Hyderabad,</a>
															<a href="">Chennai,</a> <a href="">Kolkata</a>
														</div>    
													</div>    
												</div> 
											</div>
											<div class="clearfix"></div>
											<div class="modal-body">
												<div class="container-fluid">
													<div role="tabpanel">
														<div class="row">
															<div class="col-md-4">
																<!-- nav tabs -->
																<ul class="nav nav-pills nav-stacked cityloc" role="tablist">
																	<li role="presentation" class="active">
																		<a href="#AndhraPradesh" aria-controls="AndhraPradesh" role="tab" data-toggle="tab">Andhra Pradesh
																		</a>
																	</li>
																	<li role="presentation">
																		<a href="#ArunachalPradesh" aria-controls="ArunachalPradesh" role="tab" data-toggle="tab">Arunachal Pradesh
																		</a>
																	</li>
																	<li role="presentation">
																		<a href="#Assam" aria-controls="Assam" role="tab" data-toggle="tab">Assam</a>
																	</li>
																	<li role="presentation">
																		<a href="#Bihar" aria-controls="Bihar" role="tab" data-toggle="tab">Bihar</a>
																	</li>
																	<li role="presentation">
																		<a href="#Chhattisgarh" aria-controls="Chhattisgarh" role="tab" data-toggle="tab">Chhattisgarh</a>
																	</li>
																	<li role="presentation">
																		<a href="#DelhiNCR" aria-controls="DelhiNCR" role="tab" data-toggle="tab">Delhi (NCR)</a>
																	</li>                                                            
																	<li role="presentation">
																		<a href="#Goa" aria-controls="Goa" role="tab" data-toggle="tab">Goa</a>
																	</li>
																	<li role="presentation">
																		<a href="#Gujarat" aria-controls="Gujarat" role="tab" data-toggle="tab">Gujarat</a>
																	</li>
																	<li role="presentation">
																		<a href="#Haryana" aria-controls="Haryana" role="tab" data-toggle="tab">Haryana</a>
																	</li>
																	<li role="presentation">
																		<a href="#HimachalPradesh" aria-controls="HimachalPradesh" role="tab" data-toggle="tab">Himachal Pradesh</a>
																	</li>
																	<li role="presentation">
																		<a href="#JammuandKashmir" aria-controls="JammuandKashmir" role="tab" data-toggle="tab">Jammu and Kashmir</a>
																	</li>
																	<li role="presentation">
																		<a href="#Jharkhand" aria-controls="Jharkhand" role="tab" data-toggle="tab">Jharkhand</a>
																	</li>
																	<li role="presentation">
																		<a href="#Karnataka" aria-controls="Karnataka" role="tab" data-toggle="tab">Karnataka</a>
																	</li>
																	<li role="presentation">
																		<a href="#Kerala" aria-controls="Kerala" role="tab" data-toggle="tab">Kerala</a>
																	</li>
																	<li role="presentation">
																		<a href="#MadhyaPradesh" aria-controls="MadhyaPradesh" role="tab" data-toggle="tab">Madhya Pradesh</a>
																	</li>
																	<li role="presentation">
																		<a href="#Maharashtra" aria-controls="Maharashtra" role="tab" data-toggle="tab">Maharashtra</a>
																	</li>
																	<li role="presentation">
																		<a href="#Meghalaya" aria-controls="Meghalaya" role="tab" data-toggle="tab">Meghalaya</a>
																	</li>
																	<li role="presentation">
																		<a href="#Nagaland" aria-controls="Nagaland" role="tab" data-toggle="tab">Nagaland</a>
																	</li>
																	<li role="presentation">
																		<a href="#Orissa" aria-controls="Orissa" role="tab" data-toggle="tab">Orissa</a>
																	</li>
																	<li role="presentation">
																		<a href="#Punjab" aria-controls="Punjab" role="tab" data-toggle="tab">Punjab</a>
																	</li>
																	<li role="presentation">
																		<a href="#Rajasthan" aria-controls="Rajasthan" role="tab" data-toggle="tab">Rajasthan</a>
																	</li>
																	<li role="presentation">
																		<a href="#TamilNadu" aria-controls="TamilNadu" role="tab" data-toggle="tab">Tamil Nadu</a>
																	</li>
																	<li role="presentation">
																		<a href="#Telangana" aria-controls="Telangana" role="tab" data-toggle="tab">Telangana</a>
																	</li>
																	<li role="presentation">
																		<a href="#Tripura" aria-controls="Tripura" role="tab" data-toggle="tab">Tripura</a>
																	</li>
																	<li role="presentation">
																		<a href="#UttarPradesh" aria-controls="UttarPradesh" role="tab" data-toggle="tab">Uttar Pradesh</a>
																	</li>
																	<li role="presentation">
																		<a href="#Uttarakhand" aria-controls="Uttarakhand" role="tab" data-toggle="tab">Uttarakhand</a>
																	</li>
																	<li role="presentation">
																		<a href="#WestBengal" aria-controls="WestBengal" role="tab" data-toggle="tab">West Bengal</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-8">
																<!-- Tab Panes -->
																<div class="tab-content">
																	<div role="tabpanel" class="tab-pane active" id="AndhraPradesh">
																		<ul class="cityname">
																			<li><a href="">Visakhapatnam</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="ArunachalPradesh">
																		bansod
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Assam">
																		hi
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Bihar">
																		bansod
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Chhattisgarh">
																		<ul class="cityname">
																			<li><a href="">Bhilai</a></li>
																			<li><a href="">Raipur</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="DelhiNCR">
																		<ul class="cityname">
																			<li><a href="">Delhi</a></li>
																			<li><a href="">Faridabad</a></li>
																			<li><a href="">Ghaziabad</a></li>
																			<li><a href="">Gurgaon</a></li>
																			<li><a href="">Noida</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Goa">
																		<ul class="cityname">
																			<li><a href="">Goa</a></li>
																		</ul>        
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Gujarat">
																		<ul class="cityname">
																			<li><a href="">Ahmedabad</a></li>
																			<li><a href="">Baroda</a></li>
																			<li><a href="">Rajkot</a></li>
																			<li><a href="">Surat</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Haryana">
																		bansod
																	</div>

																	<div role="tabpanel" class="tab-pane" id="HimachalPradesh">
																		ght
																	</div>

																	<div role="tabpanel" class="tab-pane" id="JammuandKashmir">
																		<ul class="cityname">
																			<li><a href="">Jammu</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Jharkhand">
																		bansod
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Karnataka">
																		<ul class="cityname">
																			<li><a href="">Bengaluru</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Kerala">
																		kerala
																	</div>

																	<div role="tabpanel" class="tab-pane" id="MadhyaPradesh">
																		<ul class="cityname">
																			<li><a href="">Bhopal</a></li>
																			<li><a href="">Indore</a></li>
																			<li><a href="">Jabalpur</a></li>

																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Maharashtra">
																		<ul class="cityname">
																			<li><a href="">Ahmednagar</a></li>
																			<li><a href="">Aurangabad</a></li>
																			<li><a href="">Jalgaon</a></li>
																			<li><a href="">Mumbai</a></li>
																			<li><a href="">Nagpur</a></li>
																			<li><a href="">Navi Mumbai</a></li>
																			<li><a href="">Powai</a></li>
																			<li><a href="">Pune</a></li>
																			<li><a href="">Thane</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Meghalaya">
																		megha
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Nagaland">
																		naga
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Orissa">
																		orissa
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Punjab">
																		<ul class="cityname">
																			<li><a href="">Chandigarh</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Rajasthan">
																		<ul class="cityname">
																			<li><a href="">Jaipur</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="TamilNadu">
																		<ul class="cityname">
																			<li><a href="">Chennai</a></li>
																			<li><a href="">Coimbatore</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Telangana">
																		<ul class="cityname">
																			<li><a href="">Hyderabad</a></li>
																			<li><a href="">Secunderabad</a></li>
																		</ul>        
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Tripura">
																		Tripura
																	</div>

																	<div role="tabpanel" class="tab-pane" id="UttarPradesh">
																		<ul class="cityname">
																			<li><a href="">Agra</a></li>
																			<li><a href="">Allahabad</a></li>
																			<li><a href="">Kanpur</a></li>
																			<li><a href="">Lucknow</a></li>
																			<li><a href="">Meerut</a></li>
																			<li><a href="">Varanasi</a></li>
																		</ul>
																	</div>

																	<div role="tabpanel" class="tab-pane" id="Uttarakhand">
																		Uttarakhand
																	</div>

																	<div role="tabpanel" class="tab-pane" id="WestBengal">
																		<ul class="cityname">
																			<li><a href="">Kolkata</a></li>
																		</ul>
																	</div>

																</div>
															</div>
														</div>    
													</div>
												</div>
											</div>
											<!-- modal footer -->
											<div class="modal-footer" style="background-color:#F0F0F0; color:black;">
												<div class="container-fluid">
													<div class="row">
														<div class="col-md-7">
															Discover the best deals options in your city.  
														</div>
														<div class="col-md-5">
															<button type="button" class="btn btn-default" data-dismiss="modal">
																<b>SKIP</b>
															</button>
														</div>
													</div>
												</div>
											</div> 
										</div>
									</div>
								</div>
								<!-- end modal of change location exampleModal3 -->

								<li class="helpbar-border">
									<a href="sell.php">Sell</a>
								</li>
								<li class="helpbar-border">
									<a href="contact.php">
										<span class="glyphicon glyphicon-earphone"></span>
										24x7 Customer Care
									</a>
								</li>
								<li class="helpbar-border">
									<!-- use data-remote instead of href  -->
									<a href="" data-toggle="modal" data-target="#exampleModal1">Signup</a>
									<!-- start modal signup -->
									<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
									   <div class="modal-dialog" style="padding-top:130px;">
										  <div class="modal-content">
											 <div class="modal-body">
												 <button type="button" class="close" data-dismiss="modal" aria-label="close">
												   <span aria-hidden="true">&times;</span> 
												 </button>
												 <div class="clearfix"></div>
												 <div id="social-icons-conatainer">
													<div class="modal-body-left">
														<div class="tabbable">
															<ul class="nav nav-tabs" id="menu3">
																<li class="active"><a href="#tab1" data-toggle="tab">Signup</a></li>
																<li><a href="#tab2" data-toggle="tab">Login</a></li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="tab1">
																	<form>
																		<div class="form-group">
																			<label for="email" class="control-label">Email Address</label>
																			<input type="email" class="form-control" id="email-id" />

																		</div> 
																		<div class="form-group">
																			<label for="password" class="control-label">Password</label>
																			<input type="password" class="form-control" id="pwd" />

																		</div>
																		<div class="form-group">
																			<label for="repeat" class="control-label">Repeat</label>
																			<input type="password" class="form-control" id="repeat-pwd" />

																		</div> 
																		<button type="submit" class="btn btn-success">SIGN UP NOW!</button> 
																	</form> 
																</div>

																<div class="tab-pane" id="tab2">
																	<form>
																		<div class="form-group">
																			<label for="email" class="control-label">Email</label>
																			<input type="email" class="form-control" id="email-id" />

																		 </div>
																		 <div class="form-group">
																			<label for="password" class="control-label">Password</label>
																			<input type="password" class="form-control" id="pwd" />

																		 </div>
																		 <button type="submit" class="btn btn-primary">LOGIN</button>
																		 <a href=""> Forgot password?</a> 
																  </form> 
															   </div> 
															</div>  
														</div>   
													</div>

													<div class="modal-body-right">                                            
														<div class="modal-social-icons">
															<h4><strong>Sign in with</strong></h4>
															<a href="" class="btn btn-default facebook"> 
																<i class="fa fa-facebook modal-icons"></i> 
																Facebook 
															</a>
															<a href="" class="btn btn-default twitter"> 
																<i class="fa fa-twitter modal-icons"></i> 
																Twitter 
															</a>
															<a href="" class="btn btn-default google"> 
																<i class="fa fa-google-plus modal-icons"></i> 
																Google 
															</a>
															<a href="" class="btn btn-default linkedin"> 
																<i class="fa fa-linkedin modal-icons"></i> 
																Linkedin 
															</a>
														</div> 
													</div>

													<div id="center-line"> OR </div> 
												 </div>                                     
											 </div>        
											<div class="clearfix"></div>                  
											 <div class="modal-footer">
												 <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
											 </div> 
										  </div> 
									   </div> 
									</div>
									<!-- end modal signup -->
								</li>
								<li class="helpbar-border">
									<a href="" data-toggle="modal" data-target="#exampleModal2">Login</a>
									<!-- start modal login -->
									<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
									   <div class="modal-dialog" style="padding-top:130px;">
										  <div class="modal-content">
											 <div class="modal-body">
												 <button type="button" class="close" data-dismiss="modal" aria-label="close">
												   <span aria-hidden="true">&times;</span> 
												 </button>
												 <div class="clearfix"></div>
												 <div id="social-icons-conatainer">
													<div class="modal-body-left">
														<div class="tabbable">
															<ul class="nav nav-tabs" id="menu3">
																<li><a href="#tab3" data-toggle="tab">Signup</a></li>
																<li class="active"><a href="#tab4" data-toggle="tab">Login</a></li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane" id="tab3">
																	<form>
																		<div class="form-group">
																			<label for="email" class="control-label">Email Address</label>
																			<input type="email" class="form-control" id="email-id" />

																		</div> 
																		<div class="form-group">
																			<label for="password" class="control-label">Password</label>
																			<input type="password" class="form-control" id="pwd" />

																		</div>
																		<div class="form-group">
																			<label for="repeat" class="control-label">Repeat</label>
																			<input type="password" class="form-control" id="repeat-pwd" />

																		</div> 
																		<button type="submit" class="btn btn-success">SIGN UP NOW!</button> 
																	</form> 
																</div>

																<div class="tab-pane active" id="tab4">
																	<form>
																		<div class="form-group">
																			<label for="email" class="control-label">Email</label>
																			<input type="email" class="form-control" id="email-id" />

																		 </div>
																		 <div class="form-group">
																			<label for="password" class="control-label">Password</label>
																			<input type="password" class="form-control" id="pwd" />

																		 </div>
																		 <button type="submit" class="btn btn-primary">LOGIN</button>
																		 <a href=""> Forgot password?</a> 
																  </form> 
															   </div> 
															</div>  
														</div>   
													</div>

													<div class="modal-body-right">                                            
														<div class="modal-social-icons">
															<h4><strong>Sign in with</strong></h4>
															<a href="" class="btn btn-default facebook"> 
																<i class="fa fa-facebook modal-icons"></i> 
																Facebook 
															</a>
															<a href="" class="btn btn-default twitter"> 
																<i class="fa fa-twitter modal-icons"></i> 
																Twitter 
															</a>
															<a href="" class="btn btn-default google"> 
																<i class="fa fa-google-plus modal-icons"></i> 
																Google 
															</a>
															<a href="" class="btn btn-default linkedin"> 
																<i class="fa fa-linkedin modal-icons"></i> 
																Linkedin 
															</a>
														</div> 
													</div>

													<div id="center-line"> OR </div> 
												 </div>                                     
											 </div>        
											<div class="clearfix"></div>                  
											 <div class="modal-footer">
												 <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
											 </div> 
										  </div> 
									   </div> 
									</div> 
									<!-- end modal login -->

								</li>
							</ul>
                    	</div>
					</div>
					<!-- helping bar row end -->
					
					<!-- search bar row start -->
					<div class="row">
						<div class="col-md-11">
							<form role="form" id="mysearch" onsubmit="return searchFunction();" method="post">
								<div class="input-group form-group" id="search-box" style="width:651px;">
									<input id="mainsearch" type="search"  name="search" class="form-control" placeholder="Search discounts for a Vehicle service, Internet plans and Cakes" list="datalist1" />
									<span class="input-group-btn">
										<button type="submit" class="btn btn-warning">SEARCH</button> 
									</span>
								</div>
							  	<datalist id="datalist1">
									 <option value="Airtel"></option>
									 <option value="BSNL"></option>
									 <option value="Hathway"></option>
									 <option value="Tata Docomo"></option>
									 <option value="Tikona"></option>
									 <option value="You Broadband"></option>

									 <option value="Unlimited"></option>
									 <option value="DayNight"></option>
									 <option value="GB-Plan"></option>

									 <option value="Airtel Unlimited"></option>
									 <option value="BSNL Unlimited"></option>
									 <option value="Hathway Unlimited"></option>
									 <option value="Tata Docomo Unlimited"></option>
									 <option value="Tikona Unlimited"></option>
									 <option value="Broadband Unlimited"></option>

									 <option value="Airtel DayNight"></option>
									 <option value="BSNL DayNight"></option>
									 <option value="Hathway DayNight"></option>
									 <option value="Tata Docomo DayNight"></option>
									 <option value="Tikona DayNight"></option>
									 <option value="You Broadband DayNight"></option>

									 <option value="Airtel GB-Plan"></option>
									 <option value="BSNL GB-Plan"></option>
									 <option value="Hathway GB-Plan"></option>
									 <option value="Tata Docomo GB-Plan"></option>
									 <option value="Tikona GB-Plan"></option>
									 <option value="You Broadband GB-Plan"></option>

									 <option value="Airtel 1-month"></option>
									 <option value="BSNL 1-month"></option>
									 <option value="Hathway 1-month"></option>
									 <option value="Tata Docomo 1-month"></option>
									 <option value="Tikona 1-month"></option>
									 <option value="You Broadband 1-month"></option>

									 <option value="Airtel 3-month"></option>
									 <option value="BSNL 3-month"></option>
									 <option value="Hathway 3-month"></option>
									 <option value="Tata Docomo 3-month"></option>
									 <option value="Tikona 3-month"></option>
									 <option value="You Broadband 3-month"></option>

									 <option value="Airtel 6-month"></option>
									 <option value="BSNL 6-month"></option>
									 <option value="Hathway 6-month"></option>
									 <option value="Tata Docomo 6-month"></option>
									 <option value="Tikona 6-month"></option>
									 <option value="You Broadband 6-month"></option>

									  <option value="Airtel 12-month"></option>
									 <option value="BSNL 12-month"></option>
									 <option value="Hathway 12-month"></option>
									 <option value="Tata Docomo 12-month"></option>
									 <option value="Tikona 12-month"></option>
									 <option value="You Broadband 12-month"></option>

									 <option value="Airtel 24-month"></option>
									 <option value="BSNL 24-month"></option>
									 <option value="Hathway 24-month"></option>
									 <option value="Tata Docomo 24-month"></option>
									 <option value="Tikona 24-month"></option>
									 <option value="You Broadband 24-month"></option>

									 <option value="Airtel 2 Mbps"></option>
									 <option value="BSNL 2 Mbps"></option>
									 <option value="Hathway 2 Mbps"></option>
									 <option value="Tata Docomo 2 Mbps"></option>
									 <option value="Tikona 2 Mbps"></option>
									 <option value="You Broadband 2 Mbps"></option>

									 <option value="Airtel 4 Mbps"></option>
									 <option value="BSNL 4 Mbps"></option>
									 <option value="Hathway 4 Mbps"></option>
									 <option value="Tata Docomo 4 Mbps"></option>
									 <option value="Tikona 4 Mbps"></option>
									 <option value="You Broadband 4 Mbps"></option>
								</datalist>      
							</form>
                    	</div>
					</div>
					<!-- search bar row end -->
				</div>	
        	</div>
  		</div>
   	</div>
	<!-- logo, helping bar and search bar end -->

        <!----------------------- menubar start -------------------------->
        <div class="header-menubar"> <!-- menubar color -->
            <nav class="navbar navbar-inverse" role="navigation"> <!-- inverse navbar -->
                <div class="container">
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <!-- menubar items list -->
                        <ul class="nav navbar-nav" style="padding: 0px 0px 0px 215px;">
                            <!-- menubar item 1 "automobile service" -->
                            <li class="dropdown mega-dropdown" style="border-right: 1px solid #181818;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    AUTOMOBILE SERVICE
                                    <span class="caret"></span>
                                </a>
                                <!-- submenu of automobile service -->
                                <div class="dropdown-menu mega-dropdown-menu">    
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs menutab" role="tablist">
                                        <li class="active">
                                            <a href="#twowheeler" role="tab" data-toggle="tab">Two Wheeler</a>
                                        </li>
                                        <li>
                                            <a href="#fourwheeler" role="tab" data-toggle="tab">Four Wheeler</a>
                                        </li>
                                    </ul>        
                                    <!-- Tab panels -->
                                    <div class="tab-content">
                                        <!-- Categories tab content -->
                                        <div class="tab-pane active" id="twowheeler">
                                            <ul class="nav-list list-inline">
                                                <li style="background-color:#F8F8F8; float:left;">
                                                    <a href="#">
                                                        <span>Latops <span class="glyphicon glyphicon-triangle-right"></span>
                                                        </span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Dell</a><br />
                                                        <a href="#" style="color:#303030;">HP</a><br />
                                                        <a href="#" style="color:#303030;">Lenovo</a><br />
                                                        <a href="#" style="color:#303030;">Sony</a><br />
                                                        <a href="#" style="color:#303030;">Alienware</a><br />
                                                        <a href="#" style="color:#303030;">Toshiba</a><br />
                                                        <a href="#" style="color:#303030;">Compaq</a><br />
                                                        <a href="#">View All Brands</a><br />
                                                    </div>
                                                    <a href="#">
                                                        <span>Mobiles <span class="glyphicon glyphicon-triangle-right"></span>
                                                        </span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Micromax</a><br />
                                                        <a href="#" style="color:#303030;">Samsung</a><br />
                                                        <a href="#" style="color:#303030;">HTC</a><br />
                                                        <a href="#" style="color:#303030;">Sony</a><br />
                                                        <a href="#" style="color:#303030;">Microsoft</a><br />
                                                        <a href="#" style="color:#303030;">Xiaomi</a><br />
                                                        <a href="#" style="color:#303030;">LG</a><br />
                                                        <a href="#">View All Brands</a><br />
                                                    </div>
                                                </li>    
                                                <li>
                                                    <a href="#">
                                                        <span>Tablets <span class="glyphicon glyphicon-triangle-right">                                                          </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Lenovo</a><br />
                                                        <a href="#" style="color:#303030;">Asus</a><br />
                                                        <a href="#" style="color:#303030;">LG</a><br />
                                                        <a href="#">View All Brands</a><br />
                                                    </div>

                                                    <a href="#">
                                                        <span>Computer Accessories <span class="glyphicon glyphicon-triangle-right">                                                          </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">External Hard Disk</a><br />
                                                        <a href="#" style="color:#303030;">Pendrive</a><br />
                                                        <a href="#" style="color:#303030;">Printers</a><br />
                                                        <a href="#" style="color:#303030;">Mouse-Keyboard</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                    <a href="#">
                                                        <span>Cameras <span class="glyphicon glyphicon-triangle-right">                                                                 </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Canon</a><br />
                                                        <a href="#" style="color:#303030;">Nikon</a><br />
                                                        <a href="#" style="color:#303030;">Sony</a><br />
                                                        <a href="#" style="color:#303030;">Panasonic</a><br />
                                                        <a href="#" style="color:#303030;">Samsung</a><br />
                                                        <a href="#">View All Brands</a><br />
                                                    </div>
                                                </li>

                                                <li style="background-color:#F8F8F8;">
                                                    <a href="#">
                                                        <span>Large Appliances <span class="glyphicon glyphicon-triangle-right">                                                          </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Refrigerators</a><br />
                                                        <a href="#" style="color:#303030;">Washing Machines</a><br />
                                                        <a href="#" style="color:#303030;">Television</a><br />
                                                        <a href="#" style="color:#303030;">Air Conditioners</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                    <a href="#">
                                                        <span>Small Appliances <span class="glyphicon glyphicon-triangle-right">                                                       </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Irons</a><br />
                                                        <a href="#" style="color:#303030;">Vaccum Cleaners</a><br />
                                                        <a href="#" style="color:#303030;">Water Purifiers</a><br />
                                                        <a href="#" style="color:#303030;">Fans</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                    <a href="#">
                                                        <span>Kitchen Appliances <span class="glyphicon glyphicon-triangle-right">                                                       </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Microwave Ovens</a><br />
                                                        <a href="#" style="color:#303030;">Mixer/Juicer/Grinders</a><br />
                                                        <a href="#" style="color:#303030;">Electric Kettles</a><br />
                                                        <a href="#" style="color:#303030;">Induction Cooktops</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Personal Care Appliances <span class="glyphicon glyphicon-triangle-right">                                                       </span></span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Trimmers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Dryers</a><br />
                                                        <a href="#" style="color:#303030;">Shavers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Curlers</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- four wheeler tab content -->
                                        <div class="tab-pane" id="fourwheeler">
                                            <ul class="nav-list list-inline">
                                                <li style="background-color:#F8F8F8;">
                                                    <a href="#">
                                                        <span>Bike <span class="glyphicon glyphicon-triangle-right"></span>
                                                        </span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Trimmers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Dryers</a><br />
                                                        <a href="#" style="color:#303030;">Shavers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Curlers</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Scooty</span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Trimmers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Dryers</a><br />
                                                        <a href="#" style="color:#303030;">Shavers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Curlers</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                </li>
                                                <li style="background-color:#F8F8F8;">
                                                    <a href="#">
                                                        <span>Bicycle</span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Trimmers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Dryers</a><br />
                                                        <a href="#" style="color:#303030;">Shavers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Curlers</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Four Wheeler</span>
                                                    </a>
                                                    <div class="sublist">
                                                        <a href="#" style="color:#303030;">Trimmers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Dryers</a><br />
                                                        <a href="#" style="color:#303030;">Shavers</a><br />
                                                        <a href="#" style="color:#303030;">Hair Curlers</a><br />
                                                        <a href="#">View All</a><br />
                                                    </div>
                                                </li>                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>				
                            </li>

                            <!-- menubar item 2 "sweets and cakes" -->
                            <li class="dropdown mega-dropdown" style="border-right: 1px solid #181818;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    INTERNET PLANS
                                    <span class="caret"></span>
                                </a>		
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <ul style="list-style-type:none;">
												<li>
													<span class="glyphicon glyphicon-circle-arrow-right"> </span> 
													<a href=<?php echo 'internet_plan.php?brand=airtel_plan&bb=B' ?>>
														<span style="padding-left:5px;"><b> Airtel</b></span>
													</a>
												</li><br />
												<li>
													<span class="glyphicon glyphicon-circle-arrow-right"> </span> 
													<a href=<?php echo 'internet_plan.php?brand=bsnl_plan&bb=B' ?>>
														<span style="padding-left:5px;"><b> BSNL</b></span>
													</a>
												</li><br />
												<li>
													<span class="glyphicon glyphicon-circle-arrow-right"> </span> 
													<a href=<?php echo 'internet_plan.php?brand=hathway_plan&bb=B' ?>>
														<span style="padding-left:5px;"><b> Hathway</b></span>
													</a>
												</li><br />
												<li>
													<span class="glyphicon glyphicon-circle-arrow-right"> </span> 
													<a href=<?php echo 'internet_plan.php?brand=docomo_plan&bb=B' ?>>
														<span style="padding-left:5px;"><b> Tata Docomo</b></span>
													</a>
												</li><br />
												<li>
													<span class="glyphicon glyphicon-circle-arrow-right"> </span> 
													<a href=<?php echo 'internet_plan.php?brand=tikona_plan&bb=B' ?>>
														<span style="padding-left:5px;"><b> Tikona</b></span>
													</a>
												</li><br />
												<li>
													<span class="glyphicon glyphicon-circle-arrow-right"> </span> 
													<a href=<?php echo 'internet_plan.php?brand=you_broadband_plan&bb=B' ?>>
														<span style="padding-left:5px;"><b> You Broadband</b></span>
													</a>
												</li><br />
                                            </ul>
                                            <a href="internet_plan.php?bb=B">
												<span><b>View All Broadband Internet Plans</b></span>
                                            </a><br />
                                        </div>
                                        <div class="col-md-7">
                                            <center width="410">
                                                <font size="3" color="#DC143C"><b>Get Discounts on Internet plans</b></font>
                                            </center>
                                            <img src="image/internet/internet-connection.jpg" class="img-thumbnail" width="410" alt="Internet Broadband Connection Plans" />    
                                            
                                        </div>
                                    </div>
                                </div>				
                            </li>

                            <!-- menubar item3 internet plans -->
                            <li class="dropdown mega-dropdown">
                                <a href="cake_seller.php">
                                    SWEETS &amp; CAKES
                                </a>						
                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>    
        </div>
        <!-- menubar end-->
