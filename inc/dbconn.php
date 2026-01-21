<?php
$host = 'localhost';
$dbname = 'employee_akpoly'; // your actual database name
$username = 'root';      // your actual database username
$password = '';          // your actual database password (empty for XAMPP by default)

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>