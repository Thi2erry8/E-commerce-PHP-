<?php
  session_start();
  include('./connect.php');

    
  if(!isset($_SESSION['id'])){
     /* echo "<script>alert('Bonjour')</script>"; */
       die("Vous devez être connecté.");  
      
     header('location: ../index.php'); 
  };
  
  if(isset($_POST['produit_id'])){
    $user_id = $_SESSION['id'];
    $produit_id = intval($_POST['produit_id']);
    $sql ="INSERT INTO favoris (user_id,product_id) VALUES ('$user_id','$produit_id')";
    mysqli_query($conn,$sql);

    header('location: ../index.php'); 
}
exit();
?>