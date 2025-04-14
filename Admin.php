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
      
      $sql ="INSERT INTO 
            product (product_name,product_price,product_description,product_img,product_category)
             VALUES('$p_name','$p_price','$p_description','$target_file','$p_category') " ;

      if(mysqli_query($conn,$sql)){
            
             echo"<script>alert('Product Added')</script>"; 
      }else{
            echo" not ok";
            /* $msg= "Product Not Added"; */
             echo"<script>alert('Product Not Added')</script>";    
      }
}   
?>
<main> 
      <section class=" Add-product-section column">
         <h1 >Add Product </h1>
               <form method="POST" action="" class="Add-product column" enctype="multipart/form-data">
                    
                      <div class="Add-product-div">
                            <input type="text" name="Pname" placeholder="Enter product name" required>
                      </div>

                      <div class="Add-product-div">
                            <input type="number" name="Pprice" placeholder="Enter product price" required>
                      </div>

                      <div class="Add-product-div">
                            <input type="text" name="Pdescrip" placeholder="Enter product description"required>
                      </div>

                      <div class="Add-product-div">
                      <label for="customFile" class="imgLabel">Choose product Image</label> 
                          <input type="file"  name="Pimg" id="customFile" placeholder="Enter product" required>
                    </div>

                      <div class="Add-product-div">
                            <select name="category" required>
                                     <option value="Controller">Controller</option>
                                     <option value="PcGaming">PcGaming</option>
                                     <option value="Console">Console</option>
                                     <option value="Accessory">Accessory</option>
                           </select>
                      </div>
                      <input type="submit" name="submit" value="Add">
               </form>
      </section>
      <section>
         <h1>All products</h1>

      </section>
</main>
<?php include('./inc/header.php') ?>