<?php
 include 'connection.php';
//  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!----======== CSS ======== -->
	<link rel="stylesheet" href="admindash.css">

	<!----===== Boxicons CSS ===== -->
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<title>Admin Dashboard</title>
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
	<div class='dashboard'>
		<div class="dashboard-nav">
			<header class="brand-logo">

				<span style="color: white;">eAMBAR</span>
			</header>
			<nav class="dashboard-nav-list">
				<a href="ambar.html" class="dashboard-nav-item"><i class="fas fa-home"></i>
					Home </a>
					<a href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>
					 dashboard
                    </a>	
					<div class='dashboard-nav-dropdown'>
					   <a href="#!"
						 class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-photo-video"></i>
						 View All Posts 
					   </a>
					   <div class='dashboard-nav-dropdown-menu'>
						 <a href="viewmarathiartidata.php" class="dashboard-nav-dropdown-item">Marathi Articles</a>
						 <a href="viewmarathipoemdata.php" class="dashboard-nav-dropdown-item">Marathi Poems</a>
						 <a href="viewhindiartidata.php"   class="dashboard-nav-dropdown-item">Hindi Articles</a>
						 <a href="viewhindipoemdata.php"   class="dashboard-nav-dropdown-item">Hindi Poems</a>
						 <a href="viewengartidata.php"     class="dashboard-nav-dropdown-item">English Article</a>
						 <a href="viewengpoemdata.php"     class="dashboard-nav-dropdown-item">English Poems</a>
						 <a href="viewphotographydata.php" class="dashboard-nav-dropdown-item">Photography</a>
					  	 <a href="viewsketchdata.php"      class="dashboard-nav-dropdown-item">Sketches</a>
					   </div>
				   </div>			
                    <div class='dashboard-nav-dropdown'>
					<a href="#!"
						class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-file-upload"></i> Uploaded </a> </a>
					<div class='dashboard-nav-dropdown-menu'>
						<a href="uploadedmarathiarticle.php" class="dashboard-nav-dropdown-item">Marathi Article</a>
						<a href="uploadedmarathipoem.php"    class="dashboard-nav-dropdown-item">Marathi Poem</a>
						<a href="uploadedhindiarticle.php"   class="dashboard-nav-dropdown-item">Hindi Article</a>
						<a href="uploadedhindipoem.php"      class="dashboard-nav-dropdown-item">Hindi Poem</a>
						<a href="uploadedenglisharticle.php" class="dashboard-nav-dropdown-item">English Article</a>
						<a href="uploadedenglishpoem.php"    class="dashboard-nav-dropdown-item">English Poem</a>
						<a href="uploadedphotography.php"    class="dashboard-nav-dropdown-item">Photography</a>
						<a href="uploadedsketch.php"         class="dashboard-nav-dropdown-item">Sketches</a>
					</div>
				</div>
				<div class='dashboard-nav-dropdown'><a href="#!"
						class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Students </a>
					<div class='dashboard-nav-dropdown-menu'>
						<a href="stuinfo.php" class="dashboard-nav-dropdown-item">All</a>
					</div>
				</div>
				<!-- <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a> -->
				<a href="adminprofile.php" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
				<div class="nav-item-divider"></div>
				<a href="logoutadmin.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
			</nav>
		</div>
		<div class='dashboard-app'>
		  <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
			<div class='dashboard-content'>
				<div class='container' >
					<div class='card'id="uploadfiles">
						<div class='card-header'>
							<h1>Dashboard</h1>
						</div>
						<div class='card-body'>
						<section style="background-color: #eee;">
 					     <div class="container py-5">
  						 <div class="row">
    					 <div class="col">  
      					 </div>
    				</div>
					<div class="row" style="">
      					<div class="col-lg-4">
       					 <div class="card mb-4">
         					<div class="card-body text-center">
           					 <img src="tlogo.png" alt="avatar"
            				  class="rounded-circle img-fluid" style="width: 150px;">
            					<p class="text-muted mb-4">DKTE Magazine</p>
            					<div class="d-flex justify-content-center mb-2">
								<a href="https://www.dkte.ac.in/ambar"><button  type="button" data-mdb-button-init data-mdb-ripple-init >Follow</button></a>
              					<a href="section.php"><button  type="button" data-mdb-button-init data-mdb-ripple-init >Read Content</button></a>
            				</div>
          				</div>
        			</div>
        			<div class="card mb-4 mb-lg-0">
          				<div class="card-body p-0">
           				 <ul class="list-group list-group-flush rounded-3">
            			  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
             			 	  	<i class="fas fa-globe fa-lg text-warning"></i>
              			 		 <p class="mb-0">https://www.dkte.ac.in/</p>
              				</li>
             			 <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               			 <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
               			 <p class="mb-0">@https://twitter.com/dktestei</p>
              				</li>
             			 <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              			  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
               			 <p class="mb-0">
							DKTE Ichalkaranji (@dktestei) </p>
             			 </li>
              				<li class="list-group-item d-flex justify-content-between align-items-center p-3">
               				<i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                			<p class="mb-0">https://www.facebook.com/dktestei/</p>
              				</li>
            			</ul>
          			</div>
        		</div>
      		</div>
            <div class="col-lg-8">
             <div class="card mb-4">
               <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0" style="color:#000;">eAmbar</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">2421300
				</p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">eAmbar@dkte.com</p>
              </div>
            </div>
			<hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Rajwada, Ichalkaranji, Maharashtra 416115
				</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
			   <div class="card-body" style="padding:20px;">
			  		<div class="card" style="width: 18rem;">
					  <img src="marathi.png" class="card-img-top" alt="...">
              			<div class="card-body">
    						<h5 class="card-title">Marathi</h5>
    						<p class="card-text">Total Article Posted</p>
							<div style="font-size:20px;">
    						<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM getmarathiarticle";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);
								   if($total != 0)
								{
								   echo $total;
							    } 
							?>
							</div>
			                <p class="card-text">Total Poems Posted</p>
							<div style="font-size:20px;">
							<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM getmarathipoem";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);

								   if($total != 0)
								  {
									echo $total;
								   } 
							?>
							</div>
  						</div>
					</div>
					<div class="card" style="width: 18rem;">
					<img src="hindi.png" class="card-img-top" alt="...">
 					 	<div class="card-body">
  						  <h5 class="card-title">Hindi</h5>
  						  <p class="card-text">Total Article Posted</p>
  						  <div style="font-size:20px;">
    						<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM gethindiarticle";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);
								   if($total != 0)
								  {
									echo $total;
								  } 
							?>
							</div>
			                <p class="card-text">Total Poems Posted</p>
							<div style="font-size:20px;">
							<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM gethindipoem";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);

								   if($total != 0)
								  {
									echo $total;
								  } 
							?>
							</div>
 					 	</div>
					</div>
					<div class="card" style="width: 18rem;">
					<img src="eng.png" class="card-img-top" alt="...">
 					 	<div class="card-body">
    						<h5 class="card-title">English</h5>
   							<p class="card-text">Total Article Posted</p>
							   <div style="font-size:20px;">
    						<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM getenglisharticle";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);
								   if($total != 0)
								  {
									echo $total;
								  } 
							?>
							</div>
			                <p class="card-text">Total Poems Posted</p>
							<div style="font-size:20px;">
							<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM getenglishpoem";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);

								   if($total != 0)
								  {
									echo $total;
								  } 
							?>
							</div>
  						</div>
					</div>	
               </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body" style="padding:20px;">
			  <div class="card" style="width: 18rem;">
					<img src="photogra.jpg" class="card-img-top" alt="...">
 					 	<div class="card-body">
  						  <h5 class="card-title">Phography</h5>
  						  <p class="card-text">Total Phography Posted</p>
  						  <div style="font-size:20px;">
    						<?php
							   include 'connection.php';
							  error_reporting(0);
							  $query = "SELECT * FROM getphography";
 							  $data  = mysqli_query($conn,$query);
 							  $total  = mysqli_num_rows($data);
							   if($total != 0)
							  {
								echo $total;
							  } 
							?>
							</div>
 					 	</div>
					</div>
			  		<div class="card" style="width: 18rem;">
					  <img src="skectho.png" class="card-img-top" alt="...">
              			<div class="card-body">
    						<h5 class="card-title">Sketches</h5>
    						<p class="card-text">Total Sketches Posted</p>
							<div style="font-size:20px;">
    						<?php
							      include 'connection.php';
								  error_reporting(0);
								  $query = "SELECT * FROM getsketch";
 								  $data  = mysqli_query($conn,$query);
 								  $total  = mysqli_num_rows($data);
								   if($total != 0)
								  {
									echo $total;
								  } 
							?>
							</div>
  						</div>
					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="admindash.js">
	</script>
</body>
</html>
