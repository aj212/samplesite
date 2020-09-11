

<?php  
include "connection.php";

if(isset($_GET['edit_user'])){


    $the_user_id = $_GET['edit_user'];
    

    $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_users_query = mysqli_query($connection,$query);  

      while($row = mysqli_fetch_assoc($select_users_query)) {

          $user_id        = $row['user_id'];
          $user_name       = $row['user_name'];
          $user_pass = $row['user_pass'];
          $user_email = $row['user_email'];
          $user_mobile  = $row['user_mobile'];
          $user_plan     = $row['user_plan'];
          
          
      }
      
    
    
    
?>
  

   
 <?php  // Post request to update user 
   

   if(isset($_POST['edit_user'])) {
       
            
            $user_name   = $_POST['user_name'];
            $user_pass   = $_POST['user_pass'];
            $user_email  = $_POST['user_email'];
            $user_mobile  = $_POST['user_mobile'];
            $user_plan  = $_POST['user_plan'];
    
         
    
           
       
      

       

          $query = "UPDATE users SET ";
          $query .="user_name  = '{$user_name}', ";
          $query .="user_pass = '{$user_pass}', ";
          $query .="user_email = '{$user_email}', ";
          $query .="user_mobile = '{$user_mobile}', ";
          $query .="user_plan = '{$user_plan}', ";
         
          $query .= "WHERE user_id = {$the_user_id} ";
       
       
            $edit_user_query = mysqli_query($connection,$query);
            if($edit_user_query){
                echo "<script>alert('Your Information Updated Successfully')</script>";
            }else{
              echo"<script>alert('Query failed')</script>";
            }


         

      

             } 
    

        } 




 


   