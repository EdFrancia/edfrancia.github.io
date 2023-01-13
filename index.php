<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduard Francia</title>
    <link rel="shortcut icon" href="images/edu.jpg">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="images/edu.jpg" alt="">
        <h3 class="name">Eduard Francia</h3>
        <p class="post">front end developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Eduard B. Francia</span></h1>
    <p>22 years old from Nagcarlan, Laguna. I'm currently enrolled at Pamantasan ng San Pablo</p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Eduard B. Francia </h3>
        <h3> <span> age : </span> 22 </h3>
        <h3> <span> qualification : </span> BSIT </h3>
        <h3> <span> post : </span> front end developer </h3>
        <h3> <span> language : </span> Filipino </h3>
        <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>


</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>S.Y. 2006-2012</span>
        <h3>Elementary School</h3>
        <p>Abo-Bukal Elementary School</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>S.Y. 2012-2017</span>
        <h3>Junior High School</h3>
        <p>Plaridel Integrated National High School</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>S.Y. 2017-2020</span>
        <h3>Senior High School</h3>
        <p>Plaridel Integrated National High School</p>
    </div>


</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading"> my <span>Gallery</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/2.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/3.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/4.jpeg" alt="">
    </div>

    <div class="box">
        <img src="images/1.jpeg" alt="">
    </div>

    <div class="box">
        <img src="images/5.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/6.jpg" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> <a href="mailto:eduardfrancia08@gmail.com">Eduard Francia</a><br> </h3>
            <h3> <i class="fas fa-phone"></i> 09163247974 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Nagcarlan, Laguna </h3>
        </div>

    </div>

    <form action="">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/edu.jpg" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>