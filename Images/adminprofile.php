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

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!----======== CSS ======== -->
	<link rel="stylesheet" href="admindash.css">

	<!----===== Boxicons CSS ===== -->
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
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

?>
           <a href="admindash.php">
              <button class="btn button" style="  font-size: 19px; padding: 10px 25px; margin: 1px;background-color:#e41e85;color:white;"
              role="button" name="back">Back</button> 
           </a>	
    <div class='container' id="profile" style="margin-top:40px;">
		<div class='card'>
			<div class='card-header'>
				<h1>Admin Profile</h1>
			</div>
			<div class='card-body'>
			<!DOCTYPE html>
			<html>
			<head>
			<title>
				Admin Profile
			</title>
			</head>
			<body>
			<section style="background-color: #eee;">
				<div class="row">
				  <div class="col-lg-12">
				     <div class="card mb-12">
				          <div class="card-body text-center">
								<img src="adminpro.jpg" alt="avatar" class=" img-fluid" style="width: 150px;"><br>
								<?php
								include 'connection.php';
								error_reporting(0);
								$query = "SELECT * FROM adminregister";
								$data  = mysqli_query($conn,$query);
								$total  = mysqli_num_rows($data);
								if($total != 0)
								{  
								?>
								<div style="font-size:20px;color:#000;">
								<?php    
								while( $result = mysqli_fetch_assoc($data))
								{
								echo "
								<tr>
								<td>".$result['username']."</td>
								</tr>";
								}
								}
								else
								{
								echo "No";
								}
								?>
								<p class="text-muted mb-4" style="font-size:15px;color:black;">ADMIN ,eAmbar DKTE</p>
								</div>
								<div class="d-flex justify-content-center mb-2">
								<a href="logoutadmin.php">
								<button  type="button" data-mdb-button-init data-mdb-ripple-init>LogOut</button></a>
						   </div>
				      </div>
				  </div>
			   </div>
           </section>
			<?php
				include 'connection.php';
				error_reporting(0);
				$query = "SELECT * FROM adminregister";
				$data  = mysqli_query($conn,$query);
				$total  = mysqli_num_rows($data);
				if($total != 0)
				{
			?>
			<table style="border:1px;margin-top:20px;">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>Email</th>
				</tr>
				<?php
					while( $result = mysqli_fetch_assoc($data))
					{
						echo "
						<tr>
						<td>".$result['firstname']."</td>
						<td>".$result['lastname']."</td>
						<td>".$result['username']."</td>
						<td>".$result['email']."</td>
						</tr>";
					}
				}
				else
				{
				 echo "No";
				}
				?>
			</table>
		</div>
	 </div>
</body>
</html>
			