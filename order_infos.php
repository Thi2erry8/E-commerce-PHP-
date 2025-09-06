<?php
    session_start();

    include('./func/app.php');
    include('./inc/header.php');
    
    $user_id = $_SESSION['id'];
    $query = "
    SELECT
    c.Quantity,
    p.product_name
    FROM cart c 
    JOIN product p ON c.product_id = p.id
    WHERE c.user_id = $user_id;
    ";
    $result = mysqli_query($conn, $query);
   if (!$result) {
    die("Erreur SQL : " . mysqli_error($conn)); // pour détecter les erreurs SQL
   }

    $produits = "";
    while ($row = mysqli_fetch_assoc($result)){
        $produits .= $row['product_name'] . "(x" .$row['Quantity'] .")\n";
    }

    if(isset($_POST['submit'])){
     
      $O_name = $_POST['Oname'];
      $O_prename = $_POST['Oprename'];
      $O_phone = $_POST['Ophone'];
      $O_addresse = $_POST['Odescrip'];
      
      $to = "jonathanaugustin056@gmail.com";
      $subject = "Nouvelle commande";
      $message = "
      Nouvelle commande reçue :
      Nom : $O_name
      Prénom : $O_prename
      Téléphone : $O_phone
      Adresse : $O_addresse
      Produits commandés: 
      $produits
";
       $headers = "From: " .$_SESSION['email'];
      
       if (mail($to, $subject, $message, $headers) ) {
          echo "Email envoyee";
       }else {
        echo "Erreur";
       }
      

       
}   
   $data1 = "SELECT * FROM product";
   $result = $conn->query($data1);

   if(!$result){
      die("Invalid query :" .$conn->error);
   };

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
       <main>
       <section class=" Add-product-section column">
                 <form method="POST" action="" class="column" enctype="multipart/form-data">
                      <div class="Add-product-div">
                            <h2 class="form_title">
                                 Order Infos
                            </h2>
                      </div>
                      <div class="Add-product-div">
                            <input type="text" name="Oname" placeholder="Your frist name" required>
                      </div>
                      
                      <div class="Add-product-div">
                            <input type="text" name="Oprename" placeholder="Your last name" required>
                      </div>

                      <div class="Add-product-div">
                            <input type="phone"  name="Ophone" placeholder="Your phone" required>
                      </div>

                      <div class="Add-product-div">
                            <textarea name="Odescrip" placeholder="Your addresse" required></textarea>
                      </div>
                      
                      <button type="submit" name="submit"> 
                               Continue
                      </button>
               
                 </form>
      </section>
       </main>
</body>
</html>