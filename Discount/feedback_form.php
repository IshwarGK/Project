<script>
//Feedback form building start
		$(document).ready(function(){
    		var feedback_count = 0;
			$(".pull_feedback").click(function(){
				feedback_count = feedback_count + 1;
				if(feedback_count % 2 != 0){
					$("#feedback").animate({right:"0px"});
					document.getElementById("feedback_form").reset();
					$("#feedback-content").show()	
					$("#feedback-success").hide()
					$('#feedback_form').data('bootstrapValidator').resetForm('resetFormData',true);
				}
				else {	
					$("#feedback").animate({right:"-385px"});
				}
    		});
			
		});
		
				//Feedback form bootstrap validator start
		$(document).ready(function() {
            $('#feedback_form').bootstrapValidator({
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
					
                    email: {
                        container: '#emailvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and cannot be empty.'
                            },
                            emailAddress: {
                                message: 'The email address is not valid.'
                            },
							regexp: {
								regexp: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/,
								message:'The email address is incorrect.'
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
                    
                    formmessage: {
                        container: '#messagevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The message is required and cannot be empty'
                            },
                           regexp: {
                                regexp: /^[a-zA-Z0-9.?, ]+$/,
                                message: 'The message should contain only character, dot and ?'
                            }
                        }
                    }
                }
            });
        });
				//Feedback form bootstrap validator end
		
				// ajax function to send data to database start
		function myFunction() {	
			var email = document.getElementById("email").value;
			var mobilenumber = document.getElementById("mobilenumber").value;
			var formmessage = document.getElementById("formmessage").value;
			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'email=' + email + '&mobilenumber=' + mobilenumber + '&formmessage=' + formmessage;

			// AJAX code to submit form.
			if(email == "" || mobilenumber == "" || formmessage == "")
			{
				$('#feedback_form').bootstrapValidator({
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
					
                    email: {
                        container: '#emailvalidation',
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and cannot be empty.'
                            },
                            emailAddress: {
                                message: 'The email address is not valid.'
                            },
							regexp: {
								regexp: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/,
								message:'The email address is incorrect.'
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
                    
                    formmessage: {
                        container: '#messagevalidation',
                        validators: {
                            notEmpty: {
                                message: 'The message is required and cannot be empty'
                            },
                           regexp: {
                                regexp: /^[a-zA-Z0-9.?, ]+$/,
                                message: 'The message should contain only character, dot and ?'
                            }
                        }
                    }
                }
            	});
				
			}
			else {
			$.ajax({
				type: "POST",
				url: "feedback_database.php",
				data: dataString,
				cache: false,
				success: function(html) {
					$("#feedback-content").hide();
					$("#feedback-success").show();
				}
			});
			}
			return false;
		}
				// ajax function to send data to database end
		//Feedback form building end

</script>
<a href="#" class="pull_feedback">Feedback</a>
		<form role="form" id="feedback_form" method="post" onsubmit="return myFunction()" style="width:385px;height:550px;">
			<div id="feedback-content">
				<h3><b>Tell us what you think.</b></h3>
				<p>Love us / have suggestions / ideas / feature requests?<br /> 
					Tell us how we can improve our website.
				</p>
				<div class="form-group">
					<label for="email">Email <span style="color:red;"> &#42;</span></label><br />
					<input type="email" class="form-control" id="email" name="email" />
					<div id="emailvalidation"></div>
				</div>
				<div class="form-group">
					<label for="mobilenumber">Mobile Number <span style="color:red;"> &#42;</span></label><br />
					<input type="tel" class="form-control" id="mobilenumber" name="mobilenumber" />
					<div id="mobilenumbervalidation"></div>
				</div>
				<div class="form-group">
					<label for="message">Message <span style="color:red;"> &#42;</span></label><br />
					<textarea class="form-control" rows="4" id="formmessage" name="formmessage"></textarea>
					<div id="messagevalidation"></div>
				</div>
				<button name="feedback_submit" id="feedback_submit" type="submit" class="btn btn-success">Submit</button>
			</div>
			<div id="feedback-success" style="margin:200px 0px 0px 50px;">
				<h4>Thank you for your feedback.</h4>
			</div>
		</form>