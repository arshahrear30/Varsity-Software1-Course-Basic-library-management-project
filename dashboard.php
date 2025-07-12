<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Library System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Library Dashboard</a>
    <div>
      <span class="text-white me-3">Logged in as <?= $_SESSION['username'] ?></span>
      <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h2>Welcome, <?= $_SESSION['username'] ?>!</h2>
    <p>Choose an option:</p>

    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="add_book.php" class="btn btn-success w-100">➕ Add Book</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="view_books.php" class="btn btn-info w-100">📚 View Books</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="add_reader.php" class="btn btn-warning w-100">👤 Add Reader</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="issue_book.php" class="btn btn-primary w-100">📖 Issue Book</a>
        </div>
    </div>
</div>

</body>
</html>
      
      <hr>
<h2>Developers</h2>
<ul>
    
    <li><a href="https://www.facebook.com/arshahrear.cse" target="_blank">A R Shahrear</a></li>

</ul>
