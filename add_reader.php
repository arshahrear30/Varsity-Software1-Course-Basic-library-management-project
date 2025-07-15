<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Save Reader
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reader = [
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "due" => "n",
        "bookId" => 0
    ];

    $readers = json_decode(file_get_contents('readers.json'), true) ?? [];
    $readers[] = $reader;
    file_put_contents('readers.json', json_encode($readers, JSON_PRETTY_PRINT));

    header('Location: view_readers.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Reader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add Reader</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label>Reader ID:</label>
            <input type="number" name="id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Reader Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-warning" type="submit">Add Reader</button>
        <a href="dashboard.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
