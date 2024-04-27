<?php
session_start();
require_once "dbc.php";

$user_current_password = $_POST['user_current_password'];
$user_new_password = $_POST['user_new_password'];
$user_confirm_password = $_POST['user_confirm_password'];


$submit_ability = true;
if (!$user_current_password) {
    $_SESSION['user_current_password_error'] = "Please fill up your current password";
    $submit_ability = false;
}
if (!$user_new_password) {
    $_SESSION['user_new_password_error'] = "Please fill up your new password";
    $submit_ability = false;
}
if (!$user_confirm_password) {
    $_SESSION['user_confirm_password_error'] = "Please fill up your confirm password";
    $submit_ability = false;
}

if($submit_ability){
   if ($user_new_password != $user_confirm_password) {
        $_SESSION['missing_status'] = "New Password and Confirm Password does not match!";
        header('location: change_password.php');
    } else {
        $user_id = $_POST['user_id'];
        $user = spy_sabbir_single_select('users', $user_id);
        if (md5($user_current_password) === $user['password']) {
            $new_password_hash = md5($user_new_password);

            $update_query = "UPDATE users SET password = '$new_password_hash' WHERE id = $user_id";
            mysqli_query(connect_to_db(), $update_query);

            $_SESSION['edit_status'] = "Password Updated Successfully!";
            header('location: change_password.php');
        } else {
            $_SESSION['missing_status'] = "Current Password is Incorrect!";
            header('location: change_password.php');
        }
    }
}else{
    $_SESSION['missing_status'] = "Password details missing! Please fill in the required information.";
    header('location: change_password.php');
}

?>