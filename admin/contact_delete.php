<?php
require_once "dbc.php";
spy_sabbir_delete("contact_details", "id", $_GET['id']);
header('location: contact.php');

spy_sabbir_delete("contacts_messages", "id", $_GET['id']);
header('location: contact.php');
?>