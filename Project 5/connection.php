<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'project5';  


$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
     ?>
     <script>
          alert("Cannot connect Database!!");
     </script>

     <?php

}


?>
