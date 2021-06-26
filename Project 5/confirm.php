<?php

session_start();
include('connection.php');
if(isset($_GET['token'])){

    $token = $_GET['token'];
    $updatequery = "UPDATE registerr SET statuss='active' WHERE token = '$token'";
    $q = mysqli_query($con, $updatequery);
    if($q){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated!!. Now you can Login";
            header('location:login.php');
        }
        else{
            $_SESSION['msg'] = "You are logged Out!!";
            header('location:login.php');
        }
    }
    else{
        ?>
        <script>
            alert('account not activated');
        </script>
        <?php
        $_SESSION['msg'] = "Account not activated!!";
        header('location:register.php');
    }
}

?>