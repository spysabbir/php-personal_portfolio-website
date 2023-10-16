<?php
session_start();
require_once "dbc.php";
if (!isset($_SESSION['login_status'])) {
    header("location: notallowed.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title><?= spy_sabbir_update('theme_default', 'owner_name'); ?> | Admin</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="dashboard.php"><i class="icon ion-android-star-outline"></i> <?= spy_sabbir_update('theme_default', 'owner_name'); ?></a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span>
        </div>

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="dashboard.php" class="sl-menu-link <?= (isset($dashboard)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-line-chart tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="../index.php" target="_blank" class="sl-menu-link">
                <div class="sl-menu-item">
                    <!-- <i class="fa fa-globe" aria-hidden="true"></i> -->
                    <i class="fa fa-internet-explorer tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Landing Page</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <label class="sidebar-label">Landing Page Section</label>

            <a href="theme_default.php" class="sl-menu-link <?= (isset($theme_default)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-home tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Theme Default</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="skill.php" class="sl-menu-link <?= (isset($skill)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-folder-open tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Skill</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="services.php" class="sl-menu-link <?= (isset($services)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-sliders tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Services</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="experience.php" class="sl-menu-link <?= (isset($experience)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-university tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Experience</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="project.php" class="sl-menu-link <?= (isset($project)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-briefcase tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Projects</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="testimonials.php" class="sl-menu-link <?= (isset($testimonials)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-trophy tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Testimonials</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="news.php" class="sl-menu-link <?= (isset($news)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-newspaper-o tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">News</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="client.php" class="sl-menu-link <?= (isset($client)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-users tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Client</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <label class="sidebar-label">Messages</label>

            <a href="contact.php" class="sl-menu-link <?= (isset($contact)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-envelope tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Client Messages</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="subscriber.php" class="sl-menu-link <?= (isset($subscriber)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="fa fa-envelope-square tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Subscriber List</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div>
        <!-- sl-header-left -->
        <div class="sl-header-right">
            <div class="text-right mr-2">
                <span class="logged-name"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></span> <br>
                <span class="logged-name"><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['designation']) ?></span>
            </div>
            <img src="img/users/<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_photo'] ?>" class="wd-32 rounded-circle img-thumbnail" alt="">
            <nav class="nav mr-4">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <i class="fa fa-ellipsis-v tx-20" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <!-- <li><a target="_blank" href="../index.php"><i class="icon ion-ios-gear-outline"></i> Visit Homepage</a></li> -->
                            <li><a href="profile.php"><i class="icon ion-ios-person-outline"></i>View Profile</a></li>
                            <li><a href="signout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <div class="sl-mainpanel">