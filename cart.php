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
    SELECT 
    c.user_id,
    c.product_id,
    c.Quantity,
    p.product_name,
    p.product_price,
    p.product_description,
    p.product_img,
    p.product_category,
    p.color,
    p.stock,
    (p.product_price * c.Quantity) AS total
FROM cart c
JOIN product p ON c.product_id = p.id
WHERE c.user_id = $user_id;
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
           <section class="cart row evenly">
                     <div class="cart_container column"> 
                         <h2>Your cart</h2>
                         <?php
                         $i= 0 ;
                         $SommeTotal= 0;
                         while($row = $result ->fetch_assoc()){
                            echo"
                              <div class='row cart_box'>
                                  <div class='img_side'>
                                        <img class='cart_img' src='$row[product_img]' alt='product picture'>
                                  </div>
                                  <div class='column info_side'>
                                        <p style='text-align:center; width:100%' class='cart_name'>$row[product_name]</p>   
                                       
                                        <div class='info_side_box row'>
                                        <p> Quantity :</p>
                                        <p class='cart_quantity'>$row[Quantity]</p>
                                        </div>

                                        <div class='info_side_box row'>
                                        <p> Total :</p>
                                        <p class='cart_total'>$row[total]</p> 
                                        </div>
                                  </div>
                           </div>
                           
                           ";
                           $SommeTotal += $row['total'];
                              }
                           ?> 
                          
                     </div>
                     <div  class="total_container column">
                            <div style="justify-content: start;" class="row"><h2>Order Summary</h2></div>
                            <div style="justify-content:space-between; width:55%" class="row">
                                   <p>Items :</p>
                                   <p> <?= $Cart_number ?> </p>
                            </div>
                            <div style="justify-content:space-between; width:55%" class="row">
                                   <p>total :</p>
                                   <p>  <?= $SommeTotal ?> </p>
                            </div>
                            <div class="row"> 
                                   <Button class="Toconnect_btn"><a href="./payment.php
                                   ">Go to checkout</a><i class="ri-arrow-right-line"></i></Button>
                            </div>
                     </div>
           </section>
   </main>