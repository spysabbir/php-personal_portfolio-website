<?php 
session_start();
    require_once "dbc.php";

if($_FILES['project_new_cover_photo']['name']){
    // Photo Delate
    $link = "../img/portfolio/".$_POST['project_old_photo_name'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['project_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../img/portfolio/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $project_old_photo_name = $_POST['project_old_photo_name'];

    $update_query = "UPDATE projects SET project_cover_photo = '$new_photo_name' WHERE project_cover_photo = '$project_old_photo_name'";
        mysqli_query(connect_to_db(), $update_query);
}

$project_id = $_POST['project_id'];
$project_name = $_POST['project_name'];
$project_type = $_POST['project_type'];
$clients_name = $_POST['clients_name'];
$complettion_date = $_POST['complettion_date'];
$budget = $_POST['budget'];
$update_query = "UPDATE projects SET project_name = '$project_name', project_type = '$project_type', clients_name = '$clients_name', complettion_date = '$complettion_date', budget = '$budget' WHERE id = '$project_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Project Edit Successfully!";
header('location: project.php');
?>