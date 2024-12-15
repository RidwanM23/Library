<?php
if(!defined('SECURE_ACCESS'))
{
    die('Direct access not permited');
}
include('template/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Anggota</title>
</head>
<body>
    <h1>Pendaftaran Anggota</h1>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>
    <form method="POST" action="/register">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>