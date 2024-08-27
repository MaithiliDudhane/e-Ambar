<?php
  include 'connection.php';
 error_reporting(0);

 $id= $_GET['uid'];

 $query = "SELECT * FROM getenglishpoem WHERE id='$id'";

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
<title>Upload English Poem</title>
<body style="background-color:#fcf8f8;">
<a href="viewengpoemdata.php">
              <button class="btn button" style="  font-size: 19px; padding: 10px 25px; margin: 1px;margin-top: 2%;"
              role="button" name="back">Back</button> 
           </a> 	
					<div class='container' style="padding:15px 56px 38px 310px;;">
						<div class='card'>
							<div class='card-header'>
              <h1>Upload English Poem</h1>
							</div>
							<div class='card-body'style="font-size:17px;">
							  <form method="POST" enctype="multipart/form-data">
           <label for="name">Poem Name</label>
           <input type="text" id="fname" name="poemname"  value="<?php echo $result['poemname'];?>">
           <label for="fname">Author First Name</label>
           <input type="text" id="fname" name="firstname"  value="<?php echo $result['firstname'];?>">
           <label for="fname">Author Last Name</label>
           <input type="text" id="fname" name="lastname"  value="<?php echo $result['lastname'];?>">
           <label for="year">Year of Study</label>
	    		 <input type="text" id="yos" name="yearofstudy"  value="<?php echo $result['yearofstudy'];?>">
  				 <label for="department">Department</label>
				   <input type="text" id="fname" name="department"  value="<?php echo $result['department'];?>">
           <div>
              <label for="formFileLg" class="form-label">Upload Image</label>
              <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file" 
              name="image">
            </div>
            <div>
            <label for="Poem">Poem</label>
            <textarea id="Poem" name="poem"> </textarea>
            </div>
           <button class="btn button" style="  font-size: 19px; padding: 10px 25px; margin: 1px;margin-top: 2%;" 
           role="button" name="uploadEpoem">Upload English Poem</button> 
              
        </form>
      </div>
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

if(isset($_POST['uploadEpoem']))
{
    $artiname = $_POST['poemname'];
    $fname    = $_POST['firstname'];
    $lname    = $_POST['lastname'];
    $year     = $_POST['yearofstudy'];
    $dept     = $_POST['department'];

    $allowedextension= array('jpg','png','jpeg');
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $fileextension = pathinfo($filename,PATHINFO_EXTENSION);
    $folder = "uploadengpoemimg/".$filename;
    move_uploaded_file($tempname,$folder);

    if(!in_array($fileextension, $allowedextension))
   {
    echo '<script>alert("Only .jpg , .png , .jpeg Extensions images are allowed!")</script>';
   }
   else
   {
    $Epoem     = $_POST['poem'];


    if($artiname !="" && $fname !="" && $lname !=""  && $year !="" && $dept !="" && $filename !="" && $Epoem !="")
{
    $query = "INSERT INTO uploadenglishpoem (poemname,firstname,lastname,yearofstudy,department,image,englishpoem)
    VALUES('$artiname','$fname','$lname','$year','$dept','$filename','$Epoem')";

    $data  = mysqli_query($conn,$query);
    

    if($data)
    {
        echo '<script>alert("Your Data Is Accepted!")</script>';
        ?>
         <meta http-equiv = "refresh" content = "0; url = viewengpoemdata.php"/>
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