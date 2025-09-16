


    <?php
          $Cart_number = 0 ;
          if(isset($_SESSION['id'])){
          $Cart = "SELECT SUM(Quantity) AS Nombre FROM cart WHERE user_id = ".$_SESSION['id'] ;
          $resultCart = $conn->query($Cart);
          $row = $resultCart->fetch_assoc();
          $Cart_number = $row['Nombre'];
        }
    ?>
    <header>
             <div class="left">
                   <p  style="font-family: Montserrat;">
                        <a href="./index.php">
                        GAMER'S HOUSE
                        <i class="ri-home-4-line"></i>
                        </a>
                    </p>
             </div>
             <div class="nav-menu">
                   <i class="ri-menu-line"></i>
             </div>
             <div class="right">
                <?= isset($_SESSION['id']) ? 'Bonjour ' .$_SESSION['nom']  :  '' ?>
                <?= isset($_SESSION['id']) ? '<button class="btn-login"> <a href="./cart.php"><i class="ri-shopping-cart-line"></i></a><span class="cart_number">' .$Cart_number .'</span></button>'  :  '' ?>
                <?= isset($_SESSION['id']) ? '<button class="btn-login"> <a href="./favorite.php">favorites <i class=" nav-icon ri-star-line"></i></a></button>'  :  '' ?>
                <?= isset($_SESSION['id']) ? '<button class="btn-login log"> <a href="./func/logout.php">logout <i class="nav-icon ri-login-box-line"></i></a></button>'  :  '<button class="btn-login log"> <a href="./login.php">login <i class="nav-icon ri-user-line"></i></a></button>' ?>
             </div>
    </header>