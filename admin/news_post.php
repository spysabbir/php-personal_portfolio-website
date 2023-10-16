<?php
session_start();
require_once "dbc.php";

$submit_ability = true;

if (!$_POST['news_headline']) {
    $_SESSION['news_headline_error'] = "Please fill up your news headline";
    $submit_ability = false;
} else {
    $_SESSION['old_news_headline'] = $_POST['news_headline'];
}
if (!$_POST['news_details']) {
    $_SESSION['news_details_error'] = "Please fill up your news details";
    $submit_ability = false;
} else {
    $_SESSION['old_news_details'] = $_POST['news_details'];
}
if (!$_FILES['news_cover_photo']['name']) {
    $_SESSION['news_cover_photo_error'] = "Please choose your news cover photo";
    $submit_ability = false;
} else {
    $_SESSION['old_news_cover_photo'] = $_FILES['news_cover_photo']['name'];
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['news_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/news/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    // Date Time
    date_default_timezone_set('Asia/Dhaka');
    $current_date_time = date('Y-m-d H:i:s');

    $news_headline = $_POST['news_headline'];
    $news_details = htmlspecialchars($_POST['news_details'], ENT_QUOTES);

    $insert_db = spy_sabbir_insert("news", "news_headline, news_details, news_cover_photo, news_uploaded_date_time", "'$news_headline', '$news_details', '$new_photo_name', '$current_date_time'");
    $_SESSION['add_status'] = "News Added Successfully!";
    unset($_SESSION['old_news_headline']);
    unset($_SESSION['old_news_details']);
    unset($_SESSION['old_news_cover_photo']);
    header('location: news.php');
}else{
    $_SESSION['missing_status'] = "News details missing! Please fill in the required information.";
    header('location: news.php');
}

?>