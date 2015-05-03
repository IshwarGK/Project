<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Diskart Seller Portal</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="image/titlebar.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" /> <!-- bootstrap css -->
	
    <link rel="stylesheet" href="css/style.css" /> <!-- style css for all -->
	<link rel="stylesheet" type="text/css" href="css/start-selling.css" /> <!-- start selling page css -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
	<!-- bootstrap form validator css -->
    <script src="jquery/jquery-2.1.3.min.js"></script> <!-- jquery -->
    <script src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js">         </script> <!-- bootstrap form validator js -->
    <script>
		
		//form validation start
        $(document).ready(function() {
            $('#selleraccount').bootstrapValidator({
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    fullname: {
                        container: '#fullnamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'Full name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 3,
                                message:'Full name should be of atleast 3 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z ]+$/i,
                                message: 'Full name can consist of alphabetical characters only'
                            }
                        }
                    },
                    
                    username: {
                        container: '#usernamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'Username is required and cannot be empty'
                            },
                            stringLength: {
                                min: 3,
                                message:'Username should be of atleast 3 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\. ]+$/,
                                message: 'The username can consist of alphabetical characters only'
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
                            },
							regexp: {
								regexp: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/,
								message:'The email address is incorrect.'
							}
                        }
                    },
                    
					pwd: {
                        container: '#pwdvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
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
                            }
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
                    },
					
					zipcode: {
                        container: '#zipcodevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The zip code is required and cannot be empty'
                            },
                           regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'The zip code can only consist of numbers only'
                            },
							stringLength: {
                                max: 6,
                                message:'Zip Code should be of maximum 6 digits'
                            }
                        }
                    }
                }
            });
        });
		//form validation end
		
		//email already exists check start
		$(document).ready(function(){
			
			$('#username').focusout(function(){	
				var username = document.getElementById("username").value;
				var dataString = 'username=' + username;
				$.ajax({
					type: "POST",
					url: "seller_email_database.php",
					data: dataString,
					cache: false,
					dataType: "json",
					success: function(data) {
						if(data.status == 'error'){
							document.getElementById("usernameerror").innerHTML = "This username is already registered";	
						} 
						if(data.status == 'success') {
							document.getElementById("usernameerror").innerHTML = " ";
						}
					}
				});
			});
		});
		//email already exists check end
		
		//passing form values to database start
		function seller_account() {	
			var fullname = document.getElementById("fullname").value;
			var username = document.getElementById("username").value;
			var email = document.getElementById("email").value;
			var pwd = document.getElementById("pwd").value;
			var mobilenumber = document.getElementById("mobilenumber").value;
			var companyname = document.getElementById("companyname").value;
			var companyaddress = document.getElementById("companyaddress").value;
			var area = document.getElementById("area").value;
			var city = document.getElementById("city").value;
			var state = document.getElementById("state").value;
			var zipcode = document.getElementById("zipcode").value;
			var product = document.getElementById("product").value;
			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'fullname=' + fullname + '&username=' + username + '&email=' + email + '&pwd=' + pwd + '&mobilenumber=' + mobilenumber + '&companyname=' + companyname + '&companyaddress=' + companyaddress + '&area=' + area + '&city=' + city + '&state=' + state + '&zipcode=' + zipcode + '&product=' + product;

			// AJAX code to submit form.
			if(fullname == "" || username == "" || email == "" || pwd == "" || mobilenumber == "" || companyname == "" || companyaddress == "" || area == "" || city == "" || state == "" || zipcode == "" || product == "")
			{
				$('#selleraccount').bootstrapValidator({
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    fullname: {
                        container: '#fullnamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'Full name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 3,
                                message:'Full name should be of atleast 3 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z ]+$/i,
                                message: 'Full name can consist of alphabetical characters only'
                            }
                        }
                    },
                    
                    username: {
                        container: '#usernamevalidation',
                        validators: {
                            notEmpty: {
                                message: 'Username is required and cannot be empty'
                            },
                            stringLength: {
                                min: 3,
                                message:'Username should be of atleast 3 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\. ]+$/,
                                message: 'The username can consist of alphabetical characters only'
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
                            }
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
                            }
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
                    },
					
					zipcode: {
                        container: '#zipcodevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The zip code is required and cannot be empty'
                            },
                           regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'The zip code can only consist of numbers only'
                            },
							stringLength: {
                                max: 6,
                                message:'Zip Code should be of maximum 6 digits'
                            }
                        }
                    }
                }
            });
				
			}
			else {
			$.ajax({
				type: "POST",
				url: "seller_database.php",
				data: dataString,
				cache: false,
				dataType: "json",
				success: function(data) {
    				if(data.status == 'success'){
        				
						document.getElementById("success-message").innerHTML = "<h2>Thank you for registering</h2><font size='5'>Our business team will contact you shortly</font><br /><font size='3'>Go to <a href='sell.php'>Home</a> Page</font>";
						
    				}else if(data.status == 'error'){
        				document.getElementById("usernameerror").innerHTML = "This username is already registered";
    				}
				}
			});
			}
			return false;
		}
		//passing form values to database end
		
    </script>
</head>
<body>
    
    <!-- topbar start -->
    <div class="header-topbar" style="padding:8px 0px 15px 0px;width:100%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.php">
                        <img src="image/logo.png" alt="Diskart.com:Online Discount India" title="Online Discount India | Diskart.com" style="width:200px;height:40px;" />
                    </a>	
                </div>
				<div class="col-md-9" style="padding-top:5px;">
					<span style="margin-left:-15px;">
						<font style="color:white;font-size:25px;">Marketplace</font>
					</span>
				</div>
            </div>
        </div>
    </div>
    
    <!-- account creation start -->
    <div class="container sell-account">
		<div id="success-message">
			<h2>Account Creation</h2>
			<form role="form" method="post" id="selleraccount" onsubmit="return seller_account()">
				<div class="row">
					<div class="col-md-4 col-md-offset-2">    
						<div class="form-group">
							<label for="fullname" class="control-label">Full Name<span class="red">&#42;</span></label>
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="First Name Last Name" autofocus />
							<div id="fullnamevalidation"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="username" class="control-label">Username<span class="red">&#42;</span></label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" />
							<div id="usernamevalidation"></div>
							<span id="usernameerror" style="color:red;"></span>
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
							<label for="zipcode" class="control-label">Zip Code<span class="red">&#42;</span></label>
							<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zip Code" />
							<div id="zipcodevalidation"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="product" class="control-label">Your Product<span class="red">&#42;</span></label>
							<select class="form-control" id="product" name="product">
        						<option value="Internet Plan">Internet Plan</option>
        						<option value="Gym">Gym</option>
        						<option value="Cakes">Cakes</option>
      						</select>
						</div>
					</div>    
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>	
    </div>
    <!-- account creation end -->
	
    <!-- footer start -->
    <div class="footer-block" style="width:100%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <p><a href="sell.php" style="color:whitesmoke;">Seller Learning Center</a></p>    
                </div>
                <div class="col-md-3 col-md-offset-7">
                    <p style="float:right;">Copyright &#169; 2015 Diskart.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
	
</body>    
</html>    