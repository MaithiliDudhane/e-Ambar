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
    <link rel="stylesheet" href="adminlogin.css">
	
</head>
<title>Admin Login</title>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
	
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1 style="margin-bottom: 4%;">Log In</h1>
			<input type="text" placeholder="Username" name="usern"/>
			<input type="password" placeholder="Password" name="pass" />
			<a href="adminforpass.php">Forgot your password?</a>
			<button name="login">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<!-- <div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Log In</button>
			</div> -->
			<div class="overlay-panel overlay-right">
				<h1>Hello, Admin!</h1>
				<p>Enter your Username , Password  And start your journey!</p>
			</div>
		</div>
	</div>
</div>
 <script src="adminlogin.js"></script>
</body>

</html>

<?php

 include 'connection.php';
 
	 error_reporting(0);
 
	 session_start();
	 
if(isset($_POST['login']))
{
    $username  = $_POST['usern'];
	$pwd       = $_POST['pass'];

    if($username !="" && $pwd !="")
{

  $query = "SELECT * FROM adminregister WHERE username = '$username' && password = '$pwd' ";
    
    $data  = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

        // echo $total;

	if($total == 1)
	{
		$_SESSION['user_name'] = $username; 
       ?>
	     <meta http-equiv = "refresh" content = "0; url =admindash.php"/>
	   <?php
	}	
	else
	{
       echo '<script>alert("Failed To Login!")</script>';
	}
		
}
else
{
	echo '<script>alert("Fill Username & Password!")</script>';
}
}

?>
