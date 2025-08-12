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
     <title>Your cart</title>   
     <?php include('./inc/header.php') ?>
   <main>
           <section class="column evenly">
                     <h2>Your cart</h2>
                     <div class="cart_container">
                           <div class="row">
                                  <div class="img_side">
                                        <img class="cart_img" src="./image/ps5_ontroller.jpg" alt="product picture">
                                  </div>
                                  <div class="info_side">
                                        <p class="cart_name"></p> 
                                        <p class="cart_price"></p> 
                                        <p class="cart_quantity"></p>
                                        <p class="cart_total"></p> 
                                  </div>
                           </div>
                     </div>
           </section>
   </main>