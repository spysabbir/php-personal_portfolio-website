<?php
require_once 'header.php';
?>

<!-- News Done-->
<section id="news" class="section bg-light">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="mb-3 mb-md-0 text-center">All News</h2>
            </div>
        </div>
        <div class="mt-5 pt-5">
            <div class="row-news row">
                <?php foreach (spy_sabbir_all('news') as $single_news) : ?>
                    <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
                        <figure class="position-relative">
                            <div class="position-relative">
                                <a href="news_details.php?id=<?= $single_news['id'] ?>"><img alt="" class="w-100 d-block" src="img/news/<?= $single_news['news_cover_photo'] ?>"></a>
                                <!-- <mark class="date"><?= $single_news['news_uploaded_date_time'] ?></mark> -->
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


<?php
require_once 'footer.php';
?>