<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete("experiences", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Dxperience Deleted Successfully!";
header('location: experience.php');
?>