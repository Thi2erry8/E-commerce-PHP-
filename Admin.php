<!DOCTYPE html>
<html lang="en">
<head>
     <title>Admin Panel</title>
<?php 
$msg ="";
include('./inc/header.php'); 
include('./func/app.php');
   if(isset($_POST['submit'])){
     
      $p_name = $_POST['Pname'];
      $p_price = $_POST['Pprice'];
      $p_description = $_POST['Pdescrip'];

      $target_dir = "image/";
      $target_file = $target_dir.basename($_FILES['Pimg']['name']) ;
      move_uploaded_file($_FILES['Pimg']['tmp_name'], $target_file);
   
      $p_category = $_POST['category'];

      $p_color = $_POST['color'];
      
      $sql ="INSERT INTO 
            product (product_name,product_price,product_description,product_img,product_category,color)
             VALUES('$p_name','$p_price','$p_description','$target_file','$p_category','$p_color') " ;

      if(mysqli_query($conn,$sql)){
            
             echo"<script>alert('Product Added')</script>"; 
      }else{
            echo" not ok";
            /* $msg= "Product Not Added"; */
             echo"<script>alert('Product Not Added')</script>";    
      }
}   
   $data1 = "SELECT * FROM product";
   $result = $conn->query($data1);

   if(!$result){
      die("Invalid query :" .$conn->error);
   }
?>
<main>
      <section class="column evenly">
               <h1>Inventory</h1>
               <div class="row">
                     <div class="data_box colunm">
                           <h2>controller</h2>
                           <p style="text-align:center"> <?=$ContNumber ?> </p>
                     </div>

                     <div class="data_box colunm">
                           <h2>Console</h2>
                           <p style="text-align:center"> <?=$ContNumber ?> </p>
                     </div>

                     <div class="data_box colunm">
                           <h2>Accessory</h2>
                           <p style="text-align:center"> <?=$ContNumber ?> </p>
                     </div>
                     <div class="data_box colunm">
                           <h2>PcGaming</h2>
                           <p style="text-align:center"> <?=$ContNumber ?> </p>
                     </div>
               </div>
      </section>


      <section class="column evenly">
              <h1>All products</h1>
              <div class="product-grid">
                      <?php
                      $i= 0;
                           while($row = $result->fetch_assoc()){
                             $i++;
                              echo"
                                   <div class='product_card'>
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
                                                 <a href='./func/edit.php'>
                                                    <i class='ri-edit-fill'></i>
                                                </a>
                                           </button>

                                           <button class='action_box_btn'>
                                                <a href='./func/delete.php'>
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
<?php include('./inc/footer.php') ?>