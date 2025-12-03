<?php
$host = "sql313.infinityfree.com";
$db   = "if0_40588359_libraryMgmt";
$user = "if0_40588359";
$pass = "abcd8792101200";  // <-- put here

$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
