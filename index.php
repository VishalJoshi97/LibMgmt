<?php
// index.php
require 'config.php';
$stmt = $pdo->query("SELECT * FROM books ORDER BY created_at DESC");
$books = $stmt->fetchAll();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Library — Books</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <div class="header">
    <h1>Library — Books</h1>
    <div>
      <a href="add.php" class="btn">+ Add Book</a>
    </div>
  </div>

  <div class="card">
    <?php if(count($books) === 0): ?>
      <p><small class="muted">No books found. Click "Add Book" to insert one.</small></p>
    <?php else: ?>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Year</th>
            <th>Qty</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($books as $b): ?>
          <tr>
            <td><?=htmlspecialchars($b['id'])?></td>
            <td><?=htmlspecialchars($b['title'])?></td>
            <td><?=htmlspecialchars($b['author'])?></td>
            <td><?=htmlspecialchars($b['publisher'])?></td>
            <td><?=htmlspecialchars($b['year'])?></td>
            <td><?=htmlspecialchars($b['quantity'])?></td>
            <td class="actions">
              <a class="edit" href="edit.php?id=<?=urlencode($b['id'])?>">Edit</a>
              <a class="del" href="delete.php?id=<?=urlencode($b['id'])?>" onclick="return confirm('Delete this book?')">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>
</body>
</html>
