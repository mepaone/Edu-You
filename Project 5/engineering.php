<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>complete responsive EduYou website</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/final.css">


  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!-- header section starts  -->

  <header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="index.php" class="logo"><i class="fa fa-graduation-cap"></i><span>Edu</span>You</a>

    <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="engineering.php">Engineering</a>
      <a href="management.php">Management</a>
      <a href="science.php">Science</a>
      <a href="pharmacy.php">Pharmacy</a>
      <a href="contact.php">contact</a>
      <a href="about.php">About us</a>
    </nav>

    <div class="icons">
      <i class="fas fa-search" id="search-btn"></i>
      <a href="login.php"> <i class="fas fa-user"  ></i></a>
    </div>

    <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
    </form>

  </header>

  <!-- header section ends -->



  <!-- login form container  -->

  <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
      <h3>login</h3>
      <input type="email" class="box" placeholder="enter your email">
      <input type="password" class="box" placeholder="enter your password">
      <input type="submit" value="login now" class="btn">
      <input type="checkbox" id="remember">
      <label for="remember">remember me</label>
      <p>forget password? <a href="#">click here</a></p>
      <p>don't have and account? <a href="#register">register now</a></p>
    </form>

  </div>
  <!------login form ends---->

  <!-- brand section  -->
  <!-- <section style="margin-top: 100px;" class="brand-container">

    <div class="swiper-container brand-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/sp3.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/sp4.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/sp5.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/sp6.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/sp7.jpg" alt=""></div>
        <div class="swiper-slide"><img src="images/sp8.jpg" alt=""></div>
      </div>
    </div>

  </section> -->
  <!--body starts-->


  <!-- This code used to rotate drop icon(-180deg).. -->


  <div  style="margin-top: 150px;" class="add">
    <marquee behavior="scroll" direction="left">
      <h>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Addmission open for 2021-2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h>
    </marquee>
  </div>

<!-- ,,,,,,,,...................... -->
<script>
  $('nav .button').click(function () {
    $('nav .button span').toggleClass("rotate");
  });
  $('nav ul li .first').click(function () {
    $('nav ul li .first span').toggleClass("rotate");
  });
  $('nav ul li .second').click(function () {
    $('nav ul li .second span').toggleClass("rotate");
  });
</script>


<!-- ............... -->

  <h2  class="name">List of Top Engineering Universities in India</h2>
  <!---------------------------college cards---------------------------------->
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="images/engineering-1.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">IIT-Delhi </h1>
        <p class="title"><img src="images/location.png" width=20px>New Delhi,India</p>
        <p class="new"><a href="https://home.iitd.ac.in/">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/engineering-2.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">Anna University</h1>
        <p class="title"><img src="images/location.png" width=20px>Chennai</p>
        <p class="new"><a href="images/https://www.annauniv.edu/">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/engineering-3.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">Indian Institute of Technology-Madras</h1>
        <p class="title"><img src="images/location.png" width=20px>Chennai,India</p>
        <p class="new"><a href="http://www.iitm.ac.in/">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/engineering-4.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">Thapar University</h1>
        <p class="title"><img src="images/location.png" width=20px>Patilala,India</p>
        <p class="new"><a
            href="http://thapar.edu/Apply/TIET-Admissions/?utm_campaign=OML-Adwords-Btech&utm_source=OML-TIET&utm_keyword=thapar%20university&utm_medium=BGR-PunText1&gclid=CjwKCAjwiLGGBhAqEiwAgq3q_gz6GlGZcBvu3g1Nx6UqjHyxFDlmIim6iqgnwLjqgLMZTe8OaWWiNRoC-wIQAvD_BwE">Get
            College Detail</a> &nbsp; &rsaquo;</p>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/engineering-5.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">IIT- Bombay</h1>
        <p class="title"><img src="images/location.png" width=20px>Mumbai,India</p>
        <p class="new"><a href="https://www.iitb.ac.in/">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/engineering-6.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">VIT-Vellore</h1>
        <p class="title"><img src="images/location.png" width=20px>Udagamandalam,Tamil Nadu</p>
        <p class="new"><a href="https://vit.ac.in/">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="images/engineering-7.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">Jadavpur University</h1>
        <p class="title"><img src="images/location.png" width=20px>Ranchi,Jharkhand</p>
        <p class="new"><a href="https://g.co/kgs/uLMASD">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/engineering-8.jpg" style="width:100px;height:auto;padding-top:10px">
        <h1 class="college">Amity University</h1>
        <p class="title"><img src="images/location.png" width=20px>Noida, India</p>
        <p class="new"><a href="https://www.amity.edu/">Get College Detail</a> &nbsp; &rsaquo;</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <p><a href="apply.php"><button>Apply Now</button></a></p>
      </div>
    </div>
  </div>

  <!-----body ends-->


  




  <!-- footer section  -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>about us</h3>
        <p>Our Aim is to provide the best college to every student in our india. we providely feel to serve u better.
        </p>
      </div>
      <div class="box">
        <h3>branch locations</h3>
        <a href="#">Hyderbad</a>
        <a href="#">chennai</a>
        <a href="#">udaipur</a>
        <a href="#">Delhi</a>
      </div>
      <div class="box">
        <h3>quick links</h3>
        <a href="index.php">home</a>
        <a href="Engineering.php">Engeineering</a>
        <a href="Management.php">Management</a>
        <a href="Science.html">Science</a>
        <a href="Pharmacy.php">Pharmacy</a>
        
        <a href="contact.php">contact</a>
      </div>
      <div class="box">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/">facebook</a>
        <a href="https://www.instagram.com/">instagram</a>
        <a href="https://www.twitter.com/">twitter</a>
        <a href="https://www.linkedin.com/">linkedin</a>
      </div>

    </div>

    <h1 class="credit"> created by <span> Team-5 </span> | all rights reserved! </h1>

  </section>



  <!---------footer section ends--------->








  <!---------js------>



  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="scripts/script.js"></script>


  <script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      }
      else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>

</body>

</html>