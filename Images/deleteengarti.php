<?php
  include 'connection.php';

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

  $id= $_GET['deaid'];

  $query = "DELETE FROM uploadenglisharticle WHERE id='$id'";
  $data = mysqli_query($conn,$query);

  if($data)
  {
      echo '<script>alert("Record Deleted!")</script>';
      ?>

        <meta http-equiv = "refresh" content = "0; url = uploadedenglisharticle.php"/>

      <?php
  }
  else
  {
    echo '<script>alert("Failed To Delete")</script>';
}
?> 