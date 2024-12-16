<?php
require_once 'config/database.php';

class User {
    private $id, $username, $password, $role_id;

    public function __construct(
        $username,
        $password,
        $role_id
    ){
        $this->username = $username;
        $this->password = $password;
        $this->role_id = $role_id;
    }

    public static function auth($username, $password)
    {
        try {
            global $pdo;
            $sql = "SELECT * FROM members WHERE username='" . $username . "'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$userData) {
                $_SESSION["username"] = $username;
                $_SESSION["error"] = "$username unregistered";
                header("location: /login");
                die();
            }

            $user = new User($userData['username'], $userData['password'], $userData['role_id']);

            if (password_verify($password, $user->password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;
                header("location: /membership");
                die();
            }

            $_SESSION["is_login"] = "Password Wrong";
            header("location: /login");
        }
        catch (PDOException $e)
        {
            echo $e->getMessage(); 
        }
    }

    public function registerUser()
    {
        global $pdo;
        $sql = "INSERT INTO members (username, password, role_id) VALUES ('$this->username', '$this->password', $this->role_id)";

        try {
            $pdo->exec($sql);
            echo "Register Success";
        }
        catch (PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}