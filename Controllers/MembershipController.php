<?php
require_once 'Controller.php';

class MembershipController extends Controller
{
    public static function index()
    {
        return self::view ('Views/membership.php');
    }
}

MembershipController::index();