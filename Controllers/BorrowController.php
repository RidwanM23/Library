<?php
require_once 'app/models/Borrow.php';

class BorrowController {
    private $borrowModel;

    public function __construct() {
        $this->borrowModel = new Borrow();
    }

    public function borrow() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->borrowModel->borrowBook($_POST['book_id'], $_SESSION['user']['id']);
            header('Location: /borrowed');
        }
        require 'app/views/borrow/borrow.php';
    }

    public function fines() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        $totalFine = $this->borrowModel->calculateFine($_SESSION['user']['id']);
        $borrowedBooks = $this->borrowModel->getBorrowedBooks($_SESSION['user']['id']);
        require 'app/views/borrow/fines.php';
    }
}
?>