<?php
    include('./app.php');
    include('../inc/header.php');

    $p_name="";
    $p_price ="";
    $p_description = "";
    $p_category="";
    $p_color="";
    
    if($_SERVER['REQUEST_METHOD'] =='GET'){
       // GET METHOD : SHOW THE DATA OF THE CLIENT
       /* if (!isset($_GET["id"]) ){
        header("location: /admin.php ");
        exit;
       } */

       $id = $_GET['id'];

       //readb the row of the selected client from database table
       $sql ="SELECT * FROM product WHERE id=$id";
       $result = $connection->query($sql);
       $row = $result->fetch_assoc();

       $p_name = $row['product_name'];
       $p_price = $row['product_price'];
       $p_description = $row['product_description'];
       $p_category= $row['product_category'];
       $p_color= $row['color'];

    } else{
        $id =  $_POST['id'];
        $p_name = $_POST['product_name'];
        $p_price = $_POST['product_price'];
        $p_description = $_POST['product_description'];
        $p_category= $_POST['product_category'];
        $color= $_POST['color'];

        do{
            $sql ="UPDATE product".
            "SET  product_name = '$p_name', product_price = ' $p_price' , product_price='$p_description' , product_category=' $p_category' , color = '$color' ".
            "WHERE id =$id";

            $result = $connection->query($sql);
             
            header("location: /admin.php");
        }
        while(false);
    }

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
                     <input type="hidden" value="<?php echo $id; ?>">
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