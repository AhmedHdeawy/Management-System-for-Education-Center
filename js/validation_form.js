$(document).ready(function() {

		// validate signup form on keyup and submit
		$("#myform").validate({
			rules: {
				username: {
					minlength: 2
				},
				password: {
					minlength: 5
				},
				confirm_password: {
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					email: true
				},
				
			},

			messages: {
				
				username: {
					//required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					//required: "Please Enter a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					//required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
			}
		});

 });
