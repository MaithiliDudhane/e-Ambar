<!DOCTYPE html>
<html lang="en">

<head>
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
<a href="admindash.php">
              <button class="btn button" style="  font-size: 19px; padding: 10px 25px; margin: 1px;margin-top: 2%;"
              role="button" name="back">Back</button> 
           </a>	
	<div id="stuinfo" class='container' style="margin-top:40px;">
		<div class='card'>
			<div class='card-header'>
				<h1>Marathi Article</h1>
			</div>
			<div class='card-body'>
				<!DOCTYPE html>
				<html>
				<head>
				<title>
				   View Marathi Article
				</title>
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
					
				$query = "SELECT * FROM getmarathiarticle";
 				$data  = mysqli_query($conn,$query);
 				$total  = mysqli_num_rows($data);
				if($total != 0)
				{
 				   ?>
              		<table style="border:1px;margin-top:20px;">
					<tr>
					    <th>ID</th>
						<th>Article Name</th>
						<th>First Name</th>
                    	<th>Last Name</th>
                    	<th>Year of Study</th>
						<th>Department</th>
						<th>Image</th>
						<th>Article</th>
						<th>Action</th>
					</tr>
					<?php
					$id=1;
    				while( $result = mysqli_fetch_assoc($data))
    				{
     					echo "
							 <tr>
								<td>".$id."</td>
								<td>".$result['articlename']."</td>
								<td>".$result['firstname']."</td>
								<td>".$result['lastname']."</td>
								<td>".$result['yearofstudy']."</td>
								<td>".$result['department']."</td>
								<td><img src= 'Marathiimage/".$result['image']."' height='80px' width='100px' >
								<a download='Marathiimage/".$result['image']."' href= 'Marathiimage/".$result['image']."'>"
								.$result['image']."</a></td>
								<td><a href= 'MarathiArticle/".$result['Marathiarticle']."'>".$result['Marathiarticle']."
								</a></td>
								<td><a href='uploadmarathiarti.php?uid=$result[id]'><button class='button' 
								name='upload'>Upload</button></a>
								<a href='deletemarathiartidata.php?dvmaid=$result[id]'><button class='button'
								onclick = 'return checkdelete()' name='delete'>Delete</button></a>
								</td>      
                             </tr>";
							 $id++;
  					}
				}
				 else
				{
 				  echo "No";
				}
				?>
				</table>
				</body>
				</html>
				</div>
				</div>
				</div>
				</body>			
				</html>

				<script> 
				function checkdelete()
				{
				return confirm('Are You Sure To Delete This Record ?');
				}
				</script>