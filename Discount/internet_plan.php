<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
	<link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- bootstrap for all -->
	<link id="scrollUpTheme" rel="stylesheet" href="css/back-to-top-tab.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/back-to-top-labs.css"> <!-- back to top button -->
    <link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- signup and login social icons -->
    <link rel="stylesheet" type="text/css" href="css/style.css" /> <!-- all css file -->
    <link rel="stylesheet" type="text/css" href="css/social.css" /> <!-- social icons bar left -->
	<link rel="stylesheet" type="text/css" href="css/feedback.css" /> <!-- feedback form -->
	<link rel="stylesheet" href="css/coupon.css" /><!-- coupon button css -->
	<link rel="stylesheet" href="css/internet-style.css" /> <!-- internet style css -->
    <script src="jquery/jquery-2.1.3.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script><!-- cookie jquery -->
	<script src="jquery/jquery.scrollUp.min.js"></script> <!-- back to top button js -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js">         </script> <!-- bootstrap form validation -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
	<!-- bootstrap form validation -->
	<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- bootstrap for all -->
	<script src="js/socialbars.js" type="text/javascript"></script> <!-- social bar left -->
	<script src="js/back-to-top.js" type="text/javascript"></script> <!-- back to top js -->
	<script src="js/ZeroClipboard.js" ></script>
    <script> 
        
                
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#header").load("header.php");
            $("#footer").load("footer.php");
            horizontal_array();
           // $.removeCookie("checkboxValues");

        });
		
		//copy to clipboard start
		$(document).ready(function() {
			var clip = new ZeroClipboard($("#copy_button"), {
				moviePath: "js/ZeroClipboard.swf"
			}); 
		});
		//copy to clipboard end
        
        var horizontal_array = function() {
           
                var hori_brands = [];
                $.each($("input[name='brand']:checked"), function(){            
                hori_brands.push($(this).val());
                });
            ///airtel_plan bsnl_plan hathway_plan docomo_plan tikona_plan you_broadband_plan
                var text = "";
                var hori_brands_name = "haha";
                var i;
                var j = hori_brands.length;
                for (i = 0; i < j; i++) {
                    if(hori_brands[i] == "airtel_plan"){
                        hori_brands_name = "Airtel";
                    }
                    else if(hori_brands[i] == "docomo_plan"){
                        hori_brands_name = 'Tata Docomo';
                    }
                    else if(hori_brands[i] == "bsnl_plan"){
                        hori_brands_name = 'BSNL';
                    }
                    else if(hori_brands[i] == "hathway_plan"){
                        hori_brands_name = 'Hathway';
                    }
                    else if(hori_brands[i] == "tikona_plan"){
                        hori_brands_name = 'Tikona';
                    }
                    else if(hori_brands[i] == "you_broadband_plan"){
                        hori_brands_name = 'You Broadband';
                    }
                    
                    text += "<span style='margin-right:10px;'><a href='' class='shortcut' onclick='toggle_uncheckall_hori(this.id)' id="+hori_brands[i]+" >" + hori_brands_name  + " <small> &#9932</small></a></span>";
                }
                var hori_plan = [];
                $.each($("input[name='plan']:checked"), function(){            
                hori_plan.push($(this).val());
                });
            // unlimited daynight normal
                var i;
                var j = hori_plan.length;
                for (i = 0; i < j; i++) {
                    if(hori_plan[i] == "unlimited"){
                        hori_plan_name = "Unlimited";
                    }
                    if(hori_plan[i] == "daynight"){
                        hori_plan_name = "Day / Night";
                    }
                    if(hori_plan[i] == "normal"){
                        hori_plan_name = "GB Plan";
                    }
                    text += "<span style='margin-right:10px;'><a href='' class='shortcut' onclick='toggle_uncheckall_hori(this.id)' id="+hori_plan[i]+" >" + hori_plan_name  + " <small> &#9932</small></a></span>";
                }
                var hori_speed = [];
                $.each($("input[name='speed']:checked"), function(){            
                hori_speed.push($(this).val());
                });
                var i;
                var j = hori_speed.length;
                for (i = 0; i < j; i++) {
                    text += "<span style='margin-right:10px;'><a href='' class='shortcut' onclick='toggle_uncheckall_hori(this.id)' id="+hori_speed[i]+" >" + hori_speed[i]  + " <small> &#9932</small></a></span>";
                }
                var hori_price = [];
                $.each($("input[name='price']:checked"), function(){            
                hori_price.push($(this).val());
                });
                var p3;
                var j = hori_price.length;
                for (i = 0; i < j; i++) {
                     p3 = hori_price[i].split(" ");
                    text += "<span style='margin-right:10px;'><a href='' class='shortcut' onclick='toggle_uncheckall_hori(this.id)' id="+hori_price[i]+" >" + p3[0] + " - " + p3[1]  + " <small> &#9932</small></a></span>";
                }
                var hori_validity = [];
                $.each($("input[name='validity']:checked"), function(){            
                hori_validity.push($(this).val());
                });
                var i;
                var j = hori_validity.length;
                for (i = 0; i < j; i++) {
                    text += "<span style='margin-right:10px;'><a href='' class='shortcut' onclick='toggle_uncheckall_hori(this.id)' id="+hori_validity[i]+" >" + hori_validity[i]  + " <small> &#9932</small></a></span>";
                }
                document.getElementById("horizontal_menubar").innerHTML = text;
        }
        
        function toggle_uncheckall_hori(tp){
          
          checkboxes = document.getElementsByName('brand');
          for(var i=0, n=checkboxes.length;i<n;i++) {
              if(checkboxes[i].value == tp){
                checkboxes[i].checked = tp.unchecked;   
                }
          } 
          checkboxes = document.getElementsByName('plan');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            if(checkboxes[i].value == tp){
                checkboxes[i].checked = tp.unchecked;   
                }
          }
          checkboxes = document.getElementsByName('speed');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            if(checkboxes[i].value == tp){
                checkboxes[i].checked = tp.unchecked;   
                }
          }    
          checkboxes = document.getElementsByName('price');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            if(checkboxes[i].value == tp){
                checkboxes[i].checked = tp.unchecked;   
                }
          }       
          checkboxes = document.getElementsByName('validity');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            if(checkboxes[i].value == tp){
                checkboxes[i].checked = tp.unchecked;   
                }
          }    
            cookies_handling();
        }
        
        //topbar, searchbar and menubar end  
         
        // Start code for uncheck function 
                 
        function toggle_uncheck_brand(source){
          checkboxes = document.getElementsByName('brand');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
          
            $("#uncheck_1").hide();
            cookies_handling();
           
        }
        function toggle_uncheck_plan(source){
          checkboxes = document.getElementsByName('plan');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            
            $("#uncheck_2").hide();
            cookies_handling();
            
        }
       
        function toggle_uncheck_speed(source){
               checkboxes = document.getElementsByName('speed');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_3").hide();
            
            cookies_handling();
        }
        function toggle_uncheck_price(source){
               checkboxes = document.getElementsByName('price');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_4").hide();
            
            cookies_handling();
        }
        function toggle_uncheck_validity(source){
               checkboxes = document.getElementsByName('validity');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_5").hide();
            
            cookies_handling();

        }
         // End for check button code
		
		//feedback form load start
		$(document).ready(function(){
            $("#feedback").load("feedback_form.php");
        });
		//feedback form load end
            
    </script>
</head>
<body>
       <?php if($_GET['bb'] == 'B') { ?>
                <script>
                $.removeCookie("checkboxValues");
                
                </script>
                
            <?php $bb = 'C'; } ?>
    
	
	<!-- social buttons start -->
    <div id="socialside"></div>
	<!-- social buttons end -->
	
	<!-- feedback form start -->
	<div id="feedback"></div>
	<!-- feedback form end -->

    <!-- topbar, searchbar and menubar start  -->
    <div id="header" style="width:100%; height:150px;"></div>
    <!-- topbar, searchbar and menubar end  -->
    
	<!-- list of internet plans start -->
    <div style="width:100%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <ul id="shortcut-menu">
                        <li><a href="index.html" style="color:black;"><strong>Home</strong></a></li>
                        <li> <span class="glyphicon glyphicon-chevron-down"> </span> Internet Plans</li>
                    </ul>
                </div>
				<div class="col-md-9">
					<div id="horizontal_menubar">
    				</div>
				</div>
            </div>
            
            <div class="row">
                <!-- left panel start -->
                    
                <div class="col-md-2 col-md-offset-1" style="border-right:1px solid #F0F0F0;">
                    <!-- shop by brand start-->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Shop by Brands </strong> <?php if (isset($_GET["count1"]) ) { if($_GET["count1"] > 0) { ?> <a href="#" id="uncheck_1"  onclick="toggle_uncheck_brand(this)" style="color:black;text-decoration:none;float:right;" > Clear </a> <?php } } else{ ?>  <a href="#" id="uncheck_1"  onclick="toggle_uncheck_brand(this)" style="color:black;text-decoration:none;float:right;" > Clear </a>  <?php } ?>  </h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="airtel_plan" id="option4" <?php if(isset($_GET["brand"])){ if($_GET['brand'] == "airtel_plan"){echo 'checked';}} ?> />Airtel</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="bsnl_plan" id="option5" <?php if(isset($_GET["brand"])){ if($_GET['brand'] == "bsnl_plan"){echo 'checked';}} ?> />BSNL</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="hathway_plan" id="option6" <?php if(isset($_GET["brand"])){ if($_GET['brand'] == "hathway_plan"){echo 'checked';}} ?> />Hathway</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="docomo_plan" id="option7" <?php if(isset($_GET["brand"])){ if($_GET['brand'] == "docomo_plan"){echo 'checked';}} ?> />TaTa Docomo</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="tikona_plan" id="option8" <?php if(isset($_GET["brand"])){ if($_GET['brand'] == "tikona_plan"){echo 'checked';}} ?> />Tikona</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="you_broadband_plan" id="option9" <?php if(isset($_GET["brand"])){ if($_GET['brand'] == "you_broadband_plan"){echo 'checked';}} ?> />You Broadband</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- shop by brand end -->
                    
                                         <!-- Plan Type start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Plan</strong><?php if (isset($_GET["count2"]) ) { if($_GET["count2"] > 0) { ?> <a href="#" id="uncheck_2"  onclick="toggle_uncheck_plan(this)" style="color:black;text-decoration:none;float:right;" > Clear </a> <?php } } ?></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="plan" value="unlimited" id="option10" <?php if(isset($_GET["plan"])){ if($_GET['plan'] == "unlimited"){echo 'checked';}} ?> />Unlimited</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="plan" value="daynight" id="option11" <?php if(isset($_GET["plan"])){ if($_GET['plan'] == "daynight"){echo 'checked';}} ?> />Day / Night</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="plan" value="normal" id="option12" <?php if(isset($_GET["plan"])){ if($_GET['plan'] == "normal"){echo 'checked';}} ?> />GB Plan</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Plan Type end -->
                   
                      <!-- sort by speed end -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Speed</strong> <?php if (isset($_GET["count3"]) ) { if($_GET["count3"] > 0) { ?> <a href="#" id="uncheck_3"  onclick="toggle_uncheck_speed(this)" style="color:black;text-decoration:none;float:right;" > Clear </a> <?php } } ?></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px; height:150px; overflow-y:scroll;">
      <?php
                    $daynight_count2 = 0;
                    $daynight_count3 = 0;
                    if(isset($_GET["count4"])) {
                            $speed2 = $_GET["plan"];
                            
                            $keywords32 = preg_split("/[\s,]+/", $speed2);
                            $count32 = 0;
                            $arr32= new SplFixedArray(32);
                                foreach($keywords32 as $x32) {
                                    $daynight_count3 ++;
                                    if($x32 == "daynight"){
                                        $daynight_count2 = 5;
                                    }
                                    
                                 }
                            if($daynight_count3 < 3 and $daynight_count2 == 5){
                                
                            //disable condition is satisfied
                                ?>
                            <form role="form">
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="100 Mbps" id="option13" disabled />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"  name="speed" value="50 Mbps" id="option14" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "50 Mbps"){echo 'checked';}} ?>  disabled />50 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="20 Mbps" id="option15" disabled />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="18 Mbps" id="option16" disabled />18 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="20 Mbps" id="option17" disabled />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="12 Mbps" id="option18" disabled />12 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="10 Mbps" id="option19" disabled />10 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="6 Mbps" id="option20" disabled />6 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="5 Mbps" id="option21" disabled />5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="4 Mbps" id="option22" disabled />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="3 Mbps" id="option23" disabled />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="2 Mbps" id="option24" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "2 Mbps"){echo 'checked';}} ?> />2 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="1.5 Mbps" id="option25" disabled />1.5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="1 Mbps" id="option26" disabled />1 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="512 Kbps" id="option27" disabled />512 Kbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="320 Kbps" id="option28" disabled />320 Kbps</label>
                                </div>
                            </form>
                            
                            <?php
                            }
                            else {
                            // Disable condition is not satisfied
                            ?>
                            <form role="form">
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="100 Mbps" id="option13" />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"  name="speed" value="50 Mbps" id="option14" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "50 Mbps"){echo 'checked';}} ?> />50 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="20 Mbps" id="option15" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="18 Mbps" id="option16" />18 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="20 Mbps" id="option17" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="12 Mbps" id="option18" />12 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="10 Mbps" id="option19"/>10 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="6 Mbps" id="option20" />6 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="5 Mbps" id="option21" />5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="4 Mbps" id="option22" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "4 Mbps"){echo 'checked';}} ?> />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="3 Mbps" id="option23" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="2 Mbps" id="option24" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "2 Mbps"){echo 'checked';}} ?> />2 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="1.5 Mbps" id="option25" />1.5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="1 Mbps" id="option26" />1 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="512 Kbps" id="option27" />512 Kbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="320 Kbps" id="option28" />320 Kbps</label>
                                </div>
                            </form>
                            <?php
                            }
                    }
                     else{
                         // delete is not defined
                         ?>
                            <form role="form">
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="100 Mbps" id="option13"  />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"  name="speed" value="50 Mbps" id="option14" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "50 Mbps"){echo 'checked';}} ?> />50 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="20 Mbps" id="option15"  />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="18 Mbps" id="option16" />18 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="20 Mbps" id="option17" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="12 Mbps" id="option18" />12 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="10 Mbps" id="option19"/>10 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="6 Mbps" id="option20" />6 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="5 Mbps" id="option21" />5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="4 Mbps" id="option22" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "4 Mbps"){echo 'checked';}} ?> />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="3 Mbps" id="option23" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="2 Mbps" id="option24" <?php if(isset($_GET["speed"])){ if($_GET['speed'] == "2 Mbps"){echo 'checked';}} ?> />2 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="1.5 Mbps" id="option25" />1.5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="1 Mbps" id="option26" />1 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="512 Kbps" id="option27" />512 Kbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="320 Kbps" id="option28" />320 Kbps</label>
                                </div>
                            </form>
                     <?php
                            }
                    
           ?>
                    
                            
                        </div>
                    </div>
                    <!-- sort by speed end -->
    
                    
                   
                                       
                    <!-- price start -->
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Price </strong> <?php if (isset($_GET["count4"]) ) { if($_GET["count4"] > 0) { ?> <a href="#" id="uncheck_4"  onclick="toggle_uncheck_price(this)" style="color:black;text-decoration:none;float:right;" > Clear </a> <?php } } ?></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="price" value="5 501" id="option29" /> < 500 </label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="price" value="501 1001" id="option55" />501 - 1000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="price" value="1001 2001" id="option30" />1001 - 2000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="price" value="2001 3001" id="option31" />2001 - 3000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="price" value="3001 4001" id="option32" />3001 - 4000</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="price" value="4001 9001" id="option33" /> > 4000</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- price end -->
                    
                    <!-- validity start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Validity</strong><?php if (isset($_GET["count5"]) ) { if($_GET["count5"] > 0) { ?> <a href="#" id="uncheck_5"  onclick="toggle_uncheck_validity(this)" style="color:black;text-decoration:none;float:right;" > Clear </a> <?php } } ?></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="1 month" id="option34" <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "1 month"){echo 'checked';}} ?> />1 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="3 month" id="option35" <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "3 month"){echo 'checked';}} ?> />3 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="6 month" id="option36"  <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "6 month"){echo 'checked';}} ?> />6 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="12 month" id="option37" <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "12 month"){echo 'checked';}} ?> />12 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="24 month" id="option38" <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "24 month"){echo 'checked';}} ?> />24 month</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- validity end -->
                    
                </div>
                <!--left panel end -->
                
                 <script>   
        var countChecked = function() {
            var cookies_imp = 1;
  var favorite = [];
            
                $.each($("input[name='brand']:checked"), function(){            
                favorite.push($(this).val());
                });
           
            
 var plan = [];
            
                $.each($("input[name='plan']:checked"), function(){            
                plan.push($(this).val());
                });
           
var speed = [];
            
                 $.each($("input[name='speed']:checked"), function(){            
                speed.push($(this).val());
                });
           
                  
    var price = [];
            
                $.each($("input[name='price']:checked"), function(){            
                    price.push($(this).val());
                });
                
    var validity = [];
            
                $.each($("input[name='validity']:checked"), function(){            
                validity.push($(this).val());
                });
           
         
    var brand_len = $("input[name='brand']:checked").length;
    var plan_len = $("input[name='plan']:checked").length;
    var speed_len = $("input[name='speed']:checked").length;
    var price_len = $("input[name='price']:checked").length;
    var validity_len = $("input[name='validity']:checked").length;
             
             // $("#load").load('t2.php', {var1:'value1', var2:'value2'});            
            var url = "internet_plan.php?brand=" + favorite.join(", ") + "& plan=" + plan.join(", ") + "& speed=" + speed.join(", ") + "& price=" + price.join(", ") + "& validity=" + validity.join(", ") + "& count1=" + brand_len + "& count2=" + plan_len + "& count3=" + speed_len + "& count4=" + price_len + "& count5=" + validity_len + "& Plan_test_name=airtel_plan & bb=C" ;
                    window.location.href = url;
             
             var favorite2 = favorite.join(", ");
             var plan2 = plan.join(", ");
             var speed2 = speed.join(", ");
             var price2 = price.join(", ");
             var validity2 = validity.join(", ");
            
            
};

      //$(":checkbox").on("change", function(){
        $(":checkbox").click(function(){             
        var checkboxValues = {};
        $(":checkbox").each(function(){
          checkboxValues[this.id] = this.checked;
        });
        $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
        countChecked();

      });
         
    // this function is for creating cookies again                 
        function cookies_handling(){
            var checkboxValues = {};
        $(":checkbox").each(function(){
          checkboxValues[this.id] = this.checked;
        });
        $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
        
         
        countChecked();

        }             
     // End function is for creating cookies again                      
      function repopulateCheckboxes(){
        var checkboxValues = $.cookie('checkboxValues');
        if(checkboxValues){
          Object.keys(checkboxValues).forEach(function(element) {
            var checked = checkboxValues[element];
            $("#" + element).prop('checked', checked);
          });
        }
      }

      $.cookie.json = true;
      repopulateCheckboxes();
        
        
        
    </script>        
                
                <!-- right panel start -->
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
                               
                            function pwd($plan_name){
                                            include "db_connect.php";
                                                
                                            $sql2 = "SELECT * FROM coupon_validation_airtel WHERE plan_name in (select plan_name from city_plans where cityid = $cityid) and  plan_name = '$plan_name' and used = 0 limit 1";
                                        $result2 = $conn->query($sql2);
                                        $row2 = $result2->fetch_assoc();
                                        
                                        if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_airtel SET used= 1 WHERE plan_name in (select plan_name from city_plans where cityid = $cityid) and  coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                        }
                                    
                                        }?>
                        <script>
                        
                            //login submit start
                            function loginfunction(plan){
                                   
                                    var dataString = 'plan=' + plan;
                                    
                                    $.ajax({
                                    type: "POST",
                                    url: "pwd.php",
                                    data: dataString,
                                    cache: false,
                                    dataType: "json",
                                    success:function(data) {
                                        var coupon = document.getElementById("coupon");
                                        coupon.value = data.status;
					                   }
                                    });
                                
                            }
                            //login submit end
		
                            
                        </script>
                            
                        <?php    include "db_connect.php";
                            include 'internet_plan_backend.php';
                           // include "dp_internet_plan.php"
                           // $sql = "SELECT * FROM you_broadband_plan";
                            $result = $conn->query($sql);
                            $modalname = 1;    
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
								<span class="scissors">&#9986;</span>
                                <table style="margin:5px 1px 0px 10px;">
                                    <tr>
                                        <td>
                                            <b>Plan Name :</b> 
                                            <?php $plan_name = $row["Plan_Name"]; echo $plan_name; ?>
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
                                <button type="button" class="btn btn-info" data-toggle="modal"  data-target="#example" onclick="loginfunction('<?php echo $plan_name ?>')" >  Get Coupon</button>
                                
                            </div>
                            <!-- PHP code for getting coupon code  -->
                           
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
						
                        <!-- coupon-modal -->
							<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="mycouponmodal" aria-
								 hidden="true">
                          
								<div class="modal-dialog" style="width:700px;padding:150px 0px 0px 50px;">
									<div class="modal-content">
										<div class="modal-body">
                                 
											<button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true" style="color:white;">&times;</span>
											</button>
											<center id="couponbody" style="color:#888888;">
												<h4>HERE IS YOUR COUPON CODE</h4>
                                                <?php $modalname++;                        
                                                ?>
												<form class="form-inline" role="form">
													<div class="form-group">
														<input type="text" class="form-control" id="coupon" name="coupon" value= 'Coupons Are Over' size="50" disabled />
													</div>
                                                    
													<button type="button" class="btn btn-primary" id="copy_button" data-clipboard-target="coupon" >Copy</button>
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
											<button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
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
											<p style="padding:15px 0px 0px 90px;">
												<span class="glyphicon glyphicon-chevron-left"> </span>
												<a href="" data-dismiss="modal">Back</a>
											</p>
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
                    </div> <!-- row end -->    
                </div> <!-- col-md-9 end -->
                <!-- right panel end -->
            </div><!-- main row end -->
        </div> <!-- container-fluid end -->
    </div> <!-- outer widht block end -->
    <!-- list of internet plans end -->
		
	<!-- back to top button start -->
	<a href="#" class="image-switch"></a>
	<!-- back to top button end -->
	    
    <!-- start footer -->
    <div id="footer" style="width:1349px;"></div>    
    <!-- end footer -->
    
</body>    
</html>