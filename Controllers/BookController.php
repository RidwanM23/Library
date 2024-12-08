<?php

require 'Controller.php';
require 'Model/Book.php';

class BookController extends Controller {
    public static function index()
    {
        $query_string = $_SERVER["QUERY_STRING"] ?? null;
        var_dump(isset($query_string));
        if (isset($query_string)) {
            $filter = explode("=", $query_string);
            $listBook = Book::filter($filter[1]);
            return self::view('Views/Book.php', $listBook);
        }
        $listBook = Book::get();
        return self::view("Views/Book.php", $listBook);
    }
}
BookController::index();