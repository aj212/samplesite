<!DOCTYPE html>
<html>
<head>
<title>Create new Account</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pretty-checkbox/3.0.3/pretty-checkbox.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
<div class="signup-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Sign  Up</h2>
		   
		</div>
		<div class="form-group">
			<label>Full Name</label>
			<input type="text" name="user_name" class="form-control" placeholder="John Smith" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label>Email Address</label>
			<input type="email" name="user_email" class="form-control" placeholder="someone@gmail.com" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label>Mobile No.</label>
			<input type="text" name="user_mobile" class="form-control" placeholder="must be of 10 digits" autocomplete="off" required>
		</div>

         <div class="form-group">
			<label>Plan</label>
			<select class="form-control" name="user_plan" required>
				<option disabled="">Select a Plan</option>
				<option>Standard</option>
				<option>Advanced</option>
				<option>Pro</option>
	
				
			</select>
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" name="user_pass" class="form-control" placeholder="password" autocomplete="off" required>
		</div>

		
        <br>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
		</div>
		<br>
		<div class="text-center small" style="color: #674288;">Already have an account??<a href="mylogin.php">Sign In here</a></div>
		<?php
		include ("register_user.php") ;
		?>
	</form>
	
</div>

</body>
</html>