<?php 
 include 'connection.php';
?> 
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
    <link rel="stylesheet" href="stulogin.css">

</head>
<body>

<div class="container" style="width: 400px;" id="container">
	<div class="form-container">
		<form method="POST">
			<h1 style="margin-bottom: 4%;">Re-Set Password</h1>
			<input type="text" placeholder="prn" name="username"/>
            <input type="password" placeholder="New Password" name="newpass" />
			<input type="password" placeholder="Retype Password" name="retype" />
			<button name="Change" style="margin-top: 20px;">Change Passward</button>
		</form>
	</div>
</div>
</body>

</html>

<?php

if(isset($_POST['Change']))
{
    $username         = $_POST['username'];
    $newpassword      = $_POST['newpass'];
    $retypepassword   = $_POST['retype'];

    if($username !="" && $newpassword =="$retypepassword")
{
    $query = "UPDATE `sturegister` SET `password`='$newpassword',`confirmpass`='$retypepassword' WHERE prn = '$username'";
    $data = mysqli_query($conn,$query);

    if($data)
    {
      ?>
        <meta http-equiv = "refresh" content = "0; url = stulogin.php"/>
     <?php
    }
else
{        
echo '<script>alert("Data Not Inserted!")</script>';
}
}
else
{
echo '<script>alert("Please fill the form OR Password Incorrect!")</script>';
}
}
?> 