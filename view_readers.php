<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$readers = json_decode(file_get_contents('readers.json'), true) ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Readers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>All Readers</h2>
    <a href="dashboard.php" class="btn btn-secondary mb-3">Back</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Due Book?</th><th>Book ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($readers as $reader): ?>
                <tr>
                    <td><?= htmlspecialchars($reader['id']) ?></td>
                    <td><?= htmlspecialchars($reader['name']) ?></td>
                    <td><?= $reader['due'] == 'y' ? 'Yes' : 'No' ?></td>
                    <td><?= $reader['bookId'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
