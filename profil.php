<?php
session_start();
     include('./func/app.php');

    $p_name="";
    $p_price ="";
    $p_description = "";
    $p_category="";
    $p_color="";
    $p_stock="";

    if($_SERVER['REQUEST_METHOD'] =='GET'){
      // GET METHOD : SHOW THE DATA OF THE CLIENT
      if(!isset($_GET["id"])){
            header("location: ./index.php");
            exit;
      }

      $id = $_GET['id'];

      // read the row of the selected client from database table
      $sql ="SELECT * FROM product WHERE id=$id";
      $result =$conn->query($sql);
      $row = $result-> fetch_assoc();
       $p_name = $row['product_name'];
       $p_price = $row['product_price'];
       $p_description = $row['product_description'];
       $p_category= $row['product_category'];
       $p_image= $row['product_img'];
       $p_color= $row['color'];
       $p_stock= $row['stock'];
    }
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
                             <img class="product_img" src="<?= $p_image?>" alt="">
                       </div>

                       <div class="column product_description">
                             <p class="product_name"><?= $p_name?></p>
                             <p class="product_category"><?= $p_category?></p>
                             <p class="product_price"><span class="expo_price">$</span><?= $p_price?></p>
                             <p class="product_color">white</p>
                             <p class="product_detail">
                                 <?= $p_description ?>
                             </p> 
                       </div>

                       <div class="column buying_action">
                              <p class="product_price"><span class="expo_price">$</span><?= $p_price?></p>
                              <p class="delivery">Delivry in 3 days</p>
                              <p>In Stock : <span> <?= $p_stock?></span> </p>
                              <select  name="Quantity" id="">
                              <?php
                                   $i=1;
                                   while($i<=$p_stock){
                              ?>
                                       <option value="<?= $i?>">Quantity :<?= $i?></option>
                                       
                              
                              <?php
                                  $i++ ;}
                              ?>
                              </select>
                              <div class="column btn_action">
                                <?php 
                                     if (isset($_SESSION['id'])) {
                                     $State = $conn->query(" SELECT * FROM favoris WHERE user_id =" .$_SESSION['id'] ." AND product_id =" .$row['id']) ;
                                     $isInCart = (mysqli_num_rows($State) > 0) ;
                                      $State = $State->fetch_assoc() ;
                                   }
                                ?>
                                <form method="" action="<?= $isInCart ? 'func/del_cart.php' : 'func/add_cart.php'  ?>" style=" width: 100%;" class="row">
                                       <button style="gap: 7%;" class="row" type="submit" name="Tocart">
                                                  <?= $isInCart ? '<p>Remove to cart</p><i class="ri-shopping-bag-fill"></i>' :
                                                                  '<p>Add to cart</p> <i class="ri-shopping-bag-line"></i>'  
                                                  ?> 
                                        </button>
                                </form>
                                    <button> Buy now </button>
                              </div>
                              
                       </div> 
                 
       </section>
       <div class="column same_category">
            <h1>Same category( <?= $p_category?>)</h1>
            <div class="row">
                     <?php  
                            $sql2="SELECT * FROM product WHERE product_category='$p_category' AND id !=$id ";
                            $result2 = $conn->query($sql2) ;  
                            $row = $result2->fetch_assoc(); 

                            while($row=mysqli_fetch_array($result2)){
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
                                      </div>
                                   </div>
                        <?php
                            }
                        ?> 
            </div>
       </div>
</main>
<?php include('./inc/footer.php') ?>