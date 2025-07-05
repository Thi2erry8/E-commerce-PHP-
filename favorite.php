<?php 
    session_start();

       if(!isset($_SESSION['id']) ){
     die("Vous devez être connecté.");
        }elseif ($_SESSION['role'] = 'admin') {
     die("Vous devez être connecté en tant que utilisateur.");     
        }

    $user_id = $_SESSION['id'] ;

    $sql= "SELECT * FROM favoris WHERE user_id = '$user_id' ";
    
?>