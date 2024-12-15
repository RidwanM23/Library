<?php
require_once 'config/database.php';

class Member {
    private $id, $username, $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Hash password
    }

    public function register() {
        global $pdo;
        $sql = "INSERT INTO members (username, password) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->username, $this->password]);
    }

    public static function auth($username, $password) {
        global $pdo;
        $sql = "SELECT * FROM members WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $member = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($member && password_verify($password, $member['password'])) {
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }

    public static function getAll() {
        global $pdo;
        $sql = "SELECT * FROM members"; // Pastikan tabel 'members' ada dan memiliki data
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Member');
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }
} 