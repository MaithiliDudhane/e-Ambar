<?php
  include 'connection.php';
 error_reporting(0);

 $id= $_GET['uid'];

 $query = "SELECT * FROM getphography WHERE id='$id'";

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
					<div class='container' style="padding:15px 56px 38px 310px;;">
						<div class='card'>
							<div class='card-header'>
								<h1>Upload Photography</h1>
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
							  <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file" name="uploadphography">
							</div>
						   <button class="btn button" style="font-size: 19px; padding: 10px 25px; margin: 1px;" role="button" name="uploadphotography">Upload Photography</button>       
		               </form>
					  </div>
					</div>
				</body>			
				</html>

				
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

if(isset($_POST['uploadphotography']))
{
    $fname     = $_POST['firstname'];
    $lname     = $_POST['lastname'];
    $year      = $_POST['yearofstudy'];
    $dept      = $_POST['department'];

	$allowedextension= array('jpg','png','jpeg');
    $filename = $_FILES["uploadphography"]["name"];
    $tempname = $_FILES["uploadphography"]["tmp_name"];
    $fileextension = pathinfo($filename,PATHINFO_EXTENSION);
    $folder = "uploadphography/".$filename;
    move_uploaded_file($tempname,$folder);

    if(!in_array($fileextension, $allowedextension))
   {
    echo '<script>alert("Only .jpg , .png , .jpeg Extensions images are allowed!")</script>';
   }
   else
   {

    if($fname !="" && $lname !=""  && $year !="" && $dept !="" && $filename !="")
{    

    $query = "INSERT INTO uploadPhography (firstname,lastname,yearofstudy,department,uploadedphography) VALUES
	          ('$fname','$lname','$year','$dept','$filename')";

    $data = mysqli_query($conn,$query);
  
    if($data)
    {
        echo '<script>alert("Your Data Is Accepted!")</script>';
		?>
		<meta http-equiv = "refresh" content = "0; url = viewphotographydata.php"/>
	   <?php
   }
  else
  {
	echo '<script>alert("Your data not inserted!")</script>';
  }
}
  else
  {
	echo '<script>alert("Please fill the form!")</script>';
  }
}
}
?> 

		<!-- <a href= 'download='photography/".$result['photography']."' href= 'photography/".$result['photography']."''>".$result['photography']."</a></td>      -->
