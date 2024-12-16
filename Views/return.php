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
    <title>Pengembalian Buku</title>
</head>
<body>
    <h1>Pengembalian Buku</h1>
    <form method="POST">
        <label for="transaction_id">ID Transaksi:</label>
        <input type="text" name="transaction_id" required>
        <button type="submit">Kembalikan Buku</button>
    </form>
</body>
</html>