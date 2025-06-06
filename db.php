<?php
$host = 'localhost';
$dbname = 'eschool_db'; // your DB name
$username = 'root';     // default for XAMPP
$password = '';         // default is empty

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: force utf8
    $conn->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>