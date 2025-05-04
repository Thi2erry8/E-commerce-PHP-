<?php 
    include('./inc/header.php'); 
    include('./func/app.php');
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
                                    <input type="text" name="lastname"> 
                                    <i class="ri-user-fill icon_input"></i>                           
                              </div>

                              <div class="Add-product-div">
                                    <label for="firstname">Your firstname</label>
                                    <input type="text" name="firstname">
                                    <i class="ri-user-fill icon_input"></i>
                              </div>
                       </div> 
                       
                       <div class="row">
                              <div class="Add-product-div">
                                      <label for="email">Your email</label>
                                      <input type="email" name="email">
                                      <i class="ri-mail-fill icon_input"></i>
                              </div>
                              <div class="Add-product-div">
                                     <label for="phone">Your phone</label>
                                     <input type="phone" name="phone">
                                     <i class="ri-phone-fill icon_input"></i>
                              </div>
                       </div>

                       <div class="row">
                            <div class="Add-product-div">
                                  <label for="password1">Your password</label>
                                  <input type="password" name="password1">
                                  <i class="ri-lock-fill icon_input"></i>
                            </div>

                            <div class="Add-product-div">
                                 <label for="password2">Confirm your password</label>
                                 <input type="password" name="password2">
                                 <i class="ri-lock-fill icon_input"></i>
                            </div>
                       </div>

                       <div class="Add-product-div" style="align-items: center;">
                                  <input class="submit_btn" type="submit" value="Sing up" name="Sing up">
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
                                      <label for="email">Your email</label>
                                      <input type="email" name="email">
                                      <i class="ri-mail-fill icon_input"></i>
                        </div>

                        <div class="Add-product-div">
                                  <label for="password">Your password</label>
                                  <input type="password" name="password">
                                  <i class="ri-lock-fill icon_input"></i>
                         </div>
                         
                         <div class="Add-product-div" style="align-items: center;">
                                  <input class="submit_btn" type="submit" value="Login" name="Login">
                         </div>
                         <p>Don't have an account <button class="switch_btn">register</button></p>
                 </form>
            
            
                
       </section>
</main>