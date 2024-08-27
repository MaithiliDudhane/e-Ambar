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
			<a href="section.php">
              <button class="btn button" style="  font-size: 19px; padding: 10px 25px; margin: 1px;margin-top: 2%;"
              role="button" name="back">Back</button> 
           </a>	
	<div id="stuinfo" class='container' style="margin-top:40px;">
		<div class='card'>
			<div class='card-header'>
				<h1>English Article</h1>
			</div>
			<div class='card-body' style="font-size:18px;color:#000;">
				<!DOCTYPE html>
				<html>
				<head>
				<title>
                Uploaded English Article
				</title>
				</head>
				<body>
  				<?php
				include 'connection.php';
				error_reporting(0);
				$query = "SELECT * FROM uploadenglisharticle";
 				$data  = mysqli_query($conn,$query);
 				$total  = mysqli_num_rows($data);
				if($total != 0)
				{
 				   ?>
              		<table style="border:1px;margin-top:20px;">
						<tr>
							<th>Index</th>
							<th>Article name</th>
							<th>Authors Name</th>
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
                  <td>".$result['firstname']." ".$result['lastname']."</td>
							    <td>
                   <a href='sectionenglish.php?eaid=$result[id]' >
								   <button class='button' name='read'>Read</button>
								   </a>
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
	<div id="stuinfo" class='container' style="margin-top:40px;">
		<div class='card'>
			<div class='card-header'>
				<h1>English Poem</h1>
			</div>
			<div class='card-body' style="font-size:18px;color:#000;">
				<!DOCTYPE html>
				<html>
				<head>
				<title>
                Uploaded English Data
				</title>
				</head>
				<body>
  				<?php
				include 'connection.php';
				error_reporting(0);
				$query = "SELECT * FROM uploadenglishpoem";
 				$data  = mysqli_query($conn,$query);
 				$total  = mysqli_num_rows($data);
				if($total != 0)
				{
 				   ?>
              		<table style="border:1px;margin-top:20px;">
						<tr>
							<th>Index</th>
							<th>Poem name</th>
							<th>Authors Name</th>
							<th>Action</th>
						</tr>
					<?php
					$id=1;
    				while( $result = mysqli_fetch_assoc($data))
    				{
              echo "
              <tr>
                 <td>".$id."</td>
                 <td>".$result['poemname']."</td>
                 <td>".$result['firstname']." ".$result['lastname']."</td>
                 <td>
                  <a href='sectionengpoem.php?epid=$result[id]' >
                  <button class='button' name='read'>Read</button>
                  </a>
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

