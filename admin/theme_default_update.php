<?php
session_start();
require_once "dbc.php";
if($_FILES['banner_new_photo']['name']){
    // Photo Delate
    $link = "../img/bg/".$_POST['banner_old_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['banner_new_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/bg/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);

    $banner_old_photo = $_POST['banner_old_photo'];
    $update_query = "UPDATE theme_default SET default_item_value = '$new_photo_name' WHERE default_item_value = '$banner_old_photo'";
    mysqli_query(connect_to_db(), $update_query);

};

if($_FILES['new_upload_cv']['name']){
    // File Delate
    $link = "../cv/".$_POST['old_upload_cv'];
    unlink($link);

    // File Upload Start
    $uploaded_file = $_FILES['new_upload_cv'];
    $after_explode = explode('.', $uploaded_file['name']);
    $new_file_name = rand().time().".".end($after_explode);
    $uploaded_file_temporary_location = $uploaded_file['tmp_name'];
    $new_location = '../cv/'.$new_file_name;
    move_uploaded_file($uploaded_file_temporary_location, $new_location);

    $old_upload_cv = $_POST['old_upload_cv'];
    $update_query = "UPDATE theme_default SET default_item_value = '$new_file_name' WHERE default_item_value = '$old_upload_cv'";
    mysqli_query(connect_to_db(), $update_query);

};

foreach($_POST as $default_item_name => $default_item_value){
    $update_query = "UPDATE theme_default SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
    mysqli_query(connect_to_db(), $update_query);
}
$_SESSION['add_status'] = "Default Content Upload Successfully!";
header('location: theme_default.php');
?>