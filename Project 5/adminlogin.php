<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

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
            <a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->
    <!-- 
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

</div> -->

    <!-- home section starts  -->



    <!-- register section starts  -->

    <section style="margin-top: 100px;" class="book" id="book">

        <h1 class="heading">

            <span>A</span>
            <span>d</span>
            <span>m</span>
            <span>i</span>
            <span>n</span>
            <span class="space"></span>
            <span>L</span>
            <span>o</span>
            <span>g</span>
            <span>i</span>
            <span>n</span>



        </h1>

        <div id="register" class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
              

                
                <div class="inputBox">
                    <h3>Username</h3>
                    <input type="name" name="username" placeholder="username" required>
                </div>
                <div class="inputBox">
                    <h3>Password</h3>
                    <input type="password" name="password" placeholder="password" required>
                </div>

                <button type="submit" name="submit" class="btn">Login</button>
                <!-- <input type="submit" name="submit" class="btn" value="Register now"> -->
                <small style="color:red; font-size:20px;">






                    <?php

                    if (isset($_POST['submit'])) {

                        $username = $_POST['username'];
                        $_SESSION['username'] = $username;
                        // $_SESSION['email'] = $email;

                        $password = $_POST['password'];

                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        $user_search = "SELECT * FROM adminlog WHERE user = '$username'";

                        $query = mysqli_query($con, $user_search);
                        $user_count = mysqli_num_rows($query);

                        if ($user_count) {
                            $user_pass = mysqli_fetch_assoc($query);
                            $db_pass = $user_pass['password'];
                            // echo "$db_pass";
                            // echo "$password";
                            // echo strcmp($db_pass,$password);
                            // $pass_decode = password_verify($hashed_password, $db_pass);

                            if (!strcmp($db_pass,$password)) {
                                echo "Login Successful";
                                ?>
                                    <script>
                                        alert('Sucessfully Logged In');
                                        location.replace('adminpage.php')

                                    </script>
                                <?php
                            } else {
                                echo "Password Incorrect";
                            }
                        } else {
                            echo "Invalid Details!!";
                        }
                    }
                    ?>









                </small>

               
            </form>

        </div>

    </section>

    <!-- register section ends -->




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

    <!-- custom js file link  -->
    <script src="scripts/script.js"></script>

</body>

</html>