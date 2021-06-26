
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive EduYou website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styleabout.css">


    <style>
      input, textarea{
        padding: 5px;
        border-radius: 0.5rem;
      }

      button{
        color: white;
        background-color: rgb(117, 145, 197);
        cursor: pointer;
        padding: 5px;
        border-radius: 2rem;
      }
      form{
        border-radius: 0.5rem;
        box-shadow: 1rem 1rem 1rem 1rem rgb(212, 212, 208);
        padding: 10px;
        background-color: rgb(235, 232, 232);
      }


    </style>

</head>
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
        <a href="login.php"> <i tooltip="User Account" class="fas fa-user" id="login-btn"></i></a>
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


        <p style="text-align: center;"><a href="login.php">login</a></p>

        <p style="text-align: center;">Don't have account? <a href="register.php">Register Now</a></p>
    </form>

</div>



<div style="margin-top: 60px;" class="about-section">
    <figure class="image">
        <img src="images/developers/contact.gif" width="300" height="300">
        <figcaption>
            <div class="caption">
                <h1>Contact Us</h1>
                <p>EduYou is an extensive search engine for the students, parents, and education industry players who
                    are seeking information on higher education sector in India and abroad. One can rely on EduYou.com
                    for getting most brief and relevant data on colleges and universities.

                </p>

            </div>
        </figcaption>
    </figure>
</div>



<section class="team" id="team">

    <h1 class="heading">
        <span>C</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        
        <span></span>
        <span></span>
        <span>u</span>
        <span>s</span>
    </h1>

</section>


<section class="team" id="team">

<div style="margin: auto; text-align:center" class="col-lg-4">
            <div class="info">
              <div class="address">
                <i style="font-size: 30px;" class="fa fa-map-marker"></i>
                <h4 style="font-size: 30px;">Location:</h4>
                <p style="font-size: 20px;">EduYou Manager Office,<br> New Colony,<br> Hyderabad</p>
              </div>

              <div class="email">
                <i style="font-size: 30px;" class="fa fa-envelope"></i>
                <h4 style="font-size: 30px;">Email:</h4>
                <p style="font-size: 20px;">eduyoumanager@info.in</p>
              </div>

              <div class="phone">
                <i style="font-size: 30px;" class="fa fa-phone"></i>
                <h4 style="font-size: 30px;">Call:</h4>
                <p style="font-size: 20px;">+91 8745454545</p>
              </div>

            </div>



            <div class="info">
              <div class="address">
               
                <h4 style="font-size: 30px; margin-top:100px;">Submit Form for Instant Updates</h4>
               
              </div>
            </div>



            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div style="padding: 10px;" class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div style="padding: 10px;" class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div style="padding: 10px;"class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div style="padding: 10px;" class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center">
                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04 m-b-10" type="submit">Send Message</button>
              </div>
            </form>

          </div>


</section>

<section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Our Aim is to provide the best college to every student in our india. we providely feel to serve u better. </p>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    let searchBtn = document.querySelector('#search-btn');
    let searchBar = document.querySelector('.search-bar-container');
    let formBtn = document.querySelector('#login-btn');
    let loginForm = document.querySelector('.login-form-container');
    let formClose = document.querySelector('#form-close');
    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');
    let videoBtn = document.querySelectorAll('.vid-btn');
    window.onscroll = () => {
        searchBtn.classList.remove('fa-times');
        searchBar.classList.remove('active');
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
        loginForm.classList.remove('active');
    }
    menu.addEventListener('click', () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    });
    searchBtn.addEventListener('click', () => {
        searchBtn.classList.toggle('fa-times');
        searchBar.classList.toggle('active');
    });
    formBtn.addEventListener('click', () => {
        loginForm.classList.add('active');
    });
    formClose.addEventListener('click', () => {
        loginForm.classList.remove('active');
    });
    videoBtn.forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelector('.controls .active').classList.remove('active');
            btn.classList.add('active');
            let src = btn.getAttribute('data-src');
            document.querySelector('#video-slider').src = src;
        });
    });
    var swiper = new Swiper(".review-slider", {
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".brand-slider", {
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            450: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
        },
    });
</script>


</body>

</html>




























