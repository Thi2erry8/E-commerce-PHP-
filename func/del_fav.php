<?php
  session_start();
  include('./connect.php');

  if(!isset($_SESSION['id'])){
     die("Vous devez être connecté.");
  }

  if(isset($_POST['produit_id'])){
    $user_id = $_SESSION['id'];
    $product_id = intval($_POST['produit_id']); 
    echo $user_id;
    echo $product_id;

    $sql ="DELETE FROM favoris WHERE user_id ='$user_id' AND product_id ='$product_id' ";

    /* if (!mysqli_query($conn,$sql)) {
    die("Erreur SQL : " . ; // pour détecter les erreurs SQL
   } */
   

    header("location:" .$_SESSION['prev_page']); 
}
  
     if(isset($_GET['id'])){
    $user_id = $_SESSION['id'];
    $product_id = intval($_GET['id']); 
    echo $user_id;
    echo $product_id;

    $sql ="DELETE FROM favoris WHERE user_id ='$user_id' AND product_id ='$product_id' ";
    
    mysqli_query($conn,$sql);
    /* if (!mysqli_query($conn,$sql)) {
    die("Erreur SQL : " . ; // pour détecter les erreurs SQL
   } */
   

   header("location:" .$_SESSION['prev_page']); 
}
exit();
?>