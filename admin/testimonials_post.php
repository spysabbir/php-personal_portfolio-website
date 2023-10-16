<?php
session_start();
require_once "dbc.php";

$submit_ability = true;

if (!$_POST['customer_name']) {
    $_SESSION['customer_name_error'] = "Please fill up your customer name";
    $submit_ability = false;
} else {
    $_SESSION['old_customer_name'] = $_POST['customer_name'];
}
if (!$_POST['customer_details']) {
    $_SESSION['customer_details_error'] = "Please fill up your customer details";
    $submit_ability = false;
} else {
    $_SESSION['old_customer_details'] = $_POST['customer_details'];
}
if (!$_POST['testimonials_details']) {
    $_SESSION['testimonials_details_error'] = "Please fill up your designation";
    $submit_ability = false;
} else {
    $_SESSION['old_testimonials_details'] = $_POST['testimonials_details'];
}

if($submit_ability){
    $customer_name = $_POST['customer_name'];
    $customer_details = $_POST['customer_details'];
    $testimonials_details = $_POST['testimonials_details'];

    $insert_query = "INSERT INTO testimonials (customer_name, customer_details, testimonials_details) VALUES ('$customer_name', '$customer_details', '$testimonials_details')";
    mysqli_query(connect_to_db(), $insert_query);
    $_SESSION['add_status'] = "Testimonials Added Successfully!";
    unset($_SESSION['old_customer_name']);
    unset($_SESSION['old_customer_details']);
    unset($_SESSION['old_testimonials_details']);
    header('location: testimonials.php');
}else{
    $_SESSION['missing_status'] = "Testimonials details missing! Please fill in the required information.";
    header('location: testimonials.php');
}

?>