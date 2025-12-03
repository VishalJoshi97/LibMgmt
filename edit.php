<?php
// edit.php
require 'config.php';
$id = $_GET['id'] ?? null;
if (!$id) { header('Location: index.php'); exit; }

$stmt = $pdo->prepare("SELECT * FROM books WHERE id = :id");
$stmt->execute([':id'=>$id]);
$book = $stmt->fetch();

if (!$book) { exit('Book not found'); }
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Edit Book</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <div class="header">
    <h1>Edit Book</h1>
    <div><a href="index.php" class="btn secondary">← Back</a></div>
  </div>

  <div class="card">
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?=htmlspecialchars($book['id'])?>">
      <div class="form-row">
        <div>
          <label>Title</label>
          <input name="title" value="<?=htmlspecialchars($book['title'])?>" required>
        </div>
        <div>
          <label>Author</label>
          <input name="author" value="<?=htmlspecialchars($book['author'])?>">
        </div>
        <div>
          <label>Publisher</label>
          <input name="publisher" value="<?=htmlspecialchars($book['publisher'])?>">
        </div>
        <div>
          <label>Year</label>
          <input name="year" type="number" min="1000" max="2100" value="<?=htmlspecialchars($book['year'])?>">
        </div>
        <div>
          <label>ISBN</label>
          <input name="isbn" value="<?=htmlspecialchars($book['isbn'])?>">
        </div>
        <div>
          <label>Quantity</label>
          <input name="quantity" type="number" min="1" value="<?=htmlspecialchars($book['quantity'])?>">
        </div>
      </div>
      <div>
        <button class="btn" type="submit">Update Book</button>
        <a href="index.php" class="btn secondary" style="margin-left:8px;">Cancel</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
