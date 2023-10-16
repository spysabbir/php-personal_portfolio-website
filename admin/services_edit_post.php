<?php 
session_start();
require_once "dbc.php";

if($_FILES['service_new_cover_photo']['name']){
    // Photo Delate
    $link = "../img/service/".$_POST['service_old_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['service_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/service/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);

    $service_old_photo = $_POST['service_old_photo'];
    $update_query = "UPDATE services SET service_photo = '$new_photo_name' WHERE service_photo = '$service_old_photo'";
    mysqli_query(connect_to_db(), $update_query);
}
// Update Query
    
    $service_id = $_POST['service_id'];
    $service_icon_name = $_POST['service_icon_name'];
    $service_name = $_POST['service_name'];
    $service_details = $_POST['service_details'];
    $update_query = "UPDATE services SET service_icon_name = '$service_icon_name', service_name = '$service_name', service_details = '$service_details' WHERE id = '$service_id'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['edit_status'] = "Service Edit Successfully!";
    header('location: services.php');

?>
