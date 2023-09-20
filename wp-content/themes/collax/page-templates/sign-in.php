<?php
/**
* Template Name: Sign In
* @package collax
*/
get_header();
?>
<main>

   <!--login-area-start -->
   <div class="tp-login-area">
      <div class="container-fluid p-0">
         <div class="row gx-0 align-items-center">
            <div class="col-xl-6 col-lg-6 col-12">
               <div class="tp-login-thumb login-space sky-bg d-flex justify-content-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/login.png" alt="sec-img">
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12">
               <div class="tp-login-wrapper login-space d-flex justify-content-center">
                  <div class="tplogin">
                     <div class="tplogin__title">
                        <h3 class="tp-login-title">Login your Account</h3>
                     </div>
                     <div class="tplogin__form">
                        <form action="#">
                           <div class="tp-mail">
                              <label for="mail">Enter your Email</label>
                              <input type="text" placeholder="Enter your Mail" id="mail">
                           </div>
                           <div class="tp-password">
                              <label for="Password">Enter Password</label>
                              <input type="password" placeholder="Enter your password" id="Password">
                           </div>
                           <div class="tp-forgot-password d-flex justify-content-between">
                              <div class="checkbox">
                                 <input type="checkbox" id="Remember" name="fav_language" value="Remember">
                                 <label for="Remember">Remember me</label>
                              </div>
                              <div class="forgot">
                                 <a href="#">Forgot password?</a>
                              </div>
                           </div>
                           <div class="tp-login-button">
                              <button class="tp-btn-yellow w-100" type="submit">Sign In</button>
                           </div>
                           <div class="tp-signup d-flex justify-content-between">
                              <div class="account">
                                 <a href="#">Don’t have an account?</a>
                              </div>
                              <div class="signin">
                                 <a href="https://weblearnbd.net/wp/collax/register/">Sign up now</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- login-area-end -->
</main>
<?php
get_footer();