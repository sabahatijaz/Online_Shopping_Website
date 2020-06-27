<?php  
 
include("db.php");  
$delete_id=$_GET['delid'];  
$delete_query="delete  from user_info WHERE user_id='$delete_id'";//delete query  
$run=mysqli_query($con,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>