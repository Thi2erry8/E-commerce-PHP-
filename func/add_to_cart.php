<?php
       session_start();
        include('./connect.php');
       
        if(!isset($_SESSION['id'])){
       /* echo "<script>alert('Bonjour')</script>"; */
       die("Vous devez être connecté.");  
      
       /* header('location: ../profil.php'); */ 
       };

      if(isset($_POST['produit_id'])){
      $user_id = $_SESSION['id'];
      $produit_id = intval($_POST['produit_id']);
      $quantity = intval($_POST['quantity']);
      $sql ="INSERT INTO cart (user_id,product_id,Quantity) VALUES ('$user_id','$produit_id',$quantity)";
      mysqli_query($conn,$sql); 

      header('location: '.$_SESSION['prev_page']); 
     }
/* exit(); */
?>