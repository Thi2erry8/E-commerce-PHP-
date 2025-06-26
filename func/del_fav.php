<?php
  session_start();
  
  if(!isset($_SESSION['id'])){
     die("Vous devez être connecté.");
  }

  if(isset($_POST['id'])){
    $user_id = $_SESSION['id'];
    $product_id = $_POST['id'] ;

    $sql ="DELETE * FROM favoris WHERE user_id ='$user_id' AND product_id ='$product_id' ";
    mysqli_query($con,$sql);

    header("location:" .$_SESSION['prev_page']);
}
exit();
?>