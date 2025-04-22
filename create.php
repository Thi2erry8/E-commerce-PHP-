<?php

    include('./func/app.php');
    include('./inc/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <main>
       <section class=" Add-product-section column">
               <form method="POST" action="" class="Add-product column" enctype="multipart/form-data">
                      <div class="Add-product-div">
                            <h2 class="form_title">
                                 Add Product
                            </h2>
                      </div>
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
                            <input type="text" name="color">
                      </div>

                      <div class="Add-product-div">
                            <select name="category" required>
                                     <option value="Controller">Controller</option>
                                     <option value="PcGaming">PcGaming</option>
                                     <option value="Console">Console</option>
                                     <option value="Accessory">Accessory</option>
                           </select>
                      </div>
                     
                      <div class="Add-product-div">
                      <label for="customFile" class="imgLabel"> <i class="ri-upload-cloud-line"></i> UPLOAD FILE</label> 
                          <input type="file"  name="Pimg" id="customFile" placeholder="Enter product" required>
                    </div>



                      <input type="submit" name="submit" value="Add">
               </form>
      </section>
       </main>
</body>
</html>