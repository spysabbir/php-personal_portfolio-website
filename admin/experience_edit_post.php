<?php 
    session_start();
    require_once "dbc.php";
// Update Query
    $id = $_POST['id'];
    $company_name = $_POST['company_name'];
    $duration = $_POST['duration'];
    $designation = $_POST['designation'];
    $description = $_POST['description'];
    $update_query = "UPDATE experiences SET company_name = '$company_name', duration = '$duration', designation = '$designation', description = '$description' WHERE id = '$id'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['edit_status'] = "Experience Edit Successfully!";
    header('location: experience.php');
?>