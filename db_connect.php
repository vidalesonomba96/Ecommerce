<?php
// EcommerceProject/db_connect.php

// --- START: INFINITYFREE DATABASE DETAILS ---

$servername = "sql210.infinityfree.com"; // From your MySQL Connection Details screenshot
$username_db = "if0_39172489";           // This is your correct MySQL Username
$password_db = "PapiVidal1996";          // Your password from the Account Details screenshot
$dbname = "if0_39172489_users_db";     // Your database name from the List of MySQL Databases

// --- END: INFINITYFREE DATABASE DETAILS ---

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    // This will write the error to a log file instead of showing it to users.
    error_log("Database connection failed: " . $conn->connect_error);
    // Show a generic message to the user.
    die("Error: Unable to connect to the service. Please try again later.");
}
?>
