<!DOCTYPE html>
<html>
<head>
    <title>Borrow Book</title>
</head>
<body>
    <h1>Borrow a Book</h1>
    <form method="POST">
        <label>Book ID:</label>
        <input type="number" name="book_id" required><br>

        <label>User ID:</label>
        <input type="number" name="user_id" required><br>

        <button type="submit">Borrow</button>
    </form>

    <?php if (isset($books)): ?>
        <h2>Available Books</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
            </tr>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= $book->getId() ?></td>
                    <td><?= $book->getTitle() ?></td>
                    <td><?= $book->getAuthor() ?></td>
                    <td><?= $book->getYear() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>