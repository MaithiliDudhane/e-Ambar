<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 


    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="readbook.css">

</head>
<title>Section Marathi Article</title>

<body>
<?php
 include 'connection.php';
error_reporting(0);

 $id= $_GET['maid'];

 $query = "SELECT * FROM uploadmarathiarticle WHERE id=$id";

 $data  = mysqli_query($conn,$query);
 $total  = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);
 
?>
  <div class="book">
    <div class="page">
      <div class="front cover">
        <h1>AMBER</h1>
        <p>2024<br>DKTE</p>
      </div>
      <div class="back" style="color: black;">
        <div>
          <div>
            <img src="ttlogo.png" style="width: 262px; height: 129px;margin: 2% 4% -25% 27%;">
          </div>
         <span><hr></span>
         <div style="text-align:center;">
         <h1 style="margin-top:30%;" >        
         <?php echo $result['articlename'];
         ?>
         </h1>
         <h2>         
         <?php echo $result['firstname'];
               echo " ";
               echo $result['lastname'];
         ?>
         </h2>
         <h3>
         <?php echo $result['yearofstudy'];
               echo ", ";
               echo $result['department'];
         ?>
         </h3><span><hr><hr></span>
       </div>
        <div style="padding:5% 4% 0% 6%;;font-size: 16px;">
          <?php echo $result['summery'];?>
      </div>
   </div>
    </div>
  </div>
  
    <div class="page">
      <div class="front">
        <div style="padding:5% 11% 0% 6%;;font-size: 16px;">
          <?php echo $result['summerysec'];?>
        </div>
        <div style="height: 25%;width: 50%;margin: 0% 23% 0% 26%; ">
        <?php echo "<img src= 'uploadmarathiartiimg/".$result['image']."'>";?>
        </div>
        <div style="padding:5% 4% 0% 6%;;font-size: 16px;">
          <?php echo $result['summerythird'];?>
        </div>
      </div>
      <div class="back">
        <div style="padding:5% 4% 0% 6%;;font-size: 16px;">
          <?php echo $result['marathiarticle'];?>
        </div>
      </div>
    </div>
  
    <div class="page">
      <div class="front">
        <img src="https://picsum.photos/id/1073/600/600" alt="Img 2">
      </div>
      <div class="back cover">
        <h3>That's all, folks</h3>
             <h1>AMBER</h1>
        <p>2024.<br>Second edition</p>
      </div>
    </div>
  </div>
  <script src="readbook.js"></script>

  <a href="viewmarathi.php" >
    <button class="btnn">READ RELATED</button>
  </a>

  </body>
  </html>