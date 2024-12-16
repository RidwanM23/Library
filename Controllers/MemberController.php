<?php
require 'Controller.php';
require 'Model/Member.php';

class MemberController extends Controller {
    public static function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                $_SESSION['error'] = "Semua field harus diisi!";
                header("Location: /register");
                die();
            }

            $member = new Member($username, $password);
            $member->register();
            header("Location: /login"); // Redirect ke halaman login setelah pendaftaran
            die();
        }
        return self::view('Views/register.php');
    }
}

if ($uri == '/register') {
    return MemberController::register();
} 