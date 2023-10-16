<?php
session_start();
require_once "dbc.php";

$submit_ability = true;
if (!$_POST['service_icon_name']) {
    $_SESSION['service_icon_name_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_service_icon_name'] = $_POST['service_icon_name'];
}
if (!$_POST['service_name']) {
    $_SESSION['service_name_error'] = "Please fill up your service name";
    $submit_ability = false;
} else {
    $_SESSION['old_service_name'] = $_POST['service_name'];
}
if (!$_POST['service_details']) {
    $_SESSION['service_details_error'] = "Please fill up your service details";
    $submit_ability = false;
} else {
    $_SESSION['old_service_details'] = $_POST['service_details'];
}
if (!$_FILES['service_photo']['name']) {
    $_SESSION['service_photo_error'] = "Please choose your service photo";
    $submit_ability = false;
} else {
    $_SESSION['old_service_photo'] = $_FILES['service_photo']['name'];
}

// echo $_SESSION['old_service_photo'];

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['service_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/service/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End
    
    $service_icon_name = $_POST['service_icon_name'];
    $service_name = $_POST['service_name'];
    $service_details = htmlspecialchars($_POST['service_details'], ENT_QUOTES);
    
    $insert_db = spy_sabbir_insert("services", "service_icon_name, service_name, service_details, service_photo", "'$service_icon_name', '$service_name', '$service_details', '$new_photo_name'");
    $_SESSION['add_status'] = "Service Added Successfully!";
    unset($_SESSION['old_service_icon_name']);
    unset($_SESSION['old_service_name']);
    unset($_SESSION['old_service_details']);
    unset($_SESSION['old_service_photo']);
    header('location: services.php');
}else{
    $_SESSION['missing_status'] = "Service details missing! Please fill in the required information.";
    header('location: services.php');
}
?>
