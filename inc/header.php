<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link rel="stylesheet" href="./asset/style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="./asset/js/index.js" defer></script>
</head>
<body>
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
                
                <?= isset($_SESSION['id']) ? '<button class="btn-login"> <a href="./favorite.php">favorites</a></button>'  :  '' ?>
                    <button class="btn-login"> <a href="./login.php">login</a></button>


             </div>
    </header>