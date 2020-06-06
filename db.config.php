<?php
$SERVER_AD = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB_NAME = 'trichdan';

$conn = new mysqli($SERVER_AD, $USERNAME, $PASSWORD, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}