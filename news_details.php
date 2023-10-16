<?php
require_once 'header.php';
require_once "admin/dbc.php";
$id = $_GET['id'];
$select_query = "SELECT * FROM news WHERE id= $id";
$single_news = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));
?>

<!-- About Done -->
<section id="about" class="section">
  <div class="container">
    <h2 class="text-center" data-aos="fade-up"><?= $single_news['news_headline'] ?></h2>
    <h6 class="text-center">News Update Time: <?= date("d-M-Y h:i:sa", strtotime($single_news['news_uploaded_date_time'])); ?></h6>
    <section class="mt-4">
      <div class="row">
        <div class="col-md-12 col-lg-12 mb-5 mb-md-0" data-aos="fade-up">
          <img alt="" class="w-100 d-block my-3 text-center" src="img/news/<?= $single_news['news_cover_photo'] ?>">
          <p><?= $single_news['news_details'] ?></p>
          <br>
          <p><?= $single_news['news_details'] ?></p>
        </div>
      </div>
    </section>
  </div>
</section>


<?php
require_once 'footer.php';
?>