<?php
// update.php
require 'config.php';

$id = $_POST['id'] ?? null;
$title = trim($_POST['title'] ?? '');
$author = trim($_POST['author'] ?? '');
$publisher = trim($_POST['publisher'] ?? '');
$year = !empty($_POST['year']) ? (int)$_POST['year'] : null;
$isbn = trim($_POST['isbn'] ?? '');
$quantity = !empty($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

if (!$id || $title === '') {
    exit('Invalid input. <a href="index.php">Back</a>');
}

$sql = "UPDATE books SET title=:title, author=:author, publisher=:publisher, year=:year, isbn=:isbn, quantity=:quantity WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':title'=>$title,
    ':author'=>$author,
    ':publisher'=>$publisher,
    ':year'=>$year,
    ':isbn'=>$isbn,
    ':quantity'=>$quantity,
    ':id'=>$id
]);

header('Location: index.php');
exit;
