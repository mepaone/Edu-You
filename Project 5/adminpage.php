<?php
include("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
?>
    <script>
        alert('Logged Out!!');
        location.replace('index.php')
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


    <style>
        table {
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }
    </style>

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



    <section style="margin-top: 100px;" class="wrapper" id="Services">

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <!-- <h2 class="servi">Our Services</h2> -->
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8" style=" font:20px bold; text-align: center;">
                            <div>



                                <a href="adminlogout.php"><button class="btn">Logout</button></a>

                            </div>
                        </div><!-- /End col -->
                    </div><!-- /End row -->

                </div>

            </div>
        </div>
        <!-- Service End -->

    </section>




    <!-- personal details -->
    <section class="wrapper" id="Services">
        <div style="margin: 10px;" class="container text-center m-b-100">
            <h1 style="font-size: 25px; text-align:center; padding:30px;">List of Applications </h1>
            <div class="center-div">
                <div style="font-size: 20px;" class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Form ID.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                                <th>Date of Birth</th>

                                
                                <th>Maximum Marks</th>
                                <th>Obtained Marks</th>
                                <th>Percentage</th>

                                <th >Operations</th>

                            </tr>
                        </thead>

                        <?php
                       
                        $q = "SELECT * FROM `apply` ";
                        $dq = mysqli_query($con, $q);
                        while ($result = mysqli_fetch_array($dq)) {

                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $result['id']; ?></td>
                                    <td><?php echo $result['fname']; ?> <?php echo $result['lname']; ?></td>

                                    <td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['gender']; ?></td>
                                    <td><?php echo $result['father']; ?></td>
                                    <td><?php echo $result['mother']; ?></td>
                                    <td><?php echo $result['dob']; ?></td>

                                    <td><?php echo $result['maxmark']; ?></td>
                                    <td><?php echo $result['minmark']; ?></td>

                                    <td><?php echo (round(($result['minmark']/$result['maxmark'])*100,2)) ?></td>



                                    <th><a href="adminview.php?id=<?php echo $result['id']; ?>">details</a></th>
                                   

                                  

                                </tr>
                            </tbody>

                        <?php }  ?>
                    </table>
                </div>
            </div>

        </div>

    </section>



  



    <!-- end display -->


    







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