<?php
// insert.php
require 'config.php';

$title = trim($_POST['title'] ?? '');
$author = trim($_POST['author'] ?? '');
$publisher = trim($_POST['publisher'] ?? '');
$year = !empty($_POST['year']) ? (int)$_POST['year'] : null;
$isbn = trim($_POST['isbn'] ?? '');
$quantity = !empty($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

if ($title === '') {
    exit('Title is required. <a href="add.php">Go back</a>');
}

$sql = "INSERT INTO books (title, author, publisher, year, isbn, quantity) VALUES
        (:title, :author, :publisher, :year, :isbn, :quantity)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':title'=>$title,
    ':author'=>$author,
    ':publisher'=>$publisher,
    ':year'=>$year,
    ':isbn'=>$isbn,
    ':quantity'=>$quantity
]);

header('Location: index.php');
exit;
