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
  <link rel="stylesheet" href="viewsketch.css">

</head>
<title>Section Sketch</title>
<style>
  div.outset {border-style: outset;}
</style>

<body>
           <div class="container outset" style="width:520px; margin-top:5%; margin-bottom:5%;" >
           <a href="section.php">
              <button class="btn button" style="font-size: 19px; 
              padding: 10px 25px; margin: 1px;background-color:#e41e85;color:white;"
              role="button" name="back">Back</button> 
           </a>
           <?php
                include 'connection.php';
                  error_reporting(0);
                $query = "SELECT * FROM uploadsketch";
                $data  = mysqli_query($conn,$query);
                $total  = mysqli_num_rows($data);
                if($total != 0)
                {?>
                  <div class="container" style="margin-top:5%; margin-bottom:5%;" >
                 <?php 
                  while( $result = mysqli_fetch_assoc($data))
                  {
                   echo"<img src= 'uploadsketch/".$result['uploadedsketch']."' height='40%' width='40%' alt='no'/>";?>
                    <h3>
                       <?php  
                          echo $result['firstname'];
                          echo " ";
                          echo $result['lastname'];
                          ?><br>
                          <?php
                          echo $result['yearofstudy'];
                          echo ", ";
                          echo $result['department'];
                         ?>
                        </h3>
                       <?php 
                       }
                       }
                       else
                       {
                         echo "No";
                       }
                     ?>  
                     </div>
                    </div>
                    </body>
                    </html>