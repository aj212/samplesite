<?php
include("include/connection.php");
  if(isset($_POST['sign_up'])){
  	$name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));

  	$pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));

  	$email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));

  	$plan=htmlentities(mysqli_real_escape_string($con,$_POST['user_plan']));

  	$mobile=htmlentities(mysqli_real_escape_string($con,$_POST['user_mobile']));

  	

  	if(strlen($pass)<8){
  		echo "<script>alert('Password should be minimum of 8 characters)</script>";
  		exit();
  	}

  		$check_email="SELECT * FROM users WHERE user_email='$email' ";

  		$run_email=mysqli_query($con,$check_email);
  		$check=mysqli_num_rows($run_email);
  		if($check==1){
  			echo "<script>alert(Email already exists!!!)</script>";
  			echo "<script>window.open('signup.php', '_self')</script>";
  			exit();
  		}
  	          
      $insert="INSERT INTO users(user_name,user_pass,user_email,user_mobile,user_plan) VALUES('$name','$pass','$email','$moile','$plan')" ;
      
      $query=mysqli_query($con,$insert);
      if($query){
      	echo "<script>alert('Congratulations $name,your account has been created successfully')</script>";

      	echo "<script>window.open('mylogin.php','_self')</script>";
      }  else{
      	echo "<script>alert('Oops!Registeration failed,Plss try again!!')</script>";

      	echo "<script>window.open('register.php','_self')</script>";
      }

  }
?>