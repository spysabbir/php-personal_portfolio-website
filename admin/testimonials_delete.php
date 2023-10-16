<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete("testimonials", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Testimonial Deleted Successfully!";
header('location: testimonials.php');
?>