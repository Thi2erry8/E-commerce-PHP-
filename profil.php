<?php
     include('./func/app.php');

    $p_name="";
    $p_price ="";
    $p_description = "";
    $p_category="";
    $p_color="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
     include('./inc/header.php'); 
     
?>
<main>
       <section class="product_info">
                 
                       <div class="product_img_container">
                             <img class="product_img" src="./image/ps5_ontroller.jpg" alt="">
                       </div>

                       <div class="column product_description">
                             <p class="product_name">Ps5 controller</p>
                             <p class="product_category">controller</p>
                             <p class="product_price"><span class="expo_price">$</span>150</p>
                             <p class="product_color">white</p>
                             <p class="product_detail">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                 Placeat nesciunt eum dolorum dignissimos nisi? At laudantium 
                                 repellendus sapiente laboriosam exercitationem.
                             </p> 
                       </div>

                       <div class="column buying_action">
                              <p class="product_price"><span class="expo_price">$</span>150</p>
                              <p class="delivery">Delivry in 3 days</p>
                              <p>In Stock : <span> 125</span> </p>
                              <select name="Quantity" id="">
                                       <option value="1">Quantity :1</option>
                                       <option value="2">Quantity :2</option>
                              </select>
                              <div class="column btn_action">
                                    <button> Add to card </button>
                                    <button> Buy now </button>
                              </div>
                              
                       </div> 
                 
       </section>
       <div class="column same_category">
            <h1>Same category</h1>
            <div class="row">
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
                                                 <!-- <a href="./edit.php?id=27"> -->
                                                    <i class="ri-information-line"></i>
                                                </a>
                                           </button>     
                                      </div>
                                   </div>
                        <?php
                            }
                        ?> 
            </div>
       </div>
</main>
<?php include('./inc/footer.php') ?>