<?php
require_once 'header.php';
?>

<!-- Masthead -->
<main id="home" class="masthead jarallax" style="background-image:url('img/bg/<?= spy_sabbir_update('theme_default', 'banner_photo'); ?>');" role="main">
  <div class="opener">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5">
          <h1>Hey, I am <?= spy_sabbir_update('theme_default', 'owner_name'); ?>.</h1>
          <p class="lead mt-4 mb-5"><?= spy_sabbir_update('theme_default', 'owner_about_details'); ?></p>
          <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Masthead Modal Dialog -->
<div class="modal fade" id="send-request">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title mt-0">Send Message</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Leave your contacts and our managers
          will contact you soon.</p>
        <form method="POST" action="contact_post.php">
          <div class="form-group">
            <input type="text" name="client_full_name" class="form-control" placeholder="Full Name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '' ?>">
            <?php if (isset($_SESSION['name_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['name_error'] ?></small>
            <?php 
              endif; 
              unset($_SESSION['name_error']);
            ?>
          </div>
          <div class="form-group">
            <input type="email" name="client_email_address" class="form-control" placeholder="Email" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ?>">
            <?php if (isset($_SESSION['email_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['email_error'] ?></small>
            <?php 
              endif; 
              unset($_SESSION['email_error']);
            ?>
          </div>
          <div class="form-group">
            <textarea rows="3" name="client_message" class="form-control" placeholder="Message"><?= (isset($_SESSION['old_message'])) ? $_SESSION['old_message'] : '' ?></textarea>
            <?php if (isset($_SESSION['message_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['message_error'] ?></small>
            <?php 
              endif; 
              unset($_SESSION['message_error']);
            ?>
          </div>

          <div class="form-group mb-0 text-right">
            <button type="submit" class="btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- About Done -->
<section id="about" class="section">
  <div class="container">
    <h2 data-aos="fade-up">Just trust me.</h2>
    <section class="mt-4">
      <div class="row">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
          <p><?= spy_sabbir_update('theme_default', 'experience_details'); ?></p>
          <div class="experience d-flex align-items-center">
            <div class="experience-number text-parallax"><?= spy_sabbir_update('theme_default', 'years_of_experience'); ?></div>
            <div class="text-dark mt-3 ml-4">Years<br> of experience</div>
          </div>
        </div>

        <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
          <?php foreach (spy_sabbir_all('skills') as $single_skill) : ?>
            <h6 class="mt-0"><?= $single_skill['skill_name'] ?></h6>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" data-aos="width" style="width: <?= $single_skill['percentage'] ?>%" aria-valuenow="<?= $single_skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>
  </div>
</section>

<!-- Services Done -->
<section id="services" class="section" style="background-color: <?= spy_sabbir_update('theme_default', 'primary_background_color'); ?>;">
  <div class="container">
    <div class="container">
      <div class="row">
        <?php foreach (spy_sabbir_all('services') as $single_service) : ?>
          <div class="col-md-3 mb-5 mb-md-0" data-aos="fade-in">
            <i class="fa <?= $single_service['service_icon_name'] ?> fa-3x"></i>
            <!-- <h6 class="text-white"><?= $single_service['service_name'] ?></h6> -->
            <h6 class="text-white"><a href="services_details.php?id=<?= $single_service['id'] ?>"><?= $single_service['service_name'] ?></a></h6>
            <!-- <p><?= $single_service['service_details'] ?></p> -->
            <p><?= substr($single_service['service_details'], 0, 100) ?>...</p>
            <p><a href="services_details.php?id=<?= $single_service['id'] ?>">Learn More ...</a></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Experience Done -->
<section id="experience" class="section pb-0">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-6" data-aos="fade-up">
        <h2 class="mb-3 mb-md-0">Experience</h2>
      </div>
      <div class="col-md-5 offset-md-1 text-md-right">
        <h6 class="my-0 text-gray"><a href="cv/<?= spy_sabbir_update('theme_default', 'upload_cv'); ?>" download>Download my cv</a></h6>
      </div>
    </div>
    <div class="mt-5 pt-5">
      <?php foreach (spy_sabbir_all('experiences') as $single_experience) : ?>
        <div class="row-experience row justify-content-between" data-aos="fade-up">
          <div class="col-md-4">
            <div class="h6 my-0 text-gray"><?= $single_experience['duration'] ?></div>
            <h5 class="mt-2 text-primary text-uppercase"><?= $single_experience['company_name'] ?></h5>
          </div>
          <div class="col-md-4">
            <h5 class="mb-3 mt-0 text-uppercase"><?= $single_experience['designation'] ?></h5>
          </div>
          <div class="col-md-4">
            <p><?= $single_experience['description'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Projects Done-->
<section id="projects" class="section">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-6" data-aos="fade-up">
        <h2 class="mb-3 mb-md-0">Featured projects</h2>
      </div>
      <div class="col-md-5 offset-md-1 text-md-right">
        <h6 class="my-0 text-gray"><a href="all_project.php">View all projects</a></h6>
      </div>
    </div>
    <div class="mt-5 pt-5" data-aos="fade-in">
      <div class="carousel-project owl-carousel">
        <?php foreach (spy_sabbir_number_of('projects', 4) as $single_project) : ?>
          <div class="project-item">
            <a href="#project<?= $single_project['id'] ?>" class="popup-with-zoom-anim">
              <figure class="position-relative">
                <img alt="" class="w-100" src="img/portfolio/<?= $single_project['project_cover_photo'] ?>">
                <figcaption class="text-white">
                  <h3 class="mb-2 text-white"><?= $single_project['project_name'] ?></h3>
                  <p><?= $single_project['project_type'] ?></p>
                </figcaption>
              </figure>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Project Modal Dialog Done-->
<?php foreach (spy_sabbir_number_of('projects', 4) as $single_project) : ?>
  <div id="project<?= $single_project['id'] ?>" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0"><?= $single_project['project_name'] ?></h2>
    <div class="mt-5 pt-2 text-dark">
      <div class="row">
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Clients:</h6>
          <span><?= $single_project['clients_name'] ?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Completion:</h6>
          <span><?= $single_project['complettion_date'] ?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Project Type:</h6>
          <span><?= $single_project['project_type'] ?></span>
        </div>
        <div class="col-md-6 col-lg-3">
          <h6 class="my-0">Budget:</h6>
          <span><?= $single_project['budget'] ?></span>
        </div>
      </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/<?= $single_project['project_cover_photo'] ?>">
  </div>
<?php endforeach; ?>

<!-- Testimonials Done -->
<section id="testimonials" class="testimonials section">
  <div class="container">
    <div class="carousel-testimonials owl-carousel">
      <?php foreach (spy_sabbir_all('testimonials') as $single_testimonials) : ?>
        <div class="col-testimonial" data-aos="fade-up">
          <span class="quiote">"</span>
          <p data-aos="fade-up"><?= $single_testimonials['testimonials_details'] ?></p>
          <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $single_testimonials['customer_name'] ?></strong> | <?= $single_testimonials['customer_details'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- News Done-->
<section id="news" class="section bg-light">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-md-6" data-aos="fade-up">
        <h2 class="mb-3 mb-md-0">Latest news</h2>
      </div>
      <div class="col-md-5 offset-md-1 text-md-right">
        <h6 class="text-gray my-0"><a href="all_news.php">View all news</a></h6>
      </div>
    </div>
    <div class="mt-5 pt-5">
      <div class="row-news row">
        <?php foreach (spy_sabbir_number_of('news', 3) as $single_news) : ?>
          <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
            <figure class="position-relative">
              <div class="position-relative">
                <a href="news_details.php?id=<?= $single_news['id'] ?>"><img alt="" class="w-100 d-block" src="img/news/<?= $single_news['news_cover_photo'] ?>"></a>
                <mark class="date">
                  <?= date("Y-m-d", strtotime($single_news['news_uploaded_date_time'])); ?>
                </mark>
              </div>
              <figcaption>
                <h5><a href="news_details.php?id=<?= $single_news['id'] ?>"><?= $single_news['news_headline'] ?></a></h5>
                <?= substr($single_news['news_details'], 0, 50) ?>...
              </figcaption>
            </figure>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Partners Done-->
<section class="section-sm">
  <div class="container">
    <div class="row-partners row">
      <?php foreach (spy_sabbir_number_of('clients', 4) as $single_client) : ?>
        <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
          <img alt="" src="img/partners/<?= $single_client['client_photo'] ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
require_once 'footer.php';
require_once 'status.php';
?>