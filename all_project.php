<?php
require_once 'header.php';
?>

<!-- Projects Done-->
<section id="projects" class="section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="mb-3 mb-md-0">All Projects</h2>
            </div>
        </div>
        <div class="mt-5 pt-5" data-aos="fade-in">
            <div class="row">
                <?php foreach (spy_sabbir_all('projects') as $single_project) : ?>
                    <div class="col-lg-4 mb-4">
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
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Project Modal Dialog Done-->
<?php foreach (spy_sabbir_all('projects') as $single_project) : ?>
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


<?php
require_once 'footer.php';
?>