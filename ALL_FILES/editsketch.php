<?php
  include 'connection.php';
 error_reporting(0);

 $id= $_GET['esid'];
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
 $query = "SELECT * FROM uploadsketch WHERE id='$id'";

 $data  = mysqli_query($conn,$query);
 $total  = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
				
				<head>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<!----======== CSS ======== -->
					<link rel="stylesheet" href="upload.css">
				
					<!----===== Boxicons CSS ===== -->
					<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' rel='stylesheet'>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				</head>
				<body style="background-color:#fcf8f8;">
				<a href="viewsketchdata.php">
              				 <button class="btn button" style=" font-size: 19px; padding: 10px 25px; margin: 1px;margin-top: 2%;"
              				role="button" name="back">Back</button> 
                </a>	
					<div class='container' style="padding:15px 56px 38px 310px;;">
						<div class='card'>
							<div class='card-header'>
								<h1>Upload Sketch</h1>
							</div>
							<div class='card-body'style="font-size:17px;">
							  <form method="POST" enctype="multipart/form-data">

						   <label for="fname"> First Name</label>
						   <input type="text" value="<?php echo $result['firstname'];?>" id="fname" name="firstname" >
						   <label for="fname"> Last Name</label>
						   <input type="text" value="<?php echo $result['lastname'];?>" id="lname" name="lastname" >
						   <label for="year">Year of Study</label>
						   <input type="text" value="<?php echo $result['yearofstudy'];?>" id="yos" name="yearofstudy" >
						   <label for="department">Department</label>
						   <input type="text" value="<?php echo $result['department'];?>" id="department" name="department" >
						   <div>
							  <label for="formFileLg" class="form-label">Upload Image</label>
							  <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file"
							  accept="images/*" name="newimg">
							   <input type="hidden" id="fname" name="oldimg" value="<?php echo $result['uploadedsketch'];?>">

							</div>
                            <?php echo "<img src= 'uploadsketch/".$result['uploadedsketch']."' height='100px' width='150px' >";?>
						    <div>
							<button class="btn button" style="font-size: 19px; padding: 10px 25px; margin: 1px;" 
							role="button" name="editsketch">Edit Sketch</button>
							</div> 
		              </form>
					  </div>
					</div>
				</body>			
				</html>

				
<?php


if(isset($_POST['editsketch']))
{
	
    $fname     = $_POST['firstname'];
    $lname     = $_POST['lastname'];
    $year      = $_POST['yearofstudy'];
    $dept      = $_POST['department'];

	
    if($_FILES['newimg']['name'] != "")
    {
    $filename = $_FILES["newimg"]["name"];
    $tempname = $_FILES["newimg"]["tmp_name"];
    $folder = "uploadsketch/".$filename;
    move_uploaded_file($tempname,$folder);
    }
   
   else
   {
     $filename  = $_POST['oldimg'];
   }
	
    if($fname !="" && $lname !=""  && $year !="" && $dept !="" && $filename !="")
{    

	$query = "UPDATE uploadsketch SET firstname='$fname',lastname='$lname',yearofstudy='$year',
    department='$dept',uploadedsketch='$filename' WHERE id='$id'";

    $data = mysqli_query($conn,$query);
  
    if($data)
    {
        echo '<script>alert("Data Is Edited!")</script>';
        ?>
           <meta http-equiv = "refresh" content = "0; url = uploadedsketch.php"/>
        <?php
    }
    else
    {        
      echo '<script>alert("Editing Failed!")</script>';
    }
}
    else
    {
      echo '<script>alert("Please fill the form!")</script>';
    }
 }

?> 