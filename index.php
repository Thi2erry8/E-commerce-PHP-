<?php 
    session_start(); 
    $_SESSION['prev_page'] = $_SERVER['REQUEST_URI'];

    include('./func/app.php');
      //SelectDataProduct
     
     
      $sqlCont= "SELECT * FROM product WHERE product_category= 'Controller' " ;
      $sqlCons= "SELECT * FROM product WHERE product_category= 'Console' " ;
      $sqlPcgam= "SELECT * FROM product WHERE product_category= 'PcGaming' " ;
      $sqlAcess= "SELECT * FROM product WHERE product_category= 'Accessory' " ;

      //ResultForProduct
      $resultCont = mysqli_query($conn,$sqlCont);
      $resultCons = mysqli_query($conn,$sqlCons);
      $resultPcgam = mysqli_query($conn,$sqlPcgam);
      $resultAcess = mysqli_query($conn,$sqlAcess);

      //

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>GamerHouse</title>   
     <?php include('./inc/header.php') ?>
    <main>
             <div class="hero">
                 <!-- " -->
             <div class="hero-text">
                        <p>Le gaming est un art. Chez GamerHouse, 
                            nous fournissons les pinceaux.
                        </p>
                  </div>   
                  <div style="background-image: url('./image/ps5_ontroller.jpg')" class="hero_img">
                        <!-- <img src="./image/ps5_ontroller.jpg" alt=""> -->
                  </div> 
             </div>
             <section class="section_product column">
                       <div class=" container_product row">
                        <div class="Category">
                               <!-- <h2>Pc Gaming</h2> -->
                        </div>
                       <?php
                            $i=0;
                            $isfavorite = false ;
                        
                        
                            while($row=mysqli_fetch_array($resultCons)){
                                 
                            if (isset($_SESSION['id'])) {
                                $State = $conn->query(" SELECT * FROM favoris WHERE user_id =" .$_SESSION['id'] ." AND product_id =" .$row['id']) ;
                                $isfavorite = (mysqli_num_rows($State) > 0) ;
                                $State = $State->fetch_assoc() ;
                            }
                            
                           
                           
                        ?>
                                                                <div class="product_card2">

                                       <p style="display:none">27'</p>
                                       <form method="post" action=" <?= $isfavorite ? './func/del_fav.php' : './func/add_fav.php' ?> " class="id_circle2">
                                             <input type="hidden" name="produit_id" value="<?= $row['id'] ?>">
                                             <button class="fav_btn" type="submit">
                                               <?= $isfavorite ? '<i class="ri-heart-fill"></i>':'<i class="ri-heart-line"></i>' ?>    
                                             </button>
                                       </form>
                                       <div class="img_box">
                                           <img class="box_img" src="<?= $row['product_img'] ?>" alt="GAMDIAS ATX Mid Tower">
                                       </div>
                                       <div class="info_box colunm">
                                             <p class="p_one"> <?= $row['product_name']  ?></p> 
                                             <p><?= $row['color'] ?></p> 
                                             <p><?= $row['product_price'] ?> $</p>
                                      </div>
                                      <div class="action_box row">
                                           <button class="action_box_btn2">
                                                 <a href='./profil.php?id= <?=$row['id'] ?>'> 
                                                    <i class="ri-information-line"></i>
                                                </a>
                                           </button>

                                           <button class="action_box_btn2">
                                                <!-- <a href="./delete.php?id=27"> -->
                                                   <i class="ri-shopping-cart-line"></i>
                                                </a>
                                           </button>     
                                      </div>
                                   </div>
                        <?php
                           $i++;
                        }
                        ?>  

                       </div>
                      
                       <!-- Controller -->
                     <div class=" container_product row">
                        <div class="Category">
                               <h2>Controller</h2>
                        </div>
                       <?php
                            while($row=mysqli_fetch_array($resultCont)){
                        ?>
                                                                <div class="product_card2">

                                       <p style="display:none">27'</p>
                                       <div class="id_circle2">
                                           <i class="ri-heart-line"></i>
                                       </div>
                                       <div class="img_box">
                                           <img class="box_img" src="<?= $row['product_img'] ?>" alt="GAMDIAS ATX Mid Tower">
                                       </div>
                                       <div class="info_box colunm">
                                             <p class="p_one"> <?= $row['product_name'] ?></p> 
                                             <p><?= $row['color'] ?></p> 
                                             <p><?= $row['product_price'] ?> $</p>
                                      </div>
                                      <div class="action_box row">
                                           <button class="action_box_btn2">
                                                 <a href='./profil.php?id= <?=$row['id'] ?>'>
                                                    <i class="ri-information-line"></i>
                                                </a>
                                           </button>

                                           <button class="action_box_btn2">
                                                <!-- <a href="./delete.php?id=27"> -->
                                                   <i class="ri-shopping-cart-line"></i>
                                                </a>
                                           </button>     
                                      </div>
                                   </div>
                        <?php
                            }
                        ?>  

                       </div>
                       
                                              <div class=" container_product row">
                        <div class="Category">
                               <h2>Pc Gaming</h2>
                        </div>
                       <?php
                            while($row=mysqli_fetch_array($resultPcgam)){
                        ?>
                                     <div class="product_card2">

                                       <p style="display:none">27'</p>
                                       <div class="id_circle2">
                                           <i class="ri-heart-line"></i>
                                       </div>
                                       <div class="img_box">
                                           <img class="box_img" src="<?= $row['product_img'] ?>" alt="GAMDIAS ATX Mid Tower">
                                       </div>
                                       <div class="info_box colunm">
                                             <p class="p_one"> <?= $row['product_name'] ?></p> 
                                             <p><?= $row['color'] ?></p> 
                                             <p><?= $row['product_price'] ?> $</p>
                                      </div>
                                      <div class="action_box row">
                                           <button class="action_box_btn2">
                                                 <a href='./profil.php?id= <?=$row['id'] ?>'>
                                                    <i class="ri-information-line"></i>
                                                </a>
                                           </button>

                                           <button class="action_box_btn2">
                                                <!-- <a href="./delete.php?id=27"> -->
                                                   <i class="ri-shopping-cart-line"></i>
                                                </a>
                                           </button>     
                                      </div>
                                   </div>
                        <?php
                            }
                        ?>  

                       </div>
                    </section>
                    
                
    </main>
       