
<?php
session_start();
require_once "dbc.php";

if($_FILES['client_new_cover_photo']['name']){
    // Photo Delate
    $link ="../img/partners/".$_POST['client_old_photo_name'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['client_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/partners/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $client_old_photo_name = $_POST['client_old_photo_name'];
    $update_query = "UPDATE clients SET client_photo = '$new_photo_name' WHERE client_photo = '$client_old_photo_name'";
    mysqli_query(connect_to_db(), $update_query);
}
    $client_id = $_POST['client_id'];
    $client_name = $_POST['client_name'];
    $update_query = "UPDATE clients SET client_name = '$client_name' WHERE id = '$client_id'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['edit_status'] = "Client Edit Successfully!";
    header('location: client.php');

?>