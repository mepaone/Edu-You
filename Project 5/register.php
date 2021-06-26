
<?php session_start(); ?>


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
            <a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <!-- <div class="login-form-container">

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

        <div id="register" class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="inputBox">
                    <h3> full Name</h3>
                    <input type="text" value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>" name="name" placeholder="name" required>
                </div>

                <div class="inputBox">
                    <h3>Email</h3>
                    <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" name="email" placeholder="email" required>
                </div>

                <div class="inputBox">
                    <h3>Phone number</h3>
                    <input type="number" value="<?php if (isset($_POST['phone'])) echo $_POST['phone'] ?>" name="phone" placeholder="phone number" required>
                </div>
                <div class="inputBox">
                    <h3>Course Intrested</h3>
                    <input class="how-pos4-parent" value="<?php if (isset($_POST['course'])) echo $_POST['course'] ?>" type="Course Intrested" list="dropdown" name="course" placeholder="Course intrested" required>
                    <datalist id="dropdown">
                        <option value="Engineering">
                        <option value="Pharmacy">
                        <option value="Science">
                        <option value="Management">
                        <option value="Personal Development">
                        <option value="Others, then specify">
                    </datalist>
                </div>
                <div class="inputBox">
                    <h3>College </h3>
                    <input class="how-pos4-parent" value="<?php if (isset($_POST['college'])) echo $_POST['college'] ?>" type="college" list="dropdown2" name="college" placeholder="College Interested" required>

                </div>
                <div class="inputBox">
                    <h3>Password</h3>
                    <input type="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>" name="password" placeholder="Password" required>
                </div>
                <div class="inputBox">
                    <h3>Confirm Password</h3>
                    <input type="password" name="cpassword" placeholder="Confirm Password" required>
                </div>
                <button type="submit" name="submit" class="btn">Register now</button>

                <small style="font-size:20px; color: red; padding:30px;">



                    <?php
                    include("connection.php");

                    ?>

                    <?php
                    if (isset($_POST['submit'])) {

                        $name = mysqli_real_escape_string($con, $_POST['name']);
                        $email = mysqli_real_escape_string($con, $_POST['email']);

                        $phone = mysqli_real_escape_string($con, $_POST['phone']);
                        $course = mysqli_real_escape_string($con, $_POST['course']);

                        $college = mysqli_real_escape_string($con, $_POST['college']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);

                        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
                        // $password = password_hash($pass, PASSWORD_BCRYPT);
                        // $cpassword = password_hash($cpass, PASSWORD_BCRYPT);
                        $token = bin2hex(random_bytes(15));
                        $emailquery = "SELECT * FROM registerr where email = '$email' ";
                        $q = mysqli_query($con, $emailquery);
                        $emailcount = mysqli_num_rows($q);
                    ?>
                         <?php
                        if ($emailcount > 0) {
                            echo "Email Already Exists ";
                        } else if ($password === $cpassword) {
                            $query = "INSERT INTO `registerr`( `name`, `email`, `phone`, `course`, `college`, `password`, `cpassword` , `date`, `token` , `statuss`) VALUES ('$name','$email','$phone','$course','$college','$password','$cpassword', NOW(),'$token','inactive') ";
                            $res = mysqli_query($con, $query);
                            if ($res) {
                                $to_email = "$email";
                                $subject = "Confirmation: Confirm your account";
                                $body = "Hi $name, Click here to activate your acccount -> http://localhost/project6/confirm.php?token=$token";
                                $headers = "From EduYou Educations";
                                if (mail($to_email, $subject, $body, $headers)) {
                                   $_SESSION['msg'] = "check your mail $email to activate your account.";
                                   ?>
                                   <script>
                                       location.replace("login.php");
                                   </script>
                               <?php
                                } else {
                                    echo "Email sending failed...";
                                }
                                echo " \nData inserted properly";
                        ?>
                            <?php
                            } else {
                            ?>
                                <script>
                                    alert("Data NOT inserted!! ");
                                </script>
                    <?php
                            }
                        } else {
                            echo "password not matches";
                        }
                    }
                    ?>




                </small>

                <h3 style="margin-top: 30px;" class="havingaccount"> Already Having Account? <a href="login.php">Login Here</a></h3>
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