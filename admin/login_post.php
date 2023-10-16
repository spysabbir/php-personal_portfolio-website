<?php
require_once "dbc.php";
session_start();
$email_address = $_POST['email_address'];
$password = md5($_POST['password']);

$count_query = "SELECT COUNT(*) AS login_capability FROM users WHERE email_address = '$email_address' AND password = '$password'";
$output_from_db = mysqli_query(connect_to_db(), $count_query);
$output_from_db_after_assoc = mysqli_fetch_assoc($output_from_db);

if($output_from_db_after_assoc['login_capability'] == 1){
    $_SESSION['login_status'] = true;
    $_SESSION['user_email_address'] = $email_address;

    $select_query = "SELECT * FROM users WHERE email_address = '$email_address'";
    $_SESSION['user_id'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['id'];
    // $_SESSION['user_name'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['full_name'];
    // $_SESSION['user_phone_number'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['phone_number'];
    // $_SESSION['user_gender_name'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['gender'];
    // $_SESSION['user_date_of_birth'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['date_of_birth'];
    // $_SESSION['user_profile_photo'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['profile_photo'];
    // $_SESSION['created_at'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['created_at'];
    header("location: dashboard.php");
}
elseif(!$_POST['email_address'] && !$_POST['password']) {
    $_SESSION['email_address_error'] = "Please fill up your password";
    $_SESSION['password_error'] = "Please fill up your password";
    header("location: login.php");
}
else{
    $_SESSION['login_error'] = "Your Email or Password is not Correct!";
    header("location: login.php");

};
?>