<?php
  $Cont = "SELECT COUNT(*) AS controller FROM product WHERE product_category = 'Controller'";
  $resultCont = $conn->query($Cont);
  $ContNumber = 0;
  
 
  
  if ($resultCont) {
    $dataCont = $resultCont->fetch_assoc();
    $ContNumber = $dataCont['controller'];
    echo $ContNumber ;
    } else {
    echo "Erreur dans la requête : " . $conn->error;
    }
  
?>