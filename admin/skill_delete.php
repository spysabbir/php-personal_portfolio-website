<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete("skills", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Skill Deleted Successfully!";
header('location: skill.php');
?>