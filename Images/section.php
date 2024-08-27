<?php 
include 'connection.php';
?> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
 integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
 crossorigin="anonymous" referrerpolicy="no-referrer"/>

<link rel="stylesheet" href="section.css">
<title>Section Page</title>
<div class="container">
    <div class="slide">
        <div class="item" style="background-image: url(skectho.png);">
            <div class="content">
                <div class="name">Sketchography</div>
                <div class="des">In this section we can see different cultures of used for sketching, photo!</div>
                <a href="sectionsketch.php">
                    <button style="border: 1px solid #000;">Sketchs</button>
                </a><br><br>
                <a href="sectionphotography.php" >
                    <button style="border: 1px solid #000;">Photography</button>
                </a>
            </div>
        </div>
        <div class="item" style="background-image: url(marathi.png);">
            <div class="content">
                <div class="name">मराठी</div>
                <div class="des">या विभागात आपण विद्यार्थ्यांचे विविध प्रकारचे लेख आणि कविता पाहू शकतो.</div>
                <a href="viewmarathi.php">
                    <button style="border: 1px solid #000;">पुढे वाचा</button>
                </a>
            </div>
        </div>
        <div class="item" style="background-image: url(hindi.png);">
            <div class="content">
                <div class="name">हिंदी</div>
                <div class="des">इस अनुभाग में हम छात्रों के विभिन्न प्रकार के लेख और कविताएँ देख सकते हैं|</div>
                <a href="viewhindi.php">
                    <button style="border: 1px solid #000;">और पढ़ें</button>
                </a>
            </div>
        </div>
        <div class="item" style="background-image: url(eng.png);">
            <div class="content">
                <div class="name">English</div>
                <div class="des">In this section we can see what kind of articles and poetry is written for Amber!</div>
                <a href='viewenglish.php'>
                    <button style="border: 1px solid #000;">Read More</button>                
                </a>
            </div>
        </div>
    </div>

    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
    <script src="section.js">
    </script>
</div>