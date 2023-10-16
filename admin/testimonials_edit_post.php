<?php
    session_start();
    require_once "dbc.php";
// Update Query
    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $customer_details = $_POST['customer_details'];
    $testimonials_details = $_POST['testimonials_details'];

    $update_query = "UPDATE testimonials SET customer_name = '$customer_name', customer_details = '$customer_details', testimonials_details = '$testimonials_details' WHERE id = '$id'";

    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['edit_status'] = "Testimoials Edit Successfully!";
    header('location: testimonials.php');
?>