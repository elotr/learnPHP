<?php

namespace App\Models;

use App\DB;

class User extends Model{
    static $table = 'users';
    public $id;
    public $email;
    public $password;

    static function auth() {
        if(isset($_SESSION['userID']) && $_SESSION['userID']) {
            return self::find($_SESSION['userID']);
        }
        return false;
    }
}