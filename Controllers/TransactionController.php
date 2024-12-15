<?php
require 'Controller.php';
require 'Model/Transaction.php';
require 'Model/Book.php';
require 'Model/Member.php';

class TransactionController extends Controller {
    public static function borrowBook() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $book_id = $_POST['book_id'];
            $member_id = $_POST['member_id'];
            $transaction = new Transaction($book_id, $member_id);
            $transaction->save();
            header("Location: /Book"); // Redirect ke halaman buku setelah peminjaman
            die();
        }
        return self::view('Views/borrow.php'); // Tampilkan form peminjaman
    }

    public static function returnBook() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $transaction_id = $_POST['transaction_id'];
            // Debugging: Tampilkan ID transaksi
            error_log("Transaction ID: " . $transaction_id); // Log ID transaksi

            Transaction::returnBook($transaction_id);
            header("Location: /Book"); // Redirect ke halaman buku setelah pengembalian
            die();
        }
        return self::view('Views/borrow.php'); // Tampilkan form pengembalian
    }

    public static function borrow() {
        $books = Book::get();
        $members = Member::getAll();
        $transactions = Transaction::getAll();

        // Debugging: Tampilkan jumlah data yang diambil
        error_log("Jumlah buku: " . count($books));
        error_log("Jumlah anggota: " . count($members));
        error_log("Jumlah transaksi: " . count($transactions));

        return self::view('Views/borrow.php', [
            'books' => $books,
            'members' => $members,
            'transactions' => $transactions
        ]);
    }
}

if ($uri == '/borrow') {
    return TransactionController::borrowBook();
}