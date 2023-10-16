<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete_with_photo("clients", "id", $_GET['id'], "partners", "client_photo");
$_SESSION['deleted_status'] = "Client Deleted Successfully!";
header('location: client.php');
?>