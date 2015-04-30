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
	<script src="http://maps.googleapis.com/maps/api/js"></script> <!-- google map -->
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
        
        //google map start
        var myCenter=new google.maps.LatLng(18.504621, 73.811045);
        function initialize() {
            var mapProp = {
                center:myCenter,
                zoom:17,
                panControl:true,
                mapTypeControl:true,
                scaleControl:true,
                streetViewControl:true,
                overviewMapControl:true,
                rotateControl:true,
                mapTypeId:google.maps.MapTypeId.HYBRID
            };
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
            
            //map marker bounce
            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });
            marker.setMap(map); 
            
            //info window
            var infowindow = new google.maps.InfoWindow({
                content:"Diskart.com"
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        //google map end    
        
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
    
    <!-- start customer information -->
    <div style="width:1349px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-md-offset-3">
                    <h3><strong>Customer Care</strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <h4><strong>Call us:</strong></h4>
                    <p>We're available 24 hours a day.</p>
                    <p><strong>+917028257052</strong></p>
                    <p><strong>+918087245254</strong></p>
                </div>
                <div class="col-md-5">
                    <h4><strong>Mail us:</strong></h4>
                    <p>Diskart Internet Private Limited</p>
                    <p>88/04, Plot No.52, Flat No. 07,</p>
                    <p>Matoshri Building, Gujarat Colony,</p>
                    <p>Kothrud, Pune - 411038</p>
                    <p>Maharashtra, India</p>
                    <p><strong>contact@diskart.com</strong></p>
                    <p><strong>rimishbansod@diskart.com</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-3">
                    <div id="googleMap" style="width:690px;height:230px;">
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- end customer information -->
	
	<!-- back to top button start -->
	<a href="#" class="image-switch"></a>
	<!-- back to top button end -->
    
    <!-- start footer -->
    <div id="footer" style="width:1349px;"></div>    
    <!-- end footer -->
    
</body>    
</html>