<?php 
    session_start();
    $_SESSION['prev_page'] = $_SERVER['REQUEST_URI'];
    include('./func/app.php');
       if(!isset($_SESSION['id']) ){
     die("Vous devez être connecté.");
        }elseif ($_SESSION['role'] == 'admin') {
     die("Vous devez être connecté en tant que utilisateur.");     
        }

    $user_id = $_SESSION['id'] ;

$query = "
    SELECT p.* FROM product p
    JOIN cart c ON c.product_id = p.id
    WHERE c.user_id = $user_id
";
$result = mysqli_query($conn, $query);
   if (!$result) {
    die("Erreur SQL : " . mysqli_error($conn)); // pour détecter les erreurs SQL
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Your favorites</title>   
     <?php include('./inc/header.php') ?>
   <main>