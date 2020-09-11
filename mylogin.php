<!DOCTYPE html>
<html>
<head>
<title>Login to your Account</title>
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
<div class="signin-form">
	<form action="" method="post">
		<div class="form-header">
			<h2>Sign In</h2>
		   
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="someone@gmail.com" autocomplete="off" required>
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" name="pass" class="form-control" placeholder="password" autocomplete="off" required>
		</div>
         <br>
		

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
		</div>
		<br>
		<div class="text-center small" style="color: #674288;">Don't have an account??<a href="register.php">Create One</a></div>
		<?php
		include ("login_user.php") ;
		?>
	</form>
	
</div>

</body>
</html>