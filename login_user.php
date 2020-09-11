<?php
 session_start();

 include ("include/connection.php");

 if(isset($_POST['sign_in'])){
  $email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));

    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['pass']));

    $select_user="SELECT * FROM users WHERE user_email='$email' AND user_pass='$pass' ";

    $query=mysqli_query($con,$select_user);
    $check_user=mysqli_num_rows($query);

    if($check_user == 1){
      $_SESSION['user_email']=$email;
      $get_user="SELECT * FROM users WHERE user_email='$email'";

      $run_user=mysqli_query($con,$get_user);
      $row=mysqli_fetch_array($run_user);

      $name=$row['user_name'];
      echo "<script>window.open('dashboard.php?user_name=$name', '_self')</script>";
    }
    else{
      echo "<div class='alert alert-danger'>
            <strong>Check Your Email and Password</strong>
      </div>";
    }
 }
?>