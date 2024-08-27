<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="getform.css">  
</head>
<title>Get English Article</title>

<body>
   <nav aria-label="breadcrumb" style="margin-left:40px;">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Ambar.html">Home</a></li>
          <li class="breadcrumb-item"><a href="studash.php">Share Another</a></li>
          <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
        </ol>
      </nav>
    <h1 style="text-align: center;margin-bottom: 2%;">Share your content with us...</h1>
    <div class="container" style=" box-shadow: 1px 1px 9px #842053;">
        <form action="#" method="POST" enctype="multipart/form-data">
            
            <label for="name">Article name</label>
            <input type="text" id="fname" name="articlename" placeholder="Article name..">
            <label for="fname">Author First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your First name..">
            <label for="fname">Author Last Name</label>
            <input type="text" id="fname" name="lastname" placeholder="Your Last name..">

            <label for="year">Year of Study</label>
            <select id="year" name="yearofstudy">
                <option value="First Year">First Year </option>
                <option value="Second Year">Second Year</option>
                <option value="Third Year">Third Year</option>
                <option value="Final Year">Final Year</option>
            </select>

            <label for="department">Department</label>
            <select id="department" name="department">
                <option value="CSE">     CSE</option>
                <option value="CSE-AI">  CSE-AI</option>
                <option value="CSE-AIDS">CSE-AIDS</option>
                <option value="CIVIL">   CIVIL</option>
                <option value="MECH">    MECH</option>
                <option value="E&TC">    E&TC</option>
            </select>
            <div>
                <label for="formFileLg" class="form-label">Upload Image</label>
                <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file" name="image">
              </div>
              <div>
                <label for="formFileLg" class="form-label">Upload File</label>
                <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file" name="article">
              </div>
              <button class="btn btnn" role="button" name="Share">Share</button>       
        </form>
    </div>
</body>
</html>

<?php

include 'connection.php';

    session_start();
    
    error_reporting(0);

    $userprofile = $_SESSION['user_name'];

    if($userprofile == true)
    {
      
    }
    else
    {
      header('location:stulogin.php'); 
    }
  
if(isset($_POST['Share']))
{
    $artiname = $_POST['articlename'];
    $fname    = $_POST['firstname'];
    $lname    = $_POST['lastname'];
    $year     = $_POST['yearofstudy'];
    $dept     = $_POST['department'];

    $allowedextension= array('jpg','png','jpeg');
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $fileextension = pathinfo($filename,PATHINFO_EXTENSION);
    $folder = "Engimage/".$filename;
    move_uploaded_file($tempname,$folder);

    if(!in_array($fileextension, $allowedextension))
   {
    echo '<script>alert("Only .jpg , .png , .jpeg Extensions images are allowed!")</script>';
   }
   else
   {
    $allowedextensions = array('pdf','word','txt','docx');
    $file = $_FILES["article"]["name"];
    $tmpname = $_FILES["article"]["tmp_name"];
    $fileextensions = pathinfo($file,PATHINFO_EXTENSION);
    $folder = "EngArticle/".$file;
    move_uploaded_file($tmpname,$folder);
    
    if(!in_array($fileextensions, $allowedextensions))
   {
    echo '<script>alert("Only .pdf , .word , .txt  , .docx Extensions files are allowed!")</script>';
   }
   else
   {

    if($artiname !="" && $fname !="" && $lname !=""  && $year !="" && $dept !="" && $filename !="" && $file !="")
{
    $query = "INSERT INTO getenglisharticle (articlename,firstname,lastname,yearofstudy,department,image,article) VALUES('$artiname','$fname','$lname','$year','$dept','$filename','$file')";
    $data  = mysqli_query($conn,$query);
    

    if($data)
    {
        echo '<script>alert("Your Data Is Accepted!")</script>';
        ?>
           <meta http-equiv = "refresh" content = "0; url = ty.php"/>
        <?php
    }
    else
    {        
      echo '<script>alert("Data Not Inserted!")</script>';
    }
}
    else
    {
      echo '<script>alert("Please fill the form!")</script>';
    }
 }
}
}
?> 