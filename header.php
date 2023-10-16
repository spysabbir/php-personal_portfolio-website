<?php
session_start();
require_once "admin/dbc.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?= spy_sabbir_update('theme_default', 'owner_name'); ?>. - Easy Onepage Personal Template">
  <meta name="author" content="<?= spy_sabbir_update('theme_default', 'owner_name'); ?>">

  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <title><?= spy_sabbir_update('theme_default', 'owner_name'); ?>. - Easy Onepage Personal Template</title>
</head>

<body>

  <!-- Loader -->
  <div class="loader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>

  <!-- Click capture -->
  <div class="click-capture d-lg-none"></div>

  <!-- Navbar -->
  <nav id="scrollspy" class="navbar navbar-desctop">

    <div class="d-flex position-relative w-100">

      <!-- Brand-->
      <a class="navbar-brand" href="index.php"><?= spy_sabbir_update('theme_default', 'owner_name'); ?>.</a>
      <ul class="navbar-nav-desctop mr-auto d-none d-lg-block">
        <?php if($_SERVER['REQUEST_URI'] == "/index.php"){  ?>
          <li><a class="nav-link" href="#home">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#experience">Experience</a></li>
          <li><a class="nav-link" href="#projects">Projects</a></li>
          <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link" href="#news">News</a></li>
        <?php }else{ ?>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="all_project.php">All Projects</a></li>
          <li><a class="nav-link" href="all_news.php">All News</a></li>
        <?php } ?>
      </ul>

      <!-- Social -->
      <ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">
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

      <!-- Toggler -->
      <button class="toggler d-lg-none ml-auto">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
      </button>
    </div>
  </nav>


  <!-- Navbar Mobile -->
  <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
    <ion-icon class="close" name="close-outline"></ion-icon>

    <!-- Social -->
    <ul class="social-icons mr-auto mr-lg-0">
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
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
    </ul>

    <ul class="navbar-nav navbar-nav-mobile">
      <?php if($_SERVER['REQUEST_URI'] == "/index.php"){  ?>
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#services">Services</a></li>
        <li><a class="nav-link" href="#experience">Experience</a></li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
        <li><a class="nav-link" href="#news">News</a></li>
      <?php }else{ ?>
        <li><a class="nav-link" href="index.php">Home</a></li>
        <li><a class="nav-link" href="all_project.php">All Projects</a></li>
        <li><a class="nav-link" href="all_news.php">All News</a></li>
      <?php } ?>

    </ul>
    <div class="navbar-mobile-footer">
      <p>© 2020 - <?= date("Y") ?> <?= spy_sabbir_update('theme_default', 'owner_name'); ?>. All Rights Reserved.</p>
    </div>
  </nav>