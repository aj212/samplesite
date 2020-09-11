<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Your<span>Admin</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    
   <!--  -->
    
    <div class="sidebar">
      <div class="profile_info">
       
      </div>
      <a href="include/edit_user.php?source=edit_user%p_id=<?php $user_id; ?>"><i class="fas fa-desktop"></i><span>Edit Your Profile</span></a>
      
      
    </div>
    <!--sidebar end-->

    <div class="content">
     <h1>WELCOME TO ADMIN</h1>

     </div>
    <?php
       if(isset($_GET['source'])){
        $source=$_GET['source'];
       }
       else{
        $source='';
         }

        switch ($source) {
          case 'edit_user':
            include "include/edit_user.php";
            break;

            
          
          default:
            include "dashboard.php";
            break;
        }
     ?>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
                           