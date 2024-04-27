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
            <form id="subscription_form" method="POST" action="subscriber_post.php">
              <div class="input-group">
                <input type="email" class="form-control" id="subscriber_email" name="subscriber_email" placeholder="Email" value="">
                <div class="input-group-append">
                  <button id="subscribe_button" class="btn px-3 text-white" type="button">Go</button>
                </div>
              </div>
              <small id="subscription_message" class="ml-2"></small>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copy section-sm">
      <div class="container">© Copyright <?= date("Y") ?> <?= spy_sabbir_update('theme_default', 'owner_name'); ?>. All Rights Reserved</div>
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

  <script>
    $(document).ready(function() {
      // Subscription form
      $('#subscribe_button').click(function() {
        var email = $('#subscriber_email').val().trim();

        if (email === '') {
          $('#subscription_message').removeClass('text-success').addClass('text-danger').text('Email cannot be blank.');
        }

        $.ajax({
          type: 'POST',
          url: 'subscriber_post.php',
          data: { subscriber_email: email },
          success: function(response) {
            var data = JSON.parse(response);
            if (data.success) {
              $('#subscription_message').removeClass('text-danger').addClass('text-success').text('Subscription successful!');
              $('#subscriber_email').val('');
            } else {
              $('#subscription_message').removeClass('text-success').addClass('text-danger').text(data.error);
            }
          },
        });
      });

      // Contact form
      $('#contact_button').click(function() {
        var client_full_name = $('#client_full_name').val().trim();
        var client_email_address = $('#client_email_address').val().trim();
        var client_message = $('#client_message').val().trim();
        
        $('.error-message').text('');
        $('#contact_message').text('');

        if (client_full_name === '') {
            $('#client_full_name_error').text('Full name is required!');
        }
        if (client_email_address === '') {
            $('#client_email_address_error').text('Email address is required!');
        }
        if (client_message === '') {
            $('#client_message_error').text('Message is required!');
        }

        $.ajax({
            type: 'POST',
            url: 'contact_post.php',
            data: { client_full_name: client_full_name, client_email_address: client_email_address, client_message: client_message },
            success: function(response) {
                var data = JSON.parse(response);
                if (data.success) {
                    $('#contact_message').removeClass('text-danger').addClass('text-success').text('Message sent successful!');
                    $('#client_full_name').val('');
                    $('#client_email_address').val('');
                    $('#client_message').val('');
                } else {
                    $('#contact_message').removeClass('text-success').addClass('text-danger').text(data.error);
                }
            },
        });
      });

    });
  </script>

 </body>

 </html>
