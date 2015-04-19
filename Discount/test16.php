<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/internet-style.css" />
    <script src="js/modernizr.custom.83306.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="jquery/jquery-2.1.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>
    <script> 
        
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
        //topbar, searchbar and menubar end  
        
    </script>
</head>
<body>
       
    <!-- topbar, searchbar and menubar start  -->
    <div id="header" style="width:1349px; height:150px;"></div>
    <!-- topbar, searchbar and menubar end  -->
    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>

    
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
                            <h5><strong>Shop by Brands</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="airtel_plan" id="option4"/>Airtel</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="bsnl_plan" id="option5" />BSNL</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="hathway_plan" id="option6" />Hathway</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="docomo_plan" id="option7" />TaTa Docomo</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="tikona_plan" id="option8" />Tikona</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="brand" value="you_broadband_plan" id="option9" />You Broadband</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- shop by brand end -->
                    
                                         <!-- Plan Type start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Plan</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="plan" value="unlimited" id="option10" />Unlimited</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="plan" value="daynight" id="option11" />Day / Night</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="plan" value="normal" id="option12" />Normal</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Plan Type end -->
                   
                      <!-- sort by speed end -->
      
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Speed</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px; height:150px; overflow-y:scroll;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="speed" value="100 Mbps" id="option13" />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"  name="speed" value="50 Mbps" id="option14" />50 Mbps</label>
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
                        </div>
                    </div>
                    <!-- sort by speed end -->
    
                    
                   
                                       
                    <!-- price start -->
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Price</strong></h5>
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
                            <h5><strong>Validity</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="1 month" id="option34" />1 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="3 month" id="option35" />3 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="6 month" id="option36" />6 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="12 month" id="option37" />12 month</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="validity" value="24 month" id="option38" />24 month</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- validity end -->
                    
                </div>
                <!--left panel end -->
                
                 <script>
      $(":checkbox").on("change", function(){
        var checkboxValues = {};
        $(":checkbox").each(function(){
          checkboxValues[this.id] = this.checked;
        });
        $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
        
         var countChecked = function() {
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
   /* 
    if($("input[name='plan']:checked").lenght == 1 and $("input[name='brand']:checked").val == "DayNight"){
        var daynight_dis = 1;
    }else{
        var daynight_dis = 0;
    }     
     */        
    var brand_len = $("input[name='brand']:checked").length;
    var plan_len = $("input[name='plan']:checked").length;
    var speed_len = $("input[name='speed']:checked").length;
    var price_len = $("input[name='price']:checked").length;
    var validity_len = $("input[name='validity']:checked").length;
             
                           
            var url = "test16.php?brand=" + favorite.join(", ") + "& plan=" + plan.join(", ") + "& speed=" + speed.join(", ") + "& price=" + price.join(", ") + "& validity=" + validity.join(", ") + "& count1=" + brand_len + "& count2=" + plan_len + "& count3=" + speed_len + "& count4=" + price_len + "& count5=" + validity_len ;
                    window.location.href = url;
            
            
};

countChecked();
        
        
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
                <div class="col-md-9">
                    <!-- first row -->
                    <div class="row">
                        <!-- php code for listing plans -->
                        <?php
                            // database connection file include
                            //$count = $_GET["count"];
                            if (isset($_GET["count1"])) {
                                $delete1 = $_GET["count1"];
                            }
                            else{
                                $delete1 = 0;
                            }
                            if (isset($_GET["count2"])) {
                                $delete2 = $_GET["count2"];
                            }
                            else{
                                $delete2 = 0;
                            }
                            if (isset($_GET["count3"])) {
                                $delete3 = $_GET["count3"];
                            }
                            else{
                                $delete3 = 0;
                            }
                            if (isset($_GET["count4"])) {
                                $delete4 = $_GET["count4"];
                            }
                            else{
                                $delete4 = 0;
                            }
                            if (isset($_GET["count5"])) {
                                $delete5 = $_GET["count5"];
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
                            include 'page4.php';
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
                                <button type="submit" class="btn btn-success">Get Coupon</button>
                            </div>                   
                        </div>
                        <?php                                            
                                }        
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