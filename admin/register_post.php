<?php
require_once "dbc.php";
session_start();

    $register_ability = true;
    if(!$_POST['full_name']){
        $_SESSION['name_error'] = "Please fill up your name";
        $register_ability = false;
    }else{
        $_SESSION['old_name'] = $_POST['full_name'];
    }

    if(!$_POST['email_address']){
        $_SESSION['email_address_error'] = "Please fill up your email address";
        $register_ability = false;
    }else {
    $_SESSION['old_email'] = $_POST['email_address'];
    }

    if(!isset($_POST['gender'])){
        $_SESSION['gender_error'] = "Please select your gender";
        $register_ability = false;
    }else {
    $_SESSION['old_gender'] = $_POST['gender'];
    }

    if(!$_POST['password']){
        $_SESSION['password_error'] = "Please fill up your password";
        $register_ability = false;
    }
    if(!$_POST['confirm_password']){
        $_SESSION['confirm_password_error'] = "Please fill up your confirm password";
        $register_ability = false;
    }else{
    if ($_POST['password'] != $_POST['confirm_password']) {
        $_SESSION['password_match_error'] = "Your password and confirm password not match ";
        $register_ability = false;
    }
    }
    

    if($register_ability){
        $full_name = $_POST['full_name'];
        $email_address = $_POST['email_address'];
        $gender = $_POST['gender'];
        $password = md5($_POST['password']);

        $email_address_check_query = "SELECT COUNT(*) AS email_check FROM users WHERE email_address = '$email_address'";
        if(mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query))['email_check'] == 1) {
            $_SESSION['same_email_check_error'] = "This Email Already Taken";
            header('location: register.php');
        }else{
            date_default_timezone_set('Asia/Dhaka');
            $current_date_time = date('Y-m-d H:i:s');

            $insert_query = "INSERT INTO users (full_name, email_address, gender, password, created_at) VALUES ('$full_name', '$email_address', '$gender', '$password' , '$current_date_time') ";
            mysqli_query(connect_to_db(), $insert_query);

            $_SESSION['registion_success'] = "Your registration completed. Please login now.";

            $_SESSION['registion_email_address'] = $email_address;
            header('location: login.php');
        };

    }else{
        header('location: register.php');
    }




?>