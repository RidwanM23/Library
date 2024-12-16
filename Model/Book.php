<?php

require_once 'config/database.php';

class Book {
    private $id, $title, $author, $year;
    
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getYear()
    {
        return $this->year;
    }

    static function filter ($search)
    {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM books WHERE title LIKE ?");
        $query->execute([$search . '%']);
        return $query->fetchAll(PDO::FETCH_CLASS, 'Book');
    }

    static function get (){
        global $pdo;
        $sql = "SELECT * FROM books";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Book');
    }
}