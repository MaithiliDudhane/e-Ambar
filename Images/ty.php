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



</head>
<title>
    Thank You Page
</title>
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
        header('location:stulogin.php'); 
        }
?>
    <nav aria-label="breadcrumb" style="margin-left:40px;">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Ambar.html">Home</a></li>
          <li class="breadcrumb-item"><a href="studash.php">Share another Article-Poems</a></li>
          <li class="breadcrumb-item"><a href="section.php">Read Article-Poems</a></li>
          <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
        </ol>
    </nav>

    <div style="background-image: url(thy.png);width: 700px;
                height: 630px;margin-left:25%;">
    </div>
</body>
</html>