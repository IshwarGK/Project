<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
	<script src="jquery/jquery-2.1.3.min.js"></script><!-- jquery -->
    <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script><!-- cookie jquery -->
    <script src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
    <link rel="stylesheet" href="css/bootstrap.min.css" /><!-- bootstrap css -->
    <link rel="stylesheet" href="css/coupon.css" /><!-- coupon button css -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/> <!-- login and signup social icons -->
    <link rel="stylesheet" href="css/style.css" /> <!-- all page css -->
    <link rel="stylesheet" href="css/internet-style.css" /> <!-- internet style css -->
    <script> 
        
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#header").load("header.php");
            $("#footer").load("footer.php");
<<<<<<< HEAD
            //$.removeCookie("checkboxValues");
=======
            $.removeCookie("checkboxValues");
>>>>>>> origin/master
        });
        
       
        //topbar, searchbar and menubar end  
         
        function toggle_uncheck_brand(source){
               checkboxes = document.getElementsByName('brand');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_1").hide();
            countChecked();
        }
        function toggle_uncheck_plan(source){
               checkboxes = document.getElementsByName('plan');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_2").hide();
            countChecked();
        }
       
        function toggle_uncheck_speed(source){
               checkboxes = document.getElementsByName('speed');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_3").hide();
            countChecked();
        }
        function toggle_uncheck_price(source){
               checkboxes = document.getElementsByName('price');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_4").hide();
            countChecked();
        }
        function toggle_uncheck_validity(source){
               checkboxes = document.getElementsByName('validity');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.unchecked;
          }
            $("#uncheck_5").hide();
            countChecked();
        }
        
         
            
        
        
    </script>
</head>
<body>
       <?php if($_GET['bb'] == 'B') { ?>
                <script>
                $.removeCookie("checkboxValues");
                
                </script>
                
            <?php $bb = 'C'; } ?>
    
    <!-- topbar, searchbar and menubar start  -->
    <div id="header" style="width:1349px; height:150px;"></div>
    <!-- topbar, searchbar and menubar end  -->
    
	<!-- list of internet plans start -->
    <div style="width:1349px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <ul id="shortcut-menu">
                        <li><a href="index.html">Home</a></li>
                        <li> > </li>
                        <li>Internet Plans</li>
                    </ul>
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
                                    <label><input type="checkbox" name="speed" value="2 Mbps" id="option24" disabled />2 Mbps</label>
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
                                    <label><input type="checkbox" name="speed" value="4 Mbps" id="option22" />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="3 Mbps" id="option23" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="2 Mbps" id="option24" />2 Mbps</label>
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
                                    <label><input type="checkbox" name="speed" value="4 Mbps" id="option22" />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="3 Mbps" id="option23" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="2 Mbps" id="option24" />2 Mbps</label>
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
                                    <label><input type="checkbox" name="validity" value="6 month" id="option36"  <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "1 month"){echo 'checked';}} ?> />6 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="12 month" id="option37" <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "1 month"){echo 'checked';}} ?> />12 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="24 month" id="option38" <?php if(isset($_GET["validity"])){ if($_GET['validity'] == "1 month"){echo 'checked';}} ?> />24 month</label>
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
             //plan.push($_Get['brand']);
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
            var url = "internet_plan.php?brand=" + favorite.join(", ") + "& plan=" + plan.join(", ") + "& speed=" + speed.join(", ") + "& price=" + price.join(", ") + "& validity=" + validity.join(", ") + "& count1=" + brand_len + "& count2=" + plan_len + "& count3=" + speed_len + "& count4=" + price_len + "& count5=" + validity_len + "& Plan_test_name=airtel_plan & bb =C" ;
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
//$('input[type=checkbox]').attr('checked',false);
        
      });

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
                            $servername = "localhost";
                                $username = "root";
                                $password = "1234";
                                $dbname = "discount";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);


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
                <!-- right panel end -->
            </div><!-- main row end -->
        </div> <!-- container-fluid end -->
    </div> <!-- outer widht block end -->
    <!-- list of internet plans end -->
    
    <!-- start footer -->
    <div id="footer" style="width:1349px;"></div>    
    <!-- end footer -->
    
</body>    
</html>