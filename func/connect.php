<?php 

$db_server = "sql105.infinityfree.com";
$db_user = "if0_39849868";
$db_pass = "nograS009k5MvfO";
$db_name = "f0_39849868_portfolio";


$conn = mysqli_connect($db_server,
                       $db_user,
                       $db_pass,
                       $db_name);

      if (!$conn) {
    die("Erreur connexion MySQL : " . mysqli_connect_error());
}

?>
