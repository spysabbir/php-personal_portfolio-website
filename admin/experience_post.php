<?php
session_start();
require_once "dbc.php";

$submit_ability = true;
if (!$_POST['company_name']) {
    $_SESSION['company_name_error'] = "Please fill up your company name";
    $submit_ability = false;
} else {
    $_SESSION['old_company_name'] = $_POST['company_name'];
}
if (!$_POST['duration']) {
    $_SESSION['duration_error'] = "Please fill up your duration";
    $submit_ability = false;
} else {
    $_SESSION['old_duration'] = $_POST['duration'];
}
if (!$_POST['designation']) {
    $_SESSION['designation_error'] = "Please fill up your designation";
    $submit_ability = false;
} else {
    $_SESSION['old_designation'] = $_POST['designation'];
}
if (!$_POST['description']) {
    $_SESSION['description_error'] = "Please fill up your description";
    $submit_ability = false;
} else {
    $_SESSION['old_description'] = $_POST['description'];
}


if($submit_ability){
$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designation = $_POST['designation'];
$description = htmlspecialchars($_POST['description'], ENT_QUOTES);

$insert_db = spy_sabbir_insert("experiences", "company_name, duration, designation, description", "'$company_name', '$duration', '$designation', '$description'");
    $_SESSION['add_status'] = "Experience Added Successfully!";
    unset($_SESSION['old_company_name']);
    unset($_SESSION['old_duration']);
    unset($_SESSION['old_designation']);
    unset($_SESSION['old_description']);
    header('location: experience.php');
}else{
    $_SESSION['missing_status'] = "Experience details missing! Please fill in the required information.";
    header('location: experience.php');
}

?>