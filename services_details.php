<?php
  require_once 'header.php';
  require_once "admin/dbc.php";
  $id =$_GET['id'];
  $select_query = "SELECT * FROM services WHERE id= $id";
  $single_service = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));
?>

 
 <section id="services" class="section">
    <div class="container">
      <h2 class="text-center" data-aos="fade-up"><?= $single_service['service_name'] ?></h2>
      <section class="mt-4">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5 mb-md-0" data-aos="fade-up">
          <img alt="" class="w-100 d-block my-3 text-center" src="img/service/<?= $single_service['service_photo'] ?>">
            <p><?= $single_service['service_details'] ?></p>
                <br>
            <p><?= $single_service['service_details'] ?></p>
          </div>
        </div>
      </section>
    </div>
  </section>


<?php
  require_once 'footer.php';
?>