<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Save Book
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book = [
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "author" => $_POST['author'],
        "available" => "y",
        "readerId" => 0
    ];

    $books = json_decode(file_get_contents('books.json'), true) ?? [];
    $books[] = $book;
    file_put_contents('books.json', json_encode($books, JSON_PRETTY_PRINT));

    header('Location: view_books.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Book</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label>Book ID:</label>
            <input type="number" name="id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Book Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Author Name:</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <button class="btn btn-success" type="submit">Add Book</button>
        <a href="dashboard.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
