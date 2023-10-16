 <footer>
   <div class="section py-5 pb-0" style="background-color: <?= spy_sabbir_update('theme_default', 'primary_background_color'); ?>;">
     <div class="container">
       <div class="row">
         <div class="col-md-6 col-lg-3">
           <h6 class="text-white mb-4">Phone:</h6>
           <p class="text-white mb-4"><?= spy_sabbir_update('theme_default', 'owner_phone_number'); ?></p>
         </div>
         <div class="col-md-6 col-lg-3">
           <h6 class="text-white mb-4">Email:</h6>
           <p class="text-white mb-4"><?= spy_sabbir_update('theme_default', 'owner_email_address'); ?></p>
         </div>
         <div class="col-md-6 col-lg-3">
           <h6 class="text-white mb-4">Follow me:</h6>
           <ul class="social-icons">
             <li><a href="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>" target="_blank">
                 <ion-icon name="logo-facebook"></ion-icon>
               </a></li>
             <li><a href="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>" target="_blank">
                 <ion-icon name="logo-twitter"></ion-icon>
               </a></li>
             <li><a href="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>" target="_blank">
                 <ion-icon name="logo-linkedin"></ion-icon>
               </a></li>
             <li><a href="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>" target="_blank">
                 <ion-icon name="logo-instagram"></ion-icon>
               </a></li>
           </ul>
         </div>
         <div class="col-md-6 col-lg-3">
           <h6 class="text-white mb-4">Subscribe:</h6>
           <form method="POST" action="subscribe_post.php">
             <div class="input-group">
               <input type="email" class="form-control" name="subscriber_email" placeholder="Email" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ?>">
               <div class="input-group-append">
                 <button class="btn px-3" type="submit">Go</button>
               </div>
             </div>
                <?php if (isset($_SESSION['subscriber_email_error'])) : ?>
                    <small class="text-danger ml-2"><?= $_SESSION['subscriber_email_error'] ?></small>
                <?php 
                  endif; 
                  unset($_SESSION['subscriber_email_error']);
                ?>
                <?php if (isset($_SESSION['same_email_check_error'])) : ?>
                    <small class="text-warning ml-2"><?= $_SESSION['same_email_check_error'] ?></small>
                <?php 
                  endif; 
                  unset($_SESSION['same_email_check_error']);
                ?>
           </form>
         </div>
       </div>
     </div>
   </div>
   <div class="footer-copy section-sm">
     <div class="container">© Copyright 2020 - <?= date("Y") ?> <?= spy_sabbir_update('theme_default', 'owner_name'); ?>. All Rights Reserved</div>
   </div>
 </footer>

 <!-- Optional JavaScript -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="js/jquery-1.12.4.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
 <script src="js/jarallax.min.js"></script>
 <script src="js/jquery.ajaxchimp.min.js"></script>
 <script src="js/jquery.validate.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/aos.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/interface.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 </body>

 </html>
