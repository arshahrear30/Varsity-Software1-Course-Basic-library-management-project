<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$books = json_decode(file_get_contents('books.json'), true) ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>All Books</h2>
    <a href="dashboard.php" class="btn btn-secondary mb-3">Back</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Author</th><th>Available</th><th>Reader ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= htmlspecialchars($book['id']) ?></td>
                    <td><?= htmlspecialchars($book['name']) ?></td>
                    <td><?= htmlspecialchars($book['author']) ?></td>
                    <td><?= $book['available'] == 'y' ? 'Yes' : 'No' ?></td>
                    <td><?= $book['readerId'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
