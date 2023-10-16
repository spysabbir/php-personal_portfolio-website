<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete_with_photo("services", "id", $_GET['id'], "service", "service_photo");
$_SESSION['deleted_status'] = "Service Deleted Successfully!";
header('location: services.php');
?>