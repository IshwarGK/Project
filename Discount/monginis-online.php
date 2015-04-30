<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <script src="jquery/jquery-2.1.3.min.js"></script>
	<script src="jquery/jquery.scrollUp.min.js"></script> <!-- back to top button js -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js">         </script> <!-- bootstrap form validation -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
	<!-- bootstrap form validation -->
	<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- bootstrap for all -->
	<script src="js/socialbars.js" type="text/javascript"></script> <!-- social bar left -->
	<script src="js/back-to-top.js" type="text/javascript"></script> <!-- back to top js -->
	<link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- bootstrap for all -->
	<link id="scrollUpTheme" rel="stylesheet" href="css/back-to-top-tab.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/back-to-top-labs.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- signup and login social icons -->
    <link rel="stylesheet" type="text/css" href="css/style.css" /> <!-- all css file -->
    <link rel="stylesheet" type="text/css" href="css/social.css" /> <!-- social icons bar left -->
	<link rel="stylesheet" type="text/css" href="css/feedback.css" /> <!-- feedback form -->
	<link rel="stylesheet" href="css/cake-style.css" /> <!-- cake page css -->
	<script> 
        
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#header").load("header.php");
            $("#footer").load("footer.php");
        });
        //topbar, searchbar and menubar end
		
		//feedback form load start
		$(document).ready(function(){
            $("#feedback").load("feedback_form.php");
        });
		//feedback form load end
        
    </script>
</head>
<body>
	
    <!-- social buttons start -->
    <div id="socialside"></div>
	<!-- social buttons end -->
	
	<!-- feedback form start -->
	<div id="feedback"></div>
	<!-- feedback form end -->

    <!-- topbar, searchbar and menubar start  -->
    <div id="header" style="width:1349px; height:150px;"></div>
    <!-- topbar, searchbar and menubar end  -->
    
    <!-- list of cakes start -->
    <div style="width:1349px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <img src="image/Cakeshop-logo/monginis-logo.png" alt="monginis-logo" style="width:150px; height:100px;" />
                    <hr />
                </div>    
            </div>  
            
            <div class="row" style="padding-bottom:5px;">
                <div class="col-md-2 col-md-offset-2">
                    <img src="image/Cakeshop-logo/eggless.jpg" alt="online-store" style="width:21px; height:19px;" />
                    Eggless (Pure Veg.)  
                </div>
                <div class="col-md-2">
                    <img src="image/Cakeshop-logo/egg.jpg" alt="offline-store" style="width:21px; height:19px;" />
                    With Egg  
                </div>
                <div class="col-md-2">
                    <img src="image/Cakeshop-logo/egg-eggless.png" alt="offline-store" style="width:38px; height:17px;" />
                    Available in Both
                </div>
            </div>
            
            <div class="row">
                <!-- Left Panel start -->
                <div class="col-md-2 col-md-offset-1" style="border-right:1px solid #F0F0F0;">
                    
                    <!-- Delivery mode start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Delivery Mode</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Next Day</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Normal Day (48Hrs)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Free Delivery</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Delivery mode end -->
                    
                    <!-- cakes start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Cakes</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Popular Cakes (2)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Premium Cakes (34)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Wedding Cakes (0)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Chocolate Cakes (2)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Customized Photo Cakes (0)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />3D Cakes (0)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Kids Cakes (0)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Cake Combo (2)</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Photo Cakes (0)</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- cakes end -->
                    
                    <!-- Price Range start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Price Range</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />0 - 400 Rs.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />400 - 800 Rs.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />800 - 1200 Rs.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Above 1200 Rs.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Price Range end -->
                    
                    <!-- Category start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Category</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Eggless</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />With Egg</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Both</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Category end -->
                    
                    <!-- Weight start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Weight</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Above 1 Kg</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1 Kg</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />0.5 Kg</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Weight end -->
                    
                    <!-- Flavors start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Flavor</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Vanila</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Black Forest</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Butter Scotch</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Fruit</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Chocolate</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Pineapple</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Flavors end -->
                    
                    <!-- Shape start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Shape</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Rectangle</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Heart</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Round</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Square</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Others</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Weight end -->
                                        
                </div>
                <!-- Left Panel end -->
                <div class="col-md-9">
                    <div class="row">
                        
                        <!-- start sweet basket of love -->
                        <div class="col-md-3">
                            <div class="cake-block">
                                <center>
                                    <div class="veg_non_veg"></div>
                                    <a href="">
                                        <img src="image/Cakeshop-logo/monginis/Sweet-Basket-of-Love.jpg" class="cakepic" alt="Sweet basket of love" title="Sweet Basket of Love - Eggless and Regular" width="175" height="125" />
                                    </a>
                                    <h5>
                                        <b><a href="" style="color:#CE047C;">Sweet Basket of Love</a></b>
                                    </h5>
                                    <p>
                                        <strong><del>&#8377 2000</del> 15% OFF</strong><br />
                                        <strong> &#8377 1600 1Kg </strong>
                                    </p>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cake1">Get Coupon</button>
                                </center>
                            </div>    
                        </div>
                        <div class="modal fade" id="cake1" tabindex="-1" role="dialog" aria-labelledby="sweetbasket" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <center>
                                        <h4 class="modal-title" id="sweetbasket" style="color:#CE047C;"><b>Sweet Basket of Love Cake</b></h4>
                                        </center>    
                                    </div>
                                    <div class="modal-body">
                                        <center><h4>Get Coupon code via SMS</h4></center>
                                        <div class="container">
                                            <form role="form">
                                                <div class="form-group">
                                                    <div class="col-xs-5">
                                                        <input type="tel" class="form-control" id="mobilenumber" placeholder="Enter Mobile Number" required />
                                                    </div>
                                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> SMS</button>                                
                                                </div>
                                            </form>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end sweet basket of love -->
                        
                        <!-- start Caribbean cake -->
                        <div class="col-md-3">
                            <div class="cake-block">
                                <center>
                                    <div class="veg_non_veg"></div>
                                    <a href="">
                                        <img src="image/Cakeshop-logo/monginis/Carabian-cake.jpg" class="cakepic" alt="Caribbean Cake" title="Caribbean Cake - Eggless and Regular" width="175" height="125" />
                                    </a>
                                    <h5>
                                        <b><a href="" style="color:#CE047C;">Caribbean Cake</a></b>
                                    </h5>
                                    <p>
                                        <strong><del>&#8377 1450</del> 15% OFF</strong><br />
                                        <strong> &#8377 1200 1.5Kg </strong>
                                    </p>
                                    <button type="button" class="btn btn-success">Get Coupon</button>
                                </center>
                            </div>    
                        </div>
                        <!-- end Caribbean Cake -->
                        
                        <!-- start Chocolate cake -->
                        <div class="col-md-3">
                            <div class="cake-block">
                                <center>
                                    <div class="veg_non_veg"></div>
                                    <a href="">
                                        <img src="image/Cakeshop-logo/monginis/Dark-Chcocolate.jpg" class="cakepic" alt="Dark Heart Chocolate Cake" title="Dark Heart Chocolate Cake - Eggless and Regular" width="175" height="125" />
                                    </a>
                                    <h5>
                                        <b><a href="" style="color:#CE047C;">Dark Heart Chocolate Cake</a></b>
                                    </h5>
                                    <p>
                                        <strong><del>&#8377 1450</del> 15% OFF</strong><br />
                                        <strong> &#8377 1200 1.5Kg </strong>
                                    </p>
                                    <button type="button" class="btn btn-success">Get Coupon</button>
                                </center>
                            </div>    
                        </div>
                        <!-- end Chocolate Cake -->
                        
                        <!-- start jelly bean cake -->
                        <div class="col-md-3">
                            <div class="cake-block">
                                <center>
                                    <div class="veg_non_veg"></div>
                                    <a href="">
                                        <img src="image/Cakeshop-logo/monginis/Jelly-Bean-Cake.jpg" class="cakepic" alt="Jelly Bean Cake" title="Jelly Bean Cake - Eggless and Regular" width="175" height="125" />
                                    </a>
                                    <h5>
                                        <b><a href="" style="color:#CE047C;">Jelly Bean Cake</a></b>
                                    </h5>
                                    <p>
                                        <strong><del>&#8377 1450</del> 15% OFF</strong><br />
                                        <strong> &#8377 1200 1.5Kg </strong>
                                    </p>
                                    <button type="button" class="btn btn-success">Get Coupon</button>
                                </center>
                            </div>    
                        </div>
                        <!-- end Caribbean Cake -->
                    </div>
                         
                </div> <!-- Left panel end -->
            </div>
        </div>
    </div>    
    <!-- list of cakes end -->
	
	<!-- back to top button start -->
	<a href="#" class="image-switch"></a>
	<!-- back to top button end -->
    
    <!-- start footer -->
    <div id="footer" style="width:1349px;"></div>    
    <!-- end footer -->
    
</body>    
</html>