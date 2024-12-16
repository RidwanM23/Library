<?php
require_once 'config/database.php';

class Borrow {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function borrowBook($bookId, $userId) {
        $borrowedDate = date('Y-m-d');
        $returnDate = date('Y-m-d', strtotime('+7 days'));

        $stmt = $this->db->prepare('INSERT INTO borrowed_books (book_id, user_id, borrowed_date, return_date) VALUES (?, ?, ?, ?)');
        return $stmt->execute([$bookId, $userId, $borrowedDate, $returnDate]);
    }

    public function calculateFine($userId) {
        $today = date('Y-m-d');
        $stmt = $this->db->prepare('SELECT * FROM borrowed_books WHERE user_id = ? AND return_date < ?');
        $stmt->execute([$userId, $today]);
        $overdueBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $totalFine = 0;
        foreach ($overdueBooks as $book) {
            $daysOverdue = (strtotime($today) - strtotime($book['return_date'])) / (60 * 60 * 24);
            $fine = $daysOverdue * 1000; // Example: fine is 1000 per day
            $totalFine += $fine;

            // Update fine in the database
            $updateStmt = $this->db->prepare('UPDATE borrowed_books SET fine = ? WHERE id = ?');
            $updateStmt->execute([$fine, $book['id']]);
        }

        return $totalFine;
    }
    public function getBorrowedBooks($userId) {
        $stmt = $this->db->prepare('SELECT b.title, bb.borrowed_date, bb.return_date, bb.fine FROM borrowed_books bb JOIN books b ON bb.book_id = b.id WHERE bb.user_id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>