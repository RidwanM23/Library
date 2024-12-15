<?php

require 'Controller.php';
require 'Model/User.php';

class AuthController extends Controller
{
    public static function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                $_SESSION["error"] = "Semua field harus diisi!";
                header("location: /login");
                die();
            }

            if (User::auth($username, $password)) {
                header("location: /membership"); // Redirect ke halaman membership setelah login
                die();
            } else {
                $_SESSION["error"] = "Username atau password salah!";
                header("location: /login");
                die();
            }
        }
        return self::view('Views/login.php');
    }

    public static function register()
    {
        if(count($_POST) > 0)
        {
            $username = htmlspecialchars($_POST['username']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if ($username == "" || $_POST['password'] == "") {
            $_SESSION["error"] = "All fields must be filled!";
            $_SESSION["username$username"] = $username;
            $_SESSION["error"] = "All fields must be filled!";
            header("location: /register");
            die();
}

        $user = new user($username, $password, 1);
        $user->registerUser();

        }
        return self::view('Views/register.php');
    }
}

if ($uri == '/login') {
    return AuthController::login();
}
AuthController::register();