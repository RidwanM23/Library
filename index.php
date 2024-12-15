<?php
session_start();
define('SECURE_ACCESS', true);

$uri = $_SERVER['REQUEST_URI'];
$query_string = $_SERVER["QUERY_STRING"] ?? null;


if ($uri == "/" ) {
    return require 'Controllers/HomeController.php';
}

if ($uri == "/Book") {
    return require 'Controllers/BookController.php';
}
if ($uri == "/Book?" . $query_string) {
    return require 'Controllers/BookController.php';
}

if ($uri == "/register" || $uri == "/login") {
    return require "Controllers/AuthController.php";
}
if ($uri == "/visitor") {
    return require "Controllers/VisitorController.php";
}
if ($uri == "/membership") {
    return require "Controllers/MembershipController.php";
}
if ($uri == "/borrow") {
    return require "Controllers/TransactionController.php";
}

return require 'Views/notFoundPage.php';

