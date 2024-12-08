<?php

require_once 'Controller.php';

class HomeController extends Controller {
    public static function index()
    {
        return self::view("Views/Home.php");
    }
}

HomeController::index();