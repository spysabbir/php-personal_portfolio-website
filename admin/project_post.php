<?php
session_start();
require_once "dbc.php";

$submit_ability = true;
if (!$_POST['project_name']) {
    $_SESSION['project_name_error'] = "Please fill up your project name";
    $submit_ability = false;
} else {
    $_SESSION['old_project_name'] = $_POST['project_name'];
}
if (!$_POST['project_type']) {
    $_SESSION['project_type_error'] = "Please fill up your project type";
    $submit_ability = false;
} else {
    $_SESSION['old_project_type'] = $_POST['project_type'];
}
if (!$_POST['clients_name']) {
    $_SESSION['clients_name_error'] = "Please fill up your clients name";
    $submit_ability = false;
} else {
    $_SESSION['old_clients_name'] = $_POST['clients_name'];
}
if (!$_POST['complettion_date']) {
    $_SESSION['complettion_date_error'] = "Please select your complettion date";
    $submit_ability = false;
} else {
    $_SESSION['old_complettion_date'] = $_POST['complettion_date'];
}
if (!$_POST['budget']) {
    $_SESSION['budget_error'] = "Please fill up your budget";
    $submit_ability = false;
} else {
    $_SESSION['old_budget'] = $_POST['budget'];
}
if (!$_FILES['project_cover_photo']['name']) {
    $_SESSION['project_cover_photo_error'] = "Please choose your project cover photo";
    $submit_ability = false;
} else {
    $_SESSION['old_project_cover_photo'] = $_FILES['project_cover_photo']['name'];
}


if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['project_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/portfolio/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $project_name = $_POST['project_name'];
    $project_type = $_POST['project_type'];
    $clients_name = $_POST['clients_name'];
    $complettion_date = $_POST['complettion_date'];
    $budget = $_POST['budget'];

    $insert_db = spy_sabbir_insert("projects", "project_name, project_type, clients_name, complettion_date, budget, project_cover_photo" , "'$project_name', '$project_type', '$clients_name', '$complettion_date', '$budget', '$new_photo_name'");
    $_SESSION['add_status'] = "Project Added Successfully!";
    unset($_SESSION['old_project_name']);
    unset($_SESSION['old_project_type']);
    unset($_SESSION['old_clients_name']);
    unset($_SESSION['old_complettion_date']);
    unset($_SESSION['old_budget']);
    unset($_SESSION['old_project_cover_photo']);
    header('location: project.php');
}else{
    $_SESSION['missing_status'] = "Project details missing! Please fill in the required information.";
    header('location: project.php');
}

?>