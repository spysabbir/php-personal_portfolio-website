<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete_with_photo("projects", "id", $_GET['id'], "portfolio", "project_cover_photo");
$_SESSION['deleted_status'] = "Project Deleted Successfully!";
header('location: project.php');
?>