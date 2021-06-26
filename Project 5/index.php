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
        <a href="login.php"> <i  class="fas fa-user" id="login-btn" ></i></a>
        <a style="color:aliceblue; font-size:20px;" href="adminlogin.php">Admin</a>
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>FIND OVER 2500 COLLEGES IN INDIA</h3>
        <p>dicover new Colleges with us, Settled your life</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->



<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>t</span>
        <span>o</span>
        <span>p</span>
        <span class="space"></span>
        <span>c</span>
        <span>o</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/coll1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Guwahati </h3>
                <p>1.  Indian Institute of Technology, Situated on the northern banks of river Bramhaputra, with the other end surrounded by hills and lush greenery </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹190000.00 <span>₹200000.00</span> </div>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/coll2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Srinagar </h3>
                <p>2.  National institute of Technology, When the city itself is so beautiful, it is no wonder why NIT Srinagar is ranked among the most beautiful college campuses in India.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹190000.00 <span>₹200000.00</span> </div>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/coll3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Goa </h3>
                <p>3.  BITS Pilani, Goa The  BITS  Pilani,  Goa  campus  is  surrounded  by  hillocks,  forests,  greenery,  beautiful roads and the Zuari River, all of them adding to the beauty of this campus</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹190000.00 <span>₹200000.00</span> </div>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/coll4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kharagpur </h3>
                <p>IIT  Kharagpur  has  the  largest  campus  which  spreads  over  2000  acres .  The  college buildings were  designed by Swiss architects</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹190000.00 <span>₹200000.00</span> </div>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/coll5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Bengaluru </h3>
                <p>5.  Indian Institute of Science, Located at the heart of Bengaluru, spreading  over 400 acres of land and features six canteens,  a   unisex  gymkhana,</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹190000.00 <span>₹200000.00</span> </div>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/coll6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Roorkee </h3>
                <p>7.  Indian Institute of Technology Situated  at  the  foothills  of  Himalayas,  this  place  is  pure  beauty  with  the  cool weather,  greenery  and  on  campus  gardens.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹190000.00 <span>₹200000.00</span> </div>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable Colleges</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-commenting"></i>
            <h3>Live Chat</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the India</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-user-secret"></i>
            <h3>User Friendly</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Easy Communication</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- new coll section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>N</span>
        <span>e</span>
        <span>w</span>
        <span class="space"></span>
        <span>c</span>
        <span>o</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/1.jpg" alt="">
            <div class="content">
                <h3>Chennai</h3>
                <p>SSN college of Engineering</p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/2.jpg" alt="">
            <div class="content">
                <h3>Dehradun
                </h3>
                <p> Forest Research Institute</p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/3.jpg" alt="">
            <div class="content">
                <h3>Khadakwasla</h3>
                <p>National Defence Academy,  </p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/4.jpg" alt="">
            <div class="content">
                <h3>Hyderabad</h3>
                <p> Indian School Of Business</p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/5.jpg" alt="">
            <div class="content">
                <h3>Ahmedabad</h3>
                <p>National Institute of Design</p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/6.jpg" alt="">
            <div class="content">
                <h3> Vellore</h3>
                <p>Vellore Institute of Technology</p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/7.jpg" alt="">
            <div class="content">
                <h3> Himachal Pradesh</h3>
                <p>Jaypee University of Information Technology</p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/8.jpg" alt="">
            <div class="content">
                <h3>Kozhikode</h3>
                <p>Indian Institute of Management, </p>
                <a href="#" class="btn">Apply now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/9.jpg" alt="">
            <div class="content">
                <h3>Madras</h3>
                <p>Indian Institute of Technology</p>
                <a href="#" class="btn">Apply now </a>
            </div>
        </div>

    </div>

</section>

<!-- new coll section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.jpg" alt="">
                    <h3>Preetham</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.JPG" alt="">
                    <h3>yaswanth</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.JPG" alt="">
                    <h3>surya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.JPG" alt="">
                    <h3>vinay</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->
<!-- register section starts  -->
<!-- <section class="book" id="book">
    <h1 class="heading">
        <span>R</span>
        <span>e</span>
        <span>g</span>
        <span>i</span>
        <span>s</span>
        <span>t</span>
        <span>e</span>
        <span>r</span>
        <span class="space"></span>
        <span>N</span>
        <span>o</span>
        <span>w</span>
    </h1>
    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <h3> full Name</h3>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <h3>Phone number</h3>
                <input type="number" placeholder="phone number">
            </div>
            <div class="inputBox">
                <h3>Email</h3>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <h3>Course Intrested</h3>
                <input type="Course Intrested" placeholder="Course intrested">
            </div>
            <input type="submit" class="btn" value="Register now">
        </form>
    </div>
</section> -->
<!-- register section ends -->
<!-- brand section  -->
<section class="brand-container">
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
</section>
<!-- footer section  -->
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


<!---------footer section ends--------->

<!---------js------>

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
window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}
menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});
searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});
formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});
formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});
videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});
var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
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
    loop:true,
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