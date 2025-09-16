<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


 $db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "gamerhouse"; 

/* $db_server = "localhost";
$db_user = "u465150164_root";
$db_pass = "18026Abz$";
$db_name = "u465150164_GamerHouse"; */

$conn = mysqli_connect($db_server,
                       $db_user,
                       $db_pass,
                       $db_name);

      if (!$conn) {
    die("Erreur connexion MySQL : " . mysqli_connect_error());
}

?>
