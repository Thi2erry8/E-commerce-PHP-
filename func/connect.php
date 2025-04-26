<?php 

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "gamerhouse";
$conn = "";

$conn ="";

$conn = mysqli_connect($db_server,
                       $db_user,
                       $db_pass,
                       $db_name);

      if($conn){
        echo '<i class="ri-wifi-line"></i>';
      }
      else{
        echo '<i class="ri-wifi-line"></i>';
      }

?>