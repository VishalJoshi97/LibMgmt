<?php
// config.php
$host = '127.0.0.1';
$db   = 'library';
$user = 'root';
$pass = ''; // set if you have a password
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // In production, log but don't echo sensitive info
    exit("Database connection failed: " . $e->getMessage());
}
