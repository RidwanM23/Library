<?php
if(!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
include('template/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peminjaman dan Pengembalian Buku</title>
</head>
<body>
    <h1>Peminjaman dan Pengembalian Buku</h1>

    <!-- Form Peminjaman Buku -->
    <h2>Peminjaman Buku</h2>
    <form method="POST" action="/borrow">
        <label for="book_id">ID Buku:</label>
        <select name="book_id" required>
            <?php foreach ($books as $book): ?>
                <option value="<?= $book->getId() ?>"><?= $book->getTitle() ?> (ID: <?= $book->getId() ?>)</option>
            <?php endforeach; ?>
        </select>
        <label for="member_id">ID Anggota:</label>
        <select name="member_id" required>
            <?php foreach ($members as $member): ?>
                <option value="<?= $member->getId() ?>"><?= $member->getUsername() ?> (ID: <?= $member->getId() ?>)</option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Pinjam Buku</button>
    </form>

    <hr>

    <!-- Form Pengembalian Buku -->
    <h2>Pengembalian Buku</h2>
    <form method="POST" action="/return">
        <label for="transaction_id">ID Transaksi:</label>
        <select name="transaction_id" required>
            <?php foreach ($transactions as $transaction): ?>
                <option value="<?= $transaction->id ?>">Transaksi ID: <?= $transaction->id ?> - Buku: <?= $transaction->book_title ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Kembalikan Buku</button>
    </form>
</body>
</html>