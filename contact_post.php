<?php
session_start();
require_once "admin/dbc.php";

$client_full_name = trim($_POST["client_full_name"]);
$client_email_address = trim($_POST["client_email_address"]);
$client_message = trim($_POST["client_message"]);

if (!$client_full_name || !$client_email_address || !$client_message) {
    echo json_encode(array('success' => false, 'error' => 'Message is not sent. Sorry, something went wrong!'));
}else{
    date_default_timezone_set('Asia/Dhaka');
    $current_date_time = date('Y-m-d H:i:s');

    $insert_query = "INSERT INTO contacts_messages (client_full_name, client_email_address, client_message, message_send_time) VALUES ('$client_full_name', '$client_email_address', '$client_message', '$current_date_time')";
    $result = mysqli_query(connect_to_db(), $insert_query);

    echo json_encode(array('success' => true));
}