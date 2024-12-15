<?php
require_once 'config/database.php';

class Transaction {
    private $id, $book_id, $member_id, $borrow_date, $return_date;

    public function __construct($book_id, $member_id) {
        $this->book_id = $book_id;
        $this->member_id = $member_id;
        $this->borrow_date = date('Y-m-d');
    }

    public function save() {
        global $pdo;
        $sql = "INSERT INTO transactions (book_id, member_id, borrow_date) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->book_id, $this->member_id, $this->borrow_date]);
    }

    public static function returnBook($transaction_id) {
        global $pdo;
        $sql = "UPDATE transactions SET return_date = NOW() WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$transaction_id]);
    }

    public static function calculateFine($return_date) {
        $due_date = date('Y-m-d', strtotime($return_date . ' + 7 days'));
        if (date('Y-m-d') > $due_date) {
            $days_late = (strtotime(date('Y-m-d')) - strtotime($due_date)) / (60 * 60 * 24);
            return $days_late * 1000; // Denda 1000 per hari
        }
        return 0;
    }

    public static function getAll() {
        global $pdo;
        $sql = "SELECT t.id, b.title AS book_title FROM transactions t JOIN books b ON t.book_id = b.id WHERE t.return_date IS NULL"; // Pastikan tabel 'transactions' ada dan memiliki data
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Transaction');
    }
} 