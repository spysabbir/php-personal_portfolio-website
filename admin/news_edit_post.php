
<?php 
session_start();
    require_once "dbc.php";

    if($_FILES['news_new_cover_photo']['name']){
        // Photo Delate
        $link ="../img/news/".$_POST['news_old_photo_name'];
        unlink($link);
        // Photo Upload Start
        $uploaded_photo = $_FILES['news_new_cover_photo'];
        $after_explode = explode('.', $uploaded_photo['name']);
        $new_photo_name = rand().time().".".end($after_explode);
        $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
        $new_location = '../img/news/'.$new_photo_name;
        move_uploaded_file($uploaded_photo_temporary_location, $new_location);
        // Update Query
        $news_old_photo_name = $_POST['news_old_photo_name'];
        $update_query = "UPDATE news SET news_cover_photo = '$new_photo_name' WHERE news_cover_photo = '$news_old_photo_name'";
        mysqli_query(connect_to_db(), $update_query);
    }

        $news_headline = $_POST['news_headline'];
        $news_id = $_POST['news_id'];
        $news_details = $_POST['news_details'];
        $update_query = "UPDATE news SET news_headline = '$news_headline', news_details = '$news_details' WHERE id = '$news_id'";
        mysqli_query(connect_to_db(), $update_query);
        $_SESSION['edit_status'] = "News Edit Successfully!";
        header('location: news.php');

?>