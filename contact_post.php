<?php
session_start();
require_once "admin/dbc.php";


$client_full_name =($_POST["client_full_name"]);
$client_email_address =($_POST["client_email_address"]);
$client_message =($_POST["client_message"]);

// Date Time
date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');

$register_ability = true;
    if (!$_POST['client_full_name']) {
        $_SESSION['name_error'] = "Full Name is Missing!";
        $register_ability = false;
    }else {
        $_SESSION['old_name'] = $_POST['client_full_name'];
    }
    if (!$_POST['client_email_address']) {
        $_SESSION['email_error'] = "Email is Missing!";
        $register_ability = false;
    }else {
        $_SESSION['old_email'] = $_POST['client_email_address'];
    }
    if (!$_POST['client_message']) {
        $_SESSION['message_error'] = "Message is Missing!";
        $register_ability = false;
    }else {
        $_SESSION['old_message'] = $_POST['client_message'];
    }

if ($register_ability) {
    $insert_query = "INSERT INTO contacts_messages (client_full_name, client_email_address, client_message, message_send_time) VALUES ('$client_full_name', '$client_email_address', '$client_message', '$current_date_time')";
    mysqli_query(connect_to_db(), $insert_query);
    $_SESSION['successfully_status'] = "Your message is successfully sent";
    unset($_SESSION['old_name']);
    unset($_SESSION['old_email']);
    unset($_SESSION['old_message']);
    header('location: index.php');
}else{
    $_SESSION['error_status'] = "Message is not sent. Sorry something went wrong!";
    header('location: index.php');
}

?>

