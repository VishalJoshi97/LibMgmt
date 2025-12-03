<?php
// delete.php
require 'config.php';
$id = $_GET['id'] ?? null;
if (!$id) { header('Location: index.php'); exit; }

$stmt = $pdo->prepare("DELETE FROM books WHERE id = :id");
$stmt->execute([':id'=>$id]);

header('Location: index.php');
exit;
