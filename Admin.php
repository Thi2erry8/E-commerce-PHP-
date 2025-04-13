<!DOCTYPE html>
<html lang="en">
<head>
     <title>Admin Panel</title>
<?php 
include('./inc/header.php'); 
include('./func/app.php')
?>
<main> 
      <section class=" Add-product-section column">
         <h1 >Add Product </h1>
               <form method="$_POST" action="" class="Add-product column">
                    
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