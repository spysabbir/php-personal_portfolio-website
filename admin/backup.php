<div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Subscribe:</h6>
            <form method="POST" action="subscriber_post.php">
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