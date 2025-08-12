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
                           <div class="row cart_box">
                                  <div class="img_side">
                                        <img class="cart_img" src="./image/ps5_ontroller.jpg" alt="product picture">
                                  </div>
                                  <div class="column info_side">
                                        <p class="cart_name">vhjc.cm</p> 
                                        <p class="cart_price">gc,ghcc,</p> 
                                        <p class="cart_quantity">gcc,gc,hcg</p>
                                        <p class="cart_total">fxmbxbxxv</p> 
                                  </div>
                           </div>
                     </div>
           </section>
   </main>