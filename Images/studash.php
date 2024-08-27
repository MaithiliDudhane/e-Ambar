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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" href="studash.css">
</head>

<body>
  <!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
  </head>
<title>Student Dashboard</title>
  <body>
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="tlogo.png" alt="">
          </span>

          <div class="text logo-text">
            <span class="name">eAmbar </span>
            <span class="profession">DKTE</span>
          </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
      </header>

      <div class="menu-bar">
        <div class="menu">

          <ul class="menu-links" style=" padding-left: 0rem">
            <li class="nav-link">
              <a href="Ambar.html">
                <i class='bx bx-home-alt icon'></i>
                <span class="text nav-text">Home</span>
              </a>
            </li>
            
            <li class="nav-link">
              <a href="section.php">
                <i class='bx bx-wallet icon'></i>
                <span class="text nav-text">Read Articles</span>
              </a>
            </li>

          </ul>
        </div>

        <div class="bottom-content">
          <li class="">
            <a href="logout.php">
              <i class='bx bx-log-out icon'></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
        </div>
      </div>

    </nav>

    <section class="home">
      <div style="text-align: center;">

       <?php
         include 'connection.php';
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

        <h1>Share your Artistic ideas with us!</h1>
        <h2>By choosing appropriate option given below</h2>
      </div>
      <div class="container">
        <div class="row" style="margin-left: 40px;margin-top: 3%;">
          <a href="http://localhost/Ambar/getmarathiarticle.php" class="card education">
            <div class="overlay"></div>
            <div class="circle">
              <svg width="71px" height="76px" viewBox="29 14 71 76" version="1.1"
                style="background-image: url(icon1.png);" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
              </svg>
            </div>
            <p>Marathi Article</p>
          </a>
          <a href="http://localhost/Ambar/getMarathipoem.php" class="card education">
            <div class="overlay"></div>
            <div class="circle">
              <svg width="71px" height="76px" viewBox="29 14 71 76" version="1.1"
                style="background-image: url(icon1.png);" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
              </svg>
            </div>
            <p>Marathi Poem</p>
          </a>
        <a href="http://localhost/Ambar/getHindiarticle.php" class="card credentialing">
          <div class="overlay"></div>
          <div class="circle">
            <svg width="64px" height="72px" viewBox="27 21 64 72" version="1.1" style="background-image: url(icon.png);"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
          </div>
          <p>Hindi Article</p>
        </a>
        <a href="http://localhost/Ambar/gethindipoem.php" class="card credentialing">
          <div class="overlay"></div>
          <div class="circle">
            <svg width="64px" height="72px" viewBox="27 21 64 72" version="1.1" style="background-image: url(icon.png);"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
          </div>
          <p>Hindi Poem</p>
        </a>
      </div>
      <div class="row" style="margin-left: 40px;">

        <a href="http://localhost/Ambar/getEnglisharticle.php" class="card human-resources">
          <div class="overlay"></div>
          <div class="circle">
            <svg width="66px" height="77px" viewBox="1855 26 66 77" version="1.1"
              style="background-image: url(icon4.png);" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
          </div>
          <p>English Article</p>
        </a>
        <a href="http://localhost/Ambar/getEnglishpoem.php" class="card human-resources">
          <div class="overlay"></div>
          <div class="circle">
            <svg width="66px" height="77px" viewBox="1855 26 66 77" version="1.1"
              style="background-image: url(icon4.png);" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
          </div>
          <p>English Poem</p>
        </a>
        <a href="http://localhost/Ambar/getphotography.php" class="card wallet">
          <div class="overlay"></div>
          <div class="circle">
            <svg width="78px" height="60px" viewBox="23 29 78 60" version="1.1"
              style="background-image: url(icon3.png);" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
          </div>
          <p>Photography</p>
        </a>
        <a href="http://localhost/Ambar/getsketch.php" class="card wallet">
          <div class="overlay"></div>
          <div class="circle">
            <svg width="78px" height="60px" viewBox="23 29 78 60" version="1.1"
              style="background-image: url(icon3.png);" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
            </svg>
          </div>
          <p>Sketch</p>
        </a>
      </div>
      </div>
    </section>

    <script src="studashbtn.js"></script>
  </body>

  </html>
 