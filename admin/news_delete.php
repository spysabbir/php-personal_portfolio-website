<?php
session_start();
require_once "dbc.php";
spy_sabbir_delete_with_photo("news", "id", $_GET['id'], "news", "news_cover_photo");
$_SESSION['deleted_status'] = "News Deleted Successfully!";
header('location: news.php');
?>