<?php
session_start();
require_once "dbc.php";

$submit_ability = true;
if (!$_POST['skill_name']) {
    $_SESSION['skill_name_error'] = "Please fill up your skill name";
    $submit_ability = false;
} else {
    $_SESSION['old_skill_name'] = $_POST['skill_name'];
}
if (!$_POST['percentage']) {
    $_SESSION['skill_percentage_error'] = "Please scroll your skill percentage";
    $submit_ability = false;
} else {
    $_SESSION['old_skill_percentage'] = $_POST['percentage'];
}


if($submit_ability){
    $skill_name = $_POST['skill_name'];
    $percentage = $_POST['percentage'];
    $insert_db = spy_sabbir_insert("skills", "skill_name, percentage", "'$skill_name', '$percentage'");
    $_SESSION['add_status'] = "Skill Added Successfully!";
    unset($_SESSION['old_skill_name']);
    unset($_SESSION['old_skill_percentage']);
    header('location: skill.php');
}
else{
    $_SESSION['missing_status'] = "Skill details missing! Please fill in the required information.";
    header('location: skill.php');
}

?>