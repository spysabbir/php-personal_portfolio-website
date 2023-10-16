<?php
session_start();
    require_once "dbc.php";
// Update Query
    $id = $_POST['id'];
    $skill_name = $_POST['skill_name'];
    $percentage = $_POST['percentage'];
    $update_query = "UPDATE skills SET skill_name = '$skill_name', percentage = '$percentage' WHERE id = '$id'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['edit_status'] = "Skill Edit Successfully!";
    header('location: skill.php');

?>
