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
    JOIN favoris f ON f.product_id = p.id
    WHERE f.user_id = $user_id
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
           <section class="column evenly">
              <h1>Your favorites</h1>
              <div class="product-grid">
                      <?php
                      $i= 0;
                           while($row = $result->fetch_assoc()){
                             $i++;
                              echo"
                                     
                                   <div class='product_card'>
                                       <p style='display:none'>$row[id]'</p>
                                       <div class='id_circle'>
                                           <p>$i</p>
                                       </div>
                                       <div class='img_box'>
                                           <img class='box_img' src='$row[product_img]' alt='$row[product_name]'>
                                       </div>
                                       <div class='info_box colunm'>
                                           <p class='p_one'> $row[product_name]</p> 
                                           <p>$row[color]</p> 
                                      </div>
                                      <div class='action_box row'>
                                           <button class='action_box_btn'>
                                                 <a href='./profil.php?id=$row[id]'>
                                                    <i class='ri-information-line'></i>
                                                </a>
                                           </button>

                                           <button class='action_box_btn'>
                                                <a href='./func/del_fav.php?id=$row[id]'>
                                                   <i class='ri-delete-bin-line'></i>
                                                </a>
                                           </button>     
                                      </div>
                                   </div>
               
                              ";
                           }
                      ?>
                 </div>
                
      </section>
   </main>