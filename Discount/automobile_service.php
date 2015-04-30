<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- bootstrap all css -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/> <!-- signup and login font -->
    <link rel="stylesheet" href="css/style.css" /> <!-- all page css -->
    <link rel="stylesheet" href="css/automobile-style.css" /> <!-- automobile css -->
	<link rel="stylesheet" type="text/css" href="css/social.css" /> <!-- left social icons css -->
    <script src="jquery/jquery-2.1.3.min.js"></script> <!-- jquery for all -->
	<script src="js/socialbars.js" type="text/javascript"></script> <!-- left bar social icons js -->
    <script src="js/bootstrap.min.js"></script> <!-- bootstrap js all -->
    <script>
        
        //topbar, searchbar and menubar start
        $(document).ready(function(){
            $("#header").load("header.php");
            $("#footer").load("footer.php");
        });
        //topbar, searchbar and menubar end
        
        //popover comment start
        $(function () { 
            $('[data-toggle="popover"]').popover({html : true });
            $('#popoverclose').click(function(e) {
              $('.popover-title').append('<button id="popovercloseid" type="button" class="close">&times;</button>');
              $(this).popover();

            });

            $(document).click(function(e) {
                if(e.target.id=="popovercloseid" )
                {
                    $('#popoverclose').popover('hide');                
                }
            });
        });
        //popover comment end
        
    </script>
</head>
<body>
    <div id="socialside">
    </div>
    <!-- topbar, searchbar and menubar start  -->
    <div id="header" style="width:1349px; height:150px;"></div>
    <!-- topbar, searchbar and menubar end  -->
    
    <!-- list of sellers start -->
    <div style="width:1349px;">
        <div class="container-fluid">
            <div class="row">
                <!-- left panel start -->
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
                    
                    <!-- shop by vehicle type start-->
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Vehicle Type</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Two Wheeler</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />Four Wheeler</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- shop by vehicle type end -->
                    
                    <!-- sort by brand start -->
                    <div class="row">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Two Wheeler Brand</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px; height:150px; overflow-y:scroll;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />50 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />18 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />12 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />10 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />6 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />2 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1.5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />512 Kbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />320 Kbps</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- sort by brand end -->
                    
                    <!-- sort by four wheeler brand start -->
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12" style="background-color:#FF9966;">
                            <h5><strong>Four Wheeler Brand</strong></h5>
                        </div>
                    </div>
                    <div class="row sort">
                        <div class="col-md-12" style="padding:0px 0px 5px 14px; height:150px; overflow-y:scroll;">
                            <form role="form">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />100 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />50 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />18 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />20 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />12 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />10 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />6 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />4 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />3 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />2 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1.5 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />1 Mbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />512 Kbps</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" />320 Kbps</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- sort by four wheeler brand end -->
                    
                </div>
                <!-- left panel end -->
                
                <!-- right panel start -->
                <div class="col-md-7">
                    
                    <div class="main-block">
                        <div class="row" style="margin-left:5px;">
                            <div class="col-md-8">
                                <a href="monginies.html" style="color:#E00000;">
                                    <h4><strong>Manas Automotive pvt. ltd.</strong></h4>
                                </a>
                                Kothrud<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Flat No. 88/04, Ravinagar Society, Pune - 411038....</font>
                                <br />
                                Vehicle Type<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Four Wheeler</font>
                                <br />
                                Brands Repair Here<small> <span class="glyphicon glyphicon-menu-right"></span></small>
                                <font style="color:#708090;">Maruti Suzuki, Tata Motors, Bajaj</font>
                            </div>
                            <div class="col-md-3 col-md-offset-1" style="padding-top:50px;">
                                <button type="button" class="btn btn-success">Get Coupon</button>
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-12">
                                <div class="sub-block">
                                    <a href="#" id="popoverclose" class="icon" style="border-right:1px solid;" data-toggle="popover" data-container="body" data-placement="bottom" data-trigger="click" tabindex="0"
                                       data-content="
                                                    <form role='form'>
                                                        <div class='form-group'>
                                                            <textarea class='form-control' rows='3' id='comment'></textarea>
                                                        </div>
                                                        <div class='form-group'>
                                                            <input type='text' class='form-control' placeholder='Enter Your Name' />
                                                        </div>
                                                        <button type='submit' class='btn btn-primary'>Submit</button>
                                                    </form>
                                                                     
                                    ">
                                        <span class="glyphicon glyphicon-comment"> </span> 1 Reviews 
                                    </a>
                                    <a href="" class="icon" style="border-right:1px solid;">
                                        <span class="glyphicon glyphicon-thumbs-up"> </span> 125 
                                    </a>
                                    <a href="" class="icon">
                                        <span class="glyphicon glyphicon-thumbs-down"> </span> 23 
                                    </a>
                                </div>    
                            </div>
                        </div>
                    </div>
                    
                </div> <!-- right panel end -->
                
            </div><!-- row end -->    
        </div> <!-- container end -->   
    </div> <!-- div width end -->
    
    <!-- start footer -->
    <div id="footer" style="width:1349px;"></div>    
    <!-- end footer -->
    
</body>    
</html>