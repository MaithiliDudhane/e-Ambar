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
<title>Get Hindi Poem</title>

<body>
<nav aria-label="breadcrumb" style="margin-left:40px;">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Ambar.html">Home</a></li>
          <li class="breadcrumb-item"><a href="studash.php">Share Another</a></li>
          <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
        </ol>
      </nav>
<div style="text-align: center;margin-bottom: 2%;">
        <h1>अपनी सामग्री हमारे साथ साझा करें...</h1>
    <h3>आप जो जानकारी भरने जा रहे हैं वह हिंदी में होनी चाहिए..!</h3>
</div>
    <div class="container" style=" box-shadow: 1px 1px 9px #842053;">
    <form action="#" method="POST" enctype="multipart/form-data">
            
            <label for="name">कविता का नाम (Poem Name)</label>
            <input type="text" id="fname" name="poemname" placeholder="कविता का नाम..">
            <label for="fname">लेखक का पहला नाम (First Name)</label>
            <input type="text" id="fname" name="firstname" placeholder="पहला नाम..">

            <label for="fname">लेखक का उपनाम नाम (Last Name)</label>
            <input type="text" id="fname" name="lastname" placeholder="उपनाम नाम..">
            
            <label for="year">अध्ययन का वर्ष (Year of Study)</label>
            <select id="year" name="yearofstudy">
                <option value="प्रथम वर्ष">प्रथम वर्ष</option>
                <option value="दूसरा साल">दूसरा साल</option>
                <option value="तृतीय वर्ष">तृतीय वर्ष</option>
                <option value="अंतिम वर्ष">अंतिम वर्ष</option>
            </select>

            <label for="department">
                विभाग (Department)
                </label>
            <select id="department" name="department">
                <option value="सी एस ई">सी एस ई</option>
                <option value="सी एस ई-ए.आय">सी एस ई-ए.आय</option>
                <option value="सी एस ई-ए.आय डी एस">सी एस ई-ए.आय डी एस </option>
                <option value="सिव्हिल">सिव्हिल</option>
                <option value="यांत्रिक">यांत्रिक</option>
                <option value="ई&टी सी">ई&टी सी</option>
            </select>
            <div>
                <label for="formFileLg" class="form-label">तस्विर अपलोड करना (Upload Image)</label>
                <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file" name="image">
              </div>
              <div>
                <label for="formFileLg" class="form-label">कविता (Upload Poem file)</label>
                <input style="margin-bottom: 1%;" class="form-control form-control-lg" id="formFileLg" type="file" name="hindipoem">
              </div>
              
              <button class="btn btnn" role="button" name="Share">शेयर</button>       
        </form>
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
            header('location:stulogin.php'); 
        }

if(isset($_POST['Share']))
{
    $poemname   = $_POST['poemname'];
    $fname      = $_POST['firstname'];
    $lname      = $_POST['lastname'];
    $year       = $_POST['yearofstudy'];
    $dept       = $_POST['department'];

    $allowedextension= array('jpg','png','jpeg');
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $fileextension = pathinfo($filename,PATHINFO_EXTENSION);
   

    if(!in_array($fileextension, $allowedextension))
   {
    echo '<script>alert("Only .jpg , .png , .jpeg Extensions images are allowed!")</script>';
   }
   else
   {
    $allowedextensions = array('pdf','word','txt','docx');
    $file = $_FILES["hindipoem"]["name"];
    $tmpname = $_FILES["hindipoem"]["tmp_name"];
    $fileextensions = pathinfo($file,PATHINFO_EXTENSION);
    
    
    if(!in_array($fileextensions, $allowedextensions))
   {
    echo '<script>alert("Only .pdf , .word , .txt  , .docx Extensions files are allowed!")</script>';
   }
   else
   {

    $folder = "Hindipoemimage/".$filename;
    move_uploaded_file($tempname,$folder);
    $folder = "HindiPoem/".$file;
    move_uploaded_file($tmpname,$folder);
    
    if($poemname !="" && $fname !="" && $lname !=""  && $year !="" && $dept !="" && $filename !="" && $file !="")
{
    $query = "INSERT INTO gethindipoem (poemname,firstname,lastname,yearofstudy,department,image,hindipoem) VALUES('$poemname','$fname','$lname','$year','$dept','$filename','$file')";
    $data = mysqli_query($conn,$query);

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