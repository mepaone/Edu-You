<?php

include 'connection.php';
session_start();
if(!isset($_SESSION['email'])){
    echo "You are logged out!!";
    header('location:login.php');
}

 $ids = $_GET['id'];

 $delete = "DELETE from `apply` where id = $ids ";
 $query = mysqli_query($con,$delete);

 if($query){
    ?>

<script>
alert("Deleteed Sucessfully!!")
location.replace('index2.php');
</script>
    <?php
 }

?>