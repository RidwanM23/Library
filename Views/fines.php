<!DOCTYPE html>
<html>
<head>
    <title>Your Fines</title>
</head>
<body>
    <h1>Your Borrowed Books and Fines</h1>
    <p>Total Fine: <?= htmlspecialchars($totalFine) ?> IDR</p>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Borrowed Date</th>
            <th>Return Date</th>
            <th>Fine</th>
        </tr>
        <?php foreach ($borrowedBooks as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book['title']) ?></td>
                <td><?= htmlspecialchars($book['borrowed_date']) ?></td>
                <td><?= htmlspecialchars($book['return_date']) ?></td>
                <td><?= htmlspecialchars($book['fine']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>