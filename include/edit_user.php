<!DOCTYPE html>
<html>
<head>
	<title>Edit ur Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>

<div class="signup-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Edit</h2>
		   
		</div>
		<div class="form-group">
			<label>Full Name</label>
			<input type="text" name="user_name" class="form-control" placeholder="Enter new Name" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label>Email Address</label>
			<input type="email" name="user_email" class="form-control" placeholder="Enter new Email" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label>Mobile No.</label>
			<input type="text" name="user_mobile" class="form-control" placeholder="Enter new Moblie no." autocomplete="off" required>
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
			<input type="password" name="user_pass" class="form-control" placeholder="Enter New Password" autocomplete="off" required>
		</div>

		
        <br>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="edit_user">Update</button>
		</div>
		<br>
		<?php
		include "edit_user_details.php" ;
		?>
		
	</form>
	
</div>

</body>
</html>