<?php 
    include('./inc/header.php'); 
    include('./func/app.php');
     
     $error_msg = "";
   //Register
    if (isset($_POST['register'])) {
       $lastname = $_POST['lastname'];
       $firstname = $_POST['firstname'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $password1 = $_POST['password1'];
       $password2 = $_POST['password2'];

       if($password1 != $password2){
            $error_msg = " passwords don't match ";
       }else if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'")) > 0) {
            $error_msg = "Email already exist."; 
       } else{
             $password = $_POST['password2'];
       
      
         $sql="INSERT INTO
            user (nom,prenom,email,phone,password)
            VALUES ('$lastname','$firstname','$email','$phone','$password') ";

           if(mysqli_query($conn,$sql)){
            
                echo"<script>alert('User Added')</script>"; 
             }else{
                echo" not ok";
                  /* $msg= "Product Not Added"; */
                echo"<script>alert('User Not Added')</script>";    
            }

          }
      }
      
      //login
     if (isset($_POST['Login'])) {
         $email = $_POST['email'] ;
         $password = $_POST['password'] ;

         if($email !="" && $password !=""){
                $req = $conn->query("SELECT * FROM user WHERE email = '$email' AND password = '$password' ");
                $req = $req->fetch_assoc();
             }if($req['id'] != false){
                  echo "vous etes connecter";

             }
             else if($email='admin@gmail.com' && $password='admin1234'){
               header('location: ./Admin.php');
               exit();
             }
             else{
                        $error_msg= " email or password invalid";  
             }
          
          }
     
    
?>  
    
<main>
       <section> 
                 
                 <form class="column signin active" method="post">
                        <div class="Add-product-div">
                              <h2 class="form_title">
                                  Register
                             </h2>
                       </div>
                       <div class="row">
                             <div class="Add-product-div">
                                    <label for="lastname">Your lastname</label>
                                    <input type="text" id="lastname" name="lastname"> 
                                    <i class="ri-user-fill icon_input"></i>                           
                              </div>

                              <div class="Add-product-div">
                                    <label for="firstname">Your firstname</label>
                                    <input type="text" id="firstname" name="firstname">
                                    <i class="ri-user-fill icon_input"></i>
                              </div>
                       </div> 
                       
                       <div class="row">
                              <div class="Add-product-div">
                                      <label for="email">Your email</label>
                                      <input autocomplete="email" type="email" id="email" name="email">
                                      <i class="ri-mail-fill icon_input"></i>
                              </div>
                              <div class="Add-product-div">
                                     <label for="phone">Your phone</label>
                                     <input autocomplete="email" type="phone" id="phone" name="phone">
                                     <i class="ri-phone-fill icon_input"></i>
                              </div>
                       </div>

                       <div class="row">
                            <div class="Add-product-div">
                                  <label for="password1">Your password</label>
                                  <input class="password" id="password1" type="password" name="password1">
                                  <i class="ri-eye-line icon_input" id="reveal_btn"></i>
                            </div>

                            <div class="Add-product-div">
                                 <label for="password2">Confirm your password</label>
                                 <input class="password" id="password2" type="password" name="password2">
                                 <i class="ri-eye-line icon_input" id="reveal_btn"></i>
                            </div>
                       </div>
                       <p id="error" style="color:red;"><?php echo $error_msg; ?></p>
                       <div class="Add-product-div" style="align-items: center;">
                                  <input class="submit_btn" type="submit" value="register" name="register">
                       </div>
                       <p> Already have an account <button class="switch_btn">login</button></p>
                 </form>
                 <form method="post" class="column login">
                        <div class="Add-product-div">
                              <h2 class="form_title">
                                  log in
                              </h2>
                        </div>
                      
                        <div class="Add-product-div">
                                      <label for="email1">Your email</label>
                                      <input autocomplete="email" type="email" id="email1" name="email">
                                      <i class="ri-mail-fill icon_input"></i>
                        </div>

                        <div class="Add-product-div">
                                  <label for="password">Your password</label>
                                  <input  autocomplete="current-password" class="password" id="password" type="password" name="password">
                                  <i class="ri-eye-line icon_input" id="reveal_btn"></i>
                         </div>
                         
                         <div class="Add-product-div" style="align-items: center;">
                                  <input class="submit_btn" type="submit" value="Login" name="Login">
                         </div>
                         <p>Don't have an account <button class="switch_btn">register</button></p>
                 </form>
            
                 <script>
                         setTimeout(function() {
                         const err = document.getElementById("error");
                                if (err) err.remove();
                          }, 3000);
                </script>
                 
       </section>
</main>