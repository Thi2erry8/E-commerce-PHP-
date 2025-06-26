<?php
  session_start();
  
  if(!isset($_SESSION['id'])){
     die("Vous devez être connecté.");
  }

  if(isset($_POST['id'])){
    $user_id = $_SESSION['id'];
    $product_id = $_POST['id'] ;

    $sql ="INSERT INTO favoris (user_id,product_id) VALUES ($user_id,$product_id)";
    mysqli_query($con,$sql);

    header("location:" .$_SESSION['prev_page']);
}
?>