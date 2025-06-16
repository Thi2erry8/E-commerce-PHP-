<!DOCTYPE html>
<html lang="en">
<head>
<?php 
     include('./inc/header.php'); 
     include('./func/app.php');
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
                             <p class="product_infos">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                 Placeat nesciunt eum dolorum dignissimos nisi? At laudantium 
                                 repellendus sapiente laboriosam exercitationem.
                             </p> 
                       </div>

                       <div class="column buying_action">
                              <p class="product_price"><span class="expo_price">$</span>150</p>
                              <p class="delivery">Delivry in 3 days</p>
                              <button> Add to card </button>
                       </div> 
                 
       </section>
</main>
<?php include('./inc/footer.php') ?>