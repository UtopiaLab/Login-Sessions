<?php

// Umayanga Madushan | AR/89520 | AF/16/12666 | www.umayanga.online

$db_servername = "localhost";
$db_username = "db_user";
$db_password = "pass123";
$db = "db_main";

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_password);
mysqli_select_db ($conn, $db);

// Check connection
$status = "Connection failed: " . $conn -> connect_error;
if ($conn -> connect_error) {
    die($status) . "<br/>";
}
//else {
//    echo "Database Connection Successful!";
//}
?>
