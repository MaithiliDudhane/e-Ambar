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
<title>Student Login</title>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST">
			<h1 style="margin-bottom: 2%;">Create Account</h1>
			<input type="text" placeholder="First Name" name="fname"/>
			<input type="text" placeholder="Last Name"  name="lname"/>
			<input type="text" placeholder="prn"        name="prn"/>
            <input type="email" placeholder="Email"      name="email"/>
        	<input type="password" placeholder="Password" name="pwd"/>
            <input type="password" placeholder="Confirm Password" name="cpass"/>
			<button style="margin-top: 2%;" name="Register">Register</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1 style="margin-bottom: 4%;">Log In</h1>
			<input type="text" placeholder="prn" name="prn"/>
			<input type="password" placeholder="Password" name="password" />
			<a href="stuforpass.php">Forgot your password?</a>
			<button name="login">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Register</button>
			</div>
		</div>
	</div>
</div>
 <script src="stulogin.js"></script>
</body>

</html>

<?php

    include 'connection.php';
	session_start();
	
    error_reporting(0);

	if(isset($_POST['login']))
{
    $usern  = $_POST['prn'];
	$pwd    = $_POST['password'];

    if($usern !="" && $pwd !="")
{

   $query = "SELECT * FROM sturegister WHERE prn = '$usern' && password = '$pwd' ";
    
    $data  = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
        // echo $total;

	if($total == 1)
	{  
	     $_SESSION['user_name'] = $usern; 
		?>
		<meta http-equiv = "refresh" content = "0; url = studash.php"/>
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

if(isset($_POST['Register']))
{
    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $prn      = $_POST['prn'];
    $email    = $_POST['email'];
    $password = $_POST['pwd'];
	$conpass  = $_POST['cpass'];

     if($fname !="" && $lname !=""  && $prn !="" && $email !="" && $password == "$conpass") 
{
    $query = "INSERT INTO sturegister VALUES('$fname','$lname','$prn','$email','$password','$conpass')";
    $data  = mysqli_query($conn,$query);

    if($data)
    {
        echo '<script>alert("Your Details are accepted,You can Login!")</script>';
    }
    else
    {
        echo '<script>alert("Data Not Inserted!")</script>';
    }
}
else
{
	echo '<script>alert("Please fill the form OR  Your Password is Wrong!")</script>';
}
}
?>