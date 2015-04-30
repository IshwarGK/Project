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
                <div class="col-md-11 col-md-offset-1">
                    <h3><strong>Pune Cake Shops</strong></h3>
                    <hr />
                </div>    
            </div>  

            <div class="row">
                <!-- Left Panel start -->
                <div class="col-md-2 col-md-offset-1" style="border-right:1px solid #F0F0F0;">
                    
                    <!-- location start -->
                    <div class="row">
                        <div class="col-md-12">
                            <p><strong>Location</strong></p>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:5px 0px 5px 14px;">
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" href="#">
                                    Type to filter <span class="glyphicon glyphicon-menu-down" style="padding-left:105px;"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" href="#">Shivajinagar</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Kothrud</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- location end -->
                    
                    <!-- sort by start -->
                    <div class="row" style="padding-top:40px;">
                        <div class="col-md-12">
                            <p><strong>Sort by</strong></p>
                        </div>
                    </div>    
                    <div class="row sort">
                        <div class="col-md-12" style="padding:5px 0px 5px 14px;">
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" href="#">
                                    Popularity <span class="glyphicon glyphicon-menu-down" style="padding-left:120px;"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" href="#">Popularity - High to Low</a></li>
                                    <li role="presentation"><a role="menuitem" href="#">Rating - High to Low</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- sort by end -->
                    
                    <!-- order start -->
                    <div class="row" style="padding-top:40px;">
                        <div class="col-md-12">
                            <p><strong>Shop Type</strong></p>
                        </div>
                    </div>    
                    <div class="row sort">
                        <div class="col-md-12" style="padding:5px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Online</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Onstore</label>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- order end -->
                    
                </div>
                <!-- Left Panel end -->
                <div class="col-md-9">
                    <div class="row" style="padding-bottom:5px;">
                        <div class="col-md-2" style="border-right:1px solid black;">
                            <img src="image/online-store.png" class="img-circle" alt="online-store" style="width:30px; height:30px;" />
                            Online Shop
                        </div>
                        <div class="col-md-2">
                            <img src="image/offline-store.png" class="img-circle" alt="offline-store" style="width:30px; height:30px;" />
                            Onstore Shop
                        </div>
                    </div>
                    
                    <div style="border-bottom:1px solid #F0F0F0; padding-bottom:10px;">
                        <div class="row">
                            <div class="col-md-8">
                                <a href="monginies.php" style="color:#E00000;">
                                    <h4><strong>The Monginies Cake Shop</strong></h4>
                                </a>
                                Kothrud<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Flat No. 88/04, Ravinagar Society, Pune - 411038....</font>
                                <br />
                                Types<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Angel, Apple, Babka, Choclate, Banana ...</font>
                                <div style="padding-top:20px;">
                                    <img src="image/offline-store.png" class="img-circle" alt="offline-store" style="width:30px; height:30px;" />
                                </div>
                                <div style="padding-top:10px;">
                                    <button class="btn btn-primary btn-sm">Menu</button>
                                    <button class="btn btn-primary btn-sm">20 Reviews</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="rating">4.3</span>
                                    </div>    
                                </div>
                                <div class="row" style="padding-top:60px;">
                                    <div class="col-md-12">
                                        <strong>Discounts</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td>250 g </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                            <tr>
                                                <td>1/2 kg </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                            <tr>
                                                <td>1 kg </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                        </table>
                                        <div style="padding-top:3px;">
                                            <button class="btn btn-primary btn-xs">View More</button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="border-bottom:1px solid #F0F0F0; padding:15px 0px 10px 0px;">
                        <div class="row">
                            <div class="col-md-8">
                                <a href="monginies.php" style="color:#E00000;">
                                    <h4><strong>The Monginies Cake Shop</strong></h4>
                                </a>
                                Kothrud<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Flat No. 88/04, Ravinagar Society, Pune - 411038....</font>
                                <br />
                                Types<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Angel, Apple, Babka, Choclate, Banana ...</font>
                                <div style="padding-top:20px;">
                                    <img src="image/offline-store.png" class="img-circle" alt="offline-store" style="width:30px; height:30px;" />
                                </div>
                                <div style="padding-top:10px;">
                                    <button class="btn btn-primary btn-sm">Menu</button>
                                    <button class="btn btn-primary btn-sm">20 Reviews</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="rating">4.3</span>
                                    </div>    
                                </div>
                                <div class="row" style="padding-top:60px;">
                                    <div class="col-md-12">
                                        <strong>Discounts</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td>250 g </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                            <tr>
                                                <td>1/2 kg </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                            <tr>
                                                <td>1 kg </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                        </table>
                                        <div style="padding-top:3px;">
                                            <button class="btn btn-primary btn-xs">View More</button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="border-bottom:1px solid #F0F0F0; padding:15px 0px 10px 0px;">
                        <div class="row">
                            <div class="col-md-8">
                                <a href="monginis-online.php" style="color:#E00000;">
                                    <h4><strong>The Monginies Cake Shop</strong></h4>
                                </a>
                                Online<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">http://www.monginis.net/</font>
                                <br />
                                Types<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Angel, Apple, Babka, Choclate, Banana ...</font>
                                <div style="padding-top:20px;">
                                    <img src="image/online-store.png" class="img-circle" alt="offline-store" style="width:30px; height:30px;" />
                                </div>
                                <div style="padding-top:10px;">
                                    <button class="btn btn-primary btn-sm">Menu</button>
                                    <button class="btn btn-primary btn-sm">20 Reviews</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="rating">4.3</span>
                                    </div>    
                                </div>
                                <div class="row" style="padding-top:60px;">
                                    <div class="col-md-12">
                                        <strong>Discounts</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td>250 g </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                            <tr>
                                                <td>1/2 kg </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                            <tr>
                                                <td>1 kg </td>
                                                <td style="padding-left:10px;">15% OFF</td>
                                            </tr>
                                        </table>
                                        <div style="padding-top:3px;">
                                            <button class="btn btn-primary btn-xs">View More</button>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
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