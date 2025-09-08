<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "✅ PHP fonctionne<br>";
$db_server = "sql105.infinityfree.com";
$db_user = "if0_39849868";
$db_pass = "nograS009k5MvfO";
$db_name = "if0_39849868_portfolio";


$conn = mysqli_connect($db_server,
                       $db_user,
                       $db_pass,
                       $db_name);

      if (!$conn) {
    die("Erreur connexion MySQL : " . mysqli_connect_error());
}

?>
