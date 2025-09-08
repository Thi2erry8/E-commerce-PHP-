
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link rel="stylesheet" href="./asset/style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="./asset/js/index.js" defer></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript" defer>
   (function(){
      emailjs.init({
        publicKey: "xfESGVZuL4c8YUi6G",
      });
   })();
</script>
</head>
<body>
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

             <div class="right">
                <?= isset($_SESSION['id']) ? 'Bonjour ' .$_SESSION['nom']  :  '' ?>
                <?= isset($_SESSION['id']) ? '<button class="btn-login"> <a href="./cart.php"><i class="ri-shopping-cart-line"></i></a><span class="cart_number">' .$Cart_number .'</span></button>'  :  '' ?>
                <?= isset($_SESSION['id']) ? '<button class="btn-login"> <a href="./favorite.php">favorites</a></button>'  :  '' ?>
                <?= isset($_SESSION['id']) ? '<button class="btn-login log"> <a href="./func/logout.php">logout</a></button>'  :  '<button class="btn-login log"> <a href="./login.php">login</a></button>' ?>
             </div>
    </header>