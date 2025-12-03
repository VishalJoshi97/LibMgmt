<?php
// add.php
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Book</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <div class="header">
    <h1>Add Book</h1>
    <div><a href="index.php" class="btn secondary">← Back</a></div>
  </div>

  <div class="card">
    <form action="insert.php" method="post">
      <div class="form-row">
        <div>
          <label>Title</label>
          <input name="title" required>
        </div>
        <div>
          <label>Author</label>
          <input name="author">
        </div>
        <div>
          <label>Publisher</label>
          <input name="publisher">
        </div>
        <div>
          <label>Year</label>
          <input name="year" type="number" min="1000" max="2100">
        </div>
        <div>
          <label>ISBN</label>
          <input name="isbn">
        </div>
        <div>
          <label>Quantity</label>
          <input name="quantity" type="number" min="1" value="1">
        </div>
      </div>
      <div>
        <button class="btn" type="submit">Save Book</button>
        <a href="index.php" class="btn secondary" style="margin-left:8px;">Cancel</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
