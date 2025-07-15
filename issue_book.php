<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$books = json_decode(file_get_contents('books.json'), true) ?? [];
$readers = json_decode(file_get_contents('readers.json'), true) ?? [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $readerId = $_POST['readerId'];
    $bookId = $_POST['bookId'];

    foreach ($readers as &$reader) {
        if ($reader['id'] == $readerId && $reader['due'] == 'n') {
            foreach ($books as &$book) {
                if ($book['id'] == $bookId && $book['available'] == 'y') {
                    $reader['due'] = 'y';
                    $reader['bookId'] = $bookId;
                    $book['available'] = 'n';
                    $book['readerId'] = $readerId;
                    file_put_contents('books.json', json_encode($books, JSON_PRETTY_PRINT));
                    file_put_contents('readers.json', json_encode($readers, JSON_PRETTY_PRINT));
                    header('Location: view_books.php');
                    exit();
                }
            }
        }
    }
    echo "Issue failed. Either reader/book not found or not available.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Issue Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Issue Book</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label>Reader ID:</label>
            <input type="number" name="readerId" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Book ID:</label>
            <input type="number" name="bookId" class="form-control" required>
        </div>
        <button class="btn btn-primary" type="submit">Issue Book</button>
        <a href="dashboard.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
