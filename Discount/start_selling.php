<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diskart: Largest Discount Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/social.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    <script src="js/modernizr.custom.83306.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="jquery/jquery-2.1.3.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/socialbars.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js">            </script>
    <script>
        $(document).ready(function() {
            $('#selleraccount').bootstrapValidator({
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    firstname: {
                        container: '#firstnamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The first name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 3,
                                message:'First name should be of atleast 3 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]+$/i,
                                message: 'The first name can consist of alphabetical characters only'
                            }
                        }
                    },
                    
                    lastname: {
                        container: '#lastnamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The last name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 3,
                                message:'The last name should be of atleast 3 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]+$/i,
                                message: 'The last name can consist of alphabetical characters only'
                            }
                        }
                    },
                    
                    email: {
                        container: '#emailvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and cannot be empty'
                            },
                            emailAddress: {
                                message: 'The email address is not valid'
                            }
                        }
                    },
                    pwd: {
                        container: '#pwdvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                        }
                    },
                    mobilenumber: {
                        container: '#mobilenumbervalidation',
                        validators: {
                            notEmpty: {
                                message: 'The mobilenumber is required'
                            },
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'Enter valid mobile number'
                            },
                            stringLength: {
                                min: 10,
                                max: 10,
                                message:'The mobile number should be of 10 digits'
                            },
                            
                        }
                    },
                    companyname: {
                        container: '#companynamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'The company name can only consist of alphabetical, number, dot and underscore'
                            }    
                        }
                    },
                    companyaddress: {
                        container: '#companyaddressvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'The company address can only consist of alphabetical, number, dot and underscore'
                            }
                        }
                    },
                    area: {
                        container: '#areavalidation',
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: 'The area name can only consist of alphabetical characters and spaces only'
                            }
                        }
                    },
                    city: {
                        container: '#cityvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z]+$/,
                                message: 'The city name can only consist of alphabetical characters only'
                            }
                        }
                    },
                    state: {
                        container: '#statevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            },
                           regexp: {
                                regexp: /^[a-zA-Z]+$/,
                                message: 'The state name can only consist of alphabetical characters only'
                            }
                        }
                    }
                }
            });
        });
    </script>
</head>
<body>
    
	<div id="socialside">
    </div>
    <!-- topbar start -->
    <div class="header-topbar">
        <div class="container">
            <div class="row row-items">
                <div class="col-md-12">
                    <a href="index.php">
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:210px;height:45px;"/>
                    </a> 
                    <font style="color:white;font-size:25px;"><b>Marketplace</b></font>
                </div>
            </div>
        </div>
    </div>
    
    <!-- account creation start -->
    <div class="container sell-account">
        <div style="margin-bottom:30px;">
            <h1>Account Creation</h1>
        </div>
        <form role="form" action="" method="post" id="selleraccount">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">    
                    <div class="form-group">
                        <label for="firstname" class="control-label">First Name<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" autofocus />
                        <div id="firstnamevalidation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lastname" class="control-label">Last Name<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" />
                        <div id="lastnamevalidation"></div>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-2">    
                    <div class="form-group">
                        <label for="youremailid" class="control-label">Your Email ID<span class="red">&#42;</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" />
                        <div id="emailvalidation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password" class="control-label">Password<span class="red">&#42;</span></label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" />
                        <div id="pwdvalidation"></div>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-2">    
                    <div class="form-group">
                        <label for="mobilenumber" class="control-label">Mobile Number<span class="red">&#42;</span></label>
                        <input type="tel" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" maxlength="10" />
                        <div id="mobilenumbervalidation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="companyname" class="control-label">Company<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name" />
                        <div id="companynamevalidation"></div>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-2">    
                    <div class="form-group">
                        <label for="companyaddress" class="control-label">Company Address<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="companyaddress" name="companyaddress" placeholder="Company Address" />
                        <div id="companyaddressvalidation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="area" class="control-label">Area<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area" />
                        <div id="areavalidation"></div>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-2">    
                    <div class="form-group">
                        <label for="city" class="control-label">City<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" />
                        <div id="cityvalidation"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="state" class="control-label">State<span class="red">&#42;</span></label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="State" />
                        <div id="statevalidation"></div>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-2">    
                    <div class="form-group">
                        <label for="category">Choose Your Category<span class="red">&#42;</span></label>
                        <select multiple class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subcategory">Choose Your Sub Category<span class="red">&#42;</span></label>
                        <select multiple class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>    
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </form>
    </div>
    <!-- account creation end -->
    <!-- footer start -->
    <div class="footer-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <p><a href="sell.html" style="color:whitesmoke;">Seller Learning Center</a></p>    
                </div>
                <div class="col-md-3 col-md-offset-6">
                    <p>&#169; 2015 Diskart. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
</body>    
</html>    