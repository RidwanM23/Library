<?php
if(!defined('SECURE_ACCESS'))
{
    die('Direct access not permitted');
}
include('template/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="Login-Regis-style.css">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-image: linear-gradient(to right, #a16d0585, #fcaa0875);">

<div class="main-content login-panel">
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger text-center">
        <?php 
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
        </div>
        <?php endif; ?>
        <br>
        <form method="post" action="/login">
            <div class="input-group mb-25">
                <span class="input-group-text"><i class="fa-reguler fa-user"></i></span>
                <input
                 type="text"
                 class="form-control"
                 placeholder="username"
                 name="username"
                 required
                 >
            </div>
        <div class="input-group mb-20">
            <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
            <input type="password" class="form-control rounded-end" placeholder="Password" name="password" required>
            <button style="margin-top: 2rem; background-color: #fcaa08; border: none;" class="btn btn-primary w-100 login-btn">Login</button>
            <div class="mb-0">
                Belum punya akun? <a style="text-decoration: none;" href="register" type="submit">Register</a>
            </div>
        </form>
        <br>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php include('template/footer.php') ?>
</body>
</html>