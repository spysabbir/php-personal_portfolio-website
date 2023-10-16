
<?php
session_start();
require_once "dbc.php";

if ($_FILES['profile_new_photo']['name']) {
    // Photo Delate
    $link = "img/users/" . $_POST['profile_old_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['profile_new_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../admin/img/users/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $profile_old_photo = $_POST['profile_old_photo'];
    $update_query = "UPDATE users SET profile_photo = '$new_photo_name' WHERE profile_photo = '$profile_old_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_designation = $_POST['user_designation'];
$user_phone_number = $_POST['user_phone_number'];
$user_date_of_birth = $_POST['user_date_of_birth'];
$update_query = "UPDATE users SET full_name = '$user_name', designation = '$user_designation', phone_number = '$user_phone_number', date_of_birth = '$user_date_of_birth' WHERE id = '$user_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Profile Edit Successfully!";
header('location: profile.php');

?>