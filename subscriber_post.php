<?php
    require_once "admin/dbc.php";
    session_start();

    if($_POST['subscriber_email']){
        $subscriber_email = $_POST['subscriber_email'];

        if (!filter_var($subscriber_email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array('success' => false, 'error' => 'Invalid email format.'));
            exit;
        }

        $email_address_check_query = "SELECT COUNT(*) AS email_check FROM subscribers WHERE subscriber_email = '$subscriber_email'";

        if(mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query))['email_check'] == 1) {
            echo json_encode(array('success' => false, 'error' => 'Email already exists in the database.'));
            exit;
        }else{
            date_default_timezone_set('Asia/Dhaka');
            $current_date_time = date('Y-m-d H:i:s');

            $insert_query = "INSERT INTO subscribers (subscriber_email, subscribe_date) VALUES ('$subscriber_email', '$current_date_time') ";
            mysqli_query(connect_to_db(), $insert_query);

            echo json_encode(array('success' => true));
        };
    }else{
        echo json_encode(array('success' => false, 'error' => 'Email not provided.'));
    }
?>