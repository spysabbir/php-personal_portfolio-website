<?php
session_start();
require_once "dbc.php";

$submit_ability = true;
if (!$_POST['client_name']) {
    $_SESSION['client_name_error'] = "Please fill up your client name";
    $submit_ability = false;
} else {
    $_SESSION['old_client_name'] = $_POST['client_name'];
}
if (!$_FILES['client_photo']['name']) {
    $_SESSION['client_photo_error'] = "Please choose your client photo";
    $submit_ability = false;
} else {
    $_SESSION['old_client_photo'] = $_FILES['client_photo']['name'];
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['client_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/partners/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $client_name = $_POST['client_name'];
    $insert_db = spy_sabbir_insert("clients", "client_name, client_photo ", "'$client_name', '$new_photo_name'");
    $_SESSION['add_status'] = "Client Added Successfully!";
    unset($_SESSION['old_client_name']);
    unset($_SESSION['old_client_photo']);
    header('location: client.php');
}else{
    $_SESSION['missing_status'] = "Client details missing! Please fill in the required information.";
    header('location: client.php');
}

?>