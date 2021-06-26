<?php
include("connection.php");
session_start();
if (!isset($_SESSION['email'])) {
    echo "You are logged out!!";
    header('location:login.php');
}

$id = $_GET['id'];
$selectquery = "SELECT * from `apply` where id= '$id'";
$showdata = mysqli_query($con, $selectquery);
$arraydata = mysqli_fetch_array($showdata);


if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $bdate = $_POST['bdate'];

    $qual = $_POST['qual'];

    $course = $_POST['course'];
    $college  = $_POST['college'];

    $fadd  = $_POST['fadd'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];

    $uni = $_POST['uni'];
    $uniadd  = $_POST['uniadd'];
    $maxmark = $_POST['maxmark'];
    $minmark = $_POST['minmark'];

    


        
        
        $query = "UPDATE `apply` SET `fname`='$fname',`lname`='$lname',`email`='$email',`gender`='$gender',`father`='$father',`mother`='$mother',`dob`='$bdate',`hq`='$qual',`course`='$course',`college`='$college',`fadd`='$fadd',`state`='$state',`zip`='$zip',`country`='$country',`uni`='$uni',`uniadd`='$uniadd',`maxmark`='$maxmark',`minmark`='$minmark',`registerdate`= NOW() WHERE id = $id";

        $res = mysqli_query($con, $query);
    
    if ($res) {
?>
        <script>
            alert("Updated Successfully!!");
            location.replace("index2.php");
        </script>
<?php
    } else {
        echo " NOT updated";
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        label {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 13px;
            color: #666;
            line-height: 22px;
        }

        legend {
            color: #fff;
            background-color: #095484;
            padding: 3px 5px;
            font-size: 20px;
        }

        h1 {
            position: absolute;
            margin: 0;
            font-size: 36px;
            color: #fff;
            z-index: 2;
        }

        .testbox {
            display: flex;
            margin-left: 10%;
            margin-right: 10%;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
        }

        form {
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 20px 0 #095484;
        }

        .banner {
            position: relative;
            height: 320px;
            background-image: url("images/engineering-4.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .banner::after {
            content: "";
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        input {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
        }

        select {
            width: 100%;
            padding: 7px 0;
            background: transparent;
        }

        input[type="date"] {
            padding: 4px 5px;
        }

        .item:hover p,
        .item:hover i,
        .question:hover p,
        .question label:hover,
        input:hover::placeholder {
            color: #095484;
        }

        .item input:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 6px 0 #095484;
            color: #095484;
        }

        .item {
            position: relative;
            margin: 10px 0;
        }

        .item span {
            color: red;
        }

        input[type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        .item i,
        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            font-size: 20px;
            color: #095484;
        }

        .item i {
            right: 2%;
            top: 30px;
            z-index: 1;
        }

        [type="date"]::-webkit-calendar-picker-indicator {
            right: 1%;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        .question span {
            margin-left: 30px;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #095484;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #4286f4;
        }

        @media (min-width: 568px) {

            .name-item,
            .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .name-item input,
            .city-item input,
            .name-item div {
                width: calc(50% - 20px);
            }

            .name-item div input {
                width: 97%;
            }

            .name-item div label {
                display: block;
                padding-bottom: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="testbox">
        <form method="POST" action="">
            <div class="banner">
                <h1>Application Form <hr><hr><br></h1>
                <h1>(update)</h1>
            </div>
            <p>Please fill out with the information that is requested below and submit.</p>
            <p style="color:red">**Ensure before submit that you are entering same email as register email</p>
            <hr />
            <fieldset>



                <legend>Personal Information</legend>
                <div class="item">
                    <label for="name">Name<span>*</span></label>
                    <div class="name-item">
                        <input id="fname" type="text" name="fname" value="<?php  echo $arraydata['fname'] ?>" placeholder="First" required />
                        <input id="lname" type="text" name="lname" value="<?php  echo $arraydata['lname'] ?>" placeholder="Last" required />
                    </div>
                </div>


                <div class="item">
                    <label>Email<span>*</span></label>
                    <input id="email" type="text" name="email" value="<?php echo $arraydata['email'] ?>" required />
                </div>


                <div class="item">
                    <label>Gender<span>*</span></label>
                    <div class="name-item">
                        <input id="gender" type="text" name="gender" value="<?php  echo $arraydata['gender'] ?>" placeholder="Gender" required />

                    </div>
                </div>


                <div class="item">
                    <label>Father's Name<span>*</span></label>
                    <input id="father" type="text" name="father" value="<?php  echo $arraydata['father'] ?>" required />
                </div>



                <div class="item">
                    <label>Mother's Name<span>*</span></label>
                    <input id="mother" type="text" name="mother" value="<?php echo $arraydata['mother'] ?>" required />
                </div>

                <div class="item">
                    <label for="bdate">Date of Birth<span>*</span></label>
                    <input id="bdate" type="date" name="bdate" value="<?php  echo $arraydata['dob'] ?>" required />
                    <i class="fas fa-calendar-alt"></i>
                </div>

                <div class="item">
                    <label>Highest Qualification<span>*</span></label>
                    <input id="qual" type="text" name="qual" value="<?php echo $arraydata['hq'] ?>" required />
                </div>



                <!-- newly added -->


                <div class="item">
                    <label>Course<span>*</span></label>
                    <input id="course" type="text" name="course" value="<?php  echo $arraydata['course'] ?>" required />
                    <datalist>
                        <option value="Engineering">
                        <option value="Pharmacy">
                        <option value="Science">
                        <option value="Management">
                        <option value="Personal Development">
                        <option value="Others, then specify">
                    </datalist>
                </div>

                <div class="item">
                    <label>College<span>*</span></label>
                    <input id="college" type="text" name="college" value="<?php  echo $arraydata['college'] ?>" required />
                </div>


                <!-- newly added ends -->

                <label>Address<span>*</span></label>

                <div class="name-item">



                    <input type="text" name="fadd" value="<?php  echo $arraydata['fadd'] ?>" placeholder="House, colony, district, city" />
                    <input type="text" name="state" value="<?php  echo $arraydata['state'] ?>" placeholder="Province/State" />
                    <input type="text" name="zip" value="<?php  echo $arraydata['zip'] ?>" placeholder="Postal/Zip code" />

                    <input class="how-pos4-parent" name="country" value="<?php  echo $arraydata['country'] ?>" type="country" list="dropdown" placeholder="Country" required>
                    <datalist id="dropdown">
                        <option value="If other, Specify">
                        <option value="India">
                        <option value="USA">
                        <option value="Japan">
                        <option value="Australia">
                        <option value="Italy">
                        <option value="France">
                        <option value="China">
                        <option value="UK">
                        <option value="Cannada">
                        <option value="Russia">
                        <option value="Israel">
                        <option value="Germany">
                    </datalist>

                </div>
            </fieldset>
            </br>



            <fieldset>
                <legend>Qualification</legend>

                <div class="item">
                    <label>Previous University/Board<span>*</span></label>
                    <input id="uni" type="text" name="uni" value="<?php echo $arraydata['uni'] ?>" required />

                </div>
                <div class="item">
                    <label>Previous University Address<span>*</span></label>
                    <input id="uniadd" type="text" name="uniadd" value="<?php  echo $arraydata['uniadd'] ?>" required />
                </div>

                <div class="item">
                    <label>Marks<span>*</span></label>
                    <div class="name-item">
                        <input id="maxmark" type="number" name="maxmark" value="<?php echo $arraydata['maxmark'] ?>" placeholder=" Maximaum Marks" required />
                        <input id="minmark" type="number" name="minmark" value="<?php echo $arraydata['minmark'] ?>" placeholder="Obtained Marks" required />
                    </div>
                </div>






            </fieldset>

            <br>

            <!-- <fieldset>
                <legend>Uploads</legend>

                <div class="item">
                    <label>Add Resume<span style="color: blueviolet;">* maximum size 100kb</span></label>
                    <input id="resfile" type="file" name="resumefile" value="" required />

                </div>
                <div class="item">
                    <label>Add Profile Image<span style="color: blueviolet;">* maximum size 100kb</span></label>
                    <input id="imgfile" type="file" name="imagefile" value="" required />
                </div>

                <div class="item">
                    <label>Add Signature<span style="color: blueviolet;">* maximum size 100kb</span></label>
                    <input id="sigfile" type="file" name="signaturefile" value="" required />
                </div>


            </fieldset>

            <br> -->


            <fieldset>

                <legend>Agreement</legend>
                <div class="item">
                    <p class="agreement">*I agree that all the information provided by me is correct. <br> *If any information found false, then I will be ready to face the consequences.</p>
                </div>



                <div class="item">
                    <p>Click on checkbox to agree <a href="https://www.css3templates.co.uk/terms.html" target="https://www.css3templates.co.uk/terms.html">terms and conditions</a></p>
                    <input type="checkbox" id="check" name="check" required />


                </div>


            </fieldset>
            <div class="btn-block">
                <button type="submit" name="submit">APPLY</button>
            </div>
        </form>
    </div>
</body>

</html>