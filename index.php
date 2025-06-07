<?php 
    
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
     <title>Document</title>   
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
             <section class="section_product">
                       <div class=" container_product row">
                        <div class="Category">
                               <p>Controller</p>
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
                                                 <!-- <a href="./edit.php?id=27"> -->
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
       