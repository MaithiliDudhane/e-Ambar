<?php
  include 'connection.php';

  $id= $_GET['dpid'];

  error_reporting(0);
            
  session_start();
  
  $userprofile = $_SESSION['user_name'];
  
  if($userprofile == true)
  {
  
  }
  else
  {
  header('location:adminlogin.php'); 
  }

 $query = "DELETE FROM uploadmarathipoem WHERE id='$id'";
  $data = mysqli_query($conn,$query);

  if($data)
  {
      echo '<script>alert("Record Deleted!")</script>';
      ?>

        <meta http-equiv = "refresh" content = "0; url = uploadedphotography.php"/>

      <?php
  }
  else
  {
    echo '<script>alert("Failed To Delete")</script>';
}
?> 